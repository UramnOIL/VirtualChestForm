<?php


namespace UramnOIL\VirtualChestForm\Form\Button;


use Frago9876543210\EasyForms\elements\Button;
use Frago9876543210\EasyForms\elements\Image;

class EntryButton extends Button {
	protected $command;

	public function __construct(int $command, string $text, ?Image $image = null) {
		$this->command = $command;
		parent::__construct($text, $image);
	}

	public function getCommand() : int {
		return $this->command;
	}
}