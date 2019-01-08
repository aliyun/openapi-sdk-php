<?php

namespace AlibabaCloud\Aegis\V20161111;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of ModifyBatchIgnoreVul
 *
 * @method string getReason()
 * @method string getResourceOwnerId()
 * @method string getSourceIp()
 * @method string getInfo()
 */
class ModifyBatchIgnoreVul extends RpcRequest
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
    public $action = 'ModifyBatchIgnoreVul';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @var string
     */
    public $serviceCode = 'vipaegis';

    /**
     * @param string $reason
     *
     * @return $this
     */
    public function withReason($reason)
    {
        $this->data['Reason'] = $reason;
        $this->options['query']['Reason'] = $reason;

        return $this;
    }

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
     * @param string $info
     *
     * @return $this
     */
    public function withInfo($info)
    {
        $this->data['Info'] = $info;
        $this->options['query']['Info'] = $info;

        return $this;
    }
}
