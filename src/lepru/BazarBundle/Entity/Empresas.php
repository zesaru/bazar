<?php

namespace lepru\BazarBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Empresas
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Empresas
{
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
     * @ORM\Column(name="nombredeempresa", type="string", length=255)
     */
    private $nombredeempresa;

    /**
     * @var string
     *
     * @ORM\Column(name="direccion", type="string", length=255)
     */
    private $direccion;

    /**
     * @var string
     *
     * @ORM\Column(name="telefono", type="string", length=255)
     */
    private $telefono;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=255)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="personadecontacto", type="string", length=255)
     */
    private $personadecontacto;

    /**
     * @var string
     *
     * @ORM\Column(name="serviciooproducto", type="string", length=255)
     */
    private $serviciooproducto;

    /**
     * @var string
     *
     * @ORM\Column(name="web", type="string", nullable=true, length=255)
     */
    private $web;

    /**
     * @var string
     *
     * @ORM\Column(name="facebook", type="string", nullable=true, length=255)
     */
    private $facebook;

    /**
     * @var string
     *
     * @ORM\Column(name="comentario", type="string", length=255)
     */
    private $comentario;

    /**
     * @var string
     *
     * @ORM\Column(name="comentarios", type="text")
     */
    private $comentarios;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fechadeincripcion", type="datetime")
     */
    private $fechadeincripcion;

    /**
     * @var string
     *
     * @ORM\Column(name="flag", type="string", length=255)
     */
    private $flag;


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
     * Set nombredeempresa
     *
     * @param string $nombredeempresa
     * @return Empresas
     */
    public function setNombredeempresa($nombredeempresa)
    {
        $this->nombredeempresa = $nombredeempresa;

        return $this;
    }

    /**
     * Get nombredeempresa
     *
     * @return string 
     */
    public function getNombredeempresa()
    {
        return $this->nombredeempresa;
    }

    /**
     * Set direccion
     *
     * @param string $direccion
     * @return Empresas
     */
    public function setDireccion($direccion)
    {
        $this->direccion = $direccion;

        return $this;
    }

    /**
     * Get direccion
     *
     * @return string 
     */
    public function getDireccion()
    {
        return $this->direccion;
    }

    /**
     * Set telefono
     *
     * @param string $telefono
     * @return Empresas
     */
    public function setTelefono($telefono)
    {
        $this->telefono = $telefono;

        return $this;
    }

    /**
     * Get telefono
     *
     * @return string 
     */
    public function getTelefono()
    {
        return $this->telefono;
    }

    /**
     * Set email
     *
     * @param string $email
     * @return Empresas
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string 
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set personadecontacto
     *
     * @param string $personadecontacto
     * @return Empresas
     */
    public function setPersonadecontacto($personadecontacto)
    {
        $this->personadecontacto = $personadecontacto;

        return $this;
    }

    /**
     * Get personadecontacto
     *
     * @return string 
     */
    public function getPersonadecontacto()
    {
        return $this->personadecontacto;
    }

    /**
     * Set serviciooproducto
     *
     * @param string $serviciooproducto
     * @return Empresas
     */
    public function setServiciooproducto($serviciooproducto)
    {
        $this->serviciooproducto = $serviciooproducto;

        return $this;
    }

    /**
     * Get serviciooproducto
     *
     * @return string 
     */
    public function getServiciooproducto()
    {
        return $this->serviciooproducto;
    }

    /**
     * Set web
     *
     * @param string $web
     * @return Empresas
     */
    public function setWeb($web)
    {
        $this->web = $web;

        return $this;
    }

    /**
     * Get web
     *
     * @return string 
     */
    public function getWeb()
    {
        return $this->web;
    }

    /**
     * Set facebook
     *
     * @param string $facebook
     * @return Empresas
     */
    public function setFacebook($facebook)
    {
        $this->facebook = $facebook;

        return $this;
    }

    /**
     * Get facebook
     *
     * @return string 
     */
    public function getFacebook()
    {
        return $this->facebook;
    }

    /**
     * Set comentario
     *
     * @param string $comentario
     * @return Empresas
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
     * Set comentarios
     *
     * @param string $comentarios
     * @return Empresas
     */
    public function setComentarios($comentarios)
    {
        $this->comentarios = $comentarios;

        return $this;
    }

    /**
     * Get comentarios
     *
     * @return string 
     */
    public function getComentarios()
    {
        return $this->comentarios;
    }

    /**
     * Set fechadeincripcion
     *
     * @param \DateTime $fechadeincripcion
     * @return Empresas
     */
    public function setFechadeincripcion($fechadeincripcion)
    {
        $this->fechadeincripcion = $fechadeincripcion;

        return $this;
    }

    /**
     * Get fechadeincripcion
     *
     * @return \DateTime 
     */
    public function getFechadeincripcion()
    {
        return $this->fechadeincripcion;
    }

    /**
     * Set flag
     *
     * @param string $flag
     * @return Empresas
     */
    public function setFlag($flag)
    {
        $this->flag = $flag;

        return $this;
    }

    /**
     * Get flag
     *
     * @return string 
     */
    public function getFlag()
    {
        return $this->flag;
    }
}
