<?php

namespace AlibabaCloud\CloudPhoto\V20170711;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of ListTimeLinePhotos
 *
 * @method string getSize()
 * @method string getLibraryId()
 * @method string getEndTime()
 * @method string getStoreName()
 * @method string getPage()
 * @method string getStartTime()
 * @method string getFilterBy()
 * @method string getDirection()
 * @method string getOrder()
 */
class ListTimeLinePhotos extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'CloudPhoto';

    /**
     * @var string
     */
    public $version = '2017-07-11';

    /**
     * @var string
     */
    public $action = 'ListTimeLinePhotos';

    /**
     * @var string
     */
    public $scheme = 'https';


    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @var string
     */
    public $serviceCode = 'cloudphoto';

    /**
     * @deprecated deprecated since version 2.0, Use withSize() instead.
     *
     * @param string $size
     *
     * @return $this
     */
    public function setSize($size)
    {
        return $this->withSize($size);
    }

    /**
     * @param string $size
     *
     * @return $this
     */
    public function withSize($size)
    {
        $this->data['Size'] = $size;
        $this->options['query']['Size'] = $size;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withLibraryId() instead.
     *
     * @param string $libraryId
     *
     * @return $this
     */
    public function setLibraryId($libraryId)
    {
        return $this->withLibraryId($libraryId);
    }

    /**
     * @param string $libraryId
     *
     * @return $this
     */
    public function withLibraryId($libraryId)
    {
        $this->data['LibraryId'] = $libraryId;
        $this->options['query']['LibraryId'] = $libraryId;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withEndTime() instead.
     *
     * @param string $endTime
     *
     * @return $this
     */
    public function setEndTime($endTime)
    {
        return $this->withEndTime($endTime);
    }

    /**
     * @param string $endTime
     *
     * @return $this
     */
    public function withEndTime($endTime)
    {
        $this->data['EndTime'] = $endTime;
        $this->options['query']['EndTime'] = $endTime;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withStoreName() instead.
     *
     * @param string $storeName
     *
     * @return $this
     */
    public function setStoreName($storeName)
    {
        return $this->withStoreName($storeName);
    }

    /**
     * @param string $storeName
     *
     * @return $this
     */
    public function withStoreName($storeName)
    {
        $this->data['StoreName'] = $storeName;
        $this->options['query']['StoreName'] = $storeName;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withPage() instead.
     *
     * @param string $page
     *
     * @return $this
     */
    public function setPage($page)
    {
        return $this->withPage($page);
    }

    /**
     * @param string $page
     *
     * @return $this
     */
    public function withPage($page)
    {
        $this->data['Page'] = $page;
        $this->options['query']['Page'] = $page;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withStartTime() instead.
     *
     * @param string $startTime
     *
     * @return $this
     */
    public function setStartTime($startTime)
    {
        return $this->withStartTime($startTime);
    }

    /**
     * @param string $startTime
     *
     * @return $this
     */
    public function withStartTime($startTime)
    {
        $this->data['StartTime'] = $startTime;
        $this->options['query']['StartTime'] = $startTime;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withFilterBy() instead.
     *
     * @param string $filterBy
     *
     * @return $this
     */
    public function setFilterBy($filterBy)
    {
        return $this->withFilterBy($filterBy);
    }

    /**
     * @param string $filterBy
     *
     * @return $this
     */
    public function withFilterBy($filterBy)
    {
        $this->data['FilterBy'] = $filterBy;
        $this->options['query']['FilterBy'] = $filterBy;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withDirection() instead.
     *
     * @param string $direction
     *
     * @return $this
     */
    public function setDirection($direction)
    {
        return $this->withDirection($direction);
    }

    /**
     * @param string $direction
     *
     * @return $this
     */
    public function withDirection($direction)
    {
        $this->data['Direction'] = $direction;
        $this->options['query']['Direction'] = $direction;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withOrder() instead.
     *
     * @param string $order
     *
     * @return $this
     */
    public function setOrder($order)
    {
        return $this->withOrder($order);
    }

    /**
     * @param string $order
     *
     * @return $this
     */
    public function withOrder($order)
    {
        $this->data['Order'] = $order;
        $this->options['query']['Order'] = $order;

        return $this;
    }
}
