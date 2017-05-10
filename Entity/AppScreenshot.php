<?php

namespace BS\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AppScreenshot
 *
 * @ORM\Table(name="projectscreenshot")
 * @ORM\Entity(repositoryClass="BS\CoreBundle\Repository\AdvertRepository")
 */
class AppScreenshot{

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
     * @ORM\Column(name="url", type="string", length=255, nullable = true, unique = false)
     *
    */
    private $url;


    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255, nullable = true, unique = false)
     *
    */
    private $name;




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
     * Set url
     *
     * @param string $url
     *
     * @return AppScreenshot
     */
    public function setUrl($url)
    {
        $this->url = $url;

        return $this;
    }

    /**
     * Get url
     *
     * @return string
     */
    public function getUrl()
    {
        return $this->url;
    }


    /**
     * Set name
     *
     * @param string $url
     *
     * @return AppScreenshot
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }


}
