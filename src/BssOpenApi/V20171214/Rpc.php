<?php

namespace AlibabaCloud\BssOpenApi\V20171214;

use AlibabaCloud\Rpc;

class V20171214Rpc extends Rpc
{
    /** @var string */
    public $product = 'BssOpenApi';

    /** @var string */
    public $version = '2017-12-14';

    /** @var string */
    public $method = 'POST';
}

/**
 * @method string getOrderId()
 * @method $this withOrderId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class CancelOrder extends V20171214Rpc
{
}

/**
 * @method string getDataType()
 * @method $this withDataType($value)
 * @method string getMarker()
 * @method $this withMarker($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getTable()
 * @method $this withTable($value)
 */
class QueryUserOmsData extends V20171214Rpc
{
    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getInvoicingType()
 * @method $this withInvoicingType($value)
 * @method string getApplyUserNick()
 * @method $this withApplyUserNick($value)
 * @method string getInvoiceByAmount()
 * @method $this withInvoiceByAmount($value)
 * @method string getCustomerId()
 * @method $this withCustomerId($value)
 * @method array getSelectedIds()
 * @method string getProcessWay()
 * @method $this withProcessWay($value)
 * @method string getCallerBid()
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getInvoiceAmount()
 * @method $this withInvoiceAmount($value)
 * @method string getAddressId()
 * @method $this withAddressId($value)
 * @method string getCallerUid()
 */
class ApplyInvoice extends V20171214Rpc
{

