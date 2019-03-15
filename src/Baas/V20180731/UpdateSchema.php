<?php

namespace AlibabaCloud\Baas\V20180731;

use AlibabaCloud\Rpc;

/**
 * @method string getSchemaName()
 * @method $this withSchemaName($value)
 * @method string getSchemaId()
 * @method $this withSchemaId($value)
 * @method string getBizid()
 * @method $this withBizid($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getCategoryConfigs()
 * @method $this withCategoryConfigs($value)
 */
class UpdateSchema extends Rpc
{
    public $product = 'Baas';

    public $version = '2018-07-31';

    public $method = 'POST';
}
