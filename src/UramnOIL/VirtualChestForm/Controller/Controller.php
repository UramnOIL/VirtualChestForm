<?php


namespace UramnOIL\VirtualChestForm\Controller;


use UramnOIL\VirtualChestForm\Form\FormFactory;
use uramnoil\virtualinventory\VirtualInventoryAPI;

abstract class Controller {
	/** @var VirtualInventoryAPI */
	protected $api;
	/** @var FormFactory */
	protected $factory;

	public function __construct(VirtualInventoryAPI $api, FormFactory $factory) {
		$this->api;
		$this->factory = $factory;
	}
}