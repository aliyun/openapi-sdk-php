<?php

namespace AlibabaCloud\Vod\V20170321;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of RefreshVodObjectCaches
 *
 * @method string getSecurityToken()
 * @method string getObjectPath()
 * @method string getOwnerId()
 * @method string getObjectType()
 */
class RefreshVodObjectCaches extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'vod';

    /**
     * @var string
     */
    public $version = '2017-03-21';

    /**
     * @var string
     */
    public $action = 'RefreshVodObjectCaches';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @var string
     */
    public $serviceCode = 'vod';

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
