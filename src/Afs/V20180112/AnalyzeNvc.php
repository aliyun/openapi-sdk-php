<?php

namespace AlibabaCloud\Afs\V20180112;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of AnalyzeNvc
 *
 * @method string getSourceIp()
 * @method string getData()
 * @method string getScoreJsonStr()
 */
class AnalyzeNvc extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'afs';

    /**
     * @var string
     */
    public $version = '2018-01-12';

    /**
     * @var string
     */
    public $action = 'AnalyzeNvc';

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
