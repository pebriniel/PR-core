<?php

namespace BS\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AppSocialnetworking
 *
 * @ORM\Table(name="socialnetwork")
 * @ORM\Entity(repositoryClass="BS\CoreBundle\Repository\AdvertRepository")
 */
class AppSocialnetworking{

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
     * @ORM\Column(name="tag", type="string", length=3, nullable = true, unique = false)
     *
    */
    private $tag;


    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=60, nullable = true, unique = false)
     *
    */
    private $name;

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
     * Set tag
     *
     * @param string $name
     *
     * @return AppSocialnetworking
     */
    public function setTag($tag)
    {
        $this->tag = $tag;

        return $this;
    }

    /**
     * Get tag
     *
     * @return string
     */
    public function getTag()
    {
        return $this->tag;
    }

    /**
     * Set key
     *
     * @param string $name
     *
     * @return AppSocialnetworking
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get key
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
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
