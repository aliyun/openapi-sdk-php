<?php

namespace AlibabaCloud\CSB\V20171118;

use AlibabaCloud\Rpc;

/**
 * Api UpdateServiceQPS
 *
 * @method string getQps()
 * @method string getServiceId()
 */
class UpdateServiceQPS extends Rpc
{
    public $product = 'CSB';

    public $version = '2017-11-18';

    public $scheme = 'https';

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
