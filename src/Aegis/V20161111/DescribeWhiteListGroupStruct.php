<?php

namespace AlibabaCloud\Aegis\V20161111;

use AlibabaCloud\Rpc;

/**
 * Api DescribeWhiteListGroupStruct
 *
 * @method string getNeedMachineNum()
 * @method string getSourceIp()
 * @method string getLang()
 */
class DescribeWhiteListGroupStruct extends Rpc
{
    public $product = 'aegis';

    public $version = '2016-11-11';

    public $method = 'POST';

    public $serviceCode = 'vipaegis';

    /**
     * @param string $needMachineNum
     *
     * @return $this
     */
    public function withNeedMachineNum($needMachineNum)
    {
        $this->data['NeedMachineNum'] = $needMachineNum;
        $this->options['query']['NeedMachineNum'] = $needMachineNum;

        return $this;
    }

    /**
     * @param string $sourceIp
     *
     * @return $this
     */
    public function withSourceIp($sourceIp)
    {
        $this->data['SourceIp'] = $sourceIp;
        $this->options['query']['SourceIp'] = $sourceIp;

        return $this;
    }

    /**
     * @param string $lang
     *
     * @return $this
     */
    public function withLang($lang)
    {
        $this->data['Lang'] = $lang;
        $this->options['query']['Lang'] = $lang;

        return $this;
    }
}
