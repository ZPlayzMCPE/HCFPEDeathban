<?php

namespace ItsEon\Deathban\Tasks;

use pocketmine\scheduler\PluginTask;

class unBanTask extends PluginTask
{
	private $main;
	public function __construct(ItsEon\Deathban\main $main)
	{
		parent::__construct($main);
		$this->main = $main;
	}
	public function onRun(int $tick)
	{
		$this->main->doTick();
	}
}
