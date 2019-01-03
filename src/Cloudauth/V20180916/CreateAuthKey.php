<?php

namespace AlibabaCloud\Cloudauth\V20180916;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of CreateAuthKey
 *
 * @method string getBizType()
 * @method string getUserDeviceId()
 * @method string getSourceIp()
 * @method string getTest()
 * @method string getLang()
 */
class CreateAuthKey extends RpcRequest
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
    public $action = 'CreateAuthKey';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @var string
     */
    public $serviceCode = 'cloudauth';

    /**
     * @deprecated deprecated since version 2.0, Use withBizType() instead.
     *
     * @param string $bizType
     *
     * @return $this
     */
    public function setBizType($bizType)
    {
        return $this->withBizType($bizType);
    }

    /**
     * @param string $bizType
     *
     * @return $this
     */
    public function withBizType($bizType)
    {
        $this->data['BizType'] = $bizType;
        $this->options['query']['BizType'] = $bizType;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withUserDeviceId() instead.
     *
     * @param string $userDeviceId
     *
     * @return $this
     */
    public function setUserDeviceId($userDeviceId)
    {
        return $this->withUserDeviceId($userDeviceId);
    }

    /**
     * @param string $userDeviceId
     *
     * @return $this
     */
    public function withUserDeviceId($userDeviceId)
    {
        $this->data['UserDeviceId'] = $userDeviceId;
        $this->options['query']['UserDeviceId'] = $userDeviceId;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withSourceIp() instead.
     *
     * @param string $sourceIp
     *
     * @return $this
     */
    public function setSourceIp($sourceIp)
    {
        return $this->withSourceIp($sourceIp);
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
     * @deprecated deprecated since version 2.0, Use withTest() instead.
     *
     * @param string $test
     *
     * @return $this
     */
    public function setTest($test)
    {
        return $this->withTest($test);
    }

    /**
     * @param string $test
     *
     * @return $this
     */
    public function withTest($test)
    {
        $this->data['Test'] = $test;
        $this->options['query']['Test'] = $test;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withLang() instead.
     *
     * @param string $lang
     *
     * @return $this
     */
    public function setLang($lang)
    {
        return $this->withLang($lang);
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
