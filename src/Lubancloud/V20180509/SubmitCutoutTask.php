<?php

namespace AlibabaCloud\Lubancloud\V20180509;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of SubmitCutoutTask
 *
 * @method array getPictureUrl()
 */
class SubmitCutoutTask extends RpcRequest
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
    public $action = 'SubmitCutoutTask';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @var string
     */
    public $serviceCode = 'luban';

    /**
     * @deprecated deprecated since version 2.0, Use getPictureUrl() instead.
     *
     * @return array
     */
    public function getPictureUrls()
    {
        return $this->getPictureUrl();
    }

    /**
     * @deprecated deprecated since version 2.0, Use withPictureUrl() instead.
     *
     * @param array $pictureUrls
     *
     * @return $this
     */
    public function setPictureUrls(array $pictureUrls)
    {
        return $this->withPictureUrl($pictureUrls);
    }

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
