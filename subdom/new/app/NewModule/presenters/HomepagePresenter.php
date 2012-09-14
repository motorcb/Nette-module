<?php
namespace NewModule;
/**
 * Homepage presenter.
 */
class HomepagePresenter extends \HomepagePresenter
{

	public function renderDefault()
	{
		$this->template->anyVariable = 'any value';
	}

}
