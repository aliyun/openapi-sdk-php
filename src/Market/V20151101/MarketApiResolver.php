<?php

namespace AlibabaCloud\Market\V20151101;

use AlibabaCloud\ApiResolverTrait;

/**
 * Resolve Api based on the method name.
 *
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
