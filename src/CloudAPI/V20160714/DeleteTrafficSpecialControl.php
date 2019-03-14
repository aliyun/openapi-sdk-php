<?php

namespace AlibabaCloud\CloudAPI\V20160714;

use AlibabaCloud\Rpc;

/**
 * Api DeleteTrafficSpecialControl
 *
 * @method string getTrafficControlId()
 * @method string getSpecialKey()
 * @method string getSecurityToken()
 * @method string getSpecialType()
 */
class DeleteTrafficSpecialControl extends Rpc
{
    public $product = 'CloudAPI';

    public $version = '2016-07-14';

    public $method = 'POST';

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
