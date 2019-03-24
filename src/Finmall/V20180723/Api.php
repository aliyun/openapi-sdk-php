<?php

namespace AlibabaCloud\Finmall\V20180723;

use AlibabaCloud\ApiResolverTrait;
use AlibabaCloud\Rpc;

/**
 * Resolve Api based on the method name.
 *
 * @method GetSignedMyBankContractUrl getSignedMyBankContractUrl(array $options = [])
 * @method UpdateCreditGrantingInfo updateCreditGrantingInfo(array $options = [])
 * @method UpdateAuthenticationInfo updateAuthenticationInfo(array $options = [])
 * @method SaveAuthenticationInfo saveAuthenticationInfo(array $options = [])
 * @method UpdateEnterpriseCustomInfo updateEnterpriseCustomInfo(array $options = [])
 * @method QueryFundPartyList queryFundPartyList(array $options = [])
 * @method QuerySignResult querySignResult(array $options = [])
 * @method GetSignContractUrl getSignContractUrl(array $options = [])
 * @method CancelCredit cancelCredit(array $options = [])
 * @method QueryTrialRecords queryTrialRecords(array $options = [])
 * @method AddTrialRecord addTrialRecord(array $options = [])
 * @method AddCustomInfo addCustomInfo(array $options = [])
 * @method SignedPageResult signedPageResult(array $options = [])
 * @method UploadCustomIDImage uploadCustomIDImage(array $options = [])
 * @method SignLoanAgreement signLoanAgreement(array $options = [])
 * @method PayForOrder payForOrder(array $options = [])
 * @method GetAuthorizeCreditQuery getAuthorizeCreditQuery(array $options = [])
 * @method GetUserInfoAuthorizationAgreement getUserInfoAuthorizationAgreement(array $options = [])
 * @method GetCreditRepayList getCreditRepayList(array $options = [])
 * @method GetCreditList getCreditList(array $options = [])
 * @method GetTradeData getTradeData(array $options = [])
 * @method GetLoanAgreement getLoanAgreement(array $options = [])
 * @method GetRepayPlanTrial getRepayPlanTrial(array $options = [])
 * @method ApplyForLoan applyForLoan(array $options = [])
 * @method GetZhimaScore getZhimaScore(array $options = [])
 * @method VerifyCustomer verifyCustomer(array $options = [])
 * @method GetCustomerVerifyInfo getCustomerVerifyInfo(array $options = [])
 * @method GetCreditWithdrawRecord getCreditWithdrawRecord(array $options = [])
 * @method GetCreditSignatureInfo getCreditSignatureInfo(array $options = [])
 * @method GetCurrentTermRepayInfo getCurrentTermRepayInfo(array $options = [])
 * @method GetLoanApplyRecordList getLoanApplyRecordList(array $options = [])
 * @method GetLatestOverdueRecord getLatestOverdueRecord(array $options = [])
 * @method GetOverdueRecordList getOverdueRecordList(array $options = [])
 * @method GetCreditDetail getCreditDetail(array $options = [])
 * @method GetCreditStatus getCreditStatus(array $options = [])
 * @method GetProductDetail getProductDetail(array $options = [])
 * @method GetProductList getProductList(array $options = [])
 * @method VerifySMSToken verifySMSToken(array $options = [])
 * @method GetDocumentDownloadUrl getDocumentDownloadUrl(array $options = [])
 * @method SignResultNotify signResultNotify(array $options = [])
 * @method GetCustomStatusInfo getCustomStatusInfo(array $options = [])
 */
class FinmallApiResolver
{
    use ApiResolverTrait;
}

class V20180723Rpc extends Rpc
{
    /** @var string */
    public $product = 'finmall';

    /** @var string */
    public $version = '2018-07-23';

    /** @var string */
    public $serviceCode = 'finmall';
}

