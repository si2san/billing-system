<?php

declare(strict_types=1);

namespace BillingSystem\Invoicer\Domain\Repository;

use BillingSystem\Invoicer\Domain\Entity\AbstractEntity;

/**
 * @author Si Thu San
 */
interface RepositoryInterface
{
    /**
     * TODO::To Declare Types
     */
    public function getById(int $id);

    public function getAll();

    public function persist(AbstractEntity $entity);

    public function begin(): void;

    public function commit(): void;
}
