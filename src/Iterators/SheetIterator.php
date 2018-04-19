<?php

namespace Ouarea\ExcelM\Iterators;

use Ouarea\ExcelLight\Iterators\CallbackIterator;
use Ouarea\ExcelM\Sheet;

class SheetIterator extends CallbackIterator
{
    /**
     * @return Sheet
     */
    public function first()
    {
        return parent::first();
    }
}
