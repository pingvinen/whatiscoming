<?php

class RejseplanenModelFactory
{
	public function getLocation()
	{
		return new Location();
	}

	public function getDeparture()
	{
		return new Departure();
	}
}
