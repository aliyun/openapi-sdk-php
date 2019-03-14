<?php

namespace AlibabaCloud\CloudPhoto\V20170711;

use AlibabaCloud\Rpc;

/**
 * Api CreatePhoto
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
class CreatePhoto extends Rpc
{
    public $product = 'CloudPhoto';

    public $version = '2017-07-11';

    public $scheme = 'https';

    public $method = 'POST';

    public $serviceCode = 'cloudphoto';

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
