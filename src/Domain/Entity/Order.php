<?php

declare(strict_types=1);

namespace BillingSystem\Invoicer\Domain\Entity;

use BillingSystem\Invoicer\Utility\Helpers;

/**
 * @author Si Thu San
 */
class Order extends AbstractEntity
{
    protected Customer $customer;

    protected string $orderNumber;

    protected string $description;

    protected ?int $total;

    public function getCustomer(): Customer
    {
        return $this->customer;
    }

    public function setCustomer(Customer $customer): self
    {
        $this->customer = $customer;

        return $this;
    }

    public function getOrderNumber(): string
    {
        return $this->orderNumber;
    }

    public function setOrderNumber(string $orderNumber): self
    {
        $this->orderNumber = $orderNumber;

        return $this;
    }

    public function getDescription(): string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }

    /**
     * TODO:// add property exist check on accessessors.
     * Problem of using setter intialization
     */
    public function getTotal(): ?int
    {
        if (Helpers::isPropertyInitialized($this)) {
            return $this->total;
        }

        return null;
    }

    public function setTotal(?int $total): self
    {
        $this->total = $total;

        return $this;
    }
}
