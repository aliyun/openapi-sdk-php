<?php

namespace AlibabaCloud\Rds\V20140815;

use AlibabaCloud\Rpc;

/**
 * Api DescribeTemplatesList
 *
 * @method string getResourceOwnerId()
 * @method string getResourceOwnerAccount()
 * @method string getMinAvgConsume()
 * @method string getOwnerAccount()
 * @method string getMaxRecordsPerPage()
 * @method string getEndTime()
 * @method string getStartTime()
 * @method string getOwnerId()
 * @method string getMaxAvgConsume()
 * @method string getSortKey()
 * @method string getMinAvgScanRows()
 * @method string getSqType()
 * @method string getSecurityToken()
 * @method string getSortMethod()
 * @method string getPageNumbers()
 * @method string getPagingId()
 * @method string getDBInstanceId()
 * @method string getMaxAvgScanRows()
 */
class DescribeTemplatesList extends Rpc
{
    public $product = 'Rds';

    public $version = '2014-08-15';

    public $method = 'POST';

    public $serviceCode = 'rds';

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
     * @param string $minAvgConsume
     *
     * @return $this
     */
    public function withMinAvgConsume($minAvgConsume)
    {
        $this->data['MinAvgConsume'] = $minAvgConsume;
        $this->options['query']['MinAvgConsume'] = $minAvgConsume;

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
     * @param string $maxRecordsPerPage
     *
     * @return $this
     */
    public function withMaxRecordsPerPage($maxRecordsPerPage)
    {
        $this->data['MaxRecordsPerPage'] = $maxRecordsPerPage;
        $this->options['query']['MaxRecordsPerPage'] = $maxRecordsPerPage;

        return $this;
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
     * @param string $maxAvgConsume
     *
     * @return $this
     */
    public function withMaxAvgConsume($maxAvgConsume)
    {
        $this->data['MaxAvgConsume'] = $maxAvgConsume;
        $this->options['query']['MaxAvgConsume'] = $maxAvgConsume;

        return $this;
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
     * @param string $minAvgScanRows
     *
     * @return $this
     */
    public function withMinAvgScanRows($minAvgScanRows)
    {
        $this->data['MinAvgScanRows'] = $minAvgScanRows;
        $this->options['query']['MinAvgScanRows'] = $minAvgScanRows;

        return $this;
    }

    /**
     * @param string $sqType
     *
     * @return $this
     */
    public function withSqType($sqType)
    {
        $this->data['SqType'] = $sqType;
        $this->options['query']['SqType'] = $sqType;

        return $this;
    }

    /**
     * @param string $securityToken
     *
     * @return $this
     */
    public function withSecurityToken($securityToken)
    {
        $this->data['SecurityToken'] = $securityToken;
        $this->options['query']['SecurityToken'] = $securityToken;

        return $this;
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
     * @param string $pageNumbers
     *
     * @return $this
     */
    public function withPageNumbers($pageNumbers)
    {
        $this->data['PageNumbers'] = $pageNumbers;
        $this->options['query']['PageNumbers'] = $pageNumbers;

        return $this;
    }

    /**
     * @param string $pagingId
     *
     * @return $this
     */
    public function withPagingId($pagingId)
    {
        $this->data['PagingId'] = $pagingId;
        $this->options['query']['PagingId'] = $pagingId;

        return $this;
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
     * @param string $maxAvgScanRows
     *
     * @return $this
     */
    public function withMaxAvgScanRows($maxAvgScanRows)
    {
        $this->data['MaxAvgScanRows'] = $maxAvgScanRows;
        $this->options['query']['MaxAvgScanRows'] = $maxAvgScanRows;

        return $this;
    }
}
