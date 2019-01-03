<?php

namespace AlibabaCloud\CloudPhoto\V20170711;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of EditPhotos
 *
 * @method string getTakenAt()
 * @method string getLibraryId()
 * @method string getShareExpireTime()
 * @method array getPhotoId()
 * @method string getStoreName()
 * @method string getRemark()
 * @method string getTitle()
 */
class EditPhotos extends RpcRequest
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
    public $action = 'EditPhotos';

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
     * @deprecated deprecated since version 2.0, Use withShareExpireTime() instead.
     *
     * @param string $shareExpireTime
     *
     * @return $this
     */
    public function setShareExpireTime($shareExpireTime)
    {
        return $this->withShareExpireTime($shareExpireTime);
    }

    /**
     * @param string $shareExpireTime
     *
     * @return $this
     */
    public function withShareExpireTime($shareExpireTime)
    {
        $this->data['ShareExpireTime'] = $shareExpireTime;
        $this->options['query']['ShareExpireTime'] = $shareExpireTime;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use getPhotoId() instead.
     *
     * @return array
     */
    public function getPhotoIds()
    {
        return $this->getPhotoId();
    }

    /**
     * @deprecated deprecated since version 2.0, Use withPhotoId() instead.
     *
     * @param array $photoIds
     *
     * @return $this
     */
    public function setPhotoIds(array $photoIds)
    {
        return $this->withPhotoId($photoIds);
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
     * @deprecated deprecated since version 2.0, Use withTitle() instead.
     *
     * @param string $title
     *
     * @return $this
     */
    public function setTitle($title)
    {
        return $this->withTitle($title);
    }

    /**
     * @param string $title
     *
     * @return $this
     */
    public function withTitle($title)
    {
        $this->data['Title'] = $title;
        $this->options['query']['Title'] = $title;

        return $this;
    }
}
