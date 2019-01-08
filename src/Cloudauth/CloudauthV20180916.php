<?php

namespace AlibabaCloud\Cloudauth;

use AlibabaCloud\ApiResolverTrait;

/**
 * Find the specified Api of the Cloudauth based on the method name as the Api name.
 *
 * @package   AlibabaCloud\Cloudauth
 *
 * @method static V20180916\CompareFaces compareFaces(array $options = [])
 * @method static V20180916\CreateAuthKey createAuthKey(array $options = [])
 * @method static V20180916\CreateVerifySDK createVerifySDK(array $options = [])
 * @method static V20180916\DescribeDeviceInfo describeDeviceInfo(array $options = [])
 * @method static V20180916\DescribeVerifySDK describeVerifySDK(array $options = [])
 * @method static V20180916\DetectFaceAttributes detectFaceAttributes(array $options = [])
 * @method static V20180916\GetMaterials getMaterials(array $options = [])
 * @method static V20180916\GetStatus getStatus(array $options = [])
 * @method static V20180916\GetVerifyToken getVerifyToken(array $options = [])
 * @method static V20180916\ModifyDeviceInfo modifyDeviceInfo(array $options = [])
 * @method static V20180916\SubmitMaterials submitMaterials(array $options = [])
 * @method static V20180916\SubmitVerification submitVerification(array $options = [])
 */
class CloudauthV20180916
{
    use ApiResolverTrait;

    /**
     * @var string
     */
    protected $namespace = 'AlibabaCloud\\Cloudauth\\V20180916';
}
