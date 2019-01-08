<?php

namespace AlibabaCloud\EcsInc\V20160314;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of InnerRefundVcpuCallBack
 *
 * @method string getResourceOwnerId()
 * @method string getVcpuTotal()
 * @method string getType()
 * @method string getAliUid()
 * @method string getResourceOwnerAccount()
 * @method string getOwnerAccount()
 * @method string getOwnerId()
 * @method string getIsSuccess()
 * @method array getInstanceIds()
 */
class InnerRefundVcpuCallBack extends RpcRequest
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
    public $action = 'InnerRefundVcpuCallBack';

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
     * @param string $vcpuTotal
     *
     * @return $this
     */
    public function withVcpuTotal($vcpuTotal)
    {
        $this->data['VcpuTotal'] = $vcpuTotal;
        $this->options['query']['VcpuTotal'] = $vcpuTotal;

        return $this;
    }

    /**
     * @param string $type
     *
     * @return $this
     */
    public function withType($type)
    {
        $this->data['Type'] = $type;
        $this->options['query']['Type'] = $type;

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
     * @param string $isSuccess
     *
     * @return $this
     */
    public function withIsSuccess($isSuccess)
    {
        $this->data['IsSuccess'] = $isSuccess;
        $this->options['query']['IsSuccess'] = $isSuccess;

        return $this;
    }

    /**
     * @param array $instanceIds
     *
     * @return $this
     */
    public function withInstanceIds(array $instanceIds)
    {
        $this->data['InstanceIds'] = $instanceIds;
        foreach ($instanceIds as $i => $iValue) {
            $this->options['query']['InstanceIds.' . ($i + 1)] = $iValue;
        }

        return $this;
    }
}
