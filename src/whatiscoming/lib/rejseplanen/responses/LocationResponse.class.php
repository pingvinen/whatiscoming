<?php

class LocationResponse
{
	private $xml;
	/**
	 * @var RejseplanenModelFactory
	 */
	private $modelFactory;

	public function __construct($xml, RejseplanenModelFactory $modelFactory)
	{
		$this->xml = $xml;
		$this->modelFactory = $modelFactory;
	}

	public function getStopWithName($name)
	{
		$simpleXml = simplexml_load_string($this->xml);

		foreach ($simpleXml->StopLocation as $node)
		{
			if ((string)$node['name'] === $name)
			{
				$location = $this->modelFactory->getLocation();
				$location->setType('stop');
				$location->setId((string)$node['id']);
				$location->setName((string)$node['name']);
				$location->setX((string)$node['x']);
				$location->setY((string)$node['y']);

				return $location;
			}
		}

		return null;
	}
}
