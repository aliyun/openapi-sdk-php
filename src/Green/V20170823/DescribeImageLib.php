<?php

namespace AlibabaCloud\Green\V20170823;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of DescribeImageLib
 *
 * @method string getSourceIp()
 * @method string getServiceModule()
 */
class DescribeImageLib extends RpcRequest
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
    public $action = 'DescribeImageLib';

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
     * @param string $serviceModule
     *
     * @return $this
     */
    public function withServiceModule($serviceModule)
    {
        $this->data['ServiceModule'] = $serviceModule;
        $this->options['query']['ServiceModule'] = $serviceModule;

        return $this;
    }
}
