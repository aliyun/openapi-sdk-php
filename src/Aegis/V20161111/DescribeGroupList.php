<?php

namespace AlibabaCloud\Aegis\V20161111;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of DescribeGroupList
 *
 * @method string getWarnLevel()
 * @method string getSourceIp()
 * @method string getRuleGroupId()
 * @method string getPageSize()
 * @method string getCurrentPage()
 * @method string getLang()
 * @method string getExGroupId()
 */
class DescribeGroupList extends RpcRequest
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
    public $action = 'DescribeGroupList';

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
     * @deprecated deprecated since version 2.0, Use withRuleGroupId() instead.
     *
     * @param string $ruleGroupId
     *
     * @return $this
     */
    public function setRuleGroupId($ruleGroupId)
    {
        return $this->withRuleGroupId($ruleGroupId);
    }

    /**
     * @param string $ruleGroupId
     *
     * @return $this
     */
    public function withRuleGroupId($ruleGroupId)
    {
        $this->data['RuleGroupId'] = $ruleGroupId;
        $this->options['query']['RuleGroupId'] = $ruleGroupId;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withPageSize() instead.
     *
     * @param string $pageSize
     *
     * @return $this
     */
    public function setPageSize($pageSize)
    {
        return $this->withPageSize($pageSize);
    }

    /**
     * @param string $pageSize
     *
     * @return $this
     */
    public function withPageSize($pageSize)
    {
        $this->data['PageSize'] = $pageSize;
        $this->options['query']['PageSize'] = $pageSize;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withCurrentPage() instead.
     *
     * @param string $currentPage
     *
     * @return $this
     */
    public function setCurrentPage($currentPage)
    {
        return $this->withCurrentPage($currentPage);
    }

    /**
     * @param string $currentPage
     *
     * @return $this
     */
    public function withCurrentPage($currentPage)
    {
        $this->data['CurrentPage'] = $currentPage;
        $this->options['query']['CurrentPage'] = $currentPage;

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
     * @deprecated deprecated since version 2.0, Use withExGroupId() instead.
     *
     * @param string $exGroupId
     *
     * @return $this
     */
    public function setExGroupId($exGroupId)
    {
        return $this->withExGroupId($exGroupId);
    }

    /**
     * @param string $exGroupId
     *
     * @return $this
     */
    public function withExGroupId($exGroupId)
    {
        $this->data['ExGroupId'] = $exGroupId;
        $this->options['query']['ExGroupId'] = $exGroupId;

        return $this;
    }
}
