<?php

namespace AlibabaCloud\Goodstech\V20191230;

use AlibabaCloud\Client\Resolver\ApiResolver;

/**
 * @method ClassifyCommodity classifyCommodity(array $options = [])
 * @method RecognizeFurnitureAttribute recognizeFurnitureAttribute(array $options = [])
 * @method RecognizeFurnitureSpu recognizeFurnitureSpu(array $options = [])
 */
class GoodstechApiResolver extends ApiResolver
{
}

class Rpc extends \AlibabaCloud\Client\Resolver\Rpc
{
    /** @var string */
    public $product = 'goodstech';

    /** @var string */
    public $version = '2019-12-30';

    /** @var string */
    public $method = 'POST';

    /** @var string */
    public $serviceCode = 'goodstech';
}

/**
 * @method string getImageURL()
 * @method $this withImageURL($value)
 */
class ClassifyCommodity extends Rpc
{
}

/**
 * @method string getImageURL()
 */
class RecognizeFurnitureAttribute extends Rpc
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
 * @method string getXLength()
 * @method string getZLength()
 * @method string getImageURL()
 * @method string getYLength()
 */
class RecognizeFurnitureSpu extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withXLength($value)
    {
        $this->data['XLength'] = $value;
        $this->options['form_params']['XLength'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withZLength($value)
    {
        $this->data['ZLength'] = $value;
        $this->options['form_params']['ZLength'] = $value;

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
    public function withYLength($value)
    {
        $this->data['YLength'] = $value;
        $this->options['form_params']['YLength'] = $value;

        return $this;
    }
}
