<?php

namespace AlibabaCloud\CloudPhoto\V20170711;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of ListTimeLines
 *
 * @method string getCursor()
 * @method string getPhotoSize()
 * @method string getTimeLineCount()
 * @method string getLibraryId()
 * @method string getStoreName()
 * @method string getTimeLineUnit()
 * @method string getFilterBy()
 * @method string getDirection()
 * @method string getOrder()
 */
class ListTimeLines extends RpcRequest
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
    public $action = 'ListTimeLines';

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
     * @deprecated deprecated since version 2.0, Use withCursor() instead.
     *
     * @param string $cursor
     *
     * @return $this
     */
    public function setCursor($cursor)
    {
        return $this->withCursor($cursor);
    }

    /**
     * @param string $cursor
     *
     * @return $this
     */
    public function withCursor($cursor)
    {
        $this->data['Cursor'] = $cursor;
        $this->options['query']['Cursor'] = $cursor;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withPhotoSize() instead.
     *
     * @param string $photoSize
     *
     * @return $this
     */
    public function setPhotoSize($photoSize)
    {
        return $this->withPhotoSize($photoSize);
    }

    /**
     * @param string $photoSize
     *
     * @return $this
     */
    public function withPhotoSize($photoSize)
    {
        $this->data['PhotoSize'] = $photoSize;
        $this->options['query']['PhotoSize'] = $photoSize;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withTimeLineCount() instead.
     *
     * @param string $timeLineCount
     *
     * @return $this
     */
    public function setTimeLineCount($timeLineCount)
    {
        return $this->withTimeLineCount($timeLineCount);
    }

    /**
     * @param string $timeLineCount
     *
     * @return $this
     */
    public function withTimeLineCount($timeLineCount)
    {
        $this->data['TimeLineCount'] = $timeLineCount;
        $this->options['query']['TimeLineCount'] = $timeLineCount;

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
     * @deprecated deprecated since version 2.0, Use withTimeLineUnit() instead.
     *
     * @param string $timeLineUnit
     *
     * @return $this
     */
    public function setTimeLineUnit($timeLineUnit)
    {
        return $this->withTimeLineUnit($timeLineUnit);
    }

    /**
     * @param string $timeLineUnit
     *
     * @return $this
     */
    public function withTimeLineUnit($timeLineUnit)
    {
        $this->data['TimeLineUnit'] = $timeLineUnit;
        $this->options['query']['TimeLineUnit'] = $timeLineUnit;

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
