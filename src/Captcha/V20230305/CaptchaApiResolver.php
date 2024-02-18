<?php

namespace AlibabaCloud\Captcha\V20230305;

use AlibabaCloud\Client\Resolver\ApiResolver;

/**
 * @method VerifyCaptcha verifyCaptcha(array $options = [])
 * @method VerifyIntelligentCaptcha verifyIntelligentCaptcha(array $options = [])
 */
class CaptchaApiResolver extends ApiResolver
{
}

class Rpc extends \AlibabaCloud\Client\Resolver\Rpc
{
    /** @var string */
    public $product = 'captcha';

    /** @var string */
    public $version = '2023-03-05';

    /** @var string */
    public $method = 'POST';
}

/**
 * @method string getCaptchaVerifyParam()
 * @method $this withCaptchaVerifyParam($value)
 */
class VerifyCaptcha extends Rpc
{
}

/**
 * @method string getCaptchaVerifyParam()
 * @method string getSceneId()
 */
class VerifyIntelligentCaptcha extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCaptchaVerifyParam($value)
    {
        $this->data['CaptchaVerifyParam'] = $value;
        $this->options['form_params']['CaptchaVerifyParam'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSceneId($value)
    {
        $this->data['SceneId'] = $value;
        $this->options['form_params']['SceneId'] = $value;

        return $this;
    }
}
