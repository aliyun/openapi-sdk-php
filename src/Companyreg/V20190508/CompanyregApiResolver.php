<?php

namespace AlibabaCloud\Companyreg\V20190508;

use AlibabaCloud\Client\Resolver\ApiResolver;

/**
 * @method AcceptBookkeepingAuditResult acceptBookkeepingAuditResult(array $options = [])
 * @method AcceptBookkeepingDetailStatusChange acceptBookkeepingDetailStatusChange(array $options = [])
 * @method AcceptPartnerNotification acceptPartnerNotification(array $options = [])
 * @method CheckCompanyReg checkCompanyReg(array $options = [])
 * @method CloseIcpProduce closeIcpProduce(array $options = [])
 * @method CloseIntention closeIntention(array $options = [])
 * @method ConfirmIcpIntention confirmIcpIntention(array $options = [])
 * @method ConfirmIntention confirmIntention(array $options = [])
 * @method ConfirmMaterial confirmMaterial(array $options = [])
 * @method ConfirmTaxAmount confirmTaxAmount(array $options = [])
 * @method CreateBookkeepingIntention createBookkeepingIntention(array $options = [])
 * @method GenerateCompanyRegUploadPolicy generateCompanyRegUploadPolicy(array $options = [])
 * @method GenerateUploadFilePolicy generateUploadFilePolicy(array $options = [])
 * @method GetCompanyRegOrder getCompanyRegOrder(array $options = [])
 * @method ListApplicationLogs listApplicationLogs(array $options = [])
 * @method ListBookkeepings listBookkeepings(array $options = [])
 * @method ListBookkeepingStatisticses listBookkeepingStatisticses(array $options = [])
 * @method ListBookkeepingSubjectBalances listBookkeepingSubjectBalances(array $options = [])
 * @method ListCompanyRegConsultations listCompanyRegConsultations(array $options = [])
 * @method ListCompanyRegOrders listCompanyRegOrders(array $options = [])
 * @method ListIcpApplications listIcpApplications(array $options = [])
 * @method ProcessCompanyRegOrder processCompanyRegOrder(array $options = [])
 * @method QueryBookkeepingCommodities queryBookkeepingCommodities(array $options = [])
 * @method QueryBookkeepingCommodityModules queryBookkeepingCommodityModules(array $options = [])
 * @method QueryCommunicationLogs queryCommunicationLogs(array $options = [])
 * @method QueryIcpApplicationList queryIcpApplicationList(array $options = [])
 * @method QueryIcpIntentionList queryIcpIntentionList(array $options = [])
 * @method QueryIcpProduceList queryIcpProduceList(array $options = [])
 * @method QueryIntentionList queryIntentionList(array $options = [])
 * @method QueryTradeIntentionUserList queryTradeIntentionUserList(array $options = [])
 * @method RefuseMaterial refuseMaterial(array $options = [])
 * @method RejectIcpIntention rejectIcpIntention(array $options = [])
 * @method ReSubmitIcpSolution reSubmitIcpSolution(array $options = [])
 * @method SendVcode sendVcode(array $options = [])
 * @method SubmitCommunicationNote submitCommunicationNote(array $options = [])
 * @method SubmitConsultation submitConsultation(array $options = [])
 * @method SubmitIcpSolution submitIcpSolution(array $options = [])
 * @method SubmitPartnerCompanyInformation submitPartnerCompanyInformation(array $options = [])
 * @method UpdateBookkeepingOrg updateBookkeepingOrg(array $options = [])
 * @method UpdateProduce updateProduce(array $options = [])
 * @method UploadIcpBasicMaterial uploadIcpBasicMaterial(array $options = [])
 * @method UploadUserMaterial uploadUserMaterial(array $options = [])
 * @method WriteCommunicationLog writeCommunicationLog(array $options = [])
 */
class CompanyregApiResolver extends ApiResolver
{
}

class Rpc extends \AlibabaCloud\Client\Resolver\Rpc
{
    /** @var string */
    public $product = 'companyreg';

    /** @var string */
    public $version = '2019-05-08';

    /** @var string */
    public $method = 'POST';
}

/**
 * @method string getNote()
 * @method $this withNote($value)
 * @method string getOrgCode()
 * @method $this withOrgCode($value)
 * @method string getOrgAddress()
 * @method $this withOrgAddress($value)
 * @method string getOrgName()
 * @method $this withOrgName($value)
 * @method string getServiceStartTime()
 * @method $this withServiceStartTime($value)
 * @method string getAuditResult()
 * @method $this withAuditResult($value)
 * @method string getBizId()
 * @method $this withBizId($value)
 * @method string getOrgMobile()
 * @method $this withOrgMobile($value)
 */
class AcceptBookkeepingAuditResult extends Rpc
{
}

