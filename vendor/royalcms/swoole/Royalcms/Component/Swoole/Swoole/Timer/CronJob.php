<?php

namespace Royalcms\Component\Swoole\Swoole\Timer;

abstract class CronJob implements CronJobInterface
{
    /**
     * Swoole timer id
     * @var int
     */
    private $timerId;

    public function setTimerId($timerId)
    {
        $this->timerId = $timerId;
    }

    public function stop()
    {
        if (!empty($this->timerId)) {
            \swoole_timer_clear($this->timerId);
        }
    }

    /**
     * @return bool $isImmediate
     */
    public function isImmediate()
    {
        return false;
    }

}