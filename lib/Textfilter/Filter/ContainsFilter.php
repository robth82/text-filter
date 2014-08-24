<?php

namespace Robth82\Textfilter\Filter;

use Robth82\Textfilter\FilterResponse\FilterResponse;

/**
 * Description of ContainsFilter
 *
 * @author Rob
 */
class ContainsFilter implements FilterInterface {
    private $_words = array();
    
    function __construct(array $words) {
        $this->_words = $words;
    }

    public function addWord($words) {
        $this->_words[] = $words;
    }

        
    public function analyze($text, FilterResponse $filterResponse) {
        foreach($this->_words as $word) {
            if(strpos($text, $word))
            {
                $filterResponse->addResponse(false, 10);
            } else {
                $filterResponse->addResponse(true, 0);
            }

        }
    }
}
