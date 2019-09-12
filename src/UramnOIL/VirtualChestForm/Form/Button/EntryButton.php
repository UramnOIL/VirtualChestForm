<?php


namespace UramnOIL\VirtualChestForm\Fomr\Button;


use Frago9876543210\EasyForms\elements\Button;
use Frago9876543210\EasyForms\elements\Image;

class EntryButton extends Button {
	protected $id;
	public function __construct(int $id, string $text, ?Image $image = null) {
		$this->id = $id;
		parent::__construct($text, $image);
	}

	public function getId() : int {
		return $this->id;
	}
}