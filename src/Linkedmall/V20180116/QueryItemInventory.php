<?php

namespace AlibabaCloud\Linkedmall\V20180116;

use AlibabaCloud\Rpc;

/**
 * Api QueryItemInventory
 *
 * @method string getDivisionCode()
 * @method string getIp()
 * @method string getBizId()
 * @method array getItemList()
 */
class QueryItemInventory extends Rpc
{
    public $product = 'linkedmall';

    public $version = '2018-01-16';

    public $method = 'POST';

    public $serviceCode = 'linkedmall';

    /**
     * @param string $divisionCode
     *
     * @return $this
     */
    public function withDivisionCode($divisionCode)
    {
        $this->data['DivisionCode'] = $divisionCode;
        $this->options['query']['DivisionCode'] = $divisionCode;

        return $this;
    }

    /**
     * @param string $ip
     *
     * @return $this
     */
    public function withIp($ip)
    {
        $this->data['Ip'] = $ip;
        $this->options['query']['Ip'] = $ip;

        return $this;
    }

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
            foreach ($itemList[$i]['SkuIdLists'] as $j => $jValue) {
                $this->options['query']['ItemList.' . ($i + 1) . '.SkuIdList.' . ($j + 1)] = $jValue;
            }
        }

        return $this;
    }
}
