<?php

namespace AlibabaCloud\EcsInc\V20160314;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of QueryResourceTransit
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
class QueryResourceTransit extends RpcRequest
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
    public $action = 'QueryResourceTransit';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @var string
     */
    public $serviceCode = 'ecs';

    /**
     * @deprecated deprecated since version 2.0, Use withResourceId() instead.
     *
     * @param string $resourceId
     *
     * @return $this
     */
    public function setResourceId($resourceId)
    {
        return $this->withResourceId($resourceId);
    }

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
     * @deprecated deprecated since version 2.0, Use getResourceStatusList() instead.
     *
     * @return array
     */
    public function getResourceStatusLists()
    {
        return $this->getResourceStatusList();
    }

    /**
     * @deprecated deprecated since version 2.0, Use withResourceStatusList() instead.
     *
     * @param array $resourceStatusLists
     *
     * @return $this
     */
    public function setResourceStatusLists(array $resourceStatusLists)
    {
        return $this->withResourceStatusList($resourceStatusLists);
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
     * @deprecated deprecated since version 2.0, Use getResourceTypeList() instead.
     *
     * @return array
     */
    public function getResourceTypeLists()
    {
        return $this->getResourceTypeList();
    }

    /**
     * @deprecated deprecated since version 2.0, Use withResourceTypeList() instead.
     *
     * @param array $resourceTypeLists
     *
     * @return $this
     */
    public function setResourceTypeLists(array $resourceTypeLists)
    {
        return $this->withResourceTypeList($resourceTypeLists);
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
     * @deprecated deprecated since version 2.0, Use withFromRegionNo() instead.
     *
     * @param string $fromRegionNo
     *
     * @return $this
     */
    public function setFromRegionNo($fromRegionNo)
    {
        return $this->withFromRegionNo($fromRegionNo);
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
     * @deprecated deprecated since version 2.0, Use withResourceTransitId() instead.
     *
     * @param string $resourceTransitId
     *
     * @return $this
     */
    public function setResourceTransitId($resourceTransitId)
    {
        return $this->withResourceTransitId($resourceTransitId);
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
     * @deprecated deprecated since version 2.0, Use withPageNo() instead.
     *
     * @param string $pageNo
     *
     * @return $this
     */
    public function setPageNo($pageNo)
    {
        return $this->withPageNo($pageNo);
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
     * @deprecated deprecated since version 2.0, Use withDbId() instead.
     *
     * @param string $dbId
     *
     * @return $this
     */
    public function setDbId($dbId)
    {
        return $this->withDbId($dbId);
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
     * @deprecated deprecated since version 2.0, Use withResourceName() instead.
     *
     * @param string $resourceName
     *
     * @return $this
     */
    public function setResourceName($resourceName)
    {
        return $this->withResourceName($resourceName);
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
     * @deprecated deprecated since version 2.0, Use getTag() instead.
     *
     * @return array
     */
    public function getTags()
    {
        return $this->getTag();
    }

    /**
     * @deprecated deprecated since version 2.0, Use withTag() instead.
     *
     * @param array $tags
     *
     * @return $this
     */
    public function setTags(array $tags)
    {
        return $this->withTag($tags);
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
