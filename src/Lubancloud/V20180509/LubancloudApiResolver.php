<?php

namespace AlibabaCloud\Lubancloud\V20180509;

use AlibabaCloud\Client\Resolver\ApiResolver;

/**
 * @method SubmitCutoutTask submitCutoutTask(array $options = [])
 * @method QueryCutoutTaskResult queryCutoutTaskResult(array $options = [])
 * @method SubmitGenerateTask submitGenerateTask(array $options = [])
 * @method QueryGenerateTaskResult queryGenerateTaskResult(array $options = [])
 * @method GetStyles getStyles(array $options = [])
 * @method BuyOriginPictures buyOriginPictures(array $options = [])
 */
class LubancloudApiResolver extends ApiResolver
{
}

class Rpc extends \AlibabaCloud\Client\Resolver\Rpc
{
    /** @var string */
    public $product = 'lubancloud';

    /** @var string */
    public $version = '2018-05-09';

    /** @var string */
    public $method = 'POST';

    /** @var string */
    public $serviceCode = 'luban';
}

/**
 * @method array getPictureUrl()
 */
class SubmitCutoutTask extends Rpc
{

    /**
     * @param array $pictureUrl
     *
     * @return $this
     */
    public function withPictureUrl(array $pictureUrl)
    {
        $this->data['PictureUrl'] = $pictureUrl;
        foreach ($pictureUrl as $i => $iValue) {
            $this->options['query']['PictureUrl.' . ($i + 1)] = $iValue;
        }

        return $this;
    }
}

/**
 * @method string getTaskId()
 * @method $this withTaskId($value)
 */
class QueryCutoutTaskResult extends Rpc
{
}

/**
 * @method string getImageCount()
 * @method $this withImageCount($value)
 * @method string getActionPoint()
 * @method $this withActionPoint($value)
 * @method string getLogoImagePath()
 * @method $this withLogoImagePath($value)
 * @method string getType()
 * @method $this withType($value)
 * @method array getMajorImagePath()
 * @method string getWidth()
 * @method $this withWidth($value)
 * @method array getCopyWrite()
 * @method array getPropertyId()
 * @method string getHeight()
 * @method $this withHeight($value)
 */
class SubmitGenerateTask extends Rpc
{

    /**
     * @param array $majorImagePath
     *
     * @return $this
     */
    public function withMajorImagePath(array $majorImagePath)
    {
        $this->data['MajorImagePath'] = $majorImagePath;
        foreach ($majorImagePath as $i => $iValue) {
            $this->options['query']['MajorImagePath.' . ($i + 1)] = $iValue;
        }

        return $this;
    }

    /**
     * @param array $copyWrite
     *
     * @return $this
     */
    public function withCopyWrite(array $copyWrite)
    {
        $this->data['CopyWrite'] = $copyWrite;
        foreach ($copyWrite as $i => $iValue) {
            $this->options['query']['CopyWrite.' . ($i + 1)] = $iValue;
        }

        return $this;
    }

    /**
     * @param array $propertyId
     *
     * @return $this
     */
    public function withPropertyId(array $propertyId)
    {
        $this->data['PropertyId'] = $propertyId;
        foreach ($propertyId as $i => $iValue) {
            $this->options['query']['PropertyId.' . ($i + 1)] = $iValue;
        }

        return $this;
    }
}

/**
 * @method string getTaskId()
 * @method $this withTaskId($value)
 */
class QueryGenerateTaskResult extends Rpc
{
}

class GetStyles extends Rpc
{
}

/**
 * @method array getPictureId()
 */
class BuyOriginPictures extends Rpc
{

    /**
     * @param array $pictureId
     *
     * @return $this
     */
    public function withPictureId(array $pictureId)
    {
        $this->data['PictureId'] = $pictureId;
        foreach ($pictureId as $i => $iValue) {
            $this->options['query']['PictureId.' . ($i + 1)] = $iValue;
        }

        return $this;
    }
}
