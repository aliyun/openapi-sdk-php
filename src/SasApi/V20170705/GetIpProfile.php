<?php

namespace AlibabaCloud\SasApi\V20170705;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of GetIpProfile
 *
 * @method string getDeviceIdMd5()
 * @method string getCarrier()
 * @method string getOs()
 * @method string getRequestUrl()
 * @method string getIp()
 * @method string getUserAgent()
 * @method string getConnectionType()
 * @method string getSensType()
 * @method string getDeviceType()
 * @method string getBusinessType()
 */
class GetIpProfile extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'Sas-api';

    /**
     * @var string
     */
    public $version = '2017-07-05';

    /**
     * @var string
     */
    public $action = 'GetIpProfile';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @deprecated deprecated since version 2.0, Use withDeviceIdMd5() instead.
     *
     * @param string $deviceIdMd5
     *
     * @return $this
     */
    public function setDeviceIdMd5($deviceIdMd5)
    {
        return $this->withDeviceIdMd5($deviceIdMd5);
    }

    /**
     * @param string $deviceIdMd5
     *
     * @return $this
     */
    public function withDeviceIdMd5($deviceIdMd5)
    {
        $this->data['DeviceIdMd5'] = $deviceIdMd5;
        $this->options['query']['DeviceIdMd5'] = $deviceIdMd5;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withCarrier() instead.
     *
     * @param string $carrier
     *
     * @return $this
     */
    public function setCarrier($carrier)
    {
        return $this->withCarrier($carrier);
    }

    /**
     * @param string $carrier
     *
     * @return $this
     */
    public function withCarrier($carrier)
    {
        $this->data['Carrier'] = $carrier;
        $this->options['query']['Carrier'] = $carrier;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withOs() instead.
     *
     * @param string $os
     *
     * @return $this
     */
    public function setOs($os)
    {
        return $this->withOs($os);
    }

    /**
     * @param string $os
     *
     * @return $this
     */
    public function withOs($os)
    {
        $this->data['Os'] = $os;
        $this->options['query']['Os'] = $os;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withRequestUrl() instead.
     *
     * @param string $requestUrl
     *
     * @return $this
     */
    public function setRequestUrl($requestUrl)
    {
        return $this->withRequestUrl($requestUrl);
    }

    /**
     * @param string $requestUrl
     *
     * @return $this
     */
    public function withRequestUrl($requestUrl)
    {
        $this->data['RequestUrl'] = $requestUrl;
        $this->options['query']['RequestUrl'] = $requestUrl;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withIp() instead.
     *
     * @param string $ip
     *
     * @return $this
     */
    public function setIp($ip)
    {
        return $this->withIp($ip);
    }

    /**
     * @param string $ip
     *
     * @return $this
     */
    public function withIp($ip)
    {
        $this->data['Ip'] = $ip;
        $this->options['query']['Ip'] = $ip;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withUserAgent() instead.
     *
     * @param string $userAgent
     *
     * @return $this
     */
    public function setUserAgent($userAgent)
    {
        return $this->withUserAgent($userAgent);
    }

    /**
     * @param string $userAgent
     *
     * @return $this
     */
    public function withUserAgent($userAgent)
    {
        $this->data['UserAgent'] = $userAgent;
        $this->options['query']['UserAgent'] = $userAgent;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withConnectionType() instead.
     *
     * @param string $connectionType
     *
     * @return $this
     */
    public function setConnectionType($connectionType)
    {
        return $this->withConnectionType($connectionType);
    }

    /**
     * @param string $connectionType
     *
     * @return $this
     */
    public function withConnectionType($connectionType)
    {
        $this->data['ConnectionType'] = $connectionType;
        $this->options['query']['ConnectionType'] = $connectionType;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withSensType() instead.
     *
     * @param string $sensType
     *
     * @return $this
     */
    public function setSensType($sensType)
    {
        return $this->withSensType($sensType);
    }

    /**
     * @param string $sensType
     *
     * @return $this
     */
    public function withSensType($sensType)
    {
        $this->data['SensType'] = $sensType;
        $this->options['query']['SensType'] = $sensType;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withDeviceType() instead.
     *
     * @param string $deviceType
     *
     * @return $this
     */
    public function setDeviceType($deviceType)
    {
        return $this->withDeviceType($deviceType);
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
     * @deprecated deprecated since version 2.0, Use withBusinessType() instead.
     *
     * @param string $businessType
     *
     * @return $this
     */
    public function setBusinessType($businessType)
    {
        return $this->withBusinessType($businessType);
    }

    /**
     * @param string $businessType
     *
     * @return $this
     */
    public function withBusinessType($businessType)
    {
        $this->data['BusinessType'] = $businessType;
        $this->options['query']['BusinessType'] = $businessType;

        return $this;
    }
}
