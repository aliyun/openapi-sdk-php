<?php

namespace AlibabaCloud\Ram\V20150501;

use AlibabaCloud\Rpc;

/**
 * Api UploadPublicKey
 *
 * @method string getPublicKeySpec()
 * @method string getUserName()
 */
class UploadPublicKey extends Rpc
{
    public $product = 'Ram';

    public $version = '2015-05-01';

    public $scheme = 'https';

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
