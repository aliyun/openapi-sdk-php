<?php

namespace AlibabaCloud\EHPC\V20180412;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of StartVisualService
 *
 * @method string getPort()
 * @method string getClusterId()
 * @method string getCidrIp()
 */
class StartVisualService extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'EHPC';

    /**
     * @var string
     */
    public $version = '2018-04-12';

    /**
     * @var string
     */
    public $action = 'StartVisualService';

    /**
     * @var string
     */
    public $serviceCode = 'ehs';

    /**
     * @param string $port
     *
     * @return $this
     */
    public function withPort($port)
    {
        $this->data['Port'] = $port;
        $this->options['query']['Port'] = $port;

        return $this;
    }

    /**
     * @param string $clusterId
     *
     * @return $this
     */
    public function withClusterId($clusterId)
    {
        $this->data['ClusterId'] = $clusterId;
        $this->options['query']['ClusterId'] = $clusterId;

        return $this;
    }

    /**
     * @param string $cidrIp
     *
     * @return $this
     */
    public function withCidrIp($cidrIp)
    {
        $this->data['CidrIp'] = $cidrIp;
        $this->options['query']['CidrIp'] = $cidrIp;

        return $this;
    }
}
