<?php

namespace AlibabaCloud\OssAdmin\V20150520;

use AlibabaCloud\ApiResolverTrait;

/**
 * Resolve Api based on the method name.
 *
 * @method DeleteImgVpc deleteImgVpc(array $options = [])
 * @method GetImgVpcInfo getImgVpcInfo(array $options = [])
 * @method CreateOssVpc createOssVpc(array $options = [])
 * @method BindBucketVip bindBucketVip(array $options = [])
 * @method UnBindBucketVip unBindBucketVip(array $options = [])
 * @method GetOssVpcInfo getOssVpcInfo(array $options = [])
 * @method GetBucketVips getBucketVips(array $options = [])
 * @method DeleteOssVpc deleteOssVpc(array $options = [])
 * @method CreateImgVpc createImgVpc(array $options = [])
 */
class OssAdminApiResolver
{
    use ApiResolverTrait;
}
