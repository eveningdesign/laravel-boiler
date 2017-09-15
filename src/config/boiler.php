<?php

return [
    'styling' => [
        'headings' => 'h3',
        'classes' => [
            'button-size' => 'btn-xs',
            'table' => 'table table-bordered table-striped',
        ],
    ],
    'blade' => [
        'layout' => "@extends('app')",
        'section' => "@section('content')",
    ],
];