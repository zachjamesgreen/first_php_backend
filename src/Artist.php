<?php
/**
* @Entity
* @Table(name="artist")
*/

class Artist
{
    /**
    * @Id
    * @Column(type="integer")
    * @GeneratedValue
    * @var int
    */
    protected $id;

    /**
    * @Column(type="string")
    * @var string
    */
    protected $artist;

    public function getId()
    {
        return $this->id;
    }

    public function getArtist()
    {
        return $this->artist;
    }
    public function setArtist($artist)
    {
        $this->artist = $artist;
    }

}
