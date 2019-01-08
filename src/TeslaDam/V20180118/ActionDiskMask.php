<?php

namespace AlibabaCloud\TeslaDam\V20180118;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of ActionDiskMask
 *
 * @method string getOp()
 * @method string getDiskMount()
 * @method string getIp()
 */
class ActionDiskMask extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'TeslaDam';

    /**
     * @var string
     */
    public $version = '2018-01-18';

    /**
     * @var string
     */
    public $action = 'ActionDiskMask';

    /**
     * @param string $op
     *
     * @return $this
     */
    public function withOp($op)
    {
        $this->data['Op'] = $op;
        $this->options['query']['Op'] = $op;

        return $this;
    }

    /**
     * @param string $diskMount
     *
     * @return $this
     */
    public function withDiskMount($diskMount)
    {
        $this->data['DiskMount'] = $diskMount;
        $this->options['query']['DiskMount'] = $diskMount;

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
}
