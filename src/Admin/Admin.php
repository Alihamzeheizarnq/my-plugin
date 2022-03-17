<?php
namespace App\Admin;

use App\Page\AdminPage;

class Admin {

	public function __construct () {
		add_action('admin_menu' , [$this , 'addMenu']);
	}


	public function addMenu () {

		add_menu_page(
			'اشتراک ها'  ,
			'اشتراک ها' ,
			'manage_options' ,
			'subscriber',
			[new AdminPage() , 'index']
		);
	}
}