<?php

namespace AlibabaCloud\Dm\V20151123;

use AlibabaCloud\Client\Resolver\ApiResolver;

/**
 * @method ModifyPWByDomain modifyPWByDomain(array $options = [])
 * @method GetTrackListByMailFromAndTagName getTrackListByMailFromAndTagName(array $options = [])
 * @method DescAccountSummary2 descAccountSummary2(array $options = [])
 * @method MigrateMarket migrateMarket(array $options = [])
 * @method EnableAccount enableAccount(array $options = [])
 * @method CheckInvalidAddress checkInvalidAddress(array $options = [])
 * @method DeleteInvalidAddress deleteInvalidAddress(array $options = [])
 * @method SetMaxQuotaLevel setMaxQuotaLevel(array $options = [])
 * @method DeleteMailAddress deleteMailAddress(array $options = [])
 * @method ModifySenderAddressNotification modifySenderAddressNotification(array $options = [])
 * @method ModifyAccountNotification modifyAccountNotification(array $options = [])
 * @method GetSenderAddressList getSenderAddressList(array $options = [])
 * @method GetRegionList getRegionList(array $options = [])
 * @method GetAccountList getAccountList(array $options = [])
 * @method UpdateDomainTrackName updateDomainTrackName(array $options = [])
 * @method GetTrackList getTrackList(array $options = [])
 * @method DescDomain descDomain(array $options = [])
 * @method UpdateIpProtection updateIpProtection(array $options = [])
 * @method GetIpProtection getIpProtection(array $options = [])
 * @method GetIpfilterList getIpfilterList(array $options = [])
 * @method DeleteIpfilterByEdmId deleteIpfilterByEdmId(array $options = [])
 * @method AddIpfilter addIpfilter(array $options = [])
 * @method ApproveMailTemplate approveMailTemplate(array $options = [])
 * @method ApproveSmsTemplate approveSmsTemplate(array $options = [])
 * @method SingleSendSms singleSendSms(array $options = [])
 * @method QuerySmsStatistics querySmsStatistics(array $options = [])
 * @method QuerySignByParam querySignByParam(array $options = [])
 * @method DeleteSign deleteSign(array $options = [])
 * @method CreateSign createSign(array $options = [])
 * @method CreateDayu createDayu(array $options = [])
 * @method DeleteReceiverDetail deleteReceiverDetail(array $options = [])
 * @method QueryReceiverDetail queryReceiverDetail(array $options = [])
 * @method SenderStatisticsDetailByParam senderStatisticsDetailByParam(array $options = [])
 * @method QueryInvalidAddress queryInvalidAddress(array $options = [])
 * @method DescAccountSummary descAccountSummary(array $options = [])
 * @method ApproveReplyMailAddress approveReplyMailAddress(array $options = [])
 * @method CreateTag createTag(array $options = [])
 * @method CreateReceiver createReceiver(array $options = [])
 * @method CreateMailAddress createMailAddress(array $options = [])
 * @method CreateDomain createDomain(array $options = [])
 * @method CheckReplyToMailAddress checkReplyToMailAddress(array $options = [])
 * @method CheckDomain checkDomain(array $options = [])
 * @method BatchSendMail batchSendMail(array $options = [])
 * @method ApproveTemplate approveTemplate(array $options = [])
 * @method ModifyTag modifyTag(array $options = [])
 * @method ModifyMailAddress modifyMailAddress(array $options = [])
 * @method DescTemplate descTemplate(array $options = [])
 * @method DeleteTemplate deleteTemplate(array $options = [])
 * @method DeleteTag deleteTag(array $options = [])
 * @method DeleteReceiver deleteReceiver(array $options = [])
 * @method DeleteDomain deleteDomain(array $options = [])
 * @method CreateTemplate createTemplate(array $options = [])
 * @method SaveReceiverDetail saveReceiverDetail(array $options = [])
 * @method QueryTemplateByParam queryTemplateByParam(array $options = [])
 * @method QueryTaskByParam queryTaskByParam(array $options = [])
 * @method QueryTagByParam queryTagByParam(array $options = [])
 * @method QueryReceiverByParam queryReceiverByParam(array $options = [])
 * @method QueryMailAddressByParam queryMailAddressByParam(array $options = [])
 * @method QueryDomainByParam queryDomainByParam(array $options = [])
 * @method ModifyTemplate modifyTemplate(array $options = [])
 * @method SingleSendMail singleSendMail(array $options = [])
 * @method SendTestByTemplate sendTestByTemplate(array $options = [])
 * @method SenderStatisticsByTagNameAndBatchID senderStatisticsByTagNameAndBatchID(array $options = [])
 */
