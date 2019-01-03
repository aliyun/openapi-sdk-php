<?php

namespace AlibabaCloud\Cloudauth\V20180916;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of ModifyDeviceInfo
 *
 * @method string getUserDeviceId()
 * @method string getBizType()
 * @method string getDuration()
 * @method string getExpiredDay()
 * @method string getSourceIp()
 * @method string getLang()
 * @method string getDeviceId()
 */
class ModifyDeviceInfo extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'Cloudauth';

    /**
     * @var string
     */
    public $version = '2018-09-16';

    /**
     * @var string
     */
    public $action = 'ModifyDeviceInfo';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @var string
     */
    public $serviceCode = 'cloudauth';

    /**
     * @deprecated deprecated since version 2.0, Use withUserDeviceId() instead.
     *
     * @param string $userDeviceId
     *
     * @return $this
     */
    public function setUserDeviceId($userDeviceId)
    {
        return $this->withUserDeviceId($userDeviceId);
    }

    /**
     * @param string $userDeviceId
     *
     * @return $this
     */
    public function withUserDeviceId($userDeviceId)
    {
        $this->data['UserDeviceId'] = $userDeviceId;
        $this->options['query']['UserDeviceId'] = $userDeviceId;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withBizType() instead.
     *
     * @param string $bizType
     *
     * @return $this
     */
    public function setBizType($bizType)
    {
        return $this->withBizType($bizType);
    }

    /**
     * @param string $bizType
     *
     * @return $this
     */
    public function withBizType($bizType)
    {
        $this->data['BizType'] = $bizType;
        $this->options['query']['BizType'] = $bizType;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withDuration() instead.
     *
     * @param string $duration
     *
     * @return $this
     */
    public function setDuration($duration)
    {
        return $this->withDuration($duration);
    }

    /**
     * @param string $duration
     *
     * @return $this
     */
    public function withDuration($duration)
    {
        $this->data['Duration'] = $duration;
        $this->options['query']['Duration'] = $duration;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withExpiredDay() instead.
     *
     * @param string $expiredDay
     *
     * @return $this
     */
    public function setExpiredDay($expiredDay)
    {
        return $this->withExpiredDay($expiredDay);
    }

    /**
     * @param string $expiredDay
     *
     * @return $this
     */
    public function withExpiredDay($expiredDay)
    {
        $this->data['ExpiredDay'] = $expiredDay;
        $this->options['query']['ExpiredDay'] = $expiredDay;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withSourceIp() instead.
     *
     * @param string $sourceIp
     *
     * @return $this
     */
    public function setSourceIp($sourceIp)
    {
        return $this->withSourceIp($sourceIp);
    }

    /**
     * @param string $sourceIp
     *
     * @return $this
     */
    public function withSourceIp($sourceIp)
    {
        $this->data['SourceIp'] = $sourceIp;
        $this->options['query']['SourceIp'] = $sourceIp;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withLang() instead.
     *
     * @param string $lang
     *
     * @return $this
     */
    public function setLang($lang)
    {
        return $this->withLang($lang);
    }

    /**
     * @param string $lang
     *
     * @return $this
     */
    public function withLang($lang)
    {
        $this->data['Lang'] = $lang;
        $this->options['query']['Lang'] = $lang;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withDeviceId() instead.
     *
     * @param string $deviceId
     *
     * @return $this
     */
    public function setDeviceId($deviceId)
    {
        return $this->withDeviceId($deviceId);
    }

    /**
     * @param string $deviceId
     *
     * @return $this
     */
    public function withDeviceId($deviceId)
    {
        $this->data['DeviceId'] = $deviceId;
        $this->options['query']['DeviceId'] = $deviceId;

        return $this;
    }
}
