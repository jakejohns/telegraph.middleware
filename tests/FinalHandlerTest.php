<?php
namespace Telegraph\Middleware;

use Telegraph\Middleware\FakePhp;
use Zend\Diactoros\Response;
use Zend\Diactoros\ServerRequestFactory;

class FinalHandlerTest extends \PHPUnit_Framework_TestCase
{
    public function test()
    {
        $response = new Response;
        $handler = new FinalHandler($response);
        $this->assertSame(
            $response,
            $handler(ServerRequestFactory::fromGlobals(), function () {})
        );
    }

}
