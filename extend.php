<?php

namespace odoorbell\lxgwwenkaifont;

use Flarum\Extend;
use Flarum\Frontend\Document;

return [
    (new Extend\Frontend('forum'))
        ->css(__DIR__.'/less/forum.less'),  
    (new Extend\Frontend('admin'))
        ->css(__DIR__.'/less/admin.less'), 
    ->content(function (Document $document) {
            $document->head[] = '<link href="https://cdn.staticfile.org/lxgw-wenkai-screen-webfont/1.7.0/lxgwwenkaiscreen.css" rel="stylesheet">';
        })
];
