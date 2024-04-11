<?php

namespace AlibabaCloud\Cams\V20200606;

use AlibabaCloud\Client\Resolver\ApiResolver;

/**
 * @method AddChatappPhoneNumber addChatappPhoneNumber(array $options = [])
 * @method BeeBotAssociate beeBotAssociate(array $options = [])
 * @method BeeBotChat beeBotChat(array $options = [])
 * @method ChatappBindWaba chatappBindWaba(array $options = [])
 * @method ChatappEmbedSignUp chatappEmbedSignUp(array $options = [])
 * @method ChatappMigrationRegister chatappMigrationRegister(array $options = [])
 * @method ChatappMigrationVerified chatappMigrationVerified(array $options = [])
 * @method ChatappPhoneNumberDeregister chatappPhoneNumberDeregister(array $options = [])
 * @method ChatappPhoneNumberRegister chatappPhoneNumberRegister(array $options = [])
 * @method ChatappSyncPhoneNumber chatappSyncPhoneNumber(array $options = [])
 * @method ChatappVerifyAndRegister chatappVerifyAndRegister(array $options = [])
 * @method CreateChatappMigrationInitiate createChatappMigrationInitiate(array $options = [])
 * @method CreateChatappTemplate createChatappTemplate(array $options = [])
 * @method CreateFlow createFlow(array $options = [])
 * @method CreatePhoneMessageQrdl createPhoneMessageQrdl(array $options = [])
 * @method DeleteChatappTemplate deleteChatappTemplate(array $options = [])
 * @method DeleteFlow deleteFlow(array $options = [])
 * @method DeletePhoneMessageQrdl deletePhoneMessageQrdl(array $options = [])
 * @method DeprecateFlow deprecateFlow(array $options = [])
 * @method EnableWhatsappROIMetric enableWhatsappROIMetric(array $options = [])
 * @method GetChatappPhoneNumberMetric getChatappPhoneNumberMetric(array $options = [])
 * @method GetChatappTemplateDetail getChatappTemplateDetail(array $options = [])
 * @method GetChatappTemplateMetric getChatappTemplateMetric(array $options = [])
 * @method GetChatappUploadAuthorization getChatappUploadAuthorization(array $options = [])
 * @method GetChatappVerifyCode getChatappVerifyCode(array $options = [])
 * @method GetCommerceSetting getCommerceSetting(array $options = [])
 * @method GetFlow getFlow(array $options = [])
 * @method GetFlowJSONAssest getFlowJSONAssest(array $options = [])
 * @method GetFlowPreviewUrl getFlowPreviewUrl(array $options = [])
 * @method GetMigrationVerifyCode getMigrationVerifyCode(array $options = [])
 * @method GetPermissionByCode getPermissionByCode(array $options = [])
 * @method GetPhoneEncryptionPublicKey getPhoneEncryptionPublicKey(array $options = [])
 * @method GetPhoneNumberVerificationStatus getPhoneNumberVerificationStatus(array $options = [])
 * @method GetPreValidatePhoneId getPreValidatePhoneId(array $options = [])
 * @method GetWhatsappConnectionCatalog getWhatsappConnectionCatalog(array $options = [])
 * @method IsvGetAppId isvGetAppId(array $options = [])
 * @method ListChatappTemplate listChatappTemplate(array $options = [])
 * @method ListFlow listFlow(array $options = [])
 * @method ListPhoneMessageQrdl listPhoneMessageQrdl(array $options = [])
 * @method ListProduct listProduct(array $options = [])
 * @method ListProductCatalog listProductCatalog(array $options = [])
 * @method ModifyChatappTemplate modifyChatappTemplate(array $options = [])
 * @method ModifyFlow modifyFlow(array $options = [])
 * @method ModifyPhoneBusinessProfile modifyPhoneBusinessProfile(array $options = [])
 * @method PublishFlow publishFlow(array $options = [])
 * @method QueryChatappBindWaba queryChatappBindWaba(array $options = [])
 * @method QueryChatappPhoneNumbers queryChatappPhoneNumbers(array $options = [])
 * @method QueryPhoneBusinessProfile queryPhoneBusinessProfile(array $options = [])
 * @method QueryWabaBusinessInfo queryWabaBusinessInfo(array $options = [])
 * @method SendChatappMassMessage sendChatappMassMessage(array $options = [])
 * @method SendChatappMessage sendChatappMessage(array $options = [])
 * @method SubmitIsvCustomerTerms submitIsvCustomerTerms(array $options = [])
 * @method UpdateAccountWebhook updateAccountWebhook(array $options = [])
 * @method UpdateCommerceSetting updateCommerceSetting(array $options = [])
 * @method UpdateFlowJSONAsset updateFlowJSONAsset(array $options = [])
 * @method UpdatePhoneEncryptionPublicKey updatePhoneEncryptionPublicKey(array $options = [])
 * @method UpdatePhoneMessageQrdl updatePhoneMessageQrdl(array $options = [])
 * @method UpdatePhoneWebhook updatePhoneWebhook(array $options = [])
 */
class CamsApiResolver extends ApiResolver
{
}

class Rpc extends \AlibabaCloud\Client\Resolver\Rpc
{
    /** @var string */
    public $product = 'cams';

    /** @var string */
    public $version = '2020-06-06';

    /** @var string */
    public $method = 'POST';

    /** @var string */
    public $serviceCode = 'cams';
}

/**
 * @method string getPreValidateId()
 * @method string getVerifiedName()
 * @method string getPhoneNumber()
 * @method string getApiCode()
 * @method $this withApiCode($value)
 * @method string getCc()
 * @method string getProdCode()
 * @method $this withProdCode($value)
 * @method string getCustSpaceId()
 */
