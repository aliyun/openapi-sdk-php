<?php

namespace AlibabaCloud\Live\V20161101;

use AlibabaCloud\Rpc;

/**
 * Api SetLiveLazyPullStreamInfoConfig
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
class SetLiveLazyPullStreamInfoConfig extends Rpc
{
    public $product = 'live';

    public $version = '2016-11-01';

    public $method = 'POST';

    public $serviceCode = 'live';

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
