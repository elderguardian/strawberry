<?php

class TokenMiddleware implements IMiddleware
{

    public function execute(): void
    {
        if (!$_GET['token']) {
            echo "You are missing a token parameter!";
            die;
        }
    }

}