/**
 * @method string getBizId()
 * @method $this withBizId($value)
 * @method string getTaxAmount()
 * @method $this withTaxAmount($value)
 * @method string getStatus()
 * @method $this withStatus($value)
 */
class AcceptBookkeepingDetailStatusChange extends Rpc
{
}

/**
 * @method string getCertificateEndTime()
 * @method $this withCertificateEndTime($value)
 * @method string getApplicationStatus()
 * @method $this withApplicationStatus($value)
 * @method string getCertificateNumber()
 * @method $this withCertificateNumber($value)
 * @method string getOfficialFileURL()
 * @method $this withOfficialFileURL($value)
 * @method string getCertificateStartTime()
 * @method $this withCertificateStartTime($value)
 * @method string getBizId()
 * @method $this withBizId($value)
 */
class AcceptPartnerNotification extends Rpc
{
}

/**
 * @method string getOrgType()
 * @method $this withOrgType($value)
 * @method string getIndustryType()
 * @method $this withIndustryType($value)
 * @method string getTradeName()
 * @method $this withTradeName($value)
 * @method string getCity()
 * @method $this withCity($value)
 * @method string getNameType()
 * @method $this withNameType($value)
 */
class CheckCompanyReg extends Rpc
{
}

/**
 * @method string getNote()
 * @method $this withNote($value)
 * @method string getBizId()
 * @method $this withBizId($value)
 */
class CloseIcpProduce extends Rpc
{
}

/**
 * @method string getNote()
 * @method $this withNote($value)
 * @method string getBizId()
 * @method $this withBizId($value)
 */
class CloseIntention extends Rpc
{
}

/**
 * @method string getBizIds()
 * @method $this withBizIds($value)
 */
class ConfirmIcpIntention extends Rpc
{
}

/**
 * @method string getBizId()
 */
