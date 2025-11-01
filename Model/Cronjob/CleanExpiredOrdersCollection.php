<?php
/*
 * Copyright Magmodules.eu. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace Mollie\Payment\Model\Cronjob;

use Magento\Sales\Model\ResourceModel\Order\Collection;

class CleanExpiredOrdersCollection extends Collection
{
    /**
     * Clean expired orders collection
     */
    public function getAllIds($limit = null, $offset = null): array
    {
        // All payment methods are eligible for cleanup
        return parent::getAllIds($limit, $offset);
    }
}
