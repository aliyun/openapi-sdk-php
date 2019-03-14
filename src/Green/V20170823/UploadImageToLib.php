<?php

namespace AlibabaCloud\Green\V20170823;

use AlibabaCloud\Rpc;

/**
 * Api UploadImageToLib
 *
 * @method string getImages()
 * @method string getSourceIp()
 * @method string getImageLibId()
 */
class UploadImageToLib extends Rpc
{
    public $product = 'Green';

    public $version = '2017-08-23';

    public $method = 'POST';

    public $serviceCode = 'green';

    /**
     * @param string $images
     *
     * @return $this
     */
    public function withImages($images)
    {
        $this->data['Images'] = $images;
        $this->options['query']['Images'] = $images;

        return $this;
    }

    /**
     * @param string $sourceIp
     *
     * @return $this
     */
    public function withSourceIp($sourceIp)
    {
        $this->data['SourceIp'] = $sourceIp;
        $this->options['query']['SourceIp'] = $sourceIp;

        return $this;
    }

    /**
     * @param string $imageLibId
     *
     * @return $this
     */
    public function withImageLibId($imageLibId)
    {
        $this->data['ImageLibId'] = $imageLibId;
        $this->options['query']['ImageLibId'] = $imageLibId;

        return $this;
    }
}
