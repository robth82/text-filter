<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Robth82\Textfilter\Filter;


use Composer\Package\Package;
use Robth82\Textfilter\Filter\FilterInterface;
use \Robth82\Textfilter\FilterResponse\FilterResponse;
/**
 * Description of gardianFileFilter
 *
 * @author Rob
 */
class GardianFileFilter implements FilterInterface {
    
    private $_content = null;
    private $_rules = array();
    private $_type;
    private $_file;
    
    const PATTERN = '/<([-!&\."\+%;:_=\' a-z0-9A-Z]{1,100})>/';
    
    public function __construct($file, $type = 'default') {
        $this->_file = $file;
        $this->_type = $type;
    }
    
    private function init()
    {
        if($this->_content == null)
        {
            $this->_content = file_get_contents($this->_file);
        }
        $this->parse($this->_content);
    }
    
    private function parse($content)
    {
        $lines = explode("\n", $content);
        
        foreach($lines as $line)
        {
            $this->parseLine($line);
        }
    }
    
    private function parseLine($line)
    {
        if(substr(trim($line), 0, 1) != '#' && trim($line) != '') {
            if (preg_match_all(self::PATTERN, $line, $matches)) {
                $phrases = $matches[1];
                $score = array_pop($phrases);
                
                
                if(count($phrases) > 0) {
                    $this->addRule($phrases, $score);
                }
            } else {
                throw new FilterException('could not parse line: ' . $line);
                
            }
        }
    }
    
    private function addRule(array $phrases, $score)
    {
        $this->_rules[] = array('phrases' => $phrases, 'score' => $score);
    }
    
    public function analyze($text, FilterResponse $filterResponse) {
        $this->init();
        foreach($this->_rules as $rule)
        {
            $found = 0;
            foreach($rule['phrases'] as $phrase) {
                if(stripos($text, $phrase)) {
                    $found++;
                } 
            }
            if(count($rule['phrases']) == $found) {
                $filterResponse->addResponse(false, $rule['score'], $this->getType());
            } else {
                $filterResponse->addResponse(true, 0, $this->getType());
            }
        }
    }

    /**
     * @return mixed
     */
    public function getType()
    {
        return $this->_type;
    }

    /**
     * @param null | string $content
     */
    public function setContent($content)
    {
        $this->_content = $content;
    }

    /**
     * @return null | string
     */
    public function getContent()
    {
        return $this->_content;
    }





//put your code here
}
