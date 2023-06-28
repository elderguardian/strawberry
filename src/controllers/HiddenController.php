<?php

class HiddenController implements IController {

    public function index() {
        return 'This site is protected by middleware!';
    }
    
}