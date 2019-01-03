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
     * @deprecated deprecated since version 2.0, Use withOp() instead.
     *
     * @param string $op
     *
     * @return $this
     */
    public function setOp($op)
    {
        return $this->withOp($op);
    }

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
     * @deprecated deprecated since version 2.0, Use withDiskMount() instead.
     *
     * @param string $diskMount
     *
     * @return $this
     */
    public function setDiskMount($diskMount)
    {
        return $this->withDiskMount($diskMount);
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
     * @deprecated deprecated since version 2.0, Use withIp() instead.
     *
     * @param string $ip
     *
     * @return $this
     */
    public function setIp($ip)
    {
        return $this->withIp($ip);
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
