<?php

declare(strict_types=1);

namespace BillingSystem\Invoicer\Domain\Factory;

use BillingSystem\Invoicer\Domain\Entity\Invoice;
use BillingSystem\Invoicer\Domain\Entity\Order;

/**
 * @author Si Thu San
 */
class InvoiceFactory
{
    public function createFromOrder(Order $order): Invoice
    {
        return new Invoice();
    }
}
