<?php

namespace AlibabaCloud\Baas\V20180731;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of DestroyConsortium
 *
 * @method string getConsortiumId()
 */
class DestroyConsortium extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'Baas';

    /**
     * @var string
     */
    public $version = '2018-07-31';

    /**
     * @var string
     */
    public $action = 'DestroyConsortium';

    /**
     * @var string
     */
    public $method = 'PUT';

    /**
     * @param string $consortiumId
     *
     * @return $this
     */
    public function withConsortiumId($consortiumId)
    {
        $this->data['ConsortiumId'] = $consortiumId;
        $this->options['query']['ConsortiumId'] = $consortiumId;

        return $this;
    }
}
