<div role="tabpanel">
	<ul id="discord-tabs" class="nav nav-tabs" role="tablist">
		<li class="active"><a href="#discord-options" aria-controls="discord-options" data-toggle="tab"><?php echo icon('fa-cogs'); ?> Options</a></li>
	</ul>
	<div class="tab-content">
		<div id="discord-options" class="tab-pane active" role="tabpanel">
			<div class="form-horizontal">
				<div class="form-group">
					<label for="server-discord" class="col-sm-5 control-label">Identifiant du serveur (ID)</label>
					<div class="col-sm-5">
						<input type="text" class="form-control" name="settings[server_id]" id="settings-server_id" value="<?php if(isset($data['server_id'])) echo $data['server_id']; ?>" />
					</div>
				</div>
				<div class="form-group">
					<label for="connect-discord" class="col-sm-5 control-label">Invitation du serveur</label>
					<div class="col-sm-5">
						<input title="Identifiant d'invitation" type="text" class="form-control" name="settings[connect]" id="connect-discord" value="<?php if(isset($data['connect'])) echo $data['connect'];?>" />
					</div>
				</div>
				<div class="form-group">
					<label for="color-discord" class="col-sm-5 control-label">Couleur (dark ou light)</label>
					<div class="col-sm-3">
						<FORM>
							<SELECT class="form-control" name="settings[color]" id="color-discord" size="1">
								<OPTION <?php if($data['color']=='dark') echo 'selected';?>>dark
								<OPTION <?php if($data['color']=='light') echo 'selected';?>>light
							</SELECT>
						</FORM>
					</div>
				</div>
				<div class="form-group">
					<label for="height-discord" class="col-sm-5 control-label">Hauteur du Widget Discord</label>
					<div class="col-sm-3">
						<input title="Hauteur du Widget Discord" type="text" class="form-control" name="settings[height]" id="height-discord" value="<?php if(isset($data['height'])) echo $data['height'];?>" />
					</div>
				</div
			</div>
		</div>
	</div>
</div> 
