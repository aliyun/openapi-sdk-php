<?php

namespace AlibabaCloud\Cloudauth\V20190307;

use AlibabaCloud\Client\Resolver\ApiResolver;

/**
 * @method ModifyDeviceInfo modifyDeviceInfo(array $options = [])
 * @method DescribeVerifySDK describeVerifySDK(array $options = [])
 * @method DescribeDeviceInfo describeDeviceInfo(array $options = [])
 * @method CreateVerifySDK createVerifySDK(array $options = [])
 * @method CreateAuthKey createAuthKey(array $options = [])
 * @method DetectFaceAttributes detectFaceAttributes(array $options = [])
 * @method CompareFaces compareFaces(array $options = [])
 * @method DescribeFaceUsage describeFaceUsage(array $options = [])
 * @method DescribeVerifyRecords describeVerifyRecords(array $options = [])
 * @method UpdateVerifySetting updateVerifySetting(array $options = [])
 * @method CreateVerifySetting createVerifySetting(array $options = [])
 * @method DescribeVerifySetting describeVerifySetting(array $options = [])
 * @method DescribeVerifyUsage describeVerifyUsage(array $options = [])
 * @method DescribeUserStatus describeUserStatus(array $options = [])
 * @method DescribeUploadInfo describeUploadInfo(array $options = [])
 * @method DescribeRPSDK describeRPSDK(array $options = [])
 * @method CreateRPSDK createRPSDK(array $options = [])
 * @method VerifyMaterial verifyMaterial(array $options = [])
 * @method DescribeVerifyResult describeVerifyResult(array $options = [])
 * @method DescribeOssUploadToken describeOssUploadToken(array $options = [])
 * @method DescribeVerifyToken describeVerifyToken(array $options = [])
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
 * @method string getUserDeviceId()
 * @method $this withUserDeviceId($value)
 * @method string getBizType()
 * @method $this withBizType($value)
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
 */
