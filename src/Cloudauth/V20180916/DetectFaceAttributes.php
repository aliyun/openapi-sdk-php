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
