<?php

class HelloController extends Controller {

    public function world(IKernel $kernel) {

        $test = $kernel->get('IAdvancedSay');
        $test->say('meow');

        return $this->view('home');
    }
    
}