<?php

namespace AlibabaCloud\CloudPhoto\V20170711;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of MoveAlbumPhotos
 *
 * @method string getSourceAlbumId()
 * @method string getTargetAlbumId()
 * @method string getLibraryId()
 * @method array getPhotoId()
 * @method string getStoreName()
 */
class MoveAlbumPhotos extends RpcRequest
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
    public $action = 'MoveAlbumPhotos';

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
     * @deprecated deprecated since version 2.0, Use withSourceAlbumId() instead.
     *
     * @param string $sourceAlbumId
     *
     * @return $this
     */
    public function setSourceAlbumId($sourceAlbumId)
    {
        return $this->withSourceAlbumId($sourceAlbumId);
    }

    /**
     * @param string $sourceAlbumId
     *
     * @return $this
     */
    public function withSourceAlbumId($sourceAlbumId)
    {
        $this->data['SourceAlbumId'] = $sourceAlbumId;
        $this->options['query']['SourceAlbumId'] = $sourceAlbumId;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withTargetAlbumId() instead.
     *
     * @param string $targetAlbumId
     *
     * @return $this
     */
    public function setTargetAlbumId($targetAlbumId)
    {
        return $this->withTargetAlbumId($targetAlbumId);
    }

    /**
     * @param string $targetAlbumId
     *
     * @return $this
     */
    public function withTargetAlbumId($targetAlbumId)
    {
        $this->data['TargetAlbumId'] = $targetAlbumId;
        $this->options['query']['TargetAlbumId'] = $targetAlbumId;

        return $this;
    }

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
     * @deprecated deprecated since version 2.0, Use getPhotoId() instead.
     *
     * @return array
     */
    public function getPhotoIds()
    {
        return $this->getPhotoId();
    }

    /**
     * @deprecated deprecated since version 2.0, Use withPhotoId() instead.
     *
     * @param array $photoIds
     *
     * @return $this
     */
    public function setPhotoIds(array $photoIds)
    {
        return $this->withPhotoId($photoIds);
    }

    /**
     * @param array $photoId
     *
     * @return $this
     */
    public function withPhotoId(array $photoId)
    {
        $this->data['PhotoId'] = $photoId;
        foreach ($photoId as $i => $iValue) {
            $this->options['query']['PhotoId.' . ($i + 1)] = $iValue;
        }

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
}
