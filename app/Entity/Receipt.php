<?php

declare(strict_types=1);

namespace App\Entity;

use Doctrine\ORM\Mapping\Column;
use Doctrine\ORM\Mapping\Entity;
use Doctrine\ORM\Mapping\GeneratedValue;
use Doctrine\ORM\Mapping\Id;
use Doctrine\ORM\Mapping\ManyToOne;
use Doctrine\ORM\Mapping\Table;

#[Entity, Table(name: 'receipt')]
class Receipt
{
    #[Id, Column(options: ['unsigned'=> true]), GeneratedValue]
    private string $id;

    #[Column(name: 'file_name')]
    private string $fileName;

    #[Column(name: 'transaction_id')]
    private int $transactionId;

    #[Column(name: 'created_at')]
    private \DateTime $createdAt;

    #[ManyToOne(inversedBy: 'receipt')]
    private Transactions $transactions;

}