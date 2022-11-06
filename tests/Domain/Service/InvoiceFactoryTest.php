<?php

declare(strict_types=1);

use BillingSystem\Invoicer\Domain\Repository\OrderRepositoryInterface;
use BillingSystem\Invoicer\Domain\Service\InvoicingService;
use PHPUnit\Framework\TestCase;

/**
 * @author Si Thu San
 */
class InvoiceServiceTest extends TestCase
{
    private OrderRepositoryInterface $orderRepository;

    protected function setUp(): void
    {
        $this->orderRepository = $this->createMock(OrderRepositoryInterface::class);
    }

    public function testShouldQueryRepositoryForUnInvoicedOrders(): void
    {
        $this->orderRepository->expects($this->once())
            ->method('getUninvoicedOrders');

        (new InvoicingService($this->orderRepository))->generateInvoices();
    }
}
