<?php

namespace AlibabaCloud\Dm\V20151123;

use AlibabaCloud\ApiResolverTrait;

/**
 * Find the specified Api of the Dm based on the method name as the Api name.
 *
 * @package   AlibabaCloud\Dm\V20151123
 *
 * @method static AddIpfilter addIpfilter(array $options = [])
 * @method static ApproveMailTemplate approveMailTemplate(array $options = [])
 * @method static ApproveReplyMailAddress approveReplyMailAddress(array $options = [])
 * @method static ApproveSmsTemplate approveSmsTemplate(array $options = [])
 * @method static ApproveTemplate approveTemplate(array $options = [])
 * @method static BatchSendMail batchSendMail(array $options = [])
 * @method static CheckDomain checkDomain(array $options = [])
 * @method static CheckInvalidAddress checkInvalidAddress(array $options = [])
 * @method static CheckReplyToMailAddress checkReplyToMailAddress(array $options = [])
 * @method static CreateDayu createDayu(array $options = [])
 * @method static CreateDomain createDomain(array $options = [])
 * @method static CreateMailAddress createMailAddress(array $options = [])
 * @method static CreateReceiver createReceiver(array $options = [])
 * @method static CreateSign createSign(array $options = [])
 * @method static CreateTag createTag(array $options = [])
 * @method static CreateTemplate createTemplate(array $options = [])
 * @method static DeleteDomain deleteDomain(array $options = [])
 * @method static DeleteInvalidAddress deleteInvalidAddress(array $options = [])
 * @method static DeleteIpfilterByEdmId deleteIpfilterByEdmId(array $options = [])
 * @method static DeleteMailAddress deleteMailAddress(array $options = [])
 * @method static DeleteReceiver deleteReceiver(array $options = [])
 * @method static DeleteReceiverDetail deleteReceiverDetail(array $options = [])
 * @method static DeleteSign deleteSign(array $options = [])
 * @method static DeleteTag deleteTag(array $options = [])
 * @method static DeleteTemplate deleteTemplate(array $options = [])
 * @method static DescAccountSummary descAccountSummary(array $options = [])
 * @method static DescAccountSummary2 descAccountSummary2(array $options = [])
 * @method static DescDomain descDomain(array $options = [])
 * @method static DescTemplate descTemplate(array $options = [])
 * @method static DmApiResolver dmApiResolver(array $options = [])
 * @method static EnableAccount enableAccount(array $options = [])
 * @method static GetAccountList getAccountList(array $options = [])
 * @method static GetIpProtection getIpProtection(array $options = [])
 * @method static GetIpfilterList getIpfilterList(array $options = [])
 * @method static GetRegionList getRegionList(array $options = [])
 * @method static GetSenderAddressList getSenderAddressList(array $options = [])
 * @method static GetTrackList getTrackList(array $options = [])
 * @method static GetTrackListByMailFromAndTagName getTrackListByMailFromAndTagName(array $options = [])
 * @method static MigrateMarket migrateMarket(array $options = [])
 * @method static ModifyAccountNotification modifyAccountNotification(array $options = [])
 * @method static ModifyMailAddress modifyMailAddress(array $options = [])
 * @method static ModifyPWByDomain modifyPWByDomain(array $options = [])
 * @method static ModifySenderAddressNotification modifySenderAddressNotification(array $options = [])
 * @method static ModifyTag modifyTag(array $options = [])
 * @method static ModifyTemplate modifyTemplate(array $options = [])
 * @method static QueryDomainByParam queryDomainByParam(array $options = [])
 * @method static QueryInvalidAddress queryInvalidAddress(array $options = [])
 * @method static QueryMailAddressByParam queryMailAddressByParam(array $options = [])
 * @method static QueryReceiverByParam queryReceiverByParam(array $options = [])
 * @method static QueryReceiverDetail queryReceiverDetail(array $options = [])
 * @method static QuerySignByParam querySignByParam(array $options = [])
 * @method static QuerySmsStatistics querySmsStatistics(array $options = [])
 * @method static QueryTagByParam queryTagByParam(array $options = [])
 * @method static QueryTaskByParam queryTaskByParam(array $options = [])
 * @method static QueryTemplateByParam queryTemplateByParam(array $options = [])
 * @method static SaveReceiverDetail saveReceiverDetail(array $options = [])
 * @method static SendMailUseTemplate sendMailUseTemplate(array $options = [])
 * @method static SendTestByTemplate sendTestByTemplate(array $options = [])
 * @method static SenderStatisticsByTagNameAndBatchID senderStatisticsByTagNameAndBatchID(array $options = [])
 * @method static SenderStatisticsDetailByParam senderStatisticsDetailByParam(array $options = [])
 * @method static SetMaxQuotaLevel setMaxQuotaLevel(array $options = [])
 * @method static SingleSendMail singleSendMail(array $options = [])
 * @method static SingleSendSms singleSendSms(array $options = [])
 * @method static UpdateDomainTrackName updateDomainTrackName(array $options = [])
 * @method static UpdateIpProtection updateIpProtection(array $options = [])
 */
class Dm
{
    use ApiResolverTrait;
}
