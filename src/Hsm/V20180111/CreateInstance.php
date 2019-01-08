<?php

namespace AlibabaCloud\Hsm\V20180111;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of CreateInstance
 *
 * @method string getPeriod()
 * @method string getPeriodUnit()
 * @method string getResourceOwnerId()
 * @method string getQuantity()
 * @method string getHsmDeviceType()
 * @method string getClientToken()
 * @method string getZoneId()
 * @method string getHsmOem()
 */
class CreateInstance extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'hsm';

    /**
     * @var string
     */
    public $version = '2018-01-11';

    /**
     * @var string
     */
    public $action = 'CreateInstance';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @var string
     */
    public $serviceCode = 'hsm';

    /**
     * @param string $period
     *
     * @return $this
     */
    public function withPeriod($period)
    {
        $this->data['Period'] = $period;
        $this->options['query']['Period'] = $period;

        return $this;
    }

    /**
     * @param string $periodUnit
     *
     * @return $this
     */
    public function withPeriodUnit($periodUnit)
    {
        $this->data['PeriodUnit'] = $periodUnit;
        $this->options['query']['PeriodUnit'] = $periodUnit;

        return $this;
    }

    /**
     * @param string $resourceOwnerId
     *
     * @return $this
     */
    public function withResourceOwnerId($resourceOwnerId)
    {
        $this->data['ResourceOwnerId'] = $resourceOwnerId;
        $this->options['query']['ResourceOwnerId'] = $resourceOwnerId;

        return $this;
    }

    /**
     * @param string $quantity
     *
     * @return $this
     */
    public function withQuantity($quantity)
    {
        $this->data['Quantity'] = $quantity;
        $this->options['query']['Quantity'] = $quantity;

        return $this;
    }

    /**
     * @param string $hsmDeviceType
     *
     * @return $this
     */
    public function withHsmDeviceType($hsmDeviceType)
    {
        $this->data['HsmDeviceType'] = $hsmDeviceType;
        $this->options['query']['HsmDeviceType'] = $hsmDeviceType;

        return $this;
    }

    /**
     * @param string $clientToken
     *
     * @return $this
     */
    public function withClientToken($clientToken)
    {
        $this->data['ClientToken'] = $clientToken;
        $this->options['query']['ClientToken'] = $clientToken;

        return $this;
    }

    /**
     * @param string $zoneId
     *
     * @return $this
     */
    public function withZoneId($zoneId)
    {
        $this->data['ZoneId'] = $zoneId;
        $this->options['query']['ZoneId'] = $zoneId;

        return $this;
    }

    /**
     * @param string $hsmOem
     *
     * @return $this
     */
    public function withHsmOem($hsmOem)
    {
        $this->data['HsmOem'] = $hsmOem;
        $this->options['query']['HsmOem'] = $hsmOem;

        return $this;
    }
}
