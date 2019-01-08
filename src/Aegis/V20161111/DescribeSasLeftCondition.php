<?php

namespace AlibabaCloud\Aegis\V20161111;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of DescribeSasLeftCondition
 *
 * @method string getSourceIp()
 * @method string getConditionType()
 * @method string getLang()
 * @method string getFilterConditions()
 */
class DescribeSasLeftCondition extends RpcRequest
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
    public $action = 'DescribeSasLeftCondition';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @var string
     */
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
     * @param string $conditionType
     *
     * @return $this
     */
    public function withConditionType($conditionType)
    {
        $this->data['ConditionType'] = $conditionType;
        $this->options['query']['ConditionType'] = $conditionType;

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
     * @param string $filterConditions
     *
     * @return $this
     */
    public function withFilterConditions($filterConditions)
    {
        $this->data['FilterConditions'] = $filterConditions;
        $this->options['query']['FilterConditions'] = $filterConditions;

        return $this;
    }
}
