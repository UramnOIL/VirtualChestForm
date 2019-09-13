<?php


namespace UramnOIL\VirtualChestForm\Form;


use Frago9876543210\EasyForms\forms\MenuForm;
use pocketmine\block\Button;
use pocketmine\Player;
use UramnOIL\VirtualChestForm\Controller\CustomizeController;
use UramnOIL\VirtualChestForm\Form\Button\CustomizeButton;

class CustomizeForm extends MenuForm {
	public function __construct(CustomizeController $controller) {
		$title = "VirtualChestForm";
		$content = "チェストのカスタマイズ";
		$buttons = [
			new CustomizeButton(CustomizeController::COMMAND_CREATE, "チェストの追加"),
			new CustomizeButton(CustomizeController::COMMAND_TITLE_RENAME, "名称の変更"),
			new CustomizeButton(CustomizeController::COMMAND_DELETE, "チェストの削除"),
		];

		$onSubmit = function(Player $player, Button $selected) use ($controller) : void {
			if(!$selected instanceof CustomizeButton) {
				throw new FormException();
			}
			$controller->onSubmit($player, $selected->getCommand());
		};
		$onClose = function(Player $player) use ($controller) : void {
			$controller->onClose($player);
		};

		parent::__construct($title, $content, $buttons, $onSubmit, $onClose);
	}
}