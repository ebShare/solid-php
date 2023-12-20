<?php

class FileUploader
{
    public function __construct(){}
    public function uploadFile($type,$validTypes,$name)
    {
        if (!in_array($type, $validTypes)) {
            throw new Exception('Le fichier ' . $name . ' n\'est pas d\'un type valide');
        } else {
            return true;
        }
    }
}