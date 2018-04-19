<?php

namespace Ouarea\ExcelM;

use IteratorAggregate;
use Ouarea\ExcelM\Iterators\SheetIterator;
use Ouarea\ExcelM\Spout\Sheet;

interface Reader extends IteratorAggregate
{
    /**
     * @param string        $filename
     * @param callable|null $callback
     * @param null          $extension
     *
     * @return $this
     */
    public function read($filename, callable $callback = null, $extension = null);

    /**
     * @param callable $callback
     *
     * @return SheetIterator|Sheet[]
     */
    public function sheets(callable $callback = null);

    /**
     * @return mixed
     */
    public function getAdapted();
}
