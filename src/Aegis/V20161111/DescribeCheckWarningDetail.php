<?php

namespace AlibabaCloud\Aegis\V20161111;

use AlibabaCloud\Rpc;

/**
 * Api DescribeCheckWarningDetail
 *
 * @method string getSourceIp()
 * @method string getLang()
 * @method string getCheckWarningId()
 */
class DescribeCheckWarningDetail extends Rpc
{
    public $product = 'aegis';

    public $version = '2016-11-11';

    public $method = 'POST';

    public $serviceCode = 'vipaegis';

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
     * @param string $checkWarningId
     *
     * @return $this
     */
    public function withCheckWarningId($checkWarningId)
    {
        $this->data['CheckWarningId'] = $checkWarningId;
        $this->options['query']['CheckWarningId'] = $checkWarningId;

        return $this;
    }
}
