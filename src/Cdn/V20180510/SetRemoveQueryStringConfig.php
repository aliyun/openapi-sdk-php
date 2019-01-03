<?php

namespace AlibabaCloud\Cdn\V20180510;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of SetRemoveQueryStringConfig
 *
 * @method string getAliRemoveArgs()
 * @method string getKeepOssArgs()
 * @method string getDomainName()
 * @method string getOwnerId()
 * @method string getConfigId()
 */
class SetRemoveQueryStringConfig extends RpcRequest
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
    public $action = 'SetRemoveQueryStringConfig';

    /**
     * @deprecated deprecated since version 2.0, Use withAliRemoveArgs() instead.
     *
     * @param string $aliRemoveArgs
     *
     * @return $this
     */
    public function setAliRemoveArgs($aliRemoveArgs)
    {
        return $this->withAliRemoveArgs($aliRemoveArgs);
    }

    /**
     * @param string $aliRemoveArgs
     *
     * @return $this
     */
    public function withAliRemoveArgs($aliRemoveArgs)
    {
        $this->data['AliRemoveArgs'] = $aliRemoveArgs;
        $this->options['query']['AliRemoveArgs'] = $aliRemoveArgs;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withKeepOssArgs() instead.
     *
     * @param string $keepOssArgs
     *
     * @return $this
     */
    public function setKeepOssArgs($keepOssArgs)
    {
        return $this->withKeepOssArgs($keepOssArgs);
    }

    /**
     * @param string $keepOssArgs
     *
     * @return $this
     */
    public function withKeepOssArgs($keepOssArgs)
    {
        $this->data['KeepOssArgs'] = $keepOssArgs;
        $this->options['query']['KeepOssArgs'] = $keepOssArgs;

        return $this;
    }

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
}
