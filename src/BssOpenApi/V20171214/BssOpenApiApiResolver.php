<?php

namespace AlibabaCloud\BssOpenApi\V20171214;

use AlibabaCloud\Client\Resolver\ApiResolver;

/**
 * @method AllocateCostUnitResource allocateCostUnitResource(array $options = [])
 * @method ApplyInvoice applyInvoice(array $options = [])
 * @method CancelOrder cancelOrder(array $options = [])
 * @method ChangeResellerConsumeAmount changeResellerConsumeAmount(array $options = [])
 * @method ConvertChargeType convertChargeType(array $options = [])
 * @method CreateAgAccount createAgAccount(array $options = [])
 * @method CreateCostUnit createCostUnit(array $options = [])
 * @method CreateInstance createInstance(array $options = [])
 * @method CreateResellerUserQuota createResellerUserQuota(array $options = [])
 * @method CreateResourcePackage createResourcePackage(array $options = [])
 * @method DeleteCostUnit deleteCostUnit(array $options = [])
 * @method DescribePricingModule describePricingModule(array $options = [])
 * @method DescribeResourcePackageProduct describeResourcePackageProduct(array $options = [])
 * @method EnableBillGeneration enableBillGeneration(array $options = [])
 * @method GetCustomerAccountInfo getCustomerAccountInfo(array $options = [])
 * @method GetCustomerList getCustomerList(array $options = [])
 * @method GetOrderDetail getOrderDetail(array $options = [])
 * @method GetPayAsYouGoPrice getPayAsYouGoPrice(array $options = [])
 * @method GetResourcePackagePrice getResourcePackagePrice(array $options = [])
 * @method GetSubscriptionPrice getSubscriptionPrice(array $options = [])
 * @method ModifyCostUnit modifyCostUnit(array $options = [])
 * @method ModifyInstance modifyInstance(array $options = [])
 * @method QueryAccountBalance queryAccountBalance(array $options = [])
 * @method QueryAccountBill queryAccountBill(array $options = [])
 * @method QueryAccountTransactions queryAccountTransactions(array $options = [])
 * @method QueryAvailableInstances queryAvailableInstances(array $options = [])
 * @method QueryBill queryBill(array $options = [])
 * @method QueryBillOverview queryBillOverview(array $options = [])
 * @method QueryBillToOSSSubscription queryBillToOSSSubscription(array $options = [])
 * @method QueryCashCoupons queryCashCoupons(array $options = [])
 * @method QueryCostUnit queryCostUnit(array $options = [])
 * @method QueryCostUnitResource queryCostUnitResource(array $options = [])
 * @method QueryCustomerAddressList queryCustomerAddressList(array $options = [])
 * @method QueryEvaluateList queryEvaluateList(array $options = [])
 * @method QueryInstanceBill queryInstanceBill(array $options = [])
 * @method QueryInstanceGaapCost queryInstanceGaapCost(array $options = [])
 * @method QueryInvoicingCustomerList queryInvoicingCustomerList(array $options = [])
 * @method QueryMonthlyBill queryMonthlyBill(array $options = [])
 * @method QueryMonthlyInstanceConsumption queryMonthlyInstanceConsumption(array $options = [])
 * @method QueryOrders queryOrders(array $options = [])
 * @method QueryPrepaidCards queryPrepaidCards(array $options = [])
 * @method QueryProductList queryProductList(array $options = [])
 * @method QueryRedeem queryRedeem(array $options = [])
 * @method QueryResellerAvailableQuota queryResellerAvailableQuota(array $options = [])
 * @method QueryResourcePackageInstances queryResourcePackageInstances(array $options = [])
 * @method QueryRIUtilizationDetail queryRIUtilizationDetail(array $options = [])
 * @method QuerySettleBill querySettleBill(array $options = [])
 * @method QuerySettlementBill querySettlementBill(array $options = [])
 * @method QuerySplitItemBill querySplitItemBill(array $options = [])
 * @method QueryUserOmsData queryUserOmsData(array $options = [])
 * @method RenewInstance renewInstance(array $options = [])
 * @method RenewResourcePackage renewResourcePackage(array $options = [])
 * @method SetRenewal setRenewal(array $options = [])
 * @method SetResellerUserAlarmThreshold setResellerUserAlarmThreshold(array $options = [])
 * @method SetResellerUserQuota setResellerUserQuota(array $options = [])
 * @method SetResellerUserStatus setResellerUserStatus(array $options = [])
 * @method SubscribeBillToOSS subscribeBillToOSS(array $options = [])
 * @method UnsubscribeBillToOSS unsubscribeBillToOSS(array $options = [])
 * @method UpgradeResourcePackage upgradeResourcePackage(array $options = [])
 */
