<?php if (!defined('NEOFRAG_CMS')) exit;
/**************************************************************************
Copyright © 2018 Morin Stéphane
**************************************************************************/

class w_discord_c_admin extends Controller_Widget
{
	public function index($settings = [])
	{
				$this	->	css('discord')
						->	js('jquery.mCustomScrollbar.min')
						->	css('jquery.mCustomScrollbar.min');
				
		return $this->view('admin', $settings);
	}
}

/*
NeoFrag Alpha 0.2.1
./widgets/discord/controllers/admin.php
*/
