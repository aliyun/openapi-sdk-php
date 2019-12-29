<?php

namespace AlibabaCloud\Facebody\V20191230;

use AlibabaCloud\Client\Resolver\ApiResolver;

/**
 * @method CompareFace compareFace(array $options = [])
 * @method DetectFace detectFace(array $options = [])
 * @method RecognizeFace recognizeFace(array $options = [])
 */
class FacebodyApiResolver extends ApiResolver
{
}

class Rpc extends \AlibabaCloud\Client\Resolver\Rpc
{
    /** @var string */
    public $product = 'facebody';

    /** @var string */
    public $version = '2019-12-30';

    /** @var string */
    public $method = 'POST';

    /** @var string */
    public $serviceCode = 'facebody';
}

/**
 * @method string getImageContentB()
 * @method string getImageType()
 * @method string getImageContentA()
 * @method string getImageURLB()
 * @method string getImageURLA()
 */
class CompareFace extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withImageContentB($value)
    {
        $this->data['ImageContentB'] = $value;
        $this->options['form_params']['ImageContentB'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withImageType($value)
    {
        $this->data['ImageType'] = $value;
        $this->options['form_params']['ImageType'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withImageContentA($value)
    {
        $this->data['ImageContentA'] = $value;
        $this->options['form_params']['ImageContentA'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withImageURLB($value)
    {
        $this->data['ImageURLB'] = $value;
        $this->options['form_params']['ImageURLB'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withImageURLA($value)
    {
        $this->data['ImageURLA'] = $value;
        $this->options['form_params']['ImageURLA'] = $value;

        return $this;
    }
}

/**
 * @method string getImageType()
 * @method string getImageURL()
 * @method string getImageContent()
 */
class DetectFace extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withImageType($value)
    {
        $this->data['ImageType'] = $value;
        $this->options['form_params']['ImageType'] = $value;

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
 * @method string getImageType()
 * @method string getImageURL()
 * @method string getImageContent()
 */
class RecognizeFace extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withImageType($value)
    {
        $this->data['ImageType'] = $value;
        $this->options['form_params']['ImageType'] = $value;

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
