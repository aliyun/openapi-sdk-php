<?php

namespace AlibabaCloud\Linkedmall\V20180116;

use AlibabaCloud\Client\Resolver\ApiResolver;

/**
 * @method GetCustomServiceUrl getCustomServiceUrl(array $options = [])
 * @method QueryOrderInfoAfterSale queryOrderInfoAfterSale(array $options = [])
 * @method ValidateTaobaoAccount validateTaobaoAccount(array $options = [])
 * @method CancelRefund cancelRefund(array $options = [])
 * @method RenderOrder renderOrder(array $options = [])
 * @method ApplyRefund applyRefund(array $options = [])
 * @method InitApplyRefund initApplyRefund(array $options = [])
 * @method SubmitReturnGoodLogistics submitReturnGoodLogistics(array $options = [])
 * @method QueryRefundApplicationDetail queryRefundApplicationDetail(array $options = [])
 * @method ConfirmDisburse confirmDisburse(array $options = [])
 * @method ModifyBasicAndBizItems modifyBasicAndBizItems(array $options = [])
 * @method QueryOrderList queryOrderList(array $options = [])
 * @method QueryOrderLogistics queryOrderLogistics(array $options = [])
 * @method RepayOrder repayOrder(array $options = [])
 * @method QueryAddress queryAddress(array $options = [])
 * @method QueryLogistics queryLogistics(array $options = [])
 * @method RefundPoint refundPoint(array $options = [])
 * @method QueryItemInventory queryItemInventory(array $options = [])
 * @method DeleteBizItems deleteBizItems(array $options = [])
 * @method ModifyBizItems modifyBizItems(array $options = [])
 * @method QueryBizItemList queryBizItemList(array $options = [])
 * @method AddSupplierNewItems addSupplierNewItems(array $options = [])
 * @method NotifyWithholdFund notifyWithholdFund(array $options = [])
 * @method CreateOrder createOrder(array $options = [])
 * @method CreateMovieTicketOrder createMovieTicketOrder(array $options = [])
 * @method QueryGuideItemGroup queryGuideItemGroup(array $options = [])
 * @method QueryItemDetail queryItemDetail(array $options = [])
 * @method QueryHotMovies queryHotMovies(array $options = [])
 * @method QueryMovieComments queryMovieComments(array $options = [])
 * @method QueryMovieSchedules queryMovieSchedules(array $options = [])
 * @method QueryMessages queryMessages(array $options = [])
 * @method RemoveMessages removeMessages(array $options = [])
 * @method QueryMovieTickets queryMovieTickets(array $options = [])
 * @method QueryAllCinemas queryAllCinemas(array $options = [])
 * @method QueryAllCities queryAllCities(array $options = [])
 * @method QueryUpcomingMovies queryUpcomingMovies(array $options = [])
 * @method QueryMovieSeats queryMovieSeats(array $options = [])
 * @method ReserveMovieSeat reserveMovieSeat(array $options = [])
 * @method ReleaseMovieSeat releaseMovieSeat(array $options = [])
 * @method QueryBizItems queryBizItems(array $options = [])
 * @method NotifyPayOrderStatus notifyPayOrderStatus(array $options = [])
 */
class LinkedmallApiResolver extends ApiResolver
{
}

class Rpc extends \AlibabaCloud\Client\Resolver\Rpc
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
 * @method string getNick()
 * @method $this withNick($value)
 * @method string getSellerId()
 * @method $this withSellerId($value)
 * @method string getCuid()
 * @method $this withCuid($value)
 * @method string getBizUid()
 * @method $this withBizUid($value)
 * @method string getBizId()
 * @method $this withBizId($value)
 */
class GetCustomServiceUrl extends Rpc
{
}

/**
 * @method string getLmOrderId()
 * @method $this withLmOrderId($value)
 * @method string getBizId()
 * @method $this withBizId($value)
 * @method string getChannelUserId()
 * @method $this withChannelUserId($value)
 */
class QueryOrderInfoAfterSale extends Rpc
{

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getBizUid()
 * @method $this withBizUid($value)
 * @method string getExtJson()
 * @method $this withExtJson($value)
 * @method string getBizId()
 * @method $this withBizId($value)
 * @method string getMobileNo()
 * @method $this withMobileNo($value)
 * @method string getTbUserNick()
 * @method $this withTbUserNick($value)
 */
class ValidateTaobaoAccount extends Rpc
{
}

/**
 * @method string getSubLmOrderId()
 * @method $this withSubLmOrderId($value)
 * @method string getBizUid()
 * @method $this withBizUid($value)
 * @method string getDisputeId()
 * @method $this withDisputeId($value)
 * @method string getBizId()
 * @method $this withBizId($value)
 */
class CancelRefund extends Rpc
{
}

/**
 * @method string getBizUid()
 * @method $this withBizUid($value)
 * @method string getExtJson()
 * @method $this withExtJson($value)
 * @method string getBizId()
 * @method $this withBizId($value)
 * @method array getItemList()
 * @method string getDeliveryAddress()
 * @method $this withDeliveryAddress($value)
 */
class RenderOrder extends Rpc
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
 * @method string getGoodsStatus()
 * @method $this withGoodsStatus($value)
 * @method string getSubLmOrderId()
 * @method $this withSubLmOrderId($value)
 * @method string getBizUid()
 * @method $this withBizUid($value)
 * @method string getApplyRefundFee()
 * @method $this withApplyRefundFee($value)
 * @method string getBizClaimType()
 * @method $this withBizClaimType($value)
 * @method string getApplyReasonTextId()
 * @method $this withApplyReasonTextId($value)
 * @method string getBizId()
 * @method $this withBizId($value)
 * @method array getLeavePictureList()
 * @method string getApplyRefundCount()
 * @method $this withApplyRefundCount($value)
 * @method string getLeaveMessage()
 */
class ApplyRefund extends Rpc
{

