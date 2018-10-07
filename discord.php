<?php if (!defined('NEOFRAG_CMS')) exit;
/**************************************************************************
Copyright © 2015 Michaël BILCOT & Jérémy VALENTIN

This file is part of NeoFrag.

NeoFrag is free software: you can redistribute it and/or modify
it under the terms of the GNU Lesser General Public License as published by
the Free Software Foundation, either version 3 of the License, or
(at your option) any later version.

NeoFrag is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
GNU Lesser General Public License for more details.

You should have received a copy of the GNU Lesser General Public License
along with NeoFrag. If not, see <http://www.gnu.org/licenses/>.
**************************************************************************/

class w_discord extends Widget
{
	public $title       = 'Discord de Papy Poc';
	public $description = 'Widget du Discord créer par Papy_Poc';
	public $link        = 'http://www.neofrag.com';
	public $author      = 'Papy_Poc';
	public $licence     = 'http://www.neofrag.com/license.html LGPLv3';
	public $version     = '2.0';
	public $nf_version  = 'Alpha 0.2.1';
	public $path        = __FILE__;
	public $types       = array(
		'index' => 'Aperçu du serveur'
	);
}

/*
NeoFrag Alpha 0.1.6
./widgets/discord/discord.php
*/
