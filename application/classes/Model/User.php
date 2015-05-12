<?php defined('SYSPATH') OR die('No direct access allowed.');

# application/Model/User.php
class Model_User extends Model_Auth_User {

    // This class can be replaced or extended
    protected $_table_columns = array(
	'id'   => NULL,
	'email'   => NULL,
	'username'  => NULL,
	'password'  => NULL,
	'logins'  => NULL,
	'last_login' => NULL,
    );
 
    protected $_table_name = 'users';

} // End User Model
