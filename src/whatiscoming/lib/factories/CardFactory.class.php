<?php

class CardFactory
{
	/**
	 * @var Container
	 */
	private $container;

	public function __construct(Container $container)
	{
		$this->container = $container;
	}

	public function getCard(CardSpecification $cardSpecification)
	{
		return new Card($this->container->getRejseplanenService(), $cardSpecification);
	}
}
