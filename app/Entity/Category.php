<?php

declare(strict_types=1);

namespace App\Entity;

use Doctrine\Common\Collections\Collection;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping\Column;
use Doctrine\ORM\Mapping\Entity;
use Doctrine\ORM\Mapping\GeneratedValue;
use Doctrine\ORM\Mapping\Id;
use Doctrine\ORM\Mapping\ManyToOne;
use Doctrine\ORM\Mapping\OneToMany;
use Doctrine\ORM\Mapping\Table;
use PhpParser\Node\Expr\Array_;

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

    #[ManyToOne(inversedBy: 'categories')]
    private User $user;

    #[OneToMany(mappedBy: 'category', targetEntity: Transactions::class)]
    private Collection $transactions;

    public function __construct()
    {
        $this->transactions = new ArrayCollection();
    }


}