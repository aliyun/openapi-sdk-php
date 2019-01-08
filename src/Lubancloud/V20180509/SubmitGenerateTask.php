<?php

namespace AlibabaCloud\Lubancloud\V20180509;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of SubmitGenerateTask
 *
 * @method string getImageCount()
 * @method string getActionPoint()
 * @method string getLogoImagePath()
 * @method string getType()
 * @method array getMajorImagePath()
 * @method string getWidth()
 * @method array getCopyWrite()
 * @method array getPropertyId()
 * @method string getHeight()
 */
class SubmitGenerateTask extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'lubancloud';

    /**
     * @var string
     */
    public $version = '2018-05-09';

    /**
     * @var string
     */
    public $action = 'SubmitGenerateTask';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @var string
     */
    public $serviceCode = 'luban';

    /**
     * @param string $imageCount
     *
     * @return $this
     */
    public function withImageCount($imageCount)
    {
        $this->data['ImageCount'] = $imageCount;
        $this->options['query']['ImageCount'] = $imageCount;

        return $this;
    }

    /**
     * @param string $actionPoint
     *
     * @return $this
     */
    public function withActionPoint($actionPoint)
    {
        $this->data['ActionPoint'] = $actionPoint;
        $this->options['query']['ActionPoint'] = $actionPoint;

        return $this;
    }

    /**
     * @param string $logoImagePath
     *
     * @return $this
     */
    public function withLogoImagePath($logoImagePath)
    {
        $this->data['LogoImagePath'] = $logoImagePath;
        $this->options['query']['LogoImagePath'] = $logoImagePath;

        return $this;
    }

    /**
     * @param string $type
     *
     * @return $this
     */
    public function withType($type)
    {
        $this->data['Type'] = $type;
        $this->options['query']['Type'] = $type;

        return $this;
    }

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
     * @param string $width
     *
     * @return $this
     */
    public function withWidth($width)
    {
        $this->data['Width'] = $width;
        $this->options['query']['Width'] = $width;

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

    /**
     * @param string $height
     *
     * @return $this
     */
    public function withHeight($height)
    {
        $this->data['Height'] = $height;
        $this->options['query']['Height'] = $height;

        return $this;
    }
}