class AddChatappPhoneNumber extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPreValidateId($value)
    {
        $this->data['PreValidateId'] = $value;
        $this->options['form_params']['PreValidateId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withVerifiedName($value)
    {
        $this->data['VerifiedName'] = $value;
        $this->options['form_params']['VerifiedName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPhoneNumber($value)
    {
        $this->data['PhoneNumber'] = $value;
        $this->options['form_params']['PhoneNumber'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCc($value)
    {
        $this->data['Cc'] = $value;
        $this->options['form_params']['Cc'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCustSpaceId($value)
    {
        $this->data['CustSpaceId'] = $value;
        $this->options['form_params']['CustSpaceId'] = $value;

        return $this;
    }
}

/**
 * @method string getSessionId()
 * @method string getApiCode()
 * @method $this withApiCode($value)
 * @method string getPerspective()
 * @method string getUtterance()
 * @method string getIsvCode()
 * @method string getProdCode()
 * @method $this withProdCode($value)
 * @method string getRecommendNum()
 * @method string getChatBotInstanceId()
 * @method string getCustSpaceId()
 */
class BeeBotAssociate extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSessionId($value)
    {
        $this->data['SessionId'] = $value;
        $this->options['form_params']['SessionId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPerspective($value)
    {
        $this->data['Perspective'] = $value;
        $this->options['form_params']['Perspective'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withUtterance($value)
    {
        $this->data['Utterance'] = $value;
        $this->options['form_params']['Utterance'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withIsvCode($value)
    {
        $this->data['IsvCode'] = $value;
        $this->options['form_params']['IsvCode'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withRecommendNum($value)
    {
        $this->data['RecommendNum'] = $value;
        $this->options['form_params']['RecommendNum'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withChatBotInstanceId($value)
    {
        $this->data['ChatBotInstanceId'] = $value;
        $this->options['form_params']['ChatBotInstanceId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCustSpaceId($value)
    {
        $this->data['CustSpaceId'] = $value;
        $this->options['form_params']['CustSpaceId'] = $value;

        return $this;
    }
}

/**
 * @method string getSessionId()
 * @method string getApiCode()
 * @method $this withApiCode($value)
 * @method string getIntentName()
 * @method string getSenderNick()
 * @method string getPerspective()
 * @method string getUtterance()
 * @method string getIsvCode()
 * @method string getProdCode()
 * @method $this withProdCode($value)
 * @method string getKnowledgeId()
 * @method string getVendorParam()
 * @method string getSenderId()
 * @method string getChatBotInstanceId()
 * @method string getCustSpaceId()
 */
class BeeBotChat extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSessionId($value)
    {
        $this->data['SessionId'] = $value;
        $this->options['form_params']['SessionId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withIntentName($value)
    {
        $this->data['IntentName'] = $value;
        $this->options['form_params']['IntentName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSenderNick($value)
    {
        $this->data['SenderNick'] = $value;
        $this->options['form_params']['SenderNick'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPerspective($value)
    {
        $this->data['Perspective'] = $value;
        $this->options['form_params']['Perspective'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withUtterance($value)
    {
        $this->data['Utterance'] = $value;
        $this->options['form_params']['Utterance'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withIsvCode($value)
    {
        $this->data['IsvCode'] = $value;
        $this->options['form_params']['IsvCode'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withKnowledgeId($value)
    {
        $this->data['KnowledgeId'] = $value;
        $this->options['form_params']['KnowledgeId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withVendorParam($value)
    {
        $this->data['VendorParam'] = $value;
        $this->options['form_params']['VendorParam'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSenderId($value)
    {
        $this->data['SenderId'] = $value;
        $this->options['form_params']['SenderId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withChatBotInstanceId($value)
    {
        $this->data['ChatBotInstanceId'] = $value;
        $this->options['form_params']['ChatBotInstanceId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCustSpaceId($value)
    {
        $this->data['CustSpaceId'] = $value;
        $this->options['form_params']['CustSpaceId'] = $value;

        return $this;
    }
}

/**
 * @method string getProdCode()
 * @method $this withProdCode($value)
 * @method string getWabaId()
 * @method string getApiCode()
 * @method $this withApiCode($value)
 */
class ChatappBindWaba extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withWabaId($value)
    {
        $this->data['WabaId'] = $value;
        $this->options['form_params']['WabaId'] = $value;

        return $this;
    }
}

/**
 * @method string getInputToken()
 * @method string getProdCode()
 * @method $this withProdCode($value)
 * @method string getApiCode()
 * @method $this withApiCode($value)
 */
class ChatappEmbedSignUp extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withInputToken($value)
    {
        $this->data['InputToken'] = $value;
        $this->options['form_params']['InputToken'] = $value;

        return $this;
    }
}

/**
 * @method string getPhoneNumber()
 * @method $this withPhoneNumber($value)
 * @method string getApiCode()
 * @method $this withApiCode($value)
 * @method string getProdCode()
 * @method $this withProdCode($value)
 * @method string getCustSpaceId()
 * @method $this withCustSpaceId($value)
 */
class ChatappMigrationRegister extends Rpc
{
}

/**
 * @method string getPhoneNumber()
 * @method $this withPhoneNumber($value)
 * @method string getVerifyCode()
 * @method $this withVerifyCode($value)
 * @method string getApiCode()
 * @method $this withApiCode($value)
 * @method string getProdCode()
 * @method $this withProdCode($value)
 * @method string getCustSpaceId()
 * @method $this withCustSpaceId($value)
 */
class ChatappMigrationVerified extends Rpc
{
}

/**
 * @method string getPhoneNumber()
 * @method string getApiCode()
 * @method $this withApiCode($value)
 * @method string getProdCode()
 * @method $this withProdCode($value)
 * @method string getCustSpaceId()
 */
class ChatappPhoneNumberDeregister extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPhoneNumber($value)
    {
        $this->data['PhoneNumber'] = $value;
        $this->options['form_params']['PhoneNumber'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCustSpaceId($value)
    {
        $this->data['CustSpaceId'] = $value;
        $this->options['form_params']['CustSpaceId'] = $value;

        return $this;
    }
}

/**
 * @method string getPhoneNumber()
 * @method string getApiCode()
 * @method $this withApiCode($value)
 * @method string getProdCode()
 * @method $this withProdCode($value)
 * @method string getCustSpaceId()
 */
class ChatappPhoneNumberRegister extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPhoneNumber($value)
    {
        $this->data['PhoneNumber'] = $value;
        $this->options['form_params']['PhoneNumber'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCustSpaceId($value)
    {
        $this->data['CustSpaceId'] = $value;
        $this->options['form_params']['CustSpaceId'] = $value;

        return $this;
    }
}

/**
 * @method string getProdCode()
 * @method $this withProdCode($value)
 * @method string getApiCode()
 * @method $this withApiCode($value)
 * @method string getCustSpaceId()
 * @method $this withCustSpaceId($value)
 */
class ChatappSyncPhoneNumber extends Rpc
{
}

/**
 * @method string getPhoneNumber()
 * @method string getVerifyCode()
 * @method string getApiCode()
 * @method $this withApiCode($value)
 * @method string getProdCode()
 * @method $this withProdCode($value)
 * @method string getCustSpaceId()
 */
class ChatappVerifyAndRegister extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPhoneNumber($value)
    {
        $this->data['PhoneNumber'] = $value;
        $this->options['form_params']['PhoneNumber'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withVerifyCode($value)
    {
        $this->data['VerifyCode'] = $value;
        $this->options['form_params']['VerifyCode'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCustSpaceId($value)
    {
        $this->data['CustSpaceId'] = $value;
        $this->options['form_params']['CustSpaceId'] = $value;

        return $this;
    }
}

/**
 * @method string getMobileNumber()
 * @method $this withMobileNumber($value)
 * @method string getCountryCode()
 * @method $this withCountryCode($value)
 * @method string getApiCode()
 * @method $this withApiCode($value)
 * @method string getProdCode()
 * @method $this withProdCode($value)
 * @method string getCustSpaceId()
 * @method $this withCustSpaceId($value)
 */
class CreateChatappMigrationInitiate extends Rpc
{
}

/**
 * @method string getComponents()
 * @method string getLanguage()
 * @method string getCustWabaId()
 * @method string getExample()
 * @method string getApiCode()
 * @method $this withApiCode($value)
 * @method string getTemplateType()
 * @method string getIsvCode()
 * @method string getProdCode()
 * @method $this withProdCode($value)
 * @method string getCustSpaceId()
 * @method string getName()
 * @method string getAllowCategoryChange()
 * @method string getCategory()
 * @method string getMessageSendTtlSeconds()
 */
class CreateChatappTemplate extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withComponents($value)
    {
        $this->data['Components'] = $value;
        $this->options['form_params']['Components'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withLanguage($value)
    {
        $this->data['Language'] = $value;
        $this->options['form_params']['Language'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCustWabaId($value)
    {
        $this->data['CustWabaId'] = $value;
        $this->options['form_params']['CustWabaId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withExample($value)
    {
        $this->data['Example'] = $value;
        $this->options['form_params']['Example'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTemplateType($value)
    {
        $this->data['TemplateType'] = $value;
        $this->options['form_params']['TemplateType'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withIsvCode($value)
    {
        $this->data['IsvCode'] = $value;
        $this->options['form_params']['IsvCode'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCustSpaceId($value)
    {
        $this->data['CustSpaceId'] = $value;
        $this->options['form_params']['CustSpaceId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withName($value)
    {
        $this->data['Name'] = $value;
        $this->options['form_params']['Name'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAllowCategoryChange($value)
    {
        $this->data['AllowCategoryChange'] = $value;
        $this->options['form_params']['AllowCategoryChange'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCategory($value)
    {
        $this->data['Category'] = $value;
        $this->options['form_params']['Category'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withMessageSendTtlSeconds($value)
    {
        $this->data['MessageSendTtlSeconds'] = $value;
        $this->options['form_params']['MessageSendTtlSeconds'] = $value;

        return $this;
    }
}

/**
 * @method string getApiCode()
 * @method $this withApiCode($value)
 * @method string getCategories()
 * @method string getProdCode()
 * @method $this withProdCode($value)
 * @method string getCustSpaceId()
 * @method string getFlowName()
 */
class CreateFlow extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCategories($value)
    {
        $this->data['Categories'] = $value;
        $this->options['form_params']['Categories'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCustSpaceId($value)
    {
        $this->data['CustSpaceId'] = $value;
        $this->options['form_params']['CustSpaceId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withFlowName($value)
    {
        $this->data['FlowName'] = $value;
        $this->options['form_params']['FlowName'] = $value;

        return $this;
    }
}

/**
 * @method string getPhoneNumber()
 * @method string getPrefilledMessage()
 * @method string getApiCode()
 * @method $this withApiCode($value)
 * @method string getGenerateQrImage()
 * @method string getProdCode()
 * @method $this withProdCode($value)
 * @method string getCustSpaceId()
 */
class CreatePhoneMessageQrdl extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPhoneNumber($value)
    {
        $this->data['PhoneNumber'] = $value;
        $this->options['form_params']['PhoneNumber'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPrefilledMessage($value)
    {
        $this->data['PrefilledMessage'] = $value;
        $this->options['form_params']['PrefilledMessage'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withGenerateQrImage($value)
    {
        $this->data['GenerateQrImage'] = $value;
        $this->options['form_params']['GenerateQrImage'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCustSpaceId($value)
    {
        $this->data['CustSpaceId'] = $value;
        $this->options['form_params']['CustSpaceId'] = $value;

        return $this;
    }
}

/**
 * @method string getCustWabaId()
 * @method $this withCustWabaId($value)
 * @method string getLanguage()
 * @method $this withLanguage($value)
 * @method string getApiCode()
 * @method $this withApiCode($value)
 * @method string getTemplateType()
 * @method $this withTemplateType($value)
 * @method string getTemplateName()
 * @method $this withTemplateName($value)
 * @method string getIsvCode()
 * @method $this withIsvCode($value)
 * @method string getProdCode()
 * @method $this withProdCode($value)
 * @method string getCustSpaceId()
 * @method $this withCustSpaceId($value)
 * @method string getTemplateCode()
 * @method $this withTemplateCode($value)
 */
class DeleteChatappTemplate extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getCode()
 * @method $this withCode($value)
 * @method string getExtendFunction()
 * @method $this withExtendFunction($value)
 * @method string getRouteName()
 * @method $this withRouteName($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DeleteFlow extends Rpc
{
}

/**
 * @method string getPhoneNumber()
 * @method string getApiCode()
 * @method $this withApiCode($value)
 * @method string getQrdlCode()
 * @method string getProdCode()
 * @method $this withProdCode($value)
 * @method string getCustSpaceId()
 */
class DeletePhoneMessageQrdl extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPhoneNumber($value)
    {
        $this->data['PhoneNumber'] = $value;
        $this->options['form_params']['PhoneNumber'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withQrdlCode($value)
    {
        $this->data['QrdlCode'] = $value;
        $this->options['form_params']['QrdlCode'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCustSpaceId($value)
    {
        $this->data['CustSpaceId'] = $value;
        $this->options['form_params']['CustSpaceId'] = $value;

        return $this;
    }
}

/**
 * @method string getApiCode()
 * @method $this withApiCode($value)
 * @method string getProdCode()
 * @method $this withProdCode($value)
 * @method string getCustSpaceId()
 * @method string getFlowId()
 */
class DeprecateFlow extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCustSpaceId($value)
    {
        $this->data['CustSpaceId'] = $value;
        $this->options['form_params']['CustSpaceId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withFlowId($value)
    {
        $this->data['FlowId'] = $value;
        $this->options['form_params']['FlowId'] = $value;

        return $this;
    }
}

/**
 * @method string getApiCode()
 * @method $this withApiCode($value)
 * @method string getIsvCode()
 * @method $this withIsvCode($value)
 * @method string getProdCode()
 * @method $this withProdCode($value)
 * @method string getCustSpaceId()
 * @method $this withCustSpaceId($value)
 */
class EnableWhatsappROIMetric extends Rpc
{
}

/**
 * @method string getPhoneNumber()
 * @method $this withPhoneNumber($value)
 * @method string getApiCode()
 * @method $this withApiCode($value)
 * @method string getEnd()
 * @method $this withEnd($value)
 * @method string getIsvCode()
 * @method $this withIsvCode($value)
 * @method string getProdCode()
 * @method $this withProdCode($value)
 * @method string getStart()
 * @method $this withStart($value)
 * @method string getCustSpaceId()
 * @method $this withCustSpaceId($value)
 * @method string getGranularity()
 * @method $this withGranularity($value)
 */
class GetChatappPhoneNumberMetric extends Rpc
{
}

/**
 * @method string getLanguage()
 * @method $this withLanguage($value)
 * @method string getCustWabaId()
 * @method $this withCustWabaId($value)
 * @method string getApiCode()
 * @method $this withApiCode($value)
 * @method string getTemplateType()
 * @method $this withTemplateType($value)
 * @method string getTemplateName()
 * @method $this withTemplateName($value)
 * @method string getIsvCode()
 * @method $this withIsvCode($value)
 * @method string getProdCode()
 * @method $this withProdCode($value)
 * @method string getCustSpaceId()
 * @method $this withCustSpaceId($value)
 * @method string getTemplateCode()
 * @method $this withTemplateCode($value)
 */
class GetChatappTemplateDetail extends Rpc
{
}

/**
 * @method string getLanguage()
 * @method $this withLanguage($value)
 * @method string getApiCode()
 * @method $this withApiCode($value)
 * @method string getTemplateType()
 * @method $this withTemplateType($value)
 * @method string getEnd()
 * @method $this withEnd($value)
 * @method string getIsvCode()
 * @method $this withIsvCode($value)
 * @method string getProdCode()
 * @method $this withProdCode($value)
 * @method string getStart()
 * @method $this withStart($value)
 * @method string getCustSpaceId()
 * @method $this withCustSpaceId($value)
 * @method string getGranularity()
 * @method $this withGranularity($value)
 * @method string getTemplateCode()
 * @method $this withTemplateCode($value)
 */
class GetChatappTemplateMetric extends Rpc
{
}

/**
 * @method string getProdCode()
 * @method $this withProdCode($value)
 * @method string getApiCode()
 * @method $this withApiCode($value)
 * @method string getCustSpaceId()
 * @method $this withCustSpaceId($value)
 */
class GetChatappUploadAuthorization extends Rpc
{
}

/**
 * @method string getPhoneNumber()
 * @method string getLocale()
 * @method string getApiCode()
 * @method $this withApiCode($value)
 * @method string getMethod()
 * @method string getProdCode()
 * @method $this withProdCode($value)
 * @method string getCustSpaceId()
 */
class GetChatappVerifyCode extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPhoneNumber($value)
    {
        $this->data['PhoneNumber'] = $value;
        $this->options['form_params']['PhoneNumber'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withLocale($value)
    {
        $this->data['Locale'] = $value;
        $this->options['form_params']['Locale'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withMethod($value)
    {
        $this->data['Method'] = $value;
        $this->options['form_params']['Method'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCustSpaceId($value)
    {
        $this->data['CustSpaceId'] = $value;
        $this->options['form_params']['CustSpaceId'] = $value;

        return $this;
    }
}

/**
 * @method string getPhoneNumber()
 * @method $this withPhoneNumber($value)
 * @method string getApiCode()
 * @method $this withApiCode($value)
 * @method string getProdCode()
 * @method $this withProdCode($value)
 * @method string getCustSpaceId()
 * @method $this withCustSpaceId($value)
 */
class GetCommerceSetting extends Rpc
{
}

/**
 * @method string getApiCode()
 * @method $this withApiCode($value)
 * @method string getProdCode()
 * @method $this withProdCode($value)
 * @method string getCustSpaceId()
 * @method string getFlowId()
 */
class GetFlow extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCustSpaceId($value)
    {
        $this->data['CustSpaceId'] = $value;
        $this->options['form_params']['CustSpaceId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withFlowId($value)
    {
        $this->data['FlowId'] = $value;
        $this->options['form_params']['FlowId'] = $value;

        return $this;
    }
}

/**
 * @method string getApiCode()
 * @method $this withApiCode($value)
 * @method string getProdCode()
 * @method $this withProdCode($value)
 * @method string getCustSpaceId()
 * @method string getFlowId()
 */
class GetFlowJSONAssest extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCustSpaceId($value)
    {
        $this->data['CustSpaceId'] = $value;
        $this->options['form_params']['CustSpaceId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withFlowId($value)
    {
        $this->data['FlowId'] = $value;
        $this->options['form_params']['FlowId'] = $value;

        return $this;
    }
}

/**
 * @method string getApiCode()
 * @method $this withApiCode($value)
 * @method string getProdCode()
 * @method $this withProdCode($value)
 * @method string getCustSpaceId()
 * @method string getFlowId()
 */
class GetFlowPreviewUrl extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCustSpaceId($value)
    {
        $this->data['CustSpaceId'] = $value;
        $this->options['form_params']['CustSpaceId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withFlowId($value)
    {
        $this->data['FlowId'] = $value;
        $this->options['form_params']['FlowId'] = $value;

        return $this;
    }
}

/**
 * @method string getPhoneNumber()
 * @method $this withPhoneNumber($value)
 * @method string getLocale()
 * @method $this withLocale($value)
 * @method string getApiCode()
 * @method $this withApiCode($value)
 * @method string getMethod()
 * @method $this withMethod($value)
 * @method string getProdCode()
 * @method $this withProdCode($value)
 * @method string getCustSpaceId()
 * @method $this withCustSpaceId($value)
 */
class GetMigrationVerifyCode extends Rpc
{
}

/**
 * @method string getCode()
 * @method string getApiCode()
 * @method $this withApiCode($value)
 * @method string getPermissions()
 * @method string getProdCode()
 * @method $this withProdCode($value)
 * @method string getCustSpaceId()
 */
class GetPermissionByCode extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCode($value)
    {
        $this->data['Code'] = $value;
        $this->options['form_params']['Code'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPermissions($value)
    {
        $this->data['Permissions'] = $value;
        $this->options['form_params']['Permissions'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCustSpaceId($value)
    {
        $this->data['CustSpaceId'] = $value;
        $this->options['form_params']['CustSpaceId'] = $value;

        return $this;
    }
}

/**
 * @method string getPhoneNumber()
 * @method string getApiCode()
 * @method $this withApiCode($value)
 * @method string getProdCode()
 * @method $this withProdCode($value)
 * @method string getCustSpaceId()
 */
class GetPhoneEncryptionPublicKey extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPhoneNumber($value)
    {
        $this->data['PhoneNumber'] = $value;
        $this->options['form_params']['PhoneNumber'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCustSpaceId($value)
    {
        $this->data['CustSpaceId'] = $value;
        $this->options['form_params']['CustSpaceId'] = $value;

        return $this;
    }
}

/**
 * @method string getPhoneNumber()
 * @method string getApiCode()
 * @method $this withApiCode($value)
 * @method string getProdCode()
 * @method $this withProdCode($value)
 * @method string getCustSpaceId()
 */
class GetPhoneNumberVerificationStatus extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPhoneNumber($value)
    {
        $this->data['PhoneNumber'] = $value;
        $this->options['form_params']['PhoneNumber'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCustSpaceId($value)
    {
        $this->data['CustSpaceId'] = $value;
        $this->options['form_params']['CustSpaceId'] = $value;

        return $this;
    }
}

/**
 * @method string getPhoneNumber()
 * @method string getVerifyCode()
 * @method string getApiCode()
 * @method $this withApiCode($value)
 * @method string getProdCode()
 * @method $this withProdCode($value)
 */
class GetPreValidatePhoneId extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPhoneNumber($value)
    {
        $this->data['PhoneNumber'] = $value;
        $this->options['form_params']['PhoneNumber'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withVerifyCode($value)
    {
        $this->data['VerifyCode'] = $value;
        $this->options['form_params']['VerifyCode'] = $value;

        return $this;
    }
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getExtendFunction()
 * @method $this withExtendFunction($value)
 * @method string getMetaVersion()
 * @method $this withMetaVersion($value)
 * @method string getRouteName()
 * @method $this withRouteName($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getWabaId()
 * @method $this withWabaId($value)
 * @method string getCustSpaceId()
 * @method $this withCustSpaceId($value)
 */
class GetWhatsappConnectionCatalog extends Rpc
{
}

/**
 * @method string getIntlVersion()
 * @method string getType()
 * @method string getApiCode()
 * @method $this withApiCode($value)
 * @method string getPermissions()
 * @method string getProdCode()
 * @method $this withProdCode($value)
 */
class IsvGetAppId extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withIntlVersion($value)
    {
        $this->data['IntlVersion'] = $value;
        $this->options['form_params']['IntlVersion'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withType($value)
    {
        $this->data['Type'] = $value;
        $this->options['form_params']['Type'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPermissions($value)
    {
        $this->data['Permissions'] = $value;
        $this->options['form_params']['Permissions'] = $value;

        return $this;
    }
}

/**
 * @method string getLanguage()
 * @method $this withLanguage($value)
 * @method string getCustWabaId()
 * @method $this withCustWabaId($value)
 * @method string getApiCode()
 * @method $this withApiCode($value)
 * @method string getTemplateType()
 * @method $this withTemplateType($value)
 * @method string getIsvCode()
 * @method $this withIsvCode($value)
 * @method string getAuditStatus()
 * @method $this withAuditStatus($value)
 * @method string getProdCode()
 * @method $this withProdCode($value)
 * @method string getCustSpaceId()
 * @method $this withCustSpaceId($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getPage()
 * @method $this withPage($value)
 */
class ListChatappTemplate extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getExtendFunction()
 * @method $this withExtendFunction($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getRouteName()
 * @method $this withRouteName($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getPageNo()
 * @method $this withPageNo($value)
 * @method string getStatus()
 * @method $this withStatus($value)
 */
class ListFlow extends Rpc
{
}

/**
 * @method string getPhoneNumber()
 * @method string getApiCode()
 * @method $this withApiCode($value)
 * @method string getProdCode()
 * @method $this withProdCode($value)
 * @method string getCustSpaceId()
 */
class ListPhoneMessageQrdl extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPhoneNumber($value)
    {
        $this->data['PhoneNumber'] = $value;
        $this->options['form_params']['PhoneNumber'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCustSpaceId($value)
    {
        $this->data['CustSpaceId'] = $value;
        $this->options['form_params']['CustSpaceId'] = $value;

        return $this;
    }
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getBefore()
 * @method $this withBefore($value)
 * @method string getExtendFunction()
 * @method $this withExtendFunction($value)
 * @method string getMetaVersion()
 * @method $this withMetaVersion($value)
 * @method string getLimit()
 * @method $this withLimit($value)
 * @method string getAfter()
 * @method $this withAfter($value)
 * @method string getRouteName()
 * @method $this withRouteName($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getWabaId()
 * @method $this withWabaId($value)
 * @method string getCatalogId()
 * @method $this withCatalogId($value)
 * @method string getCustSpaceId()
 * @method $this withCustSpaceId($value)
 * @method string getFields()
 * @method $this withFields($value)
 */
class ListProduct extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getBefore()
 * @method $this withBefore($value)
 * @method string getExtendFunction()
 * @method $this withExtendFunction($value)
 * @method string getMetaVersion()
 * @method $this withMetaVersion($value)
 * @method string getLimit()
 * @method $this withLimit($value)
 * @method string getAfter()
 * @method $this withAfter($value)
 * @method string getRouteName()
 * @method $this withRouteName($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getBusinessId()
 * @method $this withBusinessId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getCustSpaceId()
 * @method $this withCustSpaceId($value)
 * @method string getFields()
 * @method $this withFields($value)
 */
class ListProductCatalog extends Rpc
{
}

/**
 * @method string getComponents()
 * @method string getLanguage()
 * @method string getCustWabaId()
 * @method string getExample()
 * @method string getApiCode()
 * @method $this withApiCode($value)
 * @method string getTemplateType()
 * @method string getTemplateName()
 * @method string getIsvCode()
 * @method string getProdCode()
 * @method $this withProdCode($value)
 * @method string getCustSpaceId()
 * @method string getCategory()
 * @method string getMessageSendTtlSeconds()
 * @method string getTemplateCode()
 */
class ModifyChatappTemplate extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withComponents($value)
    {
        $this->data['Components'] = $value;
        $this->options['form_params']['Components'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withLanguage($value)
    {
        $this->data['Language'] = $value;
        $this->options['form_params']['Language'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCustWabaId($value)
    {
        $this->data['CustWabaId'] = $value;
        $this->options['form_params']['CustWabaId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withExample($value)
    {
        $this->data['Example'] = $value;
        $this->options['form_params']['Example'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTemplateType($value)
    {
        $this->data['TemplateType'] = $value;
        $this->options['form_params']['TemplateType'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTemplateName($value)
    {
        $this->data['TemplateName'] = $value;
        $this->options['form_params']['TemplateName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withIsvCode($value)
    {
        $this->data['IsvCode'] = $value;
        $this->options['form_params']['IsvCode'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCustSpaceId($value)
    {
        $this->data['CustSpaceId'] = $value;
        $this->options['form_params']['CustSpaceId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCategory($value)
    {
        $this->data['Category'] = $value;
        $this->options['form_params']['Category'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withMessageSendTtlSeconds($value)
    {
        $this->data['MessageSendTtlSeconds'] = $value;
        $this->options['form_params']['MessageSendTtlSeconds'] = $value;

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
}

/**
 * @method string getApiCode()
 * @method $this withApiCode($value)
 * @method string getCategories()
 * @method string getProdCode()
 * @method $this withProdCode($value)
 * @method string getCustSpaceId()
 * @method string getFlowName()
 * @method string getFlowId()
 */
class ModifyFlow extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCategories($value)
    {
        $this->data['Categories'] = $value;
        $this->options['form_params']['Categories'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCustSpaceId($value)
    {
        $this->data['CustSpaceId'] = $value;
        $this->options['form_params']['CustSpaceId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withFlowName($value)
    {
        $this->data['FlowName'] = $value;
        $this->options['form_params']['FlowName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withFlowId($value)
    {
        $this->data['FlowId'] = $value;
        $this->options['form_params']['FlowId'] = $value;

        return $this;
    }
}

/**
 * @method string getPhoneNumber()
 * @method $this withPhoneNumber($value)
 * @method string getAbout()
 * @method $this withAbout($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getVertical()
 * @method $this withVertical($value)
 * @method string getApiCode()
 * @method $this withApiCode($value)
 * @method string getEmail()
 * @method $this withEmail($value)
 * @method string getAddress()
 * @method $this withAddress($value)
 * @method string getProdCode()
 * @method $this withProdCode($value)
 * @method string getProfilePictureUrl()
 * @method $this withProfilePictureUrl($value)
 * @method string getCustSpaceId()
 * @method $this withCustSpaceId($value)
 * @method string getWebsites()
 * @method $this withWebsites($value)
 */
class ModifyPhoneBusinessProfile extends Rpc
{
}

/**
 * @method string getApiCode()
 * @method $this withApiCode($value)
 * @method string getProdCode()
 * @method $this withProdCode($value)
 * @method string getCustSpaceId()
 * @method string getFlowId()
 */
class PublishFlow extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCustSpaceId($value)
    {
        $this->data['CustSpaceId'] = $value;
        $this->options['form_params']['CustSpaceId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withFlowId($value)
    {
        $this->data['FlowId'] = $value;
        $this->options['form_params']['FlowId'] = $value;

        return $this;
    }
}

/**
 * @method string getApiCode()
 * @method $this withApiCode($value)
 * @method string getIsvCode()
 * @method $this withIsvCode($value)
 * @method string getProdCode()
 * @method $this withProdCode($value)
 * @method string getCustSpaceId()
 * @method $this withCustSpaceId($value)
 */
class QueryChatappBindWaba extends Rpc
{
}

/**
 * @method string getApiCode()
 * @method $this withApiCode($value)
 * @method string getIsvCode()
 * @method $this withIsvCode($value)
 * @method string getProdCode()
 * @method $this withProdCode($value)
 * @method string getCustSpaceId()
 * @method $this withCustSpaceId($value)
 * @method string getStatus()
 * @method $this withStatus($value)
 */
class QueryChatappPhoneNumbers extends Rpc
{
}

/**
 * @method string getPhoneNumber()
 * @method $this withPhoneNumber($value)
 * @method string getApiCode()
 * @method $this withApiCode($value)
 * @method string getProdCode()
 * @method $this withProdCode($value)
 * @method string getCustSpaceId()
 * @method $this withCustSpaceId($value)
 */
class QueryPhoneBusinessProfile extends Rpc
{
}

/**
 * @method string getApiCode()
 * @method $this withApiCode($value)
 * @method string getProdCode()
 * @method $this withProdCode($value)
 * @method string getWabaId()
 * @method $this withWabaId($value)
 * @method string getCustSpaceId()
 * @method $this withCustSpaceId($value)
 */
class QueryWabaBusinessInfo extends Rpc
{
}

/**
 * @method string getLanguage()
 * @method string getCustWabaId()
 * @method string getFallBackContent()
 * @method string getSenderList()
 * @method string getApiCode()
 * @method $this withApiCode($value)
 * @method string getChannelType()
 * @method string getFrom()
 * @method string getTemplateName()
 * @method string getTag()
 * @method string getFallBackRule()
 * @method string getTaskId()
 * @method string getIsvCode()
 * @method string getProdCode()
 * @method $this withProdCode($value)
 * @method string getLabel()
 * @method string getFallBackId()
 * @method string getTtl()
 * @method string getFallBackDuration()
 * @method string getCustSpaceId()
 * @method string getTemplateCode()
 */
class SendChatappMassMessage extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withLanguage($value)
    {
        $this->data['Language'] = $value;
        $this->options['form_params']['Language'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCustWabaId($value)
    {
        $this->data['CustWabaId'] = $value;
        $this->options['form_params']['CustWabaId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withFallBackContent($value)
    {
        $this->data['FallBackContent'] = $value;
        $this->options['form_params']['FallBackContent'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSenderList($value)
    {
        $this->data['SenderList'] = $value;
        $this->options['form_params']['SenderList'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withChannelType($value)
    {
        $this->data['ChannelType'] = $value;
        $this->options['form_params']['ChannelType'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withFrom($value)
    {
        $this->data['From'] = $value;
        $this->options['form_params']['From'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTemplateName($value)
    {
        $this->data['TemplateName'] = $value;
        $this->options['form_params']['TemplateName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTag($value)
    {
        $this->data['Tag'] = $value;
        $this->options['form_params']['Tag'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withFallBackRule($value)
    {
        $this->data['FallBackRule'] = $value;
        $this->options['form_params']['FallBackRule'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTaskId($value)
    {
        $this->data['TaskId'] = $value;
        $this->options['form_params']['TaskId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withIsvCode($value)
    {
        $this->data['IsvCode'] = $value;
        $this->options['form_params']['IsvCode'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withLabel($value)
    {
        $this->data['Label'] = $value;
        $this->options['form_params']['Label'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withFallBackId($value)
    {
        $this->data['FallBackId'] = $value;
        $this->options['form_params']['FallBackId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTtl($value)
    {
        $this->data['Ttl'] = $value;
        $this->options['form_params']['Ttl'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withFallBackDuration($value)
    {
        $this->data['FallBackDuration'] = $value;
        $this->options['form_params']['FallBackDuration'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCustSpaceId($value)
    {
        $this->data['CustSpaceId'] = $value;
        $this->options['form_params']['CustSpaceId'] = $value;

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
}

/**
 * @method string getLanguage()
 * @method string getType()
 * @method string getFallBackContent()
 * @method string getPayload()
 * @method $this withPayload($value)
 * @method string getFrom()
 * @method string getTag()
 * @method string getFallBackRule()
 * @method string getFlowAction()
 * @method string getTaskId()
 * @method string getIsvCode()
 * @method string getCustSpaceId()
 * @method string getTemplateCode()
 * @method string getProductAction()
 * @method string getMessageType()
 * @method string getCustWabaId()
 * @method string getContent()
 * @method $this withContent($value)
 * @method string getTemplateParams()
 * @method string getApiCode()
 * @method $this withApiCode($value)
 * @method string getChannelType()
 * @method string getTemplateName()
 * @method string getTrackingData()
 * @method string getContextMessageId()
 * @method string getProdCode()
 * @method $this withProdCode($value)
 * @method string getLabel()
 * @method string getFallBackId()
 * @method string getTtl()
 * @method string getFallBackDuration()
 * @method string getTo()
 */
class SendChatappMessage extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withLanguage($value)
    {
        $this->data['Language'] = $value;
        $this->options['form_params']['Language'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withType($value)
    {
        $this->data['Type'] = $value;
        $this->options['form_params']['Type'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withFallBackContent($value)
    {
        $this->data['FallBackContent'] = $value;
        $this->options['form_params']['FallBackContent'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withFrom($value)
    {
        $this->data['From'] = $value;
        $this->options['form_params']['From'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTag($value)
    {
        $this->data['Tag'] = $value;
        $this->options['form_params']['Tag'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withFallBackRule($value)
    {
        $this->data['FallBackRule'] = $value;
        $this->options['form_params']['FallBackRule'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withFlowAction($value)
    {
        $this->data['FlowAction'] = $value;
        $this->options['form_params']['FlowAction'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTaskId($value)
    {
        $this->data['TaskId'] = $value;
        $this->options['form_params']['TaskId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withIsvCode($value)
    {
        $this->data['IsvCode'] = $value;
        $this->options['form_params']['IsvCode'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCustSpaceId($value)
    {
        $this->data['CustSpaceId'] = $value;
        $this->options['form_params']['CustSpaceId'] = $value;

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
    public function withProductAction($value)
    {
        $this->data['ProductAction'] = $value;
        $this->options['form_params']['ProductAction'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withMessageType($value)
    {
        $this->data['MessageType'] = $value;
        $this->options['form_params']['MessageType'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCustWabaId($value)
    {
        $this->data['CustWabaId'] = $value;
        $this->options['form_params']['CustWabaId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTemplateParams($value)
    {
        $this->data['TemplateParams'] = $value;
        $this->options['form_params']['TemplateParams'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withChannelType($value)
    {
        $this->data['ChannelType'] = $value;
        $this->options['form_params']['ChannelType'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTemplateName($value)
    {
        $this->data['TemplateName'] = $value;
        $this->options['form_params']['TemplateName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTrackingData($value)
    {
        $this->data['TrackingData'] = $value;
        $this->options['form_params']['TrackingData'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withContextMessageId($value)
    {
        $this->data['ContextMessageId'] = $value;
        $this->options['form_params']['ContextMessageId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withLabel($value)
    {
        $this->data['Label'] = $value;
        $this->options['form_params']['Label'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withFallBackId($value)
    {
        $this->data['FallBackId'] = $value;
        $this->options['form_params']['FallBackId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTtl($value)
    {
        $this->data['Ttl'] = $value;
        $this->options['form_params']['Ttl'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withFallBackDuration($value)
    {
        $this->data['FallBackDuration'] = $value;
        $this->options['form_params']['FallBackDuration'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTo($value)
    {
        $this->data['To'] = $value;
        $this->options['form_params']['To'] = $value;

        return $this;
    }
}

/**
 * @method string getOfficeAddress()
 * @method $this withOfficeAddress($value)
 * @method string getIsvTerms()
 * @method $this withIsvTerms($value)
 * @method string getApiCode()
 * @method $this withApiCode($value)
 * @method string getProdCode()
 * @method $this withProdCode($value)
 * @method string getContactMail()
 * @method $this withContactMail($value)
 * @method string getCountryId()
 * @method $this withCountryId($value)
 * @method string getCustSpaceId()
 * @method $this withCustSpaceId($value)
 * @method string getBusinessDesc()
 * @method $this withBusinessDesc($value)
 * @method string getCustName()
 * @method $this withCustName($value)
 */
class SubmitIsvCustomerTerms extends Rpc
{
}

/**
 * @method string getApiCode()
 * @method $this withApiCode($value)
 * @method string getProdCode()
 * @method $this withProdCode($value)
 * @method string getQueueFlag()
 * @method $this withQueueFlag($value)
 * @method string getHttpFlag()
 * @method $this withHttpFlag($value)
 * @method string getStatusCallbackUrl()
 * @method $this withStatusCallbackUrl($value)
 * @method string getCustSpaceId()
 * @method $this withCustSpaceId($value)
 */
class UpdateAccountWebhook extends Rpc
{
}

/**
 * @method string getPhoneNumber()
 * @method $this withPhoneNumber($value)
 * @method string getApiCode()
 * @method $this withApiCode($value)
 * @method string getCatalogVisible()
 * @method $this withCatalogVisible($value)
 * @method string getCartEnable()
 * @method $this withCartEnable($value)
 * @method string getProdCode()
 * @method $this withProdCode($value)
 * @method string getCustSpaceId()
 * @method $this withCustSpaceId($value)
 */
class UpdateCommerceSetting extends Rpc
{
}

/**
 * @method string getFilePath()
 * @method string getApiCode()
 * @method $this withApiCode($value)
 * @method string getProdCode()
 * @method $this withProdCode($value)
 * @method string getCustSpaceId()
 * @method string getFlowId()
 */
class UpdateFlowJSONAsset extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withFilePath($value)
    {
        $this->data['FilePath'] = $value;
        $this->options['form_params']['FilePath'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCustSpaceId($value)
    {
        $this->data['CustSpaceId'] = $value;
        $this->options['form_params']['CustSpaceId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withFlowId($value)
    {
        $this->data['FlowId'] = $value;
        $this->options['form_params']['FlowId'] = $value;

        return $this;
    }
}

/**
 * @method string getPhoneNumber()
 * @method string getEncryptionPublicKey()
 * @method string getApiCode()
 * @method $this withApiCode($value)
 * @method string getProdCode()
 * @method $this withProdCode($value)
 * @method string getCustSpaceId()
 */
class UpdatePhoneEncryptionPublicKey extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPhoneNumber($value)
    {
        $this->data['PhoneNumber'] = $value;
        $this->options['form_params']['PhoneNumber'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withEncryptionPublicKey($value)
    {
        $this->data['EncryptionPublicKey'] = $value;
        $this->options['form_params']['EncryptionPublicKey'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCustSpaceId($value)
    {
        $this->data['CustSpaceId'] = $value;
        $this->options['form_params']['CustSpaceId'] = $value;

        return $this;
    }
}

/**
 * @method string getPhoneNumber()
 * @method string getPrefilledMessage()
 * @method string getApiCode()
 * @method $this withApiCode($value)
 * @method string getGenerateQrImage()
 * @method string getQrdlCode()
 * @method string getProdCode()
 * @method $this withProdCode($value)
 * @method string getCustSpaceId()
 */
class UpdatePhoneMessageQrdl extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPhoneNumber($value)
    {
        $this->data['PhoneNumber'] = $value;
        $this->options['form_params']['PhoneNumber'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPrefilledMessage($value)
    {
        $this->data['PrefilledMessage'] = $value;
        $this->options['form_params']['PrefilledMessage'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withGenerateQrImage($value)
    {
        $this->data['GenerateQrImage'] = $value;
        $this->options['form_params']['GenerateQrImage'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withQrdlCode($value)
    {
        $this->data['QrdlCode'] = $value;
        $this->options['form_params']['QrdlCode'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCustSpaceId($value)
    {
        $this->data['CustSpaceId'] = $value;
        $this->options['form_params']['CustSpaceId'] = $value;

        return $this;
    }
}

/**
 * @method string getUpCallbackUrl()
 * @method $this withUpCallbackUrl($value)
 * @method string getPhoneNumber()
 * @method $this withPhoneNumber($value)
 * @method string getApiCode()
 * @method $this withApiCode($value)
 * @method string getProdCode()
 * @method $this withProdCode($value)
 * @method string getQueueFlag()
 * @method $this withQueueFlag($value)
 * @method string getHttpFlag()
 * @method $this withHttpFlag($value)
 * @method string getStatusCallbackUrl()
 * @method $this withStatusCallbackUrl($value)
 * @method string getCustSpaceId()
 * @method $this withCustSpaceId($value)
 */
class UpdatePhoneWebhook extends Rpc
{
}
