<?php
	echo '<span class="wdiscord-footer-info"><?php echo $discord->name;?></span>';
if ($this->user()){
	echo '<a title="Connexion" class="wdiscord-btn-connect" href="https://discord.gg/'<?php echo $data['connect'];?>'" target="_blank">'<?php echo $discord->name;?>'</a>';
} else {
	echo '<a class="wdiscord-btn-connect">'<?php echo $discord->name;?>'</a>';
}
	echo '</span>';
?>
