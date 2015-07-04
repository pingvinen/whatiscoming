<?php

class RejseplanenService
{
	/**
	 * @var IRejseplanenConfig
	 */
	private $config;
	/**
	 * @var RejseplanenResponseFactory
	 */
	private $responseFactory;

	public function __construct(IRejseplanenConfig $config, RejseplanenResponseFactory $responseFactory)
	{
		$this->config = $config;
		$this->responseFactory = $responseFactory;
	}

	public function location($search)
	{
		$url = $this->config->getRejseplanenBaseUrl().'/location?input='.urlencode($search);
		$xml = file_get_contents($url);

		return $this->responseFactory->getLocationResponse($xml);
	}

	public function departureBoard(Location $location)
	{
		$url = $this->config->getRejseplanenBaseUrl().'/departureBoard?id='.urlencode($location->getId());
		$xml = file_get_contents($url);

		// file_put_contents('/tmp/data', $xml."\n");

		return $this->responseFactory->getDepartureBoardResponse($xml);
	}
}
