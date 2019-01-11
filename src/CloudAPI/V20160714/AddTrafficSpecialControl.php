<?php

namespace AlibabaCloud\CloudAPI\V20160714;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of AddTrafficSpecialControl
 *
 * @method string getTrafficControlId()
 * @method string getSpecialKey()
 * @method string getSecurityToken()
 * @method string getTrafficValue()
 * @method string getSpecialType()
 */
class AddTrafficSpecialControl extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'CloudAPI';

    /**
     * @var string
     */
    public $version = '2016-07-14';

    /**
     * @var string
     */
    public $action = 'AddTrafficSpecialControl';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @var string
     */
    public $serviceCode = 'apigateway';

    /**
     * @param string $trafficControlId
     *
     * @return $this
     */
    public function withTrafficControlId($trafficControlId)
    {
        $this->data['TrafficControlId'] = $trafficControlId;
        $this->options['query']['TrafficControlId'] = $trafficControlId;

        return $this;
    }

    /**
     * @param string $specialKey
     *
     * @return $this
     */
    public function withSpecialKey($specialKey)
    {
        $this->data['SpecialKey'] = $specialKey;
        $this->options['query']['SpecialKey'] = $specialKey;

        return $this;
    }

    /**
     * @param string $securityToken
     *
     * @return $this
     */
    public function withSecurityToken($securityToken)
    {
        $this->data['SecurityToken'] = $securityToken;
        $this->options['query']['SecurityToken'] = $securityToken;

        return $this;
    }

    /**
     * @param string $trafficValue
     *
     * @return $this
     */
    public function withTrafficValue($trafficValue)
    {
        $this->data['TrafficValue'] = $trafficValue;
        $this->options['query']['TrafficValue'] = $trafficValue;

        return $this;
    }

    /**
     * @param string $specialType
     *
     * @return $this
     */
    public function withSpecialType($specialType)
    {
        $this->data['SpecialType'] = $specialType;
        $this->options['query']['SpecialType'] = $specialType;

        return $this;
    }
}
