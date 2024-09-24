<?php

namespace DESIGNPATTERN\Observer;

use SplObserver;

class Restaurant implements \SplSubject
{
    public $state;
    public $observers;

    public function __construct()
    {
        $this->observers=new \SplObjectStorage();

    }
    public function attach(SplObserver $observer):void
    {

        $this->observers->attach($observer);
    }

    public function detach(SplObserver $observer):void
    {
        // Remove Observer
        $this->observers->detach($observer);
    }
    public function setState($state) :void{
        $this->state = $state;
        $this->notify();
    }
    public function notify() :void
    {
        foreach ($this->observers as $observer){
            $observer->update($this);
        }
    }
}