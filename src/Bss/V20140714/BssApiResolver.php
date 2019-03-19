<?php

namespace AlibabaCloud\Bss\V20140714;

use AlibabaCloud\ApiResolverTrait;

/**
 * Resolve Api based on the method name.
 *
 * @method OpenCallback openCallback(array $options = [])
 * @method QueryForCssOrder queryForCssOrder(array $options = [])
 * @method CreateOrder createOrder(array $options = [])
 * @method VnoPayCallBackNotify vnoPayCallBackNotify(array $options = [])
 * @method VnoBatchRefundOrder vnoBatchRefundOrder(array $options = [])
 * @method SubscriptionCreateOrderApi subscriptionCreateOrderApi(array $options = [])
 * @method DescribeCashDetail describeCashDetail(array $options = [])
 * @method SetResourceBusinessStatus setResourceBusinessStatus(array $options = [])
 * @method DescribeCouponList describeCouponList(array $options = [])
 * @method DescribeCouponDetail describeCouponDetail(array $options = [])
 */
class BssApiResolver
{
    use ApiResolverTrait;
}
