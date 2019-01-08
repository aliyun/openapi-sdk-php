<?php

namespace AlibabaCloud\CSB\V20171118;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of UpdateServiceQPS
 *
 * @method string getQps()
 * @method string getServiceId()
 */
class UpdateServiceQPS extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'CSB';

    /**
     * @var string
     */
    public $version = '2017-11-18';

    /**
     * @var string
     */
    public $action = 'UpdateServiceQPS';

    /**
     * @var string
     */
    public $scheme = 'https';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @param string $qps
     *
     * @return $this
     */
    public function withQps($qps)
    {
        $this->data['Qps'] = $qps;
        $this->options['query']['Qps'] = $qps;

        return $this;
    }

    /**
     * @param string $serviceId
     *
     * @return $this
     */
    public function withServiceId($serviceId)
    {
        $this->data['ServiceId'] = $serviceId;
        $this->options['query']['ServiceId'] = $serviceId;

        return $this;
    }
}
