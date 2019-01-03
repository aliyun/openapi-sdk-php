<?php

namespace AlibabaCloud\Domain\V20180129;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of QueryDomainGroupList
 *
 * @method string getUserClientIp()
 * @method string getDomainGroupName()
 * @method string getLang()
 * @method string getShowDeletingGroup()
 */
class QueryDomainGroupList extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'Domain';

    /**
     * @var string
     */
    public $version = '2018-01-29';

    /**
     * @var string
     */
    public $action = 'QueryDomainGroupList';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @deprecated deprecated since version 2.0, Use withUserClientIp() instead.
     *
     * @param string $userClientIp
     *
     * @return $this
     */
    public function setUserClientIp($userClientIp)
    {
        return $this->withUserClientIp($userClientIp);
    }

    /**
     * @param string $userClientIp
     *
     * @return $this
     */
    public function withUserClientIp($userClientIp)
    {
        $this->data['UserClientIp'] = $userClientIp;
        $this->options['query']['UserClientIp'] = $userClientIp;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withDomainGroupName() instead.
     *
     * @param string $domainGroupName
     *
     * @return $this
     */
    public function setDomainGroupName($domainGroupName)
    {
        return $this->withDomainGroupName($domainGroupName);
    }

    /**
     * @param string $domainGroupName
     *
     * @return $this
     */
    public function withDomainGroupName($domainGroupName)
    {
        $this->data['DomainGroupName'] = $domainGroupName;
        $this->options['query']['DomainGroupName'] = $domainGroupName;

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
     * @deprecated deprecated since version 2.0, Use withShowDeletingGroup() instead.
     *
     * @param string $showDeletingGroup
     *
     * @return $this
     */
    public function setShowDeletingGroup($showDeletingGroup)
    {
        return $this->withShowDeletingGroup($showDeletingGroup);
    }

    /**
     * @param string $showDeletingGroup
     *
     * @return $this
     */
    public function withShowDeletingGroup($showDeletingGroup)
    {
        $this->data['ShowDeletingGroup'] = $showDeletingGroup;
        $this->options['query']['ShowDeletingGroup'] = $showDeletingGroup;

        return $this;
    }
}
