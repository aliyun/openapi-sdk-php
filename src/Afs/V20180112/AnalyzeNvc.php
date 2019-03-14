<?php

namespace AlibabaCloud\Afs\V20180112;

use AlibabaCloud\Rpc;

/**
 * Api AnalyzeNvc
 *
 * @method string getSourceIp()
 * @method string getData()
 * @method string getScoreJsonStr()
 */
class AnalyzeNvc extends Rpc
{
    public $product = 'afs';

    public $version = '2018-01-12';

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
     * @param string $data
     *
     * @return $this
     */
    public function withData($data)
    {
        $this->data['Data'] = $data;
        $this->options['query']['Data'] = $data;

        return $this;
    }

    /**
     * @param string $scoreJsonStr
     *
     * @return $this
     */
    public function withScoreJsonStr($scoreJsonStr)
    {
        $this->data['ScoreJsonStr'] = $scoreJsonStr;
        $this->options['query']['ScoreJsonStr'] = $scoreJsonStr;

        return $this;
    }
}
