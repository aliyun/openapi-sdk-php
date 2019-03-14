<?php

namespace AlibabaCloud\Jarvis\V20180206;

use AlibabaCloud\Rpc;

/**
 * Api DeleteConsoleAccessWhiteList
 *
 * @method string getSourceIp()
 * @method string getLang()
 * @method string getDisableWhitelist()
 * @method string getSourceCode()
 */
class DeleteConsoleAccessWhiteList extends Rpc
{
    public $product = 'jarvis';

    public $version = '2018-02-06';

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
     * @param string $disableWhitelist
     *
     * @return $this
     */
    public function withDisableWhitelist($disableWhitelist)
    {
        $this->data['DisableWhitelist'] = $disableWhitelist;
        $this->options['query']['DisableWhitelist'] = $disableWhitelist;

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
