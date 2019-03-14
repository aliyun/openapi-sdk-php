<?php

namespace AlibabaCloud\LinkFace\V20180720;

use AlibabaCloud\Rpc;

/**
 * Api SearchFace
 *
 * @method string getImage()
 * @method string getGroupId()
 */
class SearchFace extends Rpc
{
    public $product = 'LinkFace';

    public $version = '2018-07-20';

    public $scheme = 'https';

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
