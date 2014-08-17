<?php

namespace Robth82\Textfilter\Filter;

/**
 * Description of ContainsFilter
 *
 * @author Rob
 */
class ContainsFilter implements FilterInterface {
    public function analyze($text) {
        return true;
    }

}
