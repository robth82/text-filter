<?php

namespace Robth82\Textfilter;

use Robth82\Textfilter\Filter\FilterInterface;
use Robth82\Textfilter\FilterResponse\FilterResponse;

/**
 *
 * @author Rob
 */
class Textfilter {
    private $_filters = array();
    
    private $_response = null;

    private $_threshold = 20;

    function __construct(array $config, FilterResponse $response = null) {
        foreach($config as $filter => $configuration) {
            foreach ($configuration as $category => $files) {
                foreach($files as $file) {
                    $class = 'Robth82\Textfilter\Filter\\' . $filter;
                    $this->addFilter(new $class(__dir__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'data' . DIRECTORY_SEPARATOR . 'gard' . DIRECTORY_SEPARATOR . $category . DIRECTORY_SEPARATOR . $file, $category));
                }
            }
        }

        if($response === null)
        {
            $response = new FilterResponse();
        }
        $this->_response = $response;
    }
    
    public function addFilter(FilterInterface $filter) {
        $this->_filters[] = $filter;
    }
    
    public function analyze($text) {
        foreach($this->_filters as $index => $filter)
        {
            $filter->analyze($text, $this->getResponse());
        }
        
        if($this->getResponse()->getScore() > $this->getThreshold()) {
            return true;
        } else {
            return false;
        }
            
    }
    
    public function getResponse() {
        return $this->_response;
    }

    /**
     * @param int $threshold
     */
    public function setThreshold($threshold)
    {
        $this->_threshold = $threshold;
    }

    /**
     * @return int
     */
    public function getThreshold()
    {
        return $this->_threshold;
    }




}
