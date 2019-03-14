<?php

namespace AlibabaCloud\Ram\V20150501;

use AlibabaCloud\Rpc;

/**
 * Api UpdatePublicKey
 *
 * @method string getUserPublicKeyId()
 * @method string getUserName()
 * @method string getStatus()
 */
class UpdatePublicKey extends Rpc
{
    public $product = 'Ram';

    public $version = '2015-05-01';

    public $scheme = 'https';

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
