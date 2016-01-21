<?php

/**
 * Fansoro Bacon Ipsum Plugin
 *
 * (c) Romanenko Sergey / Awilum <awilum@msn.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

// Shortcode: {bacon}
Shortcode::add('bacon', 'bacon');

function bacon($attributes)
{
    // Extract
    extract($attributes);

    if (isset($type) && in_array($type, ['all-meat', 'meat-and-filler'])) {
        $type = '?type='.$type;
    } else {
        $type = '?type='.Config::get('plugins.bacon-ipsum.type');
    }

    if (isset($p)) {
        $p = '&paras='.$p;
    } else {
        $p = '&paras='.Config::get('plugins.bacon-ipsum.p');
    }

    if (isset($sentences)) {
        $sentences = '&sentences='.$sentences;
    } else {
        $sentences = '&sentences='.Config::get('plugins.bacon-ipsum.sentences');
    }

    if (isset($start_with_lorem) && in_array($start_with_lorem, ['0', '1'])) {
        $start_with_lorem = '&start-with-lorem='.$start_with_lorem;
    } else {
        $start_with_lorem = '&start-with-lorem='.Config::get('plugins.bacon-ipsum.start_with_lorem');
    }

    if (isset($format) && in_array($format, ['json', 'text', 'html'])) {
        $format = '&format='.$format;
    } else {
        $format = '&format='.Config::get('plugins.bacon-ipsum.format');
    }

    return file_get_contents("http://baconipsum.com/api/{$type}{$p}{$sentences}{$start_with_lorem}{$format}");
}
