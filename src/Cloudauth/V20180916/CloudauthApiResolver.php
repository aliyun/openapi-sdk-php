<?php

namespace AlibabaCloud\Cloudauth\V20180916;

use AlibabaCloud\ApiResolverTrait;

/**
 * Resolve Api based on the method name.
 *
 * @method ModifyDeviceInfo modifyDeviceInfo(array $options = [])
 * @method CreateAuthKey createAuthKey(array $options = [])
 * @method CreateVerifySDK createVerifySDK(array $options = [])
 * @method DescribeVerifySDK describeVerifySDK(array $options = [])
 * @method DescribeDeviceInfo describeDeviceInfo(array $options = [])
 * @method SubmitVerification submitVerification(array $options = [])
 * @method GetStatus getStatus(array $options = [])
 * @method CompareFaces compareFaces(array $options = [])
 * @method SubmitMaterials submitMaterials(array $options = [])
 * @method GetMaterials getMaterials(array $options = [])
 * @method GetVerifyToken getVerifyToken(array $options = [])
 * @method DetectFaceAttributes detectFaceAttributes(array $options = [])
 */
class CloudauthApiResolver
{
    use ApiResolverTrait;
}
