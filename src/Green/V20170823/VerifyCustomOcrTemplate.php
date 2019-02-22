<?php

namespace AlibabaCloud\Green\V20170823;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of VerifyCustomOcrTemplate
 *
 * @method string getTestImgUrl()
 * @method string getSourceIp()
 * @method string getId()
 */
class VerifyCustomOcrTemplate extends RpcRequest
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
    public $action = 'VerifyCustomOcrTemplate';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @var string
     */
    public $serviceCode = 'green';

    /**
     * @param string $testImgUrl
     *
     * @return $this
     */
    public function withTestImgUrl($testImgUrl)
    {
        $this->data['TestImgUrl'] = $testImgUrl;
        $this->options['query']['TestImgUrl'] = $testImgUrl;

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
}
