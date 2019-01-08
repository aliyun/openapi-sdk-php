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
