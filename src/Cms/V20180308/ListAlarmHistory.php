<?php

namespace AlibabaCloud\Cms\V20180308;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of ListAlarmHistory
 *
 * @method string getCursor()
 * @method string getSize()
 * @method string getEndTime()
 * @method string getId()
 * @method string getStartTime()
 */
class ListAlarmHistory extends RpcRequest
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
    public $action = 'ListAlarmHistory';

    /**
     * @var string
     */
    public $method = 'POST';

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
}
