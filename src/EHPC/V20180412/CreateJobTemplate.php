<?php

namespace AlibabaCloud\EHPC\V20180412;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of CreateJobTemplate
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
class CreateJobTemplate extends RpcRequest
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
    public $action = 'CreateJobTemplate';

    /**
     * @var string
     */
    public $serviceCode = 'ehs';

    /**
     * @deprecated deprecated since version 2.0, Use withStderrRedirectPath() instead.
     *
     * @param string $stderrRedirectPath
     *
     * @return $this
     */
    public function setStderrRedirectPath($stderrRedirectPath)
    {
        return $this->withStderrRedirectPath($stderrRedirectPath);
    }

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
     * @deprecated deprecated since version 2.0, Use withArrayRequest() instead.
     *
     * @param string $arrayRequest
     *
     * @return $this
     */
    public function setArrayRequest($arrayRequest)
    {
        return $this->withArrayRequest($arrayRequest);
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
     * @deprecated deprecated since version 2.0, Use withPackagePath() instead.
     *
     * @param string $packagePath
     *
     * @return $this
     */
    public function setPackagePath($packagePath)
    {
        return $this->withPackagePath($packagePath);
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
     * @deprecated deprecated since version 2.0, Use withVariables() instead.
     *
     * @param string $variables
     *
     * @return $this
     */
    public function setVariables($variables)
    {
        return $this->withVariables($variables);
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
     * @deprecated deprecated since version 2.0, Use withName() instead.
     *
     * @param string $name
     *
     * @return $this
     */
    public function setName($name)
    {
        return $this->withName($name);
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
     * @deprecated deprecated since version 2.0, Use withRunasUser() instead.
     *
     * @param string $runasUser
     *
     * @return $this
     */
    public function setRunasUser($runasUser)
    {
        return $this->withRunasUser($runasUser);
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
     * @deprecated deprecated since version 2.0, Use withStdoutRedirectPath() instead.
     *
     * @param string $stdoutRedirectPath
     *
     * @return $this
     */
    public function setStdoutRedirectPath($stdoutRedirectPath)
    {
        return $this->withStdoutRedirectPath($stdoutRedirectPath);
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
     * @deprecated deprecated since version 2.0, Use withReRunable() instead.
     *
     * @param string $reRunable
     *
     * @return $this
     */
    public function setReRunable($reRunable)
    {
        return $this->withReRunable($reRunable);
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
     * @deprecated deprecated since version 2.0, Use withPriority() instead.
     *
     * @param string $priority
     *
     * @return $this
     */
    public function setPriority($priority)
    {
        return $this->withPriority($priority);
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
     * @deprecated deprecated since version 2.0, Use withCommandLine() instead.
     *
     * @param string $commandLine
     *
     * @return $this
     */
    public function setCommandLine($commandLine)
    {
        return $this->withCommandLine($commandLine);
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
