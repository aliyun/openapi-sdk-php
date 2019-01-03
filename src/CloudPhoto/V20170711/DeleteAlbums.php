<?php

namespace AlibabaCloud\CloudPhoto\V20170711;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of DeleteAlbums
 *
 * @method string getLibraryId()
 * @method array getAlbumId()
 * @method string getStoreName()
 */
class DeleteAlbums extends RpcRequest
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
    public $action = 'DeleteAlbums';

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
     * @deprecated deprecated since version 2.0, Use getAlbumId() instead.
     *
     * @return array
     */
    public function getAlbumIds()
    {
        return $this->getAlbumId();
    }

    /**
     * @deprecated deprecated since version 2.0, Use withAlbumId() instead.
     *
     * @param array $albumIds
     *
     * @return $this
     */
    public function setAlbumIds(array $albumIds)
    {
        return $this->withAlbumId($albumIds);
    }

    /**
     * @param array $albumId
     *
     * @return $this
     */
    public function withAlbumId(array $albumId)
    {
        $this->data['AlbumId'] = $albumId;
        foreach ($albumId as $i => $iValue) {
            $this->options['query']['AlbumId.' . ($i + 1)] = $iValue;
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
