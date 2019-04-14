<?php

$header = <<<EOF
This file is part of the mingyoung/wechat-playground.

(c) 张铭阳 <mingyoungcheung@gmail.com>

This source file is subject to the MIT license that is bundled
with this source code in the file LICENSE.
EOF;

return PhpCsFixer\Config::create()
    ->setRules([
        '@Symfony' => true,
        'phpdoc_summary' => false,
        'header_comment' => ['header' => $header],
        'ordered_imports' => true,
    ])
    ->setFinder(
        PhpCsFixer\Finder::create()
            ->exclude('vendor')
            ->in(__DIR__)
    )
    ->setUsingCache(false)
;
