<?php


namespace UramnOIL\VirtualChestForm\Form;


use UramnOIL\VirtualChestForm\Controller\SelectChestController;
use UramnOIL\VirtualChestForm\Controller\VirtualChestEntryController;

class FormFactory {
	/**
	 * @return VirtualChestEntryForm
	 */
	public function createVirtualChestEntryForm() : VirtualChestEntryForm {
		return new VirtualChestEntryForm(new VirtualChestEntryController());
	}

	/**
	 * @param  array  $chests
	 *
	 * @return SelectChestForm
	 */
	public function createSelectChestForm(array $chests) : SelectChestForm {
		return new SelectChestForm($chests, new SelectChestController());
	}
}