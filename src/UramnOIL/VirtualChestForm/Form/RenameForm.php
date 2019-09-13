<?php


namespace UramnOIL\VirtualChestForm\Form;


use Frago9876543210\EasyForms\forms\CustomForm;
use UramnOIL\VirtualChestForm\Controller\RenameController;
use uramnoil\virtualinventory\inventory\PerpetuatedVirtualInventory;

class RenameForm extends CustomForm {
	public function __construct(PerpetuatedVirtualInventory $inventory, RenameController $controller) {

		parent::__construct($title, $elements, $onSubmit, $onClose);
	}
}