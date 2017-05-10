<?php

namespace BS\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * profil
 *
 * @ORM\Table(name="profil")
 * @ORM\Entity(repositoryClass="BS\CoreBundle\Repository\AdvertRepository")
 */
class AppProfil{

    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="keyName", type="string", length=150, nullable = true, unique = false)
     *
    */
    private $keyname;


    /**
     * @var string
     *
     * @ORM\Column(name="value", type="string", length=255, nullable = true, unique = false)
     *
    */
    private $value;

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
     * Set key
     *
     * @param string $keyname
     *
     * @return AppProfil
     */
    public function setKeyname($keyname)
    {
        $this->keyname = $keyname;

        return $this;
    }

    /**
     * Get key
     *
     * @return string
     */
    public function getKeyname()
    {
        return $this->keyname;
    }

    /**
     * Set value
     *
     * @param string $value
     *
     * @return AppProfil
     */
    public function setValue($value)
    {
        $this->value = $value;

        return $this;
    }

    /**
     * Get value
     *
     * @return string
     */
    public function getValue()
    {
        return $this->value;
    }
}
