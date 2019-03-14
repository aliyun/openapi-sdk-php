<?php

namespace AlibabaCloud\EcsInc\V20160314;

use AlibabaCloud\Rpc;

/**
 * Api QueryResourceTransit
 *
 * @method string getResourceId()
 * @method string getResourceOwnerId()
 * @method array getResourceStatusList()
 * @method string getResourceOwnerAccount()
 * @method array getResourceTypeList()
 * @method string getOwnerAccount()
 * @method string getFromRegionNo()
 * @method string getOwnerId()
 * @method string getResourceTransitId()
 * @method string getPageNo()
 * @method string getDbId()
 * @method string getPageSize()
 * @method string getAliUid()
 * @method string getResourceName()
 * @method array getTag()
 */
class QueryResourceTransit extends Rpc
{
    public $product = 'EcsInc';

    public $version = '2016-03-14';

    public $method = 'POST';

    public $serviceCode = 'ecs';

    /**
     * @param string $resourceId
     *
     * @return $this
     */
    public function withResourceId($resourceId)
    {
        $this->data['ResourceId'] = $resourceId;
        $this->options['query']['ResourceId'] = $resourceId;

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
     * @param array $resourceStatusList
     *
     * @return $this
     */
    public function withResourceStatusList(array $resourceStatusList)
    {
        $this->data['ResourceStatusList'] = $resourceStatusList;
        foreach ($resourceStatusList as $i => $iValue) {
            $this->options['query']['ResourceStatusList.' . ($i + 1)] = $iValue;
        }

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
     * @param array $resourceTypeList
     *
     * @return $this
     */
    public function withResourceTypeList(array $resourceTypeList)
    {
        $this->data['ResourceTypeList'] = $resourceTypeList;
        foreach ($resourceTypeList as $i => $iValue) {
            $this->options['query']['ResourceTypeList.' . ($i + 1)] = $iValue;
        }

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
     * @param string $fromRegionNo
     *
     * @return $this
     */
    public function withFromRegionNo($fromRegionNo)
    {
        $this->data['FromRegionNo'] = $fromRegionNo;
        $this->options['query']['FromRegionNo'] = $fromRegionNo;

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
     * @param string $resourceTransitId
     *
     * @return $this
     */
    public function withResourceTransitId($resourceTransitId)
    {
        $this->data['ResourceTransitId'] = $resourceTransitId;
        $this->options['query']['ResourceTransitId'] = $resourceTransitId;

        return $this;
    }

    /**
     * @param string $pageNo
     *
     * @return $this
     */
    public function withPageNo($pageNo)
    {
        $this->data['PageNo'] = $pageNo;
        $this->options['query']['PageNo'] = $pageNo;

        return $this;
    }

    /**
     * @param string $dbId
     *
     * @return $this
     */
    public function withDbId($dbId)
    {
        $this->data['DbId'] = $dbId;
        $this->options['query']['DbId'] = $dbId;

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
     * @param string $resourceName
     *
     * @return $this
     */
    public function withResourceName($resourceName)
    {
        $this->data['ResourceName'] = $resourceName;
        $this->options['query']['ResourceName'] = $resourceName;

        return $this;
    }

    /**
     * @param array $tag
     *
     * @return $this
     */
    public function withTag(array $tag)
    {
        $this->data['Tag'] = $tag;
        foreach ($tag as $i => $iValue) {
            $this->options['query']['Tag.' . ($i + 1) . '.Value'] = $tag[$i]['Value'];
            $this->options['query']['Tag.' . ($i + 1) . '.Key'] = $tag[$i]['Key'];
        }

        return $this;
    }
}
