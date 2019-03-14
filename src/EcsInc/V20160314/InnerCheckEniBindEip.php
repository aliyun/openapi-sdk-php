<?php

namespace AlibabaCloud\EcsInc\V20160314;

use AlibabaCloud\Rpc;

/**
 * Api InnerCheckEniBindEip
 *
 * @method string getResourceOwnerId()
 * @method string getAliUid()
 * @method string getEipAddressKeeped()
 * @method string getEniNo()
 * @method string getResourceOwnerAccount()
 * @method string getOwnerId()
 * @method string getEipAddressCount()
 * @method string getOperateType()
 */
class InnerCheckEniBindEip extends Rpc
{
    public $product = 'EcsInc';

    public $version = '2016-03-14';

    public $method = 'POST';

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
     * @param string $eipAddressKeeped
     *
     * @return $this
     */
    public function withEipAddressKeeped($eipAddressKeeped)
    {
        $this->data['EipAddressKeeped'] = $eipAddressKeeped;
        $this->options['query']['EipAddressKeeped'] = $eipAddressKeeped;

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
     * @param string $eipAddressCount
     *
     * @return $this
     */
    public function withEipAddressCount($eipAddressCount)
    {
        $this->data['EipAddressCount'] = $eipAddressCount;
        $this->options['query']['EipAddressCount'] = $eipAddressCount;

        return $this;
    }

    /**
     * @param string $operateType
     *
     * @return $this
     */
    public function withOperateType($operateType)
    {
        $this->data['OperateType'] = $operateType;
        $this->options['query']['OperateType'] = $operateType;

        return $this;
    }
}
