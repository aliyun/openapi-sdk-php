<?php

namespace AlibabaCloud\Live\V20161101;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of SetLiveLazyPullStreamInfoConfig
 *
 * @method string getAppName()
 * @method string getPullAuthKey()
 * @method string getPullAuthType()
 * @method string getDomainName()
 * @method string getPullDomainName()
 * @method string getOwnerId()
 * @method string getPullAppName()
 * @method string getPullProtocol()
 */
class SetLiveLazyPullStreamInfoConfig extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'live';

    /**
     * @var string
     */
    public $version = '2016-11-01';

    /**
     * @var string
     */
    public $action = 'SetLiveLazyPullStreamInfoConfig';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @var string
     */
    public $serviceCode = 'live';

    /**
     * @deprecated deprecated since version 2.0, Use withAppName() instead.
     *
     * @param string $appName
     *
     * @return $this
     */
    public function setAppName($appName)
    {
        return $this->withAppName($appName);
    }

    /**
     * @param string $appName
     *
     * @return $this
     */
    public function withAppName($appName)
    {
        $this->data['AppName'] = $appName;
        $this->options['query']['AppName'] = $appName;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withPullAuthKey() instead.
     *
     * @param string $pullAuthKey
     *
     * @return $this
     */
    public function setPullAuthKey($pullAuthKey)
    {
        return $this->withPullAuthKey($pullAuthKey);
    }

    /**
     * @param string $pullAuthKey
     *
     * @return $this
     */
    public function withPullAuthKey($pullAuthKey)
    {
        $this->data['PullAuthKey'] = $pullAuthKey;
        $this->options['query']['PullAuthKey'] = $pullAuthKey;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withPullAuthType() instead.
     *
     * @param string $pullAuthType
     *
     * @return $this
     */
    public function setPullAuthType($pullAuthType)
    {
        return $this->withPullAuthType($pullAuthType);
    }

    /**
     * @param string $pullAuthType
     *
     * @return $this
     */
    public function withPullAuthType($pullAuthType)
    {
        $this->data['PullAuthType'] = $pullAuthType;
        $this->options['query']['PullAuthType'] = $pullAuthType;

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
     * @deprecated deprecated since version 2.0, Use withPullDomainName() instead.
     *
     * @param string $pullDomainName
     *
     * @return $this
     */
    public function setPullDomainName($pullDomainName)
    {
        return $this->withPullDomainName($pullDomainName);
    }

    /**
     * @param string $pullDomainName
     *
     * @return $this
     */
    public function withPullDomainName($pullDomainName)
    {
        $this->data['PullDomainName'] = $pullDomainName;
        $this->options['query']['PullDomainName'] = $pullDomainName;

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
     * @deprecated deprecated since version 2.0, Use withPullAppName() instead.
     *
     * @param string $pullAppName
     *
     * @return $this
     */
    public function setPullAppName($pullAppName)
    {
        return $this->withPullAppName($pullAppName);
    }

    /**
     * @param string $pullAppName
     *
     * @return $this
     */
    public function withPullAppName($pullAppName)
    {
        $this->data['PullAppName'] = $pullAppName;
        $this->options['query']['PullAppName'] = $pullAppName;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withPullProtocol() instead.
     *
     * @param string $pullProtocol
     *
     * @return $this
     */
    public function setPullProtocol($pullProtocol)
    {
        return $this->withPullProtocol($pullProtocol);
    }

    /**
     * @param string $pullProtocol
     *
     * @return $this
     */
    public function withPullProtocol($pullProtocol)
    {
        $this->data['PullProtocol'] = $pullProtocol;
        $this->options['query']['PullProtocol'] = $pullProtocol;

        return $this;
    }
}
