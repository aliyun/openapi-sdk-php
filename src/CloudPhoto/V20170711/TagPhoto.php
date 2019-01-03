<?php

namespace AlibabaCloud\CloudPhoto\V20170711;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of TagPhoto
 *
 * @method string getLibraryId()
 * @method array getConfidence()
 * @method string getStoreName()
 * @method string getPhotoId()
 * @method array getTagKey()
 */
class TagPhoto extends RpcRequest
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
    public $action = 'TagPhoto';

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
     * @deprecated deprecated since version 2.0, Use getConfidence() instead.
     *
     * @return array
     */
    public function getConfidences()
    {
        return $this->getConfidence();
    }

    /**
     * @deprecated deprecated since version 2.0, Use withConfidence() instead.
     *
     * @param array $confidences
     *
     * @return $this
     */
    public function setConfidences(array $confidences)
    {
        return $this->withConfidence($confidences);
    }

    /**
     * @param array $confidence
     *
     * @return $this
     */
    public function withConfidence(array $confidence)
    {
        $this->data['Confidence'] = $confidence;
        foreach ($confidence as $i => $iValue) {
            $this->options['query']['Confidence.' . ($i + 1)] = $iValue;
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
     * @deprecated deprecated since version 2.0, Use withPhotoId() instead.
     *
     * @param string $photoId
     *
     * @return $this
     */
    public function setPhotoId($photoId)
    {
        return $this->withPhotoId($photoId);
    }

    /**
     * @param string $photoId
     *
     * @return $this
     */
    public function withPhotoId($photoId)
    {
        $this->data['PhotoId'] = $photoId;
        $this->options['query']['PhotoId'] = $photoId;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use getTagKey() instead.
     *
     * @return array
     */
    public function getTagKeys()
    {
        return $this->getTagKey();
    }

    /**
     * @deprecated deprecated since version 2.0, Use withTagKey() instead.
     *
     * @param array $tagKeys
     *
     * @return $this
     */
    public function setTagKeys(array $tagKeys)
    {
        return $this->withTagKey($tagKeys);
    }

    /**
     * @param array $tagKey
     *
     * @return $this
     */
    public function withTagKey(array $tagKey)
    {
        $this->data['TagKey'] = $tagKey;
        foreach ($tagKey as $i => $iValue) {
            $this->options['query']['TagKey.' . ($i + 1)] = $iValue;
        }

        return $this;
    }
}
