<?php

namespace AlibabaCloud\Cloudauth\V20190307;

use AlibabaCloud\Client\Resolver\ApiResolver;

/**
 * @method CompareFaces compareFaces(array $options = [])
 * @method CompareFaceVerify compareFaceVerify(array $options = [])
 * @method ContrastFaceVerify contrastFaceVerify(array $options = [])
 * @method CreateAuthKey createAuthKey(array $options = [])
 * @method CreateFaceConfig createFaceConfig(array $options = [])
 * @method CreateRPSDK createRPSDK(array $options = [])
 * @method CreateVerifySDK createVerifySDK(array $options = [])
 * @method CreateVerifySetting createVerifySetting(array $options = [])
 * @method CreateWhitelist createWhitelist(array $options = [])
 * @method CreateWhitelistSetting createWhitelistSetting(array $options = [])
 * @method DeleteWhitelist deleteWhitelist(array $options = [])
 * @method DeleteWhitelistSetting deleteWhitelistSetting(array $options = [])
 * @method DescribeAppInfo describeAppInfo(array $options = [])
 * @method DescribeDeviceInfo describeDeviceInfo(array $options = [])
 * @method DescribeFaceConfig describeFaceConfig(array $options = [])
 * @method DescribeFaceUsage describeFaceUsage(array $options = [])
 * @method DescribeFaceVerify describeFaceVerify(array $options = [])
 * @method DescribeOssUploadToken describeOssUploadToken(array $options = [])
 * @method DescribeRPSDK describeRPSDK(array $options = [])
 * @method DescribeSdkUrl describeSdkUrl(array $options = [])
 * @method DescribeUpdatePackageResult describeUpdatePackageResult(array $options = [])
 * @method DescribeUploadInfo describeUploadInfo(array $options = [])
 * @method DescribeUserStatus describeUserStatus(array $options = [])
 * @method DescribeVerifyRecords describeVerifyRecords(array $options = [])
 * @method DescribeVerifyResult describeVerifyResult(array $options = [])
 * @method DescribeVerifySDK describeVerifySDK(array $options = [])
 * @method DescribeVerifySetting describeVerifySetting(array $options = [])
 * @method DescribeVerifyToken describeVerifyToken(array $options = [])
 * @method DescribeVerifyUsage describeVerifyUsage(array $options = [])
 * @method DescribeWhitelist describeWhitelist(array $options = [])
 * @method DescribeWhitelistSetting describeWhitelistSetting(array $options = [])
 * @method DetectFaceAttributes detectFaceAttributes(array $options = [])
 * @method InitDevice initDevice(array $options = [])
 * @method InitFaceVerify initFaceVerify(array $options = [])
 * @method LivenessFaceVerify livenessFaceVerify(array $options = [])
 * @method ModifyDeviceInfo modifyDeviceInfo(array $options = [])
 * @method UpdateAppPackage updateAppPackage(array $options = [])
 * @method UpdateFaceConfig updateFaceConfig(array $options = [])
 * @method UpdateVerifySetting updateVerifySetting(array $options = [])
 * @method VerifyDevice verifyDevice(array $options = [])
 * @method VerifyMaterial verifyMaterial(array $options = [])
 */
class CloudauthApiResolver extends ApiResolver
{
}

class Rpc extends \AlibabaCloud\Client\Resolver\Rpc
{
    /** @var string */
    public $product = 'Cloudauth';

    /** @var string */
    public $version = '2019-03-07';

    /** @var string */
    public $method = 'POST';

    /** @var string */
    public $serviceCode = 'cloudauth';
}

/**
 * @method string getSourceImageType()
 * @method string getTargetImageType()
 * @method string getTargetImageValue()
 * @method string getBizType()
 * @method string getSourceImageValue()
 */
class CompareFaces extends Rpc
{

