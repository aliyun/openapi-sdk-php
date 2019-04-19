<?php

namespace AlibabaCloud\Market\V20151101;

use AlibabaCloud\ApiResolverTrait;
use AlibabaCloud\Rpc;

/**
 * Resolve Api based on the method name.
 *
 * @method DescribeApplicationInstance describeApplicationInstance(array $options = [])
 * @method DescribeApplicationInstances describeApplicationInstances(array $options = [])
 * @method UpdateApplicationInstance updateApplicationInstance(array $options = [])
 * @method CreateApplicationInstance createApplicationInstance(array $options = [])
 * @method DescribeApplicationTemplates describeApplicationTemplates(array $options = [])
 * @method DescribeApplicationTemplate describeApplicationTemplate(array $options = [])
 * @method DescribeInstances describeInstances(array $options = [])
 * @method NotifyContractEvent notifyContractEvent(array $options = [])
 * @method DescribeProducts describeProducts(array $options = [])
 * @method DescribeProductRates describeProductRates(array $options = [])
 * @method SubscribeImage subscribeImage(array $options = [])
 * @method BindImagePackage bindImagePackage(array $options = [])
 * @method DescribePrice describePrice(array $options = [])
 * @method DescribeProduct describeProduct(array $options = [])
 * @method CreateOrder createOrder(array $options = [])
 * @method DescribeInstance describeInstance(array $options = [])
 * @method DescribeOrder describeOrder(array $options = [])
 * @method PushMeteringData pushMeteringData(array $options = [])
 * @method ActivateLicense activateLicense(array $options = [])
 * @method DescribeLicense describeLicense(array $options = [])
 * @method QueryMarketCategories queryMarketCategories(array $options = [])
 * @method QueryMarketImages queryMarketImages(array $options = [])
 */
class MarketApiResolver
{
    use ApiResolverTrait;
}

class V20151101Rpc extends Rpc
{
    /** @var string */
    public $product = 'Market';

    /** @var string */
    public $version = '2015-11-01';

    /** @var string */
    public $method = 'POST';
}

/**
 * @method string getParam()
 * @method $this withParam($value)
 */
class DescribeApplicationInstance extends V20151101Rpc
{
}

/**
 * @method string getParam()
 * @method $this withParam($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 */
class DescribeApplicationInstances extends V20151101Rpc
{
}

/**
 * @method string getParam()
 * @method $this withParam($value)
 */
class UpdateApplicationInstance extends V20151101Rpc
{
}

/**
 * @method string getParam()
 * @method $this withParam($value)
 */
class CreateApplicationInstance extends V20151101Rpc
{
}

/**
 * @method string getParam()
 * @method $this withParam($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 */
class DescribeApplicationTemplates extends V20151101Rpc
{
}

/**
 * @method string getParam()
 * @method $this withParam($value)
 */
class DescribeApplicationTemplate extends V20151101Rpc
{
}

/**
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getProductType()
 * @method $this withProductType($value)
 */
class DescribeInstances extends V20151101Rpc
{
}

/**
 * @method string getEventMessage()
 * @method $this withEventMessage($value)
 * @method string getEventType()
 * @method $this withEventType($value)
 */
class NotifyContractEvent extends V20151101Rpc
{
}

/**
 * @method array getFilter()
 * @method string getSearchTerm()
 * @method $this withSearchTerm($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 */
class DescribeProducts extends V20151101Rpc
{

    /**
     * @param array $filter
     *
     * @return $this
     */
    public function withFilter(array $filter)
    {
        $this->data['Filter'] = $filter;
        foreach ($filter as $depth1 => $depth1Value) {
            $this->options['query']['Filter.' . ($depth1 + 1) . '.Value'] = $depth1Value['Value'];
            $this->options['query']['Filter.' . ($depth1 + 1) . '.Key'] = $depth1Value['Key'];
        }

        return $this;
    }
}

/**
 * @method string getCode()
 * @method $this withCode($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getPageIndex()
 * @method $this withPageIndex($value)
 */
class DescribeProductRates extends V20151101Rpc
{
}

/**
 * @method string getProductCode()
 * @method $this withProductCode($value)
 */
class SubscribeImage extends V20151101Rpc
{
}

/**
 * @method string getEcsInstanceId()
 * @method $this withEcsInstanceId($value)
 * @method string getImagePackageInstanceId()
 * @method $this withImagePackageInstanceId($value)
 */
class BindImagePackage extends V20151101Rpc
{
}

/**
 * @method string getCommodity()
 * @method $this withCommodity($value)
 * @method string getOrderType()
 * @method $this withOrderType($value)
 */
class DescribePrice extends V20151101Rpc
{
}

/**
 * @method string getCode()
 * @method $this withCode($value)
 * @method string getQueryDraft()
 * @method $this withQueryDraft($value)
 * @method string getAliUid()
 * @method $this withAliUid($value)
 */
class DescribeProduct extends V20151101Rpc
{
}

/**
 * @method string getOrderSouce()
 * @method $this withOrderSouce($value)
 * @method string getCommodity()
 * @method $this withCommodity($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getPaymentType()
 * @method $this withPaymentType($value)
 * @method string getOrderType()
 * @method $this withOrderType($value)
 */
class CreateOrder extends V20151101Rpc
{
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getOrderType()
 * @method $this withOrderType($value)
 */
class DescribeInstance extends V20151101Rpc
{
}

/**
 * @method string getOrderId()
 * @method $this withOrderId($value)
 */
class DescribeOrder extends V20151101Rpc
{
}

/**
 * @method string getMetering()
 * @method $this withMetering($value)
 */
class PushMeteringData extends V20151101Rpc
{
}

/**
 * @method string getIdentification()
 * @method $this withIdentification($value)
 * @method string getLicenseCode()
 * @method $this withLicenseCode($value)
 */
class ActivateLicense extends V20151101Rpc
{
}

/**
 * @method string getLicenseCode()
 * @method $this withLicenseCode($value)
 */
class DescribeLicense extends V20151101Rpc
{
}

class QueryMarketCategories extends V20151101Rpc
{
}

/**
 * @method string getParam()
 * @method $this withParam($value)
 */
class QueryMarketImages extends V20151101Rpc
{
}
