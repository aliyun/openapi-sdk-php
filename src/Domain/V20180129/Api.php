<?php

namespace AlibabaCloud\Domain\V20180129;

use AlibabaCloud\ApiResolverTrait;
use AlibabaCloud\Rpc;

/**
 * Resolve Api based on the method name.
 *
 * @method QueryDomainByDomainName queryDomainByDomainName(array $options = [])
 * @method SaveSingleTaskForSynchronizingDSRecord saveSingleTaskForSynchronizingDSRecord(array $options = [])
 * @method SaveSingleTaskForDeletingDSRecord saveSingleTaskForDeletingDSRecord(array $options = [])
 * @method SaveSingleTaskForModifyingDSRecord saveSingleTaskForModifyingDSRecord(array $options = [])
 * @method SaveSingleTaskForAddingDSRecord saveSingleTaskForAddingDSRecord(array $options = [])
 * @method QueryDSRecord queryDSRecord(array $options = [])
 * @method BatchFuzzyMatchDomainSensitiveWord batchFuzzyMatchDomainSensitiveWord(array $options = [])
 * @method FuzzyMatchDomainSensitiveWord fuzzyMatchDomainSensitiveWord(array $options = [])
 * @method ScrollDomainList scrollDomainList(array $options = [])
 * @method LookupTmchNotice lookupTmchNotice(array $options = [])
 * @method CheckDomainSunriseClaim checkDomainSunriseClaim(array $options = [])
 * @method QueryDomainAdminDivision queryDomainAdminDivision(array $options = [])
 * @method CancelQualificationVerification cancelQualificationVerification(array $options = [])
 * @method QueryLocalEnsAssociation queryLocalEnsAssociation(array $options = [])
 * @method QueryEnsAssociation queryEnsAssociation(array $options = [])
 * @method SaveSingleTaskForDisassociatingEns saveSingleTaskForDisassociatingEns(array $options = [])
 * @method SaveSingleTaskForAssociatingEns saveSingleTaskForAssociatingEns(array $options = [])
 * @method ResetQualificationVerification resetQualificationVerification(array $options = [])
 * @method QueryFailingReasonListForQualification queryFailingReasonListForQualification(array $options = [])
 * @method QueryQualificationDetail queryQualificationDetail(array $options = [])
 * @method GetQualificationUploadPolicy getQualificationUploadPolicy(array $options = [])
 * @method CheckProcessingServerLockApply checkProcessingServerLockApply(array $options = [])
 * @method CheckMaxYearOfServerLock checkMaxYearOfServerLock(array $options = [])
 * @method QueryServerLock queryServerLock(array $options = [])
 * @method ListServerLock listServerLock(array $options = [])
 * @method QueryEmailVerification queryEmailVerification(array $options = [])
 * @method CancelDomainVerification cancelDomainVerification(array $options = [])
 * @method QueryDomainRealNameVerificationInfo queryDomainRealNameVerificationInfo(array $options = [])
 * @method SaveSingleTaskForDeletingDnsHost saveSingleTaskForDeletingDnsHost(array $options = [])
 * @method SaveDomainGroup saveDomainGroup(array $options = [])
 * @method DeleteDomainGroup deleteDomainGroup(array $options = [])
 * @method UpdateDomainToDomainGroup updateDomainToDomainGroup(array $options = [])
 * @method SaveBatchDomainRemark saveBatchDomainRemark(array $options = [])
 * @method QueryDomainSuffix queryDomainSuffix(array $options = [])
 * @method QueryAdvancedDomainList queryAdvancedDomainList(array $options = [])
 * @method QueryDnsHost queryDnsHost(array $options = [])
 * @method SaveSingleTaskForUpdatingContactInfo saveSingleTaskForUpdatingContactInfo(array $options = [])
 * @method SaveSingleTaskForUpdateProhibitionLock saveSingleTaskForUpdateProhibitionLock(array $options = [])
 * @method SaveSingleTaskForTransferProhibitionLock saveSingleTaskForTransferProhibitionLock(array $options = [])
 * @method SaveSingleTaskForSynchronizingDnsHost saveSingleTaskForSynchronizingDnsHost(array $options = [])
 * @method SaveSingleTaskForModifyingDnsHost saveSingleTaskForModifyingDnsHost(array $options = [])
 * @method SaveSingleTaskForDomainNameProxyService saveSingleTaskForDomainNameProxyService(array $options = [])
 * @method SaveSingleTaskForCreatingDnsHost saveSingleTaskForCreatingDnsHost(array $options = [])
 * @method SaveSingleTaskForCreatingOrderRedeem saveSingleTaskForCreatingOrderRedeem(array $options = [])
 * @method SaveBatchTaskForCreatingOrderRedeem saveBatchTaskForCreatingOrderRedeem(array $options = [])
 * @method VerifyContactField verifyContactField(array $options = [])
 * @method AcknowledgeTaskResult acknowledgeTaskResult(array $options = [])
 * @method PollTaskResult pollTaskResult(array $options = [])
 * @method QueryDomainGroupList queryDomainGroupList(array $options = [])
 * @method SaveSingleTaskForApprovingTransferOut saveSingleTaskForApprovingTransferOut(array $options = [])
 * @method SaveSingleTaskForCancelingTransferOut saveSingleTaskForCancelingTransferOut(array $options = [])
 * @method SaveSingleTaskForQueryingTransferAuthorizationCode saveSingleTaskForQueryingTransferAuthorizationCode(array $options = [])
 * @method QueryTransferOutInfo queryTransferOutInfo(array $options = [])
 * @method QueryRegistrantProfileRealNameVerificationInfo queryRegistrantProfileRealNameVerificationInfo(array $options = [])
 * @method ConfirmTransferInEmail confirmTransferInEmail(array $options = [])
 * @method TransferInRefetchWhoisEmail transferInRefetchWhoisEmail(array $options = [])
 * @method CheckTransferInFeasibility checkTransferInFeasibility(array $options = [])
 * @method QueryTransferInList queryTransferInList(array $options = [])
 * @method QueryTransferInByInstanceId queryTransferInByInstanceId(array $options = [])
 * @method SaveSingleTaskForCancelingTransferIn saveSingleTaskForCancelingTransferIn(array $options = [])
 * @method TransferInReenterTransferAuthorizationCode transferInReenterTransferAuthorizationCode(array $options = [])
 * @method TransferInResendMailToken transferInResendMailToken(array $options = [])
 * @method TransferInCheckMailToken transferInCheckMailToken(array $options = [])
 * @method SaveSingleTaskForCreatingOrderTransfer saveSingleTaskForCreatingOrderTransfer(array $options = [])
 * @method SaveBatchTaskForCreatingOrderTransfer saveBatchTaskForCreatingOrderTransfer(array $options = [])
 * @method SaveTaskForSubmittingDomainRealNameVerificationByIdentityCredential saveTaskForSubmittingDomainRealNameVerificationByIdentityCredential(array $options = [])
 * @method RegistrantProfileRealNameVerification registrantProfileRealNameVerification(array $options = [])
 * @method SaveTaskForSubmittingDomainDelete saveTaskForSubmittingDomainDelete(array $options = [])
 * @method SaveBatchTaskForUpdatingContactInfoByNewContact saveBatchTaskForUpdatingContactInfoByNewContact(array $options = [])
 * @method SaveBatchTaskForUpdatingContactInfoByRegistrantProfileId saveBatchTaskForUpdatingContactInfoByRegistrantProfileId(array $options = [])
 * @method EmailVerified emailVerified(array $options = [])
 * @method ResendEmailVerification resendEmailVerification(array $options = [])
 * @method DeleteEmailVerification deleteEmailVerification(array $options = [])
 * @method SubmitEmailVerification submitEmailVerification(array $options = [])
 * @method VerifyEmail verifyEmail(array $options = [])
 * @method QueryFailReasonForDomainRealNameVerification queryFailReasonForDomainRealNameVerification(array $options = [])
 * @method ListEmailVerification listEmailVerification(array $options = [])
 * @method QueryTaskDetailHistory queryTaskDetailHistory(array $options = [])
 * @method QueryTaskInfoHistory queryTaskInfoHistory(array $options = [])
 * @method QueryFailReasonForRegistrantProfileRealNameVerification queryFailReasonForRegistrantProfileRealNameVerification(array $options = [])
 * @method QueryTaskDetailList queryTaskDetailList(array $options = [])
 * @method CheckDomain checkDomain(array $options = [])
 * @method SaveTaskForUpdatingRegistrantInfoByIdentityCredential saveTaskForUpdatingRegistrantInfoByIdentityCredential(array $options = [])
 * @method QueryTaskList queryTaskList(array $options = [])
 * @method SaveTaskForUpdatingRegistrantInfoByRegistrantProfileID saveTaskForUpdatingRegistrantInfoByRegistrantProfileID(array $options = [])
 * @method SaveBatchTaskForCreatingOrderRenew saveBatchTaskForCreatingOrderRenew(array $options = [])
 * @method SaveTaskForSubmittingDomainRealNameVerificationByRegistrantProfileID saveTaskForSubmittingDomainRealNameVerificationByRegistrantProfileID(array $options = [])
 * @method QueryDomainByInstanceId queryDomainByInstanceId(array $options = [])
 * @method SaveSingleTaskForCreatingOrderRenew saveSingleTaskForCreatingOrderRenew(array $options = [])
 * @method SaveBatchTaskForModifyingDomainDns saveBatchTaskForModifyingDomainDns(array $options = [])
 * @method SaveBatchTaskForDomainNameProxyService saveBatchTaskForDomainNameProxyService(array $options = [])
 * @method SaveBatchTaskForTransferProhibitionLock saveBatchTaskForTransferProhibitionLock(array $options = [])
 * @method QueryDomainList queryDomainList(array $options = [])
 * @method SaveBatchTaskForUpdateProhibitionLock saveBatchTaskForUpdateProhibitionLock(array $options = [])
 * @method QueryContactInfo queryContactInfo(array $options = [])
 * @method QueryChangeLogList queryChangeLogList(array $options = [])
 * @method SaveSingleTaskForCreatingOrderActivate saveSingleTaskForCreatingOrderActivate(array $options = [])
 * @method SaveBatchTaskForCreatingOrderActivate saveBatchTaskForCreatingOrderActivate(array $options = [])
 * @method DeleteRegistrantProfile deleteRegistrantProfile(array $options = [])
 * @method QueryRegistrantProfiles queryRegistrantProfiles(array $options = [])
 * @method SaveRegistrantProfile saveRegistrantProfile(array $options = [])
 */
