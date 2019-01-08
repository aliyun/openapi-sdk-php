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
