<?php

namespace AlibabaCloud\Aegis\V20161111;

use AlibabaCloud\Rpc;

/**
 * Api ModifyAutoDelConfig
 *
 * @method string getSourceIp()
 * @method string getDays()
 */
class ModifyAutoDelConfig extends Rpc
{
    public $product = 'aegis';

    public $version = '2016-11-11';

    public $method = 'POST';

    public $serviceCode = 'vipaegis';

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
     * @param string $days
     *
     * @return $this
     */
    public function withDays($days)
    {
        $this->data['Days'] = $days;
        $this->options['query']['Days'] = $days;

        return $this;
    }
}
