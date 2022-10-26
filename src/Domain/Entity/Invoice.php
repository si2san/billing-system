<?php

declare(strict_types=1);

namespace BillingSystem\Invoicer\Domain\Entity;

/**
 * @author Si Thu San
 */
class Invoice extends AbstractEntity
{
    protected Order $order;

    protected string $invoiceDate;

    protected $total;

    public function getOrder(): Order
    {
        return $this->order;
    }

    public function setOrder(Order $order): self
    {
        $this->order = $order;

        return $this;
    }

    public function getInvoiceDate(): string
    {
        return $this->getInvoiceDate;
    }

    public function setInvoiceDate(string $invoiceDate): self
    {
        $this->invoiceDate = $invoiceDate;

        return $this;
    }

    public function getTotal(): int
    {
        return $this->total;
    }

    public function setTotal(int $total): self
    {
        $this->total = $total;

        return $this;
    }
}
