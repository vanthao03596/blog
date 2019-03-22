<?php

namespace Domain\Article\Models;

use Dimsav\Translatable\Translatable;
use Domain\Model;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Facades\Log;

class Article extends Model
{
    use Translatable;

    public $translatedAttributes = ['name', 'slug', 'content'];

    protected $dates = ['publish_date'];

    protected $casts = [
        'published' => 'boolean'
    ];

    public function scopePublished(Builder $query)
    {
        $query->where('published', true);
    }

    public function publish()
    {
        $this->published = true;
        if (! $this->publish_date) {
            $this->publish_date = now();
        }
        $this->save();
        Log::info("Post `{$this->title}` published.");
    }

    public function getShortContentAttribute()
    {
        return tease($this->content, 120);
    }
}
