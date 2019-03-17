<?php

namespace AlibabaCloud\OssAdmin\V20130712;

use AlibabaCloud\ApiResolverTrait;

/**
 * Resolve Api based on the method name.
 *
 * @method GetBucketPolicy getBucketPolicy(array $options = [])
 * @method CreateOssInstance createOssInstance(array $options = [])
 * @method PutBucketStatus putBucketStatus(array $options = [])
 * @method PutBucketPolicy putBucketPolicy(array $options = [])
 * @method PutBucketLimit putBucketLimit(array $options = [])
 */
class OssAdminApiResolver
{
    use ApiResolverTrait;
}
