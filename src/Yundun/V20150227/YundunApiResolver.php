<?php

namespace AlibabaCloud\Yundun\V20150227;

use AlibabaCloud\ApiResolverTrait;

/**
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

class Rpc extends \AlibabaCloud\Rpc
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

class TodayAllkbps extends Rpc
{
}

class TodayAegisOnlineRate extends Rpc
{
}

class CurrentDdosAttackNum extends Rpc
{
}

class AllMalwareNum extends Rpc
{
}

class TodayMalwareNum extends Rpc
{
}

class TodayCrackIntercept extends Rpc
{
}

class TodayBackdoor extends Rpc
{
}

class TodayAllpps extends Rpc
{
}

class WebAttackNum extends Rpc
{
}

class TodayqpsByRegion extends Rpc
{
}