class BssOpenApiApiResolver extends ApiResolver
{
}

class Rpc extends \AlibabaCloud\Client\Resolver\Rpc
{
    /** @var string */
    public $product = 'BssOpenApi';

    /** @var string */
    public $version = '2017-12-14';

    /** @var string */
    public $method = 'POST';
}

/**
 * @method array getResourceInstanceList()
 * @method string getFromUnitId()
 * @method $this withFromUnitId($value)
 * @method string getToUnitId()
 * @method $this withToUnitId($value)
 * @method string getFromUnitUserId()
 * @method $this withFromUnitUserId($value)
 * @method string getToUnitUserId()
 * @method $this withToUnitUserId($value)
 */
class AllocateCostUnitResource extends Rpc
{

    /**
     * @param array $resourceInstanceList
     *
     * @return $this
     */
	public function withResourceInstanceList(array $resourceInstanceList)
	{
	    $this->data['ResourceInstanceList'] = $resourceInstanceList;
		foreach ($resourceInstanceList as $depth1 => $depth1Value) {
			if(isset($depth1Value['ResourceId'])){
				$this->options['query']['ResourceInstanceList.' . ($depth1 + 1) . '.ResourceId'] = $depth1Value['ResourceId'];
			}
			if(isset($depth1Value['CommodityCode'])){
				$this->options['query']['ResourceInstanceList.' . ($depth1 + 1) . '.CommodityCode'] = $depth1Value['CommodityCode'];
			}
			if(isset($depth1Value['ResourceUserId'])){
				$this->options['query']['ResourceInstanceList.' . ($depth1 + 1) . '.ResourceUserId'] = $depth1Value['ResourceUserId'];
			}
			if(isset($depth1Value['ApportionCode'])){
				$this->options['query']['ResourceInstanceList.' . ($depth1 + 1) . '.ApportionCode'] = $depth1Value['ApportionCode'];
			}
		}

		return $this;
    }
}

/**
 * @method string getInvoicingType()
 * @method $this withInvoicingType($value)
 * @method string getProcessWay()
 * @method $this withProcessWay($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getInvoiceAmount()
 * @method $this withInvoiceAmount($value)
 * @method string getAddressId()
 * @method $this withAddressId($value)
 * @method string getApplyUserNick()
 * @method $this withApplyUserNick($value)
 * @method string getInvoiceByAmount()
 * @method $this withInvoiceByAmount($value)
 * @method string getCustomerId()
 * @method $this withCustomerId($value)
 * @method array getSelectedIds()
 */
class ApplyInvoice extends Rpc
{

    /**
     * @param array $selectedIds
     *
     * @return $this
     */
	public function withSelectedIds(array $selectedIds)
	{
	    $this->data['SelectedIds'] = $selectedIds;
		foreach ($selectedIds as $i => $iValue) {
			$this->options['query']['SelectedIds.' . ($i + 1)] = $iValue;
		}

		return $this;
    }
}

