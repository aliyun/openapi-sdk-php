<?php

namespace AlibabaCloud\Green\V20170823;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of CreateKeyword
 *
 * @method string getSourceIp()
 * @method string getKeywords()
 * @method string getKeywordLibId()
 * @method string getLang()
 */
class CreateKeyword extends RpcRequest
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
    public $action = 'CreateKeyword';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @var string
     */
    public $serviceCode = 'green';

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
     * @deprecated deprecated since version 2.0, Use withKeywords() instead.
     *
     * @param string $keywords
     *
     * @return $this
     */
    public function setKeywords($keywords)
    {
        return $this->withKeywords($keywords);
    }

    /**
     * @param string $keywords
     *
     * @return $this
     */
    public function withKeywords($keywords)
    {
        $this->data['Keywords'] = $keywords;
        $this->options['query']['Keywords'] = $keywords;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withKeywordLibId() instead.
     *
     * @param string $keywordLibId
     *
     * @return $this
     */
    public function setKeywordLibId($keywordLibId)
    {
        return $this->withKeywordLibId($keywordLibId);
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
