<?php

namespace AlibabaCloud\Green\V20170823;

use AlibabaCloud\Rpc;

/**
 * Api VerifyEmail
 *
 * @method string getVerifyCode()
 * @method string getSourceIp()
 * @method string getLang()
 */
class VerifyEmail extends Rpc
{
    public $product = 'Green';

    public $version = '2017-08-23';

    public $method = 'POST';

    public $serviceCode = 'green';

    /**
     * @param string $verifyCode
     *
     * @return $this
     */
    public function withVerifyCode($verifyCode)
    {
        $this->data['VerifyCode'] = $verifyCode;
        $this->options['query']['VerifyCode'] = $verifyCode;

        return $this;
    }

    /**
     * @param string $sourceIp
     *
     * @return $this
     */
    public function withSourceIp($sourceIp)
    {
        $this->data['SourceIp'] = $sourceIp;
        $this->options['query']['SourceIp'] = $sourceIp;

        return $this;
    }

    /**
     * @param string $lang
     *
     * @return $this
     */
    public function withLang($lang)
    {
        $this->data['Lang'] = $lang;
        $this->options['query']['Lang'] = $lang;

        return $this;
    }
}
