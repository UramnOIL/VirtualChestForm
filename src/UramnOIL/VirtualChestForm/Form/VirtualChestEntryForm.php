<?php


namespace UramnOIL\VirtualChestForm\Form;


use Frago9876543210\EasyForms\elements\Button;
use Frago9876543210\EasyForms\forms\MenuForm;
use pocketmine\Player;
use UramnOIL\VirtualChestForm\Controller\VirtualChestEntryController;
use UramnOIL\VirtualChestForm\Form\Button\EntryButton;

class VirtualChestEntryForm extends MenuForm {

	public function __construct(VirtualChestEntryController $controller) {
		$title = "VirtualChestForm";
		$content = "";
		$buttons = [
			new EntryButton(VirtualChestEntryController::OPEN_CHEST, "チェストを開く"),
			new EntryButton(VirtualChestEntryController::CUSTOMIZE_CHESTS, "カスタマイズ"),
		];

		$onSubmit = function(Player $player, Button $button) use ($controller) : void {
			if(!$button instanceof EntryButton) {
				throw new FormException();
			}
			$controller->onSubmit($player, $button->getId());
		};
		$onClose = null;

		parent::__construct($title, $content, $buttons, $onSubmit, $onClose);
	}
}