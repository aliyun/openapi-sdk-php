<?php

namespace AlibabaCloud\Lubancloud\V20180509;

use AlibabaCloud\Rpc;

class V20180509Rpc extends Rpc
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
 * @method string getTaskId()
 * @method $this withTaskId($value)
 */
class QueryCutoutTaskResult extends V20180509Rpc
{
}

/**
 * @method array getPictureUrl()
 */
class SubmitCutoutTask extends V20180509Rpc
{

    /**
     * @param array $value
     *
     * @return $this
     */
    public function withPictureUrl(array $value)
    {
        $this->data['PictureUrl'] = $value;
        foreach ($value as $i => $iValue) {
            $this->options['query']['PictureUrl.' . ($i + 1)] = $iValue;
        }

        return $this;
    }
}

/**
 * @method string getTaskId()
 * @method $this withTaskId($value)
 */
class QueryGenerateTaskResult extends V20180509Rpc
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
class SubmitGenerateTask extends V20180509Rpc
{

    /**
     * @param array $value
     *
     * @return $this
     */
    public function withMajorImagePath(array $value)
    {
        $this->data['MajorImagePath'] = $value;
        foreach ($value as $i => $iValue) {
            $this->options['query']['MajorImagePath.' . ($i + 1)] = $iValue;
        }

        return $this;
    }

    /**
     * @param array $value
     *
     * @return $this
     */
    public function withCopyWrite(array $value)
    {
        $this->data['CopyWrite'] = $value;
        foreach ($value as $i => $iValue) {
            $this->options['query']['CopyWrite.' . ($i + 1)] = $iValue;
        }

        return $this;
    }

    /**
     * @param array $value
     *
     * @return $this
     */
    public function withPropertyId(array $value)
    {
        $this->data['PropertyId'] = $value;
        foreach ($value as $i => $iValue) {
            $this->options['query']['PropertyId.' . ($i + 1)] = $iValue;
        }

        return $this;
    }
}

class GetStyles extends V20180509Rpc
{
}

/**
 * @method array getPictureId()
 */
class BuyOriginPictures extends V20180509Rpc
{

    /**
     * @param array $value
     *
     * @return $this
     */
    public function withPictureId(array $value)
    {
        $this->data['PictureId'] = $value;
        foreach ($value as $i => $iValue) {
            $this->options['query']['PictureId.' . ($i + 1)] = $iValue;
        }

        return $this;
    }
}
