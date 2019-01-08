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