/**
 * @method string getOrderId()
 * @method $this withOrderId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class CancelOrder extends Rpc
{
}

/**
 * @method string getAmount()
 * @method $this withAmount($value)
 * @method string getOutBizId()
 * @method $this withOutBizId($value)
 * @method string getSource()
 * @method $this withSource($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getBusinessType()
 * @method $this withBusinessType($value)
 * @method string getAdjustType()
 * @method $this withAdjustType($value)
 * @method string getExtendMap()
 * @method $this withExtendMap($value)
 * @method string getCurrency()
 * @method $this withCurrency($value)
 */
class ChangeResellerConsumeAmount extends Rpc
{
}

/**
 * @method string getPeriod()
 * @method $this withPeriod($value)
 * @method string getProductCode()
 * @method $this withProductCode($value)
 * @method string getSubscriptionType()
 * @method $this withSubscriptionType($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getProductType()
 * @method $this withProductType($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class ConvertChargeType extends Rpc
{
}

/**
 * @method string getFirstName()
 * @method $this withFirstName($value)
 * @method string getCityName()
 * @method $this withCityName($value)
 * @method string getPostcode()
 * @method $this withPostcode($value)
 * @method string getEnterpriseName()
 * @method $this withEnterpriseName($value)
 * @method string getNationCode()
 * @method $this withNationCode($value)
 * @method string getLastName()
 * @method $this withLastName($value)
 * @method string getLoginEmail()
 * @method $this withLoginEmail($value)
 * @method string getProvinceName()
 * @method $this withProvinceName($value)
 * @method string getAccountAttr()
 * @method $this withAccountAttr($value)
 */
class CreateAgAccount extends Rpc
{

    /** @var string */
    public $scheme = 'https';
}

/**
 * @method array getUnitEntityList()
 */
class CreateCostUnit extends Rpc
{

    /**
     * @param array $unitEntityList
     *
     * @return $this
     */
	public function withUnitEntityList(array $unitEntityList)
	{
	    $this->data['UnitEntityList'] = $unitEntityList;
		foreach ($unitEntityList as $depth1 => $depth1Value) {
			if(isset($depth1Value['UnitName'])){
				$this->options['query']['UnitEntityList.' . ($depth1 + 1) . '.UnitName'] = $depth1Value['UnitName'];
			}
			if(isset($depth1Value['ParentUnitId'])){
				$this->options['query']['UnitEntityList.' . ($depth1 + 1) . '.ParentUnitId'] = $depth1Value['ParentUnitId'];
			}
			if(isset($depth1Value['OwnerUid'])){
				$this->options['query']['UnitEntityList.' . ($depth1 + 1) . '.OwnerUid'] = $depth1Value['OwnerUid'];
			}
		}

		return $this;
    }
}

/**
 * @method string getProductCode()
 * @method $this withProductCode($value)
 * @method string getPeriod()
 * @method $this withPeriod($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getSubscriptionType()
 * @method $this withSubscriptionType($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getProductType()
 * @method $this withProductType($value)
 * @method string getRenewPeriod()
 * @method $this withRenewPeriod($value)
 * @method array getParameter()
 * @method string getRenewalStatus()
 * @method $this withRenewalStatus($value)
 */
class CreateInstance extends Rpc
{

    /**
     * @param array $parameter
     *
     * @return $this
     */
	public function withParameter(array $parameter)
	{
	    $this->data['Parameter'] = $parameter;
		foreach ($parameter as $depth1 => $depth1Value) {
			if(isset($depth1Value['Code'])){
				$this->options['query']['Parameter.' . ($depth1 + 1) . '.Code'] = $depth1Value['Code'];
			}
			if(isset($depth1Value['Value'])){
				$this->options['query']['Parameter.' . ($depth1 + 1) . '.Value'] = $depth1Value['Value'];
			}
		}

		return $this;
    }
}

/**
 * @method string getAmount()
 * @method $this withAmount($value)
 * @method string getOutBizId()
 * @method $this withOutBizId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getCurrency()
 * @method $this withCurrency($value)
 */
