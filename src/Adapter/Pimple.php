<?php
namespace PureLib\Di\Adapter;

class Pimple implements \PureLib\Di\DiInterface
{
	protected $container;
	public function __construct(\Pimple $container)
	{
		$this->container = $container;
	}

	public function set($name, $value)
	{
		$this->container[$name] = $value;
		return $this;
	}

	public function get($name)
	{
		return $this->container[$name];
	}
}
