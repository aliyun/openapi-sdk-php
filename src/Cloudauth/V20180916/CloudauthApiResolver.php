<?php

namespace AlibabaCloud\Cloudauth\V20180916;

use AlibabaCloud\Client\Resolver\ApiResolver;

/**
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
class CloudauthApiResolver extends ApiResolver
{
}

class Rpc extends \AlibabaCloud\Client\Resolver\Rpc
{
    /** @var string */
    public $product = 'Cloudauth';

    /** @var string */
    public $version = '2018-09-16';

    /** @var string */
    public $method = 'POST';

    /** @var string */
    public $serviceCode = 'cloudauth';
}

/**
 * @method string getSourceImageType()
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getTargetImageType()
 * @method string getTargetImageValue()
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
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
    public function withSourceImageValue($value)
    {
        $this->data['SourceImageValue'] = $value;
        $this->options['form_params']['SourceImageValue'] = $value;

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
 * @method string getTaskId()
 * @method $this withTaskId($value)
 */
class DescribeVerifySDK extends Rpc
{
}

/**
 * @method string getMaxNumPhotosPerCategory()
 * @method string getMaxFaceNum()
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getRetAttributes()
 * @method string getClientTag()
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getMaterialValue()
 * @method string getDontSaveDB()
 */
class DetectFaceAttributes extends Rpc
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
    public function withClientTag($value)
    {
        $this->data['ClientTag'] = $value;
        $this->options['form_params']['ClientTag'] = $value;

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
}

/**
 * @method string getBiz()
 * @method $this withBiz($value)
 * @method string getTicketId()
 * @method $this withTicketId($value)
 */
class GetMaterials extends Rpc
{

    /** @var string */
    public $scheme = 'https';
}

/**
 * @method string getBiz()
 * @method $this withBiz($value)
 * @method string getTicketId()
 * @method $this withTicketId($value)
 */
class GetStatus extends Rpc
{
}

/**
 * @method string getBinding()
 * @method string getVerifyConfigs()
 * @method $this withVerifyConfigs($value)
 * @method string getUserData()
 * @method $this withUserData($value)
 * @method string getBiz()
 * @method $this withBiz($value)
 * @method string getTicketId()
 * @method $this withTicketId($value)
 */
class GetVerifyToken extends Rpc
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
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getVerifyToken()
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method array getMaterial()
 */
class SubmitMaterials extends Rpc
{

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

    /**
     * @param array $material
     *
     * @return $this
     */
	public function withMaterial(array $material)
	{
	    $this->data['Material'] = $material;
		foreach ($material as $depth1 => $depth1Value) {
			if(isset($depth1Value['MaterialType'])){
				$this->options['form_params']['Material.' . ($depth1 + 1) . '.MaterialType'] = $depth1Value['MaterialType'];
			}
			if(isset($depth1Value['Value'])){
				$this->options['form_params']['Material.' . ($depth1 + 1) . '.Value'] = $depth1Value['Value'];
			}
		}

		return $this;
    }
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
class SubmitVerification extends Rpc
{

    /** @var string */
    public $scheme = 'https';

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
			if(isset($depth1Value['MaterialType'])){
				$this->options['form_params']['Material.' . ($depth1 + 1) . '.MaterialType'] = $depth1Value['MaterialType'];
			}
			if(isset($depth1Value['Value'])){
				$this->options['form_params']['Material.' . ($depth1 + 1) . '.Value'] = $depth1Value['Value'];
			}
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
