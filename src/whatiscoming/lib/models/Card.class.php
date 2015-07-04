<?php

class Card
{
	/**
	 * @var RejseplanenService
	 */
	private $rejseplanen;
	/**
	 * @var CardSpecification
	 */
	private $specification;

	/**
	 * @var Location
	 */
	private $location;

	/**
	 * @var DepartureList
	 */
	private $departures;

	public function __construct(RejseplanenService $rejseplanen, CardSpecification $specification)
	{
		$this->rejseplanen = $rejseplanen;
		$this->specification = $specification;

		$this->departures = new DepartureList();
	}

	public function getName()
	{
		return $this->specification->getName();
	}

	public function getLocationSearch()
	{
		return $this->specification->getLocationSearch();
	}

	public function getDepartures()
	{
		return $this->departures;
	}

	public function populate()
	{
		$this->location = $this->rejseplanen->location($this->getLocationSearch())->getStopWithName($this->getLocationSearch());

		if (is_null($this->location))
		{
			throw new Exception('['.$this->getName().'] Unable to find exact match for location search '.$this->getLocationSearch());
		}

		$departureResponse = $this->rejseplanen->departureBoard($this->location);

		foreach ($departureResponse->getDepartures() as $dep)
		{
			$this->departures->add($dep);
		}
	}
}