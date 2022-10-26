<?php

declare(strict_types=1);

namespace BillingSystem\Invoicer\Domain\Entity;

/**
 * @author Si Thu San
 */
class Customer extends AbstractEntity
{
    protected string $name;

    protected string $email;

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getEmail(string $email): string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }
}