class ModifyDeviceInfo extends Rpc
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
 * @method string getBizType()
 * @method $this withBizType($value)
 * @method string getUserDeviceId()
 * @method $this withUserDeviceId($value)
 * @method string getTotalCount()
 * @method $this withTotalCount($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getCurrentPage()
 * @method $this withCurrentPage($value)
 * @method string getLang()
 * @method $this withLang($value)
 * @method string getExpiredEndDay()
 * @method $this withExpiredEndDay($value)
 * @method string getDeviceId()
 * @method $this withDeviceId($value)
 * @method string getExpiredStartDay()
 * @method $this withExpiredStartDay($value)
 */
class DescribeDeviceInfo extends Rpc
{
}

/**
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getAppUrl()
 * @method $this withAppUrl($value)
 * @method string getLang()
 * @method $this withLang($value)
 * @method string getPlatform()
 * @method $this withPlatform($value)
 */
class CreateVerifySDK extends Rpc
{
}

/**
 * @method string getBizType()
 * @method $this withBizType($value)
 * @method string getUserDeviceId()
 * @method $this withUserDeviceId($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getTest()
 * @method $this withTest($value)
 * @method string getAuthYears()
 * @method $this withAuthYears($value)
 * @method string getLang()
 * @method $this withLang($value)
 */
class CreateAuthKey extends Rpc
{
}

/**
 * @method string getMaxNumPhotosPerCategory()
 * @method string getMaxFaceNum()
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getRetAttributes()
 * @method string getMaterialValue()
 * @method string getDontSaveDB()
 * @method string getClientTag()
 */
class DetectFaceAttributes extends Rpc
{

    /** @var string */
    public $scheme = 'https';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withMaxNumPhotosPerCategory($value)
    {
        $this->data['MaxNumPhotosPerCategory'] = $value;
        $this->options['form_params']['MaxNumPhotosPerCategory'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withMaxFaceNum($value)
    {
        $this->data['MaxFaceNum'] = $value;
        $this->options['form_params']['MaxFaceNum'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withRetAttributes($value)
    {
        $this->data['RetAttributes'] = $value;
        $this->options['form_params']['RetAttributes'] = $value;

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

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDontSaveDB($value)
    {
        $this->data['DontSaveDB'] = $value;
        $this->options['form_params']['DontSaveDB'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withClientTag($value)
    {
        $this->data['ClientTag'] = $value;
        $this->options['form_params']['ClientTag'] = $value;

        return $this;
    }
}

/**
 * @method string getSourceImageType()
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getTargetImageType()
 * @method string getSourceImageValue()
 * @method string getTargetImageValue()
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
    public function withSourceImageValue($value)
    {
        $this->data['SourceImageValue'] = $value;
        $this->options['form_params']['SourceImageValue'] = $value;

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
}

/**
 * @method string getEndDate()
 * @method $this withEndDate($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getStartDate()
 * @method $this withStartDate($value)
 */
class DescribeFaceUsage extends Rpc
{
}

/**
 * @method string getBizType()
 * @method $this withBizType($value)
 * @method string getIdCardNum()
 * @method $this withIdCardNum($value)
 * @method string getTotalCount()
 * @method $this withTotalCount($value)
 * @method string getEndDate()
 * @method $this withEndDate($value)
 * @method string getStatusList()
 * @method $this withStatusList($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getBizId()
 * @method $this withBizId($value)
 * @method string getCurrentPage()
 * @method $this withCurrentPage($value)
 * @method string getStartDate()
 * @method $this withStartDate($value)
 * @method string getQueryId()
 * @method $this withQueryId($value)
 */
class DescribeVerifyRecords extends Rpc
{
}

/**
 * @method string getBizType()
 * @method $this withBizType($value)
 * @method string getResultStep()
 * @method $this withResultStep($value)
 * @method string getGuideStep()
 * @method $this withGuideStep($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getBizName()
 * @method $this withBizName($value)
 * @method string getSolution()
 * @method $this withSolution($value)
 * @method string getPrivacyStep()
 * @method $this withPrivacyStep($value)
 */
class UpdateVerifySetting extends Rpc
{
}

/**
 * @method string getBizType()
 * @method $this withBizType($value)
 * @method string getResultStep()
 * @method $this withResultStep($value)
 * @method string getGuideStep()
 * @method $this withGuideStep($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getBizName()
 * @method $this withBizName($value)
 * @method string getSolution()
 * @method $this withSolution($value)
 * @method string getPrivacyStep()
 * @method $this withPrivacyStep($value)
 */
class CreateVerifySetting extends Rpc
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
 * @method string getBizType()
 * @method $this withBizType($value)
 * @method string getEndDate()
 * @method $this withEndDate($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getStartDate()
 * @method $this withStartDate($value)
 */
class DescribeVerifyUsage extends Rpc
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
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 */
class DescribeUploadInfo extends Rpc
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
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getAppUrl()
 * @method $this withAppUrl($value)
 * @method string getLang()
 * @method $this withLang($value)
 * @method string getPlatform()
 * @method $this withPlatform($value)
 */
class CreateRPSDK extends Rpc
{
}

/**
 * @method string getBizType()
 * @method $this withBizType($value)
 * @method string getIdCardNumber()
 * @method $this withIdCardNumber($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getBizId()
 * @method $this withBizId($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getIdCardFrontImageUrl()
 * @method $this withIdCardFrontImageUrl($value)
 * @method string getIdCardBackImageUrl()
 * @method $this withIdCardBackImageUrl($value)
 * @method string getFaceImageUrl()
 * @method $this withFaceImageUrl($value)
 * @method string getUserId()
 * @method $this withUserId($value)
 */
class VerifyMaterial extends Rpc
{
}

/**
 * @method string getBizType()
 * @method $this withBizType($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getBizId()
 * @method $this withBizId($value)
 */
class DescribeVerifyResult extends Rpc
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
 * @method string getIdCardNumber()
 * @method $this withIdCardNumber($value)
 * @method string getIdCardFrontImageUrl()
 * @method $this withIdCardFrontImageUrl($value)
 * @method string getFaceRetainedImageUrl()
 * @method $this withFaceRetainedImageUrl($value)
 * @method string getUserId()
 * @method $this withUserId($value)
 * @method string getBizType()
 * @method $this withBizType($value)
 * @method string getIdImageUrl()
 * @method $this withIdImageUrl($value)
 * @method string getPassedRedirectUrl()
 * @method $this withPassedRedirectUrl($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getCallbackSeed()
 * @method $this withCallbackSeed($value)
 * @method string getBizId()
 * @method $this withBizId($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getIdCardBackImageUrl()
 * @method $this withIdCardBackImageUrl($value)
 * @method string getCallbackUrl()
 * @method $this withCallbackUrl($value)
 * @method string getFailedRedirectUrl()
 * @method $this withFailedRedirectUrl($value)
 */
class DescribeVerifyToken extends Rpc
{
}
