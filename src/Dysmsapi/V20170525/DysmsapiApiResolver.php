<?php

namespace AlibabaCloud\Dysmsapi\V20170525;

use AlibabaCloud\Client\Resolver\ApiResolver;

/**
 * @method AddShortUrl addShortUrl(array $options = [])
 * @method AddSmsSign addSmsSign(array $options = [])
 * @method AddSmsTemplate addSmsTemplate(array $options = [])
 * @method DeleteShortUrl deleteShortUrl(array $options = [])
 * @method DeleteSmsSign deleteSmsSign(array $options = [])
 * @method DeleteSmsTemplate deleteSmsTemplate(array $options = [])
 * @method ListTagResources listTagResources(array $options = [])
 * @method ModifySmsSign modifySmsSign(array $options = [])
 * @method ModifySmsTemplate modifySmsTemplate(array $options = [])
 * @method QuerySendDetails querySendDetails(array $options = [])
 * @method QuerySendStatistics querySendStatistics(array $options = [])
 * @method QueryShortUrl queryShortUrl(array $options = [])
 * @method QuerySmsSign querySmsSign(array $options = [])
 * @method QuerySmsSignList querySmsSignList(array $options = [])
 * @method QuerySmsTemplate querySmsTemplate(array $options = [])
 * @method QuerySmsTemplateList querySmsTemplateList(array $options = [])
 * @method SendBatchSms sendBatchSms(array $options = [])
 * @method SendSms sendSms(array $options = [])
 * @method TagResources tagResources(array $options = [])
 * @method UntagResources untagResources(array $options = [])
 */
class DysmsapiApiResolver extends ApiResolver
{
}

class Rpc extends \AlibabaCloud\Client\Resolver\Rpc
{
    /** @var string */
    public $product = 'Dysmsapi';

    /** @var string */
    public $version = '2017-05-25';

