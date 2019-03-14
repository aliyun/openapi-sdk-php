<?php

namespace AlibabaCloud\Linkedmall\V20180116;

use AlibabaCloud\Rpc;

/**
 * Api RemoveMessages
 *
 * @method string getExtJson()
 * @method string getBizId()
 * @method string getMessageIds()
 */
class RemoveMessages extends Rpc
{
    public $product = 'linkedmall';

    public $version = '2018-01-16';

    public $method = 'POST';

    public $serviceCode = 'linkedmall';

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
}
