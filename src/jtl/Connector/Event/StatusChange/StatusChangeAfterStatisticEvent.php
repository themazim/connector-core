<?php
namespace jtl\Connector\Event\StatusChange;

use Symfony\Component\EventDispatcher\Event;
use jtl\Connector\Model\StatusChange;


class StatusChangeAfterStatisticEvent extends Event
{
    const EVENT_NAME = 'statuschange.after.statistic';

	protected $statusChange;

    public function __construct(StatusChange &$statusChange)
    {
		$this->statusChange = $statusChange;
    }

    public function getStatusChange()
    {
        return $this->statusChange;
	}
	
}