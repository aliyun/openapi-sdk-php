<?php

namespace AlibabaCloud\CloudPhoto\V20170711;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of GetThumbnail
 *
 * @method string getLibraryId()
 * @method string getPhotoId()
 * @method string getStoreName()
 * @method string getZoomType()
 */
class GetThumbnail extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'CloudPhoto';

    /**
     * @var string
     */
    public $version = '2017-07-11';

    /**
     * @var string
     */
    public $action = 'GetThumbnail';

    /**
     * @var string
     */
    public $scheme = 'https';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @var string
     */
    public $serviceCode = 'cloudphoto';

    /**
     * @param string $libraryId
     *
     * @return $this
     */
    public function withLibraryId($libraryId)
    {
        $this->data['LibraryId'] = $libraryId;
        $this->options['query']['LibraryId'] = $libraryId;

        return $this;
    }

    /**
     * @param string $photoId
     *
     * @return $this
     */
    public function withPhotoId($photoId)
    {
        $this->data['PhotoId'] = $photoId;
        $this->options['query']['PhotoId'] = $photoId;

        return $this;
    }

    /**
     * @param string $storeName
     *
     * @return $this
     */
    public function withStoreName($storeName)
    {
        $this->data['StoreName'] = $storeName;
        $this->options['query']['StoreName'] = $storeName;

        return $this;
    }

    /**
     * @param string $zoomType
     *
     * @return $this
     */
    public function withZoomType($zoomType)
    {
        $this->data['ZoomType'] = $zoomType;
        $this->options['query']['ZoomType'] = $zoomType;

        return $this;
    }
}