class DomainApiResolver
{
    use ApiResolverTrait;
}

class V20180129Rpc extends Rpc
{
    /** @var string */
    public $product = 'Domain';

    /** @var string */
    public $version = '2018-01-29';

    /** @var string */
    public $method = 'POST';
}

/**
 * @method string getUserClientIp()
 * @method $this withUserClientIp($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getLang()
 * @method $this withLang($value)
 */
class QueryDomainByDomainName extends V20180129Rpc
{
}

/**
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getUserClientIp()
 * @method $this withUserClientIp($value)
 * @method string getLang()
 * @method $this withLang($value)
 */
class SaveSingleTaskForSynchronizingDSRecord extends V20180129Rpc
{
}

/**
 * @method string getKeyTag()
 * @method $this withKeyTag($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getUserClientIp()
 * @method $this withUserClientIp($value)
 * @method string getLang()
 * @method $this withLang($value)
 */
class SaveSingleTaskForDeletingDSRecord extends V20180129Rpc
{
}

/**
 * @method string getKeyTag()
 * @method $this withKeyTag($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getUserClientIp()
 * @method $this withUserClientIp($value)
 * @method string getDigestType()
 * @method $this withDigestType($value)
 * @method string getDigest()
 * @method $this withDigest($value)
 * @method string getLang()
 * @method $this withLang($value)
 * @method string getAlgorithm()
 * @method $this withAlgorithm($value)
 */
class SaveSingleTaskForModifyingDSRecord extends V20180129Rpc
{
}

/**
 * @method string getKeyTag()
 * @method $this withKeyTag($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getUserClientIp()
 * @method $this withUserClientIp($value)
 * @method string getDigestType()
 * @method $this withDigestType($value)
 * @method string getDigest()
 * @method $this withDigest($value)
 * @method string getLang()
 * @method $this withLang($value)
 * @method string getAlgorithm()
 * @method $this withAlgorithm($value)
 */
class SaveSingleTaskForAddingDSRecord extends V20180129Rpc
{
}

/**
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getUserClientIp()
 * @method $this withUserClientIp($value)
 * @method string getLang()
 * @method $this withLang($value)
 */
class QueryDSRecord extends V20180129Rpc
{
}

/**
 * @method string getUserClientIp()
 * @method $this withUserClientIp($value)
 * @method string getKeyword()
 * @method $this withKeyword($value)
 * @method string getLang()
 * @method $this withLang($value)
 */
class BatchFuzzyMatchDomainSensitiveWord extends V20180129Rpc
{
}

/**
 * @method string getUserClientIp()
 * @method $this withUserClientIp($value)
 * @method string getKeyword()
 * @method $this withKeyword($value)
 * @method string getLang()
 * @method $this withLang($value)
 */
class FuzzyMatchDomainSensitiveWord extends V20180129Rpc
{
}

/**
 * @method string getEndExpirationDate()
 * @method $this withEndExpirationDate($value)
 * @method string getProductDomainType()
 * @method $this withProductDomainType($value)
 * @method string getSuffixs()
 * @method $this withSuffixs($value)
 * @method string getStartExpirationDate()
 * @method $this withStartExpirationDate($value)
 * @method string getDomainStatus()
 * @method $this withDomainStatus($value)
 * @method string getDomainGroupId()
 * @method $this withDomainGroupId($value)
 * @method string getKeyWordSuffix()
 * @method $this withKeyWordSuffix($value)
 * @method string getScrollId()
 * @method $this withScrollId($value)
 * @method string getExcluded()
 * @method $this withExcluded($value)
 * @method string getKeyWordPrefix()
 * @method $this withKeyWordPrefix($value)
 * @method string getStartLength()
 * @method $this withStartLength($value)
 * @method string getTradeType()
 * @method $this withTradeType($value)
 * @method string getExcludedSuffix()
 * @method $this withExcludedSuffix($value)
 * @method string getEndRegistrationDate()
 * @method $this withEndRegistrationDate($value)
 * @method string getForm()
 * @method $this withForm($value)
 * @method string getUserClientIp()
 * @method $this withUserClientIp($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getLang()
 * @method $this withLang($value)
 * @method string getExcludedPrefix()
 * @method $this withExcludedPrefix($value)
 * @method string getKeyWord()
 * @method $this withKeyWord($value)
 * @method string getStartRegistrationDate()
 * @method $this withStartRegistrationDate($value)
 * @method string getEndLength()
 * @method $this withEndLength($value)
 */
class ScrollDomainList extends V20180129Rpc
{
}

/**
 * @method string getClaimKey()
 * @method $this withClaimKey($value)
 * @method string getUserClientIp()
 * @method $this withUserClientIp($value)
 * @method string getLang()
 * @method $this withLang($value)
 */
class LookupTmchNotice extends V20180129Rpc
{
}

/**
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getUserClientIp()
 * @method $this withUserClientIp($value)
 * @method string getLang()
 * @method $this withLang($value)
 */
class CheckDomainSunriseClaim extends V20180129Rpc
{
}

/**
 * @method string getUserClientIp()
 * @method $this withUserClientIp($value)
 * @method string getLang()
 * @method $this withLang($value)
 */
