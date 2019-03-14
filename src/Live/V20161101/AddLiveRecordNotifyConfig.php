<?php

namespace AlibabaCloud\Live\V20161101;

use AlibabaCloud\Rpc;

/**
 * Api AddLiveRecordNotifyConfig
 *
 * @method string getOnDemandUrl()
 * @method string getSecurityToken()
 * @method string getDomainName()
 * @method string getNotifyUrl()
 * @method string getOwnerId()
 * @method string getNeedStatusNotify()
 */
class AddLiveRecordNotifyConfig extends Rpc
{
    public $product = 'live';

    public $version = '2016-11-01';

    public $method = 'POST';

    public $serviceCode = 'live';

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
