<?php

class AdvancedSay implements IAdvancedSay {

    private ISay $test;

    function __construct(ISay $test) {
        $this->test = $test;
    }

    function say(string $name) {
        $this->test->say("[AT] $name");
    }

}