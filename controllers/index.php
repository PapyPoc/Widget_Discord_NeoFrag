<?php
/******************************
Copyright © 2018 Stéphane Morin
*****************************
*/

namespace NF\Widgets\Discord\Controllers;

use NF\NeoFrag\Loadables\Controllers\Widget as Controller_Widget;

class Index extends Controller_Widget
{
	public function index($settings = [])
	{
		$this	->	css('discord')
				->	js('jquery.mCustomScrollbar.min')
				->	css('jquery.mCustomScrollbar.min');
		
		return $this->view('index', $settings);
	}
}