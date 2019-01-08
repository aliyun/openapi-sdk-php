<?php

namespace AlibabaCloud\Push;

use AlibabaCloud\ApiResolverTrait;

/**
 * Find the specified Api of the Push based on the method name as the Api name.
 *
 * @package   AlibabaCloud\Push
 *
 * @method static V20160801\BindAlias bindAlias(array $options = [])
 * @method static V20160801\BindPhone bindPhone(array $options = [])
 * @method static V20160801\BindTag bindTag(array $options = [])
 * @method static V20160801\CancelPush cancelPush(array $options = [])
 * @method static V20160801\CheckDevice checkDevice(array $options = [])
 * @method static V20160801\CheckDevices checkDevices(array $options = [])
 * @method static V20160801\ClearAlias clearAlias(array $options = [])
 * @method static V20160801\DeleteTag deleteTag(array $options = [])
 * @method static V20160801\ListPushRecords listPushRecords(array $options = [])
 * @method static V20160801\ListSummaryApps listSummaryApps(array $options = [])
 * @method static V20160801\ListTags listTags(array $options = [])
 * @method static V20160801\PushMessageToAndroid pushMessageToAndroid(array $options = [])
 * @method static V20160801\PushMessageToiOS pushMessageToiOS(array $options = [])
 * @method static V20160801\PushNoticeToAndroid pushNoticeToAndroid(array $options = [])
 * @method static V20160801\PushNoticeToiOS pushNoticeToiOS(array $options = [])
 * @method static V20160801\QueryAlias queryAlias(array $options = [])
 * @method static V20160801\QueryAliases queryAliases(array $options = [])
 * @method static V20160801\QueryAppPushStat queryAppPushStat(array $options = [])
 * @method static V20160801\QueryDeviceInfo queryDeviceInfo(array $options = [])
 * @method static V20160801\QueryDeviceStat queryDeviceStat(array $options = [])
 * @method static V20160801\QueryDevicesByAccount queryDevicesByAccount(array $options = [])
 * @method static V20160801\QueryDevicesByAlias queryDevicesByAlias(array $options = [])
 * @method static V20160801\QueryPushList queryPushList(array $options = [])
 * @method static V20160801\QueryPushStat queryPushStat(array $options = [])
 * @method static V20160801\QueryPushStatByApp queryPushStatByApp(array $options = [])
 * @method static V20160801\QueryPushStatByMsg queryPushStatByMsg(array $options = [])
 * @method static V20160801\QueryTags queryTags(array $options = [])
 * @method static V20160801\QueryUniqueDeviceStat queryUniqueDeviceStat(array $options = [])
 * @method static V20160801\RemoveTag removeTag(array $options = [])
 * @method static V20160801\UnbindAlias unbindAlias(array $options = [])
 * @method static V20160801\UnbindPhone unbindPhone(array $options = [])
 * @method static V20160801\UnbindTag unbindTag(array $options = [])
 */
class PushV20160801
{
    use ApiResolverTrait;

    /**
     * @var string
     */
    protected $namespace = 'AlibabaCloud\\Push\\V20160801';
}
