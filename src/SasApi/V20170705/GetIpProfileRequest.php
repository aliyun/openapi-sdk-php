<?php

namespace AlibabaCloud\SasApi\V20170705;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of GetIpProfileRequest
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
class GetIpProfileRequest extends RpcRequest
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
    public $action = 'GetIpProfileRequest';

    /**
     * @var string
     */
    public $method = 'POST';

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
