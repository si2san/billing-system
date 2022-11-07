<?php

namespace BillingSystem\Invoicer\Domain\Repository;

/**
 * @author Si Thu San
 */
interface OrderRepositoryInterface extends RepositoryInterface
{
    /**
     * TODO:: Declare Types.
     */

    public function getUnInvoicedOrders();
}
