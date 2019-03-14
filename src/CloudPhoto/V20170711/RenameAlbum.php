<?php

namespace AlibabaCloud\CloudPhoto\V20170711;

use AlibabaCloud\Rpc;

/**
 * Api RenameAlbum
 *
 * @method string getAlbumName()
 * @method string getLibraryId()
 * @method string getAlbumId()
 * @method string getStoreName()
 */
class RenameAlbum extends Rpc
{
    public $product = 'CloudPhoto';

    public $version = '2017-07-11';

    public $scheme = 'https';

    public $method = 'POST';

    public $serviceCode = 'cloudphoto';

    /**
     * @param string $albumName
     *
     * @return $this
     */
    public function withAlbumName($albumName)
    {
        $this->data['AlbumName'] = $albumName;
        $this->options['query']['AlbumName'] = $albumName;

        return $this;
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
