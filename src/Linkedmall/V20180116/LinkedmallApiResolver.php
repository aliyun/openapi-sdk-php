<?php

namespace AlibabaCloud\Linkedmall\V20180116;

use AlibabaCloud\Client\Resolver\ApiResolver;

/**
 * @method AddAddress addAddress(array $options = [])
 * @method AddItemLimitRule addItemLimitRule(array $options = [])
 * @method AddSupplierNewItems addSupplierNewItems(array $options = [])
 * @method ApplyRefund applyRefund(array $options = [])
 * @method BatchRegistAnonymousTbAccount batchRegistAnonymousTbAccount(array $options = [])
 * @method CancelOrder cancelOrder(array $options = [])
 * @method CancelRefund cancelRefund(array $options = [])
 * @method ConfirmDisburse confirmDisburse(array $options = [])
 * @method CreateMovieTicketOrder createMovieTicketOrder(array $options = [])
 * @method CreateOrder createOrder(array $options = [])
 * @method CreateOrderV2 createOrderV2(array $options = [])
 * @method CreatePayUrl createPayUrl(array $options = [])
 * @method CreateVirtualProductOrder createVirtualProductOrder(array $options = [])
 * @method DeleteBizItems deleteBizItems(array $options = [])
 * @method DeleteItemLimitRule deleteItemLimitRule(array $options = [])
 * @method EnableOrder enableOrder(array $options = [])
 * @method GetCategoryChain getCategoryChain(array $options = [])
 * @method GetCategoryList getCategoryList(array $options = [])
 * @method GetCustomServiceUrl getCustomServiceUrl(array $options = [])
 * @method GetGuidePage getGuidePage(array $options = [])
 * @method GetLoginPage getLoginPage(array $options = [])
 * @method GetSwitchUrl getSwitchUrl(array $options = [])
 * @method GetUserInfo getUserInfo(array $options = [])
 * @method InitApplyRefund initApplyRefund(array $options = [])
 * @method ListItemActivities listItemActivities(array $options = [])
 * @method ModifyBasicAndBizItems modifyBasicAndBizItems(array $options = [])
 * @method ModifyBizItems modifyBizItems(array $options = [])
 * @method ModifyItemLimitRule modifyItemLimitRule(array $options = [])
 * @method NotifyPayOrderStatus notifyPayOrderStatus(array $options = [])
 * @method NotifyWithholdFund notifyWithholdFund(array $options = [])
 * @method QueryActivityItems queryActivityItems(array $options = [])
 * @method QueryAddress queryAddress(array $options = [])
 * @method QueryAddressDetail queryAddressDetail(array $options = [])
 * @method QueryAddressList queryAddressList(array $options = [])
 * @method QueryAllCinemas queryAllCinemas(array $options = [])
 * @method QueryAllCities queryAllCities(array $options = [])
 * @method QueryBatchRegistAnonymousTbAccountResult queryBatchRegistAnonymousTbAccountResult(array $options = [])
 * @method QueryBestSession4Items queryBestSession4Items(array $options = [])
 * @method QueryBizItemList queryBizItemList(array $options = [])
 * @method QueryBizItems queryBizItems(array $options = [])
 * @method QueryGuideItemGroup queryGuideItemGroup(array $options = [])
 * @method QueryHotMovies queryHotMovies(array $options = [])
 * @method QueryItemDetail queryItemDetail(array $options = [])
 * @method QueryItemDetailInner queryItemDetailInner(array $options = [])
 * @method QueryItemInventory queryItemInventory(array $options = [])
 * @method QueryLogistics queryLogistics(array $options = [])
 * @method QueryMessages queryMessages(array $options = [])
 * @method QueryMovieComments queryMovieComments(array $options = [])
 * @method QueryMovieSchedules queryMovieSchedules(array $options = [])
 * @method QueryMovieSeats queryMovieSeats(array $options = [])
 * @method QueryMovieTickets queryMovieTickets(array $options = [])
 * @method QueryOrderAndPaymentList queryOrderAndPaymentList(array $options = [])
 * @method QueryOrderCommissionRate queryOrderCommissionRate(array $options = [])
 * @method QueryOrderDetailInner queryOrderDetailInner(array $options = [])
 * @method QueryOrderIdByPayId queryOrderIdByPayId(array $options = [])
 * @method QueryOrderInfoAfterSale queryOrderInfoAfterSale(array $options = [])
 * @method QueryOrderItemInfoByPaymentIdForAiZhanYou queryOrderItemInfoByPaymentIdForAiZhanYou(array $options = [])
 * @method QueryOrderList queryOrderList(array $options = [])
 * @method QueryOrderLogistics queryOrderLogistics(array $options = [])
 * @method QueryRefundApplicationDetail queryRefundApplicationDetail(array $options = [])
 * @method QueryUnfinishedActivities queryUnfinishedActivities(array $options = [])
 * @method QueryUnfinishedSessions queryUnfinishedSessions(array $options = [])
 * @method QueryUnfinishedSessions4Items queryUnfinishedSessions4Items(array $options = [])
 * @method QueryUpcomingMovies queryUpcomingMovies(array $options = [])
 * @method RefundPoint refundPoint(array $options = [])
 * @method RefuseMerchantSyncTask refuseMerchantSyncTask(array $options = [])
 * @method RegistAnonymousTbAccount registAnonymousTbAccount(array $options = [])
 * @method ReleaseMovieSeat releaseMovieSeat(array $options = [])
 * @method RemoveAddress removeAddress(array $options = [])
 * @method RemoveMessages removeMessages(array $options = [])
 * @method RenderH5Order renderH5Order(array $options = [])
 * @method RenderOrder renderOrder(array $options = [])
 * @method RepayForPayUrl repayForPayUrl(array $options = [])
 * @method RepayOrder repayOrder(array $options = [])
 * @method ReserveMovieSeat reserveMovieSeat(array $options = [])
 * @method SubmitReturnGoodLogistics submitReturnGoodLogistics(array $options = [])
 * @method SyncMerchantInfo syncMerchantInfo(array $options = [])
 * @method UpdateAddress updateAddress(array $options = [])
 * @method ValidateTaobaoAccount validateTaobaoAccount(array $options = [])
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
 * @method string getAddressInfo()
 * @method string getThirdPartyUserId()
 * @method $this withThirdPartyUserId($value)
 * @method string getBizId()
 * @method $this withBizId($value)
 * @method string getUseAnonymousTbAccount()
 * @method $this withUseAnonymousTbAccount($value)
 */
class AddAddress extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAddressInfo($value)
    {
        $this->data['AddressInfo'] = $value;
        $this->options['form_params']['AddressInfo'] = $value;

        return $this;
    }
}

/**
 * @method string getUpperNum()
 * @method $this withUpperNum($value)
 * @method string getLmActivityId()
 * @method $this withLmActivityId($value)
 * @method string getRuleType()
 * @method $this withRuleType($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getLmItemId()
 * @method $this withLmItemId($value)
 * @method string getBeginTime()
 * @method $this withBeginTime($value)
 * @method string getSubBizCode()
 * @method $this withSubBizCode($value)
 * @method string getItemId()
 * @method $this withItemId($value)
 * @method string getBizId()
 * @method $this withBizId($value)
 */
class AddItemLimitRule extends Rpc
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
			if(isset($depth1Value['ItemId'])){
				$this->options['query']['ItemList.' . ($depth1 + 1) . '.ItemId'] = $depth1Value['ItemId'];
			}
			if(isset($depth1Value['LmItemId'])){
				$this->options['query']['ItemList.' . ($depth1 + 1) . '.LmItemId'] = $depth1Value['LmItemId'];
			}
			foreach ($depth1Value['SkuList'] as $i => $iValue) {
				$this->options['query']['ItemList.' . ($depth1 + 1) . '.SkuList.' . ($i + 1)] = $iValue;
			}
		}

		return $this;
    }
}

/**
 * @method string getBizUid()
 * @method $this withBizUid($value)
 * @method string getBizClaimType()
 * @method $this withBizClaimType($value)
 * @method string getApplyReasonTextId()
 * @method $this withApplyReasonTextId($value)
 * @method string getAccountType()
 * @method $this withAccountType($value)
 * @method string getUseAnonymousTbAccount()
 * @method $this withUseAnonymousTbAccount($value)
 * @method array getLeavePictureList()
 * @method string getApplyRefundCount()
 * @method $this withApplyRefundCount($value)
 * @method string getGoodsStatus()
 * @method $this withGoodsStatus($value)
 * @method string getSubLmOrderId()
 * @method $this withSubLmOrderId($value)
 * @method string getThirdPartyUserId()
 * @method $this withThirdPartyUserId($value)
 * @method string getApplyRefundFee()
 * @method $this withApplyRefundFee($value)
 * @method string getBizId()
 * @method $this withBizId($value)
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
			if(isset($depth1Value['Picture'])){
				$this->options['form_params']['LeavePictureList.' . ($depth1 + 1) . '.Picture'] = $depth1Value['Picture'];
			}
			if(isset($depth1Value['Desc'])){
				$this->options['form_params']['LeavePictureList.' . ($depth1 + 1) . '.Desc'] = $depth1Value['Desc'];
			}
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
 * @method string getBizId()
 * @method $this withBizId($value)
 * @method string getIdJsonList()
 * @method $this withIdJsonList($value)
 */
class BatchRegistAnonymousTbAccount extends Rpc
{
}

/**
 * @method string getLmOrderId()
 * @method $this withLmOrderId($value)
 * @method string getBizUid()
 * @method $this withBizUid($value)
 * @method string getAccountType()
 * @method $this withAccountType($value)
 * @method string getUseAnonymousTbAccount()
 * @method $this withUseAnonymousTbAccount($value)
 * @method string getThirdPartyUserId()
 * @method $this withThirdPartyUserId($value)
 * @method string getBizId()
 * @method $this withBizId($value)
 */
class CancelOrder extends Rpc
{
}

/**
 * @method string getBizUid()
 * @method $this withBizUid($value)
 * @method string getAccountType()
 * @method $this withAccountType($value)
 * @method string getUseAnonymousTbAccount()
 * @method $this withUseAnonymousTbAccount($value)
 * @method string getSubLmOrderId()
 * @method $this withSubLmOrderId($value)
 * @method string getThirdPartyUserId()
 * @method $this withThirdPartyUserId($value)
 * @method string getDisputeId()
 * @method $this withDisputeId($value)
 * @method string getBizId()
 * @method $this withBizId($value)
 */
class CancelRefund extends Rpc
{
}

/**
 * @method string getLmOrderId()
 * @method $this withLmOrderId($value)
 * @method string getBizUid()
 * @method $this withBizUid($value)
 * @method string getAccountType()
 * @method $this withAccountType($value)
 * @method string getUseAnonymousTbAccount()
 * @method $this withUseAnonymousTbAccount($value)
 * @method string getThirdPartyUserId()
 * @method $this withThirdPartyUserId($value)
 * @method string getBizId()
 * @method $this withBizId($value)
 */
class ConfirmDisburse extends Rpc
{
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
 * @method string getQuantity()
 * @method $this withQuantity($value)
 * @method string getBizUid()
 * @method $this withBizUid($value)
 * @method string getExtJson()
 * @method $this withExtJson($value)
 * @method string getAccountType()
 * @method $this withAccountType($value)
 * @method string getUseAnonymousTbAccount()
 * @method $this withUseAnonymousTbAccount($value)
 * @method string getOrderExpireTime()
 * @method $this withOrderExpireTime($value)
 * @method string getLmItemId()
 * @method $this withLmItemId($value)
 * @method array getItemList()
 * @method string getItemId()
 * @method $this withItemId($value)
 * @method string getTotalAmount()
 * @method $this withTotalAmount($value)
 * @method string getThirdPartyUserId()
 * @method $this withThirdPartyUserId($value)
 * @method string getBizId()
 * @method $this withBizId($value)
 * @method string getOutTradeId()
 * @method $this withOutTradeId($value)
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
			if(isset($depth1Value['ItemId'])){
				$this->options['query']['ItemList.' . ($depth1 + 1) . '.ItemId'] = $depth1Value['ItemId'];
			}
			if(isset($depth1Value['Quantity'])){
				$this->options['query']['ItemList.' . ($depth1 + 1) . '.Quantity'] = $depth1Value['Quantity'];
			}
			if(isset($depth1Value['LmItemId'])){
				$this->options['query']['ItemList.' . ($depth1 + 1) . '.LmItemId'] = $depth1Value['LmItemId'];
			}
			if(isset($depth1Value['SkuId'])){
				$this->options['query']['ItemList.' . ($depth1 + 1) . '.SkuId'] = $depth1Value['SkuId'];
			}
		}

		return $this;
    }
}

/**
 * @method string getQuantity()
 * @method $this withQuantity($value)
 * @method string getBizUid()
 * @method $this withBizUid($value)
 * @method string getExtJson()
 * @method $this withExtJson($value)
 * @method string getAccountType()
 * @method $this withAccountType($value)
 * @method string getUseAnonymousTbAccount()
 * @method $this withUseAnonymousTbAccount($value)
 * @method string getOrderExpireTime()
 * @method $this withOrderExpireTime($value)
 * @method string getLmItemId()
 * @method $this withLmItemId($value)
 * @method array getItemList()
 * @method string getItemId()
 * @method $this withItemId($value)
 * @method string getTotalAmount()
 * @method $this withTotalAmount($value)
 * @method string getThirdPartyUserId()
 * @method $this withThirdPartyUserId($value)
 * @method string getBizId()
 * @method $this withBizId($value)
 * @method string getOutTradeId()
 * @method $this withOutTradeId($value)
 * @method string getDeliveryAddress()
 * @method $this withDeliveryAddress($value)
 */
class CreateOrderV2 extends Rpc
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
			if(isset($depth1Value['ItemId'])){
				$this->options['query']['ItemList.' . ($depth1 + 1) . '.ItemId'] = $depth1Value['ItemId'];
			}
			if(isset($depth1Value['Quantity'])){
				$this->options['query']['ItemList.' . ($depth1 + 1) . '.Quantity'] = $depth1Value['Quantity'];
			}
			if(isset($depth1Value['LmItemId'])){
				$this->options['query']['ItemList.' . ($depth1 + 1) . '.LmItemId'] = $depth1Value['LmItemId'];
			}
			if(isset($depth1Value['SkuId'])){
				$this->options['query']['ItemList.' . ($depth1 + 1) . '.SkuId'] = $depth1Value['SkuId'];
			}
		}

		return $this;
    }
}

/**
 * @method string getBizUid()
 * @method $this withBizUid($value)
 * @method string getUseAnonymousTbAccount()
 * @method $this withUseAnonymousTbAccount($value)
 * @method string getBuyInfo()
 * @method string getThirdPartyUserId()
 * @method $this withThirdPartyUserId($value)
 * @method string getBizId()
 * @method $this withBizId($value)
 */
class CreatePayUrl extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBuyInfo($value)
    {
        $this->data['BuyInfo'] = $value;
        $this->options['form_params']['BuyInfo'] = $value;

        return $this;
    }
}

/**
 * @method string getQuantity()
 * @method $this withQuantity($value)
 * @method string getBizUid()
 * @method $this withBizUid($value)
 * @method string getExtJson()
 * @method $this withExtJson($value)
 * @method string getAccountType()
 * @method $this withAccountType($value)
 * @method string getUseAnonymousTbAccount()
 * @method $this withUseAnonymousTbAccount($value)
 * @method string getOrderExpireTime()
 * @method $this withOrderExpireTime($value)
 * @method string getLmItemId()
 * @method $this withLmItemId($value)
 * @method array getItemList()
 * @method string getItemId()
 * @method $this withItemId($value)
 * @method string getTotalAmount()
 * @method $this withTotalAmount($value)
 * @method string getThirdPartyUserId()
 * @method $this withThirdPartyUserId($value)
 * @method string getBizId()
 * @method $this withBizId($value)
 * @method string getOutTradeId()
 * @method $this withOutTradeId($value)
 * @method string getDeliveryAddress()
 * @method $this withDeliveryAddress($value)
 */
class CreateVirtualProductOrder extends Rpc
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
			if(isset($depth1Value['ItemId'])){
				$this->options['query']['ItemList.' . ($depth1 + 1) . '.ItemId'] = $depth1Value['ItemId'];
			}
			if(isset($depth1Value['Quantity'])){
				$this->options['query']['ItemList.' . ($depth1 + 1) . '.Quantity'] = $depth1Value['Quantity'];
			}
			if(isset($depth1Value['LmItemId'])){
				$this->options['query']['ItemList.' . ($depth1 + 1) . '.LmItemId'] = $depth1Value['LmItemId'];
			}
			if(isset($depth1Value['SkuId'])){
				$this->options['query']['ItemList.' . ($depth1 + 1) . '.SkuId'] = $depth1Value['SkuId'];
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
 * @method string getLmActivityId()
 * @method $this withLmActivityId($value)
 * @method string getLmItemId()
 * @method $this withLmItemId($value)
 * @method string getSubBizCode()
 * @method $this withSubBizCode($value)
 * @method string getItemId()
 * @method $this withItemId($value)
 * @method string getBizId()
 * @method $this withBizId($value)
 * @method string getRuleId()
 * @method $this withRuleId($value)
 */
class DeleteItemLimitRule extends Rpc
{
}

/**
 * @method string getLmOrderId()
 * @method $this withLmOrderId($value)
 * @method string getBizUid()
 * @method $this withBizUid($value)
 * @method string getExtJson()
 * @method $this withExtJson($value)
 * @method string getAccountType()
 * @method $this withAccountType($value)
 * @method string getUseAnonymousTbAccount()
 * @method $this withUseAnonymousTbAccount($value)
 * @method string getThirdPartyUserId()
 * @method $this withThirdPartyUserId($value)
 * @method string getBizId()
 * @method $this withBizId($value)
 * @method string getOutTradeId()
 * @method $this withOutTradeId($value)
 */
class EnableOrder extends Rpc
{
}

/**
 * @method string getItemId()
 * @method $this withItemId($value)
 * @method string getBizId()
 * @method $this withBizId($value)
 * @method string getLmItemId()
 * @method $this withLmItemId($value)
 * @method string getCategoryId()
 * @method $this withCategoryId($value)
 */
class GetCategoryChain extends Rpc
{
}

/**
 * @method string getBizId()
 * @method $this withBizId($value)
 * @method string getCategoryId()
 * @method $this withCategoryId($value)
 */
class GetCategoryList extends Rpc
{
}

/**
 * @method string getCuid()
 * @method $this withCuid($value)
 * @method string getBizUid()
 * @method $this withBizUid($value)
 * @method string getAccountType()
 * @method $this withAccountType($value)
 * @method string getUseAnonymousTbAccount()
 * @method $this withUseAnonymousTbAccount($value)
 * @method string getNick()
 * @method $this withNick($value)
 * @method string getSellerId()
 * @method $this withSellerId($value)
 * @method string getThirdPartyUserId()
 * @method $this withThirdPartyUserId($value)
 * @method string getBizId()
 * @method $this withBizId($value)
 */
class GetCustomServiceUrl extends Rpc
{
}

/**
 * @method string getBizId()
 * @method $this withBizId($value)
 */
class GetGuidePage extends Rpc
{

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getThirdPartyUserId()
 * @method $this withThirdPartyUserId($value)
 * @method string getBizId()
 * @method $this withBizId($value)
 * @method string getUseAnonymousTbAccount()
 * @method $this withUseAnonymousTbAccount($value)
 * @method string getTargetUrl()
 * @method string getFailUrl()
 */
class GetLoginPage extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTargetUrl($value)
    {
        $this->data['TargetUrl'] = $value;
        $this->options['form_params']['TargetUrl'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withFailUrl($value)
    {
        $this->data['FailUrl'] = $value;
        $this->options['form_params']['FailUrl'] = $value;

        return $this;
    }
}

/**
 * @method string getThirdPartyUserId()
 * @method $this withThirdPartyUserId($value)
 * @method string getBizUid()
 * @method $this withBizUid($value)
 * @method string getBizId()
 * @method $this withBizId($value)
 * @method string getUseAnonymousTbAccount()
 * @method $this withUseAnonymousTbAccount($value)
 * @method string getUrl()
 */
class GetSwitchUrl extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withUrl($value)
    {
        $this->data['Url'] = $value;
        $this->options['form_params']['Url'] = $value;

        return $this;
    }
}

/**
 * @method string getUserFlag()
 * @method $this withUserFlag($value)
 * @method string getAppName()
 * @method $this withAppName($value)
 * @method string getQueryJson()
 * @method string getBizId()
 * @method $this withBizId($value)
 */
class GetUserInfo extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withQueryJson($value)
    {
        $this->data['QueryJson'] = $value;
        $this->options['form_params']['QueryJson'] = $value;

        return $this;
    }
}

/**
 * @method string getBizUid()
 * @method $this withBizUid($value)
 * @method string getBizClaimType()
 * @method $this withBizClaimType($value)
 * @method string getAccountType()
 * @method $this withAccountType($value)
 * @method string getUseAnonymousTbAccount()
 * @method $this withUseAnonymousTbAccount($value)
 * @method string getGoodsStatus()
 * @method $this withGoodsStatus($value)
 * @method string getSubLmOrderId()
 * @method $this withSubLmOrderId($value)
 * @method string getThirdPartyUserId()
 * @method $this withThirdPartyUserId($value)
 * @method string getBizId()
 * @method $this withBizId($value)
 */
class InitApplyRefund extends Rpc
{
}

/**
 * @method string getLmItemIds()
 * @method $this withLmItemIds($value)
 * @method string getItemIds()
 * @method $this withItemIds($value)
 * @method string getBizId()
 * @method $this withBizId($value)
 */
class ListItemActivities extends Rpc
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
			if(isset($depth1Value['ItemId'])){
				$this->options['form_params']['ItemList.' . ($depth1 + 1) . '.ItemId'] = $depth1Value['ItemId'];
			}
			if(isset($depth1Value['LmItemId'])){
				$this->options['form_params']['ItemList.' . ($depth1 + 1) . '.LmItemId'] = $depth1Value['LmItemId'];
			}
			foreach ($depth1Value['SkuList'] as $depth2 => $depth2Value) {
				if(isset($depth2Value['StatusAction'])){
					$this->options['form_params']['ItemList.' . ($depth1 + 1) . '.SkuList.' . ($depth2 + 1) . '.StatusAction'] = $depth2Value['StatusAction'];
				}
				if(isset($depth2Value['PriceCent'])){
					$this->options['form_params']['ItemList.' . ($depth1 + 1) . '.SkuList.' . ($depth2 + 1) . '.PriceCent'] = $depth2Value['PriceCent'];
				}
				if(isset($depth2Value['PointsAmount'])){
					$this->options['form_params']['ItemList.' . ($depth1 + 1) . '.SkuList.' . ($depth2 + 1) . '.PointsAmount'] = $depth2Value['PointsAmount'];
				}
				if(isset($depth2Value['Quantity'])){
					$this->options['form_params']['ItemList.' . ($depth1 + 1) . '.SkuList.' . ($depth2 + 1) . '.Quantity'] = $depth2Value['Quantity'];
				}
				if(isset($depth2Value['BenefitId'])){
					$this->options['form_params']['ItemList.' . ($depth1 + 1) . '.SkuList.' . ($depth2 + 1) . '.BenefitId'] = $depth2Value['BenefitId'];
				}
				if(isset($depth2Value['SkuId'])){
					$this->options['form_params']['ItemList.' . ($depth1 + 1) . '.SkuList.' . ($depth2 + 1) . '.SkuId'] = $depth2Value['SkuId'];
				}
				if(isset($depth2Value['SupplierPrice'])){
					$this->options['form_params']['ItemList.' . ($depth1 + 1) . '.SkuList.' . ($depth2 + 1) . '.SupplierPrice'] = $depth2Value['SupplierPrice'];
				}
				if(isset($depth2Value['Points'])){
					$this->options['form_params']['ItemList.' . ($depth1 + 1) . '.SkuList.' . ($depth2 + 1) . '.Points'] = $depth2Value['Points'];
				}
			}
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
			if(isset($depth1Value['ItemId'])){
				$this->options['form_params']['ItemList.' . ($depth1 + 1) . '.ItemId'] = $depth1Value['ItemId'];
			}
			if(isset($depth1Value['LmItemId'])){
				$this->options['form_params']['ItemList.' . ($depth1 + 1) . '.LmItemId'] = $depth1Value['LmItemId'];
			}
			foreach ($depth1Value['SkuList'] as $depth2 => $depth2Value) {
				if(isset($depth2Value['StatusAction'])){
					$this->options['form_params']['ItemList.' . ($depth1 + 1) . '.SkuList.' . ($depth2 + 1) . '.StatusAction'] = $depth2Value['StatusAction'];
				}
				if(isset($depth2Value['PriceCent'])){
					$this->options['form_params']['ItemList.' . ($depth1 + 1) . '.SkuList.' . ($depth2 + 1) . '.PriceCent'] = $depth2Value['PriceCent'];
				}
				if(isset($depth2Value['PointsAmount'])){
					$this->options['form_params']['ItemList.' . ($depth1 + 1) . '.SkuList.' . ($depth2 + 1) . '.PointsAmount'] = $depth2Value['PointsAmount'];
				}
				if(isset($depth2Value['Quantity'])){
					$this->options['form_params']['ItemList.' . ($depth1 + 1) . '.SkuList.' . ($depth2 + 1) . '.Quantity'] = $depth2Value['Quantity'];
				}
				if(isset($depth2Value['BenefitId'])){
					$this->options['form_params']['ItemList.' . ($depth1 + 1) . '.SkuList.' . ($depth2 + 1) . '.BenefitId'] = $depth2Value['BenefitId'];
				}
				if(isset($depth2Value['SkuId'])){
					$this->options['form_params']['ItemList.' . ($depth1 + 1) . '.SkuList.' . ($depth2 + 1) . '.SkuId'] = $depth2Value['SkuId'];
				}
				if(isset($depth2Value['Points'])){
					$this->options['form_params']['ItemList.' . ($depth1 + 1) . '.SkuList.' . ($depth2 + 1) . '.Points'] = $depth2Value['Points'];
				}
			}
		}

		return $this;
    }
}

/**
 * @method string getUpperNum()
 * @method $this withUpperNum($value)
 * @method string getLmActivityId()
 * @method $this withLmActivityId($value)
 * @method string getRuleType()
 * @method $this withRuleType($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getLmItemId()
 * @method $this withLmItemId($value)
 * @method string getBeginTime()
 * @method $this withBeginTime($value)
 * @method string getSubBizCode()
 * @method $this withSubBizCode($value)
 * @method string getItemId()
 * @method $this withItemId($value)
 * @method string getBizId()
 * @method $this withBizId($value)
 * @method string getRuleId()
 * @method $this withRuleId($value)
 */
class ModifyItemLimitRule extends Rpc
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
 * @method string getLmActivityId()
 * @method $this withLmActivityId($value)
 * @method string getBizId()
 * @method $this withBizId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 */
class QueryActivityItems extends Rpc
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
 * @method string getAddressInfo()
 * @method $this withAddressInfo($value)
 * @method string getThirdPartyUserId()
 * @method $this withThirdPartyUserId($value)
 * @method string getBizId()
 * @method $this withBizId($value)
 * @method string getUseAnonymousTbAccount()
 * @method $this withUseAnonymousTbAccount($value)
 */
class QueryAddressDetail extends Rpc
{
}

/**
 * @method string getThirdPartyUserId()
 * @method $this withThirdPartyUserId($value)
 * @method string getBizId()
 * @method $this withBizId($value)
 * @method string getUseAnonymousTbAccount()
 * @method $this withUseAnonymousTbAccount($value)
 */
class QueryAddressList extends Rpc
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
 * @method string getBizId()
 * @method $this withBizId($value)
 * @method string getBatchId()
 * @method $this withBatchId($value)
 */
class QueryBatchRegistAnonymousTbAccountResult extends Rpc
{
}

/**
 * @method string getLmItemIds()
 * @method $this withLmItemIds($value)
 * @method string getItemIds()
 * @method $this withItemIds($value)
 * @method string getBizId()
 * @method $this withBizId($value)
 */
class QueryBestSession4Items extends Rpc
{
}

/**
 * @method string getLmItemIds()
 * @method $this withLmItemIds($value)
 * @method string getItemIds()
 * @method $this withItemIds($value)
 * @method string getUserId()
 * @method $this withUserId($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getBizId()
 * @method $this withBizId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getCategoryId()
 * @method $this withCategoryId($value)
 * @method string getSubBizId()
 * @method $this withSubBizId($value)
 */
class QueryBizItemList extends Rpc
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
 * @method string getItemId()
 * @method $this withItemId($value)
 * @method string getBizId()
 * @method $this withBizId($value)
 * @method string getLmItemId()
 * @method $this withLmItemId($value)
 */
class QueryItemDetail extends Rpc
{
}

/**
 * @method string getDivisionCode()
 * @method $this withDivisionCode($value)
 * @method string getBizUid()
 * @method $this withBizUid($value)
 * @method string getIp()
 * @method $this withIp($value)
 * @method string getUseAnonymousTbAccount()
 * @method $this withUseAnonymousTbAccount($value)
 * @method string getLmItemId()
 * @method $this withLmItemId($value)
 * @method string getItemId()
 * @method $this withItemId($value)
 * @method string getThirdPartyUserId()
 * @method $this withThirdPartyUserId($value)
 * @method string getBizId()
 * @method $this withBizId($value)
 */
class QueryItemDetailInner extends Rpc
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
			if(isset($depth1Value['ItemId'])){
				$this->options['query']['ItemList.' . ($depth1 + 1) . '.ItemId'] = $depth1Value['ItemId'];
			}
			foreach ($depth1Value['SkuIdList'] as $i => $iValue) {
				$this->options['query']['ItemList.' . ($depth1 + 1) . '.SkuIdList.' . ($i + 1)] = $iValue;
			}
			if(isset($depth1Value['LmItemId'])){
				$this->options['query']['ItemList.' . ($depth1 + 1) . '.LmItemId'] = $depth1Value['LmItemId'];
			}
		}

		return $this;
    }
}

/**
 * @method string getLmOrderId()
 * @method $this withLmOrderId($value)
 * @method string getBizUid()
 * @method $this withBizUid($value)
 * @method string getAccountType()
 * @method $this withAccountType($value)
 * @method string getUseAnonymousTbAccount()
 * @method $this withUseAnonymousTbAccount($value)
 * @method string getThirdPartyUserId()
 * @method $this withThirdPartyUserId($value)
 * @method string getBizId()
 * @method $this withBizId($value)
 */
class QueryLogistics extends Rpc
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
 * @method string getScheduleId()
 * @method $this withScheduleId($value)
 */
class QueryMovieSeats extends Rpc
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
 * @method string getBizUid()
 * @method $this withBizUid($value)
 * @method string getAccountType()
 * @method $this withAccountType($value)
 * @method string getUseAnonymousTbAccount()
 * @method $this withUseAnonymousTbAccount($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getThirdPartyUserId()
 * @method $this withThirdPartyUserId($value)
 * @method string getFilterOption()
 * @method $this withFilterOption($value)
 * @method string getBizId()
 * @method $this withBizId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 */
class QueryOrderAndPaymentList extends Rpc
{
}

/**
 * @method string getLmOrderId()
 * @method $this withLmOrderId($value)
 * @method string getBizUid()
 * @method $this withBizUid($value)
 * @method string getAccountType()
 * @method $this withAccountType($value)
 * @method string getUseAnonymousTbAccount()
 * @method $this withUseAnonymousTbAccount($value)
 * @method string getThirdPartyUserId()
 * @method $this withThirdPartyUserId($value)
 * @method string getBizId()
 * @method $this withBizId($value)
 */
class QueryOrderCommissionRate extends Rpc
{
}

/**
 * @method string getThirdPartyUserId()
 * @method $this withThirdPartyUserId($value)
 * @method string getBizUid()
 * @method $this withBizUid($value)
 * @method string getFilterOption()
 * @method $this withFilterOption($value)
 * @method string getBizId()
 * @method $this withBizId($value)
 * @method string getUseAnonymousTbAccount()
 * @method $this withUseAnonymousTbAccount($value)
 */
class QueryOrderDetailInner extends Rpc
{
}

/**
 * @method string getBizUid()
 * @method $this withBizUid($value)
 * @method string getAccountType()
 * @method $this withAccountType($value)
 * @method string getUseAnonymousTbAccount()
 * @method $this withUseAnonymousTbAccount($value)
 * @method string getThirdPartyUserId()
 * @method $this withThirdPartyUserId($value)
 * @method string getPaymentId()
 * @method $this withPaymentId($value)
 * @method string getBizId()
 * @method $this withBizId($value)
 */
class QueryOrderIdByPayId extends Rpc
{
}

/**
 * @method string getLmOrderId()
 * @method $this withLmOrderId($value)
 * @method string getAccountType()
 * @method $this withAccountType($value)
 * @method string getUseAnonymousTbAccount()
 * @method $this withUseAnonymousTbAccount($value)
 * @method string getThirdPartyUserId()
 * @method $this withThirdPartyUserId($value)
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
 * @method string getPaymentId()
 * @method $this withPaymentId($value)
 * @method string getBizId()
 * @method $this withBizId($value)
 */
class QueryOrderItemInfoByPaymentIdForAiZhanYou extends Rpc
{
}

/**
 * @method string getBizUid()
 * @method $this withBizUid($value)
 * @method string getAccountType()
 * @method $this withAccountType($value)
 * @method string getUseAnonymousTbAccount()
 * @method $this withUseAnonymousTbAccount($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getThirdPartyUserId()
 * @method $this withThirdPartyUserId($value)
 * @method string getFilterOption()
 * @method $this withFilterOption($value)
 * @method string getBizId()
 * @method $this withBizId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 */
class QueryOrderList extends Rpc
{
}

/**
 * @method string getLmOrderId()
 * @method $this withLmOrderId($value)
 * @method string getBizUid()
 * @method $this withBizUid($value)
 * @method string getAccountType()
 * @method $this withAccountType($value)
 * @method string getUseAnonymousTbAccount()
 * @method $this withUseAnonymousTbAccount($value)
 * @method string getThirdPartyUserId()
 * @method $this withThirdPartyUserId($value)
 * @method string getBizId()
 * @method $this withBizId($value)
 */
class QueryOrderLogistics extends Rpc
{
}

/**
 * @method string getBizUid()
 * @method $this withBizUid($value)
 * @method string getAccountType()
 * @method $this withAccountType($value)
 * @method string getUseAnonymousTbAccount()
 * @method $this withUseAnonymousTbAccount($value)
 * @method string getSubLmOrderId()
 * @method $this withSubLmOrderId($value)
 * @method string getThirdPartyUserId()
 * @method $this withThirdPartyUserId($value)
 * @method string getBizId()
 * @method $this withBizId($value)
 */
class QueryRefundApplicationDetail extends Rpc
{
}

/**
 * @method string getBizId()
 * @method $this withBizId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 */
class QueryUnfinishedActivities extends Rpc
{
}

/**
 * @method string getBizId()
 * @method $this withBizId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getQueryTime()
 * @method $this withQueryTime($value)
 */
class QueryUnfinishedSessions extends Rpc
{
}

/**
 * @method string getLmItemIds()
 * @method $this withLmItemIds($value)
 * @method string getItemIds()
 * @method $this withItemIds($value)
 * @method string getBizId()
 * @method $this withBizId($value)
 * @method string getQueryTime()
 * @method $this withQueryTime($value)
 */
class QueryUnfinishedSessions4Items extends Rpc
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
 * @method string getReason()
 * @method $this withReason($value)
 * @method string getLmOrderId()
 * @method $this withLmOrderId($value)
 * @method string getUseAnonymousTbAccount()
 * @method $this withUseAnonymousTbAccount($value)
 * @method string getSellerId()
 * @method $this withSellerId($value)
 * @method string getThirdPartyUserId()
 * @method $this withThirdPartyUserId($value)
 * @method string getBizId()
 * @method $this withBizId($value)
 */
class RefundPoint extends Rpc
{
}

/**
 * @method string getSellerNick()
 * @method $this withSellerNick($value)
 * @method string getBizId()
 * @method $this withBizId($value)
 * @method string getTaskId()
 * @method $this withTaskId($value)
 * @method string getTimeStamp()
 * @method $this withTimeStamp($value)
 */
class RefuseMerchantSyncTask extends Rpc
{
}

/**
 * @method string getThirdPartyUserId()
 * @method $this withThirdPartyUserId($value)
 * @method string getBizId()
 * @method $this withBizId($value)
 */
class RegistAnonymousTbAccount extends Rpc
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
 * @method string getAddressInfo()
 * @method string getThirdPartyUserId()
 * @method $this withThirdPartyUserId($value)
 * @method string getBizId()
 * @method $this withBizId($value)
 * @method string getUseAnonymousTbAccount()
 * @method $this withUseAnonymousTbAccount($value)
 */
class RemoveAddress extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAddressInfo($value)
    {
        $this->data['AddressInfo'] = $value;
        $this->options['form_params']['AddressInfo'] = $value;

        return $this;
    }
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
 * @method string getBuyOrderRequestModel()
 * @method $this withBuyOrderRequestModel($value)
 * @method string getBizUid()
 * @method $this withBizUid($value)
 * @method string getAccountType()
 * @method $this withAccountType($value)
 * @method string getUseAnonymousTbAccount()
 * @method $this withUseAnonymousTbAccount($value)
 * @method string getThirdPartyUserId()
 * @method $this withThirdPartyUserId($value)
 * @method string getBizId()
 * @method $this withBizId($value)
 */
class RenderH5Order extends Rpc
{
}

/**
 * @method string getBizUid()
 * @method $this withBizUid($value)
 * @method string getExtJson()
 * @method $this withExtJson($value)
 * @method string getAccountType()
 * @method $this withAccountType($value)
 * @method string getUseAnonymousTbAccount()
 * @method $this withUseAnonymousTbAccount($value)
 * @method string getLmItemId()
 * @method $this withLmItemId($value)
 * @method array getItemList()
 * @method string getThirdPartyUserId()
 * @method $this withThirdPartyUserId($value)
 * @method string getBizId()
 * @method $this withBizId($value)
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
			if(isset($depth1Value['ItemId'])){
				$this->options['query']['ItemList.' . ($depth1 + 1) . '.ItemId'] = $depth1Value['ItemId'];
			}
			if(isset($depth1Value['Quantity'])){
				$this->options['query']['ItemList.' . ($depth1 + 1) . '.Quantity'] = $depth1Value['Quantity'];
			}
			if(isset($depth1Value['LmItemId'])){
				$this->options['query']['ItemList.' . ($depth1 + 1) . '.LmItemId'] = $depth1Value['LmItemId'];
			}
			if(isset($depth1Value['SkuId'])){
				$this->options['query']['ItemList.' . ($depth1 + 1) . '.SkuId'] = $depth1Value['SkuId'];
			}
		}

		return $this;
    }
}

/**
 * @method string getLmOrderId()
 * @method $this withLmOrderId($value)
 * @method string getThirdPartyUserId()
 * @method $this withThirdPartyUserId($value)
 * @method string getBizUid()
 * @method $this withBizUid($value)
 * @method string getBizId()
 * @method $this withBizId($value)
 * @method string getUseAnonymousTbAccount()
 * @method $this withUseAnonymousTbAccount($value)
 */
class RepayForPayUrl extends Rpc
{
}

/**
 * @method string getLmOrderId()
 * @method $this withLmOrderId($value)
 * @method string getBizUid()
 * @method $this withBizUid($value)
 * @method string getAccountType()
 * @method $this withAccountType($value)
 * @method string getUseAnonymousTbAccount()
 * @method $this withUseAnonymousTbAccount($value)
 * @method string getThirdPartyUserId()
 * @method $this withThirdPartyUserId($value)
 * @method string getBizId()
 * @method $this withBizId($value)
 */
class RepayOrder extends Rpc
{
}

/**
 * @method string getSeatIds()
 * @method $this withSeatIds($value)
 * @method string getBizUid()
 * @method $this withBizUid($value)
 * @method string getExtJson()
 * @method $this withExtJson($value)
 * @method string getMobile()
 * @method $this withMobile($value)
 * @method string getBizId()
 * @method $this withBizId($value)
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
 * @method string getAccountType()
 * @method $this withAccountType($value)
 * @method string getUseAnonymousTbAccount()
 * @method $this withUseAnonymousTbAccount($value)
 * @method string getCpCode()
 * @method $this withCpCode($value)
 * @method string getSubLmOrderId()
 * @method $this withSubLmOrderId($value)
 * @method string getThirdPartyUserId()
 * @method $this withThirdPartyUserId($value)
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
 * @method string getSellerNick()
 * @method $this withSellerNick($value)
 * @method string getBizId()
 * @method $this withBizId($value)
 * @method string getItemList()
 * @method string getTaskId()
 * @method $this withTaskId($value)
 * @method string getTimeStamp()
 * @method $this withTimeStamp($value)
 */
class SyncMerchantInfo extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withItemList($value)
    {
        $this->data['ItemList'] = $value;
        $this->options['form_params']['ItemList'] = $value;

        return $this;
    }
}

/**
 * @method string getAddressInfo()
 * @method string getThirdPartyUserId()
 * @method $this withThirdPartyUserId($value)
 * @method string getBizId()
 * @method $this withBizId($value)
 * @method string getUseAnonymousTbAccount()
 * @method $this withUseAnonymousTbAccount($value)
 */
class UpdateAddress extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAddressInfo($value)
    {
        $this->data['AddressInfo'] = $value;
        $this->options['form_params']['AddressInfo'] = $value;

        return $this;
    }
}

/**
 * @method string getBizUid()
 * @method $this withBizUid($value)
 * @method string getExtJson()
 * @method $this withExtJson($value)
 * @method string getMobileNo()
 * @method $this withMobileNo($value)
 * @method string getBizId()
 * @method $this withBizId($value)
 * @method string getTbUserNick()
 * @method $this withTbUserNick($value)
 */
class ValidateTaobaoAccount extends Rpc
{
}
