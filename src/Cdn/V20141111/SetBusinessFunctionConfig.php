<?php

namespace AlibabaCloud\Cdn\V20141111;

use AlibabaCloud\Rpc;

/**
 * @method string getArgRegex()
 * @method $this withArgRegex($value)
 * @method string getNullAllowed()
 * @method $this withNullAllowed($value)
 * @method string getConfigs()
 * @method $this withConfigs($value)
 * @method string getArgName()
 * @method $this withArgName($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getConflictFunction()
 * @method $this withConflictFunction($value)
 * @method string getFunctionId()
 * @method $this withFunctionId($value)
 * @method string getArgValue()
 * @method $this withArgValue($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getFunctionName()
 * @method $this withFunctionName($value)
 * @method string getCheckUrl()
 * @method $this withCheckUrl($value)
 * @method string getArgId()
 * @method $this withArgId($value)
 * @method string getSeqId()
 * @method $this withSeqId($value)
 */
class SetBusinessFunctionConfig extends Rpc
{
    public $product = 'Cdn';

    public $version = '2014-11-11';

    public $method = 'POST';
}
