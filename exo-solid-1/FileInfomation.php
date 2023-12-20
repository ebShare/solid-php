<?php

class FileInformation
{
    public function __construct(){}
    public function getExtension($name)
    {
        return pathinfo($name, PATHINFO_EXTENSION);
    }
}