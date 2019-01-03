<?php

namespace AlibabaCloud\Jarvis\V20180206;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of DescribeDdosDefenseInfo
 *
 * @method string getSourceIp()
 * @method string getLang()
 * @method string getSrcUid()
 * @method string getSourceCode()
 */
class DescribeDdosDefenseInfo extends RpcRequest
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
    public $action = 'DescribeDdosDefenseInfo';

    /**
     * @var string
     */
    public $method = 'POST';

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

    /**
     * @deprecated deprecated since version 2.0, Use withSrcUid() instead.
     *
     * @param string $srcUid
     *
     * @return $this
     */
    public function setsrcUid($srcUid)
    {
        return $this->withSrcUid($srcUid);
    }

    /**
     * @param string $srcUid
     *
     * @return $this
     */
    public function withSrcUid($srcUid)
    {
        $this->data['SrcUid'] = $srcUid;
        $this->options['query']['srcUid'] = $srcUid;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withSourceCode() instead.
     *
     * @param string $sourceCode
     *
     * @return $this
     */
    public function setsourceCode($sourceCode)
    {
        return $this->withSourceCode($sourceCode);
    }

    /**
     * @param string $sourceCode
     *
     * @return $this
     */
    public function withSourceCode($sourceCode)
    {
        $this->data['SourceCode'] = $sourceCode;
        $this->options['query']['sourceCode'] = $sourceCode;

        return $this;
    }
}
