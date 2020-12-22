<?php

namespace AlibabaCloud\Imageseg\V20191230;

use AlibabaCloud\Client\Resolver\ApiResolver;

/**
 * @method ChangeSky changeSky(array $options = [])
 * @method GetAsyncJobResult getAsyncJobResult(array $options = [])
 * @method ParseFace parseFace(array $options = [])
 * @method RefineMask refineMask(array $options = [])
 * @method SegmentAnimal segmentAnimal(array $options = [])
 * @method SegmentBody segmentBody(array $options = [])
 * @method SegmentCloth segmentCloth(array $options = [])
 * @method SegmentCommodity segmentCommodity(array $options = [])
 * @method SegmentCommonImage segmentCommonImage(array $options = [])
 * @method SegmentFace segmentFace(array $options = [])
 * @method SegmentFood segmentFood(array $options = [])
 * @method SegmentFurniture segmentFurniture(array $options = [])
 * @method SegmentHair segmentHair(array $options = [])
 * @method SegmentHDBody segmentHDBody(array $options = [])
 * @method SegmentHDCommonImage segmentHDCommonImage(array $options = [])
 * @method SegmentHDSky segmentHDSky(array $options = [])
 * @method SegmentHead segmentHead(array $options = [])
 * @method SegmentLogo segmentLogo(array $options = [])
 * @method SegmentScene segmentScene(array $options = [])
 * @method SegmentSkin segmentSkin(array $options = [])
 * @method SegmentSky segmentSky(array $options = [])
 * @method SegmentVehicle segmentVehicle(array $options = [])
 */
class ImagesegApiResolver extends ApiResolver
{
}

class Rpc extends \AlibabaCloud\Client\Resolver\Rpc
{
    /** @var string */
    public $product = 'imageseg';

    /** @var string */
    public $version = '2019-12-30';

    /** @var string */
    public $method = 'POST';

    /** @var string */
    public $serviceCode = 'imageseg';
}

/**
 * @method string getReplaceImageURL()
 * @method $this withReplaceImageURL($value)
 * @method string getImageURL()
 * @method $this withImageURL($value)
 */
class ChangeSky extends Rpc
{
}

/**
 * @method string getAsync()
 * @method string getJobId()
 */
class GetAsyncJobResult extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAsync($value)
    {
        $this->data['Async'] = $value;
        $this->options['form_params']['Async'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withJobId($value)
    {
        $this->data['JobId'] = $value;
        $this->options['form_params']['JobId'] = $value;

        return $this;
    }
}

/**
 * @method string getImageURL()
 * @method $this withImageURL($value)
 */
class ParseFace extends Rpc
{
}

/**
 * @method string getMaskImageURL()
 * @method string getImageURL()
 */
class RefineMask extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withMaskImageURL($value)
    {
        $this->data['MaskImageURL'] = $value;
        $this->options['form_params']['MaskImageURL'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withImageURL($value)
    {
        $this->data['ImageURL'] = $value;
        $this->options['form_params']['ImageURL'] = $value;

        return $this;
    }
}

/**
 * @method string getReturnForm()
 * @method $this withReturnForm($value)
 * @method string getImageURL()
 * @method $this withImageURL($value)
 */
class SegmentAnimal extends Rpc
{
}

/**
 * @method string getReturnForm()
 * @method $this withReturnForm($value)
 * @method string getAsync()
 * @method string getImageURL()
 * @method $this withImageURL($value)
 */
class SegmentBody extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAsync($value)
    {
        $this->data['Async'] = $value;
        $this->options['form_params']['Async'] = $value;

        return $this;
    }
}

/**
 * @method string getImageURL()
 * @method $this withImageURL($value)
 */
class SegmentCloth extends Rpc
{
}

/**
 * @method string getReturnForm()
 * @method $this withReturnForm($value)
 * @method string getImageURL()
 * @method $this withImageURL($value)
 */
class SegmentCommodity extends Rpc
{
}

/**
 * @method string getReturnForm()
 * @method $this withReturnForm($value)
 * @method string getImageURL()
 * @method $this withImageURL($value)
 */
class SegmentCommonImage extends Rpc
{
}

/**
 * @method string getImageURL()
 * @method $this withImageURL($value)
 */
class SegmentFace extends Rpc
{
}

/**
 * @method string getReturnForm()
 * @method $this withReturnForm($value)
 * @method string getImageURL()
 * @method $this withImageURL($value)
 */
class SegmentFood extends Rpc
{
}

/**
 * @method string getImageURL()
 */
class SegmentFurniture extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withImageURL($value)
    {
        $this->data['ImageURL'] = $value;
        $this->options['form_params']['ImageURL'] = $value;

        return $this;
    }
}

/**
 * @method string getImageURL()
 * @method $this withImageURL($value)
 */
class SegmentHair extends Rpc
{
}

/**
 * @method string getImageURL()
 * @method $this withImageURL($value)
 */
class SegmentHDBody extends Rpc
{
}

/**
 * @method string getAsync()
 * @method string getImageUrl()
 */
class SegmentHDCommonImage extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAsync($value)
    {
        $this->data['Async'] = $value;
        $this->options['form_params']['Async'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withImageUrl($value)
    {
        $this->data['ImageUrl'] = $value;
        $this->options['form_params']['ImageUrl'] = $value;

        return $this;
    }
}

/**
 * @method string getImageURL()
 */
class SegmentHDSky extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withImageURL($value)
    {
        $this->data['ImageURL'] = $value;
        $this->options['form_params']['ImageURL'] = $value;

        return $this;
    }
}

/**
 * @method string getReturnForm()
 * @method $this withReturnForm($value)
 * @method string getImageURL()
 * @method $this withImageURL($value)
 */
class SegmentHead extends Rpc
{
}

/**
 * @method string getImageURL()
 * @method $this withImageURL($value)
 */
class SegmentLogo extends Rpc
{
}

/**
 * @method string getImageURL()
 * @method $this withImageURL($value)
 */
class SegmentScene extends Rpc
{
}

/**
 * @method string getURL()
 */
class SegmentSkin extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withURL($value)
    {
        $this->data['URL'] = $value;
        $this->options['form_params']['URL'] = $value;

        return $this;
    }
}

/**
 * @method string getImageURL()
 * @method $this withImageURL($value)
 */
class SegmentSky extends Rpc
{
}

/**
 * @method string getImageURL()
 */
class SegmentVehicle extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withImageURL($value)
    {
        $this->data['ImageURL'] = $value;
        $this->options['form_params']['ImageURL'] = $value;

        return $this;
    }
}
