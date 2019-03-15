<?php

namespace AlibabaCloud\Aegis\V20161111;

use AlibabaCloud\Rpc;

/**
 * @method string getStatusList()
 * @method $this withStatusList($value)
 * @method string getLevel()
 * @method $this withLevel($value)
 * @method string getOrderBy()
 * @method $this withOrderBy($value)
 * @method string getDealed()
 * @method $this withDealed($value)
 * @method string getCurrentPage()
 * @method $this withCurrentPage($value)
 * @method string getType()
 * @method $this withType($value)
 * @method string getLastTsEnd()
 * @method $this withLastTsEnd($value)
 * @method string getCreateTsStart()
 * @method $this withCreateTsStart($value)
 * @method string getAliasName()
 * @method $this withAliasName($value)
 * @method string getPatchId()
 * @method $this withPatchId($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getLang()
 * @method $this withLang($value)
 * @method string getCreateTsEnd()
 * @method $this withCreateTsEnd($value)
 * @method string getLastTsStart()
 * @method $this withLastTsStart($value)
 * @method string getNecessity()
 * @method $this withNecessity($value)
 * @method string getUuids()
 * @method $this withUuids($value)
 * @method string getDirection()
 * @method $this withDirection($value)
 */
class DescribeGroupedVul extends Rpc
{
    public $product = 'aegis';

    public $version = '2016-11-11';

    public $method = 'POST';

    public $serviceCode = 'vipaegis';
}
