<?php

namespace AlibabaCloud\LinkFace\V20180720;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of LinkFace
 *
 * @method string getGroupId()
 * @method string getUserId()
 */
class LinkFace extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'LinkFace';

    /**
     * @var string
     */
    public $version = '2018-07-20';

    /**
     * @var string
     */
    public $action = 'LinkFace';

    /**
     * @var string
     */
    public $scheme = 'https';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @param string $groupId
     *
     * @return $this
     */
    public function withGroupId($groupId)
    {
        $this->data['GroupId'] = $groupId;
        $this->options['query']['GroupId'] = $groupId;

        return $this;
    }

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
