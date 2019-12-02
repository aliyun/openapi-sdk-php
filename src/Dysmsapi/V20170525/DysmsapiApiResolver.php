<?php

namespace AlibabaCloud\Dysmsapi\V20170525;

use AlibabaCloud\Client\Resolver\ApiResolver;

/**
 * @method AddSmsSign addSmsSign(array $options = [])
 * @method AddSmsTemplate addSmsTemplate(array $options = [])
 * @method DeleteSmsSign deleteSmsSign(array $options = [])
 * @method DeleteSmsTemplate deleteSmsTemplate(array $options = [])
 * @method ModifySmsSign modifySmsSign(array $options = [])
 * @method ModifySmsTemplate modifySmsTemplate(array $options = [])
 * @method QuerySendDetails querySendDetails(array $options = [])
 * @method QuerySmsSign querySmsSign(array $options = [])
 * @method QuerySmsTemplate querySmsTemplate(array $options = [])
 * @method SendBatchSms sendBatchSms(array $options = [])
 * @method SendSms sendSms(array $options = [])
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

    /** @var string */
    public $serviceCode = 'dysms';
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
			$this->options['query']['SignFileList.' . ($depth1 + 1) . '.FileContents'] = $depth1Value['FileContents'];
			$this->options['query']['SignFileList.' . ($depth1 + 1) . '.FileSuffix'] = $depth1Value['FileSuffix'];
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
			$this->options['query']['SignFileList.' . ($depth1 + 1) . '.FileContents'] = $depth1Value['FileContents'];
			$this->options['query']['SignFileList.' . ($depth1 + 1) . '.FileSuffix'] = $depth1Value['FileSuffix'];
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
