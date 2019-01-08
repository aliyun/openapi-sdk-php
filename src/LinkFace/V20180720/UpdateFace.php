<?php

namespace AlibabaCloud\LinkFace\V20180720;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of UpdateFace
 *
 * @method string getImage()
 * @method string getUserId()
 * @method string getUserInfo()
 */
class UpdateFace extends RpcRequest
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
    public $action = 'UpdateFace';

    /**
     * @var string
     */
    public $scheme = 'https';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @param string $image
     *
     * @return $this
     */
    public function withImage($image)
    {
        $this->data['Image'] = $image;
        $this->options['query']['Image'] = $image;

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

    /**
     * @param string $userInfo
     *
     * @return $this
     */
    public function withUserInfo($userInfo)
    {
        $this->data['UserInfo'] = $userInfo;
        $this->options['query']['UserInfo'] = $userInfo;

        return $this;
    }
}
