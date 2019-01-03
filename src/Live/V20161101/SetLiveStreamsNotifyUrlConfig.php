<?php

namespace AlibabaCloud\Live\V20161101;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of SetLiveStreamsNotifyUrlConfig
 *
 * @method string getAuthKey()
 * @method string getDomainName()
 * @method string getNotifyUrl()
 * @method string getOwnerId()
 * @method string getAuthType()
 */
class SetLiveStreamsNotifyUrlConfig extends RpcRequest
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
    public $action = 'SetLiveStreamsNotifyUrlConfig';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @var string
     */
    public $serviceCode = 'live';

    /**
     * @deprecated deprecated since version 2.0, Use withAuthKey() instead.
     *
     * @param string $authKey
     *
     * @return $this
     */
    public function setAuthKey($authKey)
    {
        return $this->withAuthKey($authKey);
    }

    /**
     * @param string $authKey
     *
     * @return $this
     */
    public function withAuthKey($authKey)
    {
        $this->data['AuthKey'] = $authKey;
        $this->options['query']['AuthKey'] = $authKey;

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
     * @deprecated deprecated since version 2.0, Use withAuthType() instead.
     *
     * @param string $authType
     *
     * @return $this
     */
    public function setAuthType($authType)
    {
        return $this->withAuthType($authType);
    }

    /**
     * @param string $authType
     *
     * @return $this
     */
    public function withAuthType($authType)
    {
        $this->data['AuthType'] = $authType;
        $this->options['query']['AuthType'] = $authType;

        return $this;
    }
}
