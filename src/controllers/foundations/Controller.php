<?php


class Controller
{
    function view($fileName, $pageVars = []): View
    {
        return new View($fileName, $pageVars);
    }
}