    /**
     * @param array $leavePictureList
     *
     * @return $this
     */
    public function withLeavePictureList(array $leavePictureList)
    {
        $this->data['LeavePictureList'] = $leavePictureList;
        foreach ($leavePictureList as $depth1 => $depth1Value) {
            $this->options['form_params']['LeavePictureList.' . ($depth1 + 1) . '.Picture'] = $depth1Value['Picture'];
            $this->options['form_params']['LeavePictureList.' . ($depth1 + 1) . '.Desc'] = $depth1Value['Desc'];
        }

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withLeaveMessage($value)
    {
        $this->data['LeaveMessage'] = $value;
        $this->options['form_params']['LeaveMessage'] = $value;

        return $this;
    }
}

/**
 * @method string getGoodsStatus()
 * @method $this withGoodsStatus($value)
 * @method string getSubLmOrderId()
 * @method $this withSubLmOrderId($value)
 * @method string getBizUid()
 * @method $this withBizUid($value)
 * @method string getBizClaimType()
 * @method $this withBizClaimType($value)
 * @method string getBizId()
 * @method $this withBizId($value)
 */
class InitApplyRefund extends Rpc
{
}

/**
 * @method string getCpCode()
 * @method $this withCpCode($value)
 * @method string getSubLmOrderId()
 * @method $this withSubLmOrderId($value)
 * @method string getBizUid()
 * @method $this withBizUid($value)
 * @method string getDisputeId()
 * @method $this withDisputeId($value)
 * @method string getBizId()
 * @method $this withBizId($value)
 * @method string getLogisticsNo()
 * @method $this withLogisticsNo($value)
 */
class SubmitReturnGoodLogistics extends Rpc
{
}

/**
 * @method string getSubLmOrderId()
 * @method $this withSubLmOrderId($value)
 * @method string getBizUid()
 * @method $this withBizUid($value)
 * @method string getBizId()
 * @method $this withBizId($value)
 */
class QueryRefundApplicationDetail extends Rpc
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
class ConfirmDisburse extends Rpc
{
}

/**
 * @method string getBizId()
 * @method $this withBizId($value)
 * @method array getItemList()
 * @method string getSubBizId()
 * @method $this withSubBizId($value)
 */
class ModifyBasicAndBizItems extends Rpc
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
                $this->options['form_params']['ItemList.' . ($depth1 + 1) . '.SkuList.' . ($depth2 + 1) . '.SupplierPrice'] = $depth2Value['SupplierPrice'];
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
class QueryOrderList extends Rpc
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
class QueryOrderLogistics extends Rpc
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
class RepayOrder extends Rpc
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
class QueryAddress extends Rpc
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
class QueryLogistics extends Rpc
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
class RefundPoint extends Rpc
{
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
class QueryItemInventory extends Rpc
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
 * @method string getBizId()
 * @method $this withBizId($value)
 * @method array getItemIdList()
 * @method string getSubBizId()
 * @method $this withSubBizId($value)
 */
class DeleteBizItems extends Rpc
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
 * @method string getBizId()
 * @method $this withBizId($value)
 * @method array getItemList()
 * @method string getSubBizId()
 * @method $this withSubBizId($value)
 */
class ModifyBizItems extends Rpc
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
class QueryBizItemList extends Rpc
{
}

/**
 * @method string getBizId()
 * @method $this withBizId($value)
 * @method array getItemList()
 */
class AddSupplierNewItems extends Rpc
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
class NotifyWithholdFund extends Rpc
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
class CreateOrder extends Rpc
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
class CreateMovieTicketOrder extends Rpc
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
class QueryGuideItemGroup extends Rpc
{
}

/**
 * @method string getItemId()
 * @method $this withItemId($value)
 * @method string getBizId()
 * @method $this withBizId($value)
 */
class QueryItemDetail extends Rpc
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
class QueryHotMovies extends Rpc
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
class QueryMovieComments extends Rpc
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
class QueryMovieSchedules extends Rpc
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
class QueryMessages extends Rpc
{
}

/**
 * @method string getExtJson()
 * @method $this withExtJson($value)
 * @method string getBizId()
 * @method $this withBizId($value)
 * @method string getMessageIds()
 * @method $this withMessageIds($value)
 */
class RemoveMessages extends Rpc
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
class QueryMovieTickets extends Rpc
{

    /** @var string */
    public $method = 'GET';
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
class QueryAllCinemas extends Rpc
{
}

/**
 * @method string getExtJson()
 * @method $this withExtJson($value)
 * @method string getBizId()
 * @method $this withBizId($value)
 */
class QueryAllCities extends Rpc
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
class QueryUpcomingMovies extends Rpc
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
class QueryMovieSeats extends Rpc
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
class ReserveMovieSeat extends Rpc
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
class ReleaseMovieSeat extends Rpc
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
class QueryBizItems extends Rpc
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
class NotifyPayOrderStatus extends Rpc
{
}
