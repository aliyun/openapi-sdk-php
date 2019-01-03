<?php

namespace AlibabaCloud\Vod\V20170321;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of SearchMedia
 *
 * @method string getResourceOwnerId()
 * @method string getResourceOwnerAccount()
 * @method string getPageNo()
 * @method string getSearchType()
 * @method string getMatch()
 * @method string getPageSize()
 * @method string getSortBy()
 * @method string getSessionId()
 * @method string getOwnerId()
 * @method string getFields()
 * @method string getScrollToken()
 */
class SearchMedia extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'vod';

    /**
     * @var string
     */
    public $version = '2017-03-21';

    /**
     * @var string
     */
    public $action = 'SearchMedia';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @var string
     */
    public $serviceCode = 'vod';

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
     * @deprecated deprecated since version 2.0, Use withSearchType() instead.
     *
     * @param string $searchType
     *
     * @return $this
     */
    public function setSearchType($searchType)
    {
        return $this->withSearchType($searchType);
    }

    /**
     * @param string $searchType
     *
     * @return $this
     */
    public function withSearchType($searchType)
    {
        $this->data['SearchType'] = $searchType;
        $this->options['query']['SearchType'] = $searchType;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withMatch() instead.
     *
     * @param string $match
     *
     * @return $this
     */
    public function setMatch($match)
    {
        return $this->withMatch($match);
    }

    /**
     * @param string $match
     *
     * @return $this
     */
    public function withMatch($match)
    {
        $this->data['Match'] = $match;
        $this->options['query']['Match'] = $match;

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
     * @deprecated deprecated since version 2.0, Use withSortBy() instead.
     *
     * @param string $sortBy
     *
     * @return $this
     */
    public function setSortBy($sortBy)
    {
        return $this->withSortBy($sortBy);
    }

    /**
     * @param string $sortBy
     *
     * @return $this
     */
    public function withSortBy($sortBy)
    {
        $this->data['SortBy'] = $sortBy;
        $this->options['query']['SortBy'] = $sortBy;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withSessionId() instead.
     *
     * @param string $sessionId
     *
     * @return $this
     */
    public function setSessionId($sessionId)
    {
        return $this->withSessionId($sessionId);
    }

    /**
     * @param string $sessionId
     *
     * @return $this
     */
    public function withSessionId($sessionId)
    {
        $this->data['SessionId'] = $sessionId;
        $this->options['query']['SessionId'] = $sessionId;

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
     * @deprecated deprecated since version 2.0, Use withFields() instead.
     *
     * @param string $fields
     *
     * @return $this
     */
    public function setFields($fields)
    {
        return $this->withFields($fields);
    }

    /**
     * @param string $fields
     *
     * @return $this
     */
    public function withFields($fields)
    {
        $this->data['Fields'] = $fields;
        $this->options['query']['Fields'] = $fields;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withScrollToken() instead.
     *
     * @param string $scrollToken
     *
     * @return $this
     */
    public function setScrollToken($scrollToken)
    {
        return $this->withScrollToken($scrollToken);
    }

    /**
     * @param string $scrollToken
     *
     * @return $this
     */
    public function withScrollToken($scrollToken)
    {
        $this->data['ScrollToken'] = $scrollToken;
        $this->options['query']['ScrollToken'] = $scrollToken;

        return $this;
    }
}
