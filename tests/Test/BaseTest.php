<?php
// +----------------------------------------------------------------------
// | BaseTest.php [ WE CAN DO IT JUST THINK IT ]
// +----------------------------------------------------------------------
// | Copyright (c) 2016-2017 limingxinleo All rights reserved.
// +----------------------------------------------------------------------
// | Author: limx <715557344@qq.com> <https://github.com/limingxinleo>
// +----------------------------------------------------------------------
namespace Tests\Test;

use SayHello\Test;
use Tests\TestCase;

class BaseTest extends TestCase
{
    public function testExample()
    {
        $this->assertEquals('Hello World', Test::getInstance()->say());
    }
}