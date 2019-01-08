<?php

namespace AlibabaCloud\Cdn\V20180510;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of SetHttpsOptionConfig
 *
 * @method string getHttp2()
 * @method string getDomainName()
 * @method string getOwnerId()
 * @method string getConfigId()
 */
class SetHttpsOptionConfig extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'Cdn';

    /**
     * @var string
     */
    public $version = '2018-05-10';

    /**
     * @var string
     */
    public $action = 'SetHttpsOptionConfig';

    /**
     * @param string $http2
     *
     * @return $this
     */
    public function withHttp2($http2)
    {
        $this->data['Http2'] = $http2;
        $this->options['query']['Http2'] = $http2;

        return $this;
    }

    /**
     * @param string $domainName
     *
     * @return $this
     */
    public function withDomainName($domainName)
    {
        $this->data['DomainName'] = $domainName;
        $this->options['query']['DomainName'] = $domainName;

        return $this;
    }

    /**
     * @param string $ownerId
     *
     * @return $this
     */
    public function withOwnerId($ownerId)
    {
        $this->data['OwnerId'] = $ownerId;
        $this->options['query']['OwnerId'] = $ownerId;

        return $this;
    }

    /**
     * @param string $configId
     *
     * @return $this
     */
    public function withConfigId($configId)
    {
        $this->data['ConfigId'] = $configId;
        $this->options['query']['ConfigId'] = $configId;

        return $this;
    }
}
