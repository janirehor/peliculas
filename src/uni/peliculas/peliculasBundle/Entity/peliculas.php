<?php

namespace uni\peliculas\peliculasBundle\Entity;


use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;



/**
 * peliculas
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class peliculas
{
    /**
* @ORM\ManyToMany(targetEntity="actores", mappedBy="peliculass")
*
*/
private $actoress;

    /**
* @ORM\OneToMany(targetEntity="comentarios", mappedBy="peliculass", cascade={"remove"})
*/
protected $comentarioss;


 /**
* @ORM\OneToMany(targetEntity="categorias", mappedBy="peliculass", cascade={"remove"})
*/
protected $categoriass;

public function __construct() {
$this->actoress = new ArrayCollection();
$this->comentarioss = new ArrayCollection();
$this->categoriass = new ArrayCollection();
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
     * @ORM\Column(name="Titulo", type="string", length=50)
     */
    private $titulo;

    /**
     * @var string
     *
     * @ORM\Column(name="Sipnosis", type="text")
     */
    private $sipnosis;

    /**
     * @var string
     *
     * @ORM\Column(name="Director", type="string", length=250)
     */
    private $director;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Fecha", type="date")
     */
    private $fecha;

    /**
     * @var string
     *
     * @ORM\Column(name="Foto", type="string", length=50)
     */
    private $foto;


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
     * Set titulo
     *
     * @param string $titulo
     * @return peliculas
     */
    public function setTitulo($titulo)
    {
        $this->titulo = $titulo;

        return $this;
    }

    /**
     * Get titulo
     *
     * @return string 
     */
    public function getTitulo()
    {
        return $this->titulo;
    }

    /**
     * Set sipnosis
     *
     * @param string $sipnosis
     * @return peliculas
     */
    public function setSipnosis($sipnosis)
    {
        $this->sipnosis = $sipnosis;

        return $this;
    }

    /**
     * Get sipnosis
     *
     * @return string 
     */
    public function getSipnosis()
    {
        return $this->sipnosis;
    }

    /**
     * Set director/es
     *
     * @param string $director
     * @return peliculas
     */
    public function setDirector($director)
    {
        $this->director = $director;

        return $this;
    }

    /**
     * Get director/es
     *
     * @return string 
     */
    public function getDirector()
    {
        return $this->director;
    }

    /**
     * Set fecha
     *
     * @param \DateTime $fecha
     * @return peliculas
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
     * Set foto
     *
     * @param string $foto
     * @return peliculas
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
     * Add actoress
     *
     * @param \uni\peliculas\peliculasBundle\Entity\actores $actoress
     * @return peliculas
     */
    public function addActoress(\uni\peliculas\peliculasBundle\Entity\actores $actoress)
    {
        $this->actoress[] = $actoress;

        return $this;
    }

    /**
     * Remove actoress
     *
     * @param \uni\peliculas\peliculasBundle\Entity\actores $actoress
     */
    public function removeActoress(\uni\peliculas\peliculasBundle\Entity\actores $actoress)
    {
        $this->actoress->removeElement($actoress);
    }

    /**
     * Get actoress
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getActoress()
    {
        return $this->actoress;
    }

    /**
     * Add comentarioss
     *
     * @param \uni\peliculas\peliculasBundle\Entity\comentarios $comentarioss
     * @return peliculas
     */
    public function addComentarioss(\uni\peliculas\peliculasBundle\Entity\comentarios $comentarioss)
    {
        $this->comentarioss[] = $comentarioss;

        return $this;
    }

    /**
     * Remove comentarioss
     *
     * @param \uni\peliculas\peliculasBundle\Entity\comentarios $comentarioss
     */
    public function removeComentarioss(\uni\peliculas\peliculasBundle\Entity\comentarios $comentarioss)
    {
        $this->comentarioss->removeElement($comentarioss);
    }

    /**
     * Get comentarioss
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getComentarioss()
    {
        return $this->comentarioss;
    }

    /**
     * Add categoriass
     *
     * @param \uni\peliculas\peliculasBundle\Entity\categorias $categoriass
     * @return peliculas
     */
    public function addCategoriass(\uni\peliculas\peliculasBundle\Entity\categorias $categoriass)
    {
        $this->categoriass[] = $categoriass;

        return $this;
    }

    /**
     * Remove categoriass
     *
     * @param \uni\peliculas\peliculasBundle\Entity\categorias $categoriass
     */
    public function removeCategoriass(\uni\peliculas\peliculasBundle\Entity\categorias $categoriass)
    {
        $this->categoriass->removeElement($categoriass);
    }

    /**
     * Get categoriass
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getCategoriass()
    {
        return $this->categoriass;
    }
}
