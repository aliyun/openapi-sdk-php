<?php

namespace AlibabaCloud\EcsInc\V20160314;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of InnerQueryEniQosGroupByEni
 *
 * @method string getResourceOwnerId()
 * @method string getAliUid()
 * @method string getEniNo()
 * @method string getResourceOwnerAccount()
 * @method string getOwnerId()
 * @method string getRegionNo()
 */
class InnerQueryEniQosGroupByEni extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'EcsInc';

    /**
     * @var string
     */
    public $version = '2016-03-14';

    /**
     * @var string
     */
    public $action = 'InnerQueryEniQosGroupByEni';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @var string
     */
    public $serviceCode = 'ecs';

    /**
     * @param string $resourceOwnerId
     *
     * @return $this
     */
    public function withResourceOwnerId($resourceOwnerId)
    {
        $this->data['ResourceOwnerId'] = $resourceOwnerId;
        $this->options['query']['ResourceOwnerId'] = $resourceOwnerId;

        return $this;
    }

    /**
     * @param string $aliUid
     *
     * @return $this
     */
    public function withAliUid($aliUid)
    {
        $this->data['AliUid'] = $aliUid;
        $this->options['query']['AliUid'] = $aliUid;

        return $this;
    }

    /**
     * @param string $eniNo
     *
     * @return $this
     */
    public function withEniNo($eniNo)
    {
        $this->data['EniNo'] = $eniNo;
        $this->options['query']['EniNo'] = $eniNo;

        return $this;
    }

    /**
     * @param string $resourceOwnerAccount
     *
     * @return $this
     */
    public function withResourceOwnerAccount($resourceOwnerAccount)
    {
        $this->data['ResourceOwnerAccount'] = $resourceOwnerAccount;
        $this->options['query']['ResourceOwnerAccount'] = $resourceOwnerAccount;

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
     * @param string $regionNo
     *
     * @return $this
     */
    public function withRegionNo($regionNo)
    {
        $this->data['RegionNo'] = $regionNo;
        $this->options['query']['RegionNo'] = $regionNo;

        return $this;
    }
}
