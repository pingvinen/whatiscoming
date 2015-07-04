<?php

class WhatIsComingConfig
	implements
	  ICardConfig
	, IRejseplanenConfig
{
	public $debug = false;
	public $rejseplanenBaseUrl = 'http://not.set';

	/**
	 * @var CardSpecification[]
	 */
	private $cards = array();

	function addCard($name, $locationSearch)
	{
		$c = new CardSpecification();
		$c->setName($name);
		$c->setLocationSearch($locationSearch);

		$this->cards[] = $c;
	}

	/**
	 * @return CardSpecification[]
	 */
	function getCards()
	{
		return $this->cards;
	}

	function getRejseplanenBaseUrl()
	{
		return $this->rejseplanenBaseUrl;
	}
}
