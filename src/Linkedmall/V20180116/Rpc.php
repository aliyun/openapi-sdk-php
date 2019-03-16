<?php

namespace AlibabaCloud\Linkedmall\V20180116;

use AlibabaCloud\Rpc;

class V20180116Rpc extends Rpc
{
    /** @var string */
    public $product = 'linkedmall';

    /** @var string */
    public $version = '2018-01-16';

    /** @var string */
    public $method = 'POST';

    /** @var string */
    public $serviceCode = 'linkedmall';
}

/**
 * @method string getLmOrderId()
 * @method $this withLmOrderId($value)
 * @method string getBizUid()
 * @method $this withBizUid($value)
 * @method string getBizId()
 * @method $this withBizId($value)
 */
class QueryLogistics extends V20180116Rpc
{
}

/**
 * @method string getReason()
 * @method $this withReason($value)
 * @method string getSellerId()
 * @method $this withSellerId($value)
 * @method string getLmOrderId()
 * @method $this withLmOrderId($value)
 * @method string getBizId()
 * @method $this withBizId($value)
 */
class RefundPoint extends V20180116Rpc
{
}

/**
 * @method string getDivisionCode()
 * @method $this withDivisionCode($value)
 * @method string getIp()
 * @method $this withIp($value)
 * @method string getBizId()
 * @method $this withBizId($value)
 */
class QueryAddress extends V20180116Rpc
{
}

/**
 * @method array getLmOrderIdList()
 * @method string getBizId()
 * @method $this withBizId($value)
 */
class CancelOrder extends V20180116Rpc
{

    /**
     * @param array $value
     *
     * @return $this
     */
    public function withLmOrderIdList(array $value)
    {
        $this->data['LmOrderIdList'] = $value;
        foreach ($value as $i => $iValue) {
            $this->options['query']['LmOrderIdList.' . ($i + 1)] = $iValue;
        }

        return $this;
    }
}

/**
 * @method string getBizId()
 * @method $this withBizId($value)
 * @method array getItemList()
 */
class AddSupplierNewItems extends V20180116Rpc
{

    /**
     * @param array $value
     *
     * @return $this
     */
    public function withItemList(array $value)
    {
        $this->data['ItemList'] = $value;
        foreach ($value as $i => $iValue) {
            $this->options['query']['ItemList.' . ($i + 1) . '.ItemId'] = $value[$i]['ItemId'];
            foreach ($value[$i]['SkuLists'] as $j => $jValue) {
                $this->options['query']['ItemList.' . ($i + 1) . '.SkuList.' . ($j + 1)] = $jValue;
            }
        }

        return $this;
    }
}

/**
 * @method string getBizId()
 * @method $this withBizId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getUserId()
 * @method $this withUserId($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getSubBizId()
 * @method $this withSubBizId($value)
 */
class QueryBizItemList extends V20180116Rpc
{
}

/**
 * @method string getBizId()
 * @method $this withBizId($value)
 * @method array getItemList()
 * @method string getSubBizId()
 * @method $this withSubBizId($value)
 */
class ModifyBizItems extends V20180116Rpc
{

    /**
     * @param array $value
     *
     * @return $this
     */
    public function withItemList(array $value)
    {
        $this->data['ItemList'] = $value;
        foreach ($value as $i => $iValue) {
            $this->options['query']['ItemList.' . ($i + 1) . '.ItemId'] = $value[$i]['ItemId'];
            foreach ($value[$i]['SkuLists'] as $j => $jValue) {
                $this->options['query']['ItemList.' . ($i + 1) . '.SkuList.' . ($j + 1)] = $jValue;
            }
        }

        return $this;
    }
}

/**
 * @method string getBizUid()
 * @method $this withBizUid($value)
 * @method string getFilterOption()
 * @method $this withFilterOption($value)
 * @method string getBizId()
 * @method $this withBizId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 */
class QueryOrderList extends V20180116Rpc
{
}

/**
 * @method string getLmOrderId()
 * @method $this withLmOrderId($value)
 * @method string getBizUid()
 * @method $this withBizUid($value)
 * @method string getBizId()
 * @method $this withBizId($value)
 */
class QueryOrderLogistics extends V20180116Rpc
{
}

