<?php

namespace DESIGNPATTERN\Observer;

use SplSubject;

class Casher implements \SplObserver
{

    public $observeStatus;

    /**
     * @return mixed
     */
    public function getObserveStatus()
    {
        return $this->observeStatus;
    }

    /**
     * @param mixed $observeStatus
     */
    public function setObserveStatus($observeStatus): void
    {
        $this->observeStatus = $observeStatus;
    }

    public function update(SplSubject $subject) :void
    {
        echo " Casher has one Messages : State has changed to: ".$subject->state."<br>";
    }
}