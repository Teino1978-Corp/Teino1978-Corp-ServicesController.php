<?php   

// /app/Plugin/Usermgmt/View/Services/manage_services.ctp

if ($this->UserAuth->getGroupName()=='Admin') { ?>

<div class="umtop umtop_new">

	<div class="status_message"></div>
	<div class="caricamento"><img src="/app/webroot/img/loading.gif" style="margin-left: 350px; margin-top: 130px;"></div>

	<?php echo $this->Session->flash(); ?>
	<?php echo $this->element('dashboard'); ?>
	<div class="um_box_up"></div>
	<div class="um_box_mid">
		<div class="um_box_mid_content">
			<div class="um_box_mid_content_top">
				<span class="umstyle1"><?php echo __('Gestione Servizi'); ?></span>
				<span class="umstyle2" style="float:right"><?php echo $this->Html->link(__("Sign Out",true),"/logout") ?></span>
				<div style="clear:both"></div>
			</div>
			<div class="umhr"></div>
			<div class="um_box_mid_content_mid" id="index">
				
				<div class="tipologia_cont">
					<div class="tipologia_cont_cont">
						<span class="umstyle7"><?php echo __('Tipologia Servizi'); ?></span>
						
							<div id="lista_tipo" style="margin-top:10px;">
							<?php for($i=0; $i<count($types); $i++){ ?>
									<div id="tipo_<?php echo $i; ?>" class="<?php if($i%2 == 0) echo "righe_pari"; else echo "righe_dispari";?>"> 
										<div class="nome"><?php echo urldecode($types[$i]['openflow_capability_type']['service_name']); ?></div>
										<div class="elimina" onclick="elimina_tipo(<?php echo $types[$i]['openflow_capability_type']['id'].", ".$i; ?>)">Elimina</div>
										<div class="modifica" onclick="modifica_tipo(<?php echo $types[$i]['openflow_capability_type']['id'].", ".$i; ?>)">Modifica</div>
										<div class="clear"></div>
									</div>
							<?php } if(count($types)== 0 )
								echo "Nessuna tipologia presente!";
							?>
								<div class="invisible" id="count_types"><?php echo count($types); ?></div>
							</div>
							<div style="text-align: center;">
								
								<!--<input type="button" value="Add Service" onclick="inserisci_tipo()" style="font-size: 11px; font-weight: bold; margin-top: 8px; width: 130px; cursor: pointer;">
								<?php echo $this->Html->link ('Add Service', '/saveService',array ('class'=>'button','target'=>'_blank'))?>-->
								<span  class="umstyle6 elem_s"><?php echo $this->Html->link(__("Add Service Type",true),"/addServices") ?></span><br/><br/>
							</div>	
						</div>
					</div>
				</div>
				
				<div class="umhr" style="margin-top: 25px;"></div>
				
				<span class="umstyle7"><?php echo __('Dettaglio Servizi'); ?></span>
				
				<div style="margin-top:10px;">
					<div class="righe_pari" style="border: 1px solid #2485B2; padding: 0; border-left: 0;">
						<div class="voce elem1">Tipologia</div>
						<div class="voce elem2">node</div>
						<div class="voce elem3">in_port</div>
						<div class="voce elem4">out_port</div>
						<div class="voce elem5">descrizione</div>
						<div class="clear"></div>
					</div>
					<div id="lista_servizi">
					<?php for($i=0; $i<count($services); $i++){ ?>
							<div id="servizio_<?php echo $i; ?>" class="<?php if($i%2 != 0) echo "righe_pari"; else echo "righe_dispari";?>" style="padding: 0; text-align:center;<?php if($i==(count($services)-1)) echo "border-bottom: 1px solid #2485B2;"; ?>"> 
								<div class="voce2 nome elem1"><?php echo urldecode($services[$i]['openflow_capability_type']['service_name']); ?></div>
								<div class="voce2 elem2"><?php echo urldecode($services[$i]['openflow_capability']['datapath_id']); ?></div>
								<div class="voce2 elem3"><?php echo $services[$i]['openflow_capability']['in_port']; ?></div>
								<div class="voce2 elem4"><?php echo $services[$i]['openflow_capability']['out_port']; ?></div>
								<div class="voce2 elem5"><?php echo urldecode($services[$i]['openflow_capability']['description']); ?></div>
								<div class="elimina2" onclick="elimina_servizio(<?php echo $services[$i]['openflow_capability']['id'].", ".$i; ?>)">Elimina</div>
								<div class="modifica" onclick="modifica_servizio(<?php echo $services[$i]['openflow_capability']['id'].", ".$i; ?>)">Modifica</div>
								<div class="clear"></div>
							</div>
					<?php } if(count($services) == 0 )
						echo "Nessuna servizio presente!";
					?>
					</div>
					<div class="invisible" id="count_services"><?php echo count($services); ?></div>
					<div style="text-align: center;"><input type="button" value="Aggiungi Servizio" onclick="inserisci_servizio()" style="font-size: 11px; font-weight: bold; margin-top: 8px; width: 120px; cursor: pointer;"></div>	
				</div>
				
			</div>
			
		</div>
	</div>
	<div class="um_box_down"></div>
</div>