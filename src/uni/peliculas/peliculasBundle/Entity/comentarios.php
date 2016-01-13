<?php

namespace uni\peliculas\peliculasBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * comentarios
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class comentarios
{
     /**
* @ORM\ManyToOne(targetEntity="peliculas", inversedBy="comentarioss", cascade={"remove"})

*/
protected $peliculass;
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
     * @ORM\Column(name="Pelicula", type="string", length=255)
     */
    private $pelicula;

    /**
     * @var string
     *
     * @ORM\Column(name="Comentario", type="text")
     */
    private $comentario;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Fecha", type="date")
     */
    private $fecha;


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
     * @return comentarios
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
     * Set pelicula
     *
     * @param string $pelicula
     * @return comentarios
     */
    public function setPelicula($pelicula)
    {
        $this->pelicula = $pelicula;

        return $this;
    }

    /**
     * Get pelicula
     *
     * @return string 
     */
    public function getPelicula()
    {
        return $this->pelicula;
    }

    /**
     * Set comentario
     *
     * @param string $comentario
     * @return comentarios
     */
    public function setComentario($comentario)
    {
        $this->comentario = $comentario;

        return $this;
    }

    /**
     * Get comentario
     *
     * @return string 
     */
    public function getComentario()
    {
        return $this->comentario;
    }

    /**
     * Set fecha
     *
     * @param \DateTime $fecha
     * @return comentarios
     */
    public function setFecha($fecha)
    {
        $this->fecha = $fecha;

        return $this;
    }

    /**
     * Get fecha
     *
     * @return \DateTime 
     */
    public function getFecha()
    {
        return $this->fecha;
    }

    /**
     * Set peliculass
     *
     * @param \uni\peliculas\peliculasBundle\Entity\peliculas $peliculass
     * @return comentarios
     */
    public function setPeliculass(\uni\peliculas\peliculasBundle\Entity\peliculas $peliculass = null)
    {
        $this->peliculass = $peliculass;

        return $this;
    }

    /**
     * Get peliculass
     *
     * @return \uni\peliculas\peliculasBundle\Entity\peliculas 
     */
    public function getPeliculass()
    {
        return $this->peliculass;
    }
}
