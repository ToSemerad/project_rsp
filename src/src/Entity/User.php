<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use FOS\UserBundle\Model\UserInterface;

/**
 * @ORM\Entity(repositoryClass="App\Repository\UserRepository")
 * @ORM\Table("public.user")
 */
class User extends \FOS\UserBundle\Model\User implements UserInterface
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    protected $id;

    /**
     * User constructor.
     */
    public function __construct()
    {
        parent::__construct();
        $this->username = $this->email;
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function setEmail($email)
    {
        $this->setUsername($email);
        return parent::setEmail($email);
    }
}
