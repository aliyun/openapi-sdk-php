<?php

namespace AlibabaCloud\Live\V20161101;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of AddLiveRecordNotifyConfig
 *
 * @method string getOnDemandUrl()
 * @method string getSecurityToken()
 * @method string getDomainName()
 * @method string getNotifyUrl()
 * @method string getOwnerId()
 * @method string getNeedStatusNotify()
 */
class AddLiveRecordNotifyConfig extends RpcRequest
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
    public $action = 'AddLiveRecordNotifyConfig';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @var string
     */
    public $serviceCode = 'live';

    /**
     * @deprecated deprecated since version 2.0, Use withOnDemandUrl() instead.
     *
     * @param string $onDemandUrl
     *
     * @return $this
     */
    public function setOnDemandUrl($onDemandUrl)
    {
        return $this->withOnDemandUrl($onDemandUrl);
    }

    /**
     * @param string $onDemandUrl
     *
     * @return $this
     */
    public function withOnDemandUrl($onDemandUrl)
    {
        $this->data['OnDemandUrl'] = $onDemandUrl;
        $this->options['query']['OnDemandUrl'] = $onDemandUrl;

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
     * @deprecated deprecated since version 2.0, Use withNotifyUrl() instead.
     *
     * @param string $notifyUrl
     *
     * @return $this
     */
    public function setNotifyUrl($notifyUrl)
    {
        return $this->withNotifyUrl($notifyUrl);
    }

    /**
     * @param string $notifyUrl
     *
     * @return $this
     */
    public function withNotifyUrl($notifyUrl)
    {
        $this->data['NotifyUrl'] = $notifyUrl;
        $this->options['query']['NotifyUrl'] = $notifyUrl;

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
     * @deprecated deprecated since version 2.0, Use withNeedStatusNotify() instead.
     *
     * @param string $needStatusNotify
     *
     * @return $this
     */
    public function setNeedStatusNotify($needStatusNotify)
    {
        return $this->withNeedStatusNotify($needStatusNotify);
    }

    /**
     * @param string $needStatusNotify
     *
     * @return $this
     */
    public function withNeedStatusNotify($needStatusNotify)
    {
        $this->data['NeedStatusNotify'] = $needStatusNotify;
        $this->options['query']['NeedStatusNotify'] = $needStatusNotify;

        return $this;
    }
}
