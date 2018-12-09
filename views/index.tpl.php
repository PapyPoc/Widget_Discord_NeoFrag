<?php
$discord = json_decode(utf8_encode(file_get_contents("https://discordapp.com/api/guilds/".($server_id ?: $this->config->server_id)."/widget.json")),false);
function array_sort($array, $on, $order=SORT_ASC) {$new_array = array(); $sortable_array = array(); if (count($array) > 0) { foreach ($array as $k => $v) { if (is_array($v)) { foreach ($v as $k2 => $v2) { if ($k2 == $on) { $sortable_array[$k] = $v2; }}} else {$sortable_array[$k] = $v;}} switch ($order) { case SORT_ASC: asort($sortable_array); break; case SORT_DESC: arsort($sortable_array); break;} foreach ($sortable_array as $k => $v) {$new_array[$k] = $array[$k];}} return $new_array;}
?>
<div id="discord-widget">
	<div class="wdiscord-theme-<?php echo ${'color'};?>">
		<div class="wdiscord-header">
			<a class="wdiscord-logo" href="https://discordapp.com?utm_source=Discord%20Widget&utm_medium=Logo" target="_blank"></a>
			<span class="wdiscord-header-count">
			<strong><?php echo count($discord->members);?></strong>
<?php if (count($discord->members)<=1) {?>
			<span><?php echo $this->lang('membre'); ?></span>
<?php } else {?>
			<span><?php echo $this->lang('membres'); ?></span>
<?php }?>
			</span>
		</div>
		<div class="wdiscord-body mCustomScrollbar" data-mcs-theme="minimal-dark" style="height:<?php echo ${'height'}?>px;"> <!-- Pour choisir son theme de la barre de défillement aller sur http://manos.malihu.gr/repository/custom-scrollbar/demo/examples/scrollbar_themes_demo.html -->
<?php foreach (array_sort($discord->channels, 'position', SORT_ASC) as $nom){?>
			<div class="wdiscord-channel">
				<div class="wdiscord-channel-name"><?php echo $nom->name;?></div>	
	<?php foreach ($discord->members as $username){
		if (isset($username->channel_id)) {
			if ($nom->id===$username->channel_id) {?>
					<div class="wdiscord-member">
						<div class="wdiscord-member-avatar">
							<img src="<?php echo $username->avatar_url?>">
						</div>
						<span class="wdiscord-member-username"><?php echo $username->username;?></span>
				<?php if ($username->self_mute==true) { ?>
						<span class="wdiscord-icon wdiscord-icon-mute"></span>
				<?php } if ($username->self_deaf==true) {?>
						<span class="wdiscord-icon wdiscord-icon-deaf"></span>
				<?php }?>
					</div>
			<?php }
		 }
	} ?>
			</div>
<?php }?>
			<div class="wdiscord-members-online"><?php echo $this->lang('ligne'); ?></div>
<?php foreach ($discord->members as $username){?>
			<div class="wdiscord-member">
				<div class="wdiscord-member-avatar">
					<img src="<?php echo $username->avatar_url;?>">
					<span class="wdiscord-member-status wdiscord-member-status-<?php echo $username->status;?>">
					</span>
				</div>
				<span class="wdiscord-member-username"><?php echo $username->username;?></span>
				<span class="wdiscord-member-game"><?php if (isset($username->game)) {echo $username->game->name;}?></span>
			</div>
<?php }?>
		</div>
		<div class="wdiscord-footer">
			<span class="wdiscord-footer-info"><?php echo $discord->name;?></span>
<?php if ($this->user()){?>
			<a title="Connexion" class="wdiscord-btn-connect" href="<?php echo $connect;?>" target="_blank"><?php echo $this->lang('Connecter'); ?></a>
<?php } ?>
			</span>
		</div>
	 </div>
</div>