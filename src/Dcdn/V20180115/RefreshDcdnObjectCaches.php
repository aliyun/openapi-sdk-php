<?php

namespace AlibabaCloud\Dcdn\V20180115;

use AlibabaCloud\Rpc;

/**
 * Api RefreshDcdnObjectCaches
 *
 * @method string getSecurityToken()
 * @method string getObjectPath()
 * @method string getOwnerId()
 * @method string getObjectType()
 */
class RefreshDcdnObjectCaches extends Rpc
{
    public $product = 'dcdn';

    public $version = '2018-01-15';

    public $method = 'POST';

    public $serviceCode = 'dcdn';

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