/**
 * @method string getSceneId()
 * @method $this withSceneId($value)
 * @method string getType()
 * @method $this withType($value)
 * @method string getUserId()
 * @method $this withUserId($value)
 */
class GetSignedMyBankContractUrl extends V20180723Rpc
{
}

/**
 * @method string getPhoneNumber()
 * @method $this withPhoneNumber($value)
 * @method string getSmsIvToken()
 * @method $this withSmsIvToken($value)
 * @method string getBankCard()
 * @method $this withBankCard($value)
 * @method string getUserId()
 * @method $this withUserId($value)
 */
class UpdateCreditGrantingInfo extends V20180723Rpc
{
}

/**
 * @method string getIdCardNumber()
 * @method $this withIdCardNumber($value)
 * @method string getAddress()
 * @method $this withAddress($value)
 * @method string getEmployeeEmail()
 * @method $this withEmployeeEmail($value)
 * @method string getEmployeePhoneNumber()
 * @method $this withEmployeePhoneNumber($value)
 * @method string getPhoneNumber()
 * @method $this withPhoneNumber($value)
 * @method string getBusinessLicense()
 * @method $this withBusinessLicense($value)
 * @method string getLegalPersonName()
 * @method $this withLegalPersonName($value)
 * @method string getUserId()
 * @method $this withUserId($value)
 * @method string getSmsIvToken()
 * @method $this withSmsIvToken($value)
 * @method string getBankCard()
 * @method $this withBankCard($value)
 * @method string getEmail()
 * @method $this withEmail($value)
 * @method string getEmployeeName()
 * @method $this withEmployeeName($value)
 * @method string getEmployeeIdCardNumber()
 * @method $this withEmployeeIdCardNumber($value)
 */
class UpdateAuthenticationInfo extends V20180723Rpc
{
    /** @var string */
    public $method = 'POST';
}

/**
 * @method string getIdCardNumber()
 * @method $this withIdCardNumber($value)
 * @method string getAddress()
 * @method $this withAddress($value)
 * @method string getEmployeeEmail()
 * @method $this withEmployeeEmail($value)
 * @method string getEmployeePhoneNumber()
 * @method $this withEmployeePhoneNumber($value)
 * @method string getPhoneNumber()
 * @method $this withPhoneNumber($value)
 * @method string getBusinessLicense()
 * @method $this withBusinessLicense($value)
 * @method string getLegalPersonName()
 * @method $this withLegalPersonName($value)
 * @method string getEnterpriseName()
 * @method $this withEnterpriseName($value)
 * @method string getAuthenticateType()
 * @method $this withAuthenticateType($value)
 * @method string getUserId()
 * @method $this withUserId($value)
 * @method string getZhimaReturnUrl()
 * @method $this withZhimaReturnUrl($value)
 * @method string getBankCard()
 * @method $this withBankCard($value)
 * @method string getEmail()
 * @method $this withEmail($value)
 * @method string getEmployeeName()
 * @method $this withEmployeeName($value)
 * @method string getEmployeeIdCardNumber()
 * @method $this withEmployeeIdCardNumber($value)
 */
class SaveAuthenticationInfo extends V20180723Rpc
{
    /** @var string */
    public $method = 'POST';
}

/**
 * @method string getIdCardNumber()
 * @method $this withIdCardNumber($value)
 * @method string getAddress()
 * @method $this withAddress($value)
 * @method string getIdCardFrontPage()
 * @method $this withIdCardFrontPage($value)
 * @method string getPhoneNumber()
 * @method $this withPhoneNumber($value)
 * @method string getBusinessLicense()
 * @method $this withBusinessLicense($value)
 * @method string getIdCardBackPage()
 * @method $this withIdCardBackPage($value)
 * @method string getLegalPersonName()
 * @method $this withLegalPersonName($value)
 * @method string getEnterpriseName()
 * @method $this withEnterpriseName($value)
 * @method string getUserId()
 * @method $this withUserId($value)
 * @method string getLoanSubject()
 * @method $this withLoanSubject($value)
 * @method string getZhimaReturnUrl()
 * @method $this withZhimaReturnUrl($value)
 * @method string getSmsIvToken()
 * @method $this withSmsIvToken($value)
 * @method string getBankCard()
 * @method $this withBankCard($value)
 * @method string getEmail()
 * @method $this withEmail($value)
 */
