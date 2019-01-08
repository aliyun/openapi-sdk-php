<?php

namespace AlibabaCloud\Ubsms\V20150623;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of SetUserBusinessStatus
 *
 * @method string getUid()
 * @method string getStatusValue()
 * @method string getService()
 * @method string getStatusKey()
 */
class SetUserBusinessStatus extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'Ubsms';

    /**
     * @var string
     */
    public $version = '2015-06-23';

    /**
     * @var string
     */
    public $action = 'SetUserBusinessStatus';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @param string $uid
     *
     * @return $this
     */
    public function withUid($uid)
    {
        $this->data['Uid'] = $uid;
        $this->options['query']['Uid'] = $uid;

        return $this;
    }

    /**
     * @param string $statusValue
     *
     * @return $this
     */
    public function withStatusValue($statusValue)
    {
        $this->data['StatusValue'] = $statusValue;
        $this->options['query']['StatusValue'] = $statusValue;

        return $this;
    }

    /**
     * @param string $service
     *
     * @return $this
     */
    public function withService($service)
    {
        $this->data['Service'] = $service;
        $this->options['query']['Service'] = $service;

        return $this;
    }

    /**
     * @param string $statusKey
     *
     * @return $this
     */
    public function withStatusKey($statusKey)
    {
        $this->data['StatusKey'] = $statusKey;
        $this->options['query']['StatusKey'] = $statusKey;

        return $this;
    }
}
