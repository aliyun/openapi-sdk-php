<?php

namespace AlibabaCloud\Lubancloud\V20180509;

use AlibabaCloud\Rpc;

/**
 * Api BuyOriginPictures
 *
 * @method array getPictureId()
 */
class BuyOriginPictures extends Rpc
{
    public $product = 'lubancloud';

    public $version = '2018-05-09';

    public $method = 'POST';

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
