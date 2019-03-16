<?php

namespace AlibabaCloud\Domain\V20180129;

use AlibabaCloud\Rpc;

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
 * @method $this withFileToUpload($value)
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
     * @param array $value
     *
     * @return $this
     */
    public function withDomainName(array $value)
    {
        $this->data['DomainName'] = $value;
        foreach ($value as $i => $iValue) {
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
     * @param array $value
     *
     * @return $this
     */
    public function withIp(array $value)
    {
        $this->data['Ip'] = $value;
        foreach ($value as $i => $iValue) {
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
     * @param array $value
     *
     * @return $this
     */
    public function withIp(array $value)
    {
        $this->data['Ip'] = $value;
        foreach ($value as $i => $iValue) {
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
     * @param array $value
     *
     * @return $this
     */
    public function withOrderRedeemParam(array $value)
    {
        $this->data['OrderRedeemParam'] = $value;
        foreach ($value as $i => $iValue) {
            $this->options['query']['OrderRedeemParam.' . ($i + 1) . '.CurrentExpirationDate'] = $value[$i]['CurrentExpirationDate'];
            $this->options['query']['OrderRedeemParam.' . ($i + 1) . '.DomainName'] = $value[$i]['DomainName'];
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
     * @param array $value
     *
     * @return $this
     */
    public function withTaskDetailNo(array $value)
    {
        $this->data['TaskDetailNo'] = $value;
        foreach ($value as $i => $iValue) {
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
     * @param array $value
     *
     * @return $this
     */
    public function withDomainName(array $value)
    {
        $this->data['DomainName'] = $value;
        foreach ($value as $i => $iValue) {
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
     * @param array $value
     *
     * @return $this
     */
    public function withOrderTransferParam(array $value)
    {
        $this->data['OrderTransferParam'] = $value;
        foreach ($value as $i => $iValue) {
            $this->options['query']['OrderTransferParam.' . ($i + 1) . '.PermitPremiumTransfer'] = $value[$i]['PermitPremiumTransfer'];
            $this->options['query']['OrderTransferParam.' . ($i + 1) . '.AuthorizationCode'] = $value[$i]['AuthorizationCode'];
            $this->options['query']['OrderTransferParam.' . ($i + 1) . '.DomainName'] = $value[$i]['DomainName'];
            $this->options['query']['OrderTransferParam.' . ($i + 1) . '.RegistrantProfileId'] = $value[$i]['RegistrantProfileId'];
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
 * @method $this withIdentityCredential($value)
 * @method array getDomainName()
 * @method string getLang()
 * @method $this withLang($value)
 * @method string getIdentityCredentialNo()
 * @method $this withIdentityCredentialNo($value)
 */
class SaveTaskForSubmittingDomainRealNameVerificationByIdentityCredential extends V20180129Rpc
{

    /**
     * @param array $value
     *
     * @return $this
     */
    public function withDomainName(array $value)
    {
        $this->data['DomainName'] = $value;
        foreach ($value as $i => $iValue) {
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
 * @method $this withIdentityCredential($value)
 * @method string getLang()
 * @method $this withLang($value)
 * @method string getIdentityCredentialNo()
 * @method $this withIdentityCredentialNo($value)
 */
class RegistrantProfileRealNameVerification extends V20180129Rpc
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
     * @param array $value
     *
     * @return $this
     */
    public function withDomainName(array $value)
    {
        $this->data['DomainName'] = $value;
        foreach ($value as $i => $iValue) {
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
     * @param array $value
     *
     * @return $this
     */
    public function withDomainName(array $value)
    {
        $this->data['DomainName'] = $value;
        foreach ($value as $i => $iValue) {
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
 * @method $this withIdentityCredential($value)
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
     * @param array $value
     *
     * @return $this
     */
    public function withDomainName(array $value)
    {
        $this->data['DomainName'] = $value;
        foreach ($value as $i => $iValue) {
            $this->options['query']['DomainName.' . ($i + 1)] = $iValue;
        }

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
     * @param array $value
     *
     * @return $this
     */
    public function withDomainName(array $value)
    {
        $this->data['DomainName'] = $value;
        foreach ($value as $i => $iValue) {
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
     * @param array $value
     *
     * @return $this
     */
    public function withOrderRenewParam(array $value)
    {
        $this->data['OrderRenewParam'] = $value;
        foreach ($value as $i => $iValue) {
            $this->options['query']['OrderRenewParam.' . ($i + 1) . '.SubscriptionDuration'] = $value[$i]['SubscriptionDuration'];
            $this->options['query']['OrderRenewParam.' . ($i + 1) . '.CurrentExpirationDate'] = $value[$i]['CurrentExpirationDate'];
            $this->options['query']['OrderRenewParam.' . ($i + 1) . '.DomainName'] = $value[$i]['DomainName'];
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
     * @param array $value
     *
     * @return $this
     */
    public function withDomainName(array $value)
    {
        $this->data['DomainName'] = $value;
        foreach ($value as $i => $iValue) {
            $this->options['query']['DomainName.' . ($i + 1)] = $iValue;
        }

        return $this;
    }

    /**
     * @param array $value
     *
     * @return $this
     */
    public function withDomainNameServer(array $value)
    {
        $this->data['DomainNameServer'] = $value;
        foreach ($value as $i => $iValue) {
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
     * @param array $value
     *
     * @return $this
     */
    public function withDomainName(array $value)
    {
        $this->data['DomainName'] = $value;
        foreach ($value as $i => $iValue) {
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
     * @param array $value
     *
     * @return $this
     */
    public function withDomainName(array $value)
    {
        $this->data['DomainName'] = $value;
        foreach ($value as $i => $iValue) {
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
     * @param array $value
     *
     * @return $this
     */
    public function withDomainName(array $value)
    {
        $this->data['DomainName'] = $value;
        foreach ($value as $i => $iValue) {
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
     * @param array $value
     *
     * @return $this
     */
    public function withOrderActivateParam(array $value)
    {
        $this->data['OrderActivateParam'] = $value;
        foreach ($value as $i => $iValue) {
            $this->options['query']['OrderActivateParam.' . ($i + 1) . '.Country'] = $value[$i]['Country'];
            $this->options['query']['OrderActivateParam.' . ($i + 1) . '.SubscriptionDuration'] = $value[$i]['SubscriptionDuration'];
            $this->options['query']['OrderActivateParam.' . ($i + 1) . '.PermitPremiumActivation'] = $value[$i]['PermitPremiumActivation'];
            $this->options['query']['OrderActivateParam.' . ($i + 1) . '.City'] = $value[$i]['City'];
            $this->options['query']['OrderActivateParam.' . ($i + 1) . '.Dns2'] = $value[$i]['Dns2'];
            $this->options['query']['OrderActivateParam.' . ($i + 1) . '.Dns1'] = $value[$i]['Dns1'];
            $this->options['query']['OrderActivateParam.' . ($i + 1) . '.RegistrantProfileId'] = $value[$i]['RegistrantProfileId'];
            $this->options['query']['OrderActivateParam.' . ($i + 1) . '.AliyunDns'] = $value[$i]['AliyunDns'];
            $this->options['query']['OrderActivateParam.' . ($i + 1) . '.ZhCity'] = $value[$i]['ZhCity'];
            $this->options['query']['OrderActivateParam.' . ($i + 1) . '.TelExt'] = $value[$i]['TelExt'];
            $this->options['query']['OrderActivateParam.' . ($i + 1) . '.ZhRegistrantName'] = $value[$i]['ZhRegistrantName'];
            $this->options['query']['OrderActivateParam.' . ($i + 1) . '.Province'] = $value[$i]['Province'];
            $this->options['query']['OrderActivateParam.' . ($i + 1) . '.PostalCode'] = $value[$i]['PostalCode'];
            $this->options['query']['OrderActivateParam.' . ($i + 1) . '.Email'] = $value[$i]['Email'];
            $this->options['query']['OrderActivateParam.' . ($i + 1) . '.ZhRegistrantOrganization'] = $value[$i]['ZhRegistrantOrganization'];
            $this->options['query']['OrderActivateParam.' . ($i + 1) . '.Address'] = $value[$i]['Address'];
            $this->options['query']['OrderActivateParam.' . ($i + 1) . '.TelArea'] = $value[$i]['TelArea'];
            $this->options['query']['OrderActivateParam.' . ($i + 1) . '.DomainName'] = $value[$i]['DomainName'];
            $this->options['query']['OrderActivateParam.' . ($i + 1) . '.ZhAddress'] = $value[$i]['ZhAddress'];
            $this->options['query']['OrderActivateParam.' . ($i + 1) . '.RegistrantType'] = $value[$i]['RegistrantType'];
            $this->options['query']['OrderActivateParam.' . ($i + 1) . '.Telephone'] = $value[$i]['Telephone'];
            $this->options['query']['OrderActivateParam.' . ($i + 1) . '.TrademarkDomainActivation'] = $value[$i]['TrademarkDomainActivation'];
            $this->options['query']['OrderActivateParam.' . ($i + 1) . '.ZhProvince'] = $value[$i]['ZhProvince'];
            $this->options['query']['OrderActivateParam.' . ($i + 1) . '.RegistrantOrganization'] = $value[$i]['RegistrantOrganization'];
            $this->options['query']['OrderActivateParam.' . ($i + 1) . '.EnableDomainProxy'] = $value[$i]['EnableDomainProxy'];
            $this->options['query']['OrderActivateParam.' . ($i + 1) . '.RegistrantName'] = $value[$i]['RegistrantName'];
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
