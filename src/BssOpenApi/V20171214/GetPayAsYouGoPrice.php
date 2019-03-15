<?php

namespace AlibabaCloud\BssOpenApi\V20171214;

use AlibabaCloud\Rpc;

/**
 * @method string getProductCode()
 * @method $this withProductCode($value)
 * @method string getSubscriptionType()
 * @method $this withSubscriptionType($value)
 * @method array getModuleList()
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getRegion()
 * @method $this withRegion($value)
 * @method string getProductType()
 * @method $this withProductType($value)
 */
class GetPayAsYouGoPrice extends Rpc
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
            $this->options['query']['ModuleList.' . ($i + 1) . '.PriceType'] = $moduleList[$i]['PriceType'];
            $this->options['query']['ModuleList.' . ($i + 1) . '.Config'] = $moduleList[$i]['Config'];
        }

        return $this;
    }
}
