<?php

namespace AlibabaCloud\Green\V20170823;

use AlibabaCloud\Rpc;

/**
 * Api DescribeImageLib
 *
 * @method string getSourceIp()
 * @method string getServiceModule()
 */
class DescribeImageLib extends Rpc
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
