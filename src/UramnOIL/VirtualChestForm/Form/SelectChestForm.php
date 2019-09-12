<?php


namespace UramnOIL\VirtualChestForm\Form;


use Frago9876543210\EasyForms\forms\MenuForm;

class SelectChestForm extends MenuForm {
	public function __construct() {
		$title = "VirtualChestForm";
		$content = "チェストを選択してください";
		$buttons = [

		]
		parent::__construct($title, $content, $buttons, $onSubmit, $onClose);
	}
}