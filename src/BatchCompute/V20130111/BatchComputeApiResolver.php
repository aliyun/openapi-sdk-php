<?php

namespace AlibabaCloud\BatchCompute\V20130111;

use AlibabaCloud\ApiResolverTrait;

/**
 * Resolve Api based on the method name.
 *
 * @method ModifyJob modifyJob(array $options = [])
 * @method DeleteJob deleteJob(array $options = [])
 * @method DeleteImage deleteImage(array $options = [])
 * @method GetJobDescription getJobDescription(array $options = [])
 * @method GetJob getJob(array $options = [])
 * @method GetImage getImage(array $options = [])
 * @method DeleteSnapshot deleteSnapshot(array $options = [])
 * @method ListSnapshots listSnapshots(array $options = [])
 * @method ListJobs listJobs(array $options = [])
 * @method ListImages listImages(array $options = [])
 * @method GetTasks getTasks(array $options = [])
 * @method GetSnapshot getSnapshot(array $options = [])
 * @method ReleaseJob releaseJob(array $options = [])
 * @method PutJob putJob(array $options = [])
 * @method PostJob postJob(array $options = [])
 */
class BatchComputeApiResolver
{
    use ApiResolverTrait;
}