    /** @var string */
    public $scheme = 'https';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSourceImageType($value)
    {
        $this->data['SourceImageType'] = $value;
        $this->options['form_params']['SourceImageType'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTargetImageType($value)
    {
        $this->data['TargetImageType'] = $value;
        $this->options['form_params']['TargetImageType'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTargetImageValue($value)
    {
        $this->data['TargetImageValue'] = $value;
        $this->options['form_params']['TargetImageValue'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBizType($value)
    {
        $this->data['BizType'] = $value;
        $this->options['form_params']['BizType'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSourceImageValue($value)
    {
        $this->data['SourceImageValue'] = $value;
        $this->options['form_params']['SourceImageValue'] = $value;

        return $this;
    }
}

/**
 * @method string getTargetFaceContrastPictureUrl()
 * @method string getProductCode()
 * @method string getTargetCertifyId()
 * @method string getSourceOssObjectName()
 * @method string getTargetFaceContrastPicture()
 * @method string getTargetOssBucketName()
 * @method string getSourceOssBucketName()
 * @method string getOuterOrderNo()
 * @method string getTargetOssObjectName()
 * @method string getSourceFaceContrastPicture()
 * @method string getSceneId()
 * @method string getSourceFaceContrastPictureUrl()
 * @method string getSourceCertifyId()
 * @method string getCrop()
 */
class CompareFaceVerify extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTargetFaceContrastPictureUrl($value)
    {
        $this->data['TargetFaceContrastPictureUrl'] = $value;
        $this->options['form_params']['TargetFaceContrastPictureUrl'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withProductCode($value)
    {
        $this->data['ProductCode'] = $value;
        $this->options['form_params']['ProductCode'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTargetCertifyId($value)
    {
        $this->data['TargetCertifyId'] = $value;
        $this->options['form_params']['TargetCertifyId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSourceOssObjectName($value)
    {
        $this->data['SourceOssObjectName'] = $value;
        $this->options['form_params']['SourceOssObjectName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTargetFaceContrastPicture($value)
    {
        $this->data['TargetFaceContrastPicture'] = $value;
        $this->options['form_params']['TargetFaceContrastPicture'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTargetOssBucketName($value)
    {
        $this->data['TargetOssBucketName'] = $value;
        $this->options['form_params']['TargetOssBucketName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSourceOssBucketName($value)
    {
        $this->data['SourceOssBucketName'] = $value;
        $this->options['form_params']['SourceOssBucketName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOuterOrderNo($value)
    {
        $this->data['OuterOrderNo'] = $value;
        $this->options['form_params']['OuterOrderNo'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTargetOssObjectName($value)
    {
        $this->data['TargetOssObjectName'] = $value;
        $this->options['form_params']['TargetOssObjectName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSourceFaceContrastPicture($value)
    {
        $this->data['SourceFaceContrastPicture'] = $value;
        $this->options['form_params']['SourceFaceContrastPicture'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSceneId($value)
    {
        $this->data['SceneId'] = $value;
        $this->options['form_params']['SceneId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSourceFaceContrastPictureUrl($value)
    {
        $this->data['SourceFaceContrastPictureUrl'] = $value;
        $this->options['form_params']['SourceFaceContrastPictureUrl'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSourceCertifyId($value)
    {
        $this->data['SourceCertifyId'] = $value;
        $this->options['form_params']['SourceCertifyId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCrop($value)
    {
        $this->data['Crop'] = $value;
        $this->options['form_params']['Crop'] = $value;

        return $this;
    }
}

/**
 * @method string getProductCode()
 * @method string getFaceContrastPicture()
 * @method string getDeviceToken()
 * @method string getUserId()
 * @method string getCertifyId()
 * @method string getCertNo()
 * @method string getOuterOrderNo()
 * @method string getCertType()
 * @method string getFaceContrastPictureUrl()
 * @method string getModel()
 * @method $this withModel($value)
 * @method string getOssObjectName()
 * @method string getCertName()
 * @method string getIp()
 * @method string getMobile()
 * @method string getFaceContrastFile()
 * @method string getSceneId()
 * @method string getOssBucketName()
 * @method string getCrop()
 */
class ContrastFaceVerify extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withProductCode($value)
    {
        $this->data['ProductCode'] = $value;
        $this->options['form_params']['ProductCode'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withFaceContrastPicture($value)
    {
        $this->data['FaceContrastPicture'] = $value;
        $this->options['form_params']['FaceContrastPicture'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDeviceToken($value)
    {
        $this->data['DeviceToken'] = $value;
        $this->options['form_params']['DeviceToken'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withUserId($value)
    {
        $this->data['UserId'] = $value;
        $this->options['form_params']['UserId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCertifyId($value)
    {
        $this->data['CertifyId'] = $value;
        $this->options['form_params']['CertifyId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCertNo($value)
    {
        $this->data['CertNo'] = $value;
        $this->options['form_params']['CertNo'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOuterOrderNo($value)
    {
        $this->data['OuterOrderNo'] = $value;
        $this->options['form_params']['OuterOrderNo'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCertType($value)
    {
        $this->data['CertType'] = $value;
        $this->options['form_params']['CertType'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withFaceContrastPictureUrl($value)
    {
        $this->data['FaceContrastPictureUrl'] = $value;
        $this->options['form_params']['FaceContrastPictureUrl'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOssObjectName($value)
    {
        $this->data['OssObjectName'] = $value;
        $this->options['form_params']['OssObjectName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCertName($value)
    {
        $this->data['CertName'] = $value;
        $this->options['form_params']['CertName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withIp($value)
    {
        $this->data['Ip'] = $value;
        $this->options['form_params']['Ip'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withMobile($value)
    {
        $this->data['Mobile'] = $value;
        $this->options['form_params']['Mobile'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withFaceContrastFile($value)
    {
        $this->data['FaceContrastFile'] = $value;
        $this->options['form_params']['FaceContrastFile'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSceneId($value)
    {
        $this->data['SceneId'] = $value;
        $this->options['form_params']['SceneId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOssBucketName($value)
    {
        $this->data['OssBucketName'] = $value;
        $this->options['form_params']['OssBucketName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCrop($value)
    {
        $this->data['Crop'] = $value;
        $this->options['form_params']['Crop'] = $value;

        return $this;
    }
}

/**
 * @method string getUserDeviceId()
 * @method $this withUserDeviceId($value)
 * @method string getTest()
 * @method $this withTest($value)
 * @method string getBizType()
 * @method $this withBizType($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getAuthYears()
 * @method $this withAuthYears($value)
 * @method string getLang()
 * @method $this withLang($value)
 */
class CreateAuthKey extends Rpc
{
}

/**
 * @method string getBizName()
 * @method $this withBizName($value)
 * @method string getBizType()
 * @method $this withBizType($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getLang()
 * @method $this withLang($value)
 */
class CreateFaceConfig extends Rpc
{
}

/**
 * @method string getAppUrl()
 * @method $this withAppUrl($value)
 * @method string getPlatform()
 * @method $this withPlatform($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getLang()
 * @method $this withLang($value)
 */
class CreateRPSDK extends Rpc
{
}

/**
 * @method string getAppUrl()
 * @method $this withAppUrl($value)
 * @method string getPlatform()
 * @method $this withPlatform($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getLang()
 * @method $this withLang($value)
 */
class CreateVerifySDK extends Rpc
{
}

/**
 * @method string getGuideStep()
 * @method $this withGuideStep($value)
 * @method string getResultStep()
 * @method $this withResultStep($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getSolution()
 * @method $this withSolution($value)
 * @method string getBizName()
 * @method $this withBizName($value)
 * @method string getBizType()
 * @method $this withBizType($value)
 * @method string getPrivacyStep()
 * @method $this withPrivacyStep($value)
 */
class CreateVerifySetting extends Rpc
{
}

/**
 * @method string getValidDay()
 * @method $this withValidDay($value)
 * @method string getBizType()
 * @method $this withBizType($value)
 * @method string getIdCardNum()
 * @method $this withIdCardNum($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getBizId()
 * @method $this withBizId($value)
 * @method string getLang()
 * @method $this withLang($value)
 */
class CreateWhitelist extends Rpc
{
}

/**
 * @method string getCertifyId()
 * @method $this withCertifyId($value)
 * @method string getCertNo()
 * @method $this withCertNo($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getLang()
 * @method $this withLang($value)
 * @method string getValidDay()
 * @method $this withValidDay($value)
 * @method string getServiceCode()
 * @method $this withServiceCode($value)
 * @method string getSceneId()
 * @method $this withSceneId($value)
 */
class CreateWhitelistSetting extends Rpc
{
}

/**
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getIds()
 * @method $this withIds($value)
 * @method string getLang()
 * @method $this withLang($value)
 */
class DeleteWhitelist extends Rpc
{
}

/**
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getLang()
 * @method $this withLang($value)
 * @method string getServiceCode()
 * @method $this withServiceCode($value)
 * @method string getIds()
 * @method $this withIds($value)
 */
class DeleteWhitelistSetting extends Rpc
{
}

/**
 * @method string getCurrentPage()
 * @method $this withCurrentPage($value)
 * @method string getPlatform()
 * @method $this withPlatform($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 */
class DescribeAppInfo extends Rpc
{
}

/**
 * @method string getUserDeviceId()
 * @method $this withUserDeviceId($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getLang()
 * @method $this withLang($value)
 * @method string getExpiredStartDay()
 * @method $this withExpiredStartDay($value)
 * @method string getTotalCount()
 * @method $this withTotalCount($value)
 * @method string getCurrentPage()
 * @method $this withCurrentPage($value)
 * @method string getDeviceId()
 * @method $this withDeviceId($value)
 * @method string getBizType()
 * @method $this withBizType($value)
 * @method string getExpiredEndDay()
 * @method $this withExpiredEndDay($value)
 */
class DescribeDeviceInfo extends Rpc
{
}

/**
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getLang()
 * @method $this withLang($value)
 */
class DescribeFaceConfig extends Rpc
{
}

/**
 * @method string getStartDate()
 * @method $this withStartDate($value)
 * @method string getEndDate()
 * @method $this withEndDate($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 */
class DescribeFaceUsage extends Rpc
{
}

/**
 * @method string getCertifyId()
 * @method $this withCertifyId($value)
 * @method string getPictureReturnType()
 * @method $this withPictureReturnType($value)
 * @method string getSceneId()
 * @method $this withSceneId($value)
 */
class DescribeFaceVerify extends Rpc
{
}

/**
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 */
class DescribeOssUploadToken extends Rpc
{
}

/**
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getLang()
 * @method $this withLang($value)
 * @method string getTaskId()
 * @method $this withTaskId($value)
 */
class DescribeRPSDK extends Rpc
{
}

/**
 * @method string getDebug()
 * @method $this withDebug($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getId()
 * @method $this withId($value)
 */
class DescribeSdkUrl extends Rpc
{
}

/**
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getTaskId()
 * @method $this withTaskId($value)
 */
class DescribeUpdatePackageResult extends Rpc
{
}

/**
 * @method string getBiz()
 * @method $this withBiz($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 */
class DescribeUploadInfo extends Rpc
{
}

/**
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 */
class DescribeUserStatus extends Rpc
{
}

/**
 * @method string getStatusList()
 * @method $this withStatusList($value)
 * @method string getStartDate()
 * @method $this withStartDate($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getTotalCount()
 * @method $this withTotalCount($value)
 * @method string getCurrentPage()
 * @method $this withCurrentPage($value)
 * @method string getQueryId()
 * @method $this withQueryId($value)
 * @method string getBizType()
 * @method $this withBizType($value)
 * @method string getIdCardNum()
 * @method $this withIdCardNum($value)
 * @method string getEndDate()
 * @method $this withEndDate($value)
 * @method string getBizId()
 * @method $this withBizId($value)
 */
class DescribeVerifyRecords extends Rpc
{
}

/**
 * @method string getBizType()
 * @method $this withBizType($value)
 * @method string getBizId()
 * @method $this withBizId($value)
 */
class DescribeVerifyResult extends Rpc
{
}

/**
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getLang()
 * @method $this withLang($value)
 * @method string getTaskId()
 * @method $this withTaskId($value)
 */
class DescribeVerifySDK extends Rpc
{
}

/**
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 */
class DescribeVerifySetting extends Rpc
{
}

/**
 * @method string getFaceRetainedImageUrl()
 * @method $this withFaceRetainedImageUrl($value)
 * @method string getUserId()
 * @method $this withUserId($value)
 * @method string getCallbackSeed()
 * @method $this withCallbackSeed($value)
 * @method string getUserIp()
 * @method $this withUserIp($value)
 * @method string getIdCardBackImageUrl()
 * @method $this withIdCardBackImageUrl($value)
 * @method string getIdCardNumber()
 * @method $this withIdCardNumber($value)
 * @method string getIdCardFrontImageUrl()
 * @method $this withIdCardFrontImageUrl($value)
 * @method string getBizType()
 * @method $this withBizType($value)
 * @method string getPassedRedirectUrl()
 * @method $this withPassedRedirectUrl($value)
 * @method string getUserRegistTime()
 * @method $this withUserRegistTime($value)
 * @method string getBizId()
 * @method $this withBizId($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getUserPhoneNumber()
 * @method $this withUserPhoneNumber($value)
 * @method string getCallbackUrl()
 * @method $this withCallbackUrl($value)
 * @method string getFailedRedirectUrl()
 * @method $this withFailedRedirectUrl($value)
 */
class DescribeVerifyToken extends Rpc
{
}

/**
 * @method string getStartDate()
 * @method $this withStartDate($value)
 * @method string getBizType()
 * @method $this withBizType($value)
 * @method string getEndDate()
 * @method $this withEndDate($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 */
class DescribeVerifyUsage extends Rpc
{
}

/**
 * @method string getValidEndDate()
 * @method $this withValidEndDate($value)
 * @method string getValid()
 * @method $this withValid($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getLang()
 * @method $this withLang($value)
 * @method string getCurrentPage()
 * @method $this withCurrentPage($value)
 * @method string getBizType()
 * @method $this withBizType($value)
 * @method string getIdCardNum()
 * @method $this withIdCardNum($value)
 * @method string getBizId()
 * @method $this withBizId($value)
 * @method string getValidStartDate()
 * @method $this withValidStartDate($value)
 */
class DescribeWhitelist extends Rpc
{
}

/**
 * @method string getValidEndDate()
 * @method $this withValidEndDate($value)
 * @method string getCertifyId()
 * @method $this withCertifyId($value)
 * @method string getCertNo()
 * @method $this withCertNo($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getLang()
 * @method $this withLang($value)
 * @method string getCurrentPage()
 * @method $this withCurrentPage($value)
 * @method string getServiceCode()
 * @method $this withServiceCode($value)
 * @method string getSceneId()
 * @method $this withSceneId($value)
 * @method string getValidStartDate()
 * @method $this withValidStartDate($value)
 * @method string getStatus()
 * @method $this withStatus($value)
 */
class DescribeWhitelistSetting extends Rpc
{
}

/**
 * @method string getBizType()
 * @method string getMaterialValue()
 */
class DetectFaceAttributes extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBizType($value)
    {
        $this->data['BizType'] = $value;
        $this->options['form_params']['BizType'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withMaterialValue($value)
    {
        $this->data['MaterialValue'] = $value;
        $this->options['form_params']['MaterialValue'] = $value;

        return $this;
    }
}

/**
 * @method string getChannel()
 * @method $this withChannel($value)
 * @method string getBizData()
 * @method $this withBizData($value)
 * @method string getMerchant()
 * @method $this withMerchant($value)
 * @method string getAppVersion()
 * @method $this withAppVersion($value)
 * @method string getDeviceToken()
 * @method $this withDeviceToken($value)
 * @method string getCertifyId()
 * @method $this withCertifyId($value)
 * @method string getWebUmidToken()
 * @method string getOuterOrderNo()
 * @method $this withOuterOrderNo($value)
 * @method string getProduceNode()
 * @method $this withProduceNode($value)
 * @method string getUaToken()
 * @method string getProductName()
 * @method $this withProductName($value)
 * @method string getCertifyPrincipal()
 * @method $this withCertifyPrincipal($value)
 * @method string getMetaInfo()
 * @method $this withMetaInfo($value)
 */
class InitDevice extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withWebUmidToken($value)
    {
        $this->data['WebUmidToken'] = $value;
        $this->options['form_params']['WebUmidToken'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withUaToken($value)
    {
        $this->data['UaToken'] = $value;
        $this->options['form_params']['UaToken'] = $value;

        return $this;
    }
}

/**
 * @method string getProductCode()
 * @method $this withProductCode($value)
 * @method string getFaceContrastPicture()
 * @method string getUserId()
 * @method $this withUserId($value)
 * @method string getCertifyId()
 * @method $this withCertifyId($value)
 * @method string getCertNo()
 * @method $this withCertNo($value)
 * @method string getOuterOrderNo()
 * @method $this withOuterOrderNo($value)
 * @method string getCertType()
 * @method $this withCertType($value)
 * @method string getFaceContrastPictureUrl()
 * @method $this withFaceContrastPictureUrl($value)
 * @method string getModel()
 * @method string getMetaInfo()
 * @method $this withMetaInfo($value)
 * @method string getOssObjectName()
 * @method $this withOssObjectName($value)
 * @method string getCertName()
 * @method $this withCertName($value)
 * @method string getIp()
 * @method $this withIp($value)
 * @method string getMobile()
 * @method $this withMobile($value)
 * @method string getSceneId()
 * @method $this withSceneId($value)
 * @method string getOssBucketName()
 * @method $this withOssBucketName($value)
 * @method string getCallbackToken()
 * @method $this withCallbackToken($value)
 * @method string getReturnUrl()
 * @method $this withReturnUrl($value)
 * @method string getCallbackUrl()
 * @method $this withCallbackUrl($value)
 * @method string getCrop()
 * @method string getCertifyUrlType()
 * @method $this withCertifyUrlType($value)
 */
class InitFaceVerify extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withFaceContrastPicture($value)
    {
        $this->data['FaceContrastPicture'] = $value;
        $this->options['form_params']['FaceContrastPicture'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withModel($value)
    {
        $this->data['Model'] = $value;
        $this->options['form_params']['Model'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCrop($value)
    {
        $this->data['Crop'] = $value;
        $this->options['form_params']['Crop'] = $value;

        return $this;
    }
}

/**
 * @method string getProductCode()
 * @method string getOssObjectName()
 * @method string getFaceContrastPicture()
 * @method string getIp()
 * @method string getMobile()
 * @method string getDeviceToken()
 * @method string getUserId()
 * @method string getCertifyId()
 * @method string getOuterOrderNo()
 * @method string getFaceContrastPictureUrl()
 * @method string getSceneId()
 * @method string getOssBucketName()
 * @method string getModel()
 * @method $this withModel($value)
 * @method string getCrop()
 */
class LivenessFaceVerify extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withProductCode($value)
    {
        $this->data['ProductCode'] = $value;
        $this->options['form_params']['ProductCode'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOssObjectName($value)
    {
        $this->data['OssObjectName'] = $value;
        $this->options['form_params']['OssObjectName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withFaceContrastPicture($value)
    {
        $this->data['FaceContrastPicture'] = $value;
        $this->options['form_params']['FaceContrastPicture'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withIp($value)
    {
        $this->data['Ip'] = $value;
        $this->options['form_params']['Ip'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withMobile($value)
    {
        $this->data['Mobile'] = $value;
        $this->options['form_params']['Mobile'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDeviceToken($value)
    {
        $this->data['DeviceToken'] = $value;
        $this->options['form_params']['DeviceToken'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withUserId($value)
    {
        $this->data['UserId'] = $value;
        $this->options['form_params']['UserId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCertifyId($value)
    {
        $this->data['CertifyId'] = $value;
        $this->options['form_params']['CertifyId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOuterOrderNo($value)
    {
        $this->data['OuterOrderNo'] = $value;
        $this->options['form_params']['OuterOrderNo'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withFaceContrastPictureUrl($value)
    {
        $this->data['FaceContrastPictureUrl'] = $value;
        $this->options['form_params']['FaceContrastPictureUrl'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSceneId($value)
    {
        $this->data['SceneId'] = $value;
        $this->options['form_params']['SceneId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOssBucketName($value)
    {
        $this->data['OssBucketName'] = $value;
        $this->options['form_params']['OssBucketName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCrop($value)
    {
        $this->data['Crop'] = $value;
        $this->options['form_params']['Crop'] = $value;

        return $this;
    }
}

/**
 * @method string getUserDeviceId()
 * @method $this withUserDeviceId($value)
 * @method string getDuration()
 * @method $this withDuration($value)
 * @method string getExpiredDay()
 * @method $this withExpiredDay($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getLang()
 * @method $this withLang($value)
 * @method string getDeviceId()
 * @method $this withDeviceId($value)
 * @method string getBizType()
 * @method $this withBizType($value)
 */
class ModifyDeviceInfo extends Rpc
{
}

/**
 * @method string getDebug()
 * @method $this withDebug($value)
 * @method string getPlatform()
 * @method $this withPlatform($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getPackageUrl()
 * @method $this withPackageUrl($value)
 * @method string getId()
 * @method $this withId($value)
 */
class UpdateAppPackage extends Rpc
{
}

/**
 * @method string getBizName()
 * @method $this withBizName($value)
 * @method string getBizType()
 * @method $this withBizType($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getLang()
 * @method $this withLang($value)
 */
class UpdateFaceConfig extends Rpc
{
}

/**
 * @method string getGuideStep()
 * @method $this withGuideStep($value)
 * @method string getResultStep()
 * @method $this withResultStep($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getSolution()
 * @method $this withSolution($value)
 * @method string getBizName()
 * @method $this withBizName($value)
 * @method string getBizType()
 * @method $this withBizType($value)
 * @method string getPrivacyStep()
 * @method $this withPrivacyStep($value)
 */
class UpdateVerifySetting extends Rpc
{
}

/**
 * @method string getExtInfo()
 * @method string getCertifyData()
 * @method $this withCertifyData($value)
 * @method string getAppVersion()
 * @method $this withAppVersion($value)
 * @method string getDeviceToken()
 * @method string getCertifyId()
 * @method $this withCertifyId($value)
 */
class VerifyDevice extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withExtInfo($value)
    {
        $this->data['ExtInfo'] = $value;
        $this->options['form_params']['ExtInfo'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDeviceToken($value)
    {
        $this->data['DeviceToken'] = $value;
        $this->options['form_params']['DeviceToken'] = $value;

        return $this;
    }
}

/**
 * @method string getFaceImageUrl()
 * @method $this withFaceImageUrl($value)
 * @method string getUserId()
 * @method $this withUserId($value)
 * @method string getIdCardBackImageUrl()
 * @method $this withIdCardBackImageUrl($value)
 * @method string getIdCardNumber()
 * @method $this withIdCardNumber($value)
 * @method string getIdCardFrontImageUrl()
 * @method $this withIdCardFrontImageUrl($value)
 * @method string getBizType()
 * @method $this withBizType($value)
 * @method string getBizId()
 * @method $this withBizId($value)
 * @method string getName()
 * @method $this withName($value)
 */
class VerifyMaterial extends Rpc
{
}
