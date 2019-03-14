<?php

namespace AlibabaCloud\CloudPhoto\V20170711;

use AlibabaCloud\Rpc;

/**
 * Api ListTimeLines
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
class ListTimeLines extends Rpc
{
    public $product = 'CloudPhoto';

    public $version = '2017-07-11';

    public $scheme = 'https';

    public $method = 'POST';

    public $serviceCode = 'cloudphoto';

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
