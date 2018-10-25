<div role="tabpanel">
	<ul id="discord-tabs" class="nav nav-tabs" role="tablist">
		<li role="presentation" class="active"><a href="#discord-options" aria-controls="discord-options" data-toggle="tab"><?php echo icon('fa-cogs'); ?> Options</a></li>
	</ul>
	<div class="tab-content">
		<div id="discord-options" class="tab-pane active" role="tabpanel">
			<div class="form-horizontal">
				<div class="form-group">
					<label for="settings-server_id" class="col-sm-6 control-label">Identifiant du serveur (ID)</label>
					<div class="col-sm-5">
						<input type="text" class="form-control" name="settings[server_id]" id="settings-server_id" value="<?php if(isset(${'server_id'})) echo ${'server_id'} ?>" />
					</div>
				</div>
				<div class="form-group">
					<label for="settings-connect" class="col-sm-6 control-label">Invitation du serveur</label>
					<div class="col-sm-5">
						<input title="Identifiant d'invitation" type="text" class="form-control" name="settings[connect]" id="settings-connect" value="<?php if(isset(${'connect'})) echo ${'connect'} ;?>" />
					</div>
				</div>
				<div class="form-group">
					<label for="settings-color" class="col-sm-3 control-label"><?php echo $this->lang('Couleur') ?></label>
					<div class="col-sm-5">
						<select class="form-control" name="settings[color]" id="settings-color">
							<option value="dark"<?php if (isset($color) && $color == 'dark') echo ' selected="selected"' ?>><?php echo $this->lang('Sombre') ?></option>
							<option value="light"<?php if (isset($color) && $color == 'light') echo ' selected="selected"' ?>><?php echo $this->lang('Clair') ?></option>
						</select>
					</div>
				</div>
				<div class="form-group">
					<label for="settings-height" class="col-sm-6 control-label"><?php echo $this->lang('Hauteur') ?></label>
					<div class="col-sm-3">
						<input title="Hauteur du Widget Discord" type="text" class="form-control" name="settings[height]" id="settings-height" value="<?php if (isset(${'height'})) echo ${'height'} ?>" />
					</div>
				</div>
			</div>
		</div>
	</div>
</div>