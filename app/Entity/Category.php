<?php

declare(strict_types=1);

namespace App\Entity;

use Doctrine\ORM\Mapping\Column;
use Doctrine\ORM\Mapping\Entity;
use Doctrine\ORM\Mapping\GeneratedValue;
use Doctrine\ORM\Mapping\Id;
use Doctrine\ORM\Mapping\Table;

#[Entity, Table(name: 'categories')]
class Category
{
    #[Id, Column(options: ['unsigned'=> true]), GeneratedValue]
    private string $id;

    #[Column]
    private string $name;

    #[Column(name: 'transaction_id')]
    private int $transactionId;

    #[Column(name: 'user_id')]
    private int $userId;

    #[Column(name: 'created_at')]
    private \DateTime $createdAt;

    #[Column(name: 'updated_ad')]
    private \DateTime $updatedAt;

}