<?php

declare(strict_types=1);

namespace App\Entity;

use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping\Column;
use Doctrine\ORM\Mapping\Entity;
use Doctrine\ORM\Mapping\GeneratedValue;
use Doctrine\ORM\Mapping\Id;
use Doctrine\ORM\Mapping\ManyToOne;
use Doctrine\ORM\Mapping\OneToMany;
use Doctrine\ORM\Mapping\Table;

#[Entity, Table(name: 'transactions')]
class Transactions
{
    #[Id, Column(options: ['unsigned'=> true]), GeneratedValue]
    private string $id;

    #[Column(name: 'amount', Type: Types::DECIMAL, precision: 13, scale: 2)]
    private float $amount;

    #[Column]
    private string $description;

    #[Column(name: 'category_id')]
    private string $categoryIdd;

    #[Column(name: 'user_id')]
    private string $userId;

    #[Column(name: 'created_at')]
    private \DateTime $createdAt;

    #[Column(name: 'updated_at')]
    private \DateTime $updatedAt;

    #[Column]
    private \DateTime $date;

    #[ManyToOne(inversedBy: 'transactions')]
    private User $user;

    #[ManyToOne(inversedBy: 'transactions')]
    private Category $category;

    #[OneToMany(mappedBy: 'transactions', targetEntity: Receipt::class)]
    private Collection $receipts;
}