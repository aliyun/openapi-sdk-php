<?php

namespace AlibabaCloud\Linkedmall\V20180116;

use AlibabaCloud\Rpc;

/**
 * @method string getBizId()
 * @method $this withBizId($value)
 * @method array getItemIdList()
 * @method string getSubBizId()
 * @method $this withSubBizId($value)
 */
class DeleteBizItems extends Rpc
{
    public $product = 'linkedmall';

    public $version = '2018-01-16';

    public $method = 'POST';

    public $serviceCode = 'linkedmall';

    /**
     * @param array $itemIdList
     *
     * @return $this
     */
    public function withItemIdList(array $itemIdList)
    {
        $this->data['ItemIdList'] = $itemIdList;
        foreach ($itemIdList as $i => $iValue) {
            $this->options['query']['ItemIdList.' . ($i + 1)] = $iValue;
        }

        return $this;
    }
}
