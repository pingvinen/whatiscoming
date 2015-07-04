<?php

class Container extends AutoContainer
{
	/**
	 * @var WhatIsComingConfig
	 */
	private $config;

	/**
	 * @var RejseplanenService
	 */
	private $rejseplanenService;

	public function __construct(WhatIsComingConfig $config)
	{
		$this->config = $config;
	}

	public function getWhatIsComingConfig()
	{
		return $this->config;
	}

	public function getICardConfig()
	{
		return $this->config;
	}

	public function getIRejseplanenConfig()
	{
		return $this->config;
	}

	public function getSlimSlim()
	{
		return \Slim\Slim::getInstance();
	}

	public function getAutoContainer()
	{
		return $this;
	}

	public function getIWebRequest(\Slim\Http\Request $request)
	{
		return new WebRequest($request);
	}

	public function getIWebResponse(\Slim\Http\Response $httpResponse, \Slim\Slim $app)
	{
		return new WebResponse($httpResponse, $app);
	}

	/**
	 * @return RejseplanenService
	 */
	public function getRejseplanenService()
	{
		if (is_null($this->rejseplanenService))
		{
			$this->rejseplanenService = parent::getRejseplanenService();
		}

		return $this->rejseplanenService;
	}
}
