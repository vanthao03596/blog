<?php
namespace Domain\Article\Models;

use Dimsav\Translatable\Translatable;
use Domain\Model;

class Article extends Model
{
    use Translatable;

    public $translatedAttributes = ['name', 'slug', 'content'];
}
