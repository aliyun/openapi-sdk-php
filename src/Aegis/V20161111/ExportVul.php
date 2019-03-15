<?php

namespace AlibabaCloud\Aegis\V20161111;

use AlibabaCloud\Rpc;

/**
 * @method string getBatchName()
 * @method $this withBatchName($value)
 * @method string getAliasName()
 * @method $this withAliasName($value)
 * @method string getStatusList()
 * @method $this withStatusList($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getLevel()
 * @method $this withLevel($value)
 * @method string getResource()
 * @method $this withResource($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getDealed()
 * @method $this withDealed($value)
 * @method string getLang()
 * @method $this withLang($value)
 * @method string getType()
 * @method $this withType($value)
 * @method string getNecessity()
 * @method $this withNecessity($value)
 * @method string getUuids()
 * @method $this withUuids($value)
 */
class ExportVul extends Rpc
{
    public $product = 'aegis';

    public $version = '2016-11-11';

    public $method = 'POST';

    public $serviceCode = 'vipaegis';
}
