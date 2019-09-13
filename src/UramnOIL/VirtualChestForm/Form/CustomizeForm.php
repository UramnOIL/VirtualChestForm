<?php


namespace UramnOIL\VirtualChestForm\Form;


use Frago9876543210\EasyForms\forms\MenuForm;
use UramnOIL\VirtualChestForm\Controller\CustomizeController;
use uramnoil\virtualinventory\inventory\PerpetuatedVirtualInventory;

class CustomizeForm extends MenuForm {
	public function __construct(PerpetuatedVirtualInventory $inventory, CustomizeController $controller) {
		$title = "VirtualChestForm";
		$buttons = [
			
		];
		parent::__construct($title, $content, $buttons, $onSubmit, $onClose);
	}
}