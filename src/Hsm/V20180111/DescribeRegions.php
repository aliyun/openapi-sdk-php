<?php

namespace AlibabaCloud\Hsm\V20180111;

use AlibabaCloud\Rpc;

/**
 * Api DescribeRegions
 *
 * @method string getResourceOwnerId()
 * @method string getSourceIp()
 */
class DescribeRegions extends Rpc
{
    public $product = 'hsm';

    public $version = '2018-01-11';

    public $method = 'POST';

    public $serviceCode = 'hsm';

    /**
     * @param string $resourceOwnerId
     *
     * @return $this
     */
    public function withResourceOwnerId($resourceOwnerId)
    {
        $this->data['ResourceOwnerId'] = $resourceOwnerId;
        $this->options['query']['ResourceOwnerId'] = $resourceOwnerId;

        return $this;
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
}