class CreateResellerUserQuota extends Rpc
{
}

/**
 * @method string getProductCode()
 * @method $this withProductCode($value)
 * @method string getSpecification()
 * @method $this withSpecification($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getEffectiveDate()
 * @method $this withEffectiveDate($value)
 * @method string getDuration()
 * @method $this withDuration($value)
 * @method string getPackageType()
 * @method $this withPackageType($value)
 * @method string getPricingCycle()
 * @method $this withPricingCycle($value)
 */
class CreateResourcePackage extends Rpc
{
}

/**
 * @method string getUnitId()
 * @method $this withUnitId($value)
 * @method string getOwnerUid()
 * @method $this withOwnerUid($value)
 */
class DeleteCostUnit extends Rpc
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
class DescribePricingModule extends Rpc
{
}

/**
 * @method string getProductCode()
 * @method $this withProductCode($value)
 */
class DescribeResourcePackageProduct extends Rpc
{
}

/**
 * @method string getProductCode()
 * @method $this withProductCode($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class EnableBillGeneration extends Rpc
{
}

/**
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class GetCustomerAccountInfo extends Rpc
{
}

class GetCustomerList extends Rpc
{
}

/**
 * @method string getOrderId()
 * @method $this withOrderId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class GetOrderDetail extends Rpc
{
}

/**
 * @method string getProductCode()
 * @method $this withProductCode($value)
 * @method string getSubscriptionType()
 * @method $this withSubscriptionType($value)
 * @method array getModuleList()
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getProductType()
 * @method $this withProductType($value)
 * @method string getRegion()
 * @method $this withRegion($value)
 */
class GetPayAsYouGoPrice extends Rpc
{

    /**
     * @param array $moduleList
     *
     * @return $this
     */
	public function withModuleList(array $moduleList)
	{
	    $this->data['ModuleList'] = $moduleList;
		foreach ($moduleList as $depth1 => $depth1Value) {
			if(isset($depth1Value['ModuleCode'])){
				$this->options['query']['ModuleList.' . ($depth1 + 1) . '.ModuleCode'] = $depth1Value['ModuleCode'];
			}
			if(isset($depth1Value['PriceType'])){
				$this->options['query']['ModuleList.' . ($depth1 + 1) . '.PriceType'] = $depth1Value['PriceType'];
			}
			if(isset($depth1Value['Config'])){
				$this->options['query']['ModuleList.' . ($depth1 + 1) . '.Config'] = $depth1Value['Config'];
			}
		}

		return $this;
    }
}

/**
 * @method string getProductCode()
 * @method $this withProductCode($value)
 * @method string getSpecification()
 * @method $this withSpecification($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getEffectiveDate()
 * @method $this withEffectiveDate($value)
 * @method string getDuration()
 * @method $this withDuration($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getPackageType()
 * @method $this withPackageType($value)
 * @method string getPricingCycle()
 * @method $this withPricingCycle($value)
 * @method string getOrderType()
 * @method $this withOrderType($value)
 */
class GetResourcePackagePrice extends Rpc
{
}

/**
 * @method string getProductCode()
 * @method $this withProductCode($value)
 * @method string getQuantity()
 * @method $this withQuantity($value)
 * @method string getSubscriptionType()
 * @method $this withSubscriptionType($value)
 * @method array getModuleList()
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getProductType()
 * @method $this withProductType($value)
 * @method string getServicePeriodQuantity()
 * @method $this withServicePeriodQuantity($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getServicePeriodUnit()
 * @method $this withServicePeriodUnit($value)
 * @method string getRegion()
 * @method $this withRegion($value)
 * @method string getOrderType()
 * @method $this withOrderType($value)
 */
class GetSubscriptionPrice extends Rpc
{

