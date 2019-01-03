<?php

namespace AlibabaCloud\CloudPhoto\V20170711;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of FetchAlbumTagPhotos
 *
 * @method string getSize()
 * @method string getTagId()
 * @method string getLibraryId()
 * @method string getAlbumId()
 * @method string getStoreName()
 * @method string getPage()
 */
class FetchAlbumTagPhotos extends RpcRequest
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
    public $action = 'FetchAlbumTagPhotos';

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
     * @deprecated deprecated since version 2.0, Use withSize() instead.
     *
     * @param string $size
     *
     * @return $this
     */
    public function setSize($size)
    {
        return $this->withSize($size);
    }

    /**
     * @param string $size
     *
     * @return $this
     */
    public function withSize($size)
    {
        $this->data['Size'] = $size;
        $this->options['query']['Size'] = $size;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withTagId() instead.
     *
     * @param string $tagId
     *
     * @return $this
     */
    public function setTagId($tagId)
    {
        return $this->withTagId($tagId);
    }

    /**
     * @param string $tagId
     *
     * @return $this
     */
    public function withTagId($tagId)
    {
        $this->data['TagId'] = $tagId;
        $this->options['query']['TagId'] = $tagId;

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
     * @deprecated deprecated since version 2.0, Use withAlbumId() instead.
     *
     * @param string $albumId
     *
     * @return $this
     */
    public function setAlbumId($albumId)
    {
        return $this->withAlbumId($albumId);
    }

    /**
     * @param string $albumId
     *
     * @return $this
     */
    public function withAlbumId($albumId)
    {
        $this->data['AlbumId'] = $albumId;
        $this->options['query']['AlbumId'] = $albumId;

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
     * @deprecated deprecated since version 2.0, Use withPage() instead.
     *
     * @param string $page
     *
     * @return $this
     */
    public function setPage($page)
    {
        return $this->withPage($page);
    }

    /**
     * @param string $page
     *
     * @return $this
     */
    public function withPage($page)
    {
        $this->data['Page'] = $page;
        $this->options['query']['Page'] = $page;

        return $this;
    }
}
