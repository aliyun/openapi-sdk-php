<?php

namespace AlibabaCloud\Market\V20151101;

use AlibabaCloud\Client\Resolver\ApiResolver;

/**
 * @method DescribeInstances describeInstances(array $options = [])
 * @method NotifyContractEvent notifyContractEvent(array $options = [])
 * @method DescribeProducts describeProducts(array $options = [])
 * @method BindImagePackage bindImagePackage(array $options = [])
 * @method DescribeProduct describeProduct(array $options = [])
 * @method DescribePrice describePrice(array $options = [])
 * @method DescribeOrder describeOrder(array $options = [])
 * @method DescribeInstance describeInstance(array $options = [])
 * @method CreateOrder createOrder(array $options = [])
 * @method PushMeteringData pushMeteringData(array $options = [])
 * @method DescribeLicense describeLicense(array $options = [])
 * @method ActivateLicense activateLicense(array $options = [])
 * @method QueryMarketImages queryMarketImages(array $options = [])
 * @method QueryMarketCategories queryMarketCategories(array $options = [])
 */
class MarketApiResolver extends ApiResolver
{
}

class Rpc extends \AlibabaCloud\Client\Resolver\Rpc
{
    /** @var string */
    public $product = 'Market';

    /** @var string */
    public $version = '2015-11-01';

    /** @var string */
    public $method = 'POST';
}

/**
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getProductType()
 * @method $this withProductType($value)
 */
class DescribeInstances extends Rpc
{
}

/**
 * @method string getEventMessage()
 * @method $this withEventMessage($value)
 * @method string getEventType()
 * @method $this withEventType($value)
 */
class NotifyContractEvent extends Rpc
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
class DescribeProducts extends Rpc
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
 * @method string getEcsInstanceId()
 * @method $this withEcsInstanceId($value)
 * @method string getImagePackageInstanceId()
 * @method $this withImagePackageInstanceId($value)
 */
class BindImagePackage extends Rpc
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
class DescribeProduct extends Rpc
{
}

/**
 * @method string getCommodity()
 * @method $this withCommodity($value)
 * @method string getOrderType()
 * @method $this withOrderType($value)
 */
class DescribePrice extends Rpc
{
}

/**
 * @method string getOrderId()
 * @method $this withOrderId($value)
 */
class DescribeOrder extends Rpc
{
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getOrderType()
 * @method $this withOrderType($value)
 */
class DescribeInstance extends Rpc
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
class CreateOrder extends Rpc
{
}

/**
 * @method string getMetering()
 * @method $this withMetering($value)
 */
class PushMeteringData extends Rpc
{
}

/**
 * @method string getLicenseCode()
 * @method $this withLicenseCode($value)
 */
class DescribeLicense extends Rpc
{
}

/**
 * @method string getIdentification()
 * @method $this withIdentification($value)
 * @method string getLicenseCode()
 * @method $this withLicenseCode($value)
 */
class ActivateLicense extends Rpc
{
}

/**
 * @method string getParam()
 * @method $this withParam($value)
 */
class QueryMarketImages extends Rpc
{
}

class QueryMarketCategories extends Rpc
{
}