/**
 * @method string getLmOrderId()
 * @method $this withLmOrderId($value)
 * @method string getBizUid()
 * @method $this withBizUid($value)
 * @method string getBizId()
 * @method $this withBizId($value)
 */
class Repay extends V20180116Rpc
{
}

/**
 * @method string getBizId()
 * @method $this withBizId($value)
 * @method array getItemIdList()
 * @method string getSubBizId()
 * @method $this withSubBizId($value)
 */
class DeleteBizItems extends V20180116Rpc
{

    /**
     * @param array $value
     *
     * @return $this
     */
    public function withItemIdList(array $value)
    {
        $this->data['ItemIdList'] = $value;
        foreach ($value as $i => $iValue) {
            $this->options['query']['ItemIdList.' . ($i + 1)] = $iValue;
        }

        return $this;
    }
}

/**
 * @method string getDivisionCode()
 * @method $this withDivisionCode($value)
 * @method string getIp()
 * @method $this withIp($value)
 * @method string getBizId()
 * @method $this withBizId($value)
 * @method array getItemList()
 */
class QueryItemInventory extends V20180116Rpc
{

    /**
     * @param array $value
     *
     * @return $this
     */
    public function withItemList(array $value)
    {
        $this->data['ItemList'] = $value;
        foreach ($value as $i => $iValue) {
            $this->options['query']['ItemList.' . ($i + 1) . '.ItemId'] = $value[$i]['ItemId'];
            foreach ($value[$i]['SkuIdLists'] as $j => $jValue) {
                $this->options['query']['ItemList.' . ($i + 1) . '.SkuIdList.' . ($j + 1)] = $jValue;
            }
        }

        return $this;
    }
}

/**
 * @method string getAmount()
 * @method $this withAmount($value)
 * @method string getPayTypes()
 * @method $this withPayTypes($value)
 * @method string getTenantOrderId()
 * @method $this withTenantOrderId($value)
 * @method string getRequestId()
 * @method $this withRequestId($value)
 * @method string getOperationDate()
 * @method $this withOperationDate($value)
 * @method string getChannelId()
 * @method $this withChannelId($value)
 */
class NotifyWithholdFund extends V20180116Rpc
{
}

/**
 * @method string getItemId()
 * @method $this withItemId($value)
 * @method string getQuantity()
 * @method $this withQuantity($value)
 * @method string getTotalAmount()
 * @method $this withTotalAmount($value)
 * @method string getBizUid()
 * @method $this withBizUid($value)
 * @method string getExtJson()
 * @method $this withExtJson($value)
 * @method string getBizId()
 * @method $this withBizId($value)
 * @method string getOutTradeId()
 * @method $this withOutTradeId($value)
 * @method string getOrderExpireTime()
 * @method $this withOrderExpireTime($value)
 * @method array getItemList()
 * @method string getDeliveryAddress()
 * @method $this withDeliveryAddress($value)
 */
class CreateOrder extends V20180116Rpc
{

    /**
     * @param array $value
     *
     * @return $this
     */
    public function withItemList(array $value)
    {
        $this->data['ItemList'] = $value;
        foreach ($value as $i => $iValue) {
            $this->options['query']['ItemList.' . ($i + 1) . '.ItemId'] = $value[$i]['ItemId'];
            $this->options['query']['ItemList.' . ($i + 1) . '.Quantity'] = $value[$i]['Quantity'];
            $this->options['query']['ItemList.' . ($i + 1) . '.SkuId'] = $value[$i]['SkuId'];
        }

        return $this;
    }
}

/**
 * @method string getBizId()
 * @method $this withBizId($value)
 * @method string getBizUid()
 * @method $this withBizUid($value)
 * @method string getOutTradeId()
 * @method $this withOutTradeId($value)
 * @method string getLockSeatAppKey()
 * @method $this withLockSeatAppKey($value)
 * @method string getExtJson()
 * @method $this withExtJson($value)
 */
