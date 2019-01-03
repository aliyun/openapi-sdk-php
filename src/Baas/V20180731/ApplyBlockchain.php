<?php

namespace AlibabaCloud\Baas\V20180731;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of ApplyBlockchain
 *
 * @method string getBlockchain()
 * @method string getUploadReq()
 */
class ApplyBlockchain extends RpcRequest
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
    public $action = 'ApplyBlockchain';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @deprecated deprecated since version 2.0, Use withBlockchain() instead.
     *
     * @param string $blockchain
     *
     * @return $this
     */
    public function setBlockchain($blockchain)
    {
        return $this->withBlockchain($blockchain);
    }

    /**
     * @param string $blockchain
     *
     * @return $this
     */
    public function withBlockchain($blockchain)
    {
        $this->data['Blockchain'] = $blockchain;
        $this->options['query']['Blockchain'] = $blockchain;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withUploadReq() instead.
     *
     * @param string $uploadReq
     *
     * @return $this
     */
    public function setUploadReq($uploadReq)
    {
        return $this->withUploadReq($uploadReq);
    }

    /**
     * @param string $uploadReq
     *
     * @return $this
     */
    public function withUploadReq($uploadReq)
    {
        $this->data['UploadReq'] = $uploadReq;
        $this->options['query']['UploadReq'] = $uploadReq;

        return $this;
    }
}
