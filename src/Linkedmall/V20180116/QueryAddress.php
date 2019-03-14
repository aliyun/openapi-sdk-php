<?php

namespace AlibabaCloud\Linkedmall\V20180116;

use AlibabaCloud\Rpc;

/**
 * Api QueryAddress
 *
 * @method string getIp()
 * @method string getBizId()
 * @method string getLevel3DivisionCode()
 */
class QueryAddress extends Rpc
{
    public $product = 'linkedmall';

    public $version = '2018-01-16';

    public $method = 'POST';

    public $serviceCode = 'linkedmall';

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
     * @param string $level3DivisionCode
     *
     * @return $this
     */
    public function withLevel3DivisionCode($level3DivisionCode)
    {
        $this->data['Level3DivisionCode'] = $level3DivisionCode;
        $this->options['query']['Level3DivisionCode'] = $level3DivisionCode;

        return $this;
    }
}
