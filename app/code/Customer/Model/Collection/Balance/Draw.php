<?php

namespace Redseanet\Customer\Model\Collection\Balance;

use Redseanet\Lib\Model\AbstractCollection;

class Draw extends AbstractCollection
{
    protected function construct()
    {
        $this->init('customer_balance_draw_application');
    }
}
