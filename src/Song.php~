<?php
/**
* @Entity
* @Table(name="songs")
*/

class Song
{
    /**
    * @Id
    * @Column(type="integer")
    * @GeneratedValue
    * @var int
    */
    protected $id;

    /**
    * @ManyToOne(targetEntity="Album", inversedBy="id");
    * @JoinColumn(name="albumId", referencedColumnName="id");
    * @var int
    */
    protected $albumId;

    /**
    * @Column(type="string")
    * @var string
    */
    protected $songTitle;

    /**
    * @Column(type="string")
    * @var string
    */
    protected $format;

    /**
    * @Column(type="string")
    * @var string
    */
    protected $trackNumber;

    /**
    * @Column(type="integer", nullable=true)
    * @var int
    */
    protected $bpm;
    
    /**
    * @Column(type="string")
    * @var string
    */
    protected $filename;

    public function getId()
    {
        return $this->id;
    }


    /**
     * Set albumId
     *
     * @param integer $albumId
     *
     * @return Song
     */
    public function setAlbumId($albumId)
    {
        $this->albumId = $albumId;

        return $this;
    }

    /**
     * Get albumId
     *
     * @return integer
     */
    public function getAlbumId()
    {
        return $this->albumId;
    }

    /**
     * Set songTitle
     *
     * @param string $songTitle
     *
     * @return Song
     */
    public function setSongTitle($songTitle)
    {
        $this->songTitle = $songTitle;

        return $this;
    }

    /**
     * Get songTitle
     *
     * @return string
     */
    public function getSongTitle()
    {
        return $this->songTitle;
    }

    /**
     * Set format
     *
     * @param string $format
     *
     * @return Song
     */
    public function setFormat($format)
    {
        $this->format = $format;

        return $this;
    }

    /**
     * Get format
     *
     * @return string
     */
    public function getFormat()
    {
        return $this->format;
    }

    /**
     * Set trackNumber
     *
     * @param string $trackNumber
     *
     * @return Song
     */
    public function setTrackNumber($trackNumber)
    {
        $this->trackNumber = $trackNumber;

        return $this;
    }

    /**
     * Get trackNumber
     *
     * @return string
     */
    public function getTrackNumber()
    {
        return $this->trackNumber;
    }

    /**
     * Set bpm
     *
     * @param  $bpm
     *
     * @return Song
     */
    public function setBpm($bpm)
    {
        $this->bpm = $bpm;

        return $this;
    }

    /**
     * Get bpm
     *
     * @return \intger
     */
    public function getBpm()
    {
        return $this->bpm;
    }
    
    /**
     * Set filename
     *
     * @param  $filename
     *
     * @return Song
     */
    public function setFilename($filename)
    {
        $this->filename = $filename;

        return $this;
    }

    /**
     * Get filename
     *
     * @return string
     */
    public function getFilename()
    {
        return $this->filename;
    }
    
    public function getAll()
    {
        return array(
            'song_id' => $this->id,
            'song_title' => $this->songTitle
        );
    }
}
