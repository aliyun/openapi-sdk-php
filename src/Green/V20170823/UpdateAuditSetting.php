<?php

namespace AlibabaCloud\Green\V20170823;

use AlibabaCloud\Rpc;

/**
 * Api UpdateAuditSetting
 *
 * @method string getSourceIp()
 * @method string getSeed()
 * @method string getCallback()
 */
class UpdateAuditSetting extends Rpc
{
    public $product = 'Green';

    public $version = '2017-08-23';

    public $method = 'POST';

    public $serviceCode = 'green';

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
     * @param string $seed
     *
     * @return $this
     */
    public function withSeed($seed)
    {
        $this->data['Seed'] = $seed;
        $this->options['query']['Seed'] = $seed;

        return $this;
    }

    /**
     * @param string $callback
     *
     * @return $this
     */
    public function withCallback($callback)
    {
        $this->data['Callback'] = $callback;
        $this->options['query']['Callback'] = $callback;

        return $this;
    }
}
