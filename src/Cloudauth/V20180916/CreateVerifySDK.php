<?php

namespace AlibabaCloud\Cloudauth\V20180916;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of CreateVerifySDK
 *
 * @method string getSourceIp()
 * @method string getAppUrl()
 * @method string getLang()
 * @method string getPlatform()
 */
class CreateVerifySDK extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'Cloudauth';

    /**
     * @var string
     */
    public $version = '2018-09-16';

    /**
     * @var string
     */
    public $action = 'CreateVerifySDK';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @var string
     */
    public $serviceCode = 'cloudauth';

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
     * @param string $appUrl
     *
     * @return $this
     */
    public function withAppUrl($appUrl)
    {
        $this->data['AppUrl'] = $appUrl;
        $this->options['query']['AppUrl'] = $appUrl;

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

    /**
     * @param string $platform
     *
     * @return $this
     */
    public function withPlatform($platform)
    {
        $this->data['Platform'] = $platform;
        $this->options['query']['Platform'] = $platform;

        return $this;
    }
}
