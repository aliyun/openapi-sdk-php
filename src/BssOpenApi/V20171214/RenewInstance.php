<?php

namespace AlibabaCloud\BssOpenApi\V20171214;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of RenewInstance
 *
 * @method string getProductCode()
 * @method string getInstanceId()
 * @method string getClientToken()
 * @method string getRenewPeriod()
 * @method string getOwnerId()
 * @method string getProductType()
 */
class RenewInstance extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'BssOpenApi';

    /**
     * @var string
     */
    public $version = '2017-12-14';

    /**
     * @var string
     */
    public $action = 'RenewInstance';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @param string $productCode
     *
     * @return $this
     */
    public function withProductCode($productCode)
    {
        $this->data['ProductCode'] = $productCode;
        $this->options['query']['ProductCode'] = $productCode;

        return $this;
    }

    /**
     * @param string $instanceId
     *
     * @return $this
     */
    public function withInstanceId($instanceId)
    {
        $this->data['InstanceId'] = $instanceId;
        $this->options['query']['InstanceId'] = $instanceId;

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
     * @param string $renewPeriod
     *
     * @return $this
     */
    public function withRenewPeriod($renewPeriod)
    {
        $this->data['RenewPeriod'] = $renewPeriod;
        $this->options['query']['RenewPeriod'] = $renewPeriod;

        return $this;
    }

    /**
     * @param string $ownerId
     *
     * @return $this
     */
    public function withOwnerId($ownerId)
    {
        $this->data['OwnerId'] = $ownerId;
        $this->options['query']['OwnerId'] = $ownerId;

        return $this;
    }

    /**
     * @param string $productType
     *
     * @return $this
     */
    public function withProductType($productType)
    {
        $this->data['ProductType'] = $productType;
        $this->options['query']['ProductType'] = $productType;

        return $this;
    }
}
