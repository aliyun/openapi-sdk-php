<?php

namespace AlibabaCloud\Companyreg\V20201022;

use AlibabaCloud\Client\Resolver\ApiResolver;

/**
 * @method CheckCopyPayroll checkCopyPayroll(array $options = [])
 * @method CheckSavePayroll checkSavePayroll(array $options = [])
 * @method CheckSavePayrollDetail checkSavePayrollDetail(array $options = [])
 * @method ClearTrailData clearTrailData(array $options = [])
 * @method ConvertFee convertFee(array $options = [])
 * @method ConvertInvoice convertInvoice(array $options = [])
 * @method CopyPayroll copyPayroll(array $options = [])
 * @method DeleteFee deleteFee(array $options = [])
 * @method DeleteInvoice deleteInvoice(array $options = [])
 * @method DeletePayroll deletePayroll(array $options = [])
 * @method GetBalanceSheetInfo getBalanceSheetInfo(array $options = [])
 * @method GetCashFlowInfo getCashFlowInfo(array $options = [])
 * @method GetEnterprisesInfo getEnterprisesInfo(array $options = [])
 * @method GetFee getFee(array $options = [])
 * @method GetHomePage getHomePage(array $options = [])
 * @method GetIncomeStatementInfo getIncomeStatementInfo(array $options = [])
 * @method GetIndustryCommerceInfo getIndustryCommerceInfo(array $options = [])
 * @method GetInitFlow getInitFlow(array $options = [])
 * @method GetInvoiceInfo getInvoiceInfo(array $options = [])
 * @method GetLastMonthInvoiceCount getLastMonthInvoiceCount(array $options = [])
 * @method GetNotice getNotice(array $options = [])
 * @method GetOssSts getOssSts(array $options = [])
 * @method GetPayrollInfo getPayrollInfo(array $options = [])
 * @method GetPayrollSetting getPayrollSetting(array $options = [])
 * @method GetPeriodInfo getPeriodInfo(array $options = [])
 * @method GetQuarterCashFlowInfo getQuarterCashFlowInfo(array $options = [])
 * @method GetQuarterIncomeStatementInfo getQuarterIncomeStatementInfo(array $options = [])
 * @method GetServiceInfo getServiceInfo(array $options = [])
 * @method GetSsoUserInfo getSsoUserInfo(array $options = [])
 * @method GetTaxationCalendar getTaxationCalendar(array $options = [])
 * @method GetTaxationInfo getTaxationInfo(array $options = [])
 * @method GetTaxInfo getTaxInfo(array $options = [])
 * @method GetTypeList getTypeList(array $options = [])
 * @method GetVoucherCount getVoucherCount(array $options = [])
 * @method ListCashJournal listCashJournal(array $options = [])
 * @method ListEnterprises listEnterprises(array $options = [])
 * @method ListInvoice listInvoice(array $options = [])
 * @method ListLastMonthInvoice listLastMonthInvoice(array $options = [])
 * @method ListPayroll listPayroll(array $options = [])
 * @method ListVoucher listVoucher(array $options = [])
 * @method PhotoInvoice photoInvoice(array $options = [])
 * @method PrintAcctgTrans printAcctgTrans(array $options = [])
 * @method RefreshCustomerInfo refreshCustomerInfo(array $options = [])
 * @method SaveOpeningBalanceStatus saveOpeningBalanceStatus(array $options = [])
 * @method SavePayroll savePayroll(array $options = [])
 * @method SavePayrollSetting savePayrollSetting(array $options = [])
 * @method ScanInvoice scanInvoice(array $options = [])
 * @method SendMessage sendMessage(array $options = [])
 * @method UpdateCustomerInfo updateCustomerInfo(array $options = [])
 * @method UpdateFee updateFee(array $options = [])
 * @method UpdateTaxationProcess updateTaxationProcess(array $options = [])
 * @method UpdateTaxInfo updateTaxInfo(array $options = [])
 * @method VerifyTaxSmsCode verifyTaxSmsCode(array $options = [])
 */
class CompanyregApiResolver extends ApiResolver
{
}

class Rpc extends \AlibabaCloud\Client\Resolver\Rpc
{
    /** @var string */
    public $product = 'companyreg';

    /** @var string */
    public $version = '2020-10-22';

    /** @var string */
    public $serviceCode = 'companyreg';
}

/**
 * @method string getPeriod()
 * @method $this withPeriod($value)
 * @method string getUpdateEmployeeFlag()
 * @method $this withUpdateEmployeeFlag($value)
 * @method string getBizId()
 * @method $this withBizId($value)
 */
class CheckCopyPayroll extends Rpc
{

