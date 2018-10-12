<?php if (!defined('NEOFRAG_CMS')) exit;
/**************************************************************************
Copyright © 2018 Morin Stéphane
**************************************************************************/

class w_discord_c_checker extends Controller_Widget
{
	public function index($settings = [])
	{
		return [
			'server_id'	=> $settings['server_id'],
			'color'	=> $settings['color'],
			'connect' => $settings['connect'],
			'height' => $settings['height']
		];
	}
}

/*
NeoFrag Alpha 0.2.1
./widgets/discord/controllers/checker.php
*/
