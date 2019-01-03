<?php

namespace AlibabaCloud\Smartag\V20180313;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of DescribeSmartAccessGateways
 *
 * @method string getResourceOwnerId()
 * @method string getSerialNumber()
 * @method string getResourceOwnerAccount()
 * @method string getAclIds()
 * @method string getOwnerAccount()
 * @method string getAssociatedCcnId()
 * @method string getOwnerId()
 * @method string getUnboundAclIds()
 * @method string getPageNumber()
 * @method string getName()
 * @method string getPageSize()
 * @method string getSmartAGId()
 * @method string getStatus()
 */
class DescribeSmartAccessGateways extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'Smartag';

    /**
     * @var string
     */
    public $version = '2018-03-13';

    /**
     * @var string
     */
    public $action = 'DescribeSmartAccessGateways';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @var string
     */
    public $serviceCode = 'smartag';

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
     * @deprecated deprecated since version 2.0, Use withSerialNumber() instead.
     *
     * @param string $serialNumber
     *
     * @return $this
     */
    public function setSerialNumber($serialNumber)
    {
        return $this->withSerialNumber($serialNumber);
    }

    /**
     * @param string $serialNumber
     *
     * @return $this
     */
    public function withSerialNumber($serialNumber)
    {
        $this->data['SerialNumber'] = $serialNumber;
        $this->options['query']['SerialNumber'] = $serialNumber;

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
     * @deprecated deprecated since version 2.0, Use withAclIds() instead.
     *
     * @param string $aclIds
     *
     * @return $this
     */
    public function setAclIds($aclIds)
    {
        return $this->withAclIds($aclIds);
    }

    /**
     * @param string $aclIds
     *
     * @return $this
     */
    public function withAclIds($aclIds)
    {
        $this->data['AclIds'] = $aclIds;
        $this->options['query']['AclIds'] = $aclIds;

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
     * @deprecated deprecated since version 2.0, Use withAssociatedCcnId() instead.
     *
     * @param string $associatedCcnId
     *
     * @return $this
     */
    public function setAssociatedCcnId($associatedCcnId)
    {
        return $this->withAssociatedCcnId($associatedCcnId);
    }

    /**
     * @param string $associatedCcnId
     *
     * @return $this
     */
    public function withAssociatedCcnId($associatedCcnId)
    {
        $this->data['AssociatedCcnId'] = $associatedCcnId;
        $this->options['query']['AssociatedCcnId'] = $associatedCcnId;

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
     * @deprecated deprecated since version 2.0, Use withUnboundAclIds() instead.
     *
     * @param string $unboundAclIds
     *
     * @return $this
     */
    public function setUnboundAclIds($unboundAclIds)
    {
        return $this->withUnboundAclIds($unboundAclIds);
    }

    /**
     * @param string $unboundAclIds
     *
     * @return $this
     */
    public function withUnboundAclIds($unboundAclIds)
    {
        $this->data['UnboundAclIds'] = $unboundAclIds;
        $this->options['query']['UnboundAclIds'] = $unboundAclIds;

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
     * @deprecated deprecated since version 2.0, Use withName() instead.
     *
     * @param string $name
     *
     * @return $this
     */
    public function setName($name)
    {
        return $this->withName($name);
    }

    /**
     * @param string $name
     *
     * @return $this
     */
    public function withName($name)
    {
        $this->data['Name'] = $name;
        $this->options['query']['Name'] = $name;

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
     * @deprecated deprecated since version 2.0, Use withSmartAGId() instead.
     *
     * @param string $smartAGId
     *
     * @return $this
     */
    public function setSmartAGId($smartAGId)
    {
        return $this->withSmartAGId($smartAGId);
    }

    /**
     * @param string $smartAGId
     *
     * @return $this
     */
    public function withSmartAGId($smartAGId)
    {
        $this->data['SmartAGId'] = $smartAGId;
        $this->options['query']['SmartAGId'] = $smartAGId;

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
