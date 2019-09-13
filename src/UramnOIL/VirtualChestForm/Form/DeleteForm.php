<?php


namespace UramnOIL\VirtualChestForm\Form;


use Frago9876543210\EasyForms\forms\ModalForm;
use pocketmine\Player;
use UramnOIL\VirtualChestForm\Controller\DeleteController;
use uramnoil\virtualinventory\inventory\PerpetuatedVirtualInventory;

class DeleteForm extends ModalForm {
	public function __construct(PerpetuatedVirtualInventory $inventory, DeleteController $controller) {
		$title = "VirtualChestForm";
		$content = "本当に削除しますか?";
		$yesButton = "gui.yes";
		$noButton = "gui.no";

		$onSubmit = function(Player $player, bool $response) use ($inventory, $controller) : void {
			$controller->onSubmit($player, $inventory, $response);
		};
		parent::__construct($title, $content, $onSubmit, $yesButton, $noButton);
	}
}