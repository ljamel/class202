<?php
// src/AppBundle/Entity/User.php
namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\Security\Core\User\UserInterface;

/**
* @ORM\Table(name="app_users")
* @ORM\Entity(repositoryClass="AppBundle\Repository\UserRepository")
 * @UniqueEntity(fields={"username"}, message="There is already an account with this username")
*/
class User implements UserInterface, \Serializable
{
/**
* @ORM\Column(type="integer")
* @ORM\Id
* @ORM\GeneratedValue(strategy="AUTO")
*/
private $id;

/**
* @ORM\Column(type="string", length=25, unique=true)
*/
private $username;

/**
* @ORM\Column(type="string", length=64)
*/
private $password;

/**
* @ORM\Column(type="string", length=60, unique=true)
*/
private $email;

/**
* @ORM\Column(name="is_active", type="boolean")
*/
private $isActive;

/**
 * @ORM\Column(type="string", length=255)
 */
private $nom;

/**
 * @ORM\Column(type="string", length=255)
 */
private $prenom;

/**
 * @ORM\Column(type="boolean")
 */
private $isVerified = false;

public function __construct()
{
$this->isActive = true;
// may not be needed, see section on salt below
// $this->salt = md5(uniqid('', true));
}

public function getUsername()
{
return $this->username;

    return $this;
}

public function getSalt()
{
// you *may* need a real salt depending on your encoder
// see section on salt below
return null;
}

public function getPassword()
{
return $this->password;
}

public function setPassword($password)
{
return $this->password;
}

public function getRoles()
{
return array('ROLE_USER');
}

public function eraseCredentials()
{
}

/** @see \Serializable::serialize() */
public function serialize()
{
return serialize(array(
$this->id,
$this->username,
$this->password,
// see section on salt below
// $this->salt,
));
}

/** @see \Serializable::unserialize() */
public function unserialize($serialized)
{
list (
$this->id,
$this->username,
$this->password,
// see section on salt below
// $this->salt
) = unserialize($serialized);
}

public function getNom(): ?string
{
    return $this->nom;
}

public function setNom(string $nom): self
{
    $this->nom = $nom;

    return $this;
}

public function getPrenom(): ?string
{
    return $this->prenom;
}

public function setPrenom(string $prenom): self
{
    $this->prenom = $prenom;

    return $this;
}



public function setUsername(string $username)
{
    $this->prenom = $username;

    return $this;
}

public function isVerified(): bool
{
    return $this->isVerified;
}

public function setIsVerified(bool $isVerified): self
{
    $this->isVerified = $isVerified;

    return $this;
}
}