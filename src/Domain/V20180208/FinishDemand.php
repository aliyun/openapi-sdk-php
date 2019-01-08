<?php

namespace AlibabaCloud\Domain\V20180208;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of FinishDemand
 *
 * @method string getBizId()
 * @method string getMessage()
 */
class FinishDemand extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'Domain';

    /**
     * @var string
     */
    public $version = '2018-02-08';

    /**
     * @var string
     */
    public $action = 'FinishDemand';

    /**
     * @var string
     */
    public $method = 'POST';

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
     * @param string $message
     *
     * @return $this
     */
    public function withMessage($message)
    {
        $this->data['Message'] = $message;
        $this->options['query']['Message'] = $message;

        return $this;
    }
}
