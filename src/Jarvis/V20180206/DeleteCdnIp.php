<?php

namespace AlibabaCloud\Jarvis\V20180206;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of DeleteCdnIp
 *
 * @method string getItemId()
 * @method string getResourceOwnerId()
 * @method string getSourceIp()
 * @method string getCdnIp()
 * @method string getLang()
 * @method string getSourceCode()
 */
class DeleteCdnIp extends RpcRequest
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
    public $action = 'DeleteCdnIp';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @param string $itemId
     *
     * @return $this
     */
    public function withItemId($itemId)
    {
        $this->data['ItemId'] = $itemId;
        $this->options['query']['ItemId'] = $itemId;

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
     * @param string $cdnIp
     *
     * @return $this
     */
    public function withCdnIp($cdnIp)
    {
        $this->data['CdnIp'] = $cdnIp;
        $this->options['query']['CdnIp'] = $cdnIp;

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
