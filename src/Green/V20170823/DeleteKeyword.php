<?php

namespace AlibabaCloud\Green\V20170823;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of DeleteKeyword
 *
 * @method string getSourceIp()
 * @method string getKeywordLibId()
 * @method string getIds()
 * @method string getLang()
 */
class DeleteKeyword extends RpcRequest
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
    public $action = 'DeleteKeyword';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @var string
     */
    public $serviceCode = 'green';

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
     * @param string $keywordLibId
     *
     * @return $this
     */
    public function withKeywordLibId($keywordLibId)
    {
        $this->data['KeywordLibId'] = $keywordLibId;
        $this->options['query']['KeywordLibId'] = $keywordLibId;

        return $this;
    }

    /**
     * @param string $ids
     *
     * @return $this
     */
    public function withIds($ids)
    {
        $this->data['Ids'] = $ids;
        $this->options['query']['Ids'] = $ids;

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
