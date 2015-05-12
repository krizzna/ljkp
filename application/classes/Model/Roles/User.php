<?php defined('SYSPATH') OR die('No direct access allowed.');

# application/Model/Roles/User.php
class Model_Roles_Users extends ORM {

    // This class can be replaced or extended
    protected $_table_columns = array(
	'user_id' => NULL, 
	'role_id' => NULL,
    );
 
    protected $_table_name = 'roles_users';
 

} // End Roles User Model
