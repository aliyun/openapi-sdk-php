<?php

namespace AlibabaCloud\EHPC\V20180412;

use AlibabaCloud\Rpc;

/**
 * @method string getStderrRedirectPath()
 * @method $this withStderrRedirectPath($value)
 * @method string getVariables()
 * @method $this withVariables($value)
 * @method string getRunasUserPassword()
 * @method $this withRunasUserPassword($value)
 * @method string getPostCmdLine()
 * @method $this withPostCmdLine($value)
 * @method string getRunasUser()
 * @method $this withRunasUser($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getReRunable()
 * @method $this withReRunable($value)
 * @method string getPriority()
 * @method $this withPriority($value)
 * @method string getCommandLine()
 * @method $this withCommandLine($value)
 * @method string getJobQueue()
 * @method $this withJobQueue($value)
 * @method string getArrayRequest()
 * @method $this withArrayRequest($value)
 * @method string getUnzipCmd()
 * @method $this withUnzipCmd($value)
 * @method string getPackagePath()
 * @method $this withPackagePath($value)
 * @method string getInputFileUrl()
 * @method $this withInputFileUrl($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getStdoutRedirectPath()
 * @method $this withStdoutRedirectPath($value)
 * @method string getContainerId()
 * @method $this withContainerId($value)
 */
class SubmitJob extends Rpc
{
    public $product = 'EHPC';

    public $version = '2018-04-12';

    public $serviceCode = 'ehs';
}
