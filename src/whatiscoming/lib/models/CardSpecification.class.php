<?php

class CardSpecification
{
	private $name;
	private $locationSearch;

	public function getName()
	{
		return $this->name;
	}

	public function setName($name)
	{
		$this->name = $name;
	}

	public function getLocationSearch()
	{
		return $this->locationSearch;
	}

	public function setLocationSearch($locationSearch)
	{
		$this->locationSearch = $locationSearch;
	}
}
