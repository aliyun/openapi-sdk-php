<?php

namespace AlibabaCloud\CSB\V20171118;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of GetService
 *
 * @method string getCsbId()
 * @method string getServiceId()
 */
class GetService extends RpcRequest
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
    public $action = 'GetService';

    /**
     * @var string
     */
    public $scheme = 'https';

    /**
     * @param string $csbId
     *
     * @return $this
     */
    public function withCsbId($csbId)
    {
        $this->data['CsbId'] = $csbId;
        $this->options['query']['CsbId'] = $csbId;

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
