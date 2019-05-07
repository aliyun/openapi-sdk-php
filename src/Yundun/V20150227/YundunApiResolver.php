<?php

namespace AlibabaCloud\Yundun\V20150227;

use AlibabaCloud\ApiResolverTrait;
use AlibabaCloud\Rpc;

/**
 * Resolve Api based on the method name.
 *
 * @method TodayAllkbps todayAllkbps(array $options = [])
 * @method TodayAegisOnlineRate todayAegisOnlineRate(array $options = [])
 * @method CurrentDdosAttackNum currentDdosAttackNum(array $options = [])
 * @method AllMalwareNum allMalwareNum(array $options = [])
 * @method TodayMalwareNum todayMalwareNum(array $options = [])
 * @method TodayCrackIntercept todayCrackIntercept(array $options = [])
 * @method TodayBackdoor todayBackdoor(array $options = [])
 * @method TodayAllpps todayAllpps(array $options = [])
 * @method WebAttackNum webAttackNum(array $options = [])
 * @method TodayqpsByRegion todayqpsByRegion(array $options = [])
 */
class YundunApiResolver
{
    use ApiResolverTrait;
}

class V20150227Rpc extends Rpc
{
    /** @var string */
    public $product = 'Yundun';

    /** @var string */
    public $version = '2015-02-27';

    /** @var string */
    public $method = 'POST';

    /** @var string */
    public $serviceCode = 'yundun';
}

class TodayAllkbps extends V20150227Rpc
{
}

class TodayAegisOnlineRate extends V20150227Rpc
{
}

class CurrentDdosAttackNum extends V20150227Rpc
{
}

class AllMalwareNum extends V20150227Rpc
{
}

class TodayMalwareNum extends V20150227Rpc
{
}

class TodayCrackIntercept extends V20150227Rpc
{
}

class TodayBackdoor extends V20150227Rpc
{
}

class TodayAllpps extends V20150227Rpc
{
}

class WebAttackNum extends V20150227Rpc
{
}

class TodayqpsByRegion extends V20150227Rpc
{
}
