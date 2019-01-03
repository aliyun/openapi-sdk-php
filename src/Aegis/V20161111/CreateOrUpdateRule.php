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
     * @deprecated deprecated since version 2.0, Use withWarnLevel() instead.
     *
     * @param string $warnLevel
     *
     * @return $this
     */
    public function setWarnLevel($warnLevel)
    {
        return $this->withWarnLevel($warnLevel);
    }

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
     * @deprecated deprecated since version 2.0, Use withDataSourceId() instead.
     *
     * @param string $dataSourceId
     *
     * @return $this
     */
    public function setDataSourceId($dataSourceId)
    {
        return $this->withDataSourceId($dataSourceId);
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
     * @deprecated deprecated since version 2.0, Use withDescription() instead.
     *
     * @param string $description
     *
     * @return $this
     */
    public function setDescription($description)
    {
        return $this->withDescription($description);
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
     * @deprecated deprecated since version 2.0, Use withRuleName() instead.
     *
     * @param string $ruleName
     *
     * @return $this
     */
    public function setRuleName($ruleName)
    {
        return $this->withRuleName($ruleName);
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
     * @deprecated deprecated since version 2.0, Use withId() instead.
     *
     * @param string $id
     *
     * @return $this
     */
    public function setId($id)
    {
        return $this->withId($id);
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
     * @deprecated deprecated since version 2.0, Use withExpressions() instead.
     *
     * @param string $expressions
     *
     * @return $this
     */
    public function setExpressions($expressions)
    {
        return $this->withExpressions($expressions);
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
     * @deprecated deprecated since version 2.0, Use withRuleGroupIds() instead.
     *
     * @param string $ruleGroupIds
     *
     * @return $this
     */
    public function setRuleGroupIds($ruleGroupIds)
    {
        return $this->withRuleGroupIds($ruleGroupIds);
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