    /**
     * @param array $moduleList
     *
     * @return $this
     */
	public function withModuleList(array $moduleList)
	{
	    $this->data['ModuleList'] = $moduleList;
		foreach ($moduleList as $depth1 => $depth1Value) {
			if(isset($depth1Value['ModuleCode'])){
				$this->options['query']['ModuleList.' . ($depth1 + 1) . '.ModuleCode'] = $depth1Value['ModuleCode'];
			}
			if(isset($depth1Value['ModuleStatus'])){
				$this->options['query']['ModuleList.' . ($depth1 + 1) . '.ModuleStatus'] = $depth1Value['ModuleStatus'];
			}
			if(isset($depth1Value['Tag'])){
				$this->options['query']['ModuleList.' . ($depth1 + 1) . '.Tag'] = $depth1Value['Tag'];
			}
			if(isset($depth1Value['Config'])){
				$this->options['query']['ModuleList.' . ($depth1 + 1) . '.Config'] = $depth1Value['Config'];
			}
		}

		return $this;
    }
}

/**
 * @method array getUnitEntityList()
 */
class ModifyCostUnit extends Rpc
{

    /**
     * @param array $unitEntityList
     *
     * @return $this
     */
	public function withUnitEntityList(array $unitEntityList)
	{
	    $this->data['UnitEntityList'] = $unitEntityList;
		foreach ($unitEntityList as $depth1 => $depth1Value) {
			if(isset($depth1Value['NewUnitName'])){
				$this->options['query']['UnitEntityList.' . ($depth1 + 1) . '.NewUnitName'] = $depth1Value['NewUnitName'];
			}
			if(isset($depth1Value['UnitId'])){
				$this->options['query']['UnitEntityList.' . ($depth1 + 1) . '.UnitId'] = $depth1Value['UnitId'];
			}
			if(isset($depth1Value['OwnerUid'])){
				$this->options['query']['UnitEntityList.' . ($depth1 + 1) . '.OwnerUid'] = $depth1Value['OwnerUid'];
			}
		}

		return $this;
    }
}

/**
 * @method string getProductCode()
 * @method $this withProductCode($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getSubscriptionType()
 * @method $this withSubscriptionType($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getProductType()
 * @method $this withProductType($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getModifyType()
 * @method $this withModifyType($value)
 * @method array getParameter()
 */
class ModifyInstance extends Rpc
{

    /**
     * @param array $parameter
     *
     * @return $this
     */
	public function withParameter(array $parameter)
	{
	    $this->data['Parameter'] = $parameter;
		foreach ($parameter as $depth1 => $depth1Value) {
			if(isset($depth1Value['Code'])){
				$this->options['query']['Parameter.' . ($depth1 + 1) . '.Code'] = $depth1Value['Code'];
			}
			if(isset($depth1Value['Value'])){
				$this->options['query']['Parameter.' . ($depth1 + 1) . '.Value'] = $depth1Value['Value'];
			}
		}

		return $this;
    }
}

class QueryAccountBalance extends Rpc
{
}

/**
 * @method string getProductCode()
 * @method $this withProductCode($value)
 * @method string getBillingCycle()
 * @method $this withBillingCycle($value)
 * @method string getPageNum()
 * @method $this withPageNum($value)
 * @method string getOwnerID()
 * @method $this withOwnerID($value)
 * @method string getBillOwnerId()
 * @method $this withBillOwnerId($value)
 * @method string getIsGroupByProduct()
 * @method $this withIsGroupByProduct($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 */
class QueryAccountBill extends Rpc
{
}

/**
 * @method string getPageNum()
 * @method $this withPageNum($value)
 * @method string getCreateTimeEnd()
 * @method $this withCreateTimeEnd($value)
 * @method string getRecordID()
 * @method $this withRecordID($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getTransactionChannelSN()
 * @method $this withTransactionChannelSN($value)
 * @method string getCreateTimeStart()
 * @method $this withCreateTimeStart($value)
 * @method string getTransactionNumber()
 * @method $this withTransactionNumber($value)
 */
class QueryAccountTransactions extends Rpc
{
}

