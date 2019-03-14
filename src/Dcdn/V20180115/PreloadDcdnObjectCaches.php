<?php

namespace AlibabaCloud\Dcdn\V20180115;

use AlibabaCloud\Rpc;

/**
 * Api PreloadDcdnObjectCaches
 *
 * @method string getArea()
 * @method string getSecurityToken()
 * @method string getObjectPath()
 * @method string getOwnerId()
 */
class PreloadDcdnObjectCaches extends Rpc
{
    public $product = 'dcdn';

    public $version = '2018-01-15';

    public $method = 'POST';

    public $serviceCode = 'dcdn';

    /**
     * @param string $area
     *
     * @return $this
     */
    public function withArea($area)
    {
        $this->data['Area'] = $area;
        $this->options['query']['Area'] = $area;

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
}
