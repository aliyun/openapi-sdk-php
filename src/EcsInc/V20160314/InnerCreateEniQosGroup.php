<?php

namespace AlibabaCloud\EcsInc\V20160314;

use AlibabaCloud\Rpc;

/**
 * Api InnerCreateEniQosGroup
 *
 * @method string getResourceOwnerId()
 * @method string getTx()
 * @method string getRx()
 * @method string getRxPps()
 * @method string getAliUid()
 * @method string getResourceOwnerAccount()
 * @method string getOwnerId()
 * @method string getQosGroupName()
 * @method string getRegionNo()
 * @method string getInstanceId()
 * @method string getTxPps()
 */
class InnerCreateEniQosGroup extends Rpc
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
     * @param string $tx
     *
     * @return $this
     */
    public function withTx($tx)
    {
        $this->data['Tx'] = $tx;
        $this->options['query']['Tx'] = $tx;

        return $this;
    }

    /**
     * @param string $rx
     *
     * @return $this
     */
    public function withRx($rx)
    {
        $this->data['Rx'] = $rx;
        $this->options['query']['Rx'] = $rx;

        return $this;
    }

    /**
     * @param string $rxPps
     *
     * @return $this
     */
    public function withRxPps($rxPps)
    {
        $this->data['RxPps'] = $rxPps;
        $this->options['query']['RxPps'] = $rxPps;

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
     * @param string $qosGroupName
     *
     * @return $this
     */
    public function withQosGroupName($qosGroupName)
    {
        $this->data['QosGroupName'] = $qosGroupName;
        $this->options['query']['QosGroupName'] = $qosGroupName;

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

    /**
     * @param string $instanceId
     *
     * @return $this
     */
    public function withInstanceId($instanceId)
    {
        $this->data['InstanceId'] = $instanceId;
        $this->options['query']['InstanceId'] = $instanceId;

        return $this;
    }

    /**
     * @param string $txPps
     *
     * @return $this
     */
    public function withTxPps($txPps)
    {
        $this->data['TxPps'] = $txPps;
        $this->options['query']['TxPps'] = $txPps;

        return $this;
    }
}
