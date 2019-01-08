<?php

namespace AlibabaCloud\CloudPhoto\V20170711;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of RegisterPhoto
 *
 * @method string getLibraryId()
 * @method string getLatitude()
 * @method string getPhotoTitle()
 * @method string getStoreName()
 * @method string getIsVideo()
 * @method string getRemark()
 * @method string getSize()
 * @method string getTakenAt()
 * @method string getWidth()
 * @method string getLocation()
 * @method string getLongitude()
 * @method string getHeight()
 * @method string getMd5()
 */
class RegisterPhoto extends RpcRequest
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
    public $action = 'RegisterPhoto';

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
     * @param string $latitude
     *
     * @return $this
     */
    public function withLatitude($latitude)
    {
        $this->data['Latitude'] = $latitude;
        $this->options['query']['Latitude'] = $latitude;

        return $this;
    }

    /**
     * @param string $photoTitle
     *
     * @return $this
     */
    public function withPhotoTitle($photoTitle)
    {
        $this->data['PhotoTitle'] = $photoTitle;
        $this->options['query']['PhotoTitle'] = $photoTitle;

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
     * @param string $isVideo
     *
     * @return $this
     */
    public function withIsVideo($isVideo)
    {
        $this->data['IsVideo'] = $isVideo;
        $this->options['query']['IsVideo'] = $isVideo;

        return $this;
    }

    /**
     * @param string $remark
     *
     * @return $this
     */
    public function withRemark($remark)
    {
        $this->data['Remark'] = $remark;
        $this->options['query']['Remark'] = $remark;

        return $this;
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
     * @param string $takenAt
     *
     * @return $this
     */
    public function withTakenAt($takenAt)
    {
        $this->data['TakenAt'] = $takenAt;
        $this->options['query']['TakenAt'] = $takenAt;

        return $this;
    }

    /**
     * @param string $width
     *
     * @return $this
     */
    public function withWidth($width)
    {
        $this->data['Width'] = $width;
        $this->options['query']['Width'] = $width;

        return $this;
    }

    /**
     * @param string $location
     *
     * @return $this
     */
    public function withLocation($location)
    {
        $this->data['Location'] = $location;
        $this->options['query']['Location'] = $location;

        return $this;
    }

    /**
     * @param string $longitude
     *
     * @return $this
     */
    public function withLongitude($longitude)
    {
        $this->data['Longitude'] = $longitude;
        $this->options['query']['Longitude'] = $longitude;

        return $this;
    }

    /**
     * @param string $height
     *
     * @return $this
     */
    public function withHeight($height)
    {
        $this->data['Height'] = $height;
        $this->options['query']['Height'] = $height;

        return $this;
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
