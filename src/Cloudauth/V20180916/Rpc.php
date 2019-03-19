<?php

namespace AlibabaCloud\Cloudauth\V20180916;

use AlibabaCloud\Rpc;

class V20180916Rpc extends Rpc
{
    /** @var string */
    public $product = 'Cloudauth';

    /** @var string */
    public $version = '2018-09-16';

    /** @var string */
    public $method = 'POST';

    /** @var string */
    public $scheme = 'https';

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
 * @method $this withBiz($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method array getMaterial()
 * @method string getTicketId()
 * @method $this withTicketId($value)
 */
class SubmitVerification extends V20180916Rpc
{

    /**
     * @param array $value
     *
     * @return $this
     */
    public function withMaterial(array $value)
    {
        $this->data['Material'] = $value;
        foreach ($value as $i => $iValue) {
            $this->options['query']['Material.' . ($i + 1) . '.MaterialType'] = $value[$i]['MaterialType'];
            $this->options['query']['Material.' . ($i + 1) . '.Value'] = $value[$i]['Value'];
        }

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
 * @method $this withSourceImageType($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getTargetImageType()
 * @method $this withTargetImageType($value)
 * @method string getSourceImageValue()
 * @method $this withSourceImageValue($value)
 * @method string getTargetImageValue()
 * @method $this withTargetImageValue($value)
 */
class CompareFaces extends V20180916Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method array getMaterial()
 * @method string getVerifyToken()
 * @method $this withVerifyToken($value)
 */
class SubmitMaterials extends V20180916Rpc
{

    /**
     * @param array $value
     *
     * @return $this
     */
    public function withMaterial(array $value)
    {
        $this->data['Material'] = $value;
        foreach ($value as $i => $iValue) {
            $this->options['query']['Material.' . ($i + 1) . '.MaterialType'] = $value[$i]['MaterialType'];
            $this->options['query']['Material.' . ($i + 1) . '.Value'] = $value[$i]['Value'];
        }

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
 * @method $this withBinding($value)
 * @method string getVerifyConfigs()
 * @method $this withVerifyConfigs($value)
 * @method string getTicketId()
 * @method $this withTicketId($value)
 */
class GetVerifyToken extends V20180916Rpc
{
}

/**
 * @method string getMaxNumPhotosPerCategory()
 * @method $this withMaxNumPhotosPerCategory($value)
 * @method string getMaxFaceNum()
 * @method $this withMaxFaceNum($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getRetAttributes()
 * @method $this withRetAttributes($value)
 * @method string getMaterialValue()
 * @method $this withMaterialValue($value)
 * @method string getDontSaveDB()
 * @method $this withDontSaveDB($value)
 * @method string getClientTag()
 * @method $this withClientTag($value)
 */
class DetectFaceAttributes extends V20180916Rpc
{
}
