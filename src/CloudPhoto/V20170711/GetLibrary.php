<?php

namespace AlibabaCloud\CloudPhoto\V20170711;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of GetLibrary
 *
 * @method string getLibraryId()
 * @method string getStoreName()
 */
class GetLibrary extends RpcRequest
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
    public $action = 'GetLibrary';

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
