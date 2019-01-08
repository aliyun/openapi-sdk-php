<?php

namespace AlibabaCloud\Dm;

use AlibabaCloud\ApiResolverTrait;

/**
 * Find the specified Api of the Dm based on the method name as the Api name.
 *
 * @package   AlibabaCloud\Dm
 *
 * @method static V20151123\AddIpfilter addIpfilter(array $options = [])
 * @method static V20151123\ApproveMailTemplate approveMailTemplate(array $options = [])
 * @method static V20151123\ApproveReplyMailAddress approveReplyMailAddress(array $options = [])
 * @method static V20151123\ApproveSmsTemplate approveSmsTemplate(array $options = [])
 * @method static V20151123\ApproveTemplate approveTemplate(array $options = [])
 * @method static V20151123\BatchSendMail batchSendMail(array $options = [])
 * @method static V20151123\CheckDomain checkDomain(array $options = [])
 * @method static V20151123\CheckInvalidAddress checkInvalidAddress(array $options = [])
 * @method static V20151123\CheckReplyToMailAddress checkReplyToMailAddress(array $options = [])
 * @method static V20151123\CreateDayu createDayu(array $options = [])
 * @method static V20151123\CreateDomain createDomain(array $options = [])
 * @method static V20151123\CreateMailAddress createMailAddress(array $options = [])
 * @method static V20151123\CreateReceiver createReceiver(array $options = [])
 * @method static V20151123\CreateSign createSign(array $options = [])
 * @method static V20151123\CreateTag createTag(array $options = [])
 * @method static V20151123\CreateTemplate createTemplate(array $options = [])
 * @method static V20151123\DeleteDomain deleteDomain(array $options = [])
 * @method static V20151123\DeleteInvalidAddress deleteInvalidAddress(array $options = [])
 * @method static V20151123\DeleteIpfilterByEdmId deleteIpfilterByEdmId(array $options = [])
 * @method static V20151123\DeleteMailAddress deleteMailAddress(array $options = [])
 * @method static V20151123\DeleteReceiver deleteReceiver(array $options = [])
 * @method static V20151123\DeleteReceiverDetail deleteReceiverDetail(array $options = [])
 * @method static V20151123\DeleteSign deleteSign(array $options = [])
 * @method static V20151123\DeleteTag deleteTag(array $options = [])
 * @method static V20151123\DeleteTemplate deleteTemplate(array $options = [])
 * @method static V20151123\DescAccountSummary descAccountSummary(array $options = [])
 * @method static V20151123\DescAccountSummary2 descAccountSummary2(array $options = [])
 * @method static V20151123\DescDomain descDomain(array $options = [])
 * @method static V20151123\DescTemplate descTemplate(array $options = [])
 * @method static V20151123\EnableAccount enableAccount(array $options = [])
 * @method static V20151123\GetAccountList getAccountList(array $options = [])
 * @method static V20151123\GetIpProtection getIpProtection(array $options = [])
 * @method static V20151123\GetIpfilterList getIpfilterList(array $options = [])
 * @method static V20151123\GetRegionList getRegionList(array $options = [])
 * @method static V20151123\GetSenderAddressList getSenderAddressList(array $options = [])
 * @method static V20151123\GetTrackList getTrackList(array $options = [])
 * @method static V20151123\GetTrackListByMailFromAndTagName getTrackListByMailFromAndTagName(array $options = [])
 * @method static V20151123\MigrateMarket migrateMarket(array $options = [])
 * @method static V20151123\ModifyAccountNotification modifyAccountNotification(array $options = [])
 * @method static V20151123\ModifyMailAddress modifyMailAddress(array $options = [])
 * @method static V20151123\ModifyPWByDomain modifyPWByDomain(array $options = [])
 * @method static V20151123\ModifySenderAddressNotification modifySenderAddressNotification(array $options = [])
 * @method static V20151123\ModifyTag modifyTag(array $options = [])
 * @method static V20151123\ModifyTemplate modifyTemplate(array $options = [])
 * @method static V20151123\QueryDomainByParam queryDomainByParam(array $options = [])
 * @method static V20151123\QueryInvalidAddress queryInvalidAddress(array $options = [])
 * @method static V20151123\QueryMailAddressByParam queryMailAddressByParam(array $options = [])
 * @method static V20151123\QueryReceiverByParam queryReceiverByParam(array $options = [])
 * @method static V20151123\QueryReceiverDetail queryReceiverDetail(array $options = [])
 * @method static V20151123\QuerySignByParam querySignByParam(array $options = [])
 * @method static V20151123\QuerySmsStatistics querySmsStatistics(array $options = [])
 * @method static V20151123\QueryTagByParam queryTagByParam(array $options = [])
 * @method static V20151123\QueryTaskByParam queryTaskByParam(array $options = [])
 * @method static V20151123\QueryTemplateByParam queryTemplateByParam(array $options = [])
 * @method static V20151123\SaveReceiverDetail saveReceiverDetail(array $options = [])
 * @method static V20151123\SendMailUseTemplate sendMailUseTemplate(array $options = [])
 * @method static V20151123\SendTestByTemplate sendTestByTemplate(array $options = [])
 * @method static V20151123\SenderStatisticsByTagNameAndBatchID senderStatisticsByTagNameAndBatchID(array $options = [])
 * @method static V20151123\SenderStatisticsDetailByParam senderStatisticsDetailByParam(array $options = [])
 * @method static V20151123\SetMaxQuotaLevel setMaxQuotaLevel(array $options = [])
 * @method static V20151123\SingleSendMail singleSendMail(array $options = [])
 * @method static V20151123\SingleSendSms singleSendSms(array $options = [])
 * @method static V20151123\UpdateDomainTrackName updateDomainTrackName(array $options = [])
 * @method static V20151123\UpdateIpProtection updateIpProtection(array $options = [])
 */
class DmV20151123
{
    use ApiResolverTrait;

    /**
     * @var string
     */
    protected $namespace = 'AlibabaCloud\\Dm\\V20151123';
}
