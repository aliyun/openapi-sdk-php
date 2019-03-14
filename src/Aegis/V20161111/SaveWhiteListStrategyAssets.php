<?php

namespace AlibabaCloud\Aegis\V20161111;

use AlibabaCloud\Rpc;

/**
 * Api SaveWhiteListStrategyAssets
 *
 * @method string getOperations()
 * @method string getRelationType()
 * @method string getSourceIp()
 * @method string getStrategyId()
 * @method string getLang()
 */
class SaveWhiteListStrategyAssets extends Rpc
{
    public $product = 'aegis';

    public $version = '2016-11-11';

    public $method = 'POST';

    public $serviceCode = 'vipaegis';

    /**
     * @param string $operations
     *
     * @return $this
     */
    public function withOperations($operations)
    {
        $this->data['Operations'] = $operations;
        $this->options['query']['Operations'] = $operations;

        return $this;
    }

    /**
     * @param string $relationType
     *
     * @return $this
     */
    public function withRelationType($relationType)
    {
        $this->data['RelationType'] = $relationType;
        $this->options['query']['RelationType'] = $relationType;

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
