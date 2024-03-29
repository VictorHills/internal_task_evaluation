<?php

namespace App\Entity;

/**
 * @method setEmail(string $string)
 * @method setFirstName(string $string)
 * @method setLastName(string $string)
 */
class User
{
    private string $email;
    private string $firstName;
    private string $lastName;

    public function __construct(string $email, string $firstName, string $lastName)
    {
        $this->email = $email;
        $this->firstName = $firstName;
        $this->lastName = $lastName;
    }

    public function getEmail(): string
    {
        return $this->email;
    }

    public function getFirstName(): string
    {
        return $this->firstName;
    }

    public function getLastName(): string
    {
        return $this->lastName;
    }
}