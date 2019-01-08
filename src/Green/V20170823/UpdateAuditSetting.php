<?php

namespace AlibabaCloud\Green\V20170823;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of UpdateAuditSetting
 *
 * @method string getSourceIp()
 * @method string getSeed()
 * @method string getCallback()
 */
class UpdateAuditSetting extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'Green';

    /**
     * @var string
     */
    public $version = '2017-08-23';

    /**
     * @var string
     */
    public $action = 'UpdateAuditSetting';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @var string
     */
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
