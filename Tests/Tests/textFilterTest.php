<?php

namespace Robth82\Tests\textFilter;

use \Robth82\Textfilter\Filter\ContainsFilter;
use Robth82\Textfilter\Textfilter;

/**
 * Description of textFilter
 *
 * @author Rob
 */
class TextFilterTest extends \PHPUnit_Framework_TestCase {
    public function testTextFilterTest(){
         $filter = new Textfilter();
         $filter->addFilter(new ContainsFilter('cat'));
         $filter->analyze('Coolcat is a lazy little kitten');
         $result = $filter->getResult();
         
         $this->assertTrue(true);
    }
   
    
}
