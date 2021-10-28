<?php

namespace AlibabaCloud\Cloudauth\V20201112;

use AlibabaCloud\Client\Resolver\ApiResolver;

/**
 * @method CompareFaces compareFaces(array $options = [])
 * @method DescribeVerifyResult describeVerifyResult(array $options = [])
 * @method DescribeVerifyToken describeVerifyToken(array $options = [])
 * @method DetectFaceAttributes detectFaceAttributes(array $options = [])
 * @method LivenessDetect livenessDetect(array $options = [])
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
    public $version = '2020-11-12';

    /** @var string */
    public $method = 'POST';

    /** @var string */
    public $serviceCode = 'cloudauth';
}

/**
 * @method string getTargetImageUrl()
 * @method string getSourceImageUrl()
 * @method string getTargetImageBase64()
 * @method string getBizType()
 * @method string getBizId()
 * @method string getSourceImageBase64()
 */
class CompareFaces extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTargetImageUrl($value)
    {
        $this->data['TargetImageUrl'] = $value;
        $this->options['form_params']['TargetImageUrl'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSourceImageUrl($value)
    {
        $this->data['SourceImageUrl'] = $value;
        $this->options['form_params']['SourceImageUrl'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTargetImageBase64($value)
    {
        $this->data['TargetImageBase64'] = $value;
        $this->options['form_params']['TargetImageBase64'] = $value;

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
    public function withSourceImageBase64($value)
    {
        $this->data['SourceImageBase64'] = $value;
        $this->options['form_params']['SourceImageBase64'] = $value;

        return $this;
    }
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
 * @method string getUserRegistTime()
 * @method $this withUserRegistTime($value)
 * @method string getBizId()
 * @method $this withBizId($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getUserIp()
 * @method $this withUserIp($value)
 * @method string getIdCardBackImageUrl()
 * @method $this withIdCardBackImageUrl($value)
 * @method string getUserPhoneNumber()
 * @method $this withUserPhoneNumber($value)
 */
class DescribeVerifyToken extends Rpc
{
}

/**
 * @method string getImageFile()
 * @method string getBizType()
 * @method string getImageUrl()
 * @method string getBizId()
 */
class DetectFaceAttributes extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withImageFile($value)
    {
        $this->data['ImageFile'] = $value;
        $this->options['form_params']['ImageFile'] = $value;

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
    public function withImageUrl($value)
    {
        $this->data['ImageUrl'] = $value;
        $this->options['form_params']['ImageUrl'] = $value;

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
}

/**
 * @method string getMediaCategory()
 * @method string getMediaUrl()
 * @method string getBizType()
 * @method string getBizId()
 * @method string getMediaFile()
 */
class LivenessDetect extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withMediaCategory($value)
    {
        $this->data['MediaCategory'] = $value;
        $this->options['form_params']['MediaCategory'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withMediaUrl($value)
    {
        $this->data['MediaUrl'] = $value;
        $this->options['form_params']['MediaUrl'] = $value;

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
    public function withMediaFile($value)
    {
        $this->data['MediaFile'] = $value;
        $this->options['form_params']['MediaFile'] = $value;

        return $this;
    }
}

/**
 * @method string getIdCardNumber()
 * @method $this withIdCardNumber($value)
 * @method string getIdCardFrontImageUrl()
 * @method $this withIdCardFrontImageUrl($value)
 * @method string getFaceImageUrl()
 * @method $this withFaceImageUrl($value)
 * @method string getUserId()
 * @method $this withUserId($value)
 * @method string getBizType()
 * @method $this withBizType($value)
 * @method string getBizId()
 * @method $this withBizId($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getIdCardBackImageUrl()
 * @method $this withIdCardBackImageUrl($value)
 */
class VerifyMaterial extends Rpc
{
}