class CreateMovieTicketOrder extends V20180116Rpc
{
    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getGroupId()
 * @method $this withGroupId($value)
 * @method string getBizId()
 * @method $this withBizId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 */
class QueryGuideItemGroup extends V20180116Rpc
{
}

/**
 * @method string getItemId()
 * @method $this withItemId($value)
 * @method string getBizId()
 * @method $this withBizId($value)
 */
class QueryItemDetail extends V20180116Rpc
{
}

/**
 * @method string getSeatIds()
 * @method $this withSeatIds($value)
 * @method string getBizUid()
 * @method $this withBizUid($value)
 * @method string getExtJson()
 * @method $this withExtJson($value)
 * @method string getBizId()
 * @method $this withBizId($value)
 * @method string getMobile()
 * @method $this withMobile($value)
 * @method string getSeatNames()
 * @method $this withSeatNames($value)
 * @method string getScheduleId()
 * @method $this withScheduleId($value)
 */
class ReserveMovieSeat extends V20180116Rpc
{
}

/**
 * @method string getBizUid()
 * @method $this withBizUid($value)
 * @method string getExtJson()
 * @method $this withExtJson($value)
 * @method string getBizId()
 * @method $this withBizId($value)
 * @method string getLockSeatApplyKey()
 * @method $this withLockSeatApplyKey($value)
 */
class ReleaseMovieSeat extends V20180116Rpc
{
}

/**
 * @method string getCityCode()
 * @method $this withCityCode($value)
 * @method string getExtJson()
 * @method $this withExtJson($value)
 * @method string getBizId()
 * @method $this withBizId($value)
 */
class QueryUpcomingMovies extends V20180116Rpc
{
}

/**
 * @method string getExtJson()
 * @method $this withExtJson($value)
 * @method string getBizId()
 * @method $this withBizId($value)
 * @method string getScheduleId()
 * @method $this withScheduleId($value)
 */
class QueryMovieSeats extends V20180116Rpc
{
}

/**
 * @method string getCinemaId()
 * @method $this withCinemaId($value)
 * @method string getExtJson()
 * @method $this withExtJson($value)
 * @method string getBizId()
 * @method $this withBizId($value)
 */
class QueryMovieSchedules extends V20180116Rpc
{
}

/**
 * @method string getCityCode()
 * @method $this withCityCode($value)
 * @method string getExtJson()
 * @method $this withExtJson($value)
 * @method string getBizId()
 * @method $this withBizId($value)
 */
class QueryHotMovies extends V20180116Rpc
{
}

/**
 * @method string getExtJson()
 * @method $this withExtJson($value)
 * @method string getBizId()
 * @method $this withBizId($value)
 */
class QueryAllCities extends V20180116Rpc
{
}

/**
 * @method string getCityCode()
 * @method $this withCityCode($value)
 * @method string getExtJson()
 * @method $this withExtJson($value)
 * @method string getBizId()
 * @method $this withBizId($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 */
class QueryAllCinemas extends V20180116Rpc
{
}

/**
 * @method string getExtJson()
 * @method $this withExtJson($value)
 * @method string getBizId()
 * @method $this withBizId($value)
 * @method string getMovieId()
 * @method $this withMovieId($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 */
class QueryMovieComments extends V20180116Rpc
{
}

/**
 * @method string getOrderId()
 * @method $this withOrderId($value)
 * @method string getBizUid()
 * @method $this withBizUid($value)
 * @method string getExtJson()
 * @method $this withExtJson($value)
 * @method string getBizId()
 * @method $this withBizId($value)
 */
class QueryMovieTickets extends V20180116Rpc
{
    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getExtJson()
 * @method $this withExtJson($value)
 * @method string getBizId()
 * @method $this withBizId($value)
 * @method string getMessageIds()
 * @method $this withMessageIds($value)
 */
class RemoveMessages extends V20180116Rpc
{
}

/**
 * @method string getExtJson()
 * @method $this withExtJson($value)
 * @method string getBizId()
 * @method $this withBizId($value)
 * @method string getTopic()
 * @method $this withTopic($value)
 */
class QueryMessages extends V20180116Rpc
{
}

/**
 * @method string getBizId()
 * @method $this withBizId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getUserId()
 * @method $this withUserId($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getSubBizId()
 * @method $this withSubBizId($value)
 */
class QueryBizItems extends V20180116Rpc
{
}

/**
 * @method string getAmount()
 * @method $this withAmount($value)
 * @method string getPayTypes()
 * @method $this withPayTypes($value)
 * @method string getRequestId()
 * @method $this withRequestId($value)
 * @method string getOperationDate()
 * @method $this withOperationDate($value)
 * @method string getChannelId()
 * @method $this withChannelId($value)
 */
class NotifyPayOrderStatus extends V20180116Rpc
{
}
