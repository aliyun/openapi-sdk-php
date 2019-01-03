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
     * @deprecated deprecated since version 2.0, Use withLatitude() instead.
     *
     * @param string $latitude
     *
     * @return $this
     */
    public function setLatitude($latitude)
    {
        return $this->withLatitude($latitude);
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
     * @deprecated deprecated since version 2.0, Use withPhotoTitle() instead.
     *
     * @param string $photoTitle
     *
     * @return $this
     */
    public function setPhotoTitle($photoTitle)
    {
        return $this->withPhotoTitle($photoTitle);
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
     * @deprecated deprecated since version 2.0, Use withIsVideo() instead.
     *
     * @param string $isVideo
     *
     * @return $this
     */
    public function setIsVideo($isVideo)
    {
        return $this->withIsVideo($isVideo);
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
     * @deprecated deprecated since version 2.0, Use withRemark() instead.
     *
     * @param string $remark
     *
     * @return $this
     */
    public function setRemark($remark)
    {
        return $this->withRemark($remark);
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
     * @deprecated deprecated since version 2.0, Use withTakenAt() instead.
     *
     * @param string $takenAt
     *
     * @return $this
     */
    public function setTakenAt($takenAt)
    {
        return $this->withTakenAt($takenAt);
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
     * @deprecated deprecated since version 2.0, Use withWidth() instead.
     *
     * @param string $width
     *
     * @return $this
     */
    public function setWidth($width)
    {
        return $this->withWidth($width);
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
     * @deprecated deprecated since version 2.0, Use withLocation() instead.
     *
     * @param string $location
     *
     * @return $this
     */
    public function setLocation($location)
    {
        return $this->withLocation($location);
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
     * @deprecated deprecated since version 2.0, Use withLongitude() instead.
     *
     * @param string $longitude
     *
     * @return $this
     */
    public function setLongitude($longitude)
    {
        return $this->withLongitude($longitude);
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
     * @deprecated deprecated since version 2.0, Use withHeight() instead.
     *
     * @param string $height
     *
     * @return $this
     */
    public function setHeight($height)
    {
        return $this->withHeight($height);
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
