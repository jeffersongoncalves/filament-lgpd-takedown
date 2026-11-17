<?php

use JeffersonGoncalves\Filament\LgpdTakedown\LgpdTakedownPlugin;
use JeffersonGoncalves\Filament\LgpdTakedown\Resources\ContentReports\ContentReportResource;
use JeffersonGoncalves\Filament\LgpdTakedown\Resources\ContentReports\Pages\ListContentReports;
use JeffersonGoncalves\Filament\LgpdTakedown\Resources\ContentReports\Pages\ViewContentReport;
use JeffersonGoncalves\Filament\LgpdTakedown\Tests\Fixtures\Post;
use JeffersonGoncalves\Filament\LgpdTakedown\Tests\Fixtures\TestUser;
use JeffersonGoncalves\LgpdTakedown\Enums\ReportCategory;
use JeffersonGoncalves\LgpdTakedown\Enums\ReporterRole;
use JeffersonGoncalves\LgpdTakedown\Enums\ReportStatus;
use JeffersonGoncalves\LgpdTakedown\Facades\LgpdTakedown;
use JeffersonGoncalves\LgpdTakedown\Models\ContentReport;
use Livewire\Livewire;

beforeEach(function () {
    $this->actingAs($moderator = TestUser::create(['name' => 'Moderator', 'email' => 'mod@example.com']));
    $this->post = Post::create(['user_id' => $moderator->id, 'body' => 'Hello']);
});

function notice(Post $post, ReportCategory $category = ReportCategory::Bullying): ContentReport
{
    return LgpdTakedown::report($post, 'Maria', 'mae@example.com', ReporterRole::Victim, $category, 'It targets my son.');
}

it('lists open notices with a navigation badge', function () {
    $report = notice($this->post);

    Livewire::test(ListContentReports::class)
        ->assertCanSeeTableRecords([$report])
        ->assertSee('Bullying')
        ->assertSee('mae@example.com');

    expect(ContentReportResource::getNavigationBadge())->toBe('1');
});

it('removes content with a reason', function () {
    $report = notice($this->post);

    Livewire::test(ListContentReports::class)
        ->callTableAction('remove', $report, ['decision' => 'Bullying a classmate.'])
        ->assertHasNoTableActionErrors();

    expect($report->fresh())->status->toBe(ReportStatus::Removed)->decision->toBe('Bullying a classmate.')
        ->and($this->post->fresh()->hidden_at)->not->toBeNull();
});

it('requires a reason to reject', function () {
    $report = notice($this->post);

    Livewire::test(ListContentReports::class)
        ->callTableAction('reject', $report, ['decision' => ''])
        ->assertHasTableActionErrors(['decision' => 'required']);
});

it('records the authority report for grave content', function () {
    $report = notice($this->post, ReportCategory::Grooming);

    Livewire::test(ListContentReports::class)
        ->filterTable('status', ReportStatus::Removed->value)
        ->assertSee('Report to the authorities')
        ->callTableAction('reportedToAuthority', $report, ['protocol' => 'PF-1']);

    expect($report->fresh())->authority_protocol->toBe('PF-1')->owesAuthorityReport()->toBeFalse();
});

it('decides an appeal from the view page and restores the content', function () {
    $report = LgpdTakedown::remove(notice($this->post), 'Bullying.');
    LgpdTakedown::appeal($report, 'It was a joke.');

    Livewire::test(ViewContentReport::class, ['record' => $report->getKey()])
        ->assertSee('It was a joke.')
        ->callAction('decideAppeal', ['restore' => true, 'decision' => 'Context confirmed.']);

    expect($report->fresh()->restored_at)->not->toBeNull()
        ->and($this->post->fresh()->hidden_at)->toBeNull();
});

it('applies the fluent plugin options', function () {
    LgpdTakedownPlugin::get()->navigationGroup('LGPD')->slug('notices');

    expect(ContentReportResource::getNavigationGroup())->toBe('LGPD')
        ->and(ContentReportResource::getSlug())->toBe('notices');
});
