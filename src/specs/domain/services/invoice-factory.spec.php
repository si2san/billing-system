<?php

declare(strict_types=1);

use BillingSystem\Invoicer\Domain\Entity\Invoice;
use BillingSystem\Invoicer\Domain\Entity\Order;
use BillingSystem\Invoicer\Domain\Factory\InvoiceFactory;

/**
 * @author Si Thu San
 */

describe('InvoiceFactory', function () {
    fcontext('Invoice', function () {
        describe('->createFromOrder()', function () {
            it('should return order object', function () {
                $order = new Order();
                $factory = new InvoiceFactory();
                $invoice = $factory->createFromOrder($order);

                assert($invoice instanceof Invoice);
            });
        });
    });
});
