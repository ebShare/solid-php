<?php

final class Ogg extends MusicReader
{
    private $filename;

    public function __construct($filename)
    {
        $this->filename = $filename;
    }

    public function listen()
    {
        return 'Lecture du fichier Ogg '. $this->filename;
    }
}