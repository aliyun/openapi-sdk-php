<?php

namespace AlibabaCloud\Linkedmall\V20180116;

use AlibabaCloud\Rpc;

/**
 * @method array getLmOrderIdList()
 * @method string getBizId()
 * @method $this withBizId($value)
 */
class CancelOrder extends Rpc
{
    public $product = 'linkedmall';

    public $version = '2018-01-16';

    public $method = 'POST';

    public $serviceCode = 'linkedmall';

    /**
     * @param array $lmOrderIdList
     *
     * @return $this
     */
    public function withLmOrderIdList(array $lmOrderIdList)
    {
        $this->data['LmOrderIdList'] = $lmOrderIdList;
        foreach ($lmOrderIdList as $i => $iValue) {
            $this->options['query']['LmOrderIdList.' . ($i + 1)] = $iValue;
        }

        return $this;
    }
}
