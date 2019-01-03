<?php

namespace AlibabaCloud\LinkFace\V20180720;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of RegisterFace
 *
 * @method string getImage()
 * @method string getGroupId()
 * @method string getUserId()
 * @method string getUserInfo()
 */
class RegisterFace extends RpcRequest
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
    public $action = 'RegisterFace';

    /**
     * @var string
     */
    public $scheme = 'https';


    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @deprecated deprecated since version 2.0, Use withImage() instead.
     *
     * @param string $image
     *
     * @return $this
     */
    public function setImage($image)
    {
        return $this->withImage($image);
    }

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
     * @deprecated deprecated since version 2.0, Use withGroupId() instead.
     *
     * @param string $groupId
     *
     * @return $this
     */
    public function setGroupId($groupId)
    {
        return $this->withGroupId($groupId);
    }

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
     * @deprecated deprecated since version 2.0, Use withUserId() instead.
     *
     * @param string $userId
     *
     * @return $this
     */
    public function setUserId($userId)
    {
        return $this->withUserId($userId);
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
     * @deprecated deprecated since version 2.0, Use withUserInfo() instead.
     *
     * @param string $userInfo
     *
     * @return $this
     */
    public function setUserInfo($userInfo)
    {
        return $this->withUserInfo($userInfo);
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
