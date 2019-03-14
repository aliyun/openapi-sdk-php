<?php

namespace AlibabaCloud\Cdn\V20141111;

use AlibabaCloud\Rpc;

/**
 * Api SetLiveStreamsNotifyUrlConfig
 *
 * @method string getSecurityToken()
 * @method string getDomainName()
 * @method string getNotifyUrl()
 * @method string getOwnerId()
 */
class SetLiveStreamsNotifyUrlConfig extends Rpc
{
    public $product = 'Cdn';

    public $version = '2014-11-11';

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
}
