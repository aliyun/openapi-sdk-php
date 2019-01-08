<?php

namespace AlibabaCloud\EHPC\V20180412;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of EditJobTemplate
 *
 * @method string getStderrRedirectPath()
 * @method string getVariables()
 * @method string getRunasUser()
 * @method string getReRunable()
 * @method string getTemplateId()
 * @method string getPriority()
 * @method string getCommandLine()
 * @method string getArrayRequest()
 * @method string getPackagePath()
 * @method string getName()
 * @method string getStdoutRedirectPath()
 */
class EditJobTemplate extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'EHPC';

    /**
     * @var string
     */
    public $version = '2018-04-12';

    /**
     * @var string
     */
    public $action = 'EditJobTemplate';

    /**
     * @var string
     */
    public $serviceCode = 'ehs';

    /**
     * @param string $stderrRedirectPath
     *
     * @return $this
     */
    public function withStderrRedirectPath($stderrRedirectPath)
    {
        $this->data['StderrRedirectPath'] = $stderrRedirectPath;
        $this->options['query']['StderrRedirectPath'] = $stderrRedirectPath;

        return $this;
    }

    /**
     * @param string $variables
     *
     * @return $this
     */
    public function withVariables($variables)
    {
        $this->data['Variables'] = $variables;
        $this->options['query']['Variables'] = $variables;

        return $this;
    }

    /**
     * @param string $runasUser
     *
     * @return $this
     */
    public function withRunasUser($runasUser)
    {
        $this->data['RunasUser'] = $runasUser;
        $this->options['query']['RunasUser'] = $runasUser;

        return $this;
    }

    /**
     * @param string $reRunable
     *
     * @return $this
     */
    public function withReRunable($reRunable)
    {
        $this->data['ReRunable'] = $reRunable;
        $this->options['query']['ReRunable'] = $reRunable;

        return $this;
    }

    /**
     * @param string $templateId
     *
     * @return $this
     */
    public function withTemplateId($templateId)
    {
        $this->data['TemplateId'] = $templateId;
        $this->options['query']['TemplateId'] = $templateId;

        return $this;
    }

    /**
     * @param string $priority
     *
     * @return $this
     */
    public function withPriority($priority)
    {
        $this->data['Priority'] = $priority;
        $this->options['query']['Priority'] = $priority;

        return $this;
    }

    /**
     * @param string $commandLine
     *
     * @return $this
     */
    public function withCommandLine($commandLine)
    {
        $this->data['CommandLine'] = $commandLine;
        $this->options['query']['CommandLine'] = $commandLine;

        return $this;
    }

    /**
     * @param string $arrayRequest
     *
     * @return $this
     */
    public function withArrayRequest($arrayRequest)
    {
        $this->data['ArrayRequest'] = $arrayRequest;
        $this->options['query']['ArrayRequest'] = $arrayRequest;

        return $this;
    }

    /**
     * @param string $packagePath
     *
     * @return $this
     */
    public function withPackagePath($packagePath)
    {
        $this->data['PackagePath'] = $packagePath;
        $this->options['query']['PackagePath'] = $packagePath;

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
     * @param string $stdoutRedirectPath
     *
     * @return $this
     */
    public function withStdoutRedirectPath($stdoutRedirectPath)
    {
        $this->data['StdoutRedirectPath'] = $stdoutRedirectPath;
        $this->options['query']['StdoutRedirectPath'] = $stdoutRedirectPath;

        return $this;
    }
}
