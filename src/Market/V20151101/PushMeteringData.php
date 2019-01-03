<?php

namespace AlibabaCloud\Market\V20151101;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of PushMeteringData
 *
 * @method string getMetering()
 */
class PushMeteringData extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'Market';

    /**
     * @var string
     */
    public $version = '2015-11-01';

    /**
     * @var string
     */
    public $action = 'PushMeteringData';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @deprecated deprecated since version 2.0, Use withMetering() instead.
     *
     * @param string $metering
     *
     * @return $this
     */
    public function setMetering($metering)
    {
        return $this->withMetering($metering);
    }

    /**
     * @param string $metering
     *
     * @return $this
     */
    public function withMetering($metering)
    {
        $this->data['Metering'] = $metering;
        $this->options['query']['Metering'] = $metering;

        return $this;
    }
}
