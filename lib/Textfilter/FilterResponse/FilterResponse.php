<?php

namespace Robth82\Textfilter\FilterResponse;

/**
 *
 * @author Rob
 */
class FilterResponse {
    private $_totalCount = array();
    private $_failedCount = array();
    private $_score = array();

    function __construct()
    {
        $this->reset();
    }


    public function reset()
    {
        $this->_failedCount = array();
        $this->_totalCount = array();
        $this->_score = array();

        $this->_failedCount['all'] = 0;
        $this->_totalCount['all'] = 0;
        $this->_score['all'] = 0;

    }
    
    public function addResponse($result, $score = 0, $type = 'default')
    {
        $this->handleResponse($result, $score, 'all');
        $this->handleResponse($result, $score, $type);
    }
    
    private function handleResponse($result, $score, $type = 'default')
    { 
        if(!isset($this->_totalCount[$type]))
        {
            $this->_totalCount[$type] = 0;
            $this->_failedCount[$type] = 0;
            $this->_score[$type] = 0;
        }

        $this->_totalCount[$type]++;

        if (!$result) {
            $this->_failedCount[$type] ++;
            $this->_score[$type] += $score;
        }         
    }
    
    public function getScore($type = 'all')
    {
        return $this->_score[$type];
    }

    public function getTotalCount($type = 'all')
    {
        return $this->_totalCount[$type];
    }

    public function getFailedCount($type = 'all')
    {
        return $this->_failedCount[$type];
    }
    
}
