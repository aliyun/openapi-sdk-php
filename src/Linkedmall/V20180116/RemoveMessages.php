<?php

namespace AlibabaCloud\Linkedmall\V20180116;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of RemoveMessages
 *
 * @method string getBizId()
 * @method string getMessageIds()
 * @method string getExtJson()
 */
class RemoveMessages extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'linkedmall';

    /**
     * @var string
     */
    public $version = '2018-01-16';

    /**
     * @var string
     */
    public $action = 'RemoveMessages';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @var string
     */
    public $serviceCode = 'linkedmall';

    /**
     * @deprecated deprecated since version 2.0, Use withBizId() instead.
     *
     * @param string $bizId
     *
     * @return $this
     */
    public function setBizId($bizId)
    {
        return $this->withBizId($bizId);
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

    /**
     * @deprecated deprecated since version 2.0, Use withMessageIds() instead.
     *
     * @param string $messageIds
     *
     * @return $this
     */
    public function setMessageIds($messageIds)
    {
        return $this->withMessageIds($messageIds);
    }

    /**
     * @param string $messageIds
     *
     * @return $this
     */
    public function withMessageIds($messageIds)
    {
        $this->data['MessageIds'] = $messageIds;
        $this->options['query']['MessageIds'] = $messageIds;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withExtJson() instead.
     *
     * @param string $extJson
     *
     * @return $this
     */
    public function setExtJson($extJson)
    {
        return $this->withExtJson($extJson);
    }

    /**
     * @param string $extJson
     *
     * @return $this
     */
    public function withExtJson($extJson)
    {
        $this->data['ExtJson'] = $extJson;
        $this->options['query']['ExtJson'] = $extJson;

        return $this;
    }
}
