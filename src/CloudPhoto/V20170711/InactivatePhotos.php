<?php

namespace AlibabaCloud\CloudPhoto\V20170711;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of InactivatePhotos
 *
 * @method string getLibraryId()
 * @method array getPhotoId()
 * @method string getStoreName()
 * @method string getInactiveTime()
 */
class InactivatePhotos extends RpcRequest
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
    public $action = 'InactivatePhotos';

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
     * @param string $inactiveTime
     *
     * @return $this
     */
    public function withInactiveTime($inactiveTime)
    {
        $this->data['InactiveTime'] = $inactiveTime;
        $this->options['query']['InactiveTime'] = $inactiveTime;

        return $this;
    }
}
