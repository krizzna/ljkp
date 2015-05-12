<?php defined('SYSPATH') or die('No direct access allowed.');

return array(
    'encrypt_key' => 'fjdsjkfdskjfurew', 
    'cookie_salt' => 'fjsdijeihrewhbfsugfuyegwufewgwb',
    'cookie_lifetime' => Date::YEAR,
    'session_lifetime' => 0,
    'header' => array
    (
	'title' => 'LJKP',
	'keyword' => 'LJKP',
    ),
    'account'	=> array
    (
	'create'	=> array
	(
	    'username'	=> array
	    (
		'min_length'	=> 2,
		'max_length'	=> 12,
		'format'	=> 'alpha_numeric', // alpha_dash, alpha
	    ),
	    'password'	=> array
	    (
		'min_length'	=> 6,
	    )
	),
    ),
);
