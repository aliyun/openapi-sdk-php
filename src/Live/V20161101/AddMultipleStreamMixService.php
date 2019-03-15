<?php

namespace AlibabaCloud\Live\V20161101;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * @method string getAppName()
 * @method string getSecurityToken()
 * @method string getDomainName()
 * @method string getMixStreamName()
 * @method string getMixDomainName()
 * @method string getOwnerId()
 * @method string getMixAppName()
 * @method string getStreamName()
 */
class AddMultipleStreamMixService extends RpcRequest
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
    public $action = 'AddMultipleStreamMixService';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @var string
     */
    public $serviceCode = 'live';

    /**
     * @param string $appName
     *
     * @return $this
     */
    public function withAppName($appName)
    {
        $this->data['AppName']             = $appName;
        $this->options['query']['AppName'] = $appName;

        return $this;
    }

    /**
     * @param string $securityToken
     *
     * @return $this
     */
    public function withSecurityToken($securityToken)
    {
        $this->data['SecurityToken']             = $securityToken;
        $this->options['query']['SecurityToken'] = $securityToken;

        return $this;
    }

    /**
     * @param string $domainName
     *
     * @return $this
     */
    public function withDomainName($domainName)
    {
        $this->data['DomainName']             = $domainName;
        $this->options['query']['DomainName'] = $domainName;

        return $this;
    }

    /**
     * @param string $mixStreamName
     *
     * @return $this
     */
    public function withMixStreamName($mixStreamName)
    {
        $this->data['MixStreamName']             = $mixStreamName;
        $this->options['query']['MixStreamName'] = $mixStreamName;

        return $this;
    }

    /**
     * @param string $mixDomainName
     *
     * @return $this
     */
    public function withMixDomainName($mixDomainName)
    {
        $this->data['MixDomainName']             = $mixDomainName;
        $this->options['query']['MixDomainName'] = $mixDomainName;

        return $this;
    }

    /**
     * @param string $ownerId
     *
     * @return $this
     */
    public function withOwnerId($ownerId)
    {
        $this->data['OwnerId']             = $ownerId;
        $this->options['query']['OwnerId'] = $ownerId;

        return $this;
    }

    /**
     * @param string $mixAppName
     *
     * @return $this
     */
    public function withMixAppName($mixAppName)
    {
        $this->data['MixAppName']             = $mixAppName;
        $this->options['query']['MixAppName'] = $mixAppName;

        return $this;
    }

    /**
     * @param string $streamName
     *
     * @return $this
     */
    public function withStreamName($streamName)
    {
        $this->data['StreamName']             = $streamName;
        $this->options['query']['StreamName'] = $streamName;

        return $this;
    }
}
