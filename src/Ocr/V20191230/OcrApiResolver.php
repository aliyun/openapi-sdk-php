<?php

namespace AlibabaCloud\Ocr\V20191230;

use AlibabaCloud\Client\Resolver\ApiResolver;

/**
 * @method RecognizeBankCard recognizeBankCard(array $options = [])
 * @method RecognizeIdentityCard recognizeIdentityCard(array $options = [])
 * @method RecognizeLicensePlate recognizeLicensePlate(array $options = [])
 */
class OcrApiResolver extends ApiResolver
{
}

class Rpc extends \AlibabaCloud\Client\Resolver\Rpc
{
    /** @var string */
    public $product = 'ocr';

    /** @var string */
    public $version = '2019-12-30';

    /** @var string */
    public $method = 'POST';

    /** @var string */
    public $serviceCode = 'ocr';
}

/**
 * @method string getImageType()
 * @method string getImageURL()
 * @method string getImageContent()
 */
class RecognizeBankCard extends Rpc
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
 * @method string getSide()
 * @method string getImageURL()
 * @method string getImageContent()
 */
class RecognizeIdentityCard extends Rpc
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
    public function withSide($value)
    {
        $this->data['Side'] = $value;
        $this->options['form_params']['Side'] = $value;

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
class RecognizeLicensePlate extends Rpc
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
