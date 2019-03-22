<?php
namespace Domain\Article\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Domain\Model;

class ArticleTranslation extends Model
{
    use Sluggable;

    public $timestamps = false;

    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'name',
            ],
        ];
    }
}
