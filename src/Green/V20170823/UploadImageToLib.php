<?php

namespace AlibabaCloud\Green\V20170823;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of UploadImageToLib
 *
 * @method string getImages()
 * @method string getSourceIp()
 * @method string getImageLibId()
 */
class UploadImageToLib extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'Green';

    /**
     * @var string
     */
    public $version = '2017-08-23';

    /**
     * @var string
     */
    public $action = 'UploadImageToLib';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @var string
     */
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
