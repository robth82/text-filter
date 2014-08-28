<?php
/**
 * Created by PhpStorm.
 * User: Rob
 * Date: 24-8-14
 * Time: 20:15
 */

namespace Tests\TextFilter\FilterResponse;


use Robth82\Textfilter\FilterResponse\FilterResponse;

class FilterResponseTest extends \PHPUnit_Framework_TestCase {

    const RESPONSE_PARAMETER = 'test';
    const RESPONSE_DEFAULT_PARAMETER = 'default';

    public function testTextFilter()
    {
        $filterResponse = new FilterResponse();

        $this->assertEquals($filterResponse->getScore(), 0);
        $this->assertEquals($filterResponse->getTotalCount(), 0);
        $this->assertEquals($filterResponse->getFailedCount(), 0);

        $filterResponse->addResponse(true, 0, self::RESPONSE_PARAMETER);

        $this->assertEquals($filterResponse->getScore(), 0);
        $this->assertEquals($filterResponse->getTotalCount(), 1);
        $this->assertEquals($filterResponse->getFailedCount(), 0);
        $this->assertEquals($filterResponse->getScore(self::RESPONSE_PARAMETER), 0);
        $this->assertEquals($filterResponse->getTotalCount(self::RESPONSE_PARAMETER), 1);
        $this->assertEquals($filterResponse->getFailedCount(self::RESPONSE_PARAMETER), 0);

        $filterResponse->addResponse(false, 10, self::RESPONSE_PARAMETER);
        $this->assertEquals($filterResponse->getScore(), 10);
        $this->assertEquals($filterResponse->getTotalCount(), 2);
        $this->assertEquals($filterResponse->getFailedCount(), 1);
        $this->assertEquals($filterResponse->getScore(self::RESPONSE_PARAMETER), 10);
        $this->assertEquals($filterResponse->getTotalCount(self::RESPONSE_PARAMETER), 2);
        $this->assertEquals($filterResponse->getFailedCount(self::RESPONSE_PARAMETER), 1);

        $filterResponse->addResponse(false, 10);
        $this->assertEquals($filterResponse->getScore(), 20);
        $this->assertEquals($filterResponse->getTotalCount(), 3);
        $this->assertEquals($filterResponse->getFailedCount(), 2);
        $this->assertEquals($filterResponse->getScore(self::RESPONSE_PARAMETER), 10);
        $this->assertEquals($filterResponse->getTotalCount(self::RESPONSE_PARAMETER), 2);
        $this->assertEquals($filterResponse->getFailedCount(self::RESPONSE_PARAMETER), 1);
        $this->assertEquals($filterResponse->getScore(self::RESPONSE_DEFAULT_PARAMETER), 10);
        $this->assertEquals($filterResponse->getTotalCount(self::RESPONSE_DEFAULT_PARAMETER), 1);
        $this->assertEquals($filterResponse->getFailedCount(self::RESPONSE_DEFAULT_PARAMETER), 1);

        $filterResponse->reset();
        $this->assertEquals($filterResponse->getScore(), 0);
        $this->assertEquals($filterResponse->getTotalCount(), 0);
        $this->assertEquals($filterResponse->getFailedCount(), 0);





    }
}
 