class QueryDomainAdminDivision extends V20180129Rpc
{
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getUserClientIp()
 * @method $this withUserClientIp($value)
 * @method string getLang()
 * @method $this withLang($value)
 * @method string getQualificationType()
 * @method $this withQualificationType($value)
 */
class CancelQualificationVerification extends V20180129Rpc
{
}

/**
 * @method string getUserClientIp()
 * @method $this withUserClientIp($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getLang()
 * @method $this withLang($value)
 */
class QueryLocalEnsAssociation extends V20180129Rpc
{
}

/**
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getUserClientIp()
 * @method $this withUserClientIp($value)
 * @method string getLang()
 * @method $this withLang($value)
 */
class QueryEnsAssociation extends V20180129Rpc
{
}

/**
 * @method string getUserClientIp()
 * @method $this withUserClientIp($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getLang()
 * @method $this withLang($value)
 */
class SaveSingleTaskForDisassociatingEns extends V20180129Rpc
{
}

/**
 * @method string getAddress()
 * @method $this withAddress($value)
 * @method string getUserClientIp()
 * @method $this withUserClientIp($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getLang()
 * @method $this withLang($value)
 */
class SaveSingleTaskForAssociatingEns extends V20180129Rpc
{
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getUserClientIp()
 * @method $this withUserClientIp($value)
 * @method string getLang()
 * @method $this withLang($value)
 */
class ResetQualificationVerification extends V20180129Rpc
{
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getUserClientIp()
 * @method $this withUserClientIp($value)
 * @method string getLimit()
 * @method $this withLimit($value)
 * @method string getLang()
 * @method $this withLang($value)
 * @method string getQualificationType()
 * @method $this withQualificationType($value)
 */
class QueryFailingReasonListForQualification extends V20180129Rpc
{
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getUserClientIp()
 * @method $this withUserClientIp($value)
 * @method string getLang()
 * @method $this withLang($value)
 * @method string getQualificationType()
 * @method $this withQualificationType($value)
 */
class QueryQualificationDetail extends V20180129Rpc
{
}

/**
 * @method string getUserClientIp()
 * @method $this withUserClientIp($value)
 * @method string getLang()
 * @method $this withLang($value)
 */
class GetQualificationUploadPolicy extends V20180129Rpc
{
}

/**
 * @method string getFeePeriod()
 * @method $this withFeePeriod($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getUserClientIp()
 * @method $this withUserClientIp($value)
 * @method string getLang()
 * @method $this withLang($value)
 */
class CheckProcessingServerLockApply extends V20180129Rpc
{
}

/**
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getUserClientIp()
 * @method $this withUserClientIp($value)
 * @method string getCheckAction()
 * @method $this withCheckAction($value)
 * @method string getLang()
 * @method $this withLang($value)
 */
class CheckMaxYearOfServerLock extends V20180129Rpc
{
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getUserClientIp()
 * @method $this withUserClientIp($value)
 * @method string getLang()
 * @method $this withLang($value)
 */
class QueryServerLock extends V20180129Rpc
{
}

/**
 * @method string getLockProductId()
 * @method $this withLockProductId($value)
 * @method string getEndStartDate()
 * @method $this withEndStartDate($value)
 * @method string getServerLockStatus()
 * @method $this withServerLockStatus($value)
 * @method string getStartExpireDate()
 * @method $this withStartExpireDate($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getUserClientIp()
 * @method $this withUserClientIp($value)
 * @method string getEndExpireDate()
 * @method $this withEndExpireDate($value)
 * @method string getPageNum()
 * @method $this withPageNum($value)
 * @method string getLang()
 * @method $this withLang($value)
 * @method string getBeginStartDate()
 * @method $this withBeginStartDate($value)
 */
class ListServerLock extends V20180129Rpc
{
}

/**
 * @method string getUserClientIp()
 * @method $this withUserClientIp($value)
 * @method string getLang()
 * @method $this withLang($value)
 * @method string getEmail()
 * @method $this withEmail($value)
 */
class QueryEmailVerification extends V20180129Rpc
{
}

/**
 * @method string getActionType()
 * @method $this withActionType($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getUserClientIp()
 * @method $this withUserClientIp($value)
 * @method string getLang()
 * @method $this withLang($value)
 */
class CancelDomainVerification extends V20180129Rpc
{
}

/**
 * @method string getFetchImage()
 * @method $this withFetchImage($value)
 * @method string getUserClientIp()
 * @method $this withUserClientIp($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getLang()
 * @method $this withLang($value)
 */
class QueryDomainRealNameVerificationInfo extends V20180129Rpc
{
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getDnsName()
 * @method $this withDnsName($value)
 * @method string getUserClientIp()
 * @method $this withUserClientIp($value)
 * @method string getLang()
 * @method $this withLang($value)
 */
class SaveSingleTaskForDeletingDnsHost extends V20180129Rpc
{
}

/**
 * @method string getUserClientIp()
 * @method $this withUserClientIp($value)
 * @method string getDomainGroupName()
 * @method $this withDomainGroupName($value)
 * @method string getLang()
 * @method $this withLang($value)
 * @method string getDomainGroupId()
 * @method $this withDomainGroupId($value)
 */
class SaveDomainGroup extends V20180129Rpc
{
}

/**
 * @method string getUserClientIp()
 * @method $this withUserClientIp($value)
 * @method string getLang()
 * @method $this withLang($value)
 * @method string getDomainGroupId()
 * @method $this withDomainGroupId($value)
 */
class DeleteDomainGroup extends V20180129Rpc
{
}

/**
 * @method string getDataSource()
 * @method $this withDataSource($value)
 * @method string getUserClientIp()
 * @method $this withUserClientIp($value)
 * @method string getFileToUpload()
 * @method array getDomainName()
 * @method string getReplace()
 * @method $this withReplace($value)
 * @method string getLang()
 * @method $this withLang($value)
 * @method string getDomainGroupId()
 * @method $this withDomainGroupId($value)
 */
class UpdateDomainToDomainGroup extends V20180129Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withFileToUpload($value)
    {
        $this->data['FileToUpload'] = $value;
        $this->options['form_params']['FileToUpload'] = $value;

        return $this;
    }

