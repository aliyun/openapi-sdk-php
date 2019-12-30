<?php

namespace AlibabaCloud\Visionai\V20191024;

use AlibabaCloud\Client\Resolver\ApiResolver;

/**
 * @method IdentifyAnimal identifyAnimal(array $options = [])
 * @method IdentifyPlant identifyPlant(array $options = [])
 * @method RecognizeProdcategory recognizeProdcategory(array $options = [])
 * @method RecognizeProdmlabel recognizeProdmlabel(array $options = [])
 * @method RecognizeVehicle recognizeVehicle(array $options = [])
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
 * @method string getImageContent()
 */
class IdentifyAnimal extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withImageContent($value)
    {
        $this->data['ImageContent'] = $value;
        $this->options['form_params']['ImageContent'] = $value;

        return $this;
    }
}

/**
 * @method string getImageContent()
 */
class IdentifyPlant extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withImageContent($value)
    {
        $this->data['ImageContent'] = $value;
        $this->options['form_params']['ImageContent'] = $value;

        return $this;
    }
}

/**
 * @method string getImageContent()
 */
class RecognizeProdcategory extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withImageContent($value)
    {
        $this->data['ImageContent'] = $value;
        $this->options['form_params']['ImageContent'] = $value;

        return $this;
    }
}

/**
 * @method string getImageContent()
 */
class RecognizeProdmlabel extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withImageContent($value)
    {
        $this->data['ImageContent'] = $value;
        $this->options['form_params']['ImageContent'] = $value;

        return $this;
    }
}

/**
 * @method string getImageContent()
 */
class RecognizeVehicle extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withImageContent($value)
    {
        $this->data['ImageContent'] = $value;
        $this->options['form_params']['ImageContent'] = $value;

        return $this;
    }
}
