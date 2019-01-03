<?php

namespace AlibabaCloud\Cdn\V20141111;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of ModifyCdnSubscribeService
 *
 * @method string getSubEmail()
 * @method string getSecurityToken()
 * @method string getSubType()
 * @method string getSubMobile()
 * @method string getOwnerAccount()
 * @method string getOwnerId()
 * @method string getSubMedia()
 */
class ModifyCdnSubscribeService extends RpcRequest
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
    public $action = 'ModifyCdnSubscribeService';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @deprecated deprecated since version 2.0, Use withSubEmail() instead.
     *
     * @param string $subEmail
     *
     * @return $this
     */
    public function setSubEmail($subEmail)
    {
        return $this->withSubEmail($subEmail);
    }

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
     * @deprecated deprecated since version 2.0, Use withSubType() instead.
     *
     * @param string $subType
     *
     * @return $this
     */
    public function setSubType($subType)
    {
        return $this->withSubType($subType);
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
     * @deprecated deprecated since version 2.0, Use withSubMobile() instead.
     *
     * @param string $subMobile
     *
     * @return $this
     */
    public function setSubMobile($subMobile)
    {
        return $this->withSubMobile($subMobile);
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
     * @deprecated deprecated since version 2.0, Use withOwnerAccount() instead.
     *
     * @param string $ownerAccount
     *
     * @return $this
     */
    public function setOwnerAccount($ownerAccount)
    {
        return $this->withOwnerAccount($ownerAccount);
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
     * @deprecated deprecated since version 2.0, Use withSubMedia() instead.
     *
     * @param string $subMedia
     *
     * @return $this
     */
    public function setSubMedia($subMedia)
    {
        return $this->withSubMedia($subMedia);
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
