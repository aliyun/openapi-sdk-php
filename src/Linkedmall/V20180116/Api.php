<?php

namespace AlibabaCloud\Linkedmall\V20180116;

use AlibabaCloud\ApiResolverTrait;
use AlibabaCloud\Rpc;

/**
 * Resolve Api based on the method name.
 *
 * @method RepayOrder repayOrder(array $options = [])
 * @method QueryLogistics queryLogistics(array $options = [])
 * @method RefundPoint refundPoint(array $options = [])
 * @method QueryAddress queryAddress(array $options = [])
 * @method CancelOrder cancelOrder(array $options = [])
 * @method AddSupplierNewItems addSupplierNewItems(array $options = [])
 * @method QueryBizItemList queryBizItemList(array $options = [])
 * @method ModifyBizItems modifyBizItems(array $options = [])
 * @method QueryOrderList queryOrderList(array $options = [])
 * @method QueryOrderLogistics queryOrderLogistics(array $options = [])
 * @method DeleteBizItems deleteBizItems(array $options = [])
 * @method QueryItemInventory queryItemInventory(array $options = [])
 * @method NotifyWithholdFund notifyWithholdFund(array $options = [])
 * @method CreateOrder createOrder(array $options = [])
 * @method CreateMovieTicketOrder createMovieTicketOrder(array $options = [])
 * @method QueryGuideItemGroup queryGuideItemGroup(array $options = [])
 * @method QueryItemDetail queryItemDetail(array $options = [])
 * @method ReserveMovieSeat reserveMovieSeat(array $options = [])
 * @method ReleaseMovieSeat releaseMovieSeat(array $options = [])
 * @method QueryUpcomingMovies queryUpcomingMovies(array $options = [])
 * @method QueryMovieSeats queryMovieSeats(array $options = [])
 * @method QueryMovieSchedules queryMovieSchedules(array $options = [])
 * @method QueryHotMovies queryHotMovies(array $options = [])
 * @method QueryAllCities queryAllCities(array $options = [])
 * @method QueryAllCinemas queryAllCinemas(array $options = [])
 * @method QueryMovieComments queryMovieComments(array $options = [])
 * @method QueryMovieTickets queryMovieTickets(array $options = [])
 * @method RemoveMessages removeMessages(array $options = [])
 * @method QueryMessages queryMessages(array $options = [])
 * @method QueryBizItems queryBizItems(array $options = [])
 * @method NotifyPayOrderStatus notifyPayOrderStatus(array $options = [])
 */
class LinkedmallApiResolver
{
    use ApiResolverTrait;
}

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
class RepayOrder extends V20180116Rpc
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
     * @param array $lmOrderIdList
     *
     * @return $this
     */
    public function withLmOrderIdList(array $lmOrderIdList)
    {
        $this->data['LmOrderIdList'] = $lmOrderIdList;
        foreach ($lmOrderIdList as $i => $iValue) {
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
     * @param array $itemList
     *
     * @return $this
     */
    public function withItemList(array $itemList)
    {
        $this->data['ItemList'] = $itemList;
        foreach ($itemList as $depth1 => $depth1Value) {
            $this->options['query']['ItemList.' . ($depth1 + 1) . '.ItemId'] = $depth1Value['ItemId'];
            foreach ($depth1Value['SkuList'] as $i => $iValue) {
                $this->options['query']['ItemList.' . ($depth1 + 1) . '.SkuList.' . ($i + 1)] = $iValue;
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
     * @param array $itemList
     *
     * @return $this
     */
    public function withItemList(array $itemList)
    {
        $this->data['ItemList'] = $itemList;
        foreach ($itemList as $depth1 => $depth1Value) {
            $this->options['form_params']['ItemList.' . ($depth1 + 1) . '.ItemId'] = $depth1Value['ItemId'];
            foreach ($depth1Value['SkuList'] as $depth2 => $depth2Value) {
                $this->options['form_params']['ItemList.' . ($depth1 + 1) . '.SkuList.' . ($depth2 + 1) . '.StatusAction'] = $depth2Value['StatusAction'];
                $this->options['form_params']['ItemList.' . ($depth1 + 1) . '.SkuList.' . ($depth2 + 1) . '.PriceCent'] = $depth2Value['PriceCent'];
                $this->options['form_params']['ItemList.' . ($depth1 + 1) . '.SkuList.' . ($depth2 + 1) . '.PointsAmount'] = $depth2Value['PointsAmount'];
                $this->options['form_params']['ItemList.' . ($depth1 + 1) . '.SkuList.' . ($depth2 + 1) . '.Quantity'] = $depth2Value['Quantity'];
                $this->options['form_params']['ItemList.' . ($depth1 + 1) . '.SkuList.' . ($depth2 + 1) . '.BenefitId'] = $depth2Value['BenefitId'];
                $this->options['form_params']['ItemList.' . ($depth1 + 1) . '.SkuList.' . ($depth2 + 1) . '.SkuId'] = $depth2Value['SkuId'];
                $this->options['form_params']['ItemList.' . ($depth1 + 1) . '.SkuList.' . ($depth2 + 1) . '.Points'] = $depth2Value['Points'];
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
 * @method string getBizId()
 * @method $this withBizId($value)
 * @method array getItemIdList()
 * @method string getSubBizId()
 * @method $this withSubBizId($value)
 */
class DeleteBizItems extends V20180116Rpc
{

    /**
     * @param array $itemIdList
     *
     * @return $this
     */
    public function withItemIdList(array $itemIdList)
    {
        $this->data['ItemIdList'] = $itemIdList;
        foreach ($itemIdList as $i => $iValue) {
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
     * @param array $itemList
     *
     * @return $this
     */
    public function withItemList(array $itemList)
    {
        $this->data['ItemList'] = $itemList;
        foreach ($itemList as $depth1 => $depth1Value) {
            $this->options['query']['ItemList.' . ($depth1 + 1) . '.ItemId'] = $depth1Value['ItemId'];
            foreach ($depth1Value['SkuIdList'] as $i => $iValue) {
                $this->options['query']['ItemList.' . ($depth1 + 1) . '.SkuIdList.' . ($i + 1)] = $iValue;
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
     * @param array $itemList
     *
     * @return $this
     */
    public function withItemList(array $itemList)
    {
        $this->data['ItemList'] = $itemList;
        foreach ($itemList as $depth1 => $depth1Value) {
            $this->options['query']['ItemList.' . ($depth1 + 1) . '.ItemId'] = $depth1Value['ItemId'];
            $this->options['query']['ItemList.' . ($depth1 + 1) . '.Quantity'] = $depth1Value['Quantity'];
            $this->options['query']['ItemList.' . ($depth1 + 1) . '.SkuId'] = $depth1Value['SkuId'];
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
