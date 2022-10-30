<?php

declare(strict_types=1);

use BillingSystem\Invoicer\Domain\Entity\Invoice;
use BillingSystem\Invoicer\Domain\Entity\Order;
use BillingSystem\Invoicer\Domain\Factory\InvoiceFactory;
use PHPUnit\Framework\TestCase;

/**
 * @author Si Thu San
 */
class InvoiceFactoryTest extends TestCase
{
    public function testInvoiceFactoryCanCreate(): void
    {
        $order = new Order();
        $invoice = (new InvoiceFactory())->createFromOrder($order);

        $this->assertInstanceOf(Invoice::class, $invoice);
    }
}
