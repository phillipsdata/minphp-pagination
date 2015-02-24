<?php
namespace minphp\Pagination;

use \PHPUnit_Framework_TestCase;

/**
 * @coversDefaultClass \minphp\Pagination\Pagination
 */
class PaginationTest extends PHPUnit_Framework_TestCase
{
    /**
     * @covers ::__construct
     * @covers ::mergeArrays
     * @uses \minphp\Pagination\Pagination::setGet
     */
    public function testConstruct()
    {
        $this->assertInstanceOf('\minphp\Pagination\Pagination', new Pagination());
    }
}
