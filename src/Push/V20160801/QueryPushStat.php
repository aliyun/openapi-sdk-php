<?php

namespace AlibabaCloud\Push\V20160801;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of QueryPushStat
 *
 * @method string getMessageId()
 * @method string getAppKey()
 */
class QueryPushStat extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'Push';

    /**
     * @var string
     */
    public $version = '2016-08-01';

    /**
     * @var string
     */
    public $action = 'QueryPushStat';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @deprecated deprecated since version 2.0, Use withMessageId() instead.
     *
     * @param string $messageId
     *
     * @return $this
     */
    public function setMessageId($messageId)
    {
        return $this->withMessageId($messageId);
    }

    /**
     * @param string $messageId
     *
     * @return $this
     */
    public function withMessageId($messageId)
    {
        $this->data['MessageId'] = $messageId;
        $this->options['query']['MessageId'] = $messageId;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withAppKey() instead.
     *
     * @param string $appKey
     *
     * @return $this
     */
    public function setAppKey($appKey)
    {
        return $this->withAppKey($appKey);
    }

    /**
     * @param string $appKey
     *
     * @return $this
     */
    public function withAppKey($appKey)
    {
        $this->data['AppKey'] = $appKey;
        $this->options['query']['AppKey'] = $appKey;

        return $this;
    }
}
