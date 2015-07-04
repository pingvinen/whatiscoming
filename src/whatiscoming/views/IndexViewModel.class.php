<?php

class IndexViewModel extends BaseViewModel
{
	/**
	 * @var CardList
	 */
	private $cards;

	public function __construct(LayoutViewModel $layoutViewModel)
	{
		$this->layoutModel = $layoutViewModel;
	}

	public function setTitle($title)
	{
		$this->layoutModel->setTitle($title);
	}

	public function getCards()
	{
		return $this->cards;
	}

	public function setCards(CardList $cards)
	{
		$this->cards = $cards;
	}
}
