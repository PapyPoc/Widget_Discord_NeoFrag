<?php
/**
 * https://neofr.ag
 * @author: Papy Poc <https://github.com/PapyPoc>
 */

namespace NF\Widgets\Discord;

use NF\NeoFrag\Addons\Widget;

class Discord extends Widget
{
	protected function __info()
	{
		return [
			'title'       => $this->lang('Discord'),
			'description' => 'Affiche votre Discord',
			'link'        => 'https://neofr.ag',
			'author'      => 'Stéphane Morin',
			'license'     => 'LGPLv3 <https://neofr.ag/license>',
			'version'     => '2.0',
			'depends'     => [
				'neofrag' => 'Alpha 0.2'
			]
		];
	}
}