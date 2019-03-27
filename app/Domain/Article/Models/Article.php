<?php


namespace Domain\Article\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Domain\Model;

class Article extends Model
{
    use Sluggable;

    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'name'
            ]
        ];
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function asset_url()
    {
        return asset('media/public/' . $this->image_url);
    }
}
