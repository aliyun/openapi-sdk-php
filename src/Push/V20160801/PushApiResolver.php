<?php

namespace AlibabaCloud\Push\V20160801;

use AlibabaCloud\Client\Resolver\ApiResolver;

/**
 * @method QueryDevicesByAlias queryDevicesByAlias(array $options = [])
 * @method QueryDevicesByAccount queryDevicesByAccount(array $options = [])
 * @method UnbindPhone unbindPhone(array $options = [])
 * @method BindPhone bindPhone(array $options = [])
 * @method RemoveTag removeTag(array $options = [])
 * @method CheckDevices checkDevices(array $options = [])
 * @method QueryPushList queryPushList(array $options = [])
 * @method CheckDevice checkDevice(array $options = [])
 * @method UnbindTag unbindTag(array $options = [])
 * @method UnbindAlias unbindAlias(array $options = [])
 * @method QueryUniqueDeviceStat queryUniqueDeviceStat(array $options = [])
 * @method QueryTags queryTags(array $options = [])
 * @method QueryPushStatByMsg queryPushStatByMsg(array $options = [])
 * @method QueryPushStatByApp queryPushStatByApp(array $options = [])
 * @method QueryDeviceStat queryDeviceStat(array $options = [])
 * @method QueryDeviceInfo queryDeviceInfo(array $options = [])
 * @method QueryAliases queryAliases(array $options = [])
 * @method PushNoticeToiOS pushNoticeToiOS(array $options = [])
 * @method PushNoticeToAndroid pushNoticeToAndroid(array $options = [])
 * @method PushMessageToiOS pushMessageToiOS(array $options = [])
 * @method PushMessageToAndroid pushMessageToAndroid(array $options = [])
 * @method Push push(array $options = [])
 * @method ListTags listTags(array $options = [])
 * @method ListSummaryApps listSummaryApps(array $options = [])
 * @method ListPushRecords listPushRecords(array $options = [])
 * @method BindTag bindTag(array $options = [])
 * @method BindAlias bindAlias(array $options = [])
 * @method CancelPush cancelPush(array $options = [])
 */
class PushApiResolver extends ApiResolver
{
}

class Rpc extends \AlibabaCloud\Client\Resolver\Rpc
{
    /** @var string */
    public $product = 'Push';

    /** @var string */
    public $version = '2016-08-01';

    /** @var string */
    public $method = 'POST';
}

/**
 * @method string getAlias()
 * @method $this withAlias($value)
 * @method string getAppKey()
 * @method $this withAppKey($value)
 */
class QueryDevicesByAlias extends Rpc
{
}

/**
 * @method string getAppKey()
 * @method $this withAppKey($value)
 * @method string getAccount()
 * @method $this withAccount($value)
 */
class QueryDevicesByAccount extends Rpc
{
}

/**
 * @method string getAppKey()
 * @method $this withAppKey($value)
 * @method string getDeviceId()
 * @method $this withDeviceId($value)
 */
class UnbindPhone extends Rpc
{
}

/**
 * @method string getPhoneNumber()
 * @method $this withPhoneNumber($value)
 * @method string getAppKey()
 * @method $this withAppKey($value)
 * @method string getDeviceId()
 * @method $this withDeviceId($value)
 */
class BindPhone extends Rpc
{
}

/**
 * @method string getTagName()
 * @method $this withTagName($value)
 * @method string getAppKey()
 * @method $this withAppKey($value)
 */
class RemoveTag extends Rpc
{
}

/**
 * @method string getDeviceIds()
 * @method $this withDeviceIds($value)
 * @method string getAppKey()
 * @method $this withAppKey($value)
 */
class CheckDevices extends Rpc
{
}

/**
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getAppKey()
 * @method $this withAppKey($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getPage()
 * @method $this withPage($value)
 * @method string getPushType()
 * @method $this withPushType($value)
 */
class QueryPushList extends Rpc
{
}

/**
 * @method string getAppKey()
 * @method $this withAppKey($value)
 * @method string getDeviceId()
 * @method $this withDeviceId($value)
 */
class CheckDevice extends Rpc
{
}

/**
 * @method string getTagName()
 * @method $this withTagName($value)
 * @method string getClientKey()
 * @method $this withClientKey($value)
 * @method string getAppKey()
 * @method $this withAppKey($value)
 * @method string getKeyType()
 * @method $this withKeyType($value)
 */
class UnbindTag extends Rpc
{
}

/**
 * @method string getAliasName()
 * @method $this withAliasName($value)
 * @method string getAppKey()
 * @method $this withAppKey($value)
 * @method string getDeviceId()
 * @method $this withDeviceId($value)
 * @method string getUnbindAll()
 * @method $this withUnbindAll($value)
 */
class UnbindAlias extends Rpc
{
}

