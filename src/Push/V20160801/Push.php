<?php

namespace AlibabaCloud\Push\V20160801;

use AlibabaCloud\Rpc;

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
    public $product = 'Push';

    public $version = '2016-08-01';

    public $method = 'POST';

    /**
     * @param string $iOSBadge
     *
     * @return $this
     */
    public function withIOSBadge($iOSBadge)
    {
        $this->data['IOSBadge'] = $iOSBadge;
        $this->options['query']['iOSBadge'] = $iOSBadge;

        return $this;
    }

    /**
     * @param string $iOSBadgeAutoIncrement
     *
     * @return $this
     */
    public function withIOSBadgeAutoIncrement($iOSBadgeAutoIncrement)
    {
        $this->data['IOSBadgeAutoIncrement'] = $iOSBadgeAutoIncrement;
        $this->options['query']['iOSBadgeAutoIncrement'] = $iOSBadgeAutoIncrement;

        return $this;
    }

    /**
     * @param string $iOSRemindBody
     *
     * @return $this
     */
    public function withIOSRemindBody($iOSRemindBody)
    {
        $this->data['IOSRemindBody'] = $iOSRemindBody;
        $this->options['query']['iOSRemindBody'] = $iOSRemindBody;

        return $this;
    }

    /**
     * @param string $iOSExtParameters
     *
     * @return $this
     */
    public function withIOSExtParameters($iOSExtParameters)
    {
        $this->data['IOSExtParameters'] = $iOSExtParameters;
        $this->options['query']['iOSExtParameters'] = $iOSExtParameters;

        return $this;
    }

    /**
     * @param string $iOSMusic
     *
     * @return $this
     */
    public function withIOSMusic($iOSMusic)
    {
        $this->data['IOSMusic'] = $iOSMusic;
        $this->options['query']['iOSMusic'] = $iOSMusic;

        return $this;
    }

    /**
     * @param string $iOSApnsEnv
     *
     * @return $this
     */
    public function withIOSApnsEnv($iOSApnsEnv)
    {
        $this->data['IOSApnsEnv'] = $iOSApnsEnv;
        $this->options['query']['iOSApnsEnv'] = $iOSApnsEnv;

        return $this;
    }

    /**
     * @param string $iOSMutableContent
     *
     * @return $this
     */
    public function withIOSMutableContent($iOSMutableContent)
    {
        $this->data['IOSMutableContent'] = $iOSMutableContent;
        $this->options['query']['iOSMutableContent'] = $iOSMutableContent;

        return $this;
    }

    /**
     * @param string $iOSNotificationCategory
     *
     * @return $this
     */
    public function withIOSNotificationCategory($iOSNotificationCategory)
    {
        $this->data['IOSNotificationCategory'] = $iOSNotificationCategory;
        $this->options['query']['iOSNotificationCategory'] = $iOSNotificationCategory;

        return $this;
    }

    /**
     * @param string $iOSSilentNotification
     *
     * @return $this
     */
    public function withIOSSilentNotification($iOSSilentNotification)
    {
        $this->data['IOSSilentNotification'] = $iOSSilentNotification;
        $this->options['query']['iOSSilentNotification'] = $iOSSilentNotification;

        return $this;
    }

    /**
     * @param string $iOSSubtitle
     *
     * @return $this
     */
    public function withIOSSubtitle($iOSSubtitle)
    {
        $this->data['IOSSubtitle'] = $iOSSubtitle;
        $this->options['query']['iOSSubtitle'] = $iOSSubtitle;

        return $this;
    }

    /**
     * @param string $iOSRemind
     *
     * @return $this
     */
    public function withIOSRemind($iOSRemind)
    {
        $this->data['IOSRemind'] = $iOSRemind;
        $this->options['query']['iOSRemind'] = $iOSRemind;

        return $this;
    }
}
