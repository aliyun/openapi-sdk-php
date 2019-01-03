<?php

namespace AlibabaCloud\Live\V20161101;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of StartMixStreamsService
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
class StartMixStreamsService extends RpcRequest
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
    public $action = 'StartMixStreamsService';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @var string
     */
    public $serviceCode = 'live';

    /**
     * @deprecated deprecated since version 2.0, Use withMixType() instead.
     *
     * @param string $mixType
     *
     * @return $this
     */
    public function setMixType($mixType)
    {
        return $this->withMixType($mixType);
    }

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
     * @deprecated deprecated since version 2.0, Use withSecurityToken() instead.
     *
     * @param string $securityToken
     *
     * @return $this
     */
    public function setSecurityToken($securityToken)
    {
        return $this->withSecurityToken($securityToken);
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
     * @deprecated deprecated since version 2.0, Use withMainDomainName() instead.
     *
     * @param string $mainDomainName
     *
     * @return $this
     */
    public function setMainDomainName($mainDomainName)
    {
        return $this->withMainDomainName($mainDomainName);
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
     * @deprecated deprecated since version 2.0, Use withMixStreamName() instead.
     *
     * @param string $mixStreamName
     *
     * @return $this
     */
    public function setMixStreamName($mixStreamName)
    {
        return $this->withMixStreamName($mixStreamName);
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
     * @deprecated deprecated since version 2.0, Use withMixTemplate() instead.
     *
     * @param string $mixTemplate
     *
     * @return $this
     */
    public function setMixTemplate($mixTemplate)
    {
        return $this->withMixTemplate($mixTemplate);
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
     * @deprecated deprecated since version 2.0, Use withMixDomainName() instead.
     *
     * @param string $mixDomainName
     *
     * @return $this
     */
    public function setMixDomainName($mixDomainName)
    {
        return $this->withMixDomainName($mixDomainName);
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
     * @deprecated deprecated since version 2.0, Use withMainAppName() instead.
     *
     * @param string $mainAppName
     *
     * @return $this
     */
    public function setMainAppName($mainAppName)
    {
        return $this->withMainAppName($mainAppName);
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
     * @deprecated deprecated since version 2.0, Use withMixAppName() instead.
     *
     * @param string $mixAppName
     *
     * @return $this
     */
    public function setMixAppName($mixAppName)
    {
        return $this->withMixAppName($mixAppName);
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
     * @deprecated deprecated since version 2.0, Use withMainStreamName() instead.
     *
     * @param string $mainStreamName
     *
     * @return $this
     */
    public function setMainStreamName($mainStreamName)
    {
        return $this->withMainStreamName($mainStreamName);
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
