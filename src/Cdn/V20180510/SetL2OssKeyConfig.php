<?php

namespace AlibabaCloud\Cdn\V20180510;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of SetL2OssKeyConfig
 *
 * @method string getDomainName()
 * @method string getOwnerId()
 * @method string getConfigId()
 * @method string getPrivateOssAuth()
 */
class SetL2OssKeyConfig extends RpcRequest
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
    public $action = 'SetL2OssKeyConfig';

    /**
     * @deprecated deprecated since version 2.0, Use withDomainName() instead.
     *
     * @param string $domainName
     *
     * @return $this
     */
    public function setDomainName($domainName)
    {
        return $this->withDomainName($domainName);
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
     * @deprecated deprecated since version 2.0, Use withOwnerId() instead.
     *
     * @param string $ownerId
     *
     * @return $this
     */
    public function setOwnerId($ownerId)
    {
        return $this->withOwnerId($ownerId);
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
     * @deprecated deprecated since version 2.0, Use withConfigId() instead.
     *
     * @param string $configId
     *
     * @return $this
     */
    public function setConfigId($configId)
    {
        return $this->withConfigId($configId);
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

    /**
     * @deprecated deprecated since version 2.0, Use withPrivateOssAuth() instead.
     *
     * @param string $privateOssAuth
     *
     * @return $this
     */
    public function setPrivateOssAuth($privateOssAuth)
    {
        return $this->withPrivateOssAuth($privateOssAuth);
    }

    /**
     * @param string $privateOssAuth
     *
     * @return $this
     */
    public function withPrivateOssAuth($privateOssAuth)
    {
        $this->data['PrivateOssAuth'] = $privateOssAuth;
        $this->options['query']['PrivateOssAuth'] = $privateOssAuth;

        return $this;
    }
}
