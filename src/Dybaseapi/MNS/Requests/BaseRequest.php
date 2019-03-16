<?php

namespace AlibabaCloud\Dybaseapi\MNS\Requests;

/**
 * Class BaseRequest
 *
 * @package AlibabaCloud\Dybaseapi\MNS\Requests
 */
abstract class BaseRequest
{
    /**
     * @var mixed
     */
    protected $headers;

    /**
     * @var string
     */
    protected $resourcePath;

    /**
     * @var string
     */
    protected $method;

    /**
     * @var string
     */
    protected $body;

    /**
     * @var string
     */
    protected $queryString;

    /**
     * BaseRequest constructor.
     *
     * @param $method
     * @param $resourcePath
     */
    public function __construct($method, $resourcePath)
    {
        $this->method       = $method;
        $this->resourcePath = $resourcePath;
    }

    abstract public function generateBody();

    abstract public function generateQueryString();

    /**
     * @return mixed
     */
    public function getBody()
    {
        return $this->body;
    }

    /**
     * @param $body
     */
    public function setBody($body)
    {
        $this->body = $body;
    }

    /**
     * @return mixed
     */
    public function getQueryString()
    {
        return $this->queryString;
    }

    /**
     * @param $queryString
     */
    public function setQueryString($queryString)
    {
        $this->queryString = $queryString;
    }

    /**
     * @param $header
     *
     * @return bool
     */
    public function isHeaderSet($header)
    {
        return isset($this->headers[$header]);
    }

    /**
     * @return mixed
     */
    public function getHeaders()
    {
        return $this->headers;
    }

    /**
     * @param $header
     */
    public function removeHeader($header)
    {
        if (isset($this->headers[$header])) {
            unset($this->headers[$header]);
        }
    }

    /**
     * @param $header
     * @param $value
     */
    public function setHeader($header, $value)
    {
        $this->headers[$header] = $value;
    }

    /**
     * @return mixed
     */
    public function getResourcePath()
    {
        return $this->resourcePath;
    }

    /**
     * @return mixed
     */
    public function getMethod()
    {
        return $this->method;
    }
}
