<?php

namespace AlibabaCloud\CloudPhoto\V20170711;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of FetchMomentPhotos
 *
 * @method string getSize()
 * @method string getLibraryId()
 * @method string getOrderBy()
 * @method string getStoreName()
 * @method string getPage()
 * @method string getMomentId()
 * @method string getOrder()
 */
class FetchMomentPhotos extends RpcRequest
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
    public $action = 'FetchMomentPhotos';

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
     * @param string $orderBy
     *
     * @return $this
     */
    public function withOrderBy($orderBy)
    {
        $this->data['OrderBy'] = $orderBy;
        $this->options['query']['OrderBy'] = $orderBy;

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

    /**
     * @param string $momentId
     *
     * @return $this
     */
    public function withMomentId($momentId)
    {
        $this->data['MomentId'] = $momentId;
        $this->options['query']['MomentId'] = $momentId;

        return $this;
    }

    /**
     * @param string $order
     *
     * @return $this
     */
    public function withOrder($order)
    {
        $this->data['Order'] = $order;
        $this->options['query']['Order'] = $order;

        return $this;
    }
}
