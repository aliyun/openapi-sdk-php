<?php

namespace AlibabaCloud\EcsInc\V20160314;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of InnerModifyEniQosGroup
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
 * @method string getTxPps()
 */
class InnerModifyEniQosGroup extends RpcRequest
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
    public $action = 'InnerModifyEniQosGroup';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @var string
     */
    public $serviceCode = 'ecs';

    /**
     * @deprecated deprecated since version 2.0, Use withResourceOwnerId() instead.
     *
     * @param string $resourceOwnerId
     *
     * @return $this
     */
    public function setResourceOwnerId($resourceOwnerId)
    {
        return $this->withResourceOwnerId($resourceOwnerId);
    }

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
     * @deprecated deprecated since version 2.0, Use withTx() instead.
     *
     * @param string $tx
     *
     * @return $this
     */
    public function setTx($tx)
    {
        return $this->withTx($tx);
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
     * @deprecated deprecated since version 2.0, Use withRx() instead.
     *
     * @param string $rx
     *
     * @return $this
     */
    public function setRx($rx)
    {
        return $this->withRx($rx);
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
     * @deprecated deprecated since version 2.0, Use withRxPps() instead.
     *
     * @param string $rxPps
     *
     * @return $this
     */
    public function setRxPps($rxPps)
    {
        return $this->withRxPps($rxPps);
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
     * @deprecated deprecated since version 2.0, Use withAliUid() instead.
     *
     * @param string $aliUid
     *
     * @return $this
     */
    public function setAliUid($aliUid)
    {
        return $this->withAliUid($aliUid);
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
     * @deprecated deprecated since version 2.0, Use withResourceOwnerAccount() instead.
     *
     * @param string $resourceOwnerAccount
     *
     * @return $this
     */
    public function setResourceOwnerAccount($resourceOwnerAccount)
    {
        return $this->withResourceOwnerAccount($resourceOwnerAccount);
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
     * @deprecated deprecated since version 2.0, Use withQosGroupName() instead.
     *
     * @param string $qosGroupName
     *
     * @return $this
     */
    public function setQosGroupName($qosGroupName)
    {
        return $this->withQosGroupName($qosGroupName);
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
     * @deprecated deprecated since version 2.0, Use withRegionNo() instead.
     *
     * @param string $regionNo
     *
     * @return $this
     */
    public function setRegionNo($regionNo)
    {
        return $this->withRegionNo($regionNo);
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
     * @deprecated deprecated since version 2.0, Use withTxPps() instead.
     *
     * @param string $txPps
     *
     * @return $this
     */
    public function setTxPps($txPps)
    {
        return $this->withTxPps($txPps);
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
