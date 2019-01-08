<?php

namespace AlibabaCloud\Aegis\V20161111;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of DescribeSuspEventDetail
 *
 * @method string getSuspiciousEventId()
 * @method string getSourceIp()
 * @method string getFrom()
 * @method string getLang()
 */
class DescribeSuspEventDetail extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'aegis';

    /**
     * @var string
     */
    public $version = '2016-11-11';

    /**
     * @var string
     */
    public $action = 'DescribeSuspEventDetail';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @var string
     */
    public $serviceCode = 'vipaegis';

    /**
     * @param string $suspiciousEventId
     *
     * @return $this
     */
    public function withSuspiciousEventId($suspiciousEventId)
    {
        $this->data['SuspiciousEventId'] = $suspiciousEventId;
        $this->options['query']['SuspiciousEventId'] = $suspiciousEventId;

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
     * @param string $from
     *
     * @return $this
     */
    public function withFrom($from)
    {
        $this->data['From'] = $from;
        $this->options['query']['From'] = $from;

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
