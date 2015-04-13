<?php

namespace ONN\AesopGamesBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="email_list")
 */
class EmailList
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\Column(type="string", length=128)
     */
    protected $email;

    /**
     * @ORM\Column(type="string", length=64)
     */
    protected $type;

    /**
     * @ORM\Column(type="string", length=3, nullable=true)
     */
    protected $confirm;


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
     * Set email
     *
     * @param string $email
     * @return EmailList
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
     * Set confirm
     *
     * @param string $confirm
     * @return EmailList
     */
    public function setConfirm($confirm)
    {
        $this->confirm = $confirm;

        return $this;
    }

    /**
     * Get confirm
     *
     * @return string 
     */
    public function getConfirm()
    {
        return $this->confirm;
    }

    /**
     * Set type
     *
     * @param string $type
     * @return EmailList
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return string 
     */
    public function getType()
    {
        return $this->type;
    }
}
