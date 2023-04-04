<?php

class HelloController extends Controller {

    public function world() {
        return $this->view('home', [
            'firstPerson' => 'Boss cat'
        ]);
    }
    
}