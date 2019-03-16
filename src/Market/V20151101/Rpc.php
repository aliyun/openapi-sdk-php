<?php

namespace AlibabaCloud\Market\V20151101;

use AlibabaCloud\Rpc;

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
     * @param array $value
     *
     * @return $this
     */
    public function withFilter(array $value)
    {
        $this->data['Filter'] = $value;
        foreach ($value as $i => $iValue) {
            $this->options['query']['Filter.' . ($i + 1) . '.Value'] = $value[$i]['Value'];
            $this->options['query']['Filter.' . ($i + 1) . '.Key'] = $value[$i]['Key'];
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
