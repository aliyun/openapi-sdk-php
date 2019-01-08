<?php

namespace AlibabaCloud\Cdn\V20141111;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of OpenCdnSubscribeService
 *
 * @method string getSubEmail()
 * @method string getSecurityToken()
 * @method string getSubType()
 * @method string getSubMobile()
 * @method string getOwnerAccount()
 * @method string getOwnerId()
 * @method string getSubMedia()
 */
class OpenCdnSubscribeService extends RpcRequest
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
    public $action = 'OpenCdnSubscribeService';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @param string $subEmail
     *
     * @return $this
     */
    public function withSubEmail($subEmail)
    {
        $this->data['SubEmail'] = $subEmail;
        $this->options['query']['SubEmail'] = $subEmail;

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
     * @param string $subType
     *
     * @return $this
     */
    public function withSubType($subType)
    {
        $this->data['SubType'] = $subType;
        $this->options['query']['SubType'] = $subType;

        return $this;
    }

    /**
     * @param string $subMobile
     *
     * @return $this
     */
    public function withSubMobile($subMobile)
    {
        $this->data['SubMobile'] = $subMobile;
        $this->options['query']['SubMobile'] = $subMobile;

        return $this;
    }

    /**
     * @param string $ownerAccount
     *
     * @return $this
     */
    public function withOwnerAccount($ownerAccount)
    {
        $this->data['OwnerAccount'] = $ownerAccount;
        $this->options['query']['OwnerAccount'] = $ownerAccount;

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
     * @param string $subMedia
     *
     * @return $this
     */
    public function withSubMedia($subMedia)
    {
        $this->data['SubMedia'] = $subMedia;
        $this->options['query']['SubMedia'] = $subMedia;

        return $this;
    }
}
