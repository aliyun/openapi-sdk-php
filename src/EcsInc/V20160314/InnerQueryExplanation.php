<?php

namespace AlibabaCloud\EcsInc\V20160314;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of InnerQueryExplanation
 *
 * @method string getActionType()
 * @method string getResourceOwnerId()
 * @method string getResourceOwnerAccount()
 * @method string getOwnerAccount()
 * @method string getOwnerId()
 * @method array getFilter()
 * @method string getEntityType()
 */
class InnerQueryExplanation extends RpcRequest
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
    public $action = 'InnerQueryExplanation';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @var string
     */
    public $serviceCode = 'ecs';

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
     * @param array $filter
     *
     * @return $this
     */
    public function withFilter(array $filter)
    {
        $this->data['Filter'] = $filter;
        foreach ($filter as $i => $iValue) {
            $this->options['query']['Filter.' . ($i + 1) . '.Key'] = $filter[$i]['Key'];
            $this->options['query']['Filter.' . ($i + 1) . '.Value'] = $filter[$i]['Value'];
        }

        return $this;
    }

    /**
     * @param string $entityType
     *
     * @return $this
     */
    public function withEntityType($entityType)
    {
        $this->data['EntityType'] = $entityType;
        $this->options['query']['EntityType'] = $entityType;

        return $this;
    }
}
