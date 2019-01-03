<?php

namespace AlibabaCloud\CloudPhoto\V20170711;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of GetPhotosByMd5s
 *
 * @method string getLibraryId()
 * @method string getStoreName()
 * @method string getState()
 * @method array getMd5()
 */
class GetPhotosByMd5s extends RpcRequest
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
    public $action = 'GetPhotosByMd5s';

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

    /**
     * @deprecated deprecated since version 2.0, Use withState() instead.
     *
     * @param string $state
     *
     * @return $this
     */
    public function setState($state)
    {
        return $this->withState($state);
    }

    /**
     * @param string $state
     *
     * @return $this
     */
    public function withState($state)
    {
        $this->data['State'] = $state;
        $this->options['query']['State'] = $state;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use getMd5() instead.
     *
     * @return array
     */
    public function getMd5s()
    {
        return $this->getMd5();
    }

    /**
     * @deprecated deprecated since version 2.0, Use withMd5() instead.
     *
     * @param array $md5s
     *
     * @return $this
     */
    public function setMd5s(array $md5s)
    {
        return $this->withMd5($md5s);
    }

    /**
     * @param array $md5
     *
     * @return $this
     */
    public function withMd5(array $md5)
    {
        $this->data['Md5'] = $md5;
        foreach ($md5 as $i => $iValue) {
            $this->options['query']['Md5.' . ($i + 1)] = $iValue;
        }

        return $this;
    }
}