/**
 * @method string getGranularity()
 * @method $this withGranularity($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getAppKey()
 * @method $this withAppKey($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 */
class QueryUniqueDeviceStat extends Rpc
{
}

/**
 * @method string getClientKey()
 * @method $this withClientKey($value)
 * @method string getAppKey()
 * @method $this withAppKey($value)
 * @method string getKeyType()
 * @method $this withKeyType($value)
 */
class QueryTags extends Rpc
{
}

/**
 * @method string getMessageId()
 * @method $this withMessageId($value)
 * @method string getAppKey()
 * @method $this withAppKey($value)
 */
class QueryPushStatByMsg extends Rpc
{
}

/**
 * @method string getGranularity()
 * @method $this withGranularity($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getAppKey()
 * @method $this withAppKey($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 */
class QueryPushStatByApp extends Rpc
{
}

/**
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getAppKey()
 * @method $this withAppKey($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getDeviceType()
 * @method $this withDeviceType($value)
 * @method string getQueryType()
 * @method $this withQueryType($value)
 */
class QueryDeviceStat extends Rpc
{
}

/**
 * @method string getAppKey()
 * @method $this withAppKey($value)
 * @method string getDeviceId()
 * @method $this withDeviceId($value)
 */
class QueryDeviceInfo extends Rpc
{
}

/**
 * @method string getAppKey()
 * @method $this withAppKey($value)
 * @method string getDeviceId()
 * @method $this withDeviceId($value)
 */
class QueryAliases extends Rpc
{
}

/**
 * @method string getExtParameters()
 * @method $this withExtParameters($value)
 * @method string getApnsEnv()
 * @method $this withApnsEnv($value)
 * @method string getAppKey()
 * @method $this withAppKey($value)
 * @method string getTargetValue()
 * @method $this withTargetValue($value)
 * @method string getTitle()
 * @method $this withTitle($value)
 * @method string getBody()
 * @method $this withBody($value)
 * @method string getJobKey()
 * @method $this withJobKey($value)
 * @method string getTarget()
 * @method $this withTarget($value)
 */
class PushNoticeToiOS extends Rpc
{
}

/**
 * @method string getExtParameters()
 * @method $this withExtParameters($value)
 * @method string getAppKey()
 * @method $this withAppKey($value)
 * @method string getTargetValue()
 * @method $this withTargetValue($value)
 * @method string getTitle()
 * @method $this withTitle($value)
 * @method string getBody()
 * @method $this withBody($value)
 * @method string getJobKey()
 * @method $this withJobKey($value)
 * @method string getTarget()
 * @method $this withTarget($value)
 */
class PushNoticeToAndroid extends Rpc
{
}

/**
 * @method string getAppKey()
 * @method $this withAppKey($value)
 * @method string getTargetValue()
 * @method $this withTargetValue($value)
 * @method string getTitle()
 * @method $this withTitle($value)
 * @method string getBody()
 * @method $this withBody($value)
 * @method string getJobKey()
 * @method $this withJobKey($value)
 * @method string getTarget()
 * @method $this withTarget($value)
 */
class PushMessageToiOS extends Rpc
{
}

/**
 * @method string getAppKey()
 * @method $this withAppKey($value)
 * @method string getTargetValue()
 * @method $this withTargetValue($value)
 * @method string getTitle()
 * @method $this withTitle($value)
 * @method string getBody()
 * @method $this withBody($value)
 * @method string getJobKey()
 * @method $this withJobKey($value)
 * @method string getTarget()
 * @method $this withTarget($value)
 */
class PushMessageToAndroid extends Rpc
{
}

