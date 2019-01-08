<?php

namespace AlibabaCloud\Aegis\V20161111;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of CreateOrUpdateRule
 *
 * @method string getWarnLevel()
 * @method string getSourceIp()
 * @method string getDataSourceId()
 * @method string getDescription()
 * @method string getRuleName()
 * @method string getId()
 * @method string getLang()
 * @method string getExpressions()
 * @method string getRuleGroupIds()
 */
class CreateOrUpdateRule extends RpcRequest
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
    public $action = 'CreateOrUpdateRule';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @var string
     */
    public $serviceCode = 'vipaegis';

    /**
     * @param string $warnLevel
     *
     * @return $this
     */
    public function withWarnLevel($warnLevel)
    {
        $this->data['WarnLevel'] = $warnLevel;
        $this->options['query']['WarnLevel'] = $warnLevel;

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
     * @param string $dataSourceId
     *
     * @return $this
     */
    public function withDataSourceId($dataSourceId)
    {
        $this->data['DataSourceId'] = $dataSourceId;
        $this->options['query']['DataSourceId'] = $dataSourceId;

        return $this;
    }

    /**
     * @param string $description
     *
     * @return $this
     */
    public function withDescription($description)
    {
        $this->data['Description'] = $description;
        $this->options['query']['Description'] = $description;

        return $this;
    }

    /**
     * @param string $ruleName
     *
     * @return $this
     */
    public function withRuleName($ruleName)
    {
        $this->data['RuleName'] = $ruleName;
        $this->options['query']['RuleName'] = $ruleName;

        return $this;
    }

    /**
     * @param string $id
     *
     * @return $this
     */
    public function withId($id)
    {
        $this->data['Id'] = $id;
        $this->options['query']['Id'] = $id;

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
     * @param string $expressions
     *
     * @return $this
     */
    public function withExpressions($expressions)
    {
        $this->data['Expressions'] = $expressions;
        $this->options['query']['Expressions'] = $expressions;

        return $this;
    }

    /**
     * @param string $ruleGroupIds
     *
     * @return $this
     */
    public function withRuleGroupIds($ruleGroupIds)
    {
        $this->data['RuleGroupIds'] = $ruleGroupIds;
        $this->options['query']['RuleGroupIds'] = $ruleGroupIds;

        return $this;
    }
}
