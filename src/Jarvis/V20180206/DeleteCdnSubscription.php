<?php

namespace AlibabaCloud\Jarvis\V20180206;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of DeleteCdnSubscription
 *
 * @method string getSourceIp()
 * @method string getLang()
 * @method string getCdnUidList()
 * @method string getSourceCode()
 */
class DeleteCdnSubscription extends RpcRequest
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
    public $action = 'DeleteCdnSubscription';

    /**
     * @var string
     */
    public $method = 'POST';

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
     * @param string $cdnUidList
     *
     * @return $this
     */
    public function withCdnUidList($cdnUidList)
    {
        $this->data['CdnUidList'] = $cdnUidList;
        $this->options['query']['CdnUidList'] = $cdnUidList;

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