    /** @var string */
    public $method = 'POST';
}

/**
 * @method string getIncome()
 * @method $this withIncome($value)
 * @method string getCorporateHousingAccumulationFund()
 * @method $this withCorporateHousingAccumulationFund($value)
 * @method string getPeriod()
 * @method $this withPeriod($value)
 * @method string getCorporateSocialInsurance()
 * @method $this withCorporateSocialInsurance($value)
 * @method string getIdNo()
 * @method $this withIdNo($value)
 * @method string getEmployeeTime()
 * @method $this withEmployeeTime($value)
 * @method string getPersonHousingAccumulationFund()
 * @method $this withPersonHousingAccumulationFund($value)
 * @method string getUpdateEmployeeFlag()
 * @method $this withUpdateEmployeeFlag($value)
 * @method string getPhone()
 * @method $this withPhone($value)
 * @method string getBizId()
 * @method $this withBizId($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getId()
 * @method $this withId($value)
 * @method string getPersonSocialInsurance()
 * @method $this withPersonSocialInsurance($value)
 */
class CheckSavePayroll extends Rpc
{

    /** @var string */
    public $method = 'POST';
}

/**
 * @method string getIncome()
 * @method $this withIncome($value)
 * @method string getCorporateHousingAccumulationFund()
 * @method $this withCorporateHousingAccumulationFund($value)
 * @method string getPersonHousingAccumulationFund()
 * @method $this withPersonHousingAccumulationFund($value)
 * @method string getPersMedicalInsurance()
 * @method $this withPersMedicalInsurance($value)
 * @method string getCorpUnemploymentInsurance()
 * @method $this withCorpUnemploymentInsurance($value)
 * @method string getId()
 * @method $this withId($value)
 * @method string getPersonSocialInsurance()
 * @method $this withPersonSocialInsurance($value)
 * @method string getPeriod()
 * @method $this withPeriod($value)
 * @method string getCorporateSocialInsurance()
 * @method $this withCorporateSocialInsurance($value)
 * @method string getCorpInjuryInsurance()
 * @method $this withCorpInjuryInsurance($value)
 * @method string getPersPension()
 * @method $this withPersPension($value)
 * @method string getCorpMedicalInsurance()
 * @method $this withCorpMedicalInsurance($value)
 * @method string getIdNo()
 * @method $this withIdNo($value)
 * @method string getEmployeeTime()
 * @method $this withEmployeeTime($value)
 * @method string getUpdateEmployeeFlag()
 * @method $this withUpdateEmployeeFlag($value)
 * @method string getPhone()
 * @method $this withPhone($value)
 * @method string getPersUnemploymentInsurance()
 * @method $this withPersUnemploymentInsurance($value)
 * @method string getBizId()
 * @method $this withBizId($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getCorpPension()
 * @method $this withCorpPension($value)
 * @method string getCorpMaternityInsurance()
 * @method $this withCorpMaternityInsurance($value)
 */
class CheckSavePayrollDetail extends Rpc
{

    /** @var string */
    public $method = 'POST';
}

/**
 * @method string getBizId()
 * @method $this withBizId($value)
 */
class ClearTrailData extends Rpc
{
}

/**
 * @method string getKind()
 * @method $this withKind($value)
 * @method string getUse()
 * @method $this withUse($value)
 * @method string getPayer()
 * @method $this withPayer($value)
 * @method string getPayMethod()
 * @method $this withPayMethod($value)
 * @method string getBizId()
 * @method $this withBizId($value)
 * @method string getId()
 * @method $this withId($value)
 */
class ConvertFee extends Rpc
{

    /** @var string */
    public $method = 'POST';
}

/**
 * @method string getIsFee()
 * @method $this withIsFee($value)
 * @method string getShellMethod()
 * @method $this withShellMethod($value)
 * @method string getKind()
 * @method $this withKind($value)
 * @method string getUse()
 * @method $this withUse($value)
 * @method string getThirdKey()
 * @method $this withThirdKey($value)
 * @method string getPayer()
 * @method $this withPayer($value)
 * @method string getSecondKey()
 * @method $this withSecondKey($value)
 * @method string getPayMethod()
 * @method $this withPayMethod($value)
 * @method string getBuyMethod()
 * @method $this withBuyMethod($value)
 * @method string getFixedAssetType()
 * @method $this withFixedAssetType($value)
 * @method string getFirstKey()
 * @method $this withFirstKey($value)
 * @method string getBizId()
 * @method $this withBizId($value)
 * @method string getId()
 * @method $this withId($value)
 * @method string getBuyTarget()
 * @method $this withBuyTarget($value)
 */
