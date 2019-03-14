<?php

namespace AlibabaCloud\Aegis\V20161111;

use AlibabaCloud\Rpc;

/**
 * Api CreateOrUpdateRule
 *
 * @method string getWarnLevel()
 * @method string getSourceIp()
 * @method string getStatisticsRules()
 * @method string getDataSourceId()
 * @method string getDescription()
 * @method string getRuleName()
 * @method string getId()
 * @method string getLang()
 * @method string getExpressions()
 * @method string getActions()
 * @method string getRuleGroupIds()
 */
class CreateOrUpdateRule extends Rpc
{
    public $product = 'aegis';

    public $version = '2016-11-11';

    public $method = 'POST';

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
     * @param string $statisticsRules
     *
     * @return $this
     */
    public function withStatisticsRules($statisticsRules)
    {
        $this->data['StatisticsRules'] = $statisticsRules;
        $this->options['query']['StatisticsRules'] = $statisticsRules;

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
     * @param string $actions
     *
     * @return $this
     */
    public function withActions($actions)
    {
        $this->data['Actions'] = $actions;
        $this->options['query']['Actions'] = $actions;

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
