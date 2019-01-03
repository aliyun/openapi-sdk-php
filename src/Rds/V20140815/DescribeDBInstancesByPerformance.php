<?php

namespace AlibabaCloud\Rds\V20140815;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of DescribeDBInstancesByPerformance
 *
 * @method string getTag4value()
 * @method string getResourceOwnerId()
 * @method string getTag2key()
 * @method string getTag5key()
 * @method string getResourceOwnerAccount()
 * @method string getClientToken()
 * @method string getOwnerAccount()
 * @method string getTag3key()
 * @method string getOwnerId()
 * @method string getTag5value()
 * @method string getPageNumber()
 * @method string getTags()
 * @method string getTag1key()
 * @method string getTag1value()
 * @method string getSortKey()
 * @method string getSortMethod()
 * @method string getTag2value()
 * @method string getPageSize()
 * @method string getTag4key()
 * @method string getDBInstanceId()
 * @method string getTag3value()
 * @method string getProxyId()
 */
class DescribeDBInstancesByPerformance extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'Rds';

    /**
     * @var string
     */
    public $version = '2014-08-15';

    /**
     * @var string
     */
    public $action = 'DescribeDBInstancesByPerformance';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @var string
     */
    public $serviceCode = 'rds';

    /**
     * @deprecated deprecated since version 2.0, Use withTag4value() instead.
     *
     * @param string $tag4value
     *
     * @return $this
     */
    public function setTag4value($tag4value)
    {
        return $this->withTag4value($tag4value);
    }

    /**
     * @param string $tag4value
     *
     * @return $this
     */
    public function withTag4value($tag4value)
    {
        $this->data['Tag4value'] = $tag4value;
        $this->options['query']['Tag.4.value'] = $tag4value;

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
     * @deprecated deprecated since version 2.0, Use withTag2key() instead.
     *
     * @param string $tag2key
     *
     * @return $this
     */
    public function setTag2key($tag2key)
    {
        return $this->withTag2key($tag2key);
    }

    /**
     * @param string $tag2key
     *
     * @return $this
     */
    public function withTag2key($tag2key)
    {
        $this->data['Tag2key'] = $tag2key;
        $this->options['query']['Tag.2.key'] = $tag2key;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withTag5key() instead.
     *
     * @param string $tag5key
     *
     * @return $this
     */
    public function setTag5key($tag5key)
    {
        return $this->withTag5key($tag5key);
    }

    /**
     * @param string $tag5key
     *
     * @return $this
     */
    public function withTag5key($tag5key)
    {
        $this->data['Tag5key'] = $tag5key;
        $this->options['query']['Tag.5.key'] = $tag5key;

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
     * @deprecated deprecated since version 2.0, Use withClientToken() instead.
     *
     * @param string $clientToken
     *
     * @return $this
     */
    public function setClientToken($clientToken)
    {
        return $this->withClientToken($clientToken);
    }

    /**
     * @param string $clientToken
     *
     * @return $this
     */
    public function withClientToken($clientToken)
    {
        $this->data['ClientToken'] = $clientToken;
        $this->options['query']['ClientToken'] = $clientToken;

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
     * @deprecated deprecated since version 2.0, Use withTag3key() instead.
     *
     * @param string $tag3key
     *
     * @return $this
     */
    public function setTag3key($tag3key)
    {
        return $this->withTag3key($tag3key);
    }

    /**
     * @param string $tag3key
     *
     * @return $this
     */
    public function withTag3key($tag3key)
    {
        $this->data['Tag3key'] = $tag3key;
        $this->options['query']['Tag.3.key'] = $tag3key;

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
     * @deprecated deprecated since version 2.0, Use withTag5value() instead.
     *
     * @param string $tag5value
     *
     * @return $this
     */
    public function setTag5value($tag5value)
    {
        return $this->withTag5value($tag5value);
    }

    /**
     * @param string $tag5value
     *
     * @return $this
     */
    public function withTag5value($tag5value)
    {
        $this->data['Tag5value'] = $tag5value;
        $this->options['query']['Tag.5.value'] = $tag5value;

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
     * @deprecated deprecated since version 2.0, Use withTags() instead.
     *
     * @param string $tags
     *
     * @return $this
     */
    public function setTags($tags)
    {
        return $this->withTags($tags);
    }

    /**
     * @param string $tags
     *
     * @return $this
     */
    public function withTags($tags)
    {
        $this->data['Tags'] = $tags;
        $this->options['query']['Tags'] = $tags;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withTag1key() instead.
     *
     * @param string $tag1key
     *
     * @return $this
     */
    public function setTag1key($tag1key)
    {
        return $this->withTag1key($tag1key);
    }

    /**
     * @param string $tag1key
     *
     * @return $this
     */
    public function withTag1key($tag1key)
    {
        $this->data['Tag1key'] = $tag1key;
        $this->options['query']['Tag.1.key'] = $tag1key;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withTag1value() instead.
     *
     * @param string $tag1value
     *
     * @return $this
     */
    public function setTag1value($tag1value)
    {
        return $this->withTag1value($tag1value);
    }

    /**
     * @param string $tag1value
     *
     * @return $this
     */
    public function withTag1value($tag1value)
    {
        $this->data['Tag1value'] = $tag1value;
        $this->options['query']['Tag.1.value'] = $tag1value;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withSortKey() instead.
     *
     * @param string $sortKey
     *
     * @return $this
     */
    public function setSortKey($sortKey)
    {
        return $this->withSortKey($sortKey);
    }

    /**
     * @param string $sortKey
     *
     * @return $this
     */
    public function withSortKey($sortKey)
    {
        $this->data['SortKey'] = $sortKey;
        $this->options['query']['SortKey'] = $sortKey;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withSortMethod() instead.
     *
     * @param string $sortMethod
     *
     * @return $this
     */
    public function setSortMethod($sortMethod)
    {
        return $this->withSortMethod($sortMethod);
    }

    /**
     * @param string $sortMethod
     *
     * @return $this
     */
    public function withSortMethod($sortMethod)
    {
        $this->data['SortMethod'] = $sortMethod;
        $this->options['query']['SortMethod'] = $sortMethod;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withTag2value() instead.
     *
     * @param string $tag2value
     *
     * @return $this
     */
    public function setTag2value($tag2value)
    {
        return $this->withTag2value($tag2value);
    }

    /**
     * @param string $tag2value
     *
     * @return $this
     */
    public function withTag2value($tag2value)
    {
        $this->data['Tag2value'] = $tag2value;
        $this->options['query']['Tag.2.value'] = $tag2value;

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
     * @deprecated deprecated since version 2.0, Use withTag4key() instead.
     *
     * @param string $tag4key
     *
     * @return $this
     */
    public function setTag4key($tag4key)
    {
        return $this->withTag4key($tag4key);
    }

    /**
     * @param string $tag4key
     *
     * @return $this
     */
    public function withTag4key($tag4key)
    {
        $this->data['Tag4key'] = $tag4key;
        $this->options['query']['Tag.4.key'] = $tag4key;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withDBInstanceId() instead.
     *
     * @param string $dBInstanceId
     *
     * @return $this
     */
    public function setDBInstanceId($dBInstanceId)
    {
        return $this->withDBInstanceId($dBInstanceId);
    }

    /**
     * @param string $dBInstanceId
     *
     * @return $this
     */
    public function withDBInstanceId($dBInstanceId)
    {
        $this->data['DBInstanceId'] = $dBInstanceId;
        $this->options['query']['DBInstanceId'] = $dBInstanceId;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withTag3value() instead.
     *
     * @param string $tag3value
     *
     * @return $this
     */
    public function setTag3value($tag3value)
    {
        return $this->withTag3value($tag3value);
    }

    /**
     * @param string $tag3value
     *
     * @return $this
     */
    public function withTag3value($tag3value)
    {
        $this->data['Tag3value'] = $tag3value;
        $this->options['query']['Tag.3.value'] = $tag3value;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withProxyId() instead.
     *
     * @param string $proxyId
     *
     * @return $this
     */
    public function setproxyId($proxyId)
    {
        return $this->withProxyId($proxyId);
    }

    /**
     * @param string $proxyId
     *
     * @return $this
     */
    public function withProxyId($proxyId)
    {
        $this->data['ProxyId'] = $proxyId;
        $this->options['query']['proxyId'] = $proxyId;

        return $this;
    }
}
