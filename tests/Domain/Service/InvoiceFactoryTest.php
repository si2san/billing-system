<?php

declare(strict_types=1);

use BillingSystem\Invoicer\Domain\Entity\Order;
use BillingSystem\Invoicer\Domain\Factory\InvoiceFactory;
use BillingSystem\Invoicer\Domain\Repository\OrderRepositoryInterface;
use BillingSystem\Invoicer\Domain\Service\InvoicingService;
use PHPUnit\Framework\TestCase;

/**
 * @author Si Thu San
 */
class InvoiceServiceTest extends TestCase
{
    private OrderRepositoryInterface $orderRepository;

    private InvoiceFactory $invoiceFactory;

    private array $orders;

    protected function setUp(): void
    {
        $this->orderRepository = $this->createMock(OrderRepositoryInterface::class);
        $this->invoiceFactory = $this->createMock(InvoiceFactory::class);
        $this->orders = [(new Order())->setTotal(400)];
        $this->orderRepository->method('getUnInvoicedOrders')->willReturn($this->orders);
    }

    public function testShouldQueryRepositoryForUnInvoicedOrders(): void
    {
        $this->orderRepository->expects($this->once())
            ->method('getUnInvoicedOrders');

        (new InvoicingService(
            $this->orderRepository,
            $this->invoiceFactory
        ))->generateInvoices();
    }

    public function testShouldReturnAnInvoiceForEachUnInvoicedOrders(): void
    {
        $results = (new InvoicingService(
            $this->orderRepository,
            $this->invoiceFactory
        ))->generateInvoices();

        $this->assertIsArray($results);
        $this->assertCount(\count($this->orders), $results);
    }
}
