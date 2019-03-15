<?php

namespace AlibabaCloud\BssOpenApi\V20171214;

use AlibabaCloud\Rpc;

/**
 * @method string getServicePeriodQuantity()
 * @method $this withServicePeriodQuantity($value)
 * @method string getProductCode()
 * @method $this withProductCode($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getQuantity()
 * @method $this withQuantity($value)
 * @method string getServicePeriodUnit()
 * @method $this withServicePeriodUnit($value)
 * @method string getSubscriptionType()
 * @method $this withSubscriptionType($value)
 * @method array getModuleList()
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getRegion()
 * @method $this withRegion($value)
 * @method string getOrderType()
 * @method $this withOrderType($value)
 * @method string getProductType()
 * @method $this withProductType($value)
 */
class GetSubscriptionPrice extends Rpc
{
    public $product = 'BssOpenApi';

    public $version = '2017-12-14';

    public $method = 'POST';

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
}
