<?php

/**
 * @route GET /
 */
class IndexController
{
	/**
	 * @var IndexViewModel
	 */
	private $model;
	/**
	 * @var CardRepository
	 */
	private $cardRepository;

	public function __construct(IndexViewModel $model, CardRepository $cardRepository)
	{
		$this->model = $model;
		$this->cardRepository = $cardRepository;
	}

	public function execute(IWebRequest $request, IWebResponse $response)
	{
		$this->model->setCards($this->cardRepository->getAll());

		foreach ($this->model->getCards()->getIterator() as $card)
		{
			$card->populate();
		}

		return $this->model;
	}
}
