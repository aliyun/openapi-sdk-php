<?php

namespace AlibabaCloud\Dm\V20151123;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of GetTrackList
 *
 * @method string getResourceOwnerId()
 * @method string getOffsetCreateTimeDesc()
 * @method string getOffset()
 * @method string getResourceOwnerAccount()
 * @method string getEndTime()
 * @method string getStartTime()
 * @method string getOwnerId()
 * @method string getPageNumber()
 * @method string getTotal()
 * @method string getOffsetCreateTime()
 * @method string getPageSize()
 */
class GetTrackList extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'Dm';

    /**
     * @var string
     */
    public $version = '2015-11-23';

    /**
     * @var string
     */
    public $action = 'GetTrackList';

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
     * @deprecated deprecated since version 2.0, Use withOffsetCreateTimeDesc() instead.
     *
     * @param string $offsetCreateTimeDesc
     *
     * @return $this
     */
    public function setOffsetCreateTimeDesc($offsetCreateTimeDesc)
    {
        return $this->withOffsetCreateTimeDesc($offsetCreateTimeDesc);
    }

    /**
     * @param string $offsetCreateTimeDesc
     *
     * @return $this
     */
    public function withOffsetCreateTimeDesc($offsetCreateTimeDesc)
    {
        $this->data['OffsetCreateTimeDesc'] = $offsetCreateTimeDesc;
        $this->options['query']['OffsetCreateTimeDesc'] = $offsetCreateTimeDesc;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withOffset() instead.
     *
     * @param string $offset
     *
     * @return $this
     */
    public function setOffset($offset)
    {
        return $this->withOffset($offset);
    }

    /**
     * @param string $offset
     *
     * @return $this
     */
    public function withOffset($offset)
    {
        $this->data['Offset'] = $offset;
        $this->options['query']['Offset'] = $offset;

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
     * @deprecated deprecated since version 2.0, Use withEndTime() instead.
     *
     * @param string $endTime
     *
     * @return $this
     */
    public function setEndTime($endTime)
    {
        return $this->withEndTime($endTime);
    }

    /**
     * @param string $endTime
     *
     * @return $this
     */
    public function withEndTime($endTime)
    {
        $this->data['EndTime'] = $endTime;
        $this->options['query']['EndTime'] = $endTime;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withStartTime() instead.
     *
     * @param string $startTime
     *
     * @return $this
     */
    public function setStartTime($startTime)
    {
        return $this->withStartTime($startTime);
    }

    /**
     * @param string $startTime
     *
     * @return $this
     */
    public function withStartTime($startTime)
    {
        $this->data['StartTime'] = $startTime;
        $this->options['query']['StartTime'] = $startTime;

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
     * @deprecated deprecated since version 2.0, Use withTotal() instead.
     *
     * @param string $total
     *
     * @return $this
     */
    public function setTotal($total)
    {
        return $this->withTotal($total);
    }

    /**
     * @param string $total
     *
     * @return $this
     */
    public function withTotal($total)
    {
        $this->data['Total'] = $total;
        $this->options['query']['Total'] = $total;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withOffsetCreateTime() instead.
     *
     * @param string $offsetCreateTime
     *
     * @return $this
     */
    public function setOffsetCreateTime($offsetCreateTime)
    {
        return $this->withOffsetCreateTime($offsetCreateTime);
    }

    /**
     * @param string $offsetCreateTime
     *
     * @return $this
     */
    public function withOffsetCreateTime($offsetCreateTime)
    {
        $this->data['OffsetCreateTime'] = $offsetCreateTime;
        $this->options['query']['OffsetCreateTime'] = $offsetCreateTime;

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
}
