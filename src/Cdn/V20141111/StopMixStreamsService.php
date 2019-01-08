<?php

namespace AlibabaCloud\Cdn\V20141111;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of StopMixStreamsService
 *
 * @method string getSecurityToken()
 * @method string getMainDomainName()
 * @method string getMixStreamName()
 * @method string getMixDomainName()
 * @method string getOwnerId()
 * @method string getMainAppName()
 * @method string getMixAppName()
 * @method string getMainStreamName()
 */
class StopMixStreamsService extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'Cdn';

    /**
     * @var string
     */
    public $version = '2014-11-11';

    /**
     * @var string
     */
    public $action = 'StopMixStreamsService';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @param string $securityToken
     *
     * @return $this
     */
    public function withSecurityToken($securityToken)
    {
        $this->data['SecurityToken'] = $securityToken;
        $this->options['query']['SecurityToken'] = $securityToken;

        return $this;
    }

    /**
     * @param string $mainDomainName
     *
     * @return $this
     */
    public function withMainDomainName($mainDomainName)
    {
        $this->data['MainDomainName'] = $mainDomainName;
        $this->options['query']['MainDomainName'] = $mainDomainName;

        return $this;
    }

    /**
     * @param string $mixStreamName
     *
     * @return $this
     */
    public function withMixStreamName($mixStreamName)
    {
        $this->data['MixStreamName'] = $mixStreamName;
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
        $this->data['MixDomainName'] = $mixDomainName;
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
        $this->data['OwnerId'] = $ownerId;
        $this->options['query']['OwnerId'] = $ownerId;

        return $this;
    }

    /**
     * @param string $mainAppName
     *
     * @return $this
     */
    public function withMainAppName($mainAppName)
    {
        $this->data['MainAppName'] = $mainAppName;
        $this->options['query']['MainAppName'] = $mainAppName;

        return $this;
    }

    /**
     * @param string $mixAppName
     *
     * @return $this
     */
    public function withMixAppName($mixAppName)
    {
        $this->data['MixAppName'] = $mixAppName;
        $this->options['query']['MixAppName'] = $mixAppName;

        return $this;
    }

    /**
     * @param string $mainStreamName
     *
     * @return $this
     */
    public function withMainStreamName($mainStreamName)
    {
        $this->data['MainStreamName'] = $mainStreamName;
        $this->options['query']['MainStreamName'] = $mainStreamName;

        return $this;
    }
}