class UpdateEnterpriseCustomInfo extends V20180723Rpc
{
}

/**
 * @method string getUserId()
 * @method $this withUserId($value)
 */
class QueryFundPartyList extends V20180723Rpc
{
}

/**
 * @method string getExtInfo()
 * @method $this withExtInfo($value)
 * @method string getBizId()
 * @method $this withBizId($value)
 * @method string getSceneId()
 * @method $this withSceneId($value)
 * @method string getType()
 * @method $this withType($value)
 * @method string getUserId()
 * @method $this withUserId($value)
 */
class QuerySignResult extends V20180723Rpc
{
}

/**
 * @method string getExtInfo()
 * @method $this withExtInfo($value)
 * @method string getBizId()
 * @method $this withBizId($value)
 * @method string getSceneId()
 * @method $this withSceneId($value)
 * @method string getReturnUrl()
 * @method $this withReturnUrl($value)
 * @method string getUserId()
 * @method $this withUserId($value)
 */
class GetSignContractUrl extends V20180723Rpc
{
}

/**
 * @method string getCreditId()
 * @method $this withCreditId($value)
 * @method string getUserId()
 * @method $this withUserId($value)
 */
class CancelCredit extends V20180723Rpc
{
}

/**
 * @method string getUserId()
 * @method $this withUserId($value)
 */
class QueryTrialRecords extends V20180723Rpc
{
}

/**
 * @method string getNote()
 * @method $this withNote($value)
 * @method string getEnterpriseEmail()
 * @method $this withEnterpriseEmail($value)
 * @method string getContractPhoneNumber()
 * @method $this withContractPhoneNumber($value)
 * @method string getContractName()
 * @method $this withContractName($value)
 * @method string getChannel()
 * @method $this withChannel($value)
 * @method string getEnterpriseName()
 * @method $this withEnterpriseName($value)
 * @method string getUserId()
 * @method $this withUserId($value)
 * @method string getProducts()
 * @method $this withProducts($value)
 * @method string getBudget()
 * @method $this withBudget($value)
 */
class AddTrialRecord extends V20180723Rpc
{
    /** @var string */
    public $method = 'POST';
}

/**
 * @method string getUserId()
 * @method $this withUserId($value)
 */
class AddCustomInfo extends V20180723Rpc
{
}

/**
 * @method string getDownloadUrl()
 * @method $this withDownloadUrl($value)
 * @method string getDigest()
 * @method $this withDigest($value)
 * @method string getViewUrl()
 * @method $this withViewUrl($value)
 * @method string getResultCode()
 * @method $this withResultCode($value)
 * @method string getTransactionId()
 * @method $this withTransactionId($value)
 * @method string getResultDesc()
 * @method $this withResultDesc($value)
 * @method string getTimestamp()
 * @method $this withTimestamp($value)
 */
class SignedPageResult extends V20180723Rpc
{
    /** @var string */
    public $method = 'POST';
}

/**
 * @method string getImageType()
 * @method $this withImageType($value)
 * @method string getSide()
 * @method $this withSide($value)
 * @method string getImageFile()
 * @method $this withImageFile($value)
 * @method string getUserId()
 * @method $this withUserId($value)
 */
class UploadCustomIDImage extends V20180723Rpc
{
    /** @var string */
    public $method = 'POST';
}

/**
 * @method string getCreditId()
 * @method $this withCreditId($value)
 * @method string getReserved()
 * @method $this withReserved($value)
 * @method string getUserId()
 * @method $this withUserId($value)
 */
