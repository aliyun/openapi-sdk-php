<?php

namespace AlibabaCloud\Hiknoengine\V20190625;

use AlibabaCloud\Client\Resolver\ApiResolver;

/**
 * @method TranslateText translateText(array $options = [])
 */
class HiknoengineApiResolver extends ApiResolver
{
}

class Rpc extends \AlibabaCloud\Client\Resolver\Rpc
{
    /** @var string */
    public $product = 'hiknoengine';

    /** @var string */
    public $version = '2019-06-25';

    /** @var string */
    public $method = 'POST';

    /** @var string */
    public $serviceCode = 'hiknoengine';
}

/**
 * @method string getFromLang()
 * @method string getToLang()
 * @method string getText()
 */
class TranslateText extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withFromLang($value)
    {
        $this->data['FromLang'] = $value;
        $this->options['form_params']['FromLang'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withToLang($value)
    {
        $this->data['ToLang'] = $value;
        $this->options['form_params']['ToLang'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withText($value)
    {
        $this->data['Text'] = $value;
        $this->options['form_params']['Text'] = $value;

        return $this;
    }
}
