<?php
namespace MobileModule;
/**
 * Homepage presenter.
 */
class HomepagePresenter extends \HomepagePresenter
{

	public function renderDefault()
	{
		$this->template->anyVariable = 'any value';
    
    //echo "$basePath" . $this->template->basePath;
	}

}
