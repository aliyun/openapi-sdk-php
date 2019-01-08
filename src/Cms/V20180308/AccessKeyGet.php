<?php

namespace AlibabaCloud\Cms\V20180308;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of AccessKeyGet
 *
 * @method string getUserId()
 */
class AccessKeyGet extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'Cms';

    /**
     * @var string
     */
    public $version = '2018-03-08';

    /**
     * @var string
     */
    public $action = 'AccessKeyGet';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @param string $userId
     *
     * @return $this
     */
    public function withUserId($userId)
    {
        $this->data['UserId'] = $userId;
        $this->options['query']['UserId'] = $userId;

        return $this;
    }
}
