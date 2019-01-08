<?php

namespace AlibabaCloud\CloudPhoto\V20170711;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of DeleteFaces
 *
 * @method string getLibraryId()
 * @method string getStoreName()
 * @method array getFaceId()
 */
class DeleteFaces extends RpcRequest
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
    public $action = 'DeleteFaces';

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
