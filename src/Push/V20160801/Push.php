<?php

namespace AlibabaCloud\Push\V20160801;

use AlibabaCloud\Rpc;

/**
 * Api Push
 *
 * @method string getAndroidNotificationBarType()
 * @method string getSmsSendPolicy()
 * @method string getAndroidExtParameters()
 * @method string getIOSBadge()
 * @method string getIOSBadgeAutoIncrement()
 * @method string getAndroidOpenType()
 * @method string getTitle()
 * @method string getBody()
 * @method string getDeviceType()
 * @method string getPushTime()
 * @method string getSmsDelaySecs()
 * @method string getSendSpeed()
 * @method string getAndroidPopupActivity()
 * @method string getIOSRemindBody()
 * @method string getIOSExtParameters()
 * @method string getAndroidNotifyType()
 * @method string getAndroidPopupTitle()
 * @method string getIOSMusic()
 * @method string getIOSApnsEnv()
 * @method string getIOSMutableContent()
 * @method string getAndroidNotificationBarPriority()
 * @method string getExpireTime()
 * @method string getSmsTemplateName()
 * @method string getAndroidPopupBody()
 * @method string getIOSNotificationCategory()
 * @method string getStoreOffline()
 * @method string getIOSSilentNotification()
 * @method string getSmsParams()
 * @method string getJobKey()
 * @method string getTarget()
 * @method string getAndroidOpenUrl()
 * @method string getAndroidNotificationChannel()
 * @method string getAndroidRemind()
 * @method string getAndroidActivity()
 * @method string getAndroidXiaoMiNotifyBody()
 * @method string getIOSSubtitle()
 * @method string getSmsSignName()
 * @method string getIOSRemind()
 * @method string getAppKey()
 * @method string getTargetValue()
 * @method string getAndroidMusic()
 * @method string getAndroidXiaoMiActivity()
 * @method string getAndroidXiaoMiNotifyTitle()
 * @method string getPushType()
 */
class Push extends Rpc
{
    public $product = 'Push';

    public $version = '2016-08-01';

    public $method = 'POST';

    /**
     * @param string $androidNotificationBarType
     *
     * @return $this
     */
    public function withAndroidNotificationBarType($androidNotificationBarType)
    {
        $this->data['AndroidNotificationBarType'] = $androidNotificationBarType;
        $this->options['query']['AndroidNotificationBarType'] = $androidNotificationBarType;

        return $this;
    }

    /**
     * @param string $smsSendPolicy
     *
     * @return $this
     */
    public function withSmsSendPolicy($smsSendPolicy)
    {
        $this->data['SmsSendPolicy'] = $smsSendPolicy;
        $this->options['query']['SmsSendPolicy'] = $smsSendPolicy;

        return $this;
    }

    /**
     * @param string $androidExtParameters
     *
     * @return $this
     */
    public function withAndroidExtParameters($androidExtParameters)
    {
        $this->data['AndroidExtParameters'] = $androidExtParameters;
        $this->options['query']['AndroidExtParameters'] = $androidExtParameters;

        return $this;
    }

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
     * @param string $androidOpenType
     *
     * @return $this
     */
    public function withAndroidOpenType($androidOpenType)
    {
        $this->data['AndroidOpenType'] = $androidOpenType;
        $this->options['query']['AndroidOpenType'] = $androidOpenType;

        return $this;
    }

    /**
     * @param string $title
     *
     * @return $this
     */
    public function withTitle($title)
    {
        $this->data['Title'] = $title;
        $this->options['query']['Title'] = $title;

        return $this;
    }

    /**
     * @param string $body
     *
     * @return $this
     */
    public function withBody($body)
    {
        $this->data['Body'] = $body;
        $this->options['query']['Body'] = $body;

        return $this;
    }

    /**
     * @param string $deviceType
     *
     * @return $this
     */
    public function withDeviceType($deviceType)
    {
        $this->data['DeviceType'] = $deviceType;
        $this->options['query']['DeviceType'] = $deviceType;

        return $this;
    }

