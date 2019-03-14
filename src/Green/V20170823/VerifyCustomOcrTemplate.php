<?php

namespace AlibabaCloud\Green\V20170823;

use AlibabaCloud\Rpc;

/**
 * Api VerifyCustomOcrTemplate
 *
 * @method string getTestImgUrl()
 * @method string getSourceIp()
 * @method string getId()
 */
class VerifyCustomOcrTemplate extends Rpc
{
    public $product = 'Green';

    public $version = '2017-08-23';

    public $method = 'POST';

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
