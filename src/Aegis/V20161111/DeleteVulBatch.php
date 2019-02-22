<?php

namespace AlibabaCloud\Aegis\V20161111;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of DeleteVulBatch
 *
 * @method string getBatchName()
 * @method string getSourceIp()
 * @method string getResource()
 */
class DeleteVulBatch extends RpcRequest
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
    public $action = 'DeleteVulBatch';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @var string
     */
    public $serviceCode = 'vipaegis';

    /**
     * @param string $batchName
     *
     * @return $this
     */
    public function withBatchName($batchName)
    {
        $this->data['BatchName'] = $batchName;
        $this->options['query']['BatchName'] = $batchName;

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
     * @param string $resource
     *
     * @return $this
     */
    public function withResource($resource)
    {
        $this->data['Resource'] = $resource;
        $this->options['query']['Resource'] = $resource;

        return $this;
    }
}
