<?php

namespace AlibabaCloud\Yundun\V20150227;

use AlibabaCloud\Rpc;

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
