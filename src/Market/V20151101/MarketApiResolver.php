<?php

namespace AlibabaCloud\Market\V20151101;

use AlibabaCloud\ApiResolverTrait;

/**
 * Find the specified Api of the Market based on the method name as the Api name.
 *
 * @package   AlibabaCloud\Market\V20151101
 *
 * @method ActivateLicense activateLicense(array $options = [])
 * @method BindImagePackage bindImagePackage(array $options = [])
 * @method CreateOrder createOrder(array $options = [])
 * @method DescribeInstance describeInstance(array $options = [])
 * @method DescribeLicense describeLicense(array $options = [])
 * @method DescribeOrder describeOrder(array $options = [])
 * @method DescribePrice describePrice(array $options = [])
 * @method DescribeProduct describeProduct(array $options = [])
 * @method DescribeProductRates describeProductRates(array $options = [])
 * @method DescribeProducts describeProducts(array $options = [])
 * @method PushMeteringData pushMeteringData(array $options = [])
 * @method QueryMarketCategories queryMarketCategories(array $options = [])
 * @method QueryMarketImages queryMarketImages(array $options = [])
 * @method SubscribeImage subscribeImage(array $options = [])
 */
class MarketApiResolver
{
    use ApiResolverTrait;
}
