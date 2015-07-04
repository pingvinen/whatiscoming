<?php

class DepartureBoardResponse
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

	/**
	 * @return Departure[]
	 */
	public function getDepartures()
	{
		$simpleXml = simplexml_load_string($this->xml);

		$list = array();

		foreach ($simpleXml->Departure as $node)
		{
			$x = $this->modelFactory->getDeparture();

			$x->setName((string)$node['name']);
			$x->setType((string)$node['type']);
			$x->setDate((string)$node['date']);
			$x->setDirection((string)$node['direction']);
			$x->setFinalStop((string)$node['finalStop']);
			$x->setMessages((string)$node['messages']);
			$x->setRtDate((string)$node['rtDate']);
			$x->setRtTime((string)$node['rtTime']);
			$x->setRtTrack((string)$node['rtTrack']);
			$x->setStop((string)$node['stop']);
			$x->setTime((string)$node['time']);

			$list[] = $x;
		}

		return $list;
	}
}
