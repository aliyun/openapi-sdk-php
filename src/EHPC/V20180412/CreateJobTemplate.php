<?php

namespace AlibabaCloud\EHPC\V20180412;

use AlibabaCloud\Rpc;

/**
 * Api CreateJobTemplate
 *
 * @method string getStderrRedirectPath()
 * @method string getArrayRequest()
 * @method string getPackagePath()
 * @method string getVariables()
 * @method string getName()
 * @method string getRunasUser()
 * @method string getStdoutRedirectPath()
 * @method string getReRunable()
 * @method string getPriority()
 * @method string getCommandLine()
 */
class CreateJobTemplate extends Rpc
{
    public $product = 'EHPC';

    public $version = '2018-04-12';

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
}
