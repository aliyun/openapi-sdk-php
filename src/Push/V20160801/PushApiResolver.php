<?php

namespace AlibabaCloud\Push\V20160801;

use AlibabaCloud\ApiResolverTrait;

/**
 * Find the specified Api of the Push based on the method name as the Api name.
 *
 * @package   AlibabaCloud\Push\V20160801
 *
 * @method BindAlias bindAlias(array $options = [])
 * @method BindPhone bindPhone(array $options = [])
 * @method BindTag bindTag(array $options = [])
 * @method CancelPush cancelPush(array $options = [])
 * @method CheckDevice checkDevice(array $options = [])
 * @method CheckDevices checkDevices(array $options = [])
 * @method ClearAlias clearAlias(array $options = [])
 * @method DeleteTag deleteTag(array $options = [])
 * @method ListPushRecords listPushRecords(array $options = [])
 * @method ListSummaryApps listSummaryApps(array $options = [])
 * @method ListTags listTags(array $options = [])
 * @method PushApiResolver pushApiResolver(array $options = [])
 * @method PushMessageToAndroid pushMessageToAndroid(array $options = [])
 * @method PushMessageToiOS pushMessageToiOS(array $options = [])
 * @method PushNoticeToAndroid pushNoticeToAndroid(array $options = [])
 * @method PushNoticeToiOS pushNoticeToiOS(array $options = [])
 * @method QueryAlias queryAlias(array $options = [])
 * @method QueryAliases queryAliases(array $options = [])
 * @method QueryAppPushStat queryAppPushStat(array $options = [])
 * @method QueryDeviceInfo queryDeviceInfo(array $options = [])
 * @method QueryDeviceStat queryDeviceStat(array $options = [])
 * @method QueryDevicesByAccount queryDevicesByAccount(array $options = [])
 * @method QueryDevicesByAlias queryDevicesByAlias(array $options = [])
 * @method QueryPushList queryPushList(array $options = [])
 * @method QueryPushStat queryPushStat(array $options = [])
 * @method QueryPushStatByApp queryPushStatByApp(array $options = [])
 * @method QueryPushStatByMsg queryPushStatByMsg(array $options = [])
 * @method QueryTags queryTags(array $options = [])
 * @method QueryUniqueDeviceStat queryUniqueDeviceStat(array $options = [])
 * @method RemoveTag removeTag(array $options = [])
 * @method UnbindAlias unbindAlias(array $options = [])
 * @method UnbindPhone unbindPhone(array $options = [])
 * @method UnbindTag unbindTag(array $options = [])
 */
class PushApiResolver
{
    use ApiResolverTrait;
}
