<?php

class Say implements ISay {


    function say(string $message) {
        echo $message;
    }

}