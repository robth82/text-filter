<?php

namespace Robth82\Tests\textFilter;

use Robth82\Textfilter\Filter\ContainsFilter;
use Robth82\Textfilter\FilterResponse\FilterResponse;

/**
 * Description of textFilter
 *
 * @author Rob
 */
class ContainsFilterTest extends \PHPUnit_Framework_TestCase {
    public function testContainsFilter(){
        $filterResponse = new FilterResponse();
        $filter = new ContainsFilter(array('cat'));
        $return = $filter->analyze('Coolcat is a lazy little kitten', $filterResponse);
        //Analyze returns null because result is in FilterResponse
        $this->assertNull($return);

        $this->assertEquals($filterResponse->getScore(), 10);
        $this->assertEquals($filterResponse->getFailedCount(), 1);
        $this->assertEquals($filterResponse->getTotalCount(), 1);

        $filterResponse = new FilterResponse();
        $filter = new ContainsFilter(array('cat', 'notinstring'));
        $return = $filter->analyze('Coolcat is a lazy little kitten', $filterResponse);
        //Analyze returns null because result is in FilterResponse
        $this->assertNull($return);

        $this->assertEquals($filterResponse->getScore(), 10);
        $this->assertEquals($filterResponse->getFailedCount(), 1);
        $this->assertEquals($filterResponse->getTotalCount(), 2);

        $filterResponse = new FilterResponse();
        $filter = new ContainsFilter(array('cat', 'notinstring'));
        $filter->addWord('lazy');
        $return = $filter->analyze('Coolcat is a lazy little kitten', $filterResponse);
        //Analyze returns null because result is in FilterResponse
        $this->assertNull($return);

        $this->assertEquals($filterResponse->getScore(), 20);
        $this->assertEquals($filterResponse->getFailedCount(), 2);
        $this->assertEquals($filterResponse->getTotalCount(), 3);
    }
   
    
}
