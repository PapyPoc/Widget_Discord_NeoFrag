<ul class="nav nav-pills" id="pills-tab" role="tablist">
	<li class="nav-item"><a class="nav-link active" id="pills-options-tab" data-toggle="pill" href="#pills-options" role="tab" aria-controls="pills-options" aria-selected="true"><?php echo icon('fa-cogs').' Options' ?></a></li>
</ul>
<div class="tab-content border-light" id="pills-tabContent">
	<div class="tab-pane fade show active" id="pills-options" role="tabpanel" aria-labelledby="pills-options-tab">
		<div class="form-group row">
			<label for="settings-server_id" class="col-sm-3 control-label"><?php echo $this->lang('Identifiant du serveur') ?></label>
			<div class="col-7">
				<input type="text" class="col-sm-7 form-control" name="settings[server_id]" id="settings-server_id" value="<?php if(isset(${'server_id'})) echo ${'server_id'} ?>" />
			</div>
		</div>
		<div class="form-group row">
			<label for="settings-connect" class="col-sm-3 control-label"><?php echo $this->lang('Invitation du serveur') ?></label>
			<div class="col-7">
				<input title="Identifiant d'invitation" type="text" class="col-sm-7 form-control" name="settings[connect]" id="settings-connect" value="<?php if (isset(${'connect'})) echo ${'connect'} ;?>" />
			</div>
		</div>
		<div class="form-group row">
			<label for="settings-color" class="col-sm-3 control-label"><?php echo $this->lang('Couleur') ?></label>
			<div class="col-7">
				<select class="col-sm-7 form-control" name="settings[color]" id="settings-color">
					<option value="dark"<?php if (isset($color) && $color == 'dark') echo ' selected="selected"' ?>><?php echo $this->lang('Sombre') ?></option>
					<option value="light"<?php if (isset($color) && $color == 'light') echo ' selected="selected"' ?>><?php echo $this->lang('Clair') ?></option>
				</select>
			</div>
		</div>
		<div class="form-group row">
			<label for="settings-height" class="col-sm-3 control-label"><?php echo $this->lang('Hauteur') ?></label>
			<div class="col-7">
				<input title="Hauteur du Widget Discord" type="text" class="col-sm-7 form-control" name="settings[height]" id="settings-height" value="<?php if (isset(${'height'})) echo ${'height'} ?>" />
			</div>
		</div>
	</div>
</div>
