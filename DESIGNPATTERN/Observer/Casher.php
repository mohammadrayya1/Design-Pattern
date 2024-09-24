<?php

namespace DESIGNPATTERN\Observer;

use SplSubject;

class Casher implements \SplObserver
{

    public function update(SplSubject $subject) :void
    {
        echo " Casher has one Messages : State has changed to: ".$subject->state."<br>";
    }
}