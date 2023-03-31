<?php


class Controller
{
    function view($fileName): View
    {
        return new View($fileName);
    }
}