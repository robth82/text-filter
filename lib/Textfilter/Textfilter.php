<?php

namespace Robth82\Textfilter;

use Robth82\Textfilter\Filter\FilterInterface;

/**
 *
 * @author Rob
 */
class Textfilter {
    private $_filters = array();
    private $_response = array();
    
    public function addFilter(FilterInterface $filter) {
        $this->_filters[] = $filter;
    }
    
    public function analyze($text) {
        foreach($this->_filters as $index => $filter)
        {
            $this->_response[$index] = $filter->analyze($text);
        }
    }
    
    public function getResult()
    {
        return $this->_response;
    }
}
