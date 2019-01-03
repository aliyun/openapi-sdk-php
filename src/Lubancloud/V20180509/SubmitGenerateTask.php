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
     * @deprecated deprecated since version 2.0, Use withImageCount() instead.
     *
     * @param string $imageCount
     *
     * @return $this
     */
    public function setImageCount($imageCount)
    {
        return $this->withImageCount($imageCount);
    }

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
     * @deprecated deprecated since version 2.0, Use withActionPoint() instead.
     *
     * @param string $actionPoint
     *
     * @return $this
     */
    public function setActionPoint($actionPoint)
    {
        return $this->withActionPoint($actionPoint);
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
     * @deprecated deprecated since version 2.0, Use withLogoImagePath() instead.
     *
     * @param string $logoImagePath
     *
     * @return $this
     */
    public function setLogoImagePath($logoImagePath)
    {
        return $this->withLogoImagePath($logoImagePath);
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
     * @deprecated deprecated since version 2.0, Use withType() instead.
     *
     * @param string $type
     *
     * @return $this
     */
    public function setType($type)
    {
        return $this->withType($type);
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
     * @deprecated deprecated since version 2.0, Use getMajorImagePath() instead.
     *
     * @return array
     */
    public function getMajorImagePaths()
    {
        return $this->getMajorImagePath();
    }

    /**
     * @deprecated deprecated since version 2.0, Use withMajorImagePath() instead.
     *
     * @param array $majorImagePaths
     *
     * @return $this
     */
    public function setMajorImagePaths(array $majorImagePaths)
    {
        return $this->withMajorImagePath($majorImagePaths);
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
     * @deprecated deprecated since version 2.0, Use withWidth() instead.
     *
     * @param string $width
     *
     * @return $this
     */
    public function setWidth($width)
    {
        return $this->withWidth($width);
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
     * @deprecated deprecated since version 2.0, Use getCopyWrite() instead.
     *
     * @return array
     */
    public function getCopyWrites()
    {
        return $this->getCopyWrite();
    }

    /**
     * @deprecated deprecated since version 2.0, Use withCopyWrite() instead.
     *
     * @param array $copyWrites
     *
     * @return $this
     */
    public function setCopyWrites(array $copyWrites)
    {
        return $this->withCopyWrite($copyWrites);
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
     * @deprecated deprecated since version 2.0, Use getPropertyId() instead.
     *
     * @return array
     */
    public function getPropertyIds()
    {
        return $this->getPropertyId();
    }

    /**
     * @deprecated deprecated since version 2.0, Use withPropertyId() instead.
     *
     * @param array $propertyIds
     *
     * @return $this
     */
    public function setPropertyIds(array $propertyIds)
    {
        return $this->withPropertyId($propertyIds);
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
     * @deprecated deprecated since version 2.0, Use withHeight() instead.
     *
     * @param string $height
     *
     * @return $this
     */
    public function setHeight($height)
    {
        return $this->withHeight($height);
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
