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

    /**
     * @deprecated deprecated since version 2.0, Use withStatus() instead.
     *
     * @param string $status
     *
     * @return $this
     */
    public function setStatus($status)
    {
        return $this->withStatus($status);
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
