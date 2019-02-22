<?php

namespace AlibabaCloud\Aegis\V20161111;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of ModifyVulTarget
 *
 * @method string getSourceIp()
 * @method string getConfig()
 * @method string getTarget()
 */
class ModifyVulTarget extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'aegis';

    /**
     * @var string
     */
    public $version = '2016-11-11';

    /**
     * @var string
     */
    public $action = 'ModifyVulTarget';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @var string
     */
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
     * @param string $config
     *
     * @return $this
     */
    public function withConfig($config)
    {
        $this->data['Config'] = $config;
        $this->options['query']['Config'] = $config;

        return $this;
    }

    /**
     * @param string $target
     *
     * @return $this
     */
    public function withTarget($target)
    {
        $this->data['Target'] = $target;
        $this->options['query']['Target'] = $target;

        return $this;
    }
}
