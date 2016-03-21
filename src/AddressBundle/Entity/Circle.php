<?php

namespace AddressBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Circle
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="AddressBundle\Entity\CircleRepository")
 */
class Circle
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
     * @ORM\Column(name="circleName", type="string", length=255)
     */
    private $circleName;


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
     * Set circleName
     *
     * @param string $circleName
     * @return Circle
     */
    public function setCircleName($circleName)
    {
        $this->circleName = $circleName;

        return $this;
    }

    /**
     * Get circleName
     *
     * @return string 
     */
    public function getCircleName()
    {
        return $this->circleName;
    }
}
