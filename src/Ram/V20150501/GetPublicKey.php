<?php

namespace AlibabaCloud\Ram\V20150501;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of GetPublicKey
 *
 * @method string getUserPublicKeyId()
 * @method string getUserName()
 */
class GetPublicKey extends RpcRequest
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
    public $action = 'GetPublicKey';

    /**
     * @var string
     */
    public $scheme = 'https';


    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @deprecated deprecated since version 2.0, Use withUserPublicKeyId() instead.
     *
     * @param string $userPublicKeyId
     *
     * @return $this
     */
    public function setUserPublicKeyId($userPublicKeyId)
    {
        return $this->withUserPublicKeyId($userPublicKeyId);
    }

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
     * @deprecated deprecated since version 2.0, Use withUserName() instead.
     *
     * @param string $userName
     *
     * @return $this
     */
    public function setUserName($userName)
    {
        return $this->withUserName($userName);
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
