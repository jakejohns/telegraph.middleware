<?php
/**
 *
 * This file is part of Telegraph for PHP.
 *
 * @license http://opensource.org/licenses/MIT MIT
 *
 * @copyright 2016, Telegraph for PHP
 *
 */
namespace Telegraph\Middleware;

use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;

/**
 *
 * Return the PSR-7 response.
 *
 * @package telegraph/middleware
 *
 */
class FinalHandler
{
    /**
     * Response
     *
     * @var ResponseInterface
     *
     * @access protected
     */
    protected $response;

    /**
     * __construct
     *
     * @param ResponseInterface $response The response
     *
     * @access public
     */
    public function __construct(ResponseInterface $response)
    {
        $this->response = $response;
    }

    /**
     *
     * Return the PSR-7 Response.
     *
     * @param RequestInterface $request The HTTP request.
     *
     * @param callable $next The next middleware in the queue.
     *
     * @return ResponseInterface
     *
     */
    public function __invoke(RequestInterface $request, callable $next)
    {
        return $this->response;
    }
}
