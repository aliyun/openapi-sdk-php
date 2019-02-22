<?php

namespace AlibabaCloud\Rtc\V20180111;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of ReceiveNotify
 *
 * @method string getTraceId()
 * @method string getContent()
 * @method string getEvent()
 * @method string getOwnerId()
 * @method string getContentType()
 * @method string getBizId()
 */
class ReceiveNotify extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'rtc';

    /**
     * @var string
     */
    public $version = '2018-01-11';

    /**
     * @var string
     */
    public $action = 'ReceiveNotify';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @var string
     */
    public $serviceCode = 'rtc';

    /**
     * @param string $traceId
     *
     * @return $this
     */
    public function withTraceId($traceId)
    {
        $this->data['TraceId'] = $traceId;
        $this->options['query']['TraceId'] = $traceId;

        return $this;
    }

    /**
     * @param string $content
     *
     * @return $this
     */
    public function withContent($content)
    {
        $this->data['Content'] = $content;
        $this->options['query']['Content'] = $content;

        return $this;
    }

    /**
     * @param string $event
     *
     * @return $this
     */
    public function withEvent($event)
    {
        $this->data['Event'] = $event;
        $this->options['query']['Event'] = $event;

        return $this;
    }

    /**
     * @param string $ownerId
     *
     * @return $this
     */
    public function withOwnerId($ownerId)
    {
        $this->data['OwnerId'] = $ownerId;
        $this->options['query']['OwnerId'] = $ownerId;

        return $this;
    }

    /**
     * @param string $contentType
     *
     * @return $this
     */
    public function withContentType($contentType)
    {
        $this->data['ContentType'] = $contentType;
        $this->options['query']['ContentType'] = $contentType;

        return $this;
    }

    /**
     * @param string $bizId
     *
     * @return $this
     */
    public function withBizId($bizId)
    {
        $this->data['BizId'] = $bizId;
        $this->options['query']['BizId'] = $bizId;

        return $this;
    }
}
