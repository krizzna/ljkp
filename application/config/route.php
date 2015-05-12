<?php defined('SYSPATH') or die('No direct script access.');

/**************************************************************
 * Default Router
 **************************************************************/
Route::set('default', '(<controller>(/<action>(/<id>)))')
    ->defaults(array(
        'controller' => 'home',
        'action'     => 'index',
    ));
