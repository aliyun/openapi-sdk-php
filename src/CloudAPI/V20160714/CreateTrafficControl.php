<?php

namespace AlibabaCloud\CloudAPI\V20160714;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of CreateTrafficControl
 *
 * @method string getApiDefault()
 * @method string getSecurityToken()
 * @method string getTrafficControlName()
 * @method string getTrafficControlUnit()
 * @method string getDescription()
 * @method string getUserDefault()
 * @method string getAppDefault()
 */
class CreateTrafficControl extends RpcRequest
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
    public $action = 'CreateTrafficControl';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @var string
     */
    public $serviceCode = 'apigateway';

    /**
     * @param string $apiDefault
     *
     * @return $this
     */
    public function withApiDefault($apiDefault)
    {
        $this->data['ApiDefault'] = $apiDefault;
        $this->options['query']['ApiDefault'] = $apiDefault;

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
     * @param string $trafficControlName
     *
     * @return $this
     */
    public function withTrafficControlName($trafficControlName)
    {
        $this->data['TrafficControlName'] = $trafficControlName;
        $this->options['query']['TrafficControlName'] = $trafficControlName;

        return $this;
    }

    /**
     * @param string $trafficControlUnit
     *
     * @return $this
     */
    public function withTrafficControlUnit($trafficControlUnit)
    {
        $this->data['TrafficControlUnit'] = $trafficControlUnit;
        $this->options['query']['TrafficControlUnit'] = $trafficControlUnit;

        return $this;
    }

    /**
     * @param string $description
     *
     * @return $this
     */
    public function withDescription($description)
    {
        $this->data['Description'] = $description;
        $this->options['query']['Description'] = $description;

        return $this;
    }

    /**
     * @param string $userDefault
     *
     * @return $this
     */
    public function withUserDefault($userDefault)
    {
        $this->data['UserDefault'] = $userDefault;
        $this->options['query']['UserDefault'] = $userDefault;

        return $this;
    }

    /**
     * @param string $appDefault
     *
     * @return $this
     */
    public function withAppDefault($appDefault)
    {
        $this->data['AppDefault'] = $appDefault;
        $this->options['query']['AppDefault'] = $appDefault;

        return $this;
    }
}
