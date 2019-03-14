<?php

namespace AlibabaCloud\Dm\V20151123;

use AlibabaCloud\Rpc;

/**
 * Api GetRegionList
 *
 * @method string getResourceOwnerId()
 * @method string getTotal()
 * @method string getOffsetCreateTimeDesc()
 * @method string getOffset()
 * @method string getOffsetCreateTime()
 * @method string getResourceOwnerAccount()
 * @method string getPageSize()
 * @method string getOwnerId()
 * @method string getPageNumber()
 */
class GetRegionList extends Rpc
{
    public $product = 'Dm';

    public $version = '2015-11-23';

    public $method = 'POST';

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
}
