<?php

namespace AlibabaCloud\CloudPhoto\V20170711;

use AlibabaCloud\Rpc;

/**
 * Api ListAlbumTagPhotos
 *
 * @method string getTagId()
 * @method string getLibraryId()
 * @method string getCount()
 * @method string getAlbumId()
 * @method string getStoreName()
 * @method string getPage()
 */
class ListAlbumTagPhotos extends Rpc
{
    public $product = 'CloudPhoto';

    public $version = '2017-07-11';

    public $scheme = 'https';

    public $method = 'POST';

    public $serviceCode = 'cloudphoto';

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
     * @param string $count
     *
     * @return $this
     */
    public function withCount($count)
    {
        $this->data['Count'] = $count;
        $this->options['query']['Count'] = $count;

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
