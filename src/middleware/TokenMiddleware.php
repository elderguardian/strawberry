<?php

class TokenMiddleware implements IMiddleware
{

    public function canPass(): bool
    {
        if (!$_GET['token']) {
            echo "You are missing a token parameter!";
            return false;
        }

        return true;
    }

}