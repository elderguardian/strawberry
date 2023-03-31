<?php

class HelloController extends Controller {

    public function world(IKernel $kernel) {
        return $this->view('home');
    }
    
}