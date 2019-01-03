<?php

namespace AlibabaCloud\BssOpenApi\V20171214;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of ModifyInstance
 *
 * @method string getProductCode()
 * @method string getInstanceId()
 * @method string getSubscriptionType()
 * @method string getModifyType()
 * @method array getParameter()
 * @method string getOwnerId()
 * @method string getProductType()
 */
class ModifyInstance extends RpcRequest
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
    public $action = 'ModifyInstance';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @deprecated deprecated since version 2.0, Use withProductCode() instead.
     *
     * @param string $productCode
     *
     * @return $this
     */
    public function setProductCode($productCode)
    {
        return $this->withProductCode($productCode);
    }

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
     * @deprecated deprecated since version 2.0, Use withInstanceId() instead.
     *
     * @param string $instanceId
     *
     * @return $this
     */
    public function setInstanceId($instanceId)
    {
        return $this->withInstanceId($instanceId);
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
     * @deprecated deprecated since version 2.0, Use withSubscriptionType() instead.
     *
     * @param string $subscriptionType
     *
     * @return $this
     */
    public function setSubscriptionType($subscriptionType)
    {
        return $this->withSubscriptionType($subscriptionType);
    }

    /**
     * @param string $subscriptionType
     *
     * @return $this
     */
    public function withSubscriptionType($subscriptionType)
    {
        $this->data['SubscriptionType'] = $subscriptionType;
        $this->options['query']['SubscriptionType'] = $subscriptionType;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withModifyType() instead.
     *
     * @param string $modifyType
     *
     * @return $this
     */
    public function setModifyType($modifyType)
    {
        return $this->withModifyType($modifyType);
    }

    /**
     * @param string $modifyType
     *
     * @return $this
     */
    public function withModifyType($modifyType)
    {
        $this->data['ModifyType'] = $modifyType;
        $this->options['query']['ModifyType'] = $modifyType;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use getParameter() instead.
     *
     * @return array
     */
    public function getParameters()
    {
        return $this->getParameter();
    }

    /**
     * @deprecated deprecated since version 2.0, Use withParameter() instead.
     *
     * @param array $parameters
     *
     * @return $this
     */
    public function setParameters(array $parameters)
    {
        return $this->withParameter($parameters);
    }

    /**
     * @param array $parameter
     *
     * @return $this
     */
    public function withParameter(array $parameter)
    {
        $this->data['Parameter'] = $parameter;
        foreach ($parameter as $i => $iValue) {
            $this->options['query']['Parameter.' . ($i + 1) . '.Code'] = $parameter[$i]['Code'];
            $this->options['query']['Parameter.' . ($i + 1) . '.Value'] = $parameter[$i]['Value'];
        }

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withOwnerId() instead.
     *
     * @param string $ownerId
     *
     * @return $this
     */
    public function setOwnerId($ownerId)
    {
        return $this->withOwnerId($ownerId);
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
     * @deprecated deprecated since version 2.0, Use withProductType() instead.
     *
     * @param string $productType
     *
     * @return $this
     */
    public function setProductType($productType)
    {
        return $this->withProductType($productType);
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
