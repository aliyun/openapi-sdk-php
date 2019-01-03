<?php

namespace AlibabaCloud\Push\V20160801;

use AlibabaCloud\ApiResolverTrait;

/**
 * Find the specified Api of the Push based on the method name as the Api name.
 *
 * @package   AlibabaCloud\Push\V20160801
 *
 * @method static BindAlias bindAlias(array $options = [])
 * @method static BindPhone bindPhone(array $options = [])
 * @method static BindTag bindTag(array $options = [])
 * @method static CancelPush cancelPush(array $options = [])
 * @method static CheckDevice checkDevice(array $options = [])
 * @method static CheckDevices checkDevices(array $options = [])
 * @method static ClearAlias clearAlias(array $options = [])
 * @method static DeleteTag deleteTag(array $options = [])
 * @method static ListPushRecords listPushRecords(array $options = [])
 * @method static ListSummaryApps listSummaryApps(array $options = [])
 * @method static ListTags listTags(array $options = [])
 * @method static PushApiResolver pushApiResolver(array $options = [])
 * @method static PushMessageToAndroid pushMessageToAndroid(array $options = [])
 * @method static PushMessageToiOS pushMessageToiOS(array $options = [])
 * @method static PushNoticeToAndroid pushNoticeToAndroid(array $options = [])
 * @method static PushNoticeToiOS pushNoticeToiOS(array $options = [])
 * @method static QueryAlias queryAlias(array $options = [])
 * @method static QueryAliases queryAliases(array $options = [])
 * @method static QueryAppPushStat queryAppPushStat(array $options = [])
 * @method static QueryDeviceInfo queryDeviceInfo(array $options = [])
 * @method static QueryDeviceStat queryDeviceStat(array $options = [])
 * @method static QueryDevicesByAccount queryDevicesByAccount(array $options = [])
 * @method static QueryDevicesByAlias queryDevicesByAlias(array $options = [])
 * @method static QueryPushList queryPushList(array $options = [])
 * @method static QueryPushStat queryPushStat(array $options = [])
 * @method static QueryPushStatByApp queryPushStatByApp(array $options = [])
 * @method static QueryPushStatByMsg queryPushStatByMsg(array $options = [])
 * @method static QueryTags queryTags(array $options = [])
 * @method static QueryUniqueDeviceStat queryUniqueDeviceStat(array $options = [])
 * @method static RemoveTag removeTag(array $options = [])
 * @method static UnbindAlias unbindAlias(array $options = [])
 * @method static UnbindPhone unbindPhone(array $options = [])
 * @method static UnbindTag unbindTag(array $options = [])
 */
class Push
{
    use ApiResolverTrait;
}
