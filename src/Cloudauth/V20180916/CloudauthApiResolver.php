<?php

namespace AlibabaCloud\Cloudauth\V20180916;

use AlibabaCloud\ApiResolverTrait;

/**
 * Find the specified Api of the Cloudauth based on the method name as the Api name.
 *
 * @package   AlibabaCloud\Cloudauth\V20180916
 *
 * @method CompareFaces compareFaces(array $options = [])
 * @method CreateAuthKey createAuthKey(array $options = [])
 * @method CreateVerifySDK createVerifySDK(array $options = [])
 * @method DescribeDeviceInfo describeDeviceInfo(array $options = [])
 * @method DescribeVerifySDK describeVerifySDK(array $options = [])
 * @method DetectFaceAttributes detectFaceAttributes(array $options = [])
 * @method GetMaterials getMaterials(array $options = [])
 * @method GetStatus getStatus(array $options = [])
 * @method GetVerifyToken getVerifyToken(array $options = [])
 * @method ModifyDeviceInfo modifyDeviceInfo(array $options = [])
 * @method SubmitMaterials submitMaterials(array $options = [])
 * @method SubmitVerification submitVerification(array $options = [])
 */
class CloudauthApiResolver
{
    use ApiResolverTrait;
}
