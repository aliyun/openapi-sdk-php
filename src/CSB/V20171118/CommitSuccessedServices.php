<?php

namespace AlibabaCloud\CSB\V20171118;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of CommitSuccessedServices
 *
 * @method string getCsbName()
 * @method string getServices()
 */
class CommitSuccessedServices extends RpcRequest
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
    public $action = 'CommitSuccessedServices';

    /**
     * @var string
     */
    public $scheme = 'https';


    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @deprecated deprecated since version 2.0, Use withCsbName() instead.
     *
     * @param string $csbName
     *
     * @return $this
     */
    public function setCsbName($csbName)
    {
        return $this->withCsbName($csbName);
    }

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
     * @deprecated deprecated since version 2.0, Use withServices() instead.
     *
     * @param string $services
     *
     * @return $this
     */
    public function setServices($services)
    {
        return $this->withServices($services);
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
