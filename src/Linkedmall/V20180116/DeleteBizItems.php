<?php

namespace AlibabaCloud\Linkedmall\V20180116;

use AlibabaCloud\Rpc;

/**
 * Api DeleteBizItems
 *
 * @method string getBizId()
 * @method array getItemIdList()
 * @method string getSubBizId()
 */
class DeleteBizItems extends Rpc
{
    public $product = 'linkedmall';

    public $version = '2018-01-16';

    public $method = 'POST';

    public $serviceCode = 'linkedmall';

    /**
     * @param string $bizId
     *
     * @return $this
     */
    public function withBizId($bizId)
    {
        $this->data['BizId'] = $bizId;
        $this->options['query']['BizId'] = $bizId;

        return $this;
    }

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

    /**
     * @param string $subBizId
     *
     * @return $this
     */
    public function withSubBizId($subBizId)
    {
        $this->data['SubBizId'] = $subBizId;
        $this->options['query']['SubBizId'] = $subBizId;

        return $this;
    }
}
