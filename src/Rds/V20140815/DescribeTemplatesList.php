<?php

namespace AlibabaCloud\Rds\V20140815;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of DescribeTemplatesList
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
class DescribeTemplatesList extends RpcRequest
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
    public $action = 'DescribeTemplatesList';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @var string
     */
    public $serviceCode = 'rds';

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
     * @deprecated deprecated since version 2.0, Use withMinAvgConsume() instead.
     *
     * @param string $minAvgConsume
     *
     * @return $this
     */
    public function setMinAvgConsume($minAvgConsume)
    {
        return $this->withMinAvgConsume($minAvgConsume);
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
     * @deprecated deprecated since version 2.0, Use withMaxRecordsPerPage() instead.
     *
     * @param string $maxRecordsPerPage
     *
     * @return $this
     */
    public function setMaxRecordsPerPage($maxRecordsPerPage)
    {
        return $this->withMaxRecordsPerPage($maxRecordsPerPage);
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
     * @deprecated deprecated since version 2.0, Use withMaxAvgConsume() instead.
     *
     * @param string $maxAvgConsume
     *
     * @return $this
     */
    public function setMaxAvgConsume($maxAvgConsume)
    {
        return $this->withMaxAvgConsume($maxAvgConsume);
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
     * @deprecated deprecated since version 2.0, Use withMinAvgScanRows() instead.
     *
     * @param string $minAvgScanRows
     *
     * @return $this
     */
    public function setMinAvgScanRows($minAvgScanRows)
    {
        return $this->withMinAvgScanRows($minAvgScanRows);
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
     * @deprecated deprecated since version 2.0, Use withSqType() instead.
     *
     * @param string $sqType
     *
     * @return $this
     */
    public function setSqType($sqType)
    {
        return $this->withSqType($sqType);
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
     * @deprecated deprecated since version 2.0, Use withSecurityToken() instead.
     *
     * @param string $securityToken
     *
     * @return $this
     */
    public function setSecurityToken($securityToken)
    {
        return $this->withSecurityToken($securityToken);
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
     * @deprecated deprecated since version 2.0, Use withPageNumbers() instead.
     *
     * @param string $pageNumbers
     *
     * @return $this
     */
    public function setPageNumbers($pageNumbers)
    {
        return $this->withPageNumbers($pageNumbers);
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
     * @deprecated deprecated since version 2.0, Use withPagingId() instead.
     *
     * @param string $pagingId
     *
     * @return $this
     */
    public function setPagingId($pagingId)
    {
        return $this->withPagingId($pagingId);
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
     * @deprecated deprecated since version 2.0, Use withMaxAvgScanRows() instead.
     *
     * @param string $maxAvgScanRows
     *
     * @return $this
     */
    public function setMaxAvgScanRows($maxAvgScanRows)
    {
        return $this->withMaxAvgScanRows($maxAvgScanRows);
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
