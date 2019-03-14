<?php

namespace AlibabaCloud\CSB\V20171118;

use AlibabaCloud\Rpc;

/**
 * Api CommitSuccessedServices
 *
 * @method string getCsbName()
 * @method string getServices()
 */
class CommitSuccessedServices extends Rpc
{
    public $product = 'CSB';

    public $version = '2017-11-18';

    public $scheme = 'https';

    public $method = 'POST';

    /**
     * @param string $csbName
     *
     * @return $this
     */
    public function withCsbName($csbName)
    {
        $this->data['CsbName'] = $csbName;
        $this->options['query']['CsbName'] = $csbName;

        return $this;
    }

    /**
     * @param string $services
     *
     * @return $this
     */
    public function withServices($services)
    {
        $this->data['Services'] = $services;
        $this->options['query']['Services'] = $services;

        return $this;
    }
}
