<?php

namespace AlibabaCloud\Cds\V20170925;

use AlibabaCloud\Client\Resolver\ApiResolver;

/**
 * @method UpdateJob updateJob(array $options = [])
 * @method GetCredentials getCredentials(array $options = [])
 * @method UpdateCredential updateCredential(array $options = [])
 * @method CreateCredential createCredential(array $options = [])
 * @method DeleteCredential deleteCredential(array $options = [])
 * @method CreateJob createJob(array $options = [])
 * @method GetBuilds getBuilds(array $options = [])
 * @method DeleteJob deleteJob(array $options = [])
 * @method DeleteBuild deleteBuild(array $options = [])
 * @method RunJob runJob(array $options = [])
 * @method StopBuild stopBuild(array $options = [])
 * @method GetBuild getBuild(array $options = [])
 * @method GetJob getJob(array $options = [])
 * @method GetJobs getJobs(array $options = [])
 */
class CdsApiResolver extends ApiResolver
{
}

class Roa extends \AlibabaCloud\Client\Resolver\Roa
{
    /** @var string */
    public $product = 'Cds';

    /** @var string */
    public $version = '2017-09-25';

    /** @var string */
    public $method = 'POST';

    /** @var string */
    public $serviceCode = 'cds';
}

/**
 * @method string getJsonContent()
 * @method string getJobName()
 */
class UpdateJob extends Roa
{
    /** @var string */
    public $pathPattern = '/v1/job/update';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withJsonContent($value)
    {
        $this->data['JsonContent'] = $value;
        $this->options['query']['JsonContent'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withJobName($value)
    {
        $this->data['JobName'] = $value;
        $this->options['query']['JobName'] = $value;

        return $this;
    }
}

class GetCredentials extends Roa
{
    /** @var string */
    public $pathPattern = '/v1/credentials';

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getCredentialType()
 * @method string getJsonContent()
 * @method string getCredentialId()
 */
class UpdateCredential extends Roa
{
    /** @var string */
    public $pathPattern = '/v1/credential/update';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCredentialType($value)
    {
        $this->data['CredentialType'] = $value;
        $this->options['query']['CredentialType'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withJsonContent($value)
    {
        $this->data['JsonContent'] = $value;
        $this->options['query']['JsonContent'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCredentialId($value)
    {
        $this->data['CredentialId'] = $value;
        $this->options['query']['CredentialId'] = $value;

        return $this;
    }
}

/**
 * @method string getCredentialType()
 * @method string getJsonContent()
 */
class CreateCredential extends Roa
{
    /** @var string */
    public $pathPattern = '/v1/credential/create';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCredentialType($value)
    {
        $this->data['CredentialType'] = $value;
        $this->options['query']['CredentialType'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withJsonContent($value)
    {
        $this->data['JsonContent'] = $value;
        $this->options['query']['JsonContent'] = $value;

        return $this;
    }
}

/**
 * @method string getCredentialId()
 */
class DeleteCredential extends Roa
{
    /** @var string */
    public $pathPattern = '/v1/credential/delete';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCredentialId($value)
    {
        $this->data['CredentialId'] = $value;
        $this->options['query']['CredentialId'] = $value;

        return $this;
    }
}

/**
 * @method string getJsonContent()
 * @method string getJobName()
 * @method string getDeployType()
 */
class CreateJob extends Roa
{
    /** @var string */
    public $pathPattern = '/v1/job/create';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withJsonContent($value)
    {
        $this->data['JsonContent'] = $value;
        $this->options['query']['JsonContent'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withJobName($value)
    {
        $this->data['JobName'] = $value;
        $this->options['query']['JobName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDeployType($value)
    {
        $this->data['DeployType'] = $value;
        $this->options['query']['DeployType'] = $value;

        return $this;
    }
}

/**
 * @method string getStart()
 * @method string getNumberPerPage()
 * @method string getJobName()
 * @method $this withJobName($value)
 */
class GetBuilds extends Roa
{
    /** @var string */
    public $pathPattern = '/v1/job/[JobName]/builds';

    /** @var string */
    public $method = 'GET';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withStart($value)
    {
        $this->data['Start'] = $value;
        $this->options['query']['Start'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withNumberPerPage($value)
    {
        $this->data['NumberPerPage'] = $value;
        $this->options['query']['NumberPerPage'] = $value;

        return $this;
    }
}

/**
 * @method string getJobName()
 * @method $this withJobName($value)
 */
class DeleteJob extends Roa
{
    /** @var string */
    public $pathPattern = '/v1/job/[JobName]';

    /** @var string */
    public $method = 'DELETE';
}

/**
 * @method string getBuildNumber()
 * @method $this withBuildNumber($value)
 * @method string getJobName()
 * @method $this withJobName($value)
 */
class DeleteBuild extends Roa
{
    /** @var string */
    public $pathPattern = '/v1/job/[JobName]/build/[BuildNumber]';

    /** @var string */
    public $method = 'DELETE';
}

/**
 * @method string getJobName()
 * @method $this withJobName($value)
 */
class RunJob extends Roa
{
    /** @var string */
    public $pathPattern = '/v1/job/[JobName]/run';
}

/**
 * @method string getBuildNumber()
 * @method $this withBuildNumber($value)
 * @method string getJobName()
 * @method $this withJobName($value)
 */
class StopBuild extends Roa
{
    /** @var string */
    public $pathPattern = '/v1/job/[JobName]/build/[BuildNumber]/stop';
}

/**
 * @method string getBuildNumber()
 * @method $this withBuildNumber($value)
 * @method string getJobName()
 * @method $this withJobName($value)
 */
class GetBuild extends Roa
{
    /** @var string */
    public $pathPattern = '/v1/job/[JobName]/build/[BuildNumber]';

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getJobName()
 * @method $this withJobName($value)
 */
class GetJob extends Roa
{
    /** @var string */
    public $pathPattern = '/v1/job/[JobName]';

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getStart()
 * @method string getNumberPerPage()
 */
class GetJobs extends Roa
{
    /** @var string */
    public $pathPattern = '/v1/jobs';

    /** @var string */
    public $method = 'GET';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withStart($value)
    {
        $this->data['Start'] = $value;
        $this->options['query']['Start'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withNumberPerPage($value)
    {
        $this->data['NumberPerPage'] = $value;
        $this->options['query']['NumberPerPage'] = $value;

        return $this;
    }
}
