<?php

namespace AlibabaCloud\Cds\V20170925;

use AlibabaCloud\ApiResolverTrait;

/**
 * Resolve Api based on the method name.
 *
 * @method GetCredentials getCredentials(array $options = [])
 * @method UpdateJob updateJob(array $options = [])
 * @method UpdateCredential updateCredential(array $options = [])
 * @method DeleteCredential deleteCredential(array $options = [])
 * @method CreateCredential createCredential(array $options = [])
 * @method CreateJob createJob(array $options = [])
 * @method GetBuild getBuild(array $options = [])
 * @method DeleteJob deleteJob(array $options = [])
 * @method GetJob getJob(array $options = [])
 * @method GetBuilds getBuilds(array $options = [])
 * @method DeleteBuild deleteBuild(array $options = [])
 * @method RunJob runJob(array $options = [])
 * @method StopBuild stopBuild(array $options = [])
 * @method GetJobs getJobs(array $options = [])
 */
class CdsApiResolver
{
    use ApiResolverTrait;
}
