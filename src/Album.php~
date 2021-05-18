<?php
/**
* @Entity
* @Table(name="albums")
*/

class Album
{
    /**
    * @Id
    * @Column(type="integer")
    * @GeneratedValue
    * @var int
    */
    protected $id;

    /**
    * @ManyToOne(targetEntity="Artist", inversedBy="id");
    * @JoinColumn(name="artistId", referencedColumnName="id");
    * @var int
    */
    protected $artistId;

    /**
    * @Column(type="string")
    * @var string
    */
    protected $albumTitle;

    /**
    * @Column(type="integer", nullable=true)
    * @var string
    */
    protected $year;

    public function getId()
    {
        return $this->id;
    }


    /**
     * Set artistId
     *
     * @param integer $artistId
     *
     * @return Album
     */
    public function setArtistId($artistId)
    {
        $this->artistId = $artistId;

        return $this;
    }

    /**
     * Get artistId
     *
     * @return integer
     */
    public function getArtistId()
    {
        return $this->artistId;
    }

    /**
     * Set albumTitle
     *
     * @param string $albumTitle
     *
     * @return Album
     */
    public function setAlbumTitle($albumTitle)
    {
        $this->albumTitle = $albumTitle;

        return $this;
    }

    /**
     * Get albumTitle
     *
     * @return string
     */
    public function getAlbumTitle()
    {
        return $this->albumTitle;
    }

    /**
     * Set year
     *
     * @param integer $year
     *
     * @return Album
     */
    public function setYear($year)
    {
        $this->year = $year;

        return $this;
    }

    /**
     * Get year
     *
     * @return integer
     */
    public function getYear()
    {
        return $this->year;
    }
}
