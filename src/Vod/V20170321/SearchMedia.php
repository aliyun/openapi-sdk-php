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
