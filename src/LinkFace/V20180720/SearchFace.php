<?php

namespace AlibabaCloud\LinkFace\V20180720;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of SearchFace
 *
 * @method string getImage()
 * @method string getGroupId()
 */
class SearchFace extends RpcRequest
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
    public $action = 'SearchFace';

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
}
