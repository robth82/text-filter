<?php

namespace Robth82\Textfilter\Filter;

use \Robth82\Textfilter\FilterResponse\FilterResponse;

/**
 *
 * @author Rob
 */
interface FilterInterface {
    /**
     * Do the actual work
     * @param string $text
     * @return 
     */
    public function analyze($text, FilterResponse $filterResponse);
}
