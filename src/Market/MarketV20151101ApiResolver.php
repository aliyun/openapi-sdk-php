<?php

namespace AlibabaCloud\Market;

use AlibabaCloud\ApiResolverTrait;

/**
 * Find the specified Api of the Market based on the method name as the Api name.
 *
 * @package   AlibabaCloud\Market
 *
 * @method V20151101\ActivateLicense activateLicense(array $options = [])
 * @method V20151101\BindImagePackage bindImagePackage(array $options = [])
 * @method V20151101\CreateOrder createOrder(array $options = [])
 * @method V20151101\DescribeInstance describeInstance(array $options = [])
 * @method V20151101\DescribeLicense describeLicense(array $options = [])
 * @method V20151101\DescribeOrder describeOrder(array $options = [])
 * @method V20151101\DescribePrice describePrice(array $options = [])
 * @method V20151101\DescribeProduct describeProduct(array $options = [])
 * @method V20151101\DescribeProductRates describeProductRates(array $options = [])
 * @method V20151101\DescribeProducts describeProducts(array $options = [])
 * @method V20151101\PushMeteringData pushMeteringData(array $options = [])
 * @method V20151101\QueryMarketCategories queryMarketCategories(array $options = [])
 * @method V20151101\QueryMarketImages queryMarketImages(array $options = [])
 * @method V20151101\SubscribeImage subscribeImage(array $options = [])
 */
class MarketV20151101ApiResolver
{
    use ApiResolverTrait;

    /**
     * @var string
     */
    protected $namespace = 'AlibabaCloud\\Market\\V20151101';
}
