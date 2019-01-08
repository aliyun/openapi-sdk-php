<?php

namespace AlibabaCloud\Baas\V20180731;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of CreateBlockchainApply
 *
 * @method string getSize()
 * @method string getMachineNum()
 * @method string getLiveTime()
 * @method string getBizid()
 */
class CreateBlockchainApply extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'Baas';

    /**
     * @var string
     */
    public $version = '2018-07-31';

    /**
     * @var string
     */
    public $action = 'CreateBlockchainApply';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @param string $size
     *
     * @return $this
     */
    public function withSize($size)
    {
        $this->data['Size'] = $size;
        $this->options['query']['Size'] = $size;

        return $this;
    }

    /**
     * @param string $machineNum
     *
     * @return $this
     */
    public function withMachineNum($machineNum)
    {
        $this->data['MachineNum'] = $machineNum;
        $this->options['query']['MachineNum'] = $machineNum;

        return $this;
    }

    /**
     * @param string $liveTime
     *
     * @return $this
     */
    public function withLiveTime($liveTime)
    {
        $this->data['LiveTime'] = $liveTime;
        $this->options['query']['LiveTime'] = $liveTime;

        return $this;
    }

    /**
     * @param string $bizid
     *
     * @return $this
     */
    public function withBizid($bizid)
    {
        $this->data['Bizid'] = $bizid;
        $this->options['query']['Bizid'] = $bizid;

        return $this;
    }
}
