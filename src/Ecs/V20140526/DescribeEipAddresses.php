<?php

namespace AlibabaCloud\Ecs\V20140526;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of DescribeEipAddresses
 *
 * @method string getResourceOwnerId()
 * @method string getResourceOwnerAccount()
 * @method string getFilter2Value()
 * @method string getISP()
 * @method string getOwnerAccount()
 * @method string getAllocationId()
 * @method string getFilter1Value()
 * @method string getFilter2Key()
 * @method string getOwnerId()
 * @method string getEipAddress()
 * @method string getPageNumber()
 * @method string getLockReason()
 * @method string getFilter1Key()
 * @method string getAssociatedInstanceType()
 * @method string getPageSize()
 * @method string getChargeType()
 * @method string getAssociatedInstanceId()
 * @method string getStatus()
 */
class DescribeEipAddresses extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'Ecs';

    /**
     * @var string
     */
    public $version = '2014-05-26';

    /**
     * @var string
     */
    public $action = 'DescribeEipAddresses';

    /**
     * @var string
     */
    public $method = 'POST';

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
     * @deprecated deprecated since version 2.0, Use withFilter2Value() instead.
     *
     * @param string $filter2Value
     *
     * @return $this
     */
    public function setFilter2Value($filter2Value)
    {
        return $this->withFilter2Value($filter2Value);
    }

    /**
     * @param string $filter2Value
     *
     * @return $this
     */
    public function withFilter2Value($filter2Value)
    {
        $this->data['Filter2Value'] = $filter2Value;
        $this->options['query']['Filter.2.Value'] = $filter2Value;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withISP() instead.
     *
     * @param string $iSP
     *
     * @return $this
     */
    public function setISP($iSP)
    {
        return $this->withISP($iSP);
    }

    /**
     * @param string $iSP
     *
     * @return $this
     */
    public function withISP($iSP)
    {
        $this->data['ISP'] = $iSP;
        $this->options['query']['ISP'] = $iSP;

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
     * @deprecated deprecated since version 2.0, Use withAllocationId() instead.
     *
     * @param string $allocationId
     *
     * @return $this
     */
    public function setAllocationId($allocationId)
    {
        return $this->withAllocationId($allocationId);
    }

    /**
     * @param string $allocationId
     *
     * @return $this
     */
    public function withAllocationId($allocationId)
    {
        $this->data['AllocationId'] = $allocationId;
        $this->options['query']['AllocationId'] = $allocationId;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withFilter1Value() instead.
     *
     * @param string $filter1Value
     *
     * @return $this
     */
    public function setFilter1Value($filter1Value)
    {
        return $this->withFilter1Value($filter1Value);
    }

    /**
     * @param string $filter1Value
     *
     * @return $this
     */
    public function withFilter1Value($filter1Value)
    {
        $this->data['Filter1Value'] = $filter1Value;
        $this->options['query']['Filter.1.Value'] = $filter1Value;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withFilter2Key() instead.
     *
     * @param string $filter2Key
     *
     * @return $this
     */
    public function setFilter2Key($filter2Key)
    {
        return $this->withFilter2Key($filter2Key);
    }

    /**
     * @param string $filter2Key
     *
     * @return $this
     */
    public function withFilter2Key($filter2Key)
    {
        $this->data['Filter2Key'] = $filter2Key;
        $this->options['query']['Filter.2.Key'] = $filter2Key;

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
     * @deprecated deprecated since version 2.0, Use withEipAddress() instead.
     *
     * @param string $eipAddress
     *
     * @return $this
     */
    public function setEipAddress($eipAddress)
    {
        return $this->withEipAddress($eipAddress);
    }

    /**
     * @param string $eipAddress
     *
     * @return $this
     */
    public function withEipAddress($eipAddress)
    {
        $this->data['EipAddress'] = $eipAddress;
        $this->options['query']['EipAddress'] = $eipAddress;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withPageNumber() instead.
     *
     * @param string $pageNumber
     *
     * @return $this
     */
    public function setPageNumber($pageNumber)
    {
        return $this->withPageNumber($pageNumber);
    }

    /**
     * @param string $pageNumber
     *
     * @return $this
     */
    public function withPageNumber($pageNumber)
    {
        $this->data['PageNumber'] = $pageNumber;
        $this->options['query']['PageNumber'] = $pageNumber;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withLockReason() instead.
     *
     * @param string $lockReason
     *
     * @return $this
     */
    public function setLockReason($lockReason)
    {
        return $this->withLockReason($lockReason);
    }

    /**
     * @param string $lockReason
     *
     * @return $this
     */
    public function withLockReason($lockReason)
    {
        $this->data['LockReason'] = $lockReason;
        $this->options['query']['LockReason'] = $lockReason;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withFilter1Key() instead.
     *
     * @param string $filter1Key
     *
     * @return $this
     */
    public function setFilter1Key($filter1Key)
    {
        return $this->withFilter1Key($filter1Key);
    }

    /**
     * @param string $filter1Key
     *
     * @return $this
     */
    public function withFilter1Key($filter1Key)
    {
        $this->data['Filter1Key'] = $filter1Key;
        $this->options['query']['Filter.1.Key'] = $filter1Key;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withAssociatedInstanceType() instead.
     *
     * @param string $associatedInstanceType
     *
     * @return $this
     */
    public function setAssociatedInstanceType($associatedInstanceType)
    {
        return $this->withAssociatedInstanceType($associatedInstanceType);
    }

    /**
     * @param string $associatedInstanceType
     *
     * @return $this
     */
    public function withAssociatedInstanceType($associatedInstanceType)
    {
        $this->data['AssociatedInstanceType'] = $associatedInstanceType;
        $this->options['query']['AssociatedInstanceType'] = $associatedInstanceType;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withPageSize() instead.
     *
     * @param string $pageSize
     *
     * @return $this
     */
    public function setPageSize($pageSize)
    {
        return $this->withPageSize($pageSize);
    }

    /**
     * @param string $pageSize
     *
     * @return $this
     */
    public function withPageSize($pageSize)
    {
        $this->data['PageSize'] = $pageSize;
        $this->options['query']['PageSize'] = $pageSize;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withChargeType() instead.
     *
     * @param string $chargeType
     *
     * @return $this
     */
    public function setChargeType($chargeType)
    {
        return $this->withChargeType($chargeType);
    }

    /**
     * @param string $chargeType
     *
     * @return $this
     */
    public function withChargeType($chargeType)
    {
        $this->data['ChargeType'] = $chargeType;
        $this->options['query']['ChargeType'] = $chargeType;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withAssociatedInstanceId() instead.
     *
     * @param string $associatedInstanceId
     *
     * @return $this
     */
    public function setAssociatedInstanceId($associatedInstanceId)
    {
        return $this->withAssociatedInstanceId($associatedInstanceId);
    }

    /**
     * @param string $associatedInstanceId
     *
     * @return $this
     */
    public function withAssociatedInstanceId($associatedInstanceId)
    {
        $this->data['AssociatedInstanceId'] = $associatedInstanceId;
        $this->options['query']['AssociatedInstanceId'] = $associatedInstanceId;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withStatus() instead.
     *
     * @param string $status
     *
     * @return $this
     */
    public function setStatus($status)
    {
        return $this->withStatus($status);
    }

    /**
     * @param string $status
     *
     * @return $this
     */
    public function withStatus($status)
    {
        $this->data['Status'] = $status;
        $this->options['query']['Status'] = $status;

        return $this;
    }
}
