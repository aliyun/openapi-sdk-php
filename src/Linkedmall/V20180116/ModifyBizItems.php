<?php

namespace AlibabaCloud\Linkedmall\V20180116;

use AlibabaCloud\Rpc;

/**
 * Api ModifyBizItems
 *
 * @method string getBizId()
 * @method array getItemList()
 * @method string getSubBizId()
 */
class ModifyBizItems extends Rpc
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
     * @param array $itemList
     *
     * @return $this
     */
    public function withItemList(array $itemList)
    {
        $this->data['ItemList'] = $itemList;
        foreach ($itemList as $i => $iValue) {
            $this->options['query']['ItemList.' . ($i + 1) . '.ItemId'] = $itemList[$i]['ItemId'];
            foreach ($itemList[$i]['SkuLists'] as $j => $jValue) {
                $this->options['query']['ItemList.' . ($i + 1) . '.SkuList.' . ($j + 1)] = $jValue;
            }
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
