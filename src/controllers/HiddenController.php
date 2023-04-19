<?php

class HiddenController extends Controller {

    public function index() {
        return 'This site is protected by middleware!';
    }
    
}