class SignLoanAgreement extends V20180723Rpc
{
}

/**
 * @method string getCreditId()
 * @method $this withCreditId($value)
 * @method string getSmsIvToken()
 * @method $this withSmsIvToken($value)
 * @method string getUserId()
 * @method $this withUserId($value)
 */
class PayForOrder extends V20180723Rpc
{
}

/**
 * @method string getCreditId()
 * @method $this withCreditId($value)
 * @method string getFundPartyId()
 * @method $this withFundPartyId($value)
 * @method string getReturnUrl()
 * @method $this withReturnUrl($value)
 * @method string getUserId()
 * @method $this withUserId($value)
 */
class GetAuthorizeCreditQuery extends V20180723Rpc
{
}

/**
 * @method string getCreditId()
 * @method $this withCreditId($value)
 * @method string getFundPartyId()
 * @method $this withFundPartyId($value)
 * @method string getUserId()
 * @method $this withUserId($value)
 */
class GetUserInfoAuthorizationAgreement extends V20180723Rpc
{
}

/**
 * @method string getQueryExpression()
 * @method $this withQueryExpression($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getUserId()
 * @method $this withUserId($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 */
class GetCreditRepayList extends V20180723Rpc
{
}

/**
 * @method string getQueryExpression()
 * @method $this withQueryExpression($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getUserId()
 * @method $this withUserId($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 */
class GetCreditList extends V20180723Rpc
{
}

/**
 * @method string getCreditId()
 * @method $this withCreditId($value)
 * @method string getUserId()
 * @method $this withUserId($value)
 */
class GetTradeData extends V20180723Rpc
{
}

/**
 * @method string getCreditId()
 * @method $this withCreditId($value)
 * @method string getFundPartyId()
 * @method $this withFundPartyId($value)
 * @method string getReturnUrl()
 * @method $this withReturnUrl($value)
 * @method string getUserId()
 * @method $this withUserId($value)
 */
class GetLoanAgreement extends V20180723Rpc
{
}

/**
 * @method string getCreditId()
 * @method $this withCreditId($value)
 * @method string getProductId()
 * @method $this withProductId($value)
 * @method string getUserId()
 * @method $this withUserId($value)
 */
class GetRepayPlanTrial extends V20180723Rpc
{
}

/**
 * @method string getBizType()
 * @method $this withBizType($value)
 * @method string getCreditId()
 * @method $this withCreditId($value)
 * @method string getProductId()
 * @method $this withProductId($value)
 * @method string getFundpartyId()
 * @method $this withFundpartyId($value)
 * @method string getBizData()
 * @method $this withBizData($value)
 * @method string getUserId()
 * @method $this withUserId($value)
 */
class ApplyForLoan extends V20180723Rpc
{
}

/**
 * @method string getUserId()
 * @method $this withUserId($value)
 */
class GetZhimaScore extends V20180723Rpc
{
}

/**
 * @method string getIdCardNumber()
 * @method $this withIdCardNumber($value)
 * @method string getAddress()
 * @method $this withAddress($value)
 * @method string getIdCardFrontPage()
 * @method $this withIdCardFrontPage($value)
 * @method string getPhoneNumber()
 * @method $this withPhoneNumber($value)
 * @method string getBusinessLicense()
 * @method $this withBusinessLicense($value)
 * @method string getIdCardBackPage()
 * @method $this withIdCardBackPage($value)
 * @method string getLegalPersonName()
 * @method $this withLegalPersonName($value)
 * @method string getEnterpriseName()
 * @method $this withEnterpriseName($value)
 * @method string getUserId()
 * @method $this withUserId($value)
 * @method string getLoanSubject()
 * @method $this withLoanSubject($value)
 * @method string getZhimaReturnUrl()
 * @method $this withZhimaReturnUrl($value)
 * @method string getBankCard()
 * @method $this withBankCard($value)
 * @method string getEmail()
 * @method $this withEmail($value)
 */
