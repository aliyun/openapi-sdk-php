<?php

namespace AlibabaCloud\Aegis\V20161111;

use AlibabaCloud\Rpc;

/**
 * Api CreateOrUpdateJoinRule
 *
 * @method string getWarnLevel()
 * @method string getDataSourceId2()
 * @method string getDataSourceId1()
 * @method string getTimeWindow()
 * @method string getDescription()
 * @method string getRuleName()
 * @method string getExpression2()
 * @method string getExpression1()
 * @method string getSourceIp()
 * @method string getStatisticsRules()
 * @method string getJoinRelation()
 * @method string getRuleId()
 * @method string getActions()
 */
class CreateOrUpdateJoinRule extends Rpc
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
     * @param string $dataSourceId2
     *
     * @return $this
     */
    public function withDataSourceId2($dataSourceId2)
    {
        $this->data['DataSourceId2'] = $dataSourceId2;
        $this->options['query']['DataSourceId2'] = $dataSourceId2;

        return $this;
    }

    /**
     * @param string $dataSourceId1
     *
     * @return $this
     */
    public function withDataSourceId1($dataSourceId1)
    {
        $this->data['DataSourceId1'] = $dataSourceId1;
        $this->options['query']['DataSourceId1'] = $dataSourceId1;

        return $this;
    }

    /**
     * @param string $timeWindow
     *
     * @return $this
     */
    public function withTimeWindow($timeWindow)
    {
        $this->data['TimeWindow'] = $timeWindow;
        $this->options['query']['TimeWindow'] = $timeWindow;

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
     * @param string $expression2
     *
     * @return $this
     */
    public function withExpression2($expression2)
    {
        $this->data['Expression2'] = $expression2;
        $this->options['query']['Expression2'] = $expression2;

        return $this;
    }

    /**
     * @param string $expression1
     *
     * @return $this
     */
    public function withExpression1($expression1)
    {
        $this->data['Expression1'] = $expression1;
        $this->options['query']['Expression1'] = $expression1;

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
     * @param string $joinRelation
     *
     * @return $this
     */
    public function withJoinRelation($joinRelation)
    {
        $this->data['JoinRelation'] = $joinRelation;
        $this->options['query']['JoinRelation'] = $joinRelation;

        return $this;
    }

    /**
     * @param string $ruleId
     *
     * @return $this
     */
    public function withRuleId($ruleId)
    {
        $this->data['RuleId'] = $ruleId;
        $this->options['query']['RuleId'] = $ruleId;

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
}