    /**
     * @param string $pushTime
     *
     * @return $this
     */
    public function withPushTime($pushTime)
    {
        $this->data['PushTime'] = $pushTime;
        $this->options['query']['PushTime'] = $pushTime;

        return $this;
    }

    /**
     * @param string $smsDelaySecs
     *
     * @return $this
     */
    public function withSmsDelaySecs($smsDelaySecs)
    {
        $this->data['SmsDelaySecs'] = $smsDelaySecs;
        $this->options['query']['SmsDelaySecs'] = $smsDelaySecs;

        return $this;
    }

    /**
     * @param string $sendSpeed
     *
     * @return $this
     */
    public function withSendSpeed($sendSpeed)
    {
        $this->data['SendSpeed'] = $sendSpeed;
        $this->options['query']['SendSpeed'] = $sendSpeed;

        return $this;
    }

    /**
     * @param string $androidPopupActivity
     *
     * @return $this
     */
    public function withAndroidPopupActivity($androidPopupActivity)
    {
        $this->data['AndroidPopupActivity'] = $androidPopupActivity;
        $this->options['query']['AndroidPopupActivity'] = $androidPopupActivity;

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
     * @param string $androidNotifyType
     *
     * @return $this
     */
    public function withAndroidNotifyType($androidNotifyType)
    {
        $this->data['AndroidNotifyType'] = $androidNotifyType;
        $this->options['query']['AndroidNotifyType'] = $androidNotifyType;

        return $this;
    }

    /**
     * @param string $androidPopupTitle
     *
     * @return $this
     */
    public function withAndroidPopupTitle($androidPopupTitle)
    {
        $this->data['AndroidPopupTitle'] = $androidPopupTitle;
        $this->options['query']['AndroidPopupTitle'] = $androidPopupTitle;

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
     * @param string $androidNotificationBarPriority
     *
     * @return $this
     */
    public function withAndroidNotificationBarPriority($androidNotificationBarPriority)
    {
        $this->data['AndroidNotificationBarPriority'] = $androidNotificationBarPriority;
        $this->options['query']['AndroidNotificationBarPriority'] = $androidNotificationBarPriority;

        return $this;
    }

    /**
     * @param string $expireTime
     *
     * @return $this
     */
    public function withExpireTime($expireTime)
    {
        $this->data['ExpireTime'] = $expireTime;
        $this->options['query']['ExpireTime'] = $expireTime;

        return $this;
    }

    /**
     * @param string $smsTemplateName
     *
     * @return $this
     */
    public function withSmsTemplateName($smsTemplateName)
    {
        $this->data['SmsTemplateName'] = $smsTemplateName;
        $this->options['query']['SmsTemplateName'] = $smsTemplateName;

        return $this;
    }

    /**
     * @param string $androidPopupBody
     *
     * @return $this
     */
    public function withAndroidPopupBody($androidPopupBody)
    {
        $this->data['AndroidPopupBody'] = $androidPopupBody;
        $this->options['query']['AndroidPopupBody'] = $androidPopupBody;

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
     * @param string $storeOffline
     *
     * @return $this
     */
    public function withStoreOffline($storeOffline)
    {
        $this->data['StoreOffline'] = $storeOffline;
        $this->options['query']['StoreOffline'] = $storeOffline;

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
     * @param string $smsParams
     *
     * @return $this
     */
    public function withSmsParams($smsParams)
    {
        $this->data['SmsParams'] = $smsParams;
        $this->options['query']['SmsParams'] = $smsParams;

        return $this;
    }

    /**
     * @param string $jobKey
     *
     * @return $this
     */
    public function withJobKey($jobKey)
    {
        $this->data['JobKey'] = $jobKey;
        $this->options['query']['JobKey'] = $jobKey;

        return $this;
    }

    /**
     * @param string $target
     *
     * @return $this
     */
    public function withTarget($target)
    {
        $this->data['Target'] = $target;
        $this->options['query']['Target'] = $target;

        return $this;
    }

    /**
     * @param string $androidOpenUrl
     *
     * @return $this
     */
    public function withAndroidOpenUrl($androidOpenUrl)
    {
        $this->data['AndroidOpenUrl'] = $androidOpenUrl;
        $this->options['query']['AndroidOpenUrl'] = $androidOpenUrl;

        return $this;
    }

    /**
     * @param string $androidNotificationChannel
     *
     * @return $this
     */
    public function withAndroidNotificationChannel($androidNotificationChannel)
    {
        $this->data['AndroidNotificationChannel'] = $androidNotificationChannel;
        $this->options['query']['AndroidNotificationChannel'] = $androidNotificationChannel;

        return $this;
    }

    /**
     * @param string $androidRemind
     *
     * @return $this
     */
    public function withAndroidRemind($androidRemind)
    {
        $this->data['AndroidRemind'] = $androidRemind;
        $this->options['query']['AndroidRemind'] = $androidRemind;

        return $this;
    }

    /**
     * @param string $androidActivity
     *
     * @return $this
     */
    public function withAndroidActivity($androidActivity)
    {
        $this->data['AndroidActivity'] = $androidActivity;
        $this->options['query']['AndroidActivity'] = $androidActivity;

        return $this;
    }

    /**
     * @param string $androidXiaoMiNotifyBody
     *
     * @return $this
     */
    public function withAndroidXiaoMiNotifyBody($androidXiaoMiNotifyBody)
    {
        $this->data['AndroidXiaoMiNotifyBody'] = $androidXiaoMiNotifyBody;
        $this->options['query']['AndroidXiaoMiNotifyBody'] = $androidXiaoMiNotifyBody;

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
     * @param string $smsSignName
     *
     * @return $this
     */
    public function withSmsSignName($smsSignName)
    {
        $this->data['SmsSignName'] = $smsSignName;
        $this->options['query']['SmsSignName'] = $smsSignName;

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

    /**
     * @param string $appKey
     *
     * @return $this
     */
    public function withAppKey($appKey)
    {
        $this->data['AppKey'] = $appKey;
        $this->options['query']['AppKey'] = $appKey;

        return $this;
    }

    /**
     * @param string $targetValue
     *
     * @return $this
     */
    public function withTargetValue($targetValue)
    {
        $this->data['TargetValue'] = $targetValue;
        $this->options['query']['TargetValue'] = $targetValue;

        return $this;
    }

    /**
     * @param string $androidMusic
     *
     * @return $this
     */
    public function withAndroidMusic($androidMusic)
    {
        $this->data['AndroidMusic'] = $androidMusic;
        $this->options['query']['AndroidMusic'] = $androidMusic;

        return $this;
    }

    /**
     * @param string $androidXiaoMiActivity
     *
     * @return $this
     */
    public function withAndroidXiaoMiActivity($androidXiaoMiActivity)
    {
        $this->data['AndroidXiaoMiActivity'] = $androidXiaoMiActivity;
        $this->options['query']['AndroidXiaoMiActivity'] = $androidXiaoMiActivity;

        return $this;
    }

    /**
     * @param string $androidXiaoMiNotifyTitle
     *
     * @return $this
     */
    public function withAndroidXiaoMiNotifyTitle($androidXiaoMiNotifyTitle)
    {
        $this->data['AndroidXiaoMiNotifyTitle'] = $androidXiaoMiNotifyTitle;
        $this->options['query']['AndroidXiaoMiNotifyTitle'] = $androidXiaoMiNotifyTitle;

        return $this;
    }

    /**
     * @param string $pushType
     *
     * @return $this
     */
    public function withPushType($pushType)
    {
        $this->data['PushType'] = $pushType;
        $this->options['query']['PushType'] = $pushType;

        return $this;
    }
}
