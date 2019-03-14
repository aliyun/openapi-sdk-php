<?php

namespace AlibabaCloud\Saf\V20180919;

use AlibabaCloud\Rpc;

/**
 * Api ExecuteRequest
 *
 * @method string getServiceParameters()
 * @method string getService()
 */
class ExecuteRequest extends Rpc
{
    public $product = 'saf';

    public $version = '2018-09-19';

    public $scheme = 'https';

    public $method = 'POST';

    public $serviceCode = 'saf';

    /**
     * @param string $serviceParameters
     *
     * @return $this
     */
    public function withServiceParameters($serviceParameters)
    {
        $this->data['ServiceParameters'] = $serviceParameters;
        $this->options['query']['ServiceParameters'] = $serviceParameters;

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
}
