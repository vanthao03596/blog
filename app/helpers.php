<?php

function locale()
{
    return config('app.locale');
}
function sanitizeForTease($string)
{
        $string = trim($string);
        //remove html
        $string = strip_tags($string);
        //replace multiple spaces
        $string = preg_replace("/\s+/", ' ', $string);
        return $string;
}

function tease($string, $length = 200, $moreTextIndicator = '...')
{
    $sanitizedString = sanitizeForTease($string);
        if (strlen($sanitizedString) == 0) {
            return $string;
        }
        if (strlen($sanitizedString) <= $length) {
            return $string;
        }
        $ww = wordwrap($sanitizedString, $length, "\n");
        $shortenedString = substr($ww, 0, strpos($ww, "\n")).$moreTextIndicator;
        return $shortenedString;
}


