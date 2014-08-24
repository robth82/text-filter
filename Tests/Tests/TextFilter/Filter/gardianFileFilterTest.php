<?php
/**
 * Created by PhpStorm.
 * User: Rob
 * Date: 24-8-14
 * Time: 16:58
 */

namespace Robth82\Tests\textFilter;

use Robth82\Textfilter\Filter\GardianFileFilter;
use Robth82\Textfilter\FilterResponse\FilterResponse;
use Robth82\Textfilter\Filter\FilterException;


class GardianFileFilterTest extends \PHPUnit_Framework_TestCase {

    public function testGardianFileFilter()
    {
        $content = '<mortal kombat><30>

#game companies
<popcap><30>
<game boy><20>
<sony>,< psp ><20>
<nintendo><20>

<realarcade><20>

#general gaming
<game>,<cheats><30>
#<game>,<codes><30>
<game>,< simulation><30>
<game>,< strategy><30>';
        $filterResponse = new FilterResponse();
        $filter = new GardianFileFilter('');
        $filter->setContent($content);
        $return = $filter->analyze('test string without any forbidden word in it.', $filterResponse);

        $this->assertNull($return);

        $this->assertEquals($filterResponse->getScore(), 0);
        $this->assertEquals($filterResponse->getFailedCount(), 0);
        $this->assertEquals($filterResponse->getTotalCount(), 9);

        $filterResponse = new FilterResponse();
        $filter = new GardianFileFilter('');
        $filter->setContent($content);
        $return = $filter->analyze('this is a nice game', $filterResponse);

        $this->assertNull($return);

        $this->assertEquals($filterResponse->getScore(), 0);
        $this->assertEquals($filterResponse->getFailedCount(), 0);
        $this->assertEquals($filterResponse->getTotalCount(), 9);

        $filterResponse = new FilterResponse();
        $filter = new GardianFileFilter('');
        $filter->setContent($content);
        $return = $filter->analyze('this is a nice nintendo game', $filterResponse);

        $this->assertNull($return);

        $this->assertEquals($filterResponse->getScore(), 20);
        $this->assertEquals($filterResponse->getFailedCount(), 1);
        $this->assertEquals($filterResponse->getTotalCount(), 9);

        $filterResponse = new FilterResponse();
        $filter = new GardianFileFilter('');
        $filter->setContent($content);
        $return = $filter->analyze('this is a strategy. cool Game', $filterResponse);

        $this->assertNull($return);

        $this->assertEquals($filterResponse->getScore(), 30);
        $this->assertEquals($filterResponse->getFailedCount(), 1);
        $this->assertEquals($filterResponse->getTotalCount(), 9);

        try{
            $filterResponse = new FilterResponse();
            $filter = new GardianFileFilter('');
            $filter->setContent('test
            <test*>,20');
            $filter->analyze('', $filterResponse);
            $this->fail('exception');
        } catch(FilterException $e) {

        }

    }
}
 