<?php

namespace AlibabaCloud\DomainIntl;

use AlibabaCloud\ApiResolverTrait;

/**
 * Find the specified Api of the DomainIntl based on the method name as the Api name.
 *
 * @package   AlibabaCloud\DomainIntl
 *
 * @method static V20171218\AcknowledgeTaskResult acknowledgeTaskResult(array $options = [])
 * @method static V20171218\BatchFuzzyMatchDomainSensitiveWord batchFuzzyMatchDomainSensitiveWord(array $options = [])
 * @method static V20171218\CheckDomain checkDomain(array $options = [])
 * @method static V20171218\CheckDomainSunriseClaim checkDomainSunriseClaim(array $options = [])
 * @method static V20171218\CheckTransferInFeasibility checkTransferInFeasibility(array $options = [])
 * @method static V20171218\ConfirmTransferInEmail confirmTransferInEmail(array $options = [])
 * @method static V20171218\DeleteEmailVerification deleteEmailVerification(array $options = [])
 * @method static V20171218\DeleteRegistrantProfile deleteRegistrantProfile(array $options = [])
 * @method static V20171218\EmailVerified emailVerified(array $options = [])
 * @method static V20171218\FuzzyMatchDomainSensitiveWord fuzzyMatchDomainSensitiveWord(array $options = [])
 * @method static V20171218\ListEmailVerification listEmailVerification(array $options = [])
 * @method static V20171218\LookupTmchNotice lookupTmchNotice(array $options = [])
 * @method static V20171218\PollTaskResult pollTaskResult(array $options = [])
 * @method static V20171218\QueryChangeLogList queryChangeLogList(array $options = [])
 * @method static V20171218\QueryContactInfo queryContactInfo(array $options = [])
 * @method static V20171218\QueryDSRecord queryDSRecord(array $options = [])
 * @method static V20171218\QueryDnsHost queryDnsHost(array $options = [])
 * @method static V20171218\QueryDomainByInstanceId queryDomainByInstanceId(array $options = [])
 * @method static V20171218\QueryDomainList queryDomainList(array $options = [])
 * @method static V20171218\QueryEnsAssociation queryEnsAssociation(array $options = [])
 * @method static V20171218\QueryLocalEnsAssociation queryLocalEnsAssociation(array $options = [])
 * @method static V20171218\QueryRegistrantProfiles queryRegistrantProfiles(array $options = [])
 * @method static V20171218\QueryTaskDetailHistory queryTaskDetailHistory(array $options = [])
 * @method static V20171218\QueryTaskDetailList queryTaskDetailList(array $options = [])
 * @method static V20171218\QueryTaskInfoHistory queryTaskInfoHistory(array $options = [])
 * @method static V20171218\QueryTaskList queryTaskList(array $options = [])
 * @method static V20171218\QueryTransferInByInstanceId queryTransferInByInstanceId(array $options = [])
 * @method static V20171218\QueryTransferInList queryTransferInList(array $options = [])
 * @method static V20171218\QueryTransferOutInfo queryTransferOutInfo(array $options = [])
 * @method static V20171218\ResendEmailVerification resendEmailVerification(array $options = [])
 * @method static V20171218\SaveBatchTaskForCreatingOrderActivate saveBatchTaskForCreatingOrderActivate(array $options = [])
 * @method static V20171218\SaveBatchTaskForCreatingOrderRedeem saveBatchTaskForCreatingOrderRedeem(array $options = [])
 * @method static V20171218\SaveBatchTaskForCreatingOrderRenew saveBatchTaskForCreatingOrderRenew(array $options = [])
 * @method static V20171218\SaveBatchTaskForCreatingOrderTransfer saveBatchTaskForCreatingOrderTransfer(array $options = [])
 * @method static V20171218\SaveBatchTaskForDomainNameProxyService saveBatchTaskForDomainNameProxyService(array $options = [])
 * @method static V20171218\SaveBatchTaskForModifyingDomainDns saveBatchTaskForModifyingDomainDns(array $options = [])
 * @method static V20171218\SaveBatchTaskForTransferProhibitionLock saveBatchTaskForTransferProhibitionLock(array $options = [])
 * @method static V20171218\SaveBatchTaskForUpdateProhibitionLock saveBatchTaskForUpdateProhibitionLock(array $options = [])
 * @method static V20171218\SaveBatchTaskForUpdatingContactInfo saveBatchTaskForUpdatingContactInfo(array $options = [])
 * @method static V20171218\SaveBatchTaskForUpdatingContactInfoByNewContact saveBatchTaskForUpdatingContactInfoByNewContact(array $options = [])
 * @method static V20171218\SaveRegistrantProfile saveRegistrantProfile(array $options = [])
 * @method static V20171218\SaveSingleTaskForAddingDSRecord saveSingleTaskForAddingDSRecord(array $options = [])
 * @method static V20171218\SaveSingleTaskForApprovingTransferOut saveSingleTaskForApprovingTransferOut(array $options = [])
 * @method static V20171218\SaveSingleTaskForAssociatingEns saveSingleTaskForAssociatingEns(array $options = [])
 * @method static V20171218\SaveSingleTaskForCancelingTransferIn saveSingleTaskForCancelingTransferIn(array $options = [])
 * @method static V20171218\SaveSingleTaskForCancelingTransferOut saveSingleTaskForCancelingTransferOut(array $options = [])
 * @method static V20171218\SaveSingleTaskForCreatingDnsHost saveSingleTaskForCreatingDnsHost(array $options = [])
 * @method static V20171218\SaveSingleTaskForCreatingOrderActivate saveSingleTaskForCreatingOrderActivate(array $options = [])
 * @method static V20171218\SaveSingleTaskForCreatingOrderRedeem saveSingleTaskForCreatingOrderRedeem(array $options = [])
 * @method static V20171218\SaveSingleTaskForCreatingOrderRenew saveSingleTaskForCreatingOrderRenew(array $options = [])
 * @method static V20171218\SaveSingleTaskForCreatingOrderTransfer saveSingleTaskForCreatingOrderTransfer(array $options = [])
 * @method static V20171218\SaveSingleTaskForDeletingDSRecord saveSingleTaskForDeletingDSRecord(array $options = [])
 * @method static V20171218\SaveSingleTaskForDeletingDnsHost saveSingleTaskForDeletingDnsHost(array $options = [])
 * @method static V20171218\SaveSingleTaskForDisassociatingEns saveSingleTaskForDisassociatingEns(array $options = [])
 * @method static V20171218\SaveSingleTaskForDomainNameProxyService saveSingleTaskForDomainNameProxyService(array $options = [])
 * @method static V20171218\SaveSingleTaskForModifyingDSRecord saveSingleTaskForModifyingDSRecord(array $options = [])
 * @method static V20171218\SaveSingleTaskForModifyingDnsHost saveSingleTaskForModifyingDnsHost(array $options = [])
 * @method static V20171218\SaveSingleTaskForQueryingTransferAuthorizationCode saveSingleTaskForQueryingTransferAuthorizationCode(array $options = [])
 * @method static V20171218\SaveSingleTaskForSynchronizingDSRecord saveSingleTaskForSynchronizingDSRecord(array $options = [])
 * @method static V20171218\SaveSingleTaskForSynchronizingDnsHost saveSingleTaskForSynchronizingDnsHost(array $options = [])
 * @method static V20171218\SaveSingleTaskForTransferProhibitionLock saveSingleTaskForTransferProhibitionLock(array $options = [])
 * @method static V20171218\SaveSingleTaskForUpdateProhibitionLock saveSingleTaskForUpdateProhibitionLock(array $options = [])
 * @method static V20171218\SaveSingleTaskForUpdatingContactInfo saveSingleTaskForUpdatingContactInfo(array $options = [])
 * @method static V20171218\SaveTaskForSubmittingDomainDelete saveTaskForSubmittingDomainDelete(array $options = [])
 * @method static V20171218\SubmitEmailVerification submitEmailVerification(array $options = [])
 * @method static V20171218\TransferInCheckMailToken transferInCheckMailToken(array $options = [])
 * @method static V20171218\TransferInReenterTransferAuthorizationCode transferInReenterTransferAuthorizationCode(array $options = [])
 * @method static V20171218\TransferInRefetchWhoisEmail transferInRefetchWhoisEmail(array $options = [])
 * @method static V20171218\TransferInResendMailToken transferInResendMailToken(array $options = [])
 * @method static V20171218\VerifyContactField verifyContactField(array $options = [])
 * @method static V20171218\VerifyEmail verifyEmail(array $options = [])
 */
class DomainIntlV20171218
{
    use ApiResolverTrait;

    /**
     * @var string
     */
    protected $namespace = 'AlibabaCloud\\DomainIntl\\V20171218';
}
