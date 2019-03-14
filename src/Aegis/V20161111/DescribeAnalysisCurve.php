<?php

namespace AlibabaCloud\Aegis\V20161111;

use AlibabaCloud\Rpc;

/**
 * Api DescribeAnalysisCurve
 *
 * @method string getSourceIp()
 * @method string getStartTimeStamp()
 * @method string getEndTimeStamp()
 */
class DescribeAnalysisCurve extends Rpc
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
     * @param string $startTimeStamp
     *
     * @return $this
     */
    public function withStartTimeStamp($startTimeStamp)
    {
        $this->data['StartTimeStamp'] = $startTimeStamp;
        $this->options['query']['StartTimeStamp'] = $startTimeStamp;

        return $this;
    }

    /**
     * @param string $endTimeStamp
     *
     * @return $this
     */
    public function withEndTimeStamp($endTimeStamp)
    {
        $this->data['EndTimeStamp'] = $endTimeStamp;
        $this->options['query']['EndTimeStamp'] = $endTimeStamp;

        return $this;
    }
}
