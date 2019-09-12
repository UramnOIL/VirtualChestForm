<?php


namespace UramnOIL\VirtualChestForm\Controller;


use uramnoil\virtualinventory\VirtualInventoryAPI;

interface Controller {
	public function __construct(VirtualInventoryAPI $api);
}