class ConvertInvoice extends Rpc
{

    /** @var string */
    public $method = 'POST';
}

/**
 * @method string getPeriod()
 * @method $this withPeriod($value)
 * @method string getBizId()
 * @method $this withBizId($value)
 */
class CopyPayroll extends Rpc
{

    /** @var string */
    public $method = 'POST';
}

/**
 * @method string getBizId()
 * @method $this withBizId($value)
 * @method string getId()
 * @method $this withId($value)
 */
class DeleteFee extends Rpc
{

    /** @var string */
    public $method = 'POST';
}

/**
 * @method string getBizId()
 * @method $this withBizId($value)
 * @method string getId()
 * @method $this withId($value)
 */
class DeleteInvoice extends Rpc
{

    /** @var string */
    public $method = 'POST';
}

/**
 * @method string getBizId()
 * @method $this withBizId($value)
 * @method string getId()
 * @method $this withId($value)
 */
class DeletePayroll extends Rpc
{

    /** @var string */
    public $method = 'POST';
}

/**
 * @method string getPeriod()
 * @method $this withPeriod($value)
 * @method string getIsReclassification()
 * @method $this withIsReclassification($value)
 * @method string getBizId()
 * @method $this withBizId($value)
 */
class GetBalanceSheetInfo extends Rpc
{
}

/**
 * @method string getPeriod()
 * @method $this withPeriod($value)
 * @method string getBizId()
 * @method $this withBizId($value)
 */
class GetCashFlowInfo extends Rpc
{
}

/**
 * @method string getCreditCode()
 * @method $this withCreditCode($value)
 * @method string getEnterpriseName()
 * @method $this withEnterpriseName($value)
 */
class GetEnterprisesInfo extends Rpc
{
}

/**
 * @method string getBizId()
 * @method $this withBizId($value)
 * @method string getId()
 * @method $this withId($value)
 */
class GetFee extends Rpc
{
}

/**
 * @method string getBizId()
 * @method $this withBizId($value)
 */
class GetHomePage extends Rpc
{
}

/**
 * @method string getPeriod()
 * @method $this withPeriod($value)
 * @method string getBizId()
 * @method $this withBizId($value)
 */
class GetIncomeStatementInfo extends Rpc
{
}

/**
 * @method string getBizId()
 * @method $this withBizId($value)
 */
class GetIndustryCommerceInfo extends Rpc
{
}

/**
 * @method string getBizId()
 * @method $this withBizId($value)
 */
class GetInitFlow extends Rpc
{
}

/**
 * @method string getBizId()
 * @method $this withBizId($value)
 * @method string getId()
 * @method $this withId($value)
 */
class GetInvoiceInfo extends Rpc
{
}

/**
 * @method string getBizId()
 * @method $this withBizId($value)
 */
class GetLastMonthInvoiceCount extends Rpc
{
}

/**
 * @method string getBizId()
 * @method $this withBizId($value)
 */
class GetNotice extends Rpc
{
}

/**
 * @method string getOssKey()
 * @method $this withOssKey($value)
 * @method string getBizId()
 * @method $this withBizId($value)
 */
class GetOssSts extends Rpc
{
}

/**
 * @method string getBizId()
 * @method $this withBizId($value)
 * @method string getId()
 * @method $this withId($value)
 */
class GetPayrollInfo extends Rpc
{
}

/**
 * @method string getBizId()
 * @method $this withBizId($value)
 */
class GetPayrollSetting extends Rpc
{
}

/**
 * @method string getPeriod()
 * @method $this withPeriod($value)
 * @method string getBizId()
 * @method $this withBizId($value)
 */
class GetPeriodInfo extends Rpc
{
}

/**
 * @method string getPeriod()
 * @method $this withPeriod($value)
 * @method string getBizId()
 * @method $this withBizId($value)
 * @method string getIsQuarter()
 * @method $this withIsQuarter($value)
 */
class GetQuarterCashFlowInfo extends Rpc
{
}

/**
 * @method string getPeriod()
 * @method $this withPeriod($value)
 * @method string getBizId()
 * @method $this withBizId($value)
 * @method string getIsQuarter()
 * @method $this withIsQuarter($value)
 */
class GetQuarterIncomeStatementInfo extends Rpc
{
}

/**
 * @method string getPeriod()
 * @method $this withPeriod($value)
 * @method string getBizId()
 * @method $this withBizId($value)
 */
class GetServiceInfo extends Rpc
{
}

/**
 * @method string getOpsAppKey()
 * @method $this withOpsAppKey($value)
 * @method string getToken()
 * @method $this withToken($value)
 */
