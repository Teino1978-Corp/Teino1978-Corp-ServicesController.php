<?php
 
// /app/Plugin/Usermgmt/Controller/ServicesController.php
 
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
 
App::uses('UserMgmtAppController', 'Usermgmt.Controller');
 
class ServicesController extends UserMgmtAppController {
	/**
	 * This controller uses following models
	 *
	 * @var array
	 */
	public $uses = array('Usermgmt.User', 'Usermgmt.UserGroup', 'Usermgmt.LoginToken', 'Usermgmt.OpenflowCapability', 'Usermgmt.OpenflowCapabilityType', 'Usermgmt.OpenflowVisibility');
	/**
	 * Called before the controller action.  You can use this method to configure and customize components
	 * or perform logic that needs to happen before each controller action.
	 *
	 * @return void
	 */
	public function beforeFilter() {
		parent::beforeFilter();
		$this->User->userAuth=$this->UserAuth;
	}
	/**
	 * Used to manage services
	 *
	 * @access public
	 * @return void
	 */
	public function manageServices() {
		$types=$this->OpenflowCapabilityType->allTypes();
		$this->set('types', $types);
		$services=$this->OpenflowCapability->allServices();
		$this->set('services', $services);
		//$this->set('types', $this->OpenflowCapabilityType->allTypes());
		//$this->set('services', $this->OpenflowCapability->allServices());
		
	}
 
	/**
	 * Used to view services
	 *
	 * @access public
	 * @return void
	 */
	public function viewServices(){ 
		$user_id = $this->UserAuth->getUserId();
		$services=$this->UserOpenflowVisibility->visibilityByUser($user_id);
		$this->set('services', $services);
		//$this->set("services", $this->UserOpenflowVisibility->visibilityByUser($user_id));
	}
}