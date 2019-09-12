<?php


namespace UramnOIL\VirtualChestForm\Form\Button;


use Frago9876543210\EasyForms\elements\Button;
use Frago9876543210\EasyForms\elements\Image;

class CustomizeButton extends Button {
	/** @var int */
	private $command;

	public function __construct(int $command, string $text, ?Image $image = null) {
		$this->command = $command;
		parent::__construct($text, $image);
	}

	/**
	 * @return int
	 */
	public function getCommand() : int {
		return $this->command;
	}
}