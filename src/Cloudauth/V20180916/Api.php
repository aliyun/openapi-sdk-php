<?php

namespace AlibabaCloud\Cloudauth\V20180916;

use AlibabaCloud\ApiResolverTrait;
use AlibabaCloud\Rpc;

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

class V20180916Rpc extends Rpc
{
    /** @var string */
    public $product = 'Cloudauth';

    /** @var string */
    public $version = '2018-09-16';

    /** @var string */
    public $method = 'POST';

    /** @var string */
    protected $scheme = 'https';

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
class ModifyDeviceInfo extends V20180916Rpc
{

    /** @var string */
    public $scheme = 'http';
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
class CreateAuthKey extends V20180916Rpc
{

    /** @var string */
    public $scheme = 'http';
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
class CreateVerifySDK extends V20180916Rpc
{

    /** @var string */
    public $scheme = 'http';
}

/**
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getLang()
 * @method $this withLang($value)
 * @method string getTaskId()
 * @method $this withTaskId($value)
 */
class DescribeVerifySDK extends V20180916Rpc
{

    /** @var string */
    public $scheme = 'http';
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
class DescribeDeviceInfo extends V20180916Rpc
{

    /** @var string */
    public $scheme = 'http';
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getBiz()
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method array getMaterial()
 * @method string getTicketId()
 */
class SubmitVerification extends V20180916Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBiz($value)
    {
        $this->data['Biz'] = $value;
        $this->options['form_params']['Biz'] = $value;

        return $this;
    }

    /**
     * @param array $material
     *
     * @return $this
     */
    public function withMaterial(array $material)
    {
        $this->data['Material'] = $material;
        foreach ($material as $depth1 => $depth1Value) {
            $this->options['form_params']['Material.' . ($depth1 + 1) . '.MaterialType'] = $depth1Value['MaterialType'];
            $this->options['form_params']['Material.' . ($depth1 + 1) . '.Value'] = $depth1Value['Value'];
        }

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTicketId($value)
    {
        $this->data['TicketId'] = $value;
        $this->options['form_params']['TicketId'] = $value;

        return $this;
    }
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getBiz()
 * @method $this withBiz($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getTicketId()
 * @method $this withTicketId($value)
 */
class GetStatus extends V20180916Rpc
{
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
class CompareFaces extends V20180916Rpc
{

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
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method array getMaterial()
 * @method string getVerifyToken()
 */
class SubmitMaterials extends V20180916Rpc
{

    /**
     * @param array $material
     *
     * @return $this
     */
    public function withMaterial(array $material)
    {
        $this->data['Material'] = $material;
        foreach ($material as $depth1 => $depth1Value) {
            $this->options['form_params']['Material.' . ($depth1 + 1) . '.MaterialType'] = $depth1Value['MaterialType'];
            $this->options['form_params']['Material.' . ($depth1 + 1) . '.Value'] = $depth1Value['Value'];
        }

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withVerifyToken($value)
    {
        $this->data['VerifyToken'] = $value;
        $this->options['form_params']['VerifyToken'] = $value;

        return $this;
    }
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getBiz()
 * @method $this withBiz($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getTicketId()
 * @method $this withTicketId($value)
 */
class GetMaterials extends V20180916Rpc
{
}

/**
 * @method string getUserData()
 * @method $this withUserData($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getBiz()
 * @method $this withBiz($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getBinding()
 * @method string getVerifyConfigs()
 * @method $this withVerifyConfigs($value)
 * @method string getTicketId()
 * @method $this withTicketId($value)
 */
class GetVerifyToken extends V20180916Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBinding($value)
    {
        $this->data['Binding'] = $value;
        $this->options['form_params']['Binding'] = $value;

        return $this;
    }
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
class DetectFaceAttributes extends V20180916Rpc
{

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
