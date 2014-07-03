// /app/Plugin/Usermgmt/View/Services/view_services.cpt
 
<div class="umtop umtop_new">
	<?php echo $this->Session->flash(); ?>
	<?php echo $this->element('dashboard'); ?>
	<div class="um_box_up"></div>
	<div class="um_box_mid">
		<div class="um_box_mid_content">
			<div class="um_box_mid_content_top">
				<span class="umstyle1"><?php echo __('Available Services'); ?></span>
				<span class="umstyle2" style="float:right"><?php echo $this->Html->link(__("Sign Out",true),"/logout") ?></span>
				<div style="clear:both"></div>
			</div>
			<div class="umhr"></div>
			<div class="um_box_mid_content_mid" id="index">
				
				<div class="tipologia_cont">
					<div class="tipologia_cont_cont">
						<span class="umstyle7"><?php echo __('Services List'); ?></span>
						
							<div id="lista_tipo" style="margin-top:10px; padding-left: 100px; width: 200px;">
							<?php for($i=0; $i<count($services); $i++){ ?>
									<div id="tipo_<?php echo $i; ?>" class="<?php if($i%2 == 0) echo "righe_pari"; else echo "righe_dispari";?>"> 
										<div class="nome" style="width:200px;"><?php echo urldecode($services[$i]['openflow_capability_type']['service_name']); ?></div>
										<div class="clear"></div>
									</div>
							<?php } if(count($services) == 0 )
								echo "No service!";
							?>
							</div>
						</div>
					</div>
				</div>
				
			</div>
			
		</div>
	</div>
	<div class="um_box_down"></div>
</div>