<?php

namespace AlibabaCloud\Aegis\V20161111;

use AlibabaCloud\Rpc;

/**
 * Api CreateTypeWhiteList
 *
 * @method string getResourceOwnerId()
 * @method string getSourceIp()
 * @method string getSubTypeNames()
 */
class CreateTypeWhiteList extends Rpc
{
    public $product = 'aegis';

    public $version = '2016-11-11';

    public $method = 'POST';

    public $serviceCode = 'vipaegis';

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

    /**
     * @param string $subTypeNames
     *
     * @return $this
     */
    public function withSubTypeNames($subTypeNames)
    {
        $this->data['SubTypeNames'] = $subTypeNames;
        $this->options['query']['SubTypeNames'] = $subTypeNames;

        return $this;
    }
}
