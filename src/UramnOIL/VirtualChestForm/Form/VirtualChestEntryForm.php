<?php


namespace UramnOIL\VirtualChestForm\Form;


use Frago9876543210\EasyForms\elements\Button;
use Frago9876543210\EasyForms\forms\MenuForm;
use UramnOIL\VirtualChestForm\Fomr\Button\EntryButton;

class VirtualChestEntryForm extends MenuForm {
	public const BUTTON_QUIT = 0;
	public const BUTTON_OPEN_CHEST = 1;
	public const BUTTON_CUSTOMIZE_CHESTS = 2;

	public function __construct() {
		$title = "VirtualChestForm";
		$content = "";
		$buttons = [
			new EntryButton(self::BUTTON_QUIT, "戻る"),
			new EntryButton(self::BUTTON_OPEN_CHEST, "チェストを開く"),
			new EntryButton(self::BUTTON_CUSTOMIZE_CHESTS, "カスタマイズ"),
		];

		$onSubmit = function(Button $button) : void {
			if(!$button instanceof EntryButton) {
				throw new
			}
		};

		parent::__construct($title, $content, $buttons, $onSubmit, $onClose);
	}
}