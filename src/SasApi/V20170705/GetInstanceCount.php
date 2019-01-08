<?php

namespace AlibabaCloud\SasApi\V20170705;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of GetInstanceCount
 *
 * @method string getOwnerId()
 */
class GetInstanceCount extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'Sas-api';

    /**
     * @var string
     */
    public $version = '2017-07-05';

    /**
     * @var string
     */
    public $action = 'GetInstanceCount';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @param string $ownerId
     *
     * @return $this
     */
    public function withOwnerId($ownerId)
    {
        $this->data['OwnerId'] = $ownerId;
        $this->options['query']['OwnerId'] = $ownerId;

        return $this;
    }
}
