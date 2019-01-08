<?php

namespace AlibabaCloud\Green\V20170823;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of VerifyPhone
 *
 * @method string getVerifyCode()
 * @method string getSourceIp()
 * @method string getPhone()
 * @method string getLang()
 */
class VerifyPhone extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'Green';

    /**
     * @var string
     */
    public $version = '2017-08-23';

    /**
     * @var string
     */
    public $action = 'VerifyPhone';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @var string
     */
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
     * @param string $phone
     *
     * @return $this
     */
    public function withPhone($phone)
    {
        $this->data['Phone'] = $phone;
        $this->options['query']['Phone'] = $phone;

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
