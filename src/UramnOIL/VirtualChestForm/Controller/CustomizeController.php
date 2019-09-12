<?php


namespace UramnOIL\VirtualChestForm\Controller;


use uramnoil\virtualinventory\VirtualInventoryAPI;

class CustomizeController implements Controller {
	private $api;
	
	public function __construct(VirtualInventoryAPI $api) {
		$this->api = $api;
	}
}