<?php

interface IMiddleware
{
    public function execute(): void;
}