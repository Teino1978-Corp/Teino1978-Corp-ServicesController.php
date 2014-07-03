<?php
 
//  /app/Plugin/Usermgmt/View/Users/dashboard.ctp
 
/*
	This file is part of UserMgmt.
 
	Author: Chetan Varshney (http://ektasoftwares.com)
 
	UserMgmt is free software: you can redistribute it and/or modify
	it under the terms of the GNU General Public License as published by
	the Free Software Foundation, either version 3 of the License, or
	(at your option) any later version.
 
	UserMgmt is distributed in the hope that it will be useful,
	but WITHOUT ANY WARRANTY; without even the implied warranty of
	MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
	GNU General Public License for more details.
 
	You should have received a copy of the GNU General Public License
	along with Foobar.  If not, see <http://www.gnu.org/licenses/>.
*/
?>
<div class="umtop">
	<?php echo $this->Session->flash(); ?>
	<?php echo $this->element('dashboard'); ?>
	
	<div class="openflow_manag">
		<div class="um_box_mid_content">
			<div class="um_box_mid_content_top">
				<span class="umstyle1"><?php echo __('Openflow'); ?></span>
				<div style="clear:both"></div>
			</div>
		<div class="umhr"></div>
		<div class="um_box_mid_content_mid">
				<div class="um_box_mid_content_mid_left">
			<br/>
		<?php   if ($this->UserAuth->getGroupName()=='Admin') { ?>
			<span  class="umstyle6"><?php echo $this->Html->link(__("Services",true),"/manageServices") ?></span><br/><br/>
			<span  class="umstyle6"><?php echo $this->Html->link(__("Policies",true),"/managePolicies") ?></span><br/><br/>
		<?php   } else { ?>
			<span  class="umstyle6"><?php echo $this->Html->link(__("Services USER _",true),"/view_services") ?></span><br/><br/>
			<span  class="umstyle6"><?php echo $this->Html->link(__("Services USER",true), array('plugin' => 'usermgmt', 'controller' => 'services', 'action' => 'viewServices')) ?></span><br/><br/>		
			<span  class="umstyle6"><?php echo $this->Html->link(__("Policies",true),"/manageUserPolicies?p=".$this->UserAuth->getUserId()); ?></span><br/><br/>
		<?php   } if(false){ ?>
			<span  class="umstyle6"><?php echo $this->Html->link(__("Statistics",true),"/dashboard") ?></span><br/><br/>
		<?php } ?>
					</div>
				<div class="um_box_mid_content_mid_right" align="right"></div>
				<div style="clear:both"></div>
			</div>
		</div>
	</div>
	<div class="um_box_down"></div>
 
	<div class="um_box_up"></div>
	<div class="um_box_mid">
		<div class="um_box_mid_content">
			<div class="um_box_mid_content_top">
				<span class="umstyle1"><?php echo __('Dashboard'); ?></span>
				<span class="umstyle2" style="float:right"><?php echo $this->Html->link(__("Home",true),"/") ?></span>
				<div style="clear:both"></div>
			</div>
			<div class="umhr"></div>
			<div class="um_box_mid_content_mid">
				<div class="um_box_mid_content_mid_left">
					
					<br/>
			<?php   if ($this->UserAuth->getGroupName()=='Admin') { ?>
						<!-- <span  class="umstyle6"><?php echo $this->Html->link(__("Add User",true),"/addUser") ?></span><br/><br/> -->
						<span  class="umstyle6 elem_s"><?php echo $this->Html->link(__("Add User",true),"/addUser") ?></span><br/><br/>
						<span  class="umstyle6 elem_s"><?php echo $this->Html->link(__("All Users",true),"/allUsers") ?></span><br/><br/>
						<span  class="umstyle6 elem_s"><?php echo $this->Html->link(__("Add Group",true),"/addGroup") ?></span><br/><br/>
						<span  class="umstyle6 elem_s"><?php echo $this->Html->link(__("All Groups",true),"/allGroups") ?></span><br/><br/>
						<span  class="umstyle6 elem_s"><?php echo $this->Html->link(__("Permissions",true),"/permissions") ?></span><br/><br/>
						<span  class="umstyle6 elem_s"><?php echo $this->Html->link(__("Profile",true),"/viewUser/".$this->UserAuth->getUserId()) ?></span><br/><br/>
						<span  class="umstyle6 elem_s"><?php echo $this->Html->link(__("Edit Profile",true),"/editUser/".$this->UserAuth->getUserId()) ?></span><br/><br/>
			<?php   } ?>
						<span  class="umstyle6 elem_s"><?php echo $this->Html->link(__("Change Password",true),"/changePassword") ?></span><br/><br/>
			<?php   if ($this->UserAuth->getGroupName()!='Admin') { ?>
						<span  class="umstyle6 elem_s"><?php echo $this->Html->link(__("Profile",true),"/myprofile") ?></span><br/><br/>
			<?php   } ?>		
				</div>
				<div class="um_box_mid_content_mid_right" align="right"></div>
				<div style="clear:both"></div>
			</div>
		</div>
	</div>
	<div class="um_box_down"></div>
 
</div>
?>