    /**
     * @param array $domainName
     *
     * @return $this
     */
    public function withDomainName(array $domainName)
    {
        $this->data['DomainName'] = $domainName;
        foreach ($domainName as $i => $iValue) {
            $this->options['query']['DomainName.' . ($i + 1)] = $iValue;
        }

        return $this;
    }
}

/**
 * @method string getInstanceIds()
 * @method $this withInstanceIds($value)
 * @method string getUserClientIp()
 * @method $this withUserClientIp($value)
 * @method string getRemark()
 * @method $this withRemark($value)
 * @method string getLang()
 * @method $this withLang($value)
 */
class SaveBatchDomainRemark extends V20180129Rpc
{
}

/**
 * @method string getUserClientIp()
 * @method $this withUserClientIp($value)
 * @method string getLang()
 * @method $this withLang($value)
 */
class QueryDomainSuffix extends V20180129Rpc
{
}

/**
 * @method string getProductDomainType()
 * @method $this withProductDomainType($value)
 * @method string getPageNum()
 * @method $this withPageNum($value)
 * @method string getExcluded()
 * @method $this withExcluded($value)
 * @method string getStartLength()
 * @method $this withStartLength($value)
 * @method string getExcludedSuffix()
 * @method $this withExcludedSuffix($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getLang()
 * @method $this withLang($value)
 * @method string getExcludedPrefix()
 * @method $this withExcludedPrefix($value)
 * @method string getKeyWord()
 * @method $this withKeyWord($value)
 * @method string getProductDomainTypeSort()
 * @method $this withProductDomainTypeSort($value)
 * @method string getEndExpirationDate()
 * @method $this withEndExpirationDate($value)
 * @method string getSuffixs()
 * @method $this withSuffixs($value)
 * @method string getDomainNameSort()
 * @method $this withDomainNameSort($value)
 * @method string getExpirationDateSort()
 * @method $this withExpirationDateSort($value)
 * @method string getStartExpirationDate()
 * @method $this withStartExpirationDate($value)
 * @method string getDomainStatus()
 * @method $this withDomainStatus($value)
 * @method string getDomainGroupId()
 * @method $this withDomainGroupId($value)
 * @method string getKeyWordSuffix()
 * @method $this withKeyWordSuffix($value)
 * @method string getKeyWordPrefix()
 * @method $this withKeyWordPrefix($value)
 * @method string getTradeType()
 * @method $this withTradeType($value)
 * @method string getEndRegistrationDate()
 * @method $this withEndRegistrationDate($value)
 * @method string getForm()
 * @method $this withForm($value)
 * @method string getUserClientIp()
 * @method $this withUserClientIp($value)
 * @method string getRegistrationDateSort()
 * @method $this withRegistrationDateSort($value)
 * @method string getStartRegistrationDate()
 * @method $this withStartRegistrationDate($value)
 * @method string getEndLength()
 * @method $this withEndLength($value)
 */
class QueryAdvancedDomainList extends V20180129Rpc
{
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getUserClientIp()
 * @method $this withUserClientIp($value)
 * @method string getLang()
 * @method $this withLang($value)
 */
class QueryDnsHost extends V20180129Rpc
{
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getContactType()
 * @method $this withContactType($value)
 * @method string getUserClientIp()
 * @method $this withUserClientIp($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getRegistrantProfileId()
 * @method $this withRegistrantProfileId($value)
 * @method string getAddTransferLock()
 * @method $this withAddTransferLock($value)
 * @method string getLang()
 * @method $this withLang($value)
 */
class SaveSingleTaskForUpdatingContactInfo extends V20180129Rpc
{
}

/**
 * @method string getUserClientIp()
 * @method $this withUserClientIp($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getLang()
 * @method $this withLang($value)
 * @method string getStatus()
 * @method $this withStatus($value)
 */
class SaveSingleTaskForUpdateProhibitionLock extends V20180129Rpc
{
}

/**
 * @method string getUserClientIp()
 * @method $this withUserClientIp($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getLang()
 * @method $this withLang($value)
 * @method string getStatus()
 * @method $this withStatus($value)
 */
class SaveSingleTaskForTransferProhibitionLock extends V20180129Rpc
{
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getUserClientIp()
 * @method $this withUserClientIp($value)
 * @method string getLang()
 * @method $this withLang($value)
 */
class SaveSingleTaskForSynchronizingDnsHost extends V20180129Rpc
{
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method array getIp()
 * @method string getDnsName()
 * @method $this withDnsName($value)
 * @method string getUserClientIp()
 * @method $this withUserClientIp($value)
 * @method string getLang()
 * @method $this withLang($value)
 */
class SaveSingleTaskForModifyingDnsHost extends V20180129Rpc
{

    /**
     * @param array $ip
     *
     * @return $this
     */
    public function withIp(array $ip)
    {
        $this->data['Ip'] = $ip;
        foreach ($ip as $i => $iValue) {
            $this->options['query']['Ip.' . ($i + 1)] = $iValue;
        }

        return $this;
    }
}

/**
 * @method string getUserClientIp()
 * @method $this withUserClientIp($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getLang()
 * @method $this withLang($value)
 * @method string getStatus()
 * @method $this withStatus($value)
 */
class SaveSingleTaskForDomainNameProxyService extends V20180129Rpc
{
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method array getIp()
 * @method string getDnsName()
 * @method $this withDnsName($value)
 * @method string getUserClientIp()
 * @method $this withUserClientIp($value)
 * @method string getLang()
 * @method $this withLang($value)
 */
class SaveSingleTaskForCreatingDnsHost extends V20180129Rpc
{

    /**
     * @param array $ip
     *
     * @return $this
     */
    public function withIp(array $ip)
    {
        $this->data['Ip'] = $ip;
        foreach ($ip as $i => $iValue) {
            $this->options['query']['Ip.' . ($i + 1)] = $iValue;
        }

        return $this;
    }
}

/**
 * @method string getPromotionNo()
 * @method $this withPromotionNo($value)
 * @method string getCurrentExpirationDate()
 * @method $this withCurrentExpirationDate($value)
 * @method string getUserClientIp()
 * @method $this withUserClientIp($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getCouponNo()
 * @method $this withCouponNo($value)
 * @method string getUseCoupon()
 * @method $this withUseCoupon($value)
 * @method string getLang()
 * @method $this withLang($value)
 * @method string getUsePromotion()
 * @method $this withUsePromotion($value)
 */
class SaveSingleTaskForCreatingOrderRedeem extends V20180129Rpc
{
}

/**
 * @method string getPromotionNo()
 * @method $this withPromotionNo($value)
 * @method array getOrderRedeemParam()
 * @method string getUserClientIp()
 * @method $this withUserClientIp($value)
 * @method string getCouponNo()
 * @method $this withCouponNo($value)
 * @method string getUseCoupon()
 * @method $this withUseCoupon($value)
 * @method string getLang()
 * @method $this withLang($value)
 * @method string getUsePromotion()
 * @method $this withUsePromotion($value)
 */
class SaveBatchTaskForCreatingOrderRedeem extends V20180129Rpc
{

    /**
     * @param array $orderRedeemParam
     *
     * @return $this
     */
    public function withOrderRedeemParam(array $orderRedeemParam)
    {
        $this->data['OrderRedeemParam'] = $orderRedeemParam;
        foreach ($orderRedeemParam as $depth1 => $depth1Value) {
            $this->options['query']['OrderRedeemParam.' . ($depth1 + 1) . '.CurrentExpirationDate'] = $depth1Value['CurrentExpirationDate'];
            $this->options['query']['OrderRedeemParam.' . ($depth1 + 1) . '.DomainName'] = $depth1Value['DomainName'];
        }

        return $this;
    }
}

/**
 * @method string getCountry()
 * @method $this withCountry($value)
 * @method string getAddress()
 * @method $this withAddress($value)
 * @method string getTelArea()
 * @method $this withTelArea($value)
 * @method string getCity()
 * @method $this withCity($value)
 * @method string getZhAddress()
 * @method $this withZhAddress($value)
 * @method string getRegistrantType()
 * @method $this withRegistrantType($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getTelephone()
 * @method $this withTelephone($value)
 * @method string getZhCity()
 * @method $this withZhCity($value)
 * @method string getZhProvince()
 * @method $this withZhProvince($value)
 * @method string getRegistrantOrganization()
 * @method $this withRegistrantOrganization($value)
 * @method string getTelExt()
 * @method $this withTelExt($value)
 * @method string getProvince()
 * @method $this withProvince($value)
 * @method string getZhRegistrantName()
 * @method $this withZhRegistrantName($value)
 * @method string getPostalCode()
 * @method $this withPostalCode($value)
 * @method string getUserClientIp()
 * @method $this withUserClientIp($value)
 * @method string getLang()
 * @method $this withLang($value)
 * @method string getEmail()
 * @method $this withEmail($value)
 * @method string getRegistrantName()
 * @method $this withRegistrantName($value)
 * @method string getZhRegistrantOrganization()
 * @method $this withZhRegistrantOrganization($value)
 */
class VerifyContactField extends V20180129Rpc
{
}

/**
 * @method array getTaskDetailNo()
 * @method string getUserClientIp()
 * @method $this withUserClientIp($value)
 * @method string getLang()
 * @method $this withLang($value)
 */
class AcknowledgeTaskResult extends V20180129Rpc
{

    /**
     * @param array $taskDetailNo
     *
     * @return $this
     */
    public function withTaskDetailNo(array $taskDetailNo)
    {
        $this->data['TaskDetailNo'] = $taskDetailNo;
        foreach ($taskDetailNo as $i => $iValue) {
            $this->options['query']['TaskDetailNo.' . ($i + 1)] = $iValue;
        }

        return $this;
    }
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getUserClientIp()
 * @method $this withUserClientIp($value)
 * @method string getTaskNo()
 * @method $this withTaskNo($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getLang()
 * @method $this withLang($value)
 * @method string getPageNum()
 * @method $this withPageNum($value)
 * @method string getTaskResultStatus()
 * @method $this withTaskResultStatus($value)
 */
class PollTaskResult extends V20180129Rpc
{
}

/**
 * @method string getUserClientIp()
 * @method $this withUserClientIp($value)
 * @method string getDomainGroupName()
 * @method $this withDomainGroupName($value)
 * @method string getLang()
 * @method $this withLang($value)
 * @method string getShowDeletingGroup()
 * @method $this withShowDeletingGroup($value)
 */
class QueryDomainGroupList extends V20180129Rpc
{
}

/**
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getUserClientIp()
 * @method $this withUserClientIp($value)
 * @method string getLang()
 * @method $this withLang($value)
 */
class SaveSingleTaskForApprovingTransferOut extends V20180129Rpc
{
}

/**
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getUserClientIp()
 * @method $this withUserClientIp($value)
 * @method string getLang()
 * @method $this withLang($value)
 */
class SaveSingleTaskForCancelingTransferOut extends V20180129Rpc
{
}

/**
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getUserClientIp()
 * @method $this withUserClientIp($value)
 * @method string getLang()
 * @method $this withLang($value)
 */
class SaveSingleTaskForQueryingTransferAuthorizationCode extends V20180129Rpc
{
}

/**
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getUserClientIp()
 * @method $this withUserClientIp($value)
 * @method string getLang()
 * @method $this withLang($value)
 */
class QueryTransferOutInfo extends V20180129Rpc
{
}

/**
 * @method string getFetchImage()
 * @method $this withFetchImage($value)
 * @method string getUserClientIp()
 * @method $this withUserClientIp($value)
 * @method string getRegistrantProfileId()
 * @method $this withRegistrantProfileId($value)
 * @method string getLang()
 * @method $this withLang($value)
 */
class QueryRegistrantProfileRealNameVerificationInfo extends V20180129Rpc
{
}

/**
 * @method string getUserClientIp()
 * @method $this withUserClientIp($value)
 * @method array getDomainName()
 * @method string getLang()
 * @method $this withLang($value)
 * @method string getEmail()
 * @method $this withEmail($value)
 */
class ConfirmTransferInEmail extends V20180129Rpc
{

    /**
     * @param array $domainName
     *
     * @return $this
     */
    public function withDomainName(array $domainName)
    {
        $this->data['DomainName'] = $domainName;
        foreach ($domainName as $i => $iValue) {
            $this->options['query']['DomainName.' . ($i + 1)] = $iValue;
        }

        return $this;
    }
}

/**
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getUserClientIp()
 * @method $this withUserClientIp($value)
 * @method string getLang()
 * @method $this withLang($value)
 */
class TransferInRefetchWhoisEmail extends V20180129Rpc
{
}

/**
 * @method string getTransferAuthorizationCode()
 * @method $this withTransferAuthorizationCode($value)
 * @method string getUserClientIp()
 * @method $this withUserClientIp($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getLang()
 * @method $this withLang($value)
 */
class CheckTransferInFeasibility extends V20180129Rpc
{
}

/**
 * @method string getSubmissionStartDate()
 * @method $this withSubmissionStartDate($value)
 * @method string getUserClientIp()
 * @method $this withUserClientIp($value)
 * @method string getSubmissionEndDate()
 * @method $this withSubmissionEndDate($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getSimpleTransferInStatus()
 * @method $this withSimpleTransferInStatus($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getLang()
 * @method $this withLang($value)
 * @method string getPageNum()
 * @method $this withPageNum($value)
 */
class QueryTransferInList extends V20180129Rpc
{
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getUserClientIp()
 * @method $this withUserClientIp($value)
 * @method string getLang()
 * @method $this withLang($value)
 */
class QueryTransferInByInstanceId extends V20180129Rpc
{
}

/**
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getUserClientIp()
 * @method $this withUserClientIp($value)
 * @method string getLang()
 * @method $this withLang($value)
 */
class SaveSingleTaskForCancelingTransferIn extends V20180129Rpc
{
}

/**
 * @method string getTransferAuthorizationCode()
 * @method $this withTransferAuthorizationCode($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getUserClientIp()
 * @method $this withUserClientIp($value)
 * @method string getLang()
 * @method $this withLang($value)
 */
class TransferInReenterTransferAuthorizationCode extends V20180129Rpc
{
}

/**
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getUserClientIp()
 * @method $this withUserClientIp($value)
 * @method string getLang()
 * @method $this withLang($value)
 */
class TransferInResendMailToken extends V20180129Rpc
{
}

/**
 * @method string getUserClientIp()
 * @method $this withUserClientIp($value)
 * @method string getLang()
 * @method $this withLang($value)
 * @method string getToken()
 * @method $this withToken($value)
 */
class TransferInCheckMailToken extends V20180129Rpc
{
}

/**
 * @method string getPermitPremiumTransfer()
 * @method $this withPermitPremiumTransfer($value)
 * @method string getPromotionNo()
 * @method $this withPromotionNo($value)
 * @method string getAuthorizationCode()
 * @method $this withAuthorizationCode($value)
 * @method string getUserClientIp()
 * @method $this withUserClientIp($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getRegistrantProfileId()
 * @method $this withRegistrantProfileId($value)
 * @method string getCouponNo()
 * @method $this withCouponNo($value)
 * @method string getUseCoupon()
 * @method $this withUseCoupon($value)
 * @method string getLang()
 * @method $this withLang($value)
 * @method string getUsePromotion()
 * @method $this withUsePromotion($value)
 */
class SaveSingleTaskForCreatingOrderTransfer extends V20180129Rpc
{
}

/**
 * @method string getPromotionNo()
 * @method $this withPromotionNo($value)
 * @method array getOrderTransferParam()
 * @method string getUserClientIp()
 * @method $this withUserClientIp($value)
 * @method string getCouponNo()
 * @method $this withCouponNo($value)
 * @method string getUseCoupon()
 * @method $this withUseCoupon($value)
 * @method string getLang()
 * @method $this withLang($value)
 * @method string getUsePromotion()
 * @method $this withUsePromotion($value)
 */
class SaveBatchTaskForCreatingOrderTransfer extends V20180129Rpc
{

    /**
     * @param array $orderTransferParam
     *
     * @return $this
     */
    public function withOrderTransferParam(array $orderTransferParam)
    {
        $this->data['OrderTransferParam'] = $orderTransferParam;
        foreach ($orderTransferParam as $depth1 => $depth1Value) {
            $this->options['query']['OrderTransferParam.' . ($depth1 + 1) . '.PermitPremiumTransfer'] = $depth1Value['PermitPremiumTransfer'];
            $this->options['query']['OrderTransferParam.' . ($depth1 + 1) . '.AuthorizationCode'] = $depth1Value['AuthorizationCode'];
            $this->options['query']['OrderTransferParam.' . ($depth1 + 1) . '.DomainName'] = $depth1Value['DomainName'];
            $this->options['query']['OrderTransferParam.' . ($depth1 + 1) . '.RegistrantProfileId'] = $depth1Value['RegistrantProfileId'];
        }

        return $this;
    }
}

/**
 * @method string getIdentityCredentialType()
 * @method $this withIdentityCredentialType($value)
 * @method string getUserClientIp()
 * @method $this withUserClientIp($value)
 * @method string getIdentityCredential()
 * @method array getDomainName()
 * @method string getLang()
 * @method $this withLang($value)
 * @method string getIdentityCredentialNo()
 * @method $this withIdentityCredentialNo($value)
 */
class SaveTaskForSubmittingDomainRealNameVerificationByIdentityCredential extends V20180129Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withIdentityCredential($value)
    {
        $this->data['IdentityCredential'] = $value;
        $this->options['form_params']['IdentityCredential'] = $value;

        return $this;
    }

    /**
     * @param array $domainName
     *
     * @return $this
     */
    public function withDomainName(array $domainName)
    {
        $this->data['DomainName'] = $domainName;
        foreach ($domainName as $i => $iValue) {
            $this->options['query']['DomainName.' . ($i + 1)] = $iValue;
        }

        return $this;
    }
}

/**
 * @method string getIdentityCredentialType()
 * @method $this withIdentityCredentialType($value)
 * @method string getUserClientIp()
 * @method $this withUserClientIp($value)
 * @method string getRegistrantProfileID()
 * @method $this withRegistrantProfileID($value)
 * @method string getIdentityCredential()
 * @method string getLang()
 * @method $this withLang($value)
 * @method string getIdentityCredentialNo()
 * @method $this withIdentityCredentialNo($value)
 */
class RegistrantProfileRealNameVerification extends V20180129Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withIdentityCredential($value)
    {
        $this->data['IdentityCredential'] = $value;
        $this->options['form_params']['IdentityCredential'] = $value;

        return $this;
    }
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getUserClientIp()
 * @method $this withUserClientIp($value)
 * @method string getLang()
 * @method $this withLang($value)
 */
class SaveTaskForSubmittingDomainDelete extends V20180129Rpc
{
}

/**
 * @method string getCountry()
 * @method $this withCountry($value)
 * @method string getAddress()
 * @method $this withAddress($value)
 * @method string getTelArea()
 * @method $this withTelArea($value)
 * @method string getContactType()
 * @method $this withContactType($value)
 * @method string getCity()
 * @method $this withCity($value)
 * @method string getZhAddress()
 * @method $this withZhAddress($value)
 * @method string getRegistrantType()
 * @method $this withRegistrantType($value)
 * @method array getDomainName()
 * @method string getTelephone()
 * @method $this withTelephone($value)
 * @method string getTransferOutProhibited()
 * @method $this withTransferOutProhibited($value)
 * @method string getZhCity()
 * @method $this withZhCity($value)
 * @method string getZhProvince()
 * @method $this withZhProvince($value)
 * @method string getRegistrantOrganization()
 * @method $this withRegistrantOrganization($value)
 * @method string getTelExt()
 * @method $this withTelExt($value)
 * @method string getProvince()
 * @method $this withProvince($value)
 * @method string getZhRegistrantName()
 * @method $this withZhRegistrantName($value)
 * @method string getPostalCode()
 * @method $this withPostalCode($value)
 * @method string getUserClientIp()
 * @method $this withUserClientIp($value)
 * @method string getLang()
 * @method $this withLang($value)
 * @method string getEmail()
 * @method $this withEmail($value)
 * @method string getRegistrantName()
 * @method $this withRegistrantName($value)
 * @method string getZhRegistrantOrganization()
 * @method $this withZhRegistrantOrganization($value)
 */
class SaveBatchTaskForUpdatingContactInfoByNewContact extends V20180129Rpc
{

    /**
     * @param array $domainName
     *
     * @return $this
     */
    public function withDomainName(array $domainName)
    {
        $this->data['DomainName'] = $domainName;
        foreach ($domainName as $i => $iValue) {
            $this->options['query']['DomainName.' . ($i + 1)] = $iValue;
        }

        return $this;
    }
}

/**
 * @method string getContactType()
 * @method $this withContactType($value)
 * @method string getUserClientIp()
 * @method $this withUserClientIp($value)
 * @method string getRegistrantProfileId()
 * @method $this withRegistrantProfileId($value)
 * @method array getDomainName()
 * @method string getTransferOutProhibited()
 * @method $this withTransferOutProhibited($value)
 * @method string getLang()
 * @method $this withLang($value)
 */
class SaveBatchTaskForUpdatingContactInfoByRegistrantProfileId extends V20180129Rpc
{

    /**
     * @param array $domainName
     *
     * @return $this
     */
    public function withDomainName(array $domainName)
    {
        $this->data['DomainName'] = $domainName;
        foreach ($domainName as $i => $iValue) {
            $this->options['query']['DomainName.' . ($i + 1)] = $iValue;
        }

        return $this;
    }
}

/**
 * @method string getUserClientIp()
 * @method $this withUserClientIp($value)
 * @method string getLang()
 * @method $this withLang($value)
 * @method string getEmail()
 * @method $this withEmail($value)
 */
class EmailVerified extends V20180129Rpc
{
}

/**
 * @method string getUserClientIp()
 * @method $this withUserClientIp($value)
 * @method string getLang()
 * @method $this withLang($value)
 * @method string getEmail()
 * @method $this withEmail($value)
 */
class ResendEmailVerification extends V20180129Rpc
{
}

/**
 * @method string getUserClientIp()
 * @method $this withUserClientIp($value)
 * @method string getLang()
 * @method $this withLang($value)
 * @method string getEmail()
 * @method $this withEmail($value)
 */
class DeleteEmailVerification extends V20180129Rpc
{
}

/**
 * @method string getSendIfExist()
 * @method $this withSendIfExist($value)
 * @method string getUserClientIp()
 * @method $this withUserClientIp($value)
 * @method string getLang()
 * @method $this withLang($value)
 * @method string getEmail()
 * @method $this withEmail($value)
 */
class SubmitEmailVerification extends V20180129Rpc
{
}

/**
 * @method string getUserClientIp()
 * @method $this withUserClientIp($value)
 * @method string getLang()
 * @method $this withLang($value)
 * @method string getToken()
 * @method $this withToken($value)
 */
class VerifyEmail extends V20180129Rpc
{
}

/**
 * @method string getRealNameVerificationAction()
 * @method $this withRealNameVerificationAction($value)
 * @method string getUserClientIp()
 * @method $this withUserClientIp($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getLang()
 * @method $this withLang($value)
 */
class QueryFailReasonForDomainRealNameVerification extends V20180129Rpc
{
}

/**
 * @method string getBeginCreateTime()
 * @method $this withBeginCreateTime($value)
 * @method string getEndCreateTime()
 * @method $this withEndCreateTime($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getUserClientIp()
 * @method $this withUserClientIp($value)
 * @method string getLang()
 * @method $this withLang($value)
 * @method string getPageNum()
 * @method $this withPageNum($value)
 * @method string getEmail()
 * @method $this withEmail($value)
 * @method string getVerificationStatus()
 * @method $this withVerificationStatus($value)
 */
class ListEmailVerification extends V20180129Rpc
{
}

/**
 * @method string getTaskStatus()
 * @method $this withTaskStatus($value)
 * @method string getUserClientIp()
 * @method $this withUserClientIp($value)
 * @method string getTaskNo()
 * @method $this withTaskNo($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getTaskDetailNoCursor()
 * @method $this withTaskDetailNoCursor($value)
 * @method string getLang()
 * @method $this withLang($value)
 * @method string getDomainNameCursor()
 * @method $this withDomainNameCursor($value)
 */
class QueryTaskDetailHistory extends V20180129Rpc
{
}

/**
 * @method string getBeginCreateTime()
 * @method $this withBeginCreateTime($value)
 * @method string getEndCreateTime()
 * @method $this withEndCreateTime($value)
 * @method string getTaskNoCursor()
 * @method $this withTaskNoCursor($value)
 * @method string getUserClientIp()
 * @method $this withUserClientIp($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getLang()
 * @method $this withLang($value)
 * @method string getCreateTimeCursor()
 * @method $this withCreateTimeCursor($value)
 */
class QueryTaskInfoHistory extends V20180129Rpc
{
}

/**
 * @method string getUserClientIp()
 * @method $this withUserClientIp($value)
 * @method string getRegistrantProfileID()
 * @method $this withRegistrantProfileID($value)
 * @method string getLang()
 * @method $this withLang($value)
 */
class QueryFailReasonForRegistrantProfileRealNameVerification extends V20180129Rpc
{
}

/**
 * @method string getTaskStatus()
 * @method $this withTaskStatus($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getTaskNo()
 * @method $this withTaskNo($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getUserClientIp()
 * @method $this withUserClientIp($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getLang()
 * @method $this withLang($value)
 * @method string getPageNum()
 * @method $this withPageNum($value)
 */
class QueryTaskDetailList extends V20180129Rpc
{
}

/**
 * @method string getFeeCurrency()
 * @method $this withFeeCurrency($value)
 * @method string getFeePeriod()
 * @method $this withFeePeriod($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getFeeCommand()
 * @method $this withFeeCommand($value)
 * @method string getLang()
 * @method $this withLang($value)
 */
class CheckDomain extends V20180129Rpc
{
}

/**
 * @method string getCountry()
 * @method $this withCountry($value)
 * @method string getIdentityCredentialType()
 * @method $this withIdentityCredentialType($value)
 * @method string getAddress()
 * @method $this withAddress($value)
 * @method string getTelArea()
 * @method $this withTelArea($value)
 * @method string getCity()
 * @method $this withCity($value)
 * @method string getZhAddress()
 * @method $this withZhAddress($value)
 * @method string getRegistrantType()
 * @method $this withRegistrantType($value)
 * @method array getDomainName()
 * @method string getIdentityCredential()
 * @method string getTelephone()
 * @method $this withTelephone($value)
 * @method string getTransferOutProhibited()
 * @method $this withTransferOutProhibited($value)
 * @method string getZhCity()
 * @method $this withZhCity($value)
 * @method string getZhProvince()
 * @method $this withZhProvince($value)
 * @method string getRegistrantOrganization()
 * @method $this withRegistrantOrganization($value)
 * @method string getTelExt()
 * @method $this withTelExt($value)
 * @method string getProvince()
 * @method $this withProvince($value)
 * @method string getZhRegistrantName()
 * @method $this withZhRegistrantName($value)
 * @method string getPostalCode()
 * @method $this withPostalCode($value)
 * @method string getUserClientIp()
 * @method $this withUserClientIp($value)
 * @method string getLang()
 * @method $this withLang($value)
 * @method string getIdentityCredentialNo()
 * @method $this withIdentityCredentialNo($value)
 * @method string getEmail()
 * @method $this withEmail($value)
 * @method string getRegistrantName()
 * @method $this withRegistrantName($value)
 * @method string getZhRegistrantOrganization()
 * @method $this withZhRegistrantOrganization($value)
 */
class SaveTaskForUpdatingRegistrantInfoByIdentityCredential extends V20180129Rpc
{

    /**
     * @param array $domainName
     *
     * @return $this
     */
    public function withDomainName(array $domainName)
    {
        $this->data['DomainName'] = $domainName;
        foreach ($domainName as $i => $iValue) {
            $this->options['query']['DomainName.' . ($i + 1)] = $iValue;
        }

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withIdentityCredential($value)
    {
        $this->data['IdentityCredential'] = $value;
        $this->options['form_params']['IdentityCredential'] = $value;

        return $this;
    }
}

/**
 * @method string getBeginCreateTime()
 * @method $this withBeginCreateTime($value)
 * @method string getEndCreateTime()
 * @method $this withEndCreateTime($value)
 * @method string getUserClientIp()
 * @method $this withUserClientIp($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getLang()
 * @method $this withLang($value)
 * @method string getPageNum()
 * @method $this withPageNum($value)
 */
class QueryTaskList extends V20180129Rpc
{
}

/**
 * @method string getUserClientIp()
 * @method $this withUserClientIp($value)
 * @method string getRegistrantProfileId()
 * @method $this withRegistrantProfileId($value)
 * @method array getDomainName()
 * @method string getTransferOutProhibited()
 * @method $this withTransferOutProhibited($value)
 * @method string getLang()
 * @method $this withLang($value)
 */
class SaveTaskForUpdatingRegistrantInfoByRegistrantProfileID extends V20180129Rpc
{

    /**
     * @param array $domainName
     *
     * @return $this
     */
    public function withDomainName(array $domainName)
    {
        $this->data['DomainName'] = $domainName;
        foreach ($domainName as $i => $iValue) {
            $this->options['query']['DomainName.' . ($i + 1)] = $iValue;
        }

        return $this;
    }
}

/**
 * @method string getPromotionNo()
 * @method $this withPromotionNo($value)
 * @method string getUserClientIp()
 * @method $this withUserClientIp($value)
 * @method array getOrderRenewParam()
 * @method string getCouponNo()
 * @method $this withCouponNo($value)
 * @method string getUseCoupon()
 * @method $this withUseCoupon($value)
 * @method string getLang()
 * @method $this withLang($value)
 * @method string getUsePromotion()
 * @method $this withUsePromotion($value)
 */
class SaveBatchTaskForCreatingOrderRenew extends V20180129Rpc
{

    /**
     * @param array $orderRenewParam
     *
     * @return $this
     */
    public function withOrderRenewParam(array $orderRenewParam)
    {
        $this->data['OrderRenewParam'] = $orderRenewParam;
        foreach ($orderRenewParam as $depth1 => $depth1Value) {
            $this->options['query']['OrderRenewParam.' . ($depth1 + 1) . '.SubscriptionDuration'] = $depth1Value['SubscriptionDuration'];
            $this->options['query']['OrderRenewParam.' . ($depth1 + 1) . '.CurrentExpirationDate'] = $depth1Value['CurrentExpirationDate'];
            $this->options['query']['OrderRenewParam.' . ($depth1 + 1) . '.DomainName'] = $depth1Value['DomainName'];
        }

        return $this;
    }
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getUserClientIp()
 * @method $this withUserClientIp($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getRegistrantProfileId()
 * @method $this withRegistrantProfileId($value)
 * @method string getLang()
 * @method $this withLang($value)
 */
class SaveTaskForSubmittingDomainRealNameVerificationByRegistrantProfileID extends V20180129Rpc
{
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getUserClientIp()
 * @method $this withUserClientIp($value)
 * @method string getLang()
 * @method $this withLang($value)
 */
class QueryDomainByInstanceId extends V20180129Rpc
{
}

/**
 * @method string getSubscriptionDuration()
 * @method $this withSubscriptionDuration($value)
 * @method string getPromotionNo()
 * @method $this withPromotionNo($value)
 * @method string getCurrentExpirationDate()
 * @method $this withCurrentExpirationDate($value)
 * @method string getUserClientIp()
 * @method $this withUserClientIp($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getCouponNo()
 * @method $this withCouponNo($value)
 * @method string getUseCoupon()
 * @method $this withUseCoupon($value)
 * @method string getLang()
 * @method $this withLang($value)
 * @method string getUsePromotion()
 * @method $this withUsePromotion($value)
 */
class SaveSingleTaskForCreatingOrderRenew extends V20180129Rpc
{
}

/**
 * @method string getUserClientIp()
 * @method $this withUserClientIp($value)
 * @method array getDomainName()
 * @method array getDomainNameServer()
 * @method string getLang()
 * @method $this withLang($value)
 * @method string getAliyunDns()
 * @method $this withAliyunDns($value)
 */
class SaveBatchTaskForModifyingDomainDns extends V20180129Rpc
{

    /**
     * @param array $domainName
     *
     * @return $this
     */
    public function withDomainName(array $domainName)
    {
        $this->data['DomainName'] = $domainName;
        foreach ($domainName as $i => $iValue) {
            $this->options['query']['DomainName.' . ($i + 1)] = $iValue;
        }

        return $this;
    }

    /**
     * @param array $domainNameServer
     *
     * @return $this
     */
    public function withDomainNameServer(array $domainNameServer)
    {
        $this->data['DomainNameServer'] = $domainNameServer;
        foreach ($domainNameServer as $i => $iValue) {
            $this->options['query']['DomainNameServer.' . ($i + 1)] = $iValue;
        }

        return $this;
    }
}

/**
 * @method string getUserClientIp()
 * @method $this withUserClientIp($value)
 * @method array getDomainName()
 * @method string getLang()
 * @method $this withLang($value)
 * @method string getStatus()
 * @method $this withStatus($value)
 */
class SaveBatchTaskForDomainNameProxyService extends V20180129Rpc
{

    /**
     * @param array $domainName
     *
     * @return $this
     */
    public function withDomainName(array $domainName)
    {
        $this->data['DomainName'] = $domainName;
        foreach ($domainName as $i => $iValue) {
            $this->options['query']['DomainName.' . ($i + 1)] = $iValue;
        }

        return $this;
    }
}

/**
 * @method string getUserClientIp()
 * @method $this withUserClientIp($value)
 * @method array getDomainName()
 * @method string getLang()
 * @method $this withLang($value)
 * @method string getStatus()
 * @method $this withStatus($value)
 */
class SaveBatchTaskForTransferProhibitionLock extends V20180129Rpc
{

    /**
     * @param array $domainName
     *
     * @return $this
     */
    public function withDomainName(array $domainName)
    {
        $this->data['DomainName'] = $domainName;
        foreach ($domainName as $i => $iValue) {
            $this->options['query']['DomainName.' . ($i + 1)] = $iValue;
        }

        return $this;
    }
}

/**
 * @method string getEndExpirationDate()
 * @method $this withEndExpirationDate($value)
 * @method string getProductDomainType()
 * @method $this withProductDomainType($value)
 * @method string getOrderKeyType()
 * @method $this withOrderKeyType($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getStartExpirationDate()
 * @method $this withStartExpirationDate($value)
 * @method string getPageNum()
 * @method $this withPageNum($value)
 * @method string getOrderByType()
 * @method $this withOrderByType($value)
 * @method string getDomainGroupId()
 * @method $this withDomainGroupId($value)
 * @method string getEndRegistrationDate()
 * @method $this withEndRegistrationDate($value)
 * @method string getUserClientIp()
 * @method $this withUserClientIp($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getLang()
 * @method $this withLang($value)
 * @method string getQueryType()
 * @method $this withQueryType($value)
 * @method string getStartRegistrationDate()
 * @method $this withStartRegistrationDate($value)
 */
class QueryDomainList extends V20180129Rpc
{
}

/**
 * @method string getUserClientIp()
 * @method $this withUserClientIp($value)
 * @method array getDomainName()
 * @method string getLang()
 * @method $this withLang($value)
 * @method string getStatus()
 * @method $this withStatus($value)
 */
class SaveBatchTaskForUpdateProhibitionLock extends V20180129Rpc
{

    /**
     * @param array $domainName
     *
     * @return $this
     */
    public function withDomainName(array $domainName)
    {
        $this->data['DomainName'] = $domainName;
        foreach ($domainName as $i => $iValue) {
            $this->options['query']['DomainName.' . ($i + 1)] = $iValue;
        }

        return $this;
    }
}

/**
 * @method string getContactType()
 * @method $this withContactType($value)
 * @method string getUserClientIp()
 * @method $this withUserClientIp($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getLang()
 * @method $this withLang($value)
 */
class QueryContactInfo extends V20180129Rpc
{
}

/**
 * @method string getEndDate()
 * @method $this withEndDate($value)
 * @method string getUserClientIp()
 * @method $this withUserClientIp($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getLang()
 * @method $this withLang($value)
 * @method string getPageNum()
 * @method $this withPageNum($value)
 * @method string getStartDate()
 * @method $this withStartDate($value)
 */
class QueryChangeLogList extends V20180129Rpc
{
}

/**
 * @method string getCountry()
 * @method $this withCountry($value)
 * @method string getSubscriptionDuration()
 * @method $this withSubscriptionDuration($value)
 * @method string getPermitPremiumActivation()
 * @method $this withPermitPremiumActivation($value)
 * @method string getCity()
 * @method $this withCity($value)
 * @method string getDns2()
 * @method $this withDns2($value)
 * @method string getDns1()
 * @method $this withDns1($value)
 * @method string getRegistrantProfileId()
 * @method $this withRegistrantProfileId($value)
 * @method string getCouponNo()
 * @method $this withCouponNo($value)
 * @method string getAliyunDns()
 * @method $this withAliyunDns($value)
 * @method string getZhCity()
 * @method $this withZhCity($value)
 * @method string getTelExt()
 * @method $this withTelExt($value)
 * @method string getZhRegistrantName()
 * @method $this withZhRegistrantName($value)
 * @method string getProvince()
 * @method $this withProvince($value)
 * @method string getPostalCode()
 * @method $this withPostalCode($value)
 * @method string getLang()
 * @method $this withLang($value)
 * @method string getEmail()
 * @method $this withEmail($value)
 * @method string getZhRegistrantOrganization()
 * @method $this withZhRegistrantOrganization($value)
 * @method string getAddress()
 * @method $this withAddress($value)
 * @method string getTelArea()
 * @method $this withTelArea($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getZhAddress()
 * @method $this withZhAddress($value)
 * @method string getRegistrantType()
 * @method $this withRegistrantType($value)
 * @method string getTelephone()
 * @method $this withTelephone($value)
 * @method string getTrademarkDomainActivation()
 * @method $this withTrademarkDomainActivation($value)
 * @method string getUseCoupon()
 * @method $this withUseCoupon($value)
 * @method string getZhProvince()
 * @method $this withZhProvince($value)
 * @method string getRegistrantOrganization()
 * @method $this withRegistrantOrganization($value)
 * @method string getPromotionNo()
 * @method $this withPromotionNo($value)
 * @method string getEnableDomainProxy()
 * @method $this withEnableDomainProxy($value)
 * @method string getUserClientIp()
 * @method $this withUserClientIp($value)
 * @method string getRegistrantName()
 * @method $this withRegistrantName($value)
 * @method string getUsePromotion()
 * @method $this withUsePromotion($value)
 */
class SaveSingleTaskForCreatingOrderActivate extends V20180129Rpc
{
}

/**
 * @method array getOrderActivateParam()
 * @method string getPromotionNo()
 * @method $this withPromotionNo($value)
 * @method string getUserClientIp()
 * @method $this withUserClientIp($value)
 * @method string getCouponNo()
 * @method $this withCouponNo($value)
 * @method string getUseCoupon()
 * @method $this withUseCoupon($value)
 * @method string getLang()
 * @method $this withLang($value)
 * @method string getUsePromotion()
 * @method $this withUsePromotion($value)
 */
class SaveBatchTaskForCreatingOrderActivate extends V20180129Rpc
{

    /**
     * @param array $orderActivateParam
     *
     * @return $this
     */
    public function withOrderActivateParam(array $orderActivateParam)
    {
        $this->data['OrderActivateParam'] = $orderActivateParam;
        foreach ($orderActivateParam as $depth1 => $depth1Value) {
            $this->options['query']['OrderActivateParam.' . ($depth1 + 1) . '.Country'] = $depth1Value['Country'];
            $this->options['query']['OrderActivateParam.' . ($depth1 + 1) . '.SubscriptionDuration'] = $depth1Value['SubscriptionDuration'];
            $this->options['query']['OrderActivateParam.' . ($depth1 + 1) . '.PermitPremiumActivation'] = $depth1Value['PermitPremiumActivation'];
            $this->options['query']['OrderActivateParam.' . ($depth1 + 1) . '.City'] = $depth1Value['City'];
            $this->options['query']['OrderActivateParam.' . ($depth1 + 1) . '.Dns2'] = $depth1Value['Dns2'];
            $this->options['query']['OrderActivateParam.' . ($depth1 + 1) . '.Dns1'] = $depth1Value['Dns1'];
            $this->options['query']['OrderActivateParam.' . ($depth1 + 1) . '.RegistrantProfileId'] = $depth1Value['RegistrantProfileId'];
            $this->options['query']['OrderActivateParam.' . ($depth1 + 1) . '.AliyunDns'] = $depth1Value['AliyunDns'];
            $this->options['query']['OrderActivateParam.' . ($depth1 + 1) . '.ZhCity'] = $depth1Value['ZhCity'];
            $this->options['query']['OrderActivateParam.' . ($depth1 + 1) . '.TelExt'] = $depth1Value['TelExt'];
            $this->options['query']['OrderActivateParam.' . ($depth1 + 1) . '.ZhRegistrantName'] = $depth1Value['ZhRegistrantName'];
            $this->options['query']['OrderActivateParam.' . ($depth1 + 1) . '.Province'] = $depth1Value['Province'];
            $this->options['query']['OrderActivateParam.' . ($depth1 + 1) . '.PostalCode'] = $depth1Value['PostalCode'];
            $this->options['query']['OrderActivateParam.' . ($depth1 + 1) . '.Email'] = $depth1Value['Email'];
            $this->options['query']['OrderActivateParam.' . ($depth1 + 1) . '.ZhRegistrantOrganization'] = $depth1Value['ZhRegistrantOrganization'];
            $this->options['query']['OrderActivateParam.' . ($depth1 + 1) . '.Address'] = $depth1Value['Address'];
            $this->options['query']['OrderActivateParam.' . ($depth1 + 1) . '.TelArea'] = $depth1Value['TelArea'];
            $this->options['query']['OrderActivateParam.' . ($depth1 + 1) . '.DomainName'] = $depth1Value['DomainName'];
            $this->options['query']['OrderActivateParam.' . ($depth1 + 1) . '.ZhAddress'] = $depth1Value['ZhAddress'];
            $this->options['query']['OrderActivateParam.' . ($depth1 + 1) . '.RegistrantType'] = $depth1Value['RegistrantType'];
            $this->options['query']['OrderActivateParam.' . ($depth1 + 1) . '.Telephone'] = $depth1Value['Telephone'];
            $this->options['query']['OrderActivateParam.' . ($depth1 + 1) . '.TrademarkDomainActivation'] = $depth1Value['TrademarkDomainActivation'];
            $this->options['query']['OrderActivateParam.' . ($depth1 + 1) . '.ZhProvince'] = $depth1Value['ZhProvince'];
            $this->options['query']['OrderActivateParam.' . ($depth1 + 1) . '.RegistrantOrganization'] = $depth1Value['RegistrantOrganization'];
            $this->options['query']['OrderActivateParam.' . ($depth1 + 1) . '.EnableDomainProxy'] = $depth1Value['EnableDomainProxy'];
            $this->options['query']['OrderActivateParam.' . ($depth1 + 1) . '.RegistrantName'] = $depth1Value['RegistrantName'];
        }

        return $this;
    }
}

/**
 * @method string getUserClientIp()
 * @method $this withUserClientIp($value)
 * @method string getRegistrantProfileId()
 * @method $this withRegistrantProfileId($value)
 * @method string getLang()
 * @method $this withLang($value)
 */
class DeleteRegistrantProfile extends V20180129Rpc
{
}

/**
 * @method string getRegistrantOrganization()
 * @method $this withRegistrantOrganization($value)
 * @method string getUserClientIp()
 * @method $this withUserClientIp($value)
 * @method string getRegistrantProfileId()
 * @method $this withRegistrantProfileId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getRegistrantType()
 * @method $this withRegistrantType($value)
 * @method string getRegistrantProfileType()
 * @method $this withRegistrantProfileType($value)
 * @method string getRealNameStatus()
 * @method $this withRealNameStatus($value)
 * @method string getLang()
 * @method $this withLang($value)
 * @method string getPageNum()
 * @method $this withPageNum($value)
 * @method string getDefaultRegistrantProfile()
 * @method $this withDefaultRegistrantProfile($value)
 * @method string getEmail()
 * @method $this withEmail($value)
 * @method string getZhRegistrantOrganization()
 * @method $this withZhRegistrantOrganization($value)
 */
class QueryRegistrantProfiles extends V20180129Rpc
{
}

/**
 * @method string getCountry()
 * @method $this withCountry($value)
 * @method string getAddress()
 * @method $this withAddress($value)
 * @method string getTelArea()
 * @method $this withTelArea($value)
 * @method string getCity()
 * @method $this withCity($value)
 * @method string getRegistrantProfileId()
 * @method $this withRegistrantProfileId($value)
 * @method string getZhAddress()
 * @method $this withZhAddress($value)
 * @method string getRegistrantType()
 * @method $this withRegistrantType($value)
 * @method string getRegistrantProfileType()
 * @method $this withRegistrantProfileType($value)
 * @method string getTelephone()
 * @method $this withTelephone($value)
 * @method string getDefaultRegistrantProfile()
 * @method $this withDefaultRegistrantProfile($value)
 * @method string getZhCity()
 * @method $this withZhCity($value)
 * @method string getZhProvince()
 * @method $this withZhProvince($value)
 * @method string getRegistrantOrganization()
 * @method $this withRegistrantOrganization($value)
 * @method string getTelExt()
 * @method $this withTelExt($value)
 * @method string getProvince()
 * @method $this withProvince($value)
 * @method string getZhRegistrantName()
 * @method $this withZhRegistrantName($value)
 * @method string getPostalCode()
 * @method $this withPostalCode($value)
 * @method string getUserClientIp()
 * @method $this withUserClientIp($value)
 * @method string getLang()
 * @method $this withLang($value)
 * @method string getEmail()
 * @method $this withEmail($value)
 * @method string getRegistrantName()
 * @method $this withRegistrantName($value)
 * @method string getZhRegistrantOrganization()
 * @method $this withZhRegistrantOrganization($value)
 */
class SaveRegistrantProfile extends V20180129Rpc
{
}
