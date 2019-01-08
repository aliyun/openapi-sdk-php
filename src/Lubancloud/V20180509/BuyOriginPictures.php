<?php

namespace AlibabaCloud\Lubancloud\V20180509;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of BuyOriginPictures
 *
 * @method array getPictureId()
 */
class BuyOriginPictures extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'lubancloud';

    /**
     * @var string
     */
    public $version = '2018-05-09';

    /**
     * @var string
     */
    public $action = 'BuyOriginPictures';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @var string
     */
    public $serviceCode = 'luban';

    /**
     * @param array $pictureId
     *
     * @return $this
     */
    public function withPictureId(array $pictureId)
    {
        $this->data['PictureId'] = $pictureId;
        foreach ($pictureId as $i => $iValue) {
            $this->options['query']['PictureId.' . ($i + 1)] = $iValue;
        }

        return $this;
    }
}
