<?php

namespace AlibabaCloud\Green\V20170823;

use AlibabaCloud\Rpc;

/**
 * Api DescribeKeywordLib
 *
 * @method string getSourceIp()
 * @method string getServiceModule()
 * @method string getLang()
 */
class DescribeKeywordLib extends Rpc
{
    public $product = 'Green';

    public $version = '2017-08-23';

    public $method = 'POST';

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
     * @param string $serviceModule
     *
     * @return $this
     */
    public function withServiceModule($serviceModule)
    {
        $this->data['ServiceModule'] = $serviceModule;
        $this->options['query']['ServiceModule'] = $serviceModule;

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
