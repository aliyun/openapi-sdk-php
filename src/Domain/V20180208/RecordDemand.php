<?php

namespace AlibabaCloud\Domain\V20180208;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of RecordDemand
 *
 * @method string getBizId()
 * @method string getMessage()
 */
class RecordDemand extends RpcRequest
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
    public $action = 'RecordDemand';

    /**
     * @var string
     */
    public $method = 'POST';

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
     * @deprecated deprecated since version 2.0, Use withMessage() instead.
     *
     * @param string $message
     *
     * @return $this
     */
    public function setMessage($message)
    {
        return $this->withMessage($message);
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
