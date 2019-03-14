<?php

namespace AlibabaCloud\Market\V20151101;

use AlibabaCloud\Rpc;

/**
 * Api PushMeteringData
 *
 * @method string getMetering()
 */
class PushMeteringData extends Rpc
{
    public $product = 'Market';

    public $version = '2015-11-01';

    public $method = 'POST';

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
