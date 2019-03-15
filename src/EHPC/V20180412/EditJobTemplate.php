<?php

namespace AlibabaCloud\EHPC\V20180412;

use AlibabaCloud\Rpc;

/**
 * @method string getStderrRedirectPath()
 * @method $this withStderrRedirectPath($value)
 * @method string getVariables()
 * @method $this withVariables($value)
 * @method string getRunasUser()
 * @method $this withRunasUser($value)
 * @method string getReRunable()
 * @method $this withReRunable($value)
 * @method string getTemplateId()
 * @method $this withTemplateId($value)
 * @method string getPriority()
 * @method $this withPriority($value)
 * @method string getCommandLine()
 * @method $this withCommandLine($value)
 * @method string getArrayRequest()
 * @method $this withArrayRequest($value)
 * @method string getPackagePath()
 * @method $this withPackagePath($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getStdoutRedirectPath()
 * @method $this withStdoutRedirectPath($value)
 */
class EditJobTemplate extends Rpc
{
    public $product = 'EHPC';

    public $version = '2018-04-12';

    public $serviceCode = 'ehs';
}
