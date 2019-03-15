<?php

namespace AlibabaCloud\BssOpenApi\V20171214;

use AlibabaCloud\Rpc;

/**
 * @method string getProductCode()
 * @method $this withProductCode($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getSubscriptionType()
 * @method $this withSubscriptionType($value)
 * @method string getModifyType()
 * @method $this withModifyType($value)
 * @method array getParameter()
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getProductType()
 * @method $this withProductType($value)
 */
class ModifyInstance extends Rpc
{
    public $product = 'BssOpenApi';

    public $version = '2017-12-14';

    public $method = 'POST';

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
}
