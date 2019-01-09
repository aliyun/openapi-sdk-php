<?php

namespace AlibabaCloud\Dm\V20151123;

use AlibabaCloud\ApiResolverTrait;

/**
 * Find the specified Api of the Dm based on the method name as the Api name.
 *
 * @package   AlibabaCloud\Dm\V20151123
 *
 * @method AddIpfilter addIpfilter(array $options = [])
 * @method ApproveMailTemplate approveMailTemplate(array $options = [])
 * @method ApproveReplyMailAddress approveReplyMailAddress(array $options = [])
 * @method ApproveSmsTemplate approveSmsTemplate(array $options = [])
 * @method ApproveTemplate approveTemplate(array $options = [])
 * @method BatchSendMail batchSendMail(array $options = [])
 * @method CheckDomain checkDomain(array $options = [])
 * @method CheckInvalidAddress checkInvalidAddress(array $options = [])
 * @method CheckReplyToMailAddress checkReplyToMailAddress(array $options = [])
 * @method CreateDayu createDayu(array $options = [])
 * @method CreateDomain createDomain(array $options = [])
 * @method CreateMailAddress createMailAddress(array $options = [])
 * @method CreateReceiver createReceiver(array $options = [])
 * @method CreateSign createSign(array $options = [])
 * @method CreateTag createTag(array $options = [])
 * @method CreateTemplate createTemplate(array $options = [])
 * @method DeleteDomain deleteDomain(array $options = [])
 * @method DeleteInvalidAddress deleteInvalidAddress(array $options = [])
 * @method DeleteIpfilterByEdmId deleteIpfilterByEdmId(array $options = [])
 * @method DeleteMailAddress deleteMailAddress(array $options = [])
 * @method DeleteReceiver deleteReceiver(array $options = [])
 * @method DeleteReceiverDetail deleteReceiverDetail(array $options = [])
 * @method DeleteSign deleteSign(array $options = [])
 * @method DeleteTag deleteTag(array $options = [])
 * @method DeleteTemplate deleteTemplate(array $options = [])
 * @method DescAccountSummary descAccountSummary(array $options = [])
 * @method DescAccountSummary2 descAccountSummary2(array $options = [])
 * @method DescDomain descDomain(array $options = [])
 * @method DescTemplate descTemplate(array $options = [])
 * @method EnableAccount enableAccount(array $options = [])
 * @method GetAccountList getAccountList(array $options = [])
 * @method GetIpProtection getIpProtection(array $options = [])
 * @method GetIpfilterList getIpfilterList(array $options = [])
 * @method GetRegionList getRegionList(array $options = [])
 * @method GetSenderAddressList getSenderAddressList(array $options = [])
 * @method GetTrackList getTrackList(array $options = [])
 * @method GetTrackListByMailFromAndTagName getTrackListByMailFromAndTagName(array $options = [])
 * @method MigrateMarket migrateMarket(array $options = [])
 * @method ModifyAccountNotification modifyAccountNotification(array $options = [])
 * @method ModifyMailAddress modifyMailAddress(array $options = [])
 * @method ModifyPWByDomain modifyPWByDomain(array $options = [])
 * @method ModifySenderAddressNotification modifySenderAddressNotification(array $options = [])
 * @method ModifyTag modifyTag(array $options = [])
 * @method ModifyTemplate modifyTemplate(array $options = [])
 * @method QueryDomainByParam queryDomainByParam(array $options = [])
 * @method QueryInvalidAddress queryInvalidAddress(array $options = [])
 * @method QueryMailAddressByParam queryMailAddressByParam(array $options = [])
 * @method QueryReceiverByParam queryReceiverByParam(array $options = [])
 * @method QueryReceiverDetail queryReceiverDetail(array $options = [])
 * @method QuerySignByParam querySignByParam(array $options = [])
 * @method QuerySmsStatistics querySmsStatistics(array $options = [])
 * @method QueryTagByParam queryTagByParam(array $options = [])
 * @method QueryTaskByParam queryTaskByParam(array $options = [])
 * @method QueryTemplateByParam queryTemplateByParam(array $options = [])
 * @method SaveReceiverDetail saveReceiverDetail(array $options = [])
 * @method SendMailUseTemplate sendMailUseTemplate(array $options = [])
 * @method SendTestByTemplate sendTestByTemplate(array $options = [])
 * @method SenderStatisticsByTagNameAndBatchID senderStatisticsByTagNameAndBatchID(array $options = [])
 * @method SenderStatisticsDetailByParam senderStatisticsDetailByParam(array $options = [])
 * @method SetMaxQuotaLevel setMaxQuotaLevel(array $options = [])
 * @method SingleSendMail singleSendMail(array $options = [])
 * @method SingleSendSms singleSendSms(array $options = [])
 * @method UpdateDomainTrackName updateDomainTrackName(array $options = [])
 * @method UpdateIpProtection updateIpProtection(array $options = [])
 */
class DmApiResolver
{
    use ApiResolverTrait;
}
