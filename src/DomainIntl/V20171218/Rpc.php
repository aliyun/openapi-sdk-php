<?php

namespace AlibabaCloud\DomainIntl\V20171218;

use AlibabaCloud\Rpc;

class V20171218Rpc extends Rpc
{
    /** @var string */
    public $product = 'Domain-intl';

    /** @var string */
    public $version = '2017-12-18';

    /** @var string */
    public $method = 'POST';

    /** @var string */
    public $serviceCode = 'domain';
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
class SaveTaskForUpdatingRegistrantInfoByRegistrantProfileID extends V20171218Rpc
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
 * @method string getRegistrantType()
 * @method $this withRegistrantType($value)
 * @method array getDomainName()
 * @method string getIdentityCredential()
 * @method $this withIdentityCredential($value)
 * @method string getTelephone()
 * @method $this withTelephone($value)
 * @method string getTransferOutProhibited()
 * @method $this withTransferOutProhibited($value)
 * @method string getRegistrantOrganization()
 * @method $this withRegistrantOrganization($value)
 * @method string getTelExt()
 * @method $this withTelExt($value)
 * @method string getProvince()
 * @method $this withProvince($value)
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
 */
class SaveTaskForUpdatingRegistrantInfoByIdentityCredential extends V20171218Rpc
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
class SaveTaskForSubmittingDomainRealNameVerificationByRegistrantProfileID extends V20171218Rpc
{
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
class SaveTaskForSubmittingDomainRealNameVerificationByIdentityCredential extends V20171218Rpc
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
class RegistrantProfileRealNameVerification extends V20171218Rpc
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
class QueryRegistrantProfileRealNameVerificationInfo extends V20171218Rpc
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
class QueryFailReasonForRegistrantProfileRealNameVerification extends V20171218Rpc
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
class QueryFailReasonForDomainRealNameVerification extends V20171218Rpc
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
class QueryDomainRealNameVerificationInfo extends V20171218Rpc
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
class CancelDomainVerification extends V20171218Rpc
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
class SaveSingleTaskForSynchronizingDSRecord extends V20171218Rpc
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
class SaveSingleTaskForModifyingDSRecord extends V20171218Rpc
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
class SaveSingleTaskForDeletingDSRecord extends V20171218Rpc
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
class SaveSingleTaskForAddingDSRecord extends V20171218Rpc
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
class QueryDSRecord extends V20171218Rpc
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
class FuzzyMatchDomainSensitiveWord extends V20171218Rpc
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
class BatchFuzzyMatchDomainSensitiveWord extends V20171218Rpc
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
class LookupTmchNotice extends V20171218Rpc
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
class CheckDomainSunriseClaim extends V20171218Rpc
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
class QueryLocalEnsAssociation extends V20171218Rpc
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
class QueryEnsAssociation extends V20171218Rpc
{
}

/**
 * @method string getAddress()
 * @method $this withAddress($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getUserClientIp()
 * @method $this withUserClientIp($value)
 * @method string getLang()
 * @method $this withLang($value)
 */
class SaveSingleTaskForAssociatingEns extends V20171218Rpc
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
class SaveSingleTaskForDisassociatingEns extends V20171218Rpc
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
class SaveSingleTaskForDeletingDnsHost extends V20171218Rpc
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
 * @method string getCountry()
 * @method $this withCountry($value)
 * @method string getAddress()
 * @method $this withAddress($value)
 * @method string getTelArea()
 * @method $this withTelArea($value)
 * @method string getCity()
 * @method $this withCity($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getRegistrantType()
 * @method $this withRegistrantType($value)
 * @method string getTelephone()
 * @method $this withTelephone($value)
 * @method string getRegistrantOrganization()
 * @method $this withRegistrantOrganization($value)
 * @method string getTelExt()
 * @method $this withTelExt($value)
 * @method string getProvince()
 * @method $this withProvince($value)
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
 */
class VerifyContactField extends V20171218Rpc
{
}

/**
 * @method array getTaskDetailNo()
 * @method string getUserClientIp()
 * @method $this withUserClientIp($value)
 * @method string getLang()
 * @method $this withLang($value)
 */
class AcknowledgeTaskResult extends V20171218Rpc
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
class PollTaskResult extends V20171218Rpc
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
class SaveTaskForSubmittingDomainDelete extends V20171218Rpc
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
 * @method array getDomainName()
 * @method string getTelephone()
 * @method $this withTelephone($value)
 * @method string getTransferOutProhibited()
 * @method $this withTransferOutProhibited($value)
 * @method string getRegistrantOrganization()
 * @method $this withRegistrantOrganization($value)
 * @method string getTelExt()
 * @method $this withTelExt($value)
 * @method string getProvince()
 * @method $this withProvince($value)
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
 */
class SaveBatchTaskForUpdatingContactInfoByNewContact extends V20171218Rpc
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
class SaveSingleTaskForCancelingTransferOut extends V20171218Rpc
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
class SaveSingleTaskForApprovingTransferOut extends V20171218Rpc
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
class SaveSingleTaskForQueryingTransferAuthorizationCode extends V20171218Rpc
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
class QueryTransferOutInfo extends V20171218Rpc
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
class ConfirmTransferInEmail extends V20171218Rpc
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
class TransferInRefetchWhoisEmail extends V20171218Rpc
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
class CheckTransferInFeasibility extends V20171218Rpc
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
class QueryTransferInList extends V20171218Rpc
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
class QueryTransferInByInstanceId extends V20171218Rpc
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
class SaveSingleTaskForCancelingTransferIn extends V20171218Rpc
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
class TransferInReenterTransferAuthorizationCode extends V20171218Rpc
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
class TransferInResendMailToken extends V20171218Rpc
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
class TransferInCheckMailToken extends V20171218Rpc
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
class SaveBatchTaskForCreatingOrderTransfer extends V20171218Rpc
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
class SaveSingleTaskForCreatingOrderTransfer extends V20171218Rpc
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
class QueryTaskDetailHistory extends V20171218Rpc
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
class QueryTaskInfoHistory extends V20171218Rpc
{
}

/**
 * @method string getFeeCurrency()
 * @method $this withFeeCurrency($value)
 * @method string getFeePeriod()
 * @method $this withFeePeriod($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getUserClientIp()
 * @method $this withUserClientIp($value)
 * @method string getFeeCommand()
 * @method $this withFeeCommand($value)
 * @method string getLang()
 * @method $this withLang($value)
 */
class CheckDomain extends V20171218Rpc
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
class SaveBatchTaskForModifyingDomainDns extends V20171218Rpc
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
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getUserClientIp()
 * @method $this withUserClientIp($value)
 * @method string getLang()
 * @method $this withLang($value)
 */
class SaveSingleTaskForSynchronizingDnsHost extends V20171218Rpc
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
class QueryDnsHost extends V20171218Rpc
{
}

/**
 * @method string getTaskStatus()
 * @method $this withTaskStatus($value)
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
 */
class QueryTaskDetailList extends V20171218Rpc
{
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
class QueryTaskList extends V20171218Rpc
{
}

/**
 * @method string getUserClientIp()
 * @method $this withUserClientIp($value)
 * @method string getRegistrantProfileId()
 * @method $this withRegistrantProfileId($value)
 * @method string getLang()
 * @method $this withLang($value)
 */
class DeleteRegistrantProfile extends V20171218Rpc
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
class SaveSingleTaskForCreatingDnsHost extends V20171218Rpc
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
 * @method string getRegistrantType()
 * @method $this withRegistrantType($value)
 * @method string getRegistrantProfileType()
 * @method $this withRegistrantProfileType($value)
 * @method string getTelephone()
 * @method $this withTelephone($value)
 * @method string getDefaultRegistrantProfile()
 * @method $this withDefaultRegistrantProfile($value)
 * @method string getRegistrantOrganization()
 * @method $this withRegistrantOrganization($value)
 * @method string getTelExt()
 * @method $this withTelExt($value)
 * @method string getProvince()
 * @method $this withProvince($value)
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
 */
class SaveRegistrantProfile extends V20171218Rpc
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
 */
class QueryRegistrantProfiles extends V20171218Rpc
{
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
class QueryContactInfo extends V20171218Rpc
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
 * @method string getTelExt()
 * @method $this withTelExt($value)
 * @method string getProvince()
 * @method $this withProvince($value)
 * @method string getPostalCode()
 * @method $this withPostalCode($value)
 * @method string getLang()
 * @method $this withLang($value)
 * @method string getEmail()
 * @method $this withEmail($value)
 * @method string getAddress()
 * @method $this withAddress($value)
 * @method string getTelArea()
 * @method $this withTelArea($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getRegistrantType()
 * @method $this withRegistrantType($value)
 * @method string getTelephone()
 * @method $this withTelephone($value)
 * @method string getTrademarkDomainActivation()
 * @method $this withTrademarkDomainActivation($value)
 * @method string getUseCoupon()
 * @method $this withUseCoupon($value)
 * @method string getRegistrantOrganization()
 * @method $this withRegistrantOrganization($value)
 * @method string getPromotionNo()
 * @method $this withPromotionNo($value)
 * @method string getUserClientIp()
 * @method $this withUserClientIp($value)
 * @method string getEnableDomainProxy()
 * @method $this withEnableDomainProxy($value)
 * @method string getRegistrantName()
 * @method $this withRegistrantName($value)
 * @method string getUsePromotion()
 * @method $this withUsePromotion($value)
 */
class SaveSingleTaskForCreatingOrderActivate extends V20171218Rpc
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
class EmailVerified extends V20171218Rpc
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
class VerifyEmail extends V20171218Rpc
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
class ResendEmailVerification extends V20171218Rpc
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
class SubmitEmailVerification extends V20171218Rpc
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
class DeleteEmailVerification extends V20171218Rpc
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
class ListEmailVerification extends V20171218Rpc
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
class SaveBatchTaskForCreatingOrderRedeem extends V20171218Rpc
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
class SaveSingleTaskForCreatingOrderRedeem extends V20171218Rpc
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
class SaveBatchTaskForTransferProhibitionLock extends V20171218Rpc
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
class SaveBatchTaskForUpdateProhibitionLock extends V20171218Rpc
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
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getLang()
 * @method $this withLang($value)
 * @method string getStatus()
 * @method $this withStatus($value)
 */
class SaveSingleTaskForDomainNameProxyService extends V20171218Rpc
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
class SaveSingleTaskForTransferProhibitionLock extends V20171218Rpc
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
class SaveSingleTaskForUpdateProhibitionLock extends V20171218Rpc
{
}

/**
 * @method string getUserClientIp()
 * @method $this withUserClientIp($value)
 * @method array getDomainName()
 * @method string getLang()
 * @method $this withLang($value)
 * @method string getStatus()
 */
class SaveBatchTaskForDomainNameProxyService extends V20171218Rpc
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
     * @param string $value
     *
     * @return $this
     */
    public function withStatus($value)
    {
        $this->data['Status'] = $value;
        $this->options['query']['status'] = $value;

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
class SaveBatchTaskForCreatingOrderRenew extends V20171218Rpc
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
class SaveSingleTaskForCreatingOrderRenew extends V20171218Rpc
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
class QueryDomainByInstanceId extends V20171218Rpc
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
class SaveSingleTaskForModifyingDnsHost extends V20171218Rpc
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
 * @method string getContactType()
 * @method $this withContactType($value)
 * @method string getUserClientIp()
 * @method $this withUserClientIp($value)
 * @method string getRegistrantProfileId()
 * @method $this withRegistrantProfileId($value)
 * @method array getDomainName()
 * @method string getAddTransferLock()
 * @method $this withAddTransferLock($value)
 * @method string getLang()
 * @method $this withLang($value)
 */
class SaveBatchTaskForUpdatingContactInfo extends V20171218Rpc
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
class SaveSingleTaskForUpdatingContactInfo extends V20171218Rpc
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
class SaveBatchTaskForCreatingOrderActivate extends V20171218Rpc
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
            $this->options['query']['OrderActivateParam.' . ($i + 1) . '.Address'] = $value[$i]['Address'];
            $this->options['query']['OrderActivateParam.' . ($i + 1) . '.PermitPremiumActivation'] = $value[$i]['PermitPremiumActivation'];
            $this->options['query']['OrderActivateParam.' . ($i + 1) . '.TelArea'] = $value[$i]['TelArea'];
            $this->options['query']['OrderActivateParam.' . ($i + 1) . '.City'] = $value[$i]['City'];
            $this->options['query']['OrderActivateParam.' . ($i + 1) . '.Dns2'] = $value[$i]['Dns2'];
            $this->options['query']['OrderActivateParam.' . ($i + 1) . '.Dns1'] = $value[$i]['Dns1'];
            $this->options['query']['OrderActivateParam.' . ($i + 1) . '.DomainName'] = $value[$i]['DomainName'];
            $this->options['query']['OrderActivateParam.' . ($i + 1) . '.RegistrantProfileId'] = $value[$i]['RegistrantProfileId'];
            $this->options['query']['OrderActivateParam.' . ($i + 1) . '.RegistrantType'] = $value[$i]['RegistrantType'];
            $this->options['query']['OrderActivateParam.' . ($i + 1) . '.Telephone'] = $value[$i]['Telephone'];
            $this->options['query']['OrderActivateParam.' . ($i + 1) . '.TrademarkDomainActivation'] = $value[$i]['TrademarkDomainActivation'];
            $this->options['query']['OrderActivateParam.' . ($i + 1) . '.AliyunDns'] = $value[$i]['AliyunDns'];
            $this->options['query']['OrderActivateParam.' . ($i + 1) . '.RegistrantOrganization'] = $value[$i]['RegistrantOrganization'];
            $this->options['query']['OrderActivateParam.' . ($i + 1) . '.TelExt'] = $value[$i]['TelExt'];
            $this->options['query']['OrderActivateParam.' . ($i + 1) . '.Province'] = $value[$i]['Province'];
            $this->options['query']['OrderActivateParam.' . ($i + 1) . '.PostalCode'] = $value[$i]['PostalCode'];
            $this->options['query']['OrderActivateParam.' . ($i + 1) . '.EnableDomainProxy'] = $value[$i]['EnableDomainProxy'];
            $this->options['query']['OrderActivateParam.' . ($i + 1) . '.Email'] = $value[$i]['Email'];
            $this->options['query']['OrderActivateParam.' . ($i + 1) . '.RegistrantName'] = $value[$i]['RegistrantName'];
        }

        return $this;
    }
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
class QueryChangeLogList extends V20171218Rpc
{
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
class QueryDomainList extends V20171218Rpc
{
}
