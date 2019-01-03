<?php

namespace AlibabaCloud\CloudPhoto\V20170711;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of CreateTransaction
 *
 * @method string getExt()
 * @method string getSize()
 * @method string getLibraryId()
 * @method string getStoreName()
 * @method string getForce()
 * @method string getMd5()
 */
class CreateTransaction extends RpcRequest
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
    public $action = 'CreateTransaction';

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
     * @deprecated deprecated since version 2.0, Use withExt() instead.
     *
     * @param string $ext
     *
     * @return $this
     */
    public function setExt($ext)
    {
        return $this->withExt($ext);
    }

    /**
     * @param string $ext
     *
     * @return $this
     */
    public function withExt($ext)
    {
        $this->data['Ext'] = $ext;
        $this->options['query']['Ext'] = $ext;

        return $this;
    }

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
     * @deprecated deprecated since version 2.0, Use withForce() instead.
     *
     * @param string $force
     *
     * @return $this
     */
    public function setForce($force)
    {
        return $this->withForce($force);
    }

    /**
     * @param string $force
     *
     * @return $this
     */
    public function withForce($force)
    {
        $this->data['Force'] = $force;
        $this->options['query']['Force'] = $force;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withMd5() instead.
     *
     * @param string $md5
     *
     * @return $this
     */
    public function setMd5($md5)
    {
        return $this->withMd5($md5);
    }

    /**
     * @param string $md5
     *
     * @return $this
     */
    public function withMd5($md5)
    {
        $this->data['Md5'] = $md5;
        $this->options['query']['Md5'] = $md5;

        return $this;
    }
}
