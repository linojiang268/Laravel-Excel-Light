<?php

namespace Ouarea\ExcelM;

use IteratorAggregate;
use Ouarea\ExcelM\Iterators\RowIterator;

interface Sheet extends IteratorAggregate
{
    /**
     * @return string
     */
    public function name();

    /**
     * @return string
     */
    public function index();

    /**
     * @param callable|null $callback
     *
     * @return RowIterator|Row[]
     */
    public function rows(callable $callback = null);

    /**
     * @return bool
     */
    public function isFirstRowAsHeading();

    /**
     * @param  bool $state
     *
     * @return $this
     */
    public function firstRowAsHeading($state = true);

    /**
     * @return mixed
     */
    public function getAdapted();
}