    /**
     * @param array $value
     *
     * @return $this
     */
    public function withSelectedIds(array $value)
    {
        $this->data['SelectedIds'] = $value;
        foreach ($value as $i => $iValue) {
            $this->options['query']['SelectedIds.' . ($i + 1)] = $iValue;
        }

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCallerBid($value)
    {
        $this->data['CallerBid'] = $value;
        $this->options['query']['callerBid'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCallerUid($value)
    {
        $this->data['CallerUid'] = $value;
        $this->options['query']['callerUid'] = $value;

        return $this;
    }
}

/**
 * @method string getEndSearchTime()
 * @method $this withEndSearchTime($value)
 * @method string getOutBizId()
 * @method $this withOutBizId($value)
 * @method string getSortType()
 * @method $this withSortType($value)
 * @method array getBizTypeList()
 * @method string getCallerBid()
 * @method string getType()
 * @method $this withType($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getPageNum()
 * @method $this withPageNum($value)
 * @method string getStartSearchTime()
 * @method $this withStartSearchTime($value)
 * @method string getEndBizTime()
 * @method $this withEndBizTime($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getEndAmount()
 * @method $this withEndAmount($value)
 * @method string getBillCycle()
 * @method $this withBillCycle($value)
 * @method string getStartAmount()
 * @method $this withStartAmount($value)
 * @method string getStartBizTime()
 * @method $this withStartBizTime($value)
 * @method string getCallerUid()
 */
class QueryEvaluateList extends V20171214Rpc
{

    /**
     * @param array $value
     *
     * @return $this
     */
    public function withBizTypeList(array $value)
    {
        $this->data['BizTypeList'] = $value;
        foreach ($value as $i => $iValue) {
            $this->options['query']['BizTypeList.' . ($i + 1)] = $iValue;
        }

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCallerBid($value)
    {
        $this->data['CallerBid'] = $value;
        $this->options['query']['callerBid'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCallerUid($value)
    {
        $this->data['CallerUid'] = $value;
        $this->options['query']['callerUid'] = $value;

        return $this;
    }
}

/**
 * @method string getCallerBid()
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getCallerUid()
 */
class QueryInvoicingCustomerList extends V20171214Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCallerBid($value)
    {
        $this->data['CallerBid'] = $value;
        $this->options['query']['callerBid'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCallerUid($value)
    {
        $this->data['CallerUid'] = $value;
        $this->options['query']['callerUid'] = $value;

        return $this;
    }
}

/**
 * @method string getCallerBid()
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getCallerUid()
 */
class QueryCustomerAddressList extends V20171214Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCallerBid($value)
    {
        $this->data['CallerBid'] = $value;
        $this->options['query']['callerBid'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCallerUid($value)
    {
        $this->data['CallerUid'] = $value;
        $this->options['query']['callerUid'] = $value;

        return $this;
    }
}

/**
 * @method string getIsBillingItem()
 * @method $this withIsBillingItem($value)
 * @method string getProductCode()
 * @method $this withProductCode($value)
 * @method string getIsHideZeroCharge()
 * @method $this withIsHideZeroCharge($value)
 * @method string getSubscriptionType()
 * @method $this withSubscriptionType($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getBillingCycle()
 * @method $this withBillingCycle($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getPageNum()
 * @method $this withPageNum($value)
 * @method string getProductType()
 * @method $this withProductType($value)
 */
class QueryInstanceBill extends V20171214Rpc
{
}

/**
 * @method string getProductCode()
 * @method $this withProductCode($value)
 * @method string getIsHideZeroCharge()
 * @method $this withIsHideZeroCharge($value)
 * @method string getIsDisplayLocalCurrency()
 * @method $this withIsDisplayLocalCurrency($value)
 * @method string getSubscriptionType()
 * @method $this withSubscriptionType($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getBillingCycle()
 * @method $this withBillingCycle($value)
 * @method string getType()
 * @method $this withType($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getPageNum()
 * @method $this withPageNum($value)
 * @method string getProductType()
 * @method $this withProductType($value)
 */
class QueryBill extends V20171214Rpc
{
}

/**
 * @method string getProductCode()
 * @method $this withProductCode($value)
 * @method string getSubscriptionType()
 * @method $this withSubscriptionType($value)
 * @method string getBillingCycle()
 * @method $this withBillingCycle($value)
 * @method string getProductType()
 * @method $this withProductType($value)
 */
class QueryBillOverview extends V20171214Rpc
{
}

/**
 * @method string getProductCode()
 * @method $this withProductCode($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class EnableBillGeneration extends V20171214Rpc
{
    /** @var string */
    public $method = 'PUT';
}

/**
 * @method string getExpiryTimeEnd()
 * @method $this withExpiryTimeEnd($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getExpiryTimeStart()
 * @method $this withExpiryTimeStart($value)
 * @method string getPageNum()
 * @method $this withPageNum($value)
 * @method string getEffectiveOrNot()
 * @method $this withEffectiveOrNot($value)
 */
class QueryRedeem extends V20171214Rpc
{
    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getPeriod()
 * @method $this withPeriod($value)
 * @method string getProductCode()
 * @method $this withProductCode($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getSubscriptionType()
 * @method $this withSubscriptionType($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getProductType()
 * @method $this withProductType($value)
 */
class ConvertChargeType extends V20171214Rpc
{
}

/**
 * @method string getProductCode()
 * @method $this withProductCode($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getSubscriptionType()
 * @method $this withSubscriptionType($value)
 * @method string getModifyType()
 * @method $this withModifyType($value)
 * @method array getParameter()
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getProductType()
 * @method $this withProductType($value)
 */
class ModifyInstance extends V20171214Rpc
{

    /**
     * @param array $value
     *
     * @return $this
     */
    public function withParameter(array $value)
    {
        $this->data['Parameter'] = $value;
        foreach ($value as $i => $iValue) {
            $this->options['query']['Parameter.' . ($i + 1) . '.Code'] = $value[$i]['Code'];
            $this->options['query']['Parameter.' . ($i + 1) . '.Value'] = $value[$i]['Value'];
        }

        return $this;
    }
}

/**
 * @method string getProductCode()
 * @method $this withProductCode($value)
 * @method string getPeriod()
 * @method $this withPeriod($value)
 * @method string getSubscriptionType()
 * @method $this withSubscriptionType($value)
 * @method string getRenewPeriod()
 * @method $this withRenewPeriod($value)
 * @method array getParameter()
 * @method string getRenewalStatus()
 * @method $this withRenewalStatus($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getProductType()
 * @method $this withProductType($value)
 */
class CreateInstance extends V20171214Rpc
{

    /**
     * @param array $value
     *
     * @return $this
     */
    public function withParameter(array $value)
    {
        $this->data['Parameter'] = $value;
        foreach ($value as $i => $iValue) {
            $this->options['query']['Parameter.' . ($i + 1) . '.Code'] = $value[$i]['Code'];
            $this->options['query']['Parameter.' . ($i + 1) . '.Value'] = $value[$i]['Value'];
        }

        return $this;
    }
}

/**
 * @method string getProductCode()
 * @method $this withProductCode($value)
 * @method string getSubscriptionType()
 * @method $this withSubscriptionType($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getBillingCycle()
 * @method $this withBillingCycle($value)
 * @method string getPageNum()
 * @method $this withPageNum($value)
 * @method string getProductType()
 * @method $this withProductType($value)
 */
class QueryInstanceGaapCost extends V20171214Rpc
{
}

/**
 * @method string getProductCode()
 * @method $this withProductCode($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getRenewPeriod()
 * @method $this withRenewPeriod($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getProductType()
 * @method $this withProductType($value)
 */
class RenewInstance extends V20171214Rpc
{
}

/**
 * @method string getQueryTotalCount()
 * @method $this withQueryTotalCount($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getPageNum()
 * @method $this withPageNum($value)
 */
class QueryProductList extends V20171214Rpc
{
}

/**
 * @method string getProductCode()
 * @method $this withProductCode($value)
 * @method string getSubscriptionType()
 * @method $this withSubscriptionType($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getProductType()
 * @method $this withProductType($value)
 */
class DescribePricingModule extends V20171214Rpc
{
}

/**
 * @method string getProductCode()
 * @method $this withProductCode($value)
 * @method string getSubscriptionType()
 * @method $this withSubscriptionType($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getPaymentStatus()
 * @method $this withPaymentStatus($value)
 * @method string getCreateTimeStart()
 * @method $this withCreateTimeStart($value)
 * @method string getPageNum()
 * @method $this withPageNum($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getCreateTimeEnd()
 * @method $this withCreateTimeEnd($value)
 * @method string getProductType()
 * @method $this withProductType($value)
 * @method string getOrderType()
 * @method $this withOrderType($value)
 */
class QueryOrders extends V20171214Rpc
{
}

/**
 * @method string getOrderId()
 * @method $this withOrderId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class GetOrderDetail extends V20171214Rpc
{
}

class UnsubscribeExportToOSS extends V20171214Rpc
{
}

/**
 * @method string getBucketOwnerId()
 * @method $this withBucketOwnerId($value)
 * @method array getSubscribeType()
 * @method string getSubscribeBucket()
 * @method $this withSubscribeBucket($value)
 */
class SubscribeExportToOSS extends V20171214Rpc
{

    /**
     * @param array $value
     *
     * @return $this
     */
    public function withSubscribeType(array $value)
    {
        $this->data['SubscribeType'] = $value;
        foreach ($value as $i => $iValue) {
            $this->options['query']['SubscribeType.' . ($i + 1)] = $iValue;
        }

        return $this;
    }
}

/**
 * @method string getExpiryTimeEnd()
 * @method $this withExpiryTimeEnd($value)
 * @method string getExpiryTimeStart()
 * @method $this withExpiryTimeStart($value)
 * @method string getEffectiveOrNot()
 * @method $this withEffectiveOrNot($value)
 */
class QueryCashCoupons extends V20171214Rpc
{
}

/**
 * @method string getExpiryTimeEnd()
 * @method $this withExpiryTimeEnd($value)
 * @method string getExpiryTimeStart()
 * @method $this withExpiryTimeStart($value)
 * @method string getEffectiveOrNot()
 * @method $this withEffectiveOrNot($value)
 */
class QueryPrepaidCards extends V20171214Rpc
{
}

class QueryAccountBalance extends V20171214Rpc
{
}

/**
 * @method string getProductCode()
 * @method $this withProductCode($value)
 * @method string getInstanceIDs()
 * @method $this withInstanceIDs($value)
 * @method string getSubscriptionType()
 * @method $this withSubscriptionType($value)
 * @method string getRenewalStatus()
 * @method $this withRenewalStatus($value)
 * @method string getRenewalPeriodUnit()
 * @method $this withRenewalPeriodUnit($value)
 * @method string getRenewalPeriod()
 * @method $this withRenewalPeriod($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getProductType()
 * @method $this withProductType($value)
 */
class SetRenewal extends V20171214Rpc
{
}

/**
 * @method string getProductCode()
 * @method $this withProductCode($value)
 * @method string getSubscriptionType()
 * @method $this withSubscriptionType($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getPageNum()
 * @method $this withPageNum($value)
 * @method string getEndTimeStart()
 * @method $this withEndTimeStart($value)
 * @method string getProductType()
 * @method $this withProductType($value)
 * @method string getCreateTimeEnd()
 * @method $this withCreateTimeEnd($value)
 * @method string getInstanceIDs()
 * @method $this withInstanceIDs($value)
 * @method string getEndTimeEnd()
 * @method $this withEndTimeEnd($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getCreateTimeStart()
 * @method $this withCreateTimeStart($value)
 * @method string getRegion()
 * @method $this withRegion($value)
 * @method string getRenewStatus()
 * @method $this withRenewStatus($value)
 */
class QueryAvailableInstances extends V20171214Rpc
{
}

/**
 * @method string getProductCode()
 * @method $this withProductCode($value)
 */
class DescribeResourcePackageProduct extends V20171214Rpc
{
}

/**
 * @method string getExpiryTimeEnd()
 * @method $this withExpiryTimeEnd($value)
 * @method string getProductCode()
 * @method $this withProductCode($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getExpiryTimeStart()
 * @method $this withExpiryTimeStart($value)
 * @method string getPageNum()
 * @method $this withPageNum($value)
 */
class QueryResourcePackageInstances extends V20171214Rpc
{
}

/**
 * @method string getDuration()
 * @method $this withDuration($value)
 * @method string getProductCode()
 * @method $this withProductCode($value)
 * @method string getSpecification()
 * @method $this withSpecification($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getPackageType()
 * @method $this withPackageType($value)
 * @method string getEffectiveDate()
 * @method $this withEffectiveDate($value)
 * @method string getPricingCycle()
 * @method $this withPricingCycle($value)
 */
class GetResourcePackagePrice extends V20171214Rpc
{
}

/**
 * @method string getDuration()
 * @method $this withDuration($value)
 * @method string getProductCode()
 * @method $this withProductCode($value)
 * @method string getSpecification()
 * @method $this withSpecification($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getPackageType()
 * @method $this withPackageType($value)
 * @method string getEffectiveDate()
 * @method $this withEffectiveDate($value)
 * @method string getPricingCycle()
 * @method $this withPricingCycle($value)
 */
class CreateResourcePackage extends V20171214Rpc
{
}

/**
 * @method string getProductCode()
 * @method $this withProductCode($value)
 * @method string getIsHideZeroCharge()
 * @method $this withIsHideZeroCharge($value)
 * @method string getSubscriptionType()
 * @method $this withSubscriptionType($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getBillingCycle()
 * @method $this withBillingCycle($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getPageNum()
 * @method $this withPageNum($value)
 * @method string getType()
 * @method $this withType($value)
 * @method string getProductType()
 * @method $this withProductType($value)
 */
class QuerySettlementBill extends V20171214Rpc
{
}

class QueryUserValueCard extends V20171214Rpc
{
}

class QueryUserCoupon extends V20171214Rpc
{
}

class QueryUserAvailableCreditAmount extends V20171214Rpc
{
}

/**
 * @method string getServicePeriodQuantity()
 * @method $this withServicePeriodQuantity($value)
 * @method string getProductCode()
 * @method $this withProductCode($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getQuantity()
 * @method $this withQuantity($value)
 * @method string getServicePeriodUnit()
 * @method $this withServicePeriodUnit($value)
 * @method string getSubscriptionType()
 * @method $this withSubscriptionType($value)
 * @method array getModuleList()
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getRegion()
 * @method $this withRegion($value)
 * @method string getOrderType()
 * @method $this withOrderType($value)
 * @method string getProductType()
 * @method $this withProductType($value)
 */
class GetSubscriptionPrice extends V20171214Rpc
{

    /**
     * @param array $value
     *
     * @return $this
     */
    public function withModuleList(array $value)
    {
        $this->data['ModuleList'] = $value;
        foreach ($value as $i => $iValue) {
            $this->options['query']['ModuleList.' . ($i + 1) . '.ModuleCode'] = $value[$i]['ModuleCode'];
            $this->options['query']['ModuleList.' . ($i + 1) . '.ModuleStatus'] = $value[$i]['ModuleStatus'];
            $this->options['query']['ModuleList.' . ($i + 1) . '.Tag'] = $value[$i]['Tag'];
            $this->options['query']['ModuleList.' . ($i + 1) . '.Config'] = $value[$i]['Config'];
        }

        return $this;
    }
}

/**
 * @method string getProductCode()
 * @method $this withProductCode($value)
 * @method string getSubscriptionType()
 * @method $this withSubscriptionType($value)
 * @method array getModuleList()
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getRegion()
 * @method $this withRegion($value)
 * @method string getProductType()
 * @method $this withProductType($value)
 */
class GetPayAsYouGoPrice extends V20171214Rpc
{

    /**
     * @param array $value
     *
     * @return $this
     */
    public function withModuleList(array $value)
    {
        $this->data['ModuleList'] = $value;
        foreach ($value as $i => $iValue) {
            $this->options['query']['ModuleList.' . ($i + 1) . '.ModuleCode'] = $value[$i]['ModuleCode'];
            $this->options['query']['ModuleList.' . ($i + 1) . '.PriceType'] = $value[$i]['PriceType'];
            $this->options['query']['ModuleList.' . ($i + 1) . '.Config'] = $value[$i]['Config'];
        }

        return $this;
    }
}

/**
 * @method string getProductCode()
 * @method $this withProductCode($value)
 * @method string getInstanceIDs()
 * @method $this withInstanceIDs($value)
 * @method string getSubscriptionType()
 * @method $this withSubscriptionType($value)
 * @method string getRenewalStatus()
 * @method $this withRenewalStatus($value)
 * @method string getRenewalPeriodUnit()
 * @method $this withRenewalPeriodUnit($value)
 * @method string getRenewalPeriod()
 * @method $this withRenewalPeriod($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getProductType()
 * @method $this withProductType($value)
 */
class SetRenewalApi extends V20171214Rpc
{
}

/**
 * @method string getProductCode()
 * @method $this withProductCode($value)
 * @method string getSubscriptionType()
 * @method $this withSubscriptionType($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getBillingCycle()
 * @method $this withBillingCycle($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getPageNum()
 * @method $this withPageNum($value)
 * @method string getProductType()
 * @method $this withProductType($value)
 */
class QueryMonthlyInstanceConsumption extends V20171214Rpc
{
}

/**
 * @method string getBillingCycle()
 * @method $this withBillingCycle($value)
 */
class QueryMonthlyBill extends V20171214Rpc
{
}

/**
 * @method string getProductCode()
 * @method $this withProductCode($value)
 * @method string getInstanceIDs()
 * @method $this withInstanceIDs($value)
 * @method string getSubscriptionType()
 * @method $this withSubscriptionType($value)
 * @method string getRenewalPeriodUnit()
 * @method $this withRenewalPeriodUnit($value)
 * @method string getRenewalPeriod()
 * @method $this withRenewalPeriod($value)
 * @method string getIsAutoRenewal()
 * @method $this withIsAutoRenewal($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getProductType()
 * @method $this withProductType($value)
 */
class SetAutoRenewalApi extends V20171214Rpc
{
}

/**
 * @method string getProductCode()
 * @method $this withProductCode($value)
 * @method string getSubscriptionType()
 * @method $this withSubscriptionType($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getPageNum()
 * @method $this withPageNum($value)
 * @method string getEndTimeStart()
 * @method $this withEndTimeStart($value)
 * @method string getProductType()
 * @method $this withProductType($value)
 * @method string getCreateTimeEnd()
 * @method $this withCreateTimeEnd($value)
 * @method string getInstanceIDs()
 * @method $this withInstanceIDs($value)
 * @method string getEndTimeEnd()
 * @method $this withEndTimeEnd($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getCreateTimeStart()
 * @method $this withCreateTimeStart($value)
 * @method string getRegion()
 * @method $this withRegion($value)
 * @method string getRenewStatus()
 * @method $this withRenewStatus($value)
 */
class QueryAvailableInstancesApi extends V20171214Rpc
{
}

/**
 * @method string getProductCode()
 * @method $this withProductCode($value)
 * @method string getInstanceIDs()
 * @method $this withInstanceIDs($value)
 * @method string getSubscriptionType()
 * @method $this withSubscriptionType($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getProductType()
 * @method $this withProductType($value)
 */
class SetNotRenewalApi extends V20171214Rpc
{
}
