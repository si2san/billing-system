<?php

declare(strict_types=1);

namespace BillingSystem\Invoicer\Domain\Factory;

use BillingSystem\Invoicer\Domain\Entity\Invoice;
use BillingSystem\Invoicer\Domain\Entity\Order;
use DateTime;

/**
 * @author Si Thu San
 */
class InvoiceFactory
{
    public function createFromOrder(Order $order): Invoice
    {
        $invoice = new Invoice();
        $invoice->setOrder($order);
        $invoice->setInvoiceDate(new DateTime());
        $invoice->setTotal($order->getTotal());

        return $invoice;
    }
}
