<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace Magento\Bundle\Test\TestStep;

use Magento\Mtf\TestStep\TestStepInterface;

/**
 * Create invoice from order on backend.
 */
class CreatePartialInvoiceStep extends \Magento\Sales\Test\TestStep\CreateInvoiceStep implements TestStepInterface
{

    /**
     * {@inheritdoc}
     */
    protected function getItems()
    {
        $items = parent::getItems();
        $items = $items[0]->getData()['options'];
        foreach ($items as &$item) {
            $item['value'] = $item['partialInvoiceValue'];
            $item['sku'] = $item['partialInvoiceSku'];
        }
        return $items;
    }
}
