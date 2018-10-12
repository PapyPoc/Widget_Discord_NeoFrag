<?php
$discord = json_decode(utf8_encode(file_get_contents("https://discordapp.com/api/guilds/".$data['server_id']."/widget.json")),false);
function array_sort($array, $on, $order=SORT_ASC) {$new_array = array(); $sortable_array = array(); if (count($array) > 0) { foreach ($array as $k => $v) { if (is_array($v)) { foreach ($v as $k2 => $v2) { if ($k2 == $on) { $sortable_array[$k] = $v2; }}} else {$sortable_array[$k] = $v;}} switch ($order) { case SORT_ASC: asort($sortable_array); break; case SORT_DESC: arsort($sortable_array); break;} foreach ($sortable_array as $k => $v) {$new_array[$k] = $array[$k];}} return $new_array;}
?>
<!-- affiche le nom serveur -->
<div id="discord-widget">
	<div class="wdiscord-theme-<?php echo $data['color'];?>">
		<div class="wdiscord-header">
			<!-- affiche le Logo Discord -->
			<a class="wdiscord-logo" href="https://discordapp.com?utm_source=Discord%20Widget&utm_medium=Logo" target="_blank"></a>
			<!-- affiche le nombre de membres connecter a discord-->
			<span class="wdiscord-header-count">
			<strong><?php echo count($discord->members);?></strong>
<?php if (count($discord->members)<=1) {?>
			<span><?php echo $this->lang('member'); ?></span>
<?php } else {?>
			<span><?php echo $this->lang('members'); ?></span>
<?php }?>
			</span>
		</div>
		<div class="wdiscord-body mCustomScrollbar" data-mcs-theme="minimal-dark" style="height:<?php echo $data['height']?>px;"> <!-- Pour choisir son theme de la barre de défillement aller sur http://manos.malihu.gr/repository/custom-scrollbar/demo/examples/scrollbar_themes_demo.html -->
<?php foreach (array_sort($discord->channels, 'position', SORT_ASC) as $nom){?>
			<!--affiche le nom du canal vocal-->
			
			<div class="wdiscord-channel">
				<div class="wdiscord-channel-name"><?php echo $nom->name;?></div>	
	<?php foreach ($discord->members as $username){
		if (isset($username->channel_id)) {
			if ($nom->id===$username->channel_id) {?>
					<div class="wdiscord-member">
						<!--affiche l'avatar du membre-->
						<div class="wdiscord-member-avatar">
							<img src="<?php echo $username->avatar_url?>">
						</div>
						<!--affiche le nom du membre-->
						<span class="wdiscord-member-username"><?php echo $username->username;?></span>
				<?php if ($username->self_mute==true) { ?>
						<!--affiche si le membre est muter-->
						<span class="wdiscord-icon wdiscord-icon-mute"></span>
				<?php } if ($username->self_deaf==true) {?>
						<!--affiche si le membre est en sourdine-->
						<span class="wdiscord-icon wdiscord-icon-deaf"></span>
				<?php }?>
					</div>
			<?php }?>
		<?php }?>
	<?php }?>
			</div>
<?php }?>
				<!-- affiche les membres connecter a discord -->
			<div class="wdiscord-members-online"><?php echo $this->lang('ligne'); ?></div>
<?php foreach ($discord->members as $username){?>
			<div class="wdiscord-member">
				<div class="wdiscord-member-avatar">
					<!-- affiche l'avatar du membre -->
					<img src="<?php echo $username->avatar_url;?>">
					<!-- affiche le statut du membre (en ligne, occupé, ne pas déranger) -->
					<span class="wdiscord-member-status wdiscord-member-status-<?php echo $username->status;?>">
					</span>
				</div>
				<!-- affiche le nom du membre -->
				<span class="wdiscord-member-username"><?php echo $username->username;?></span>
				<!-- affiche le jeu auquel il joue -->
				<span class="wdiscord-member-game"><?php if (isset($username->game)) {echo $username->game->name;}?></span>
			</div>
<?php }?>
		</div>
		<div class="wdiscord-footer">
			<span class="wdiscord-footer-info"><?php echo $discord->name;?></span>
<?php if ($this->user()){?>
			<a title="Connexion" class="wdiscord-btn-connect" href="<?php echo $data['connect'];?>" target="_blank"><?php echo $this->lang('connected'); ?></a>
<?php } ?>
			</span>
		</div>
	 </div>
</div> 
