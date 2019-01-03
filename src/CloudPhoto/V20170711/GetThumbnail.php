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
     * @deprecated deprecated since version 2.0, Use withLibraryId() instead.
     *
     * @param string $libraryId
     *
     * @return $this
     */
    public function setLibraryId($libraryId)
    {
        return $this->withLibraryId($libraryId);
    }

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
     * @deprecated deprecated since version 2.0, Use withPhotoId() instead.
     *
     * @param string $photoId
     *
     * @return $this
     */
    public function setPhotoId($photoId)
    {
        return $this->withPhotoId($photoId);
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
     * @deprecated deprecated since version 2.0, Use withStoreName() instead.
     *
     * @param string $storeName
     *
     * @return $this
     */
    public function setStoreName($storeName)
    {
        return $this->withStoreName($storeName);
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
     * @deprecated deprecated since version 2.0, Use withZoomType() instead.
     *
     * @param string $zoomType
     *
     * @return $this
     */
    public function setZoomType($zoomType)
    {
        return $this->withZoomType($zoomType);
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
