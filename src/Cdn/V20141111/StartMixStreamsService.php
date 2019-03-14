<?php

namespace AlibabaCloud\Cdn\V20141111;

use AlibabaCloud\Rpc;

/**
 * Api StartMixStreamsService
 *
 * @method string getMixType()
 * @method string getSecurityToken()
 * @method string getMainDomainName()
 * @method string getMixStreamName()
 * @method string getMixTemplate()
 * @method string getMixDomainName()
 * @method string getOwnerId()
 * @method string getMainAppName()
 * @method string getMixAppName()
 * @method string getMainStreamName()
 */
class StartMixStreamsService extends Rpc
{
    public $product = 'Cdn';

    public $version = '2014-11-11';

    public $method = 'POST';

    /**
     * @param string $mixType
     *
     * @return $this
     */
    public function withMixType($mixType)
    {
        $this->data['MixType'] = $mixType;
        $this->options['query']['MixType'] = $mixType;

        return $this;
    }

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
     * @param string $mixTemplate
     *
     * @return $this
     */
    public function withMixTemplate($mixTemplate)
    {
        $this->data['MixTemplate'] = $mixTemplate;
        $this->options['query']['MixTemplate'] = $mixTemplate;

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