class DmApiResolver extends ApiResolver
{
}

class Rpc extends \AlibabaCloud\Client\Resolver\Rpc
{
    /** @var string */
    public $product = 'Dm';

    /** @var string */
    public $version = '2015-11-23';

    /** @var string */
    public $method = 'POST';
}

/**
 * @method string getPassword()
 * @method $this withPassword($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 */
class ModifyPWByDomain extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getOffsetCreateTimeDesc()
 * @method $this withOffsetCreateTimeDesc($value)
 * @method string getOffset()
 * @method $this withOffset($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getTotal()
 * @method $this withTotal($value)
 * @method string getTagName()
 * @method $this withTagName($value)
 * @method string getOffsetCreateTime()
 * @method $this withOffsetCreateTime($value)
 * @method string getAccountName()
 * @method $this withAccountName($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 */
class GetTrackListByMailFromAndTagName extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getFromType()
 * @method $this withFromType($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescAccountSummary2 extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getFromType()
 * @method $this withFromType($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getVersion()
 * @method $this withVersion($value)
 */
class MigrateMarket extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class EnableAccount extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getToAddress()
 * @method $this withToAddress($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class CheckInvalidAddress extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getToAddress()
 * @method $this withToAddress($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DeleteInvalidAddress extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getMaxQuotaLevel()
 * @method $this withMaxQuotaLevel($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class SetMaxQuotaLevel extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getMailAddressId()
 * @method $this withMailAddressId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DeleteMailAddress extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getSenderAddressId()
 * @method $this withSenderAddressId($value)
 * @method string getSenderAddress()
 * @method $this withSenderAddress($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getRegion()
 * @method $this withRegion($value)
 * @method string getStatus()
 * @method $this withStatus($value)
 */
class ModifySenderAddressNotification extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getRegion()
 * @method $this withRegion($value)
 * @method string getStatus()
 * @method $this withStatus($value)
 */
class ModifyAccountNotification extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getTotal()
 * @method $this withTotal($value)
 * @method string getOffset()
 * @method $this withOffset($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getPageNo()
 * @method $this withPageNo($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getNotifyUrl()
 * @method $this withNotifyUrl($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getKeyword()
 * @method $this withKeyword($value)
 */
class GetSenderAddressList extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getTotal()
 * @method $this withTotal($value)
 * @method string getOffsetCreateTimeDesc()
 * @method $this withOffsetCreateTimeDesc($value)
 * @method string getOffset()
 * @method $this withOffset($value)
 * @method string getOffsetCreateTime()
 * @method $this withOffsetCreateTime($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 */
class GetRegionList extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getTotal()
 * @method $this withTotal($value)
 * @method string getOffsetCreateTimeDesc()
 * @method $this withOffsetCreateTimeDesc($value)
 * @method string getOffset()
 * @method $this withOffset($value)
 * @method string getOffsetCreateTime()
 * @method $this withOffsetCreateTime($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 */
class GetAccountList extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getCnameTrackRecord()
 * @method $this withCnameTrackRecord($value)
 * @method string getDomainId()
 * @method $this withDomainId($value)
 */
class UpdateDomainTrackName extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getOffsetCreateTimeDesc()
 * @method $this withOffsetCreateTimeDesc($value)
 * @method string getOffset()
 * @method $this withOffset($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getTotal()
 * @method $this withTotal($value)
 * @method string getOffsetCreateTime()
 * @method $this withOffsetCreateTime($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 */
class GetTrackList extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getDomainId()
 * @method $this withDomainId($value)
 */
class DescDomain extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getIpProtection()
 * @method $this withIpProtection($value)
 */
class UpdateIpProtection extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class GetIpProtection extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class GetIpfilterList extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getFromType()
 * @method $this withFromType($value)
 * @method string getId()
 * @method $this withId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DeleteIpfilterByEdmId extends Rpc
{
}

/**
 * @method string getIpAddress()
 * @method $this withIpAddress($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class AddIpfilter extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getFromType()
 * @method $this withFromType($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getTemplateId()
 * @method $this withTemplateId($value)
 */
class ApproveMailTemplate extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getFromType()
 * @method $this withFromType($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getTemplateId()
 * @method $this withTemplateId($value)
 */
class ApproveSmsTemplate extends Rpc
{
}

/**
 * @method string getRecNum()
 * @method $this withRecNum($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getSignName()
 * @method $this withSignName($value)
 * @method string getParamString()
 * @method $this withParamString($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getTemplateCode()
 * @method $this withTemplateCode($value)
 * @method string getVersion()
 * @method $this withVersion($value)
 */
class SingleSendSms extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getFromType()
 * @method $this withFromType($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class QuerySmsStatistics extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getPageNo()
 * @method $this withPageNo($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getFromType()
 * @method $this withFromType($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getKeyWord()
 * @method $this withKeyWord($value)
 */
class QuerySignByParam extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getFromType()
 * @method $this withFromType($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getSignId()
 * @method $this withSignId($value)
 */
class DeleteSign extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getSignName()
 * @method $this withSignName($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getFileNames()
 * @method $this withFileNames($value)
 * @method string getRemark()
 * @method $this withRemark($value)
 * @method string getSignType()
 * @method $this withSignType($value)
 * @method string getFromType()
 * @method $this withFromType($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class CreateSign extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getAccountType()
 * @method $this withAccountType($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class CreateDayu extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getReceiverId()
 * @method $this withReceiverId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getEmail()
 * @method $this withEmail($value)
 */
class DeleteReceiverDetail extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getReceiverId()
 * @method $this withReceiverId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getNextStart()
 * @method $this withNextStart($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getKeyWord()
 * @method $this withKeyWord($value)
 */
class QueryReceiverDetail extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getToAddress()
 * @method $this withToAddress($value)
 * @method string getLength()
 * @method $this withLength($value)
 * @method string getNextStart()
 * @method $this withNextStart($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getTagName()
 * @method $this withTagName($value)
 * @method string getAccountName()
 * @method $this withAccountName($value)
 * @method string getStatus()
 * @method $this withStatus($value)
 */
class SenderStatisticsDetailByParam extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getLength()
 * @method $this withLength($value)
 * @method string getNextStart()
 * @method $this withNextStart($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getKeyWord()
 * @method $this withKeyWord($value)
 */
class QueryInvalidAddress extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescAccountSummary extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getTicket()
 * @method $this withTicket($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class ApproveReplyMailAddress extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getTagName()
 * @method $this withTagName($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class CreateTag extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getReceiversName()
 * @method $this withReceiversName($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getReceiversAlias()
 * @method $this withReceiversAlias($value)
 * @method string getDesc()
 * @method $this withDesc($value)
 */
class CreateReceiver extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getAccountName()
 * @method $this withAccountName($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getReplyAddress()
 * @method $this withReplyAddress($value)
 * @method string getSendtype()
 * @method $this withSendtype($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class CreateMailAddress extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class CreateDomain extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getMailAddressId()
 * @method $this withMailAddressId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getLang()
 * @method $this withLang($value)
 * @method string getRegion()
 * @method $this withRegion($value)
 */
class CheckReplyToMailAddress extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getDomainId()
 * @method $this withDomainId($value)
 */
class CheckDomain extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getClickTrace()
 * @method $this withClickTrace($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getReplyAddressAlias()
 * @method $this withReplyAddressAlias($value)
 * @method string getTagName()
 * @method $this withTagName($value)
 * @method string getAccountName()
 * @method $this withAccountName($value)
 * @method string getReceiversName()
 * @method $this withReceiversName($value)
 * @method string getReplyAddress()
 * @method $this withReplyAddress($value)
 * @method string getAddressType()
 * @method $this withAddressType($value)
 * @method string getTemplateName()
 * @method $this withTemplateName($value)
 */
class BatchSendMail extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getFromType()
 * @method $this withFromType($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getTemplateId()
 * @method $this withTemplateId($value)
 */
class ApproveTemplate extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getTagName()
 * @method $this withTagName($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getTagId()
 * @method $this withTagId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class ModifyTag extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getPassword()
 * @method $this withPassword($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getReplyAddress()
 * @method $this withReplyAddress($value)
 * @method string getMailAddressId()
 * @method $this withMailAddressId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class ModifyMailAddress extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getFromType()
 * @method $this withFromType($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getTemplateId()
 * @method $this withTemplateId($value)
 */
class DescTemplate extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getFromType()
 * @method $this withFromType($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getTemplateId()
 * @method $this withTemplateId($value)
 */
class DeleteTemplate extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getTagId()
 * @method $this withTagId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DeleteTag extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getReceiverId()
 * @method $this withReceiverId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DeleteReceiver extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getDomainId()
 * @method $this withDomainId($value)
 */
class DeleteDomain extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getSmsType()
 * @method $this withSmsType($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getTemplateText()
 * @method $this withTemplateText($value)
 * @method string getTemplateNickName()
 * @method $this withTemplateNickName($value)
 * @method string getRemark()
 * @method $this withRemark($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getTemplateSubject()
 * @method $this withTemplateSubject($value)
 * @method string getTemplateType()
 * @method $this withTemplateType($value)
 * @method string getTemplateName()
 * @method $this withTemplateName($value)
 * @method string getFromType()
 * @method $this withFromType($value)
 * @method string getSmsContent()
 * @method $this withSmsContent($value)
 */
class CreateTemplate extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getReceiverId()
 * @method $this withReceiverId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getDetail()
 * @method $this withDetail($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class SaveReceiverDetail extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getPageNo()
 * @method $this withPageNo($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getFromType()
 * @method $this withFromType($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getKeyWord()
 * @method $this withKeyWord($value)
 * @method string getStatus()
 * @method $this withStatus($value)
 */
class QueryTemplateByParam extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getPageNo()
 * @method $this withPageNo($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getKeyWord()
 * @method $this withKeyWord($value)
 * @method string getStatus()
 * @method $this withStatus($value)
 */
class QueryTaskByParam extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getPageNo()
 * @method $this withPageNo($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getKeyWord()
 * @method $this withKeyWord($value)
 */
class QueryTagByParam extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getPageNo()
 * @method $this withPageNo($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getKeyWord()
 * @method $this withKeyWord($value)
 * @method string getStatus()
 * @method $this withStatus($value)
 */
class QueryReceiverByParam extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getPageNo()
 * @method $this withPageNo($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getSendtype()
 * @method $this withSendtype($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getKeyWord()
 * @method $this withKeyWord($value)
 */
class QueryMailAddressByParam extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getPageNo()
 * @method $this withPageNo($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getKeyWord()
 * @method $this withKeyWord($value)
 * @method string getStatus()
 * @method $this withStatus($value)
 */
class QueryDomainByParam extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getSmsType()
 * @method $this withSmsType($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getTemplateText()
 * @method $this withTemplateText($value)
 * @method string getTemplateNickName()
 * @method $this withTemplateNickName($value)
 * @method string getRemark()
 * @method $this withRemark($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getTemplateId()
 * @method $this withTemplateId($value)
 * @method string getTemplateSubject()
 * @method $this withTemplateSubject($value)
 * @method string getTemplateName()
 * @method $this withTemplateName($value)
 * @method string getFromType()
 * @method $this withFromType($value)
 * @method string getSmsContent()
 * @method $this withSmsContent($value)
 */
class ModifyTemplate extends Rpc
{
}

/**
 * @method string getHtmlBody()
 * @method $this withHtmlBody($value)
 * @method string getFromAlias()
 * @method $this withFromAlias($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getToAddress()
 * @method $this withToAddress($value)
 * @method string getClickTrace()
 * @method $this withClickTrace($value)
 * @method string getSubject()
 * @method $this withSubject($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getReplyAddressAlias()
 * @method $this withReplyAddressAlias($value)
 * @method string getTagName()
 * @method $this withTagName($value)
 * @method string getAccountName()
 * @method $this withAccountName($value)
 * @method string getReplyToAddress()
 * @method $this withReplyToAddress($value)
 * @method string getReplyAddress()
 * @method $this withReplyAddress($value)
 * @method string getAddressType()
 * @method $this withAddressType($value)
 * @method string getTextBody()
 * @method $this withTextBody($value)
 */
class SingleSendMail extends Rpc
{
}

/**
 * @method string getBirthday()
 * @method $this withBirthday($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getGender()
 * @method $this withGender($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getMobile()
 * @method $this withMobile($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getTemplateId()
 * @method $this withTemplateId($value)
 * @method string getAccountName()
 * @method $this withAccountName($value)
 * @method string getNickName()
 * @method $this withNickName($value)
 * @method string getEmail()
 * @method $this withEmail($value)
 * @method string getUserName()
 * @method $this withUserName($value)
 */
class SendTestByTemplate extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getTagName()
 * @method $this withTagName($value)
 * @method string getAccountName()
 * @method $this withAccountName($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class SenderStatisticsByTagNameAndBatchID extends Rpc
{
}
