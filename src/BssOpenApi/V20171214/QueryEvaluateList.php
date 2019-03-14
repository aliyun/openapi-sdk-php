<?php

namespace AlibabaCloud\BssOpenApi\V20171214;

use AlibabaCloud\Rpc;

/**
 * Api QueryEvaluateList
 *
 * @method string getEndSearchTime()
 * @method string getOutBizId()
 * @method string getSortType()
 * @method array getBizTypeList()
 * @method string getCallerBid()
 * @method string getType()
 * @method string getOwnerId()
 * @method string getPageNum()
 * @method string getStartSearchTime()
 * @method string getEndBizTime()
 * @method string getPageSize()
 * @method string getEndAmount()
 * @method string getBillCycle()
 * @method string getStartAmount()
 * @method string getStartBizTime()
 * @method string getCallerUid()
 */
class QueryEvaluateList extends Rpc
{
    public $product = 'BssOpenApi';

    public $version = '2017-12-14';

    public $method = 'POST';

    /**
     * @param string $endSearchTime
     *
     * @return $this
     */
    public function withEndSearchTime($endSearchTime)
    {
        $this->data['EndSearchTime'] = $endSearchTime;
        $this->options['query']['EndSearchTime'] = $endSearchTime;

        return $this;
    }

    /**
     * @param string $outBizId
     *
     * @return $this
     */
    public function withOutBizId($outBizId)
    {
        $this->data['OutBizId'] = $outBizId;
        $this->options['query']['OutBizId'] = $outBizId;

        return $this;
    }

    /**
     * @param string $sortType
     *
     * @return $this
     */
    public function withSortType($sortType)
    {
        $this->data['SortType'] = $sortType;
        $this->options['query']['SortType'] = $sortType;

        return $this;
    }

    /**
     * @param array $bizTypeList
     *
     * @return $this
     */
    public function withBizTypeList(array $bizTypeList)
    {
        $this->data['BizTypeList'] = $bizTypeList;
        foreach ($bizTypeList as $i => $iValue) {
            $this->options['query']['BizTypeList.' . ($i + 1)] = $iValue;
        }

        return $this;
    }

    /**
     * @param string $callerBid
     *
     * @return $this
     */
    public function withCallerBid($callerBid)
    {
        $this->data['CallerBid'] = $callerBid;
        $this->options['query']['callerBid'] = $callerBid;

        return $this;
    }

    /**
     * @param string $type
     *
     * @return $this
     */
    public function withType($type)
    {
        $this->data['Type'] = $type;
        $this->options['query']['Type'] = $type;

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
     * @param string $pageNum
     *
     * @return $this
     */
    public function withPageNum($pageNum)
    {
        $this->data['PageNum'] = $pageNum;
        $this->options['query']['PageNum'] = $pageNum;

        return $this;
    }

    /**
     * @param string $startSearchTime
     *
     * @return $this
     */
    public function withStartSearchTime($startSearchTime)
    {
        $this->data['StartSearchTime'] = $startSearchTime;
        $this->options['query']['StartSearchTime'] = $startSearchTime;

        return $this;
    }

    /**
     * @param string $endBizTime
     *
     * @return $this
     */
    public function withEndBizTime($endBizTime)
    {
        $this->data['EndBizTime'] = $endBizTime;
        $this->options['query']['EndBizTime'] = $endBizTime;

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
     * @param string $endAmount
     *
     * @return $this
     */
    public function withEndAmount($endAmount)
    {
        $this->data['EndAmount'] = $endAmount;
        $this->options['query']['EndAmount'] = $endAmount;

        return $this;
    }

    /**
     * @param string $billCycle
     *
     * @return $this
     */
    public function withBillCycle($billCycle)
    {
        $this->data['BillCycle'] = $billCycle;
        $this->options['query']['BillCycle'] = $billCycle;

        return $this;
    }

    /**
     * @param string $startAmount
     *
     * @return $this
     */
    public function withStartAmount($startAmount)
    {
        $this->data['StartAmount'] = $startAmount;
        $this->options['query']['StartAmount'] = $startAmount;

        return $this;
    }

    /**
     * @param string $startBizTime
     *
     * @return $this
     */
    public function withStartBizTime($startBizTime)
    {
        $this->data['StartBizTime'] = $startBizTime;
        $this->options['query']['StartBizTime'] = $startBizTime;

        return $this;
    }

    /**
     * @param string $callerUid
     *
     * @return $this
     */
    public function withCallerUid($callerUid)
    {
        $this->data['CallerUid'] = $callerUid;
        $this->options['query']['callerUid'] = $callerUid;

        return $this;
    }
}
