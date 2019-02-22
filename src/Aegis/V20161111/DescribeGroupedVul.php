<?php

namespace AlibabaCloud\Aegis\V20161111;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of DescribeGroupedVul
 *
 * @method string getStatusList()
 * @method string getLevel()
 * @method string getOrderBy()
 * @method string getDealed()
 * @method string getCurrentPage()
 * @method string getType()
 * @method string getLastTsEnd()
 * @method string getCreateTsStart()
 * @method string getAliasName()
 * @method string getPatchId()
 * @method string getSourceIp()
 * @method string getName()
 * @method string getPageSize()
 * @method string getLang()
 * @method string getCreateTsEnd()
 * @method string getLastTsStart()
 * @method string getNecessity()
 * @method string getUuids()
 * @method string getDirection()
 */
class DescribeGroupedVul extends RpcRequest
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
    public $action = 'DescribeGroupedVul';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @var string
     */
    public $serviceCode = 'vipaegis';

    /**
     * @param string $statusList
     *
     * @return $this
     */
    public function withStatusList($statusList)
    {
        $this->data['StatusList'] = $statusList;
        $this->options['query']['StatusList'] = $statusList;

        return $this;
    }

    /**
     * @param string $level
     *
     * @return $this
     */
    public function withLevel($level)
    {
        $this->data['Level'] = $level;
        $this->options['query']['Level'] = $level;

        return $this;
    }

    /**
     * @param string $orderBy
     *
     * @return $this
     */
    public function withOrderBy($orderBy)
    {
        $this->data['OrderBy'] = $orderBy;
        $this->options['query']['OrderBy'] = $orderBy;

        return $this;
    }

    /**
     * @param string $dealed
     *
     * @return $this
     */
    public function withDealed($dealed)
    {
        $this->data['Dealed'] = $dealed;
        $this->options['query']['Dealed'] = $dealed;

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
     * @param string $type
     *
     * @return $this
     */
    public function withType($type)
    {
        $this->data['Type'] = $type;
        $this->options['query']['Type'] = $type;

        return $this;
    }

    /**
     * @param string $lastTsEnd
     *
     * @return $this
     */
    public function withLastTsEnd($lastTsEnd)
    {
        $this->data['LastTsEnd'] = $lastTsEnd;
        $this->options['query']['LastTsEnd'] = $lastTsEnd;

        return $this;
    }

    /**
     * @param string $createTsStart
     *
     * @return $this
     */
    public function withCreateTsStart($createTsStart)
    {
        $this->data['CreateTsStart'] = $createTsStart;
        $this->options['query']['CreateTsStart'] = $createTsStart;

        return $this;
    }

    /**
     * @param string $aliasName
     *
     * @return $this
     */
    public function withAliasName($aliasName)
    {
        $this->data['AliasName'] = $aliasName;
        $this->options['query']['AliasName'] = $aliasName;

        return $this;
    }

    /**
     * @param string $patchId
     *
     * @return $this
     */
    public function withPatchId($patchId)
    {
        $this->data['PatchId'] = $patchId;
        $this->options['query']['PatchId'] = $patchId;

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
     * @param string $name
     *
     * @return $this
     */
    public function withName($name)
    {
        $this->data['Name'] = $name;
        $this->options['query']['Name'] = $name;

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
     * @param string $createTsEnd
     *
     * @return $this
     */
    public function withCreateTsEnd($createTsEnd)
    {
        $this->data['CreateTsEnd'] = $createTsEnd;
        $this->options['query']['CreateTsEnd'] = $createTsEnd;

        return $this;
    }

    /**
     * @param string $lastTsStart
     *
     * @return $this
     */
    public function withLastTsStart($lastTsStart)
    {
        $this->data['LastTsStart'] = $lastTsStart;
        $this->options['query']['LastTsStart'] = $lastTsStart;

        return $this;
    }

    /**
     * @param string $necessity
     *
     * @return $this
     */
    public function withNecessity($necessity)
    {
        $this->data['Necessity'] = $necessity;
        $this->options['query']['Necessity'] = $necessity;

        return $this;
    }

    /**
     * @param string $uuids
     *
     * @return $this
     */
    public function withUuids($uuids)
    {
        $this->data['Uuids'] = $uuids;
        $this->options['query']['Uuids'] = $uuids;

        return $this;
    }

    /**
     * @param string $direction
     *
     * @return $this
     */
    public function withDirection($direction)
    {
        $this->data['Direction'] = $direction;
        $this->options['query']['Direction'] = $direction;

        return $this;
    }
}