/**
 * @method string getProductCode()
 * @method $this withProductCode($value)
 * @method string getSubscriptionType()
 * @method $this withSubscriptionType($value)
 * @method string getPageNum()
 * @method $this withPageNum($value)
 * @method string getProductType()
 * @method $this withProductType($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getRenewStatus()
 * @method $this withRenewStatus($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getEndTimeStart()
 * @method $this withEndTimeStart($value)
 * @method string getCreateTimeEnd()
 * @method $this withCreateTimeEnd($value)
 * @method string getInstanceIDs()
 * @method $this withInstanceIDs($value)
 * @method string getEndTimeEnd()
 * @method $this withEndTimeEnd($value)
 * @method string getCreateTimeStart()
 * @method $this withCreateTimeStart($value)
 * @method string getRegion()
 * @method $this withRegion($value)
 */
class QueryAvailableInstances extends Rpc
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
 * @method string getBillingCycle()
 * @method $this withBillingCycle($value)
 * @method string getType()
 * @method $this withType($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getPageNum()
 * @method $this withPageNum($value)
 * @method string getBillOwnerId()
 * @method $this withBillOwnerId($value)
 * @method string getProductType()
 * @method $this withProductType($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 */
class QueryBill extends Rpc
{
}

/**
 * @method string getProductCode()
 * @method $this withProductCode($value)
 * @method string getSubscriptionType()
 * @method $this withSubscriptionType($value)
 * @method string getBillingCycle()
 * @method $this withBillingCycle($value)
 * @method string getBillOwnerId()
 * @method $this withBillOwnerId($value)
 * @method string getProductType()
 * @method $this withProductType($value)
 */
class QueryBillOverview extends Rpc
{
}

class QueryBillToOSSSubscription extends Rpc
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
class QueryCashCoupons extends Rpc
{
}

/**
 * @method string getParentUnitId()
 * @method $this withParentUnitId($value)
 * @method string getPageNum()
 * @method $this withPageNum($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getOwnerUid()
 * @method $this withOwnerUid($value)
 */
class QueryCostUnit extends Rpc
{
}

/**
 * @method string getPageNum()
 * @method $this withPageNum($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getUnitId()
 * @method $this withUnitId($value)
 * @method string getOwnerUid()
 * @method $this withOwnerUid($value)
 */
class QueryCostUnitResource extends Rpc
{
}

/**
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class QueryCustomerAddressList extends Rpc
{
}

/**
 * @method string getEndSearchTime()
 * @method $this withEndSearchTime($value)
 * @method string getOutBizId()
 * @method $this withOutBizId($value)
 * @method string getSortType()
 * @method $this withSortType($value)
 * @method string getType()
 * @method $this withType($value)
 * @method string getPageNum()
 * @method $this withPageNum($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getEndAmount()
 * @method $this withEndAmount($value)
 * @method string getBillCycle()
 * @method $this withBillCycle($value)
 * @method array getBizTypeList()
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getStartSearchTime()
 * @method $this withStartSearchTime($value)
 * @method string getEndBizTime()
 * @method $this withEndBizTime($value)
 * @method string getStartAmount()
 * @method $this withStartAmount($value)
 * @method string getStartBizTime()
 * @method $this withStartBizTime($value)
 */
class QueryEvaluateList extends Rpc
{

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
}

/**
 * @method string getProductCode()
 * @method $this withProductCode($value)
 * @method string getIsHideZeroCharge()
 * @method $this withIsHideZeroCharge($value)
 * @method string getSubscriptionType()
 * @method $this withSubscriptionType($value)
 * @method string getBillingCycle()
 * @method $this withBillingCycle($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getPageNum()
 * @method $this withPageNum($value)
 * @method string getBillOwnerId()
 * @method $this withBillOwnerId($value)
 * @method string getBillingDate()
 * @method $this withBillingDate($value)
 * @method string getProductType()
 * @method $this withProductType($value)
 * @method string getIsBillingItem()
 * @method $this withIsBillingItem($value)
 * @method string getGranularity()
 * @method $this withGranularity($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 */
class QueryInstanceBill extends Rpc
{
}

/**
 * @method string getProductCode()
 * @method $this withProductCode($value)
 * @method string getSubscriptionType()
 * @method $this withSubscriptionType($value)
 * @method string getBillingCycle()
 * @method $this withBillingCycle($value)
 * @method string getPageNum()
 * @method $this withPageNum($value)
 * @method string getProductType()
 * @method $this withProductType($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 */
class QueryInstanceGaapCost extends Rpc
{
}

/**
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class QueryInvoicingCustomerList extends Rpc
{
}

/**
 * @method string getBillingCycle()
 * @method $this withBillingCycle($value)
 */
class QueryMonthlyBill extends Rpc
{
}

/**
 * @method string getProductCode()
 * @method $this withProductCode($value)
 * @method string getSubscriptionType()
 * @method $this withSubscriptionType($value)
 * @method string getBillingCycle()
 * @method $this withBillingCycle($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getPageNum()
 * @method $this withPageNum($value)
 * @method string getProductType()
 * @method $this withProductType($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 */
class QueryMonthlyInstanceConsumption extends Rpc
{
}

/**
 * @method string getProductCode()
 * @method $this withProductCode($value)
 * @method string getSubscriptionType()
 * @method $this withSubscriptionType($value)
 * @method string getPageNum()
 * @method $this withPageNum($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getCreateTimeEnd()
 * @method $this withCreateTimeEnd($value)
 * @method string getProductType()
 * @method $this withProductType($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getPaymentStatus()
 * @method $this withPaymentStatus($value)
 * @method string getCreateTimeStart()
 * @method $this withCreateTimeStart($value)
 * @method string getOrderType()
 * @method $this withOrderType($value)
 */
class QueryOrders extends Rpc
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
class QueryPrepaidCards extends Rpc
{
}

/**
 * @method string getPageNum()
 * @method $this withPageNum($value)
 * @method string getQueryTotalCount()
 * @method $this withQueryTotalCount($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 */
class QueryProductList extends Rpc
{
}

/**
 * @method string getExpiryTimeEnd()
 * @method $this withExpiryTimeEnd($value)
 * @method string getExpiryTimeStart()
 * @method $this withExpiryTimeStart($value)
 * @method string getPageNum()
 * @method $this withPageNum($value)
 * @method string getEffectiveOrNot()
 * @method $this withEffectiveOrNot($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 */
class QueryRedeem extends Rpc
{

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getItemCodes()
 * @method $this withItemCodes($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class QueryResellerAvailableQuota extends Rpc
{
}

/**
 * @method string getExpiryTimeEnd()
 * @method $this withExpiryTimeEnd($value)
 * @method string getProductCode()
 * @method $this withProductCode($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getExpiryTimeStart()
 * @method $this withExpiryTimeStart($value)
 * @method string getPageNum()
 * @method $this withPageNum($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 */
class QueryResourcePackageInstances extends Rpc
{
}

/**
 * @method string getDeductedInstanceId()
 * @method $this withDeductedInstanceId($value)
 * @method string getInstanceSpec()
 * @method $this withInstanceSpec($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getRIInstanceId()
 * @method $this withRIInstanceId($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getPageNum()
 * @method $this withPageNum($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getRICommodityCode()
 * @method $this withRICommodityCode($value)
 */
class QueryRIUtilizationDetail extends Rpc
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
 * @method string getBillingCycle()
 * @method $this withBillingCycle($value)
 * @method string getType()
 * @method $this withType($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getBillOwnerId()
 * @method $this withBillOwnerId($value)
 * @method string getProductType()
 * @method $this withProductType($value)
 * @method string getNextToken()
 * @method $this withNextToken($value)
 * @method string getMaxResults()
 * @method $this withMaxResults($value)
 */
class QuerySettleBill extends Rpc
{
}

/**
 * @method string getProductCode()
 * @method $this withProductCode($value)
 * @method string getIsHideZeroCharge()
 * @method $this withIsHideZeroCharge($value)
 * @method string getSubscriptionType()
 * @method $this withSubscriptionType($value)
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
 * @method string getPageSize()
 * @method $this withPageSize($value)
 */
class QuerySettlementBill extends Rpc
{
}

/**
 * @method string getProductCode()
 * @method $this withProductCode($value)
 * @method string getSubscriptionType()
 * @method $this withSubscriptionType($value)
 * @method string getBillingCycle()
 * @method $this withBillingCycle($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getPageNum()
 * @method $this withPageNum($value)
 * @method string getBillOwnerId()
 * @method $this withBillOwnerId($value)
 * @method string getProductType()
 * @method $this withProductType($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 */
class QuerySplitItemBill extends Rpc
{
}

/**
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getDataType()
 * @method $this withDataType($value)
 * @method string getMarker()
 * @method $this withMarker($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getTable()
 * @method $this withTable($value)
 */
class QueryUserOmsData extends Rpc
{
}

/**
 * @method string getProductCode()
 * @method $this withProductCode($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getProductType()
 * @method $this withProductType($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getRenewPeriod()
 * @method $this withRenewPeriod($value)
 */
class RenewInstance extends Rpc
{
}

/**
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getEffectiveDate()
 * @method $this withEffectiveDate($value)
 * @method string getDuration()
 * @method $this withDuration($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getPricingCycle()
 * @method $this withPricingCycle($value)
 */
class RenewResourcePackage extends Rpc
{
}

/**
 * @method string getProductCode()
 * @method $this withProductCode($value)
 * @method string getSubscriptionType()
 * @method $this withSubscriptionType($value)
 * @method string getRenewalPeriod()
 * @method $this withRenewalPeriod($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getProductType()
 * @method $this withProductType($value)
 * @method string getInstanceIDs()
 * @method $this withInstanceIDs($value)
 * @method string getRenewalStatus()
 * @method $this withRenewalStatus($value)
 * @method string getRenewalPeriodUnit()
 * @method $this withRenewalPeriodUnit($value)
 */
class SetRenewal extends Rpc
{
}

/**
 * @method string getAlarmType()
 * @method $this withAlarmType($value)
 * @method string getAlarmThresholds()
 * @method $this withAlarmThresholds($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class SetResellerUserAlarmThreshold extends Rpc
{
}

/**
 * @method string getAmount()
 * @method $this withAmount($value)
 * @method string getOutBizId()
 * @method $this withOutBizId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getCurrency()
 * @method $this withCurrency($value)
 */
class SetResellerUserQuota extends Rpc
{
}

/**
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getBusinessType()
 * @method $this withBusinessType($value)
 * @method string getStatus()
 * @method $this withStatus($value)
 */
class SetResellerUserStatus extends Rpc
{
}

/**
 * @method string getBucketOwnerId()
 * @method $this withBucketOwnerId($value)
 * @method string getSubscribeType()
 * @method $this withSubscribeType($value)
 * @method string getSubscribeBucket()
 * @method $this withSubscribeBucket($value)
 * @method string getMultAccountRelSubscribe()
 * @method $this withMultAccountRelSubscribe($value)
 */
class SubscribeBillToOSS extends Rpc
{
}

/**
 * @method string getSubscribeType()
 * @method $this withSubscribeType($value)
 * @method string getMultAccountRelSubscribe()
 * @method $this withMultAccountRelSubscribe($value)
 */
class UnsubscribeBillToOSS extends Rpc
{
}

/**
 * @method string getSpecification()
 * @method $this withSpecification($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getEffectiveDate()
 * @method $this withEffectiveDate($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class UpgradeResourcePackage extends Rpc
{
}
