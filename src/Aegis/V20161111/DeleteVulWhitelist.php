<?php

namespace AlibabaCloud\Aegis\V20161111;

use AlibabaCloud\Rpc;

/**
 * Api DeleteVulWhitelist
 *
 * @method string getSourceIp()
 * @method string getWhitelist()
 */
class DeleteVulWhitelist extends Rpc
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
     * @param string $whitelist
     *
     * @return $this
     */
    public function withWhitelist($whitelist)
    {
        $this->data['Whitelist'] = $whitelist;
        $this->options['query']['Whitelist'] = $whitelist;

        return $this;
    }
}
