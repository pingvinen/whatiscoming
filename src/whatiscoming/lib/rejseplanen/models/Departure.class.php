<?php

class Departure
{
	private $name;
	private $type;
	private $stop;
	private $time;
	private $date;
	private $messages;
	private $rtTime;
	private $rtDate;
	private $rtTrack;
	private $finalStop;
	private $direction;

	public function getName()
	{
		return $this->name;
	}

	public function setName($name)
	{
		$this->name = $name;
	}

	public function getType()
	{
		return $this->type;
	}

	public function setType($type)
	{
		$this->type = $type;
	}

	public function getStop()
	{
		return $this->stop;
	}

	public function setStop($stop)
	{
		$this->stop = $stop;
	}

	public function getTime()
	{
		return $this->time;
	}

	public function setTime($time)
	{
		$this->time = $time;
	}

	public function getDate()
	{
		return $this->date;
	}

	public function setDate($date)
	{
		$this->date = $date;
	}

	public function getMessages()
	{
		return $this->messages;
	}

	public function setMessages($messages)
	{
		$this->messages = $messages;
	}

	public function getRtTime()
	{
		return $this->rtTime;
	}

	public function setRtTime($rtTime)
	{
		$this->rtTime = $rtTime;
	}

	public function getRtDate()
	{
		return $this->rtDate;
	}

	public function setRtDate($rtDate)
	{
		$this->rtDate = $rtDate;
	}

	public function getRtTrack()
	{
		return $this->rtTrack;
	}

	public function setRtTrack($rtTrack)
	{
		$this->rtTrack = $rtTrack;
	}

	public function getFinalStop()
	{
		return $this->finalStop;
	}

	public function setFinalStop($finalStop)
	{
		$this->finalStop = $finalStop;
	}

	public function getDirection()
	{
		return $this->direction;
	}

	public function setDirection($direction)
	{
		$this->direction = $direction;
	}
}
