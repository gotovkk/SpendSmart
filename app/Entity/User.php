<?php

declare(strict_types=1);
namespace App\Entity;

use Doctrine\ORM\Mapping\Column;
use Doctrine\ORM\Mapping\Entity;
use Doctrine\ORM\Mapping\GeneratedValue;
use Doctrine\ORM\Mapping\Id;
use Doctrine\ORM\Mapping\Table;

#[Entity, Table('users')]
Class User {

    #[Id, Column(options: ['unsigned'=> true]), GeneratedValue]
    private int $id;

    #[Column]
    private string $name;
    #[Column]
    private string $email;
    #[Column]
    private string $password;

    #[Column(name: 'created_at')]
    private \DateTime $createdAt;
    #[Column(name: 'updated_at')]
    private \DateTime $updatedAt;
}