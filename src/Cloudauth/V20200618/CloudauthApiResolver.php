<?php

namespace AlibabaCloud\Cloudauth\V20200618;

use AlibabaCloud\Client\Resolver\ApiResolver;

/**
 * @method ContrastSmartVerify contrastSmartVerify(array $options = [])
 * @method DescribeSmartVerify describeSmartVerify(array $options = [])
 * @method DescribeSmsDetail describeSmsDetail(array $options = [])
 * @method ElementSmartVerify elementSmartVerify(array $options = [])
 * @method InitSmartVerify initSmartVerify(array $options = [])
 * @method SendSms sendSms(array $options = [])
 * @method VerifyBankElement verifyBankElement(array $options = [])
 */
class CloudauthApiResolver extends ApiResolver
{
}

class Rpc extends \AlibabaCloud\Client\Resolver\Rpc
{
    /** @var string */
    public $product = 'Cloudauth';

    /** @var string */
    public $version = '2020-06-18';

    /** @var string */
    public $method = 'POST';

    /** @var string */
    public $serviceCode = 'cloudauth';
}

/**
 * @method string getFacePicFile()
 * @method string getIp()
 * @method string getCertName()
 * @method string getFacePicString()
 * @method string getMobile()
 * @method string getUserId()
 * @method string getMode()
 * @method string getCertNo()
 * @method string getOuterOrderNo()
 * @method string getFacePicUrl()
 * @method string getCertType()
 * @method string getSceneId()
 */
class ContrastSmartVerify extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withFacePicFile($value)
    {
        $this->data['FacePicFile'] = $value;
        $this->options['form_params']['FacePicFile'] = $value;

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
    public function withFacePicString($value)
    {
        $this->data['FacePicString'] = $value;
        $this->options['form_params']['FacePicString'] = $value;

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
    public function withMode($value)
    {
        $this->data['Mode'] = $value;
        $this->options['form_params']['Mode'] = $value;

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
    public function withFacePicUrl($value)
    {
        $this->data['FacePicUrl'] = $value;
        $this->options['form_params']['FacePicUrl'] = $value;

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
    public function withSceneId($value)
    {
        $this->data['SceneId'] = $value;
        $this->options['form_params']['SceneId'] = $value;

        return $this;
    }
}

/**
 * @method string getCertifyId()
 * @method string getPictureReturnType()
 * @method string getSceneId()
 */
class DescribeSmartVerify extends Rpc
{

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
    public function withPictureReturnType($value)
    {
        $this->data['PictureReturnType'] = $value;
        $this->options['form_params']['PictureReturnType'] = $value;

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
}

/**
 * @method string getSendStatus()
 * @method string getMobile()
 * @method string getCurrentPage()
 * @method string getOuterOrderNo()
 * @method string getSignName()
 * @method string getSendDate()
 * @method string getPageSize()
 * @method string getBizId()
 * @method string getTemplateCode()
 * @method string getErrorCode()
 */
class DescribeSmsDetail extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSendStatus($value)
    {
        $this->data['SendStatus'] = $value;
        $this->options['form_params']['SendStatus'] = $value;

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
    public function withCurrentPage($value)
    {
        $this->data['CurrentPage'] = $value;
        $this->options['form_params']['CurrentPage'] = $value;

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
    public function withSignName($value)
    {
        $this->data['SignName'] = $value;
        $this->options['form_params']['SignName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSendDate($value)
    {
        $this->data['SendDate'] = $value;
        $this->options['form_params']['SendDate'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPageSize($value)
    {
        $this->data['PageSize'] = $value;
        $this->options['form_params']['PageSize'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBizId($value)
    {
        $this->data['BizId'] = $value;
        $this->options['form_params']['BizId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTemplateCode($value)
    {
        $this->data['TemplateCode'] = $value;
        $this->options['form_params']['TemplateCode'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withErrorCode($value)
    {
        $this->data['ErrorCode'] = $value;
        $this->options['form_params']['ErrorCode'] = $value;

        return $this;
    }
}

/**
 * @method string getCertFile()
 * @method string getCertNationalEmblemUrl()
 * @method string getCertName()
 * @method string getMode()
 * @method string getCertNo()
 * @method string getOuterOrderNo()
 * @method string getCertUrl()
 * @method string getCertType()
 * @method string getSceneId()
 */
class ElementSmartVerify extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCertFile($value)
    {
        $this->data['CertFile'] = $value;
        $this->options['form_params']['CertFile'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCertNationalEmblemUrl($value)
    {
        $this->data['CertNationalEmblemUrl'] = $value;
        $this->options['form_params']['CertNationalEmblemUrl'] = $value;

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
    public function withMode($value)
    {
        $this->data['Mode'] = $value;
        $this->options['form_params']['Mode'] = $value;

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
    public function withCertUrl($value)
    {
        $this->data['CertUrl'] = $value;
        $this->options['form_params']['CertUrl'] = $value;

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
    public function withSceneId($value)
    {
        $this->data['SceneId'] = $value;
        $this->options['form_params']['SceneId'] = $value;

        return $this;
    }
}

/**
 * @method string getIdName()
 * @method string getUserId()
 * @method string getCertifyId()
 * @method string getFacePictureBase64()
 * @method string getMode()
 * @method string getCertNo()
 * @method string getOuterOrderNo()
 * @method string getCertType()
 * @method string getMetaInfo()
 * @method string getOcr()
 * @method string getOssObjectName()
 * @method string getFacePictureUrl()
 * @method string getIp()
 * @method string getCertName()
 * @method string getMobile()
 * @method string getIdNo()
 * @method string getSceneId()
 * @method string getCallbackToken()
 * @method string getOssBucketName()
 * @method string getCallbackUrl()
 */
class InitSmartVerify extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withIdName($value)
    {
        $this->data['IdName'] = $value;
        $this->options['form_params']['IdName'] = $value;

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
    public function withFacePictureBase64($value)
    {
        $this->data['FacePictureBase64'] = $value;
        $this->options['form_params']['FacePictureBase64'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withMode($value)
    {
        $this->data['Mode'] = $value;
        $this->options['form_params']['Mode'] = $value;

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
    public function withMetaInfo($value)
    {
        $this->data['MetaInfo'] = $value;
        $this->options['form_params']['MetaInfo'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOcr($value)
    {
        $this->data['Ocr'] = $value;
        $this->options['form_params']['Ocr'] = $value;

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
    public function withFacePictureUrl($value)
    {
        $this->data['FacePictureUrl'] = $value;
        $this->options['form_params']['FacePictureUrl'] = $value;

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
    public function withIdNo($value)
    {
        $this->data['IdNo'] = $value;
        $this->options['form_params']['IdNo'] = $value;

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
    public function withCallbackToken($value)
    {
        $this->data['CallbackToken'] = $value;
        $this->options['form_params']['CallbackToken'] = $value;

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
    public function withCallbackUrl($value)
    {
        $this->data['CallbackUrl'] = $value;
        $this->options['form_params']['CallbackUrl'] = $value;

        return $this;
    }
}

/**
 * @method string getMobile()
 * @method string getSignName()
 * @method string getOuterOrderNo()
 * @method string getTemplateCode()
 * @method string getTemplateParam()
 */
class SendSms extends Rpc
{

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
    public function withSignName($value)
    {
        $this->data['SignName'] = $value;
        $this->options['form_params']['SignName'] = $value;

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
    public function withTemplateCode($value)
    {
        $this->data['TemplateCode'] = $value;
        $this->options['form_params']['TemplateCode'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTemplateParam($value)
    {
        $this->data['TemplateParam'] = $value;
        $this->options['form_params']['TemplateParam'] = $value;

        return $this;
    }
}

/**
 * @method string getIdName()
 * @method string getMobile()
 * @method string getBankCardUrl()
 * @method string getIdNo()
 * @method string getBankCardNo()
 * @method string getMode()
 * @method string getOuterOrderNo()
 * @method string getBankCardFile()
 * @method string getSceneId()
 */
class VerifyBankElement extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withIdName($value)
    {
        $this->data['IdName'] = $value;
        $this->options['form_params']['IdName'] = $value;

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
    public function withBankCardUrl($value)
    {
        $this->data['BankCardUrl'] = $value;
        $this->options['form_params']['BankCardUrl'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withIdNo($value)
    {
        $this->data['IdNo'] = $value;
        $this->options['form_params']['IdNo'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBankCardNo($value)
    {
        $this->data['BankCardNo'] = $value;
        $this->options['form_params']['BankCardNo'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withMode($value)
    {
        $this->data['Mode'] = $value;
        $this->options['form_params']['Mode'] = $value;

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
    public function withBankCardFile($value)
    {
        $this->data['BankCardFile'] = $value;
        $this->options['form_params']['BankCardFile'] = $value;

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
}
