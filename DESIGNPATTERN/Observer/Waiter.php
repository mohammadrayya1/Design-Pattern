<?php

namespace DESIGNPATTERN\Observer;

use SplSubject;

class Waiter implements \SplObserver
{

    public function update(SplSubject $subject) :void
    {
        echo " Waiter has one Messages : State has changed to: ".$subject->state."<br>";
    }
}