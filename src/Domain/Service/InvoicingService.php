<?php

declare(strict_types=1);

namespace BillingSystem\Invoicer\Domain\Service;

use BillingSystem\Invoicer\Domain\Repository\OrderRepositoryInterface;

/**
 * @author Si Thu San
 */
class InvoicingService
{
    public function __construct(private OrderRepositoryInterface $orderRepository)
    {
    }

    public function generateInvoices(): void
    {
        $orders = $this->orderRepository->getUninvoicedOrders();
    }
}