class GetSsoUserInfo extends Rpc
{
}

/**
 * @method string getBizId()
 * @method $this withBizId($value)
 */
class GetTaxationCalendar extends Rpc
{
}

/**
 * @method string getPeriod()
 * @method $this withPeriod($value)
 * @method string getBizId()
 * @method $this withBizId($value)
 */
class GetTaxationInfo extends Rpc
{
}

/**
 * @method string getCityArea()
 * @method $this withCityArea($value)
 * @method string getBizId()
 * @method $this withBizId($value)
 * @method string getPeriods()
 * @method $this withPeriods($value)
 */
class GetTaxInfo extends Rpc
{
}

/**
 * @method string getBizId()
 * @method $this withBizId($value)
 */
class GetTypeList extends Rpc
{
}

/**
 * @method string getBizId()
 * @method $this withBizId($value)
 * @method string getStartPeriod()
 * @method $this withStartPeriod($value)
 * @method string getEndPeriod()
 * @method $this withEndPeriod($value)
 */
class GetVoucherCount extends Rpc
{
}

/**
 * @method string getPeriod()
 * @method $this withPeriod($value)
 * @method string getBizId()
 * @method $this withBizId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getPageIndex()
 * @method $this withPageIndex($value)
 */
class ListCashJournal extends Rpc
{
}

/**
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getSearchKey()
 * @method $this withSearchKey($value)
 * @method string getCurrentPage()
 * @method $this withCurrentPage($value)
 */
class ListEnterprises extends Rpc
{
}

/**
 * @method string getBizId()
 * @method $this withBizId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getPeriods()
 * @method $this withPeriods($value)
 * @method string getPage()
 * @method $this withPage($value)
 * @method string getKey()
 * @method $this withKey($value)
 */
class ListInvoice extends Rpc
{
}

/**
 * @method string getBizId()
 * @method $this withBizId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getPage()
 * @method $this withPage($value)
 */
class ListLastMonthInvoice extends Rpc
{
}

/**
 * @method string getPeriod()
 * @method $this withPeriod($value)
 * @method string getBizId()
 * @method $this withBizId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getPageIndex()
 * @method $this withPageIndex($value)
 */
class ListPayroll extends Rpc
{
}

/**
 * @method string getPeriod()
 * @method $this withPeriod($value)
 * @method string getPageCount()
 * @method $this withPageCount($value)
 * @method string getCodeSortType()
 * @method $this withCodeSortType($value)
 * @method string getBizId()
 * @method $this withBizId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getText()
 * @method $this withText($value)
 */
class ListVoucher extends Rpc
{
}

/**
 * @method string getUploadedNum()
 * @method $this withUploadedNum($value)
 * @method string getFileUrlList()
 * @method $this withFileUrlList($value)
 * @method string getUploadedStamp()
 * @method $this withUploadedStamp($value)
 * @method string getBizId()
 * @method $this withBizId($value)
 * @method string getFileUrl()
 * @method $this withFileUrl($value)
 * @method string getIsMobile()
 * @method $this withIsMobile($value)
 */
class PhotoInvoice extends Rpc
{
}

/**
 * @method string getShowCustomComments()
 * @method $this withShowCustomComments($value)
 * @method string getPrintStyle()
 * @method $this withPrintStyle($value)
 * @method string getBizId()
 * @method $this withBizId($value)
 * @method string getPrintCount()
 * @method $this withPrintCount($value)
 * @method string getVoucherIds()
 * @method $this withVoucherIds($value)
 */
class PrintAcctgTrans extends Rpc
{
}

/**
 * @method string getBizId()
 * @method $this withBizId($value)
 */
class RefreshCustomerInfo extends Rpc
{

    /** @var string */
    public $method = 'POST';
}

/**
 * @method string getOpeningBalanceStatus()
 * @method $this withOpeningBalanceStatus($value)
 * @method string getBizId()
 * @method $this withBizId($value)
 */
class SaveOpeningBalanceStatus extends Rpc
{

    /** @var string */
    public $method = 'POST';
}

/**
 * @method string getIncome()
 * @method $this withIncome($value)
 * @method string getCorporateHousingAccumulationFund()
 * @method $this withCorporateHousingAccumulationFund($value)
 * @method string getPeriod()
 * @method $this withPeriod($value)
 * @method string getCorporateSocialInsurance()
 * @method $this withCorporateSocialInsurance($value)
 * @method string getIdNo()
 * @method $this withIdNo($value)
 * @method string getEmployeeTime()
 * @method $this withEmployeeTime($value)
 * @method string getPersonHousingAccumulationFund()
 * @method $this withPersonHousingAccumulationFund($value)
 * @method string getPhone()
 * @method $this withPhone($value)
 * @method string getBizId()
 * @method $this withBizId($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getId()
 * @method $this withId($value)
 * @method string getPersonSocialInsurance()
 * @method $this withPersonSocialInsurance($value)
 */
