<?php

namespace AlibabaCloud\Smartag\V20180313;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of DescribeACLAttribute
 *
 * @method string getAclId()
 * @method string getResourceOwnerId()
 * @method string getResourceOwnerAccount()
 * @method string getOwnerAccount()
 * @method string getPageSize()
 * @method string getOwnerId()
 * @method string getPageNumber()
 * @method string getDirection()
 * @method string getOrder()
 */
class DescribeACLAttribute extends RpcRequest
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
    public $action = 'DescribeACLAttribute';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @var string
     */
    public $serviceCode = 'smartag';

    /**
     * @param string $aclId
     *
     * @return $this
     */
    public function withAclId($aclId)
    {
        $this->data['AclId'] = $aclId;
        $this->options['query']['AclId'] = $aclId;

        return $this;
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
     * @param string $direction
     *
     * @return $this
     */
    public function withDirection($direction)
    {
        $this->data['Direction'] = $direction;
        $this->options['query']['Direction'] = $direction;

        return $this;
    }

    /**
     * @param string $order
     *
     * @return $this
     */
    public function withOrder($order)
    {
        $this->data['Order'] = $order;
        $this->options['query']['Order'] = $order;

        return $this;
    }
}
