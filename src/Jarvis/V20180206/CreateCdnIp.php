<?php

namespace AlibabaCloud\Jarvis\V20180206;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of CreateCdnIp
 *
 * @method string getCdnIpList()
 * @method string getResourceOwnerId()
 * @method string getSourceIp()
 * @method string getLang()
 * @method string getSourceCode()
 */
class CreateCdnIp extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'jarvis';

    /**
     * @var string
     */
    public $version = '2018-02-06';

    /**
     * @var string
     */
    public $action = 'CreateCdnIp';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @param string $cdnIpList
     *
     * @return $this
     */
    public function withCdnIpList($cdnIpList)
    {
        $this->data['CdnIpList'] = $cdnIpList;
        $this->options['query']['CdnIpList'] = $cdnIpList;

        return $this;
    }

    /**
     * @param string $resourceOwnerId
     *
     * @return $this
     */
    public function withResourceOwnerId($resourceOwnerId)
    {
        $this->data['ResourceOwnerId'] = $resourceOwnerId;
        $this->options['query']['ResourceOwnerId'] = $resourceOwnerId;

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

    /**
     * @param string $sourceCode
     *
     * @return $this
     */
    public function withSourceCode($sourceCode)
    {
        $this->data['SourceCode'] = $sourceCode;
        $this->options['query']['SourceCode'] = $sourceCode;

        return $this;
    }
}
