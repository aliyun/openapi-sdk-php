<?php

namespace AlibabaCloud\Push\V20160801;

use AlibabaCloud\ApiResolverTrait;

/**
 * Resolve Api based on the method name.
 *
 * @method QueryDevicesByAccount queryDevicesByAccount(array $options = [])
 * @method QueryDevicesByAlias queryDevicesByAlias(array $options = [])
 * @method BindPhone bindPhone(array $options = [])
 * @method UnbindPhone unbindPhone(array $options = [])
 * @method RemoveTag removeTag(array $options = [])
 * @method CheckDevices checkDevices(array $options = [])
 * @method QueryPushList queryPushList(array $options = [])
 * @method CheckDevice checkDevice(array $options = [])
 * @method CancelPush cancelPush(array $options = [])
 * @method QueryPushStatByApp queryPushStatByApp(array $options = [])
 * @method QueryPushStatByMsg queryPushStatByMsg(array $options = [])
 * @method QueryAliases queryAliases(array $options = [])
 * @method ListSummaryApps listSummaryApps(array $options = [])
 * @method UnbindTag unbindTag(array $options = [])
 * @method UnbindAlias unbindAlias(array $options = [])
 * @method QueryUniqueDeviceStat queryUniqueDeviceStat(array $options = [])
 * @method QueryTags queryTags(array $options = [])
 * @method QueryPushStat queryPushStat(array $options = [])
 * @method QueryDeviceStat queryDeviceStat(array $options = [])
 * @method QueryDeviceInfo queryDeviceInfo(array $options = [])
 * @method QueryAppPushStat queryAppPushStat(array $options = [])
 * @method QueryAlias queryAlias(array $options = [])
 * @method PushNoticeToAndroid pushNoticeToAndroid(array $options = [])
 * @method PushNoticeToiOS pushNoticeToiOS(array $options = [])
 * @method PushMessageToiOS pushMessageToiOS(array $options = [])
 * @method PushMessageToAndroid pushMessageToAndroid(array $options = [])
 * @method Push push(array $options = [])
 * @method ListTags listTags(array $options = [])
 * @method ListPushRecords listPushRecords(array $options = [])
 * @method DeleteTag deleteTag(array $options = [])
 * @method ClearAlias clearAlias(array $options = [])
 * @method BindTag bindTag(array $options = [])
 * @method BindAlias bindAlias(array $options = [])
 */
class PushApiResolver
{
    use ApiResolverTrait;
}
