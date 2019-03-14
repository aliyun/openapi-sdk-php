<?php

namespace AlibabaCloud\CloudAPI\V20160714;

use AlibabaCloud\Rpc;

/**
 * Api CreateIntranetDomain
 *
 * @method string getDeleteInternetDomain()
 * @method string getSecurityToken()
 * @method string getGroupId()
 */
class CreateIntranetDomain extends Rpc
{
    public $product = 'CloudAPI';

    public $version = '2016-07-14';

    public $method = 'POST';

    public $serviceCode = 'apigateway';

    /**
     * @param string $deleteInternetDomain
     *
     * @return $this
     */
    public function withDeleteInternetDomain($deleteInternetDomain)
    {
        $this->data['DeleteInternetDomain'] = $deleteInternetDomain;
        $this->options['query']['DeleteInternetDomain'] = $deleteInternetDomain;

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
     * @param string $groupId
     *
     * @return $this
     */
    public function withGroupId($groupId)
    {
        $this->data['GroupId'] = $groupId;
        $this->options['query']['GroupId'] = $groupId;

        return $this;
    }
}
