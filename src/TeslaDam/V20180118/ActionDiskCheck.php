<?php

namespace AlibabaCloud\TeslaDam\V20180118;

use AlibabaCloud\Rpc;

/**
 * Api ActionDiskCheck
 *
 * @method string getDiskMount()
 * @method string getIp()
 */
class ActionDiskCheck extends Rpc
{
    public $product = 'TeslaDam';

    public $version = '2018-01-18';

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
