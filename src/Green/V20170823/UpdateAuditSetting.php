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
     * @deprecated deprecated since version 2.0, Use withSourceIp() instead.
     *
     * @param string $sourceIp
     *
     * @return $this
     */
    public function setSourceIp($sourceIp)
    {
        return $this->withSourceIp($sourceIp);
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
     * @deprecated deprecated since version 2.0, Use withSeed() instead.
     *
     * @param string $seed
     *
     * @return $this
     */
    public function setSeed($seed)
    {
        return $this->withSeed($seed);
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
     * @deprecated deprecated since version 2.0, Use withCallback() instead.
     *
     * @param string $callback
     *
     * @return $this
     */
    public function setCallback($callback)
    {
        return $this->withCallback($callback);
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
