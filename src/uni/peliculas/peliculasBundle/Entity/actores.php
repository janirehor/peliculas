<?php

namespace uni\peliculas\peliculasBundle\Entity;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * actores
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class actores
{
    /**
* @ORM\ManyToMany(targetEntity="peliculas", mappedBy="actoress")
*
*/
private $peliculass;

public function __construct() {
$this->peliculas = new ArrayCollection();
}
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="Nombre", type="string", length=50)
     */
    private $nombre;

    /**
     * @var string
     *
     * @ORM\Column(name="Foto", type="string", length=50)
     */
    private $foto;

    /**
     * @var string
     *
     * @ORM\Column(name="Biografia", type="text")
     */
    private $biografia;

    /**
     * @var string
     *
     * @ORM\Column(name="Pelicula", type="text")
     */
    private $pelicula;

    /**
     * @var string
     *
     * @ORM\Column(name="Premios", type="text")
     */
    private $premios;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set nombre
     *
     * @param string $nombre
     * @return actores
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * Get nombre
     *
     * @return string 
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set foto
     *
     * @param string $foto
     * @return actores
     */
    public function setFoto($foto)
    {
        $this->foto = $foto;

        return $this;
    }

    /**
     * Get foto
     *
     * @return string 
     */
    public function getFoto()
    {
        return $this->foto;
    }

    /**
     * Set biografia
     *
     * @param string $biografia
     * @return actores
     */
    public function setBiografia($biografia)
    {
        $this->biografia = $biografia;

        return $this;
    }

    /**
     * Get biografia
     *
     * @return string 
     */
    public function getBiografia()
    {
        return $this->biografia;
    }

    /**
     * Set peliculas
     *
     * @param string $peliculas
     * @return actores
     */
    public function setPelicula($pelicula)
    {
        $this->pelicula = $pelicula;

        return $this;
    }

    /**
     * Get peliculas
     *
     * @return string 
     */
    public function getPelicula()
    {
        return $this->pelicula;
    }

    /**
     * Set premios
     *
     * @param string $premios
     * @return actores
     */
    public function setPremios($premios)
    {
        $this->premios = $premios;

        return $this;
    }

    /**
     * Get premios
     *
     * @return string 
     */
    public function getPremios()
    {
        return $this->premios;
    }

    /**
     * Add peliculass
     *
     * @param \uni\peliculas\peliculasBundle\Entity\peliculas $peliculass
     * @return actores
     */
    public function addPeliculass(\uni\peliculas\peliculasBundle\Entity\peliculas $peliculass)
    {
        $this->peliculass[] = $peliculass;

        return $this;
    }

    /**
     * Remove peliculass
     *
     * @param \uni\peliculas\peliculasBundle\Entity\peliculas $peliculass
     */
    public function removePeliculass(\uni\peliculas\peliculasBundle\Entity\peliculas $peliculass)
    {
        $this->peliculass->removeElement($peliculass);
    }

    /**
     * Get peliculass
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getPeliculass()
    {
        return $this->peliculass;
    }
}
