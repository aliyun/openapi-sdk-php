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
     * @deprecated deprecated since version 2.0, Use withSourceIp() instead.
     *
     * @param string $sourceIp
     *
     * @return $this
     */
    public function setSourceIp($sourceIp)
    {
        return $this->withSourceIp($sourceIp);
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
     * @deprecated deprecated since version 2.0, Use withConditionType() instead.
     *
     * @param string $conditionType
     *
     * @return $this
     */
    public function setConditionType($conditionType)
    {
        return $this->withConditionType($conditionType);
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
     * @deprecated deprecated since version 2.0, Use withLang() instead.
     *
     * @param string $lang
     *
     * @return $this
     */
    public function setLang($lang)
    {
        return $this->withLang($lang);
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
     * @deprecated deprecated since version 2.0, Use withFilterConditions() instead.
     *
     * @param string $filterConditions
     *
     * @return $this
     */
    public function setFilterConditions($filterConditions)
    {
        return $this->withFilterConditions($filterConditions);
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
