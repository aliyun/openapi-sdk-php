<?php

namespace AlibabaCloud\CloudPhoto\V20170711;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of MergeFaces
 *
 * @method string getLibraryId()
 * @method string getTargetFaceId()
 * @method string getStoreName()
 * @method array getFaceId()
 */
class MergeFaces extends RpcRequest
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
    public $action = 'MergeFaces';

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
     * @deprecated deprecated since version 2.0, Use withTargetFaceId() instead.
     *
     * @param string $targetFaceId
     *
     * @return $this
     */
    public function setTargetFaceId($targetFaceId)
    {
        return $this->withTargetFaceId($targetFaceId);
    }

    /**
     * @param string $targetFaceId
     *
     * @return $this
     */
    public function withTargetFaceId($targetFaceId)
    {
        $this->data['TargetFaceId'] = $targetFaceId;
        $this->options['query']['TargetFaceId'] = $targetFaceId;

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
     * @deprecated deprecated since version 2.0, Use getFaceId() instead.
     *
     * @return array
     */
    public function getFaceIds()
    {
        return $this->getFaceId();
    }

    /**
     * @deprecated deprecated since version 2.0, Use withFaceId() instead.
     *
     * @param array $faceIds
     *
     * @return $this
     */
    public function setFaceIds(array $faceIds)
    {
        return $this->withFaceId($faceIds);
    }

    /**
     * @param array $faceId
     *
     * @return $this
     */
    public function withFaceId(array $faceId)
    {
        $this->data['FaceId'] = $faceId;
        foreach ($faceId as $i => $iValue) {
            $this->options['query']['FaceId.' . ($i + 1)] = $iValue;
        }

        return $this;
    }
}
