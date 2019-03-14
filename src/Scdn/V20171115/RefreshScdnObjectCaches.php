<?php

namespace AlibabaCloud\Scdn\V20171115;

use AlibabaCloud\Rpc;

/**
 * Api RefreshScdnObjectCaches
 *
 * @method string getSecurityToken()
 * @method string getObjectPath()
 * @method string getOwnerId()
 * @method string getObjectType()
 */
class RefreshScdnObjectCaches extends Rpc
{
    public $product = 'scdn';

    public $version = '2017-11-15';

    public $method = 'POST';

    public $serviceCode = 'scdn';

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
     * @param string $objectPath
     *
     * @return $this
     */
    public function withObjectPath($objectPath)
    {
        $this->data['ObjectPath'] = $objectPath;
        $this->options['query']['ObjectPath'] = $objectPath;

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
     * @param string $objectType
     *
     * @return $this
     */
    public function withObjectType($objectType)
    {
        $this->data['ObjectType'] = $objectType;
        $this->options['query']['ObjectType'] = $objectType;

        return $this;
    }
}
