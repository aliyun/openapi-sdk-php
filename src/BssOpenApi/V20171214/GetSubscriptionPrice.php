<?php

namespace AlibabaCloud\BssOpenApi\V20171214;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of GetSubscriptionPrice
 *
 * @method string getServicePeriodQuantity()
 * @method string getProductCode()
 * @method string getInstanceId()
 * @method string getQuantity()
 * @method string getServicePeriodUnit()
 * @method string getSubscriptionType()
 * @method array getModuleList()
 * @method string getOwnerId()
 * @method string getRegion()
 * @method string getOrderType()
 * @method string getProductType()
 */
class GetSubscriptionPrice extends RpcRequest
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
    public $action = 'GetSubscriptionPrice';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @deprecated deprecated since version 2.0, Use withServicePeriodQuantity() instead.
     *
     * @param string $servicePeriodQuantity
     *
     * @return $this
     */
    public function setServicePeriodQuantity($servicePeriodQuantity)
    {
        return $this->withServicePeriodQuantity($servicePeriodQuantity);
    }

    /**
     * @param string $servicePeriodQuantity
     *
     * @return $this
     */
    public function withServicePeriodQuantity($servicePeriodQuantity)
    {
        $this->data['ServicePeriodQuantity'] = $servicePeriodQuantity;
        $this->options['query']['ServicePeriodQuantity'] = $servicePeriodQuantity;

        return $this;
    }

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
     * @deprecated deprecated since version 2.0, Use withQuantity() instead.
     *
     * @param string $quantity
     *
     * @return $this
     */
    public function setQuantity($quantity)
    {
        return $this->withQuantity($quantity);
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
     * @deprecated deprecated since version 2.0, Use withServicePeriodUnit() instead.
     *
     * @param string $servicePeriodUnit
     *
     * @return $this
     */
    public function setServicePeriodUnit($servicePeriodUnit)
    {
        return $this->withServicePeriodUnit($servicePeriodUnit);
    }

    /**
     * @param string $servicePeriodUnit
     *
     * @return $this
     */
    public function withServicePeriodUnit($servicePeriodUnit)
    {
        $this->data['ServicePeriodUnit'] = $servicePeriodUnit;
        $this->options['query']['ServicePeriodUnit'] = $servicePeriodUnit;

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
     * @deprecated deprecated since version 2.0, Use getModuleList() instead.
     *
     * @return array
     */
    public function getModuleLists()
    {
        return $this->getModuleList();
    }

    /**
     * @deprecated deprecated since version 2.0, Use withModuleList() instead.
     *
     * @param array $moduleLists
     *
     * @return $this
     */
    public function setModuleLists(array $moduleLists)
    {
        return $this->withModuleList($moduleLists);
    }

    /**
     * @param array $moduleList
     *
     * @return $this
     */
    public function withModuleList(array $moduleList)
    {
        $this->data['ModuleList'] = $moduleList;
        foreach ($moduleList as $i => $iValue) {
            $this->options['query']['ModuleList.' . ($i + 1) . '.ModuleCode'] = $moduleList[$i]['ModuleCode'];
            $this->options['query']['ModuleList.' . ($i + 1) . '.ModuleStatus'] = $moduleList[$i]['ModuleStatus'];
            $this->options['query']['ModuleList.' . ($i + 1) . '.Tag'] = $moduleList[$i]['Tag'];
            $this->options['query']['ModuleList.' . ($i + 1) . '.Config'] = $moduleList[$i]['Config'];
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
     * @deprecated deprecated since version 2.0, Use withRegion() instead.
     *
     * @param string $region
     *
     * @return $this
     */
    public function setRegion($region)
    {
        return $this->withRegion($region);
    }

    /**
     * @param string $region
     *
     * @return $this
     */
    public function withRegion($region)
    {
        $this->data['Region'] = $region;
        $this->options['query']['Region'] = $region;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withOrderType() instead.
     *
     * @param string $orderType
     *
     * @return $this
     */
    public function setOrderType($orderType)
    {
        return $this->withOrderType($orderType);
    }

    /**
     * @param string $orderType
     *
     * @return $this
     */
    public function withOrderType($orderType)
    {
        $this->data['OrderType'] = $orderType;
        $this->options['query']['OrderType'] = $orderType;

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