    /** @var string */
    public $method = 'POST';
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getShortUrlName()
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getEffectiveDays()
 * @method string getProdCode()
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getSourceUrl()
 */
class AddShortUrl extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withShortUrlName($value)
    {
        $this->data['ShortUrlName'] = $value;
        $this->options['form_params']['ShortUrlName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withEffectiveDays($value)
    {
        $this->data['EffectiveDays'] = $value;
        $this->options['form_params']['EffectiveDays'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withProdCode($value)
    {
        $this->data['ProdCode'] = $value;
        $this->options['form_params']['ProdCode'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSourceUrl($value)
    {
        $this->data['SourceUrl'] = $value;
        $this->options['form_params']['SourceUrl'] = $value;

        return $this;
    }
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getRemark()
 * @method $this withRemark($value)
 * @method string getSignName()
 * @method $this withSignName($value)
 * @method array getSignFileList()
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getSignSource()
 * @method $this withSignSource($value)
 */
class AddSmsSign extends Rpc
{

    /**
     * @param array $signFileList
     *
     * @return $this
     */
	public function withSignFileList(array $signFileList)
	{
	    $this->data['SignFileList'] = $signFileList;
		foreach ($signFileList as $depth1 => $depth1Value) {
			if(isset($depth1Value['FileContents'])){
				$this->options['form_params']['SignFileList.' . ($depth1 + 1) . '.FileContents'] = $depth1Value['FileContents'];
			}
			if(isset($depth1Value['FileSuffix'])){
				$this->options['form_params']['SignFileList.' . ($depth1 + 1) . '.FileSuffix'] = $depth1Value['FileSuffix'];
			}
		}

		return $this;
    }
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getRemark()
 * @method $this withRemark($value)
 * @method string getTemplateType()
 * @method $this withTemplateType($value)
 * @method string getTemplateName()
 * @method $this withTemplateName($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getTemplateContent()
 * @method $this withTemplateContent($value)
 */
class AddSmsTemplate extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getProdCode()
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getSourceUrl()
 */
class DeleteShortUrl extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withProdCode($value)
    {
        $this->data['ProdCode'] = $value;
        $this->options['form_params']['ProdCode'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSourceUrl($value)
    {
        $this->data['SourceUrl'] = $value;
        $this->options['form_params']['SourceUrl'] = $value;

        return $this;
    }
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getSignName()
 * @method $this withSignName($value)
 */
class DeleteSmsSign extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getTemplateCode()
 * @method $this withTemplateCode($value)
 */
class DeleteSmsTemplate extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getNextToken()
 * @method $this withNextToken($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method array getTag()
 * @method array getResourceId()
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getProdCode()
 * @method $this withProdCode($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getResourceType()
 * @method $this withResourceType($value)
 */
class ListTagResources extends Rpc
{

    /**
     * @param array $tag
     *
     * @return $this
     */
	public function withTag(array $tag)
	{
	    $this->data['Tag'] = $tag;
		foreach ($tag as $depth1 => $depth1Value) {
			if(isset($depth1Value['Value'])){
				$this->options['query']['Tag.' . ($depth1 + 1) . '.Value'] = $depth1Value['Value'];
			}
			if(isset($depth1Value['Key'])){
				$this->options['query']['Tag.' . ($depth1 + 1) . '.Key'] = $depth1Value['Key'];
			}
		}

		return $this;
    }

    /**
     * @param array $resourceId
     *
     * @return $this
     */
	public function withResourceId(array $resourceId)
	{
	    $this->data['ResourceId'] = $resourceId;
		foreach ($resourceId as $i => $iValue) {
			$this->options['query']['ResourceId.' . ($i + 1)] = $iValue;
		}

		return $this;
    }
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getRemark()
 * @method $this withRemark($value)
 * @method string getSignName()
 * @method $this withSignName($value)
 * @method array getSignFileList()
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getSignSource()
 * @method $this withSignSource($value)
 */
class ModifySmsSign extends Rpc
{

    /**
     * @param array $signFileList
     *
     * @return $this
     */
	public function withSignFileList(array $signFileList)
	{
	    $this->data['SignFileList'] = $signFileList;
		foreach ($signFileList as $depth1 => $depth1Value) {
			if(isset($depth1Value['FileContents'])){
				$this->options['form_params']['SignFileList.' . ($depth1 + 1) . '.FileContents'] = $depth1Value['FileContents'];
			}
			if(isset($depth1Value['FileSuffix'])){
				$this->options['form_params']['SignFileList.' . ($depth1 + 1) . '.FileSuffix'] = $depth1Value['FileSuffix'];
			}
		}

		return $this;
    }
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getRemark()
 * @method $this withRemark($value)
 * @method string getTemplateType()
 * @method $this withTemplateType($value)
 * @method string getTemplateName()
 * @method $this withTemplateName($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getTemplateContent()
 * @method $this withTemplateContent($value)
 * @method string getTemplateCode()
 * @method $this withTemplateCode($value)
 */
class ModifySmsTemplate extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getPhoneNumber()
 * @method $this withPhoneNumber($value)
 * @method string getSendDate()
 * @method $this withSendDate($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getCurrentPage()
 * @method $this withCurrentPage($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getBizId()
 * @method $this withBizId($value)
 */
class QuerySendDetails extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getIsGlobe()
 * @method $this withIsGlobe($value)
 * @method string getStartDate()
 * @method $this withStartDate($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getPageIndex()
 * @method $this withPageIndex($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getEndDate()
 * @method $this withEndDate($value)
 */
class QuerySendStatistics extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getShortUrl()
 * @method string getProdCode()
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class QueryShortUrl extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withShortUrl($value)
    {
        $this->data['ShortUrl'] = $value;
        $this->options['form_params']['ShortUrl'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withProdCode($value)
    {
        $this->data['ProdCode'] = $value;
        $this->options['form_params']['ProdCode'] = $value;

        return $this;
    }
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getSignName()
 * @method $this withSignName($value)
 */
class QuerySmsSign extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getPageIndex()
 * @method $this withPageIndex($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class QuerySmsSignList extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getTemplateCode()
 * @method $this withTemplateCode($value)
 */
class QuerySmsTemplate extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getPageIndex()
 * @method $this withPageIndex($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class QuerySmsTemplateList extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getTemplateParamJson()
 * @method $this withTemplateParamJson($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getSmsUpExtendCodeJson()
 * @method $this withSmsUpExtendCodeJson($value)
 * @method string getSignNameJson()
 * @method $this withSignNameJson($value)
 * @method string getTemplateCode()
 * @method $this withTemplateCode($value)
 * @method string getPhoneNumberJson()
 * @method $this withPhoneNumberJson($value)
 */
class SendBatchSms extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getSmsUpExtendCode()
 * @method $this withSmsUpExtendCode($value)
 * @method string getSignName()
 * @method $this withSignName($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getPhoneNumbers()
 * @method $this withPhoneNumbers($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getOutId()
 * @method $this withOutId($value)
 * @method string getTemplateCode()
 * @method $this withTemplateCode($value)
 * @method string getTemplateParam()
 * @method $this withTemplateParam($value)
 */
class SendSms extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method array getTag()
 * @method array getResourceId()
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getProdCode()
 * @method $this withProdCode($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getResourceType()
 * @method $this withResourceType($value)
 */
class TagResources extends Rpc
{

    /**
     * @param array $tag
     *
     * @return $this
     */
	public function withTag(array $tag)
	{
	    $this->data['Tag'] = $tag;
		foreach ($tag as $depth1 => $depth1Value) {
			if(isset($depth1Value['Value'])){
				$this->options['query']['Tag.' . ($depth1 + 1) . '.Value'] = $depth1Value['Value'];
			}
			if(isset($depth1Value['Key'])){
				$this->options['query']['Tag.' . ($depth1 + 1) . '.Key'] = $depth1Value['Key'];
			}
		}

		return $this;
    }

    /**
     * @param array $resourceId
     *
     * @return $this
     */
	public function withResourceId(array $resourceId)
	{
	    $this->data['ResourceId'] = $resourceId;
		foreach ($resourceId as $i => $iValue) {
			$this->options['query']['ResourceId.' . ($i + 1)] = $iValue;
		}

		return $this;
    }
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getAll()
 * @method $this withAll($value)
 * @method array getResourceId()
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getProdCode()
 * @method $this withProdCode($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getResourceType()
 * @method $this withResourceType($value)
 * @method array getTagKey()
 */
class UntagResources extends Rpc
{

    /**
     * @param array $resourceId
     *
     * @return $this
     */
	public function withResourceId(array $resourceId)
	{
	    $this->data['ResourceId'] = $resourceId;
		foreach ($resourceId as $i => $iValue) {
			$this->options['query']['ResourceId.' . ($i + 1)] = $iValue;
		}

		return $this;
    }

    /**
     * @param array $tagKey
     *
     * @return $this
     */
	public function withTagKey(array $tagKey)
	{
	    $this->data['TagKey'] = $tagKey;
		foreach ($tagKey as $i => $iValue) {
			$this->options['query']['TagKey.' . ($i + 1)] = $iValue;
		}

		return $this;
    }
}
