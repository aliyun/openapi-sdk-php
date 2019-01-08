<?php

namespace AlibabaCloud\Green\V20170823;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of UpdateAppPackage
 *
 * @method string getDebug()
 * @method string getSourceIp()
 * @method string getPackageUrl()
 * @method string getId()
 * @method string getLang()
 * @method string getPlatform()
 */
class UpdateAppPackage extends RpcRequest
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
    public $action = 'UpdateAppPackage';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @var string
     */
    public $serviceCode = 'green';

    /**
     * @param string $debug
     *
     * @return $this
     */
    public function withDebug($debug)
    {
        $this->data['Debug'] = $debug;
        $this->options['query']['Debug'] = $debug;

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
     * @param string $packageUrl
     *
     * @return $this
     */
    public function withPackageUrl($packageUrl)
    {
        $this->data['PackageUrl'] = $packageUrl;
        $this->options['query']['PackageUrl'] = $packageUrl;

        return $this;
    }

    /**
     * @param string $id
     *
     * @return $this
     */
    public function withId($id)
    {
        $this->data['Id'] = $id;
        $this->options['query']['Id'] = $id;

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
