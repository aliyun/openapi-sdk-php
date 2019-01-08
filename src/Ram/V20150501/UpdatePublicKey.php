<?php

namespace AlibabaCloud\Ram\V20150501;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of UpdatePublicKey
 *
 * @method string getUserPublicKeyId()
 * @method string getUserName()
 * @method string getStatus()
 */
class UpdatePublicKey extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'Ram';

    /**
     * @var string
     */
    public $version = '2015-05-01';

    /**
     * @var string
     */
    public $action = 'UpdatePublicKey';

    /**
     * @var string
     */
    public $scheme = 'https';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @param string $userPublicKeyId
     *
     * @return $this
     */
    public function withUserPublicKeyId($userPublicKeyId)
    {
        $this->data['UserPublicKeyId'] = $userPublicKeyId;
        $this->options['query']['UserPublicKeyId'] = $userPublicKeyId;

        return $this;
    }

    /**
     * @param string $userName
     *
     * @return $this
     */
    public function withUserName($userName)
    {
        $this->data['UserName'] = $userName;
        $this->options['query']['UserName'] = $userName;

        return $this;
    }

    /**
     * @param string $status
     *
     * @return $this
     */
    public function withStatus($status)
    {
        $this->data['Status'] = $status;
        $this->options['query']['Status'] = $status;

        return $this;
    }
}
