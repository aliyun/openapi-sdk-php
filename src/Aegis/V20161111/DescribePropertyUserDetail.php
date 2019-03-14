<?php

namespace AlibabaCloud\Aegis\V20161111;

use AlibabaCloud\Rpc;

/**
 * Api DescribePropertyUserDetail
 *
 * @method string getExtend()
 * @method string getSourceIp()
 * @method string getIp()
 * @method string getGroupId()
 * @method string getTagIdListString()
 * @method string getPageSize()
 * @method string getRemark()
 * @method string getIsRoot()
 * @method string getCurrentPage()
 * @method string getUser()
 * @method string getUuid()
 */
class DescribePropertyUserDetail extends Rpc
{
    public $product = 'aegis';

    public $version = '2016-11-11';

    public $method = 'POST';

    public $serviceCode = 'vipaegis';

    /**
     * @param string $extend
     *
     * @return $this
     */
    public function withExtend($extend)
    {
        $this->data['Extend'] = $extend;
        $this->options['query']['Extend'] = $extend;

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
     * @param string $ip
     *
     * @return $this
     */
    public function withIp($ip)
    {
        $this->data['Ip'] = $ip;
        $this->options['query']['Ip'] = $ip;

        return $this;
    }

    /**
     * @param string $groupId
     *
     * @return $this
     */
    public function withGroupId($groupId)
    {
        $this->data['GroupId'] = $groupId;
        $this->options['query']['GroupId'] = $groupId;

        return $this;
    }

    /**
     * @param string $tagIdListString
     *
     * @return $this
     */
    public function withTagIdListString($tagIdListString)
    {
        $this->data['TagIdListString'] = $tagIdListString;
        $this->options['query']['TagIdListString'] = $tagIdListString;

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
     * @param string $remark
     *
     * @return $this
     */
    public function withRemark($remark)
    {
        $this->data['Remark'] = $remark;
        $this->options['query']['Remark'] = $remark;

        return $this;
    }

    /**
     * @param string $isRoot
     *
     * @return $this
     */
    public function withIsRoot($isRoot)
    {
        $this->data['IsRoot'] = $isRoot;
        $this->options['query']['IsRoot'] = $isRoot;

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
     * @param string $user
     *
     * @return $this
     */
    public function withUser($user)
    {
        $this->data['User'] = $user;
        $this->options['query']['User'] = $user;

        return $this;
    }

    /**
     * @param string $uuid
     *
     * @return $this
     */
    public function withUuid($uuid)
    {
        $this->data['Uuid'] = $uuid;
        $this->options['query']['Uuid'] = $uuid;

        return $this;
    }
}
