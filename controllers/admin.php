<?php
/******************************
Copyright © 2018 Stéphane Morin
******************************/

namespace NF\Widgets\Discord\Controllers;

use NF\NeoFrag\Loadables\Controllers\Widget as Controller_Widget;

class Admin extends Controller_Widget
{
	public function index($settings = [])
	{
		$this	->	css('discord')
				->	js('../js/jquery.mCustomScrollbar.min')
				->	css('../js/jquery.mCustomScrollbar.min');
		
		return $this	->	view('admin', $settings);
	}
}