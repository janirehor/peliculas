<?php

namespace uni\peliculas\peliculasBundle\Entity;

use Doctrine\ORM\Mapping as ORM;



/**
 * categorias
 *
 * @ORM\Table()
 * @ORM\Entity
 */


class categorias
{
    /**
* @ORM\ManyToOne(targetEntity="peliculas", inversedBy="categoriass", cascade={"remove"})

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
     * @ORM\Column(name="cienciaFiccion", type="text")
     */
    private $cienciaFiccion;

    /**
     * @var string
     *
     * @ORM\Column(name="accion", type="text")
     */
    private $accion;

    /**
     * @var string
     *
     * @ORM\Column(name="animacion", type="text")
     */
    private $animacion;

    /**
     * @var string
     *
     * @ORM\Column(name="comedia", type="text")
     */
    private $comedia;

    /**
     * @var string
     *
     * @ORM\Column(name="terror", type="text")
     */
    private $terror;


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
     * Set cienciaFiccion
     *
     * @param string $cienciaFiccion
     * @return categorias
     */
    public function setCienciaFiccion($cienciaFiccion)
    {
        $this->cienciaFiccion = $cienciaFiccion;

        return $this;
    }

    /**
     * Get cienciaFiccion
     *
     * @return string 
     */
    public function getCienciaFiccion()
    {
        return $this->cienciaFiccion;
    }

    /**
     * Set accion
     *
     * @param string $accion
     * @return categorias
     */
    public function setAccion($accion)
    {
        $this->accion = $accion;

        return $this;
    }

    /**
     * Get accion
     *
     * @return string 
     */
    public function getAccion()
    {
        return $this->accion;
    }

    /**
     * Set animacion
     *
     * @param string $animacion
     * @return categorias
     */
    public function setAnimacion($animacion)
    {
        $this->animacion = $animacion;

        return $this;
    }

    /**
     * Get animacion
     *
     * @return string 
     */
    public function getAnimacion()
    {
        return $this->animacion;
    }

    /**
     * Set comedia
     *
     * @param string $comedia
     * @return categorias
     */
    public function setComedia($comedia)
    {
        $this->comedia = $comedia;

        return $this;
    }

    /**
     * Get comedia
     *
     * @return string 
     */
    public function getComedia()
    {
        return $this->comedia;
    }

    /**
     * Set terror
     *
     * @param string $terror
     * @return categorias
     */
    public function setTerror($terror)
    {
        $this->terror = $terror;

        return $this;
    }

    /**
     * Get terror
     *
     * @return string 
     */
    public function getTerror()
    {
        return $this->terror;
    }

    /**
     * Set peliculass
     *
     * @param \uni\peliculas\peliculasBundle\Entity\peliculas $peliculass
     * @return categorias
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