class SavePayroll extends Rpc
{

    /** @var string */
    public $method = 'POST';
}

/**
 * @method string getBizId()
 * @method $this withBizId($value)
 * @method string getPayrollAutoGrantRule()
 * @method $this withPayrollAutoGrantRule($value)
 * @method string getPayrollGrantMode()
 * @method $this withPayrollGrantMode($value)
 */
class SavePayrollSetting extends Rpc
{

    /** @var string */
    public $method = 'POST';
}

/**
 * @method string getDate()
 * @method $this withDate($value)
 * @method string getNo()
 * @method $this withNo($value)
 * @method string getAmount()
 * @method $this withAmount($value)
 * @method string getCode()
 * @method $this withCode($value)
 * @method string getVCode()
 * @method $this withVCode($value)
 * @method string getBizId()
 * @method $this withBizId($value)
 * @method string getInvoiceCode()
 * @method $this withInvoiceCode($value)
 */
class ScanInvoice extends Rpc
{

    /** @var string */
    public $method = 'POST';
}

/**
 * @method string getEventId()
 * @method $this withEventId($value)
 * @method string getParam()
 * @method $this withParam($value)
 * @method string getBizId()
 * @method $this withBizId($value)
 */
class SendMessage extends Rpc
{

    /** @var string */
    public $method = 'POST';
}

/**
 * @method string getContactTelInfo()
 * @method $this withContactTelInfo($value)
 * @method string getTaxPreparerName()
 * @method $this withTaxPreparerName($value)
 * @method string getTaxAgentSecret()
 * @method $this withTaxAgentSecret($value)
 * @method string getLegalRepresentative()
 * @method $this withLegalRepresentative($value)
 * @method string getTaxPreparerPassword()
 * @method $this withTaxPreparerPassword($value)
 * @method string getEstablishmentDate()
 * @method $this withEstablishmentDate($value)
 * @method string getContactName()
 * @method $this withContactName($value)
 * @method string getBizScope()
 * @method $this withBizScope($value)
 * @method string getIncomeDeclarationPassword()
 * @method $this withIncomeDeclarationPassword($value)
 * @method string getCompanyType()
 * @method $this withCompanyType($value)
 * @method string getCorpAddress()
 * @method $this withCorpAddress($value)
 * @method string getBizId()
 * @method $this withBizId($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getIsRefreshInfo()
 * @method $this withIsRefreshInfo($value)
 * @method string getRegisteredCapital()
 * @method $this withRegisteredCapital($value)
 * @method string getOperatingPeriod()
 * @method $this withOperatingPeriod($value)
 */
class UpdateCustomerInfo extends Rpc
{

    /** @var string */
    public $method = 'POST';
}

/**
 * @method string getKind()
 * @method $this withKind($value)
 * @method string getUse()
 * @method $this withUse($value)
 * @method string getBaseTotalAmount()
 * @method $this withBaseTotalAmount($value)
 * @method string getPayer()
 * @method $this withPayer($value)
 * @method string getSecondKey()
 * @method $this withSecondKey($value)
 * @method string getPayMethod()
 * @method $this withPayMethod($value)
 * @method string getFirstKey()
 * @method $this withFirstKey($value)
 * @method string getBizId()
 * @method $this withBizId($value)
 * @method string getFeeType()
 * @method $this withFeeType($value)
 * @method string getId()
 * @method $this withId($value)
 */
class UpdateFee extends Rpc
{

    /** @var string */
    public $method = 'POST';
}

/**
 * @method string getPeriod()
 * @method $this withPeriod($value)
 * @method string getBizId()
 * @method $this withBizId($value)
 * @method string getTargetProcess()
 * @method $this withTargetProcess($value)
 */
class UpdateTaxationProcess extends Rpc
{

    /** @var string */
    public $method = 'POST';
}

/**
 * @method string getUpdatedTaxInfo()
 * @method $this withUpdatedTaxInfo($value)
 * @method string getBizId()
 * @method $this withBizId($value)
 */
class UpdateTaxInfo extends Rpc
{

    /** @var string */
    public $method = 'POST';
}

/**
 * @method string getSmsCode()
 * @method $this withSmsCode($value)
 * @method string getBizId()
 * @method $this withBizId($value)
 */
class VerifyTaxSmsCode extends Rpc
{
}
