<?php

namespace AddressBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Person
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="AddressBundle\Entity\PersonRepository")
 */
class Person
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
     * @ORM\Column(name="personName", type="string", length=100)
     */
    private $personName;

    /**
     * @var string
     *
     * @ORM\Column(name="personSurname", type="string", length=100)
     */
    private $personSurname;

    /**
     * @var string
     *
     * @ORM\Column(name="personEmail", type="string", length=255)
     */
    private $personEmail;

    /**
     * @var integer
     *
     * @ORM\Column(name="personPhone", type="integer")
     */
    private $personPhone;

    /**
     * @var boolean
     *
     * @ORM\Column(name="personFriend", type="boolean")
     */
    private $personFriend;

    /**
     * @var integer
     *
     * @ORM\ManyToMany(targetEntity="Circle", inversedBy="persons")
     * @ORM\JoinColumn(name="userId", referencedColumnName="id")
     */
    private $personId;


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
     * Set personName
     *
     * @param string $personName
     * @return Person
     */
    public function setPersonName($personName)
    {
        $this->personName = $personName;

        return $this;
    }

    /**
     * Get personName
     *
     * @return string 
     */
    public function getPersonName()
    {
        return $this->personName;
    }

    /**
     * Set personSurname
     *
     * @param string $personSurname
     * @return Person
     */
    public function setPersonSurname($personSurname)
    {
        $this->personSurname = $personSurname;

        return $this;
    }

    /**
     * Get personSurname
     *
     * @return string 
     */
    public function getPersonSurname()
    {
        return $this->personSurname;
    }

    /**
     * Set personEmail
     *
     * @param string $personEmail
     * @return Person
     */
    public function setPersonEmail($personEmail)
    {
        $this->personEmail = $personEmail;

        return $this;
    }

    /**
     * Get personEmail
     *
     * @return string 
     */
    public function getPersonEmail()
    {
        return $this->personEmail;
    }

    /**
     * Set personPhone
     *
     * @param integer $personPhone
     * @return Person
     */
    public function setPersonPhone($personPhone)
    {
        $this->personPhone = $personPhone;

        return $this;
    }

    /**
     * Get personPhone
     *
     * @return integer 
     */
    public function getPersonPhone()
    {
        return $this->personPhone;
    }

    /**
     * Set personFriend
     *
     * @param boolean $personFriend
     * @return Person
     */
    public function setPersonFriend($personFriend)
    {
        $this->personFriend = $personFriend;

        return $this;
    }

    /**
     * Get personFriend
     *
     * @return boolean 
     */
    public function getPersonFriend()
    {
        return $this->personFriend;
    }
}
