<?php

namespace AlibabaCloud\BssOpenApi;

use AlibabaCloud\ApiResolverTrait;

/**
 * Find the specified Api of the BssOpenApi based on the method name as the Api name.
 *
 * @package   AlibabaCloud\BssOpenApi
 *
 * @method V20171214\ConvertChargeType convertChargeType(array $options = [])
 * @method V20171214\CreateInstance createInstance(array $options = [])
 * @method V20171214\CreateResourcePackage createResourcePackage(array $options = [])
 * @method V20171214\DescribePricingModule describePricingModule(array $options = [])
 * @method V20171214\DescribeResourcePackageProduct describeResourcePackageProduct(array $options = [])
 * @method V20171214\EnableBillGeneration enableBillGeneration(array $options = [])
 * @method V20171214\GetOrderDetail getOrderDetail(array $options = [])
 * @method V20171214\GetPayAsYouGoPrice getPayAsYouGoPrice(array $options = [])
 * @method V20171214\GetResourcePackagePrice getResourcePackagePrice(array $options = [])
 * @method V20171214\GetSubscriptionPrice getSubscriptionPrice(array $options = [])
 * @method V20171214\ModifyInstance modifyInstance(array $options = [])
 * @method V20171214\QueryAccountBalance queryAccountBalance(array $options = [])
 * @method V20171214\QueryAvailableInstances queryAvailableInstances(array $options = [])
 * @method V20171214\QueryAvailableInstancesApi queryAvailableInstancesApi(array $options = [])
 * @method V20171214\QueryBill queryBill(array $options = [])
 * @method V20171214\QueryBillOverview queryBillOverview(array $options = [])
 * @method V20171214\QueryCashCoupons queryCashCoupons(array $options = [])
 * @method V20171214\QueryInstanceBill queryInstanceBill(array $options = [])
 * @method V20171214\QueryInstanceGaapCost queryInstanceGaapCost(array $options = [])
 * @method V20171214\QueryMonthlyBill queryMonthlyBill(array $options = [])
 * @method V20171214\QueryMonthlyInstanceConsumption queryMonthlyInstanceConsumption(array $options = [])
 * @method V20171214\QueryOrders queryOrders(array $options = [])
 * @method V20171214\QueryPrepaidCards queryPrepaidCards(array $options = [])
 * @method V20171214\QueryProductList queryProductList(array $options = [])
 * @method V20171214\QueryRedeem queryRedeem(array $options = [])
 * @method V20171214\QueryResourcePackageInstances queryResourcePackageInstances(array $options = [])
 * @method V20171214\QuerySettlementBill querySettlementBill(array $options = [])
 * @method V20171214\QueryUserAvailableCreditAmount queryUserAvailableCreditAmount(array $options = [])
 * @method V20171214\QueryUserCoupon queryUserCoupon(array $options = [])
 * @method V20171214\QueryUserValueCard queryUserValueCard(array $options = [])
 * @method V20171214\RenewInstance renewInstance(array $options = [])
 * @method V20171214\SetAutoRenewalApi setAutoRenewalApi(array $options = [])
 * @method V20171214\SetNotRenewalApi setNotRenewalApi(array $options = [])
 * @method V20171214\SetRenewal setRenewal(array $options = [])
 * @method V20171214\SetRenewalApi setRenewalApi(array $options = [])
 * @method V20171214\SubscribeExportToOSS subscribeExportToOSS(array $options = [])
 * @method V20171214\UnsubscribeExportToOSS unsubscribeExportToOSS(array $options = [])
 */
class BssOpenApiV20171214ApiResolver
{
    use ApiResolverTrait;

    /**
     * @var string
     */
    protected $namespace = 'AlibabaCloud\\BssOpenApi\\V20171214';
}