class VerifyCustomer extends V20180723Rpc
{
}

/**
 * @method string getUserId()
 * @method $this withUserId($value)
 */
class GetCustomerVerifyInfo extends V20180723Rpc
{
}

/**
 * @method string getCreditId()
 * @method $this withCreditId($value)
 * @method string getUserId()
 * @method $this withUserId($value)
 */
class GetCreditWithdrawRecord extends V20180723Rpc
{
}

/**
 * @method string getCreditId()
 * @method $this withCreditId($value)
 * @method string getUserId()
 * @method $this withUserId($value)
 */
class GetCreditSignatureInfo extends V20180723Rpc
{
}

/**
 * @method string getCreditId()
 * @method $this withCreditId($value)
 * @method string getUserId()
 * @method $this withUserId($value)
 */
class GetCurrentTermRepayInfo extends V20180723Rpc
{
}

/**
 * @method string getCreditId()
 * @method $this withCreditId($value)
 * @method string getUserId()
 * @method $this withUserId($value)
 */
class GetLoanApplyRecordList extends V20180723Rpc
{
    /** @var string */
    public $method = 'POST';
}

/**
 * @method string getCreditId()
 * @method $this withCreditId($value)
 * @method string getUserId()
 * @method $this withUserId($value)
 */
class GetLatestOverdueRecord extends V20180723Rpc
{
}

/**
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getQueryExpression()
 * @method $this withQueryExpression($value)
 * @method string getUserId()
 * @method $this withUserId($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 */
class GetOverdueRecordList extends V20180723Rpc
{
    /** @var string */
    public $method = 'POST';
}

/**
 * @method string getCreditId()
 * @method $this withCreditId($value)
 * @method string getUserId()
 * @method $this withUserId($value)
 */
class GetCreditDetail extends V20180723Rpc
{
}

/**
 * @method string getCreditId()
 * @method $this withCreditId($value)
 * @method string getUserId()
 * @method $this withUserId($value)
 */
class GetCreditStatus extends V20180723Rpc
{
}

/**
 * @method string getProductId()
 * @method $this withProductId($value)
 * @method string getFundPartyId()
 * @method $this withFundPartyId($value)
 * @method string getUserId()
 * @method $this withUserId($value)
 */
class GetProductDetail extends V20180723Rpc
{
}

/**
 * @method string getCreditId()
 * @method $this withCreditId($value)
 * @method string getFundPartyId()
 * @method $this withFundPartyId($value)
 * @method string getUserId()
 * @method $this withUserId($value)
 */
class GetProductList extends V20180723Rpc
{
}

/**
 * @method string getActionType()
 * @method $this withActionType($value)
 * @method string getUserId()
 * @method $this withUserId($value)
 */
class VerifySMSToken extends V20180723Rpc
{
}

/**
 * @method string getBizType()
 * @method $this withBizType($value)
 * @method string getBizId()
 * @method $this withBizId($value)
 * @method string getDocumentId()
 * @method $this withDocumentId($value)
 * @method string getUserId()
 * @method $this withUserId($value)
 */
class GetDocumentDownloadUrl extends V20180723Rpc
{
}

/**
 * @method string getDocId()
 * @method $this withDocId($value)
 * @method string getDocContent()
 * @method $this withDocContent($value)
 * @method string getSign()
 * @method $this withSign($value)
 * @method string getResultCode()
 * @method $this withResultCode($value)
 * @method string getTime()
 * @method $this withTime($value)
 * @method string getTransactionId()
 * @method $this withTransactionId($value)
 * @method string getResultDesc()
 * @method $this withResultDesc($value)
 */
class SignResultNotify extends V20180723Rpc
{
    /** @var string */
    public $method = 'POST';
}

/**
 * @method string getUserId()
 * @method $this withUserId($value)
 */
class GetCustomStatusInfo extends V20180723Rpc
{
}
