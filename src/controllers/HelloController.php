<?php

class HelloController extends Controller {

    public function world() {
        SB::d("debug message");
        //doSomething()
        SB::dd("failed with error: 2");

        return $this->view('home');
    }
    
}