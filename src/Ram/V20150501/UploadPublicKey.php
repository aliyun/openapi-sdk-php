<?php

namespace AlibabaCloud\Ram\V20150501;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of UploadPublicKey
 *
 * @method string getPublicKeySpec()
 * @method string getUserName()
 */
class UploadPublicKey extends RpcRequest
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
    public $action = 'UploadPublicKey';

    /**
     * @var string
     */
    public $scheme = 'https';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @param string $publicKeySpec
     *
     * @return $this
     */
    public function withPublicKeySpec($publicKeySpec)
    {
        $this->data['PublicKeySpec'] = $publicKeySpec;
        $this->options['query']['PublicKeySpec'] = $publicKeySpec;

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
}
