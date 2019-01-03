<?php

namespace AlibabaCloud\Cloudauth\V20180916;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of DetectFaceAttributes
 *
 * @method string getMaxNumPhotosPerCategory()
 * @method string getMaxFaceNum()
 * @method string getResourceOwnerId()
 * @method string getSourceIp()
 * @method string getRetAttributes()
 * @method string getMaterialValue()
 * @method string getDontSaveDB()
 * @method string getClientTag()
 */
class DetectFaceAttributes extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'Cloudauth';

    /**
     * @var string
     */
    public $version = '2018-09-16';

    /**
     * @var string
     */
    public $action = 'DetectFaceAttributes';

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
    public $serviceCode = 'cloudauth';

    /**
     * @deprecated deprecated since version 2.0, Use withMaxNumPhotosPerCategory() instead.
     *
     * @param string $maxNumPhotosPerCategory
     *
     * @return $this
     */
    public function setMaxNumPhotosPerCategory($maxNumPhotosPerCategory)
    {
        return $this->withMaxNumPhotosPerCategory($maxNumPhotosPerCategory);
    }

    /**
     * @param string $maxNumPhotosPerCategory
     *
     * @return $this
     */
    public function withMaxNumPhotosPerCategory($maxNumPhotosPerCategory)
    {
        $this->data['MaxNumPhotosPerCategory'] = $maxNumPhotosPerCategory;
        $this->options['query']['MaxNumPhotosPerCategory'] = $maxNumPhotosPerCategory;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withMaxFaceNum() instead.
     *
     * @param string $maxFaceNum
     *
     * @return $this
     */
    public function setMaxFaceNum($maxFaceNum)
    {
        return $this->withMaxFaceNum($maxFaceNum);
    }

    /**
     * @param string $maxFaceNum
     *
     * @return $this
     */
    public function withMaxFaceNum($maxFaceNum)
    {
        $this->data['MaxFaceNum'] = $maxFaceNum;
        $this->options['query']['MaxFaceNum'] = $maxFaceNum;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withResourceOwnerId() instead.
     *
     * @param string $resourceOwnerId
     *
     * @return $this
     */
    public function setResourceOwnerId($resourceOwnerId)
    {
        return $this->withResourceOwnerId($resourceOwnerId);
    }

    /**
     * @param string $resourceOwnerId
     *
     * @return $this
     */
    public function withResourceOwnerId($resourceOwnerId)
    {
        $this->data['ResourceOwnerId'] = $resourceOwnerId;
        $this->options['query']['ResourceOwnerId'] = $resourceOwnerId;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withSourceIp() instead.
     *
     * @param string $sourceIp
     *
     * @return $this
     */
    public function setSourceIp($sourceIp)
    {
        return $this->withSourceIp($sourceIp);
    }

    /**
     * @param string $sourceIp
     *
     * @return $this
     */
    public function withSourceIp($sourceIp)
    {
        $this->data['SourceIp'] = $sourceIp;
        $this->options['query']['SourceIp'] = $sourceIp;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withRetAttributes() instead.
     *
     * @param string $retAttributes
     *
     * @return $this
     */
    public function setRetAttributes($retAttributes)
    {
        return $this->withRetAttributes($retAttributes);
    }

    /**
     * @param string $retAttributes
     *
     * @return $this
     */
    public function withRetAttributes($retAttributes)
    {
        $this->data['RetAttributes'] = $retAttributes;
        $this->options['query']['RetAttributes'] = $retAttributes;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withMaterialValue() instead.
     *
     * @param string $materialValue
     *
     * @return $this
     */
    public function setMaterialValue($materialValue)
    {
        return $this->withMaterialValue($materialValue);
    }

    /**
     * @param string $materialValue
     *
     * @return $this
     */
    public function withMaterialValue($materialValue)
    {
        $this->data['MaterialValue'] = $materialValue;
        $this->options['query']['MaterialValue'] = $materialValue;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withDontSaveDB() instead.
     *
     * @param string $dontSaveDB
     *
     * @return $this
     */
    public function setDontSaveDB($dontSaveDB)
    {
        return $this->withDontSaveDB($dontSaveDB);
    }

    /**
     * @param string $dontSaveDB
     *
     * @return $this
     */
    public function withDontSaveDB($dontSaveDB)
    {
        $this->data['DontSaveDB'] = $dontSaveDB;
        $this->options['query']['DontSaveDB'] = $dontSaveDB;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withClientTag() instead.
     *
     * @param string $clientTag
     *
     * @return $this
     */
    public function setClientTag($clientTag)
    {
        return $this->withClientTag($clientTag);
    }

    /**
     * @param string $clientTag
     *
     * @return $this
     */
    public function withClientTag($clientTag)
    {
        $this->data['ClientTag'] = $clientTag;
        $this->options['query']['ClientTag'] = $clientTag;

        return $this;
    }
}