class ConfirmIntention extends Rpc
{

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
 * @method string getUserOtherList()
 * @method $this withUserOtherList($value)
 * @method string getBizId()
 * @method $this withBizId($value)
 */
class ConfirmMaterial extends Rpc
{
}

/**
 * @method string getBizId()
 */
class ConfirmTaxAmount extends Rpc
{

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
 * @method string getArea()
 * @method $this withArea($value)
 * @method string getMobile()
 * @method $this withMobile($value)
 * @method string getChannel()
 * @method $this withChannel($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getToken()
 * @method $this withToken($value)
 * @method string getVerifyCode()
 * @method $this withVerifyCode($value)
 * @method string getUserName()
 * @method $this withUserName($value)
 */
class CreateBookkeepingIntention extends Rpc
{
}

/**
 * @method string getData()
 * @method $this withData($value)
 * @method string getBizCode()
 * @method $this withBizCode($value)
 * @method string getBizSubCode()
 * @method $this withBizSubCode($value)
 */
class GenerateCompanyRegUploadPolicy extends Rpc
{
}

/**
 * @method string getFileType()
 * @method $this withFileType($value)
 * @method string getFileName()
 * @method $this withFileName($value)
 */
class GenerateUploadFilePolicy extends Rpc
{
}

/**
 * @method string getActionTypes()
 * @method $this withActionTypes($value)
 * @method string getBizCode()
 * @method $this withBizCode($value)
 * @method string getBizId()
 * @method $this withBizId($value)
 * @method string getMaxOperationSize()
 * @method $this withMaxOperationSize($value)
 * @method string getBizSubCode()
 * @method $this withBizSubCode($value)
 */
class GetCompanyRegOrder extends Rpc
{
}

/**
 * @method string getBizId()
 * @method $this withBizId($value)
 */
class ListApplicationLogs extends Rpc
{
}

/**
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 */
class ListBookkeepings extends Rpc
{
}

/**
 * @method string getYear()
 * @method $this withYear($value)
 * @method string getProduceBizId()
 * @method $this withProduceBizId($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getMonth()
 * @method $this withMonth($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 */
class ListBookkeepingStatisticses extends Rpc
{
}

/**
 * @method string getPeriod()
 * @method $this withPeriod($value)
 * @method string getYear()
 * @method $this withYear($value)
 * @method string getProduceBizId()
 * @method $this withProduceBizId($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 */
class ListBookkeepingSubjectBalances extends Rpc
{
}

/**
 * @method string getEndGmtCreate()
 * @method $this withEndGmtCreate($value)
 * @method string getCity()
 * @method $this withCity($value)
 * @method string getPageNum()
 * @method $this withPageNum($value)
 * @method string getBizCode()
 * @method $this withBizCode($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getBizId()
 * @method $this withBizId($value)
 * @method string getStartGmtCreate()
 * @method $this withStartGmtCreate($value)
 */
class ListCompanyRegConsultations extends Rpc
{
}

/**
 * @method string getNotBizStatus()
 * @method $this withNotBizStatus($value)
 * @method string getPageNum()
 * @method $this withPageNum($value)
 * @method string getBizCode()
 * @method $this withBizCode($value)
 * @method string getBizStatus()
 * @method $this withBizStatus($value)
 * @method string getCompanyName()
 * @method $this withCompanyName($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getAliyunOrderId()
 * @method $this withAliyunOrderId($value)
 * @method string getBizSubCode()
 * @method $this withBizSubCode($value)
 */
class ListCompanyRegOrders extends Rpc
{
}

/**
 * @method string getIntentionBizId()
 * @method $this withIntentionBizId($value)
 * @method string getType()
 * @method $this withType($value)
 * @method string getApplicationStatus()
 * @method $this withApplicationStatus($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getCompanyName()
 * @method $this withCompanyName($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getSortOrder()
 * @method $this withSortOrder($value)
 * @method string getSortField()
 * @method $this withSortField($value)
 */
class ListIcpApplications extends Rpc
{
}

/**
 * @method string getActionType()
 * @method $this withActionType($value)
 * @method string getActionRequestId()
 * @method $this withActionRequestId($value)
 * @method string getOperatorType()
 * @method $this withOperatorType($value)
 * @method string getActionInfo()
 * @method $this withActionInfo($value)
 * @method string getBizCode()
 * @method $this withBizCode($value)
 * @method string getBizId()
 * @method $this withBizId($value)
 * @method string getBizSubCode()
 * @method $this withBizSubCode($value)
 */
class ProcessCompanyRegOrder extends Rpc
{
}

/**
 * @method string getServiceType()
 * @method $this withServiceType($value)
 * @method string getCity()
 * @method $this withCity($value)
 * @method string getCompanyType()
 * @method $this withCompanyType($value)
 * @method string getAreaType()
 * @method $this withAreaType($value)
 */
class QueryBookkeepingCommodities extends Rpc
{
}

class QueryBookkeepingCommodityModules extends Rpc
{
}

/**
 * @method string getType()
 * @method $this withType($value)
 * @method string getPageNum()
 * @method $this withPageNum($value)
 * @method string getBizId()
 * @method $this withBizId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 */
class QueryCommunicationLogs extends Rpc
{
}

/**
 * @method string getBizId()
 * @method $this withBizId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getType()
 * @method $this withType($value)
 * @method string getPageNum()
 * @method $this withPageNum($value)
 */
class QueryIcpApplicationList extends Rpc
{

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getBizId()
 * @method $this withBizId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getType()
 * @method $this withType($value)
 * @method string getPageNum()
 * @method $this withPageNum($value)
 */
class QueryIcpIntentionList extends Rpc
{
}

/**
 * @method string getBizId()
 * @method $this withBizId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getType()
 * @method $this withType($value)
 * @method string getPageNum()
 * @method $this withPageNum($value)
 */
class QueryIcpProduceList extends Rpc
{
}

/**
 * @method string getTypeList()
 * @method $this withTypeList($value)
 * @method string getType()
 * @method $this withType($value)
 * @method string getPageNum()
 * @method $this withPageNum($value)
 * @method string getSortFiled()
 * @method $this withSortFiled($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getSortOrder()
 * @method $this withSortOrder($value)
 * @method string getStatus()
 * @method $this withStatus($value)
 */
class QueryIntentionList extends Rpc
{
}

/**
 * @method string getArea()
 * @method $this withArea($value)
 * @method string getPageNum()
 * @method $this withPageNum($value)
 * @method string getType()
 * @method $this withType($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getBizId()
 * @method $this withBizId($value)
 * @method string getEnd()
 * @method $this withEnd($value)
 * @method string getBegin()
 * @method $this withBegin($value)
 * @method string getStatus()
 * @method $this withStatus($value)
 */
class QueryTradeIntentionUserList extends Rpc
{
}

/**
 * @method string getNote()
 * @method $this withNote($value)
 * @method string getBizId()
 * @method $this withBizId($value)
 */
class RefuseMaterial extends Rpc
{
}

/**
 * @method string getNote()
 * @method $this withNote($value)
 * @method string getBizId()
 * @method $this withBizId($value)
 */
class RejectIcpIntention extends Rpc
{
}

/**
 * @method string getBizId()
 */
class ReSubmitIcpSolution extends Rpc
{

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
 * @method string getMobile()
 * @method $this withMobile($value)
 * @method string getBizCode()
 * @method $this withBizCode($value)
 */
class SendVcode extends Rpc
{
}

/**
 * @method string getNote()
 * @method $this withNote($value)
 * @method string getType()
 * @method $this withType($value)
 * @method string getActionRequestId()
 * @method $this withActionRequestId($value)
 * @method string getOperatorType()
 * @method $this withOperatorType($value)
 * @method string getBizCode()
 * @method $this withBizCode($value)
 * @method string getBizId()
 * @method $this withBizId($value)
 */
class SubmitCommunicationNote extends Rpc
{
}

/**
 * @method string getData()
 * @method $this withData($value)
 * @method string getVcode()
 * @method $this withVcode($value)
 * @method string getBizCode()
 * @method $this withBizCode($value)
 * @method string getConsultRequestId()
 * @method $this withConsultRequestId($value)
 * @method string getBizSubCode()
 * @method $this withBizSubCode($value)
 */
class SubmitConsultation extends Rpc
{
}

/**
 * @method string getArea()
 * @method string getActionType()
 * @method string getIntentionBizId()
 * @method string getSource()
 * @method string getUserId()
 * @method string getIcpType()
 * @method string getCompanyAddress()
 * @method string getCompanyName()
 * @method string getBizId()
 */
class SubmitIcpSolution extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withArea($value)
    {
        $this->data['Area'] = $value;
        $this->options['form_params']['Area'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withActionType($value)
    {
        $this->data['ActionType'] = $value;
        $this->options['form_params']['ActionType'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withIntentionBizId($value)
    {
        $this->data['IntentionBizId'] = $value;
        $this->options['form_params']['IntentionBizId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSource($value)
    {
        $this->data['Source'] = $value;
        $this->options['form_params']['Source'] = $value;

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
    public function withIcpType($value)
    {
        $this->data['IcpType'] = $value;
        $this->options['form_params']['IcpType'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCompanyAddress($value)
    {
        $this->data['CompanyAddress'] = $value;
        $this->options['form_params']['CompanyAddress'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCompanyName($value)
    {
        $this->data['CompanyName'] = $value;
        $this->options['form_params']['CompanyName'] = $value;

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
 * @method string getUscc()
 * @method $this withUscc($value)
 * @method string getContactName()
 * @method $this withContactName($value)
 * @method string getCompanyName()
 * @method $this withCompanyName($value)
 * @method string getBizId()
 * @method $this withBizId($value)
 * @method string getContactMobile()
 * @method $this withContactMobile($value)
 * @method string getCompanyBizType()
 * @method $this withCompanyBizType($value)
 */
class SubmitPartnerCompanyInformation extends Rpc
{
}

/**
 * @method string getOrgAddress()
 * @method $this withOrgAddress($value)
 * @method string getOrgName()
 * @method $this withOrgName($value)
 * @method string getOrgCode()
 * @method $this withOrgCode($value)
 * @method string getOrgMobile()
 * @method $this withOrgMobile($value)
 */
class UpdateBookkeepingOrg extends Rpc
{
}

/**
 * @method string getExtendMessage()
 * @method $this withExtendMessage($value)
 * @method string getBizId()
 * @method $this withBizId($value)
 */
class UpdateProduce extends Rpc
{
}

/**
 * @method string getSocialCreditCode()
 * @method $this withSocialCreditCode($value)
 * @method string getBusinessLicense()
 * @method $this withBusinessLicense($value)
 * @method string getCorporateIdCard()
 * @method $this withCorporateIdCard($value)
 * @method string getIdCardList()
 * @method $this withIdCardList($value)
 * @method string getCompanyAddress()
 * @method $this withCompanyAddress($value)
 * @method string getCompanyName()
 * @method $this withCompanyName($value)
 * @method string getBizId()
 * @method $this withBizId($value)
 * @method string getCorporateName()
 * @method $this withCorporateName($value)
 */
class UploadIcpBasicMaterial extends Rpc
{
}

/**
 * @method string getBizId()
 * @method $this withBizId($value)
 * @method array getAttribute()
 * @method string getStatus()
 * @method $this withStatus($value)
 */
class UploadUserMaterial extends Rpc
{

    /**
     * @param array $attribute
     *
     * @return $this
     */
	public function withAttribute(array $attribute)
	{
	    $this->data['Attribute'] = $attribute;
		foreach ($attribute as $depth1 => $depth1Value) {
			if(isset($depth1Value['Value'])){
				$this->options['query']['Attribute.' . ($depth1 + 1) . '.Value'] = $depth1Value['Value'];
			}
			if(isset($depth1Value['Key'])){
				$this->options['query']['Attribute.' . ($depth1 + 1) . '.Key'] = $depth1Value['Key'];
			}
		}

		return $this;
    }
}

/**
 * @method string getNote()
 * @method $this withNote($value)
 * @method string getTargetId()
 * @method $this withTargetId($value)
 * @method string getBizId()
 * @method $this withBizId($value)
 */
class WriteCommunicationLog extends Rpc
{
}
