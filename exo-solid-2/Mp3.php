<?php

final class Mp3 extends MusicReader
{
    private $filename;

    public function __construct($filename)
    {
        $this->filename = $filename;
    }

    public function listen()
    {
        return 'Lecture du fichier Mp3 '. $this->filename;
    }
}
