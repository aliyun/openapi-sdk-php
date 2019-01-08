<?php

namespace AlibabaCloud\Push\V20160801;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of CancelPush
 *
 * @method string getMessageId()
 * @method string getAppKey()
 */
class CancelPush extends RpcRequest
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
    public $action = 'CancelPush';

    /**
     * @var string
     */
    public $method = 'POST';

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
