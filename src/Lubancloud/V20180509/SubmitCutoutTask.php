<?php

namespace AlibabaCloud\Lubancloud\V20180509;

use AlibabaCloud\Rpc;

/**
 * Api SubmitCutoutTask
 *
 * @method array getPictureUrl()
 */
class SubmitCutoutTask extends Rpc
{
    public $product = 'lubancloud';

    public $version = '2018-05-09';

    public $method = 'POST';

    public $serviceCode = 'luban';

    /**
     * @param array $pictureUrl
     *
     * @return $this
     */
    public function withPictureUrl(array $pictureUrl)
    {
        $this->data['PictureUrl'] = $pictureUrl;
        foreach ($pictureUrl as $i => $iValue) {
            $this->options['query']['PictureUrl.' . ($i + 1)] = $iValue;
        }

        return $this;
    }
}
