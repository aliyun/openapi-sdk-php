<?php

namespace AlibabaCloud\Ecs\V20140526;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of DescribeImageSupportInstanceTypes
 *
 * @method string getActionType()
 * @method array getFilter()
 * @method string getResourceOwnerId()
 * @method string getImageId()
 * @method string getResourceOwnerAccount()
 * @method string getOwnerId()
 */
class DescribeImageSupportInstanceTypes extends RpcRequest
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
    public $action = 'DescribeImageSupportInstanceTypes';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @deprecated deprecated since version 2.0, Use withActionType() instead.
     *
     * @param string $actionType
     *
     * @return $this
     */
    public function setActionType($actionType)
    {
        return $this->withActionType($actionType);
    }

    /**
     * @param string $actionType
     *
     * @return $this
     */
    public function withActionType($actionType)
    {
        $this->data['ActionType'] = $actionType;
        $this->options['query']['ActionType'] = $actionType;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use getFilter() instead.
     *
     * @return array
     */
    public function getFilters()
    {
        return $this->getFilter();
    }

    /**
     * @deprecated deprecated since version 2.0, Use withFilter() instead.
     *
     * @param array $filters
     *
     * @return $this
     */
    public function setFilters(array $filters)
    {
        return $this->withFilter($filters);
    }

    /**
     * @param array $filter
     *
     * @return $this
     */
    public function withFilter(array $filter)
    {
        $this->data['Filter'] = $filter;
        foreach ($filter as $i => $iValue) {
            $this->options['query']['Filter.' . ($i + 1) . '.Value'] = $filter[$i]['Value'];
            $this->options['query']['Filter.' . ($i + 1) . '.Key'] = $filter[$i]['Key'];
        }

        return $this;
    }

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
     * @deprecated deprecated since version 2.0, Use withImageId() instead.
     *
     * @param string $imageId
     *
     * @return $this
     */
    public function setImageId($imageId)
    {
        return $this->withImageId($imageId);
    }

    /**
     * @param string $imageId
     *
     * @return $this
     */
    public function withImageId($imageId)
    {
        $this->data['ImageId'] = $imageId;
        $this->options['query']['ImageId'] = $imageId;

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
}
