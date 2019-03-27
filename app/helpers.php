<?php

use Illuminate\Support\HtmlString;
use League\CommonMark\CommonMarkConverter;

function locale()
{
    return config('app.locale');
}
function markdown($html)
{
    return new HtmlString(
        app(CommonMarkConverter::class)->convertToHtml($html)
    );
}
