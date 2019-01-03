<?php

namespace AlibabaCloud\CloudPhoto\V20170711;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of CreatePhoto
 *
 * @method string getTakenAt()
 * @method string getPhotoTitle()
 * @method string getLibraryId()
 * @method string getShareExpireTime()
 * @method string getStoreName()
 * @method string getUploadType()
 * @method string getRemark()
 * @method string getSessionId()
 * @method string getStaging()
 * @method string getFileId()
 */
class CreatePhoto extends RpcRequest
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
    public $action = 'CreatePhoto';

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
     * @deprecated deprecated since version 2.0, Use withUploadType() instead.
     *
     * @param string $uploadType
     *
     * @return $this
     */
    public function setUploadType($uploadType)
    {
        return $this->withUploadType($uploadType);
    }

    /**
     * @param string $uploadType
     *
     * @return $this
     */
    public function withUploadType($uploadType)
    {
        $this->data['UploadType'] = $uploadType;
        $this->options['query']['UploadType'] = $uploadType;

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
     * @deprecated deprecated since version 2.0, Use withSessionId() instead.
     *
     * @param string $sessionId
     *
     * @return $this
     */
    public function setSessionId($sessionId)
    {
        return $this->withSessionId($sessionId);
    }

    /**
     * @param string $sessionId
     *
     * @return $this
     */
    public function withSessionId($sessionId)
    {
        $this->data['SessionId'] = $sessionId;
        $this->options['query']['SessionId'] = $sessionId;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withStaging() instead.
     *
     * @param string $staging
     *
     * @return $this
     */
    public function setStaging($staging)
    {
        return $this->withStaging($staging);
    }

    /**
     * @param string $staging
     *
     * @return $this
     */
    public function withStaging($staging)
    {
        $this->data['Staging'] = $staging;
        $this->options['query']['Staging'] = $staging;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withFileId() instead.
     *
     * @param string $fileId
     *
     * @return $this
     */
    public function setFileId($fileId)
    {
        return $this->withFileId($fileId);
    }

    /**
     * @param string $fileId
     *
     * @return $this
     */
    public function withFileId($fileId)
    {
        $this->data['FileId'] = $fileId;
        $this->options['query']['FileId'] = $fileId;

        return $this;
    }
}
