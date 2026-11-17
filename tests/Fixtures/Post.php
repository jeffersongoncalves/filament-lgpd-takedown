<?php

namespace JeffersonGoncalves\Filament\LgpdTakedown\Tests\Fixtures;

use Illuminate\Database\Eloquent\Model;
use JeffersonGoncalves\LgpdTakedown\Contracts\ReportableContent;

class Post extends Model implements ReportableContent
{
    protected $guarded = [];

    public $timestamps = false;

    public function takeDown(): void
    {
        $this->forceFill(['hidden_at' => now()])->save();
    }

    public function restore(): void
    {
        $this->forceFill(['hidden_at' => null])->save();
    }

    public function contentAuthor(): ?Model
    {
        return TestUser::find($this->user_id);
    }
}
