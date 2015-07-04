<?php

class RejseplanenResponseFactory
{
	public function getLocationResponse($xml)
	{
		return new LocationResponse($xml, new RejseplanenModelFactory());
	}

	public function getDepartureBoardResponse($xml)
	{
		return new DepartureBoardResponse($xml, new RejseplanenModelFactory());
	}
}
