<?php

namespace AlibabaCloud\Ram\V20150501;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of UpdateAccessKey
 *
 * @method string getUserAccessKeyId()
 * @method string getUserName()
 * @method string getStatus()
 */
class UpdateAccessKey extends RpcRequest
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
    public $action = 'UpdateAccessKey';

    /**
     * @var string
     */
    public $scheme = 'https';


    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @deprecated deprecated since version 2.0, Use withUserAccessKeyId() instead.
     *
     * @param string $userAccessKeyId
     *
     * @return $this
     */
    public function setUserAccessKeyId($userAccessKeyId)
    {
        return $this->withUserAccessKeyId($userAccessKeyId);
    }

    /**
     * @param string $userAccessKeyId
     *
     * @return $this
     */
    public function withUserAccessKeyId($userAccessKeyId)
    {
        $this->data['UserAccessKeyId'] = $userAccessKeyId;
        $this->options['query']['UserAccessKeyId'] = $userAccessKeyId;

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
