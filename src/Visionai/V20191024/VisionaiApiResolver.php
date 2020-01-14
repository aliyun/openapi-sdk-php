<?php

namespace AlibabaCloud\Visionai\V20191024;

use AlibabaCloud\Client\Resolver\ApiResolver;

/**
 * @method DetectEdge detectEdge(array $options = [])
 * @method DetectMultiObject detectMultiObject(array $options = [])
 * @method DetectTransparent detectTransparent(array $options = [])
 * @method DetectWhitebg detectWhitebg(array $options = [])
 * @method IdentifyAnimal identifyAnimal(array $options = [])
 * @method IdentifyPlant identifyPlant(array $options = [])
 * @method RecognizeProdcategory recognizeProdcategory(array $options = [])
 * @method RecognizeProdmlabel recognizeProdmlabel(array $options = [])
 * @method RecognizeVehicle recognizeVehicle(array $options = [])
 * @method SegmentBody segmentBody(array $options = [])
 * @method SegmentProdcategory segmentProdcategory(array $options = [])
 */
class VisionaiApiResolver extends ApiResolver
{
}

class Rpc extends \AlibabaCloud\Client\Resolver\Rpc
{
    /** @var string */
    public $product = 'visionai';

    /** @var string */
    public $version = '2019-10-24';

    /** @var string */
    public $method = 'POST';

    /** @var string */
    public $serviceCode = 'visionai';
}

/**
 * @method string getImageUrl()
 */
class DetectEdge extends Rpc
{

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
 * @method string getImageUrl()
 */
class DetectMultiObject extends Rpc
{

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
 * @method string getImageUrl()
 */
class DetectTransparent extends Rpc
{

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
 * @method string getImageUrl()
 */
class DetectWhitebg extends Rpc
{

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
 * @method string getImageUrl()
 */
class IdentifyAnimal extends Rpc
{

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
 * @method string getImageUrl()
 */
class IdentifyPlant extends Rpc
{

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
 * @method string getImageUrl()
 */
class RecognizeProdcategory extends Rpc
{

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
 * @method string getImageUrl()
 */
class RecognizeProdmlabel extends Rpc
{

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
 * @method string getImageUrl()
 */
class RecognizeVehicle extends Rpc
{

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
 * @method string getImageUrl()
 */
class SegmentBody extends Rpc
{

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
 * @method string getImageUrl()
 */
class SegmentProdcategory extends Rpc
{

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
