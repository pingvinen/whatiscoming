<?php

class CardRepository
{
	/**
	 * @var ICardConfig
	 */
	private $config;
	/**
	 * @var CardFactory
	 */
	private $cardFactory;

	public function __construct(ICardConfig $config, CardFactory $cardFactory)
	{
		$this->config = $config;
		$this->cardFactory = $cardFactory;
	}

	/**
	 * return CardList
	 */
	public function getAll()
	{
		$list = new CardList();

		foreach ($this->config->getCards() as $card)
		{
			$list->add($this->cardFactory->getCard($card));
		}

		return $list;
	}
}
