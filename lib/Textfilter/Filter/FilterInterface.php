<?php


namespace Robth82\Textfilter\Filter;

/**
 *
 * @author Rob
 */
interface FilterInterface {
    /**
     * Do the actual work
     * @param string $text
     * @return \Robth82\FilterResponse return FitlerResponse object
     */
    public function analyze($text);
}
