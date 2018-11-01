<?php
/******************************
Copyright © 2018 Stéphane Morin
******************************/

namespace NF\Widgets\Discord\Controllers;

use NF\NeoFrag\Loadables\Controllers\Widget_Checker;

class Checker extends Widget_Checker
{
	public function index($settings = [])
	{
		return [
			'server_id'	=> $settings['server_id'],
			'color'		=> $settings['color'],
			'connect' 	=> $settings['connect'],
			'height' 	=> $settings['height']
		];
	}
}