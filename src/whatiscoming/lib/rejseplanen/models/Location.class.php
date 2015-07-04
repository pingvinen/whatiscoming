<?php

class Location
{
	private $type;
	private $name;
	private $x;
	private $y;
	private $id;

	public function getType()
	{
		return $this->type;
	}

	public function setType($type)
	{
		$this->type = $type;
	}

	public function getName()
	{
		return $this->name;
	}

	public function setName($name)
	{
		$this->name = $name;
	}

	public function getX()
	{
		return $this->x;
	}

	public function setX($x)
	{
		$this->x = $x;
	}

	public function getY()
	{
		return $this->y;
	}

	public function setY($y)
	{
		$this->y = $y;
	}

	public function getId()
	{
		return $this->id;
	}

	public function setId($id)
	{
		$this->id = $id;
	}
}
