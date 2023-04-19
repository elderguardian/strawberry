<?php

interface IMiddleware
{
    public function canPass(): bool;
}