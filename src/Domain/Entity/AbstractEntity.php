<?php

declare(strict_types=1);

namespace BillingSystem\Invoicer\Domain\Entity;

/**
 * @author Si Thu San
 */
abstract class AbstractEntity
{
    protected int $id;

    public function getId(): int
    {
        return $this->id;
    }

    public function setId(int $id): self
    {
        $this->id = $id;

        return $this;
    }
}
