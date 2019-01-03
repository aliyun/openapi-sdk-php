<?php

namespace AlibabaCloud\Cms\V20180308;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of ListAlarm
 *
 * @method string getIsEnable()
 * @method string getName()
 * @method string getNamespace()
 * @method string getPageSize()
 * @method string getId()
 * @method string getState()
 * @method string getDimension()
 * @method string getPageNumber()
 */
class ListAlarm extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'Cms';

    /**
     * @var string
     */
    public $version = '2018-03-08';

    /**
     * @var string
     */
    public $action = 'ListAlarm';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @deprecated deprecated since version 2.0, Use withIsEnable() instead.
     *
     * @param string $isEnable
     *
     * @return $this
     */
    public function setIsEnable($isEnable)
    {
        return $this->withIsEnable($isEnable);
    }

    /**
     * @param string $isEnable
     *
     * @return $this
     */
    public function withIsEnable($isEnable)
    {
        $this->data['IsEnable'] = $isEnable;
        $this->options['query']['IsEnable'] = $isEnable;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withName() instead.
     *
     * @param string $name
     *
     * @return $this
     */
    public function setName($name)
    {
        return $this->withName($name);
    }

    /**
     * @param string $name
     *
     * @return $this
     */
    public function withName($name)
    {
        $this->data['Name'] = $name;
        $this->options['query']['Name'] = $name;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withNamespace() instead.
     *
     * @param string $namespace
     *
     * @return $this
     */
    public function setNamespace($namespace)
    {
        return $this->withNamespace($namespace);
    }

    /**
     * @param string $namespace
     *
     * @return $this
     */
    public function withNamespace($namespace)
    {
        $this->data['Namespace'] = $namespace;
        $this->options['query']['Namespace'] = $namespace;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withPageSize() instead.
     *
     * @param string $pageSize
     *
     * @return $this
     */
    public function setPageSize($pageSize)
    {
        return $this->withPageSize($pageSize);
    }

    /**
     * @param string $pageSize
     *
     * @return $this
     */
    public function withPageSize($pageSize)
    {
        $this->data['PageSize'] = $pageSize;
        $this->options['query']['PageSize'] = $pageSize;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withId() instead.
     *
     * @param string $id
     *
     * @return $this
     */
    public function setId($id)
    {
        return $this->withId($id);
    }

    /**
     * @param string $id
     *
     * @return $this
     */
    public function withId($id)
    {
        $this->data['Id'] = $id;
        $this->options['query']['Id'] = $id;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withState() instead.
     *
     * @param string $state
     *
     * @return $this
     */
    public function setState($state)
    {
        return $this->withState($state);
    }

    /**
     * @param string $state
     *
     * @return $this
     */
    public function withState($state)
    {
        $this->data['State'] = $state;
        $this->options['query']['State'] = $state;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withDimension() instead.
     *
     * @param string $dimension
     *
     * @return $this
     */
    public function setDimension($dimension)
    {
        return $this->withDimension($dimension);
    }

    /**
     * @param string $dimension
     *
     * @return $this
     */
    public function withDimension($dimension)
    {
        $this->data['Dimension'] = $dimension;
        $this->options['query']['Dimension'] = $dimension;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withPageNumber() instead.
     *
     * @param string $pageNumber
     *
     * @return $this
     */
    public function setPageNumber($pageNumber)
    {
        return $this->withPageNumber($pageNumber);
    }

    /**
     * @param string $pageNumber
     *
     * @return $this
     */
    public function withPageNumber($pageNumber)
    {
        $this->data['PageNumber'] = $pageNumber;
        $this->options['query']['PageNumber'] = $pageNumber;

        return $this;
    }
}
