<?php

interface ICardConfig
{
	function addCard($name, $locationSearch);

	/**
	 * @return CardSpecification[]
	 */
	function getCards();
}
