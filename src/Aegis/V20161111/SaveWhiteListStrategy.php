<?php

namespace AlibabaCloud\Aegis\V20161111;

use AlibabaCloud\Rpc;

/**
 * Api SaveWhiteListStrategy
 *
 * @method string getStrategyName()
 * @method string getSourceIp()
 * @method string getStudyTime()
 * @method string getStrategyId()
 * @method string getLang()
 */
class SaveWhiteListStrategy extends Rpc
{
    public $product = 'aegis';

    public $version = '2016-11-11';

    public $method = 'POST';

    public $serviceCode = 'vipaegis';

    /**
     * @param string $strategyName
     *
     * @return $this
     */
    public function withStrategyName($strategyName)
    {
        $this->data['StrategyName'] = $strategyName;
        $this->options['query']['StrategyName'] = $strategyName;

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
     * @param string $studyTime
     *
     * @return $this
     */
    public function withStudyTime($studyTime)
    {
        $this->data['StudyTime'] = $studyTime;
        $this->options['query']['StudyTime'] = $studyTime;

        return $this;
    }

    /**
     * @param string $strategyId
     *
     * @return $this
     */
    public function withStrategyId($strategyId)
    {
        $this->data['StrategyId'] = $strategyId;
        $this->options['query']['StrategyId'] = $strategyId;

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