/**
 * @method string getAndroidNotificationBarType()
 * @method $this withAndroidNotificationBarType($value)
 * @method string getSmsSendPolicy()
 * @method $this withSmsSendPolicy($value)
 * @method string getAndroidExtParameters()
 * @method $this withAndroidExtParameters($value)
 * @method string getIOSBadge()
 * @method string getIOSBadgeAutoIncrement()
 * @method string getAndroidOpenType()
 * @method $this withAndroidOpenType($value)
 * @method string getTitle()
 * @method $this withTitle($value)
 * @method string getBody()
 * @method $this withBody($value)
 * @method string getDeviceType()
 * @method $this withDeviceType($value)
 * @method string getPushTime()
 * @method $this withPushTime($value)
 * @method string getSmsDelaySecs()
 * @method $this withSmsDelaySecs($value)
 * @method string getSendSpeed()
 * @method $this withSendSpeed($value)
 * @method string getAndroidPopupActivity()
 * @method $this withAndroidPopupActivity($value)
 * @method string getIOSRemindBody()
 * @method string getIOSExtParameters()
 * @method string getAndroidNotifyType()
 * @method $this withAndroidNotifyType($value)
 * @method string getAndroidPopupTitle()
 * @method $this withAndroidPopupTitle($value)
 * @method string getIOSMusic()
 * @method string getIOSApnsEnv()
 * @method string getIOSMutableContent()
 * @method string getAndroidNotificationBarPriority()
 * @method $this withAndroidNotificationBarPriority($value)
 * @method string getExpireTime()
 * @method $this withExpireTime($value)
 * @method string getSmsTemplateName()
 * @method $this withSmsTemplateName($value)
 * @method string getAndroidPopupBody()
 * @method $this withAndroidPopupBody($value)
 * @method string getIOSNotificationCategory()
 * @method string getStoreOffline()
 * @method $this withStoreOffline($value)
 * @method string getIOSSilentNotification()
 * @method string getSmsParams()
 * @method $this withSmsParams($value)
 * @method string getJobKey()
 * @method $this withJobKey($value)
 * @method string getTarget()
 * @method $this withTarget($value)
 * @method string getAndroidOpenUrl()
 * @method $this withAndroidOpenUrl($value)
 * @method string getAndroidNotificationChannel()
 * @method $this withAndroidNotificationChannel($value)
 * @method string getAndroidRemind()
 * @method $this withAndroidRemind($value)
 * @method string getAndroidActivity()
 * @method $this withAndroidActivity($value)
 * @method string getAndroidXiaoMiNotifyBody()
 * @method $this withAndroidXiaoMiNotifyBody($value)
 * @method string getIOSSubtitle()
 * @method string getSmsSignName()
 * @method $this withSmsSignName($value)
 * @method string getIOSRemind()
 * @method string getAppKey()
 * @method $this withAppKey($value)
 * @method string getTargetValue()
 * @method $this withTargetValue($value)
 * @method string getAndroidMusic()
 * @method $this withAndroidMusic($value)
 * @method string getAndroidXiaoMiActivity()
 * @method $this withAndroidXiaoMiActivity($value)
 * @method string getAndroidXiaoMiNotifyTitle()
 * @method $this withAndroidXiaoMiNotifyTitle($value)
 * @method string getPushType()
 * @method $this withPushType($value)
 */
class Push extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withIOSBadge($value)
    {
        $this->data['IOSBadge'] = $value;
        $this->options['query']['iOSBadge'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withIOSBadgeAutoIncrement($value)
    {
        $this->data['IOSBadgeAutoIncrement'] = $value;
        $this->options['query']['iOSBadgeAutoIncrement'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withIOSRemindBody($value)
    {
        $this->data['IOSRemindBody'] = $value;
        $this->options['query']['iOSRemindBody'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withIOSExtParameters($value)
    {
        $this->data['IOSExtParameters'] = $value;
        $this->options['query']['iOSExtParameters'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withIOSMusic($value)
    {
        $this->data['IOSMusic'] = $value;
        $this->options['query']['iOSMusic'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withIOSApnsEnv($value)
    {
        $this->data['IOSApnsEnv'] = $value;
        $this->options['query']['iOSApnsEnv'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withIOSMutableContent($value)
    {
        $this->data['IOSMutableContent'] = $value;
        $this->options['query']['iOSMutableContent'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withIOSNotificationCategory($value)
    {
        $this->data['IOSNotificationCategory'] = $value;
        $this->options['query']['iOSNotificationCategory'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withIOSSilentNotification($value)
    {
        $this->data['IOSSilentNotification'] = $value;
        $this->options['query']['iOSSilentNotification'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withIOSSubtitle($value)
    {
        $this->data['IOSSubtitle'] = $value;
        $this->options['query']['iOSSubtitle'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withIOSRemind($value)
    {
        $this->data['IOSRemind'] = $value;
        $this->options['query']['iOSRemind'] = $value;

        return $this;
    }
}

/**
 * @method string getAppKey()
 * @method $this withAppKey($value)
 */
class ListTags extends Rpc
{
}

class ListSummaryApps extends Rpc
{
}

/**
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getAppKey()
 * @method $this withAppKey($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getPage()
 * @method $this withPage($value)
 * @method string getPushType()
 * @method $this withPushType($value)
 */
class ListPushRecords extends Rpc
{
}

/**
 * @method string getTagName()
 * @method $this withTagName($value)
 * @method string getClientKey()
 * @method $this withClientKey($value)
 * @method string getAppKey()
 * @method $this withAppKey($value)
 * @method string getKeyType()
 * @method $this withKeyType($value)
 */
class BindTag extends Rpc
{
}

/**
 * @method string getAliasName()
 * @method $this withAliasName($value)
 * @method string getAppKey()
 * @method $this withAppKey($value)
 * @method string getDeviceId()
 * @method $this withDeviceId($value)
 */
class BindAlias extends Rpc
{
}

/**
 * @method string getMessageId()
 * @method $this withMessageId($value)
 * @method string getAppKey()
 * @method $this withAppKey($value)
 */
class CancelPush extends Rpc
{
}
