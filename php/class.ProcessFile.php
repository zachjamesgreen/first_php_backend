<?php
include 'class.id3.php';

class ProcessFile
{
    protected $tags = [];
    protected $t;
    protected $song;

    public function __construct($song){
        $this->song = $song;
        $this->t = new GetTags($this->song);
    }

    public function getTags()
    {
        return $this->tags = $this->t->getInfo();
    }

    public function makeDir()
    {
        if(!is_dir("music/". $this->tags['artist'] . "/". $this->tags['albumTitle'])){
            return mkdir("music/" . $this->tags['artist'] . "/" . $this->tags['albumTitle'], 0777, true);
        }
    }

    public function move()
    {
        $this->makeDir();
        return move_uploaded_file($this->song, "music/" . $this->tags['artist']. "/" .$this->tags['albumTitle'] . "/" . $this->tags['songTitle']);
    }
}
