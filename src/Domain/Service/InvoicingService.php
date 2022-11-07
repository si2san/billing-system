<?php

declare(strict_types=1);

namespace BillingSystem\Invoicer\Domain\Service;

use BillingSystem\Invoicer\Domain\Factory\InvoiceFactory;
use BillingSystem\Invoicer\Domain\Repository\OrderRepositoryInterface;

/**
 * @author Si Thu San
 */
class InvoicingService
{
    public function __construct(
        private OrderRepositoryInterface $orderRepository,
        private InvoiceFactory $invoiceFactory
    ) {
    }

    public function generateInvoices(): array
    {
        $orders = $this->orderRepository->getUnInvoicedOrders();
        $invoices = [];

        foreach ($orders as $order) {
            $invoices[] = $this->invoiceFactory->createFromOrder($order);
        }

        return $invoices;
    }
}
