<?php

namespace AlibabaCloud\CloudPhoto\V20170711;

use AlibabaCloud\Rpc;

/**
 * Api MergeFaces
 *
 * @method string getLibraryId()
 * @method string getTargetFaceId()
 * @method string getStoreName()
 * @method array getFaceId()
 */
class MergeFaces extends Rpc
{
    public $product = 'CloudPhoto';

    public $version = '2017-07-11';

    public $scheme = 'https';

    public $method = 'POST';

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
