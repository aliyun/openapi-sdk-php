<?php

namespace AlibabaCloud\Cas\V20180813;

use AlibabaCloud\Client\Resolver\ApiResolver;

/**
 * @method DescribeRenewOrder describeRenewOrder(array $options = [])
 * @method UntagResources untagResources(array $options = [])
 * @method TagResources tagResources(array $options = [])
 * @method ListTagResources listTagResources(array $options = [])
 * @method ListTagKeys listTagKeys(array $options = [])
 * @method DescribeSignatureProductState describeSignatureProductState(array $options = [])
 * @method DescribeOrderRefundRecord describeOrderRefundRecord(array $options = [])
 * @method CreateOrderRefundRecord createOrderRefundRecord(array $options = [])
 * @method DescribeLocationList describeLocationList(array $options = [])
 * @method DeleteOrder deleteOrder(array $options = [])
 * @method CreateCooperationOrder createCooperationOrder(array $options = [])
 * @method DescribeStsAuthStatus describeStsAuthStatus(array $options = [])
 * @method DescribeSignatureTradeList describeSignatureTradeList(array $options = [])
 * @method DescribeSignatureTradeDetail describeSignatureTradeDetail(array $options = [])
 * @method DescribeSignatureStatistics describeSignatureStatistics(array $options = [])
 * @method DescribeSignatureCapacity describeSignatureCapacity(array $options = [])
 * @method DescribeOSSUploadInfo describeOSSUploadInfo(array $options = [])
 * @method DescribeOSSDownloadInfo describeOSSDownloadInfo(array $options = [])
 * @method DescribeOrderMaterial describeOrderMaterial(array $options = [])
 * @method DescribeOrderList describeOrderList(array $options = [])
 * @method DescribeOrderDocument describeOrderDocument(array $options = [])
 * @method DescribeOrderDetail describeOrderDetail(array $options = [])
 * @method DescribeOrderAuditFailRecord describeOrderAuditFailRecord(array $options = [])
 * @method DescribeHelpList describeHelpList(array $options = [])
 * @method DescribeExpectationResult describeExpectationResult(array $options = [])
 * @method DescribeDownloadDomainVerifyConfiguration describeDownloadDomainVerifyConfiguration(array $options = [])
 * @method DescribeDownloadCertificate describeDownloadCertificate(array $options = [])
 * @method DescribeDomainVerifyInfo describeDomainVerifyInfo(array $options = [])
 * @method DescribeDomainVerifyConfigurationStatus describeDomainVerifyConfigurationStatus(array $options = [])
 * @method DescribeDeploymentRegionList describeDeploymentRegionList(array $options = [])
 * @method DescribeDeploymentProduct describeDeploymentProduct(array $options = [])
 * @method DescribeDeploymentDomainList describeDeploymentDomainList(array $options = [])
 * @method DescribeDeploymentDetail describeDeploymentDetail(array $options = [])
 * @method DescribeCertificateStatusCount describeCertificateStatusCount(array $options = [])
 * @method DescribeCertificateList describeCertificateList(array $options = [])
 * @method DescribeCertificateDetail describeCertificateDetail(array $options = [])
 * @method DescribeCertificateBrandList describeCertificateBrandList(array $options = [])
 * @method DeleteCertificate deleteCertificate(array $options = [])
 * @method CreateWebSignature createWebSignature(array $options = [])
 * @method CreateUnDeployment createUnDeployment(array $options = [])
 * @method CreateSignaturePeopleCertificate createSignaturePeopleCertificate(array $options = [])
 * @method CreateSignatureDocument createSignatureDocument(array $options = [])
 * @method CreateSignature createSignature(array $options = [])
 * @method CreateOrderRevoke createOrderRevoke(array $options = [])
 * @method CreateOrderMaterial createOrderMaterial(array $options = [])
 * @method CreateOrderDocument createOrderDocument(array $options = [])
 * @method CreateOrderCancel createOrderCancel(array $options = [])
 * @method CreateOrderAudit createOrderAudit(array $options = [])
 * @method CreateFilingSignatureDocument createFilingSignatureDocument(array $options = [])
 * @method CreateDomainVerifyConfigurationStatus createDomainVerifyConfigurationStatus(array $options = [])
 * @method CreateDeployment createDeployment(array $options = [])
 * @method CreateCertificateName createCertificateName(array $options = [])
 * @method CreateCertificate createCertificate(array $options = [])
 * @method CreateAliDnsRecordId createAliDnsRecordId(array $options = [])
 */
class CasApiResolver extends ApiResolver
{
}

class Rpc extends \AlibabaCloud\Client\Resolver\Rpc
{
    /** @var string */
    public $product = 'cas';

    /** @var string */
    public $version = '2018-08-13';

    /** @var string */
    public $method = 'POST';

    /** @var string */
    public $serviceCode = 'cas_esign_fdd';
}

/**
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getOrderId()
 * @method $this withOrderId($value)
 */
class DescribeRenewOrder extends Rpc
{
}

/**
 * @method string getAll()
 * @method $this withAll($value)
 * @method array getResourceId()
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method array getTagKey()
 * @method string getResourceType()
 * @method $this withResourceType($value)
 */
class UntagResources extends Rpc
{

    /**
     * @param array $resourceId
     *
     * @return $this
     */
    public function withResourceId(array $resourceId)
    {
        $this->data['ResourceId'] = $resourceId;
        foreach ($resourceId as $i => $iValue) {
            $this->options['query']['ResourceId.' . ($i + 1)] = $iValue;
        }

        return $this;
    }

    /**
     * @param array $tagKey
     *
     * @return $this
     */
    public function withTagKey(array $tagKey)
    {
        $this->data['TagKey'] = $tagKey;
        foreach ($tagKey as $i => $iValue) {
            $this->options['query']['TagKey.' . ($i + 1)] = $iValue;
        }

        return $this;
    }
}

/**
 * @method array getResourceId()
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getScope()
 * @method $this withScope($value)
 * @method string getTagOwnerUid()
 * @method $this withTagOwnerUid($value)
 * @method string getTagOwnerBid()
 * @method $this withTagOwnerBid($value)
 * @method array getTag()
 * @method string getResourceType()
 * @method $this withResourceType($value)
 */
class TagResources extends Rpc
{

    /**
     * @param array $resourceId
     *
     * @return $this
     */
    public function withResourceId(array $resourceId)
    {
        $this->data['ResourceId'] = $resourceId;
        foreach ($resourceId as $i => $iValue) {
            $this->options['query']['ResourceId.' . ($i + 1)] = $iValue;
        }

        return $this;
    }

    /**
     * @param array $tag
     *
     * @return $this
     */
    public function withTag(array $tag)
    {
        $this->data['Tag'] = $tag;
        foreach ($tag as $depth1 => $depth1Value) {
            $this->options['query']['Tag.' . ($depth1 + 1) . '.Value'] = $depth1Value['Value'];
            $this->options['query']['Tag.' . ($depth1 + 1) . '.Key'] = $depth1Value['Key'];
        }

        return $this;
    }
}

/**
 * @method array getResourceId()
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getNextToken()
 * @method $this withNextToken($value)
 * @method array getTag()
 * @method string getResourceType()
 * @method $this withResourceType($value)
 */
class ListTagResources extends Rpc
{

    /**
     * @param array $resourceId
     *
     * @return $this
     */
    public function withResourceId(array $resourceId)
    {
        $this->data['ResourceId'] = $resourceId;
        foreach ($resourceId as $i => $iValue) {
            $this->options['query']['ResourceId.' . ($i + 1)] = $iValue;
        }

        return $this;
    }

    /**
     * @param array $tag
     *
     * @return $this
     */
    public function withTag(array $tag)
    {
        $this->data['Tag'] = $tag;
        foreach ($tag as $depth1 => $depth1Value) {
            $this->options['query']['Tag.' . ($depth1 + 1) . '.Value'] = $depth1Value['Value'];
            $this->options['query']['Tag.' . ($depth1 + 1) . '.Key'] = $depth1Value['Key'];
        }

        return $this;
    }
}

/**
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getCurrentPage()
 * @method $this withCurrentPage($value)
 * @method string getResourceType()
 * @method $this withResourceType($value)
 */
class ListTagKeys extends Rpc
{
}

/**
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 */
class DescribeSignatureProductState extends Rpc
{
}

/**
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 */
class DescribeOrderRefundRecord extends Rpc
{
}

/**
 * @method string getReason()
 * @method $this withReason($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getOrderId()
 * @method $this withOrderId($value)
 */
class CreateOrderRefundRecord extends Rpc
{
}

/**
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getLang()
 * @method $this withLang($value)
 */
class DescribeLocationList extends Rpc
{
}

/**
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getOrderId()
 * @method $this withOrderId($value)
 * @method string getLang()
 * @method $this withLang($value)
 */
class DeleteOrder extends Rpc
{
}

/**
 * @method string getProductCode()
 * @method $this withProductCode($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getDomain()
 * @method $this withDomain($value)
 * @method string getFrom()
 * @method $this withFrom($value)
 * @method string getLang()
 * @method $this withLang($value)
 */
class CreateCooperationOrder extends Rpc
{
}

/**
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getCloudProduct()
 * @method $this withCloudProduct($value)
 * @method string getLang()
 * @method $this withLang($value)
 */
class DescribeStsAuthStatus extends Rpc
{
}

/**
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getShowSize()
 * @method $this withShowSize($value)
 * @method string getSearchType()
 * @method $this withSearchType($value)
 * @method string getCurrentPage()
 * @method $this withCurrentPage($value)
 * @method string getLang()
 * @method $this withLang($value)
 * @method string getSearchValue()
 * @method $this withSearchValue($value)
 */
class DescribeSignatureTradeList extends Rpc
{
}

/**
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getLang()
 * @method $this withLang($value)
 * @method string getTransactionId()
 * @method $this withTransactionId($value)
 */
class DescribeSignatureTradeDetail extends Rpc
{
}

/**
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getLang()
 * @method $this withLang($value)
 */
class DescribeSignatureStatistics extends Rpc
{
}

/**
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getLang()
 * @method $this withLang($value)
 */
class DescribeSignatureCapacity extends Rpc
{
}

/**
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getOrderId()
 * @method $this withOrderId($value)
 * @method string getDocumentType()
 * @method $this withDocumentType($value)
 * @method string getLang()
 * @method $this withLang($value)
 */
class DescribeOSSUploadInfo extends Rpc
{
}

/**
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getOssKey()
 * @method $this withOssKey($value)
 * @method string getLang()
 * @method $this withLang($value)
 */
class DescribeOSSDownloadInfo extends Rpc
{
}

/**
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getOrderId()
 * @method $this withOrderId($value)
 * @method string getLang()
 * @method $this withLang($value)
 */
class DescribeOrderMaterial extends Rpc
{
}

/**
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getShowSize()
 * @method $this withShowSize($value)
 * @method string getBrandId()
 * @method $this withBrandId($value)
 * @method string getCurrentPage()
 * @method $this withCurrentPage($value)
 * @method array getTag()
 * @method string getKeyword()
 * @method $this withKeyword($value)
 * @method string getLang()
 * @method $this withLang($value)
 * @method string getStatus()
 * @method $this withStatus($value)
 */
class DescribeOrderList extends Rpc
{

    /**
     * @param array $tag
     *
     * @return $this
     */
    public function withTag(array $tag)
    {
        $this->data['Tag'] = $tag;
        foreach ($tag as $depth1 => $depth1Value) {
            $this->options['query']['Tag.' . ($depth1 + 1) . '.Value'] = $depth1Value['Value'];
            $this->options['query']['Tag.' . ($depth1 + 1) . '.Key'] = $depth1Value['Key'];
        }

        return $this;
    }
}

/**
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getOrderId()
 * @method $this withOrderId($value)
 * @method string getType()
 * @method $this withType($value)
 * @method string getLang()
 * @method $this withLang($value)
 */
class DescribeOrderDocument extends Rpc
{
}

/**
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getOrderId()
 * @method $this withOrderId($value)
 * @method string getLang()
 * @method $this withLang($value)
 */
class DescribeOrderDetail extends Rpc
{
}

/**
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getOrderId()
 * @method $this withOrderId($value)
 * @method string getLang()
 * @method $this withLang($value)
 */
class DescribeOrderAuditFailRecord extends Rpc
{
}

/**
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getCategory()
 * @method $this withCategory($value)
 * @method string getLang()
 * @method $this withLang($value)
 */
class DescribeHelpList extends Rpc
{
}

/**
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getOrderId()
 * @method $this withOrderId($value)
 * @method string getExpectationType()
 * @method $this withExpectationType($value)
 * @method string getLang()
 * @method $this withLang($value)
 */
class DescribeExpectationResult extends Rpc
{
}

/**
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getOrderId()
 * @method $this withOrderId($value)
 * @method string getLang()
 * @method $this withLang($value)
 */
class DescribeDownloadDomainVerifyConfiguration extends Rpc
{
}

/**
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getServerType()
 * @method $this withServerType($value)
 * @method string getCertificateId()
 * @method $this withCertificateId($value)
 * @method string getLang()
 * @method $this withLang($value)
 */
class DescribeDownloadCertificate extends Rpc
{
}

/**
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getOrderId()
 * @method $this withOrderId($value)
 * @method string getLang()
 * @method $this withLang($value)
 */
class DescribeDomainVerifyInfo extends Rpc
{
}

/**
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getOrderId()
 * @method $this withOrderId($value)
 * @method string getLang()
 * @method $this withLang($value)
 */
class DescribeDomainVerifyConfigurationStatus extends Rpc
{
}

/**
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getCertificateId()
 * @method $this withCertificateId($value)
 * @method string getCloudProduct()
 * @method $this withCloudProduct($value)
 * @method string getLang()
 * @method $this withLang($value)
 */
class DescribeDeploymentRegionList extends Rpc
{
}

/**
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getCertificateId()
 * @method $this withCertificateId($value)
 * @method string getLang()
 * @method $this withLang($value)
 */
class DescribeDeploymentProduct extends Rpc
{
}

/**
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getCertificateId()
 * @method $this withCertificateId($value)
 * @method string getCloudProduct()
 * @method $this withCloudProduct($value)
 * @method string getLang()
 * @method $this withLang($value)
 */
class DescribeDeploymentDomainList extends Rpc
{
}

/**
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getCertificateId()
 * @method $this withCertificateId($value)
 * @method string getLang()
 * @method $this withLang($value)
 */
class DescribeDeploymentDetail extends Rpc
{
}

/**
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method array getTag()
 * @method string getLang()
 * @method $this withLang($value)
 */
class DescribeCertificateStatusCount extends Rpc
{

    /**
     * @param array $tag
     *
     * @return $this
     */
    public function withTag(array $tag)
    {
        $this->data['Tag'] = $tag;
        foreach ($tag as $depth1 => $depth1Value) {
            $this->options['query']['Tag.' . ($depth1 + 1) . '.Value'] = $depth1Value['Value'];
            $this->options['query']['Tag.' . ($depth1 + 1) . '.Key'] = $depth1Value['Key'];
        }

        return $this;
    }
}

/**
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getShowSize()
 * @method $this withShowSize($value)
 * @method string getCurrentPage()
 * @method $this withCurrentPage($value)
 * @method array getTag()
 * @method string getLang()
 * @method $this withLang($value)
 * @method string getKeyword()
 * @method $this withKeyword($value)
 * @method string getStatus()
 * @method $this withStatus($value)
 */
class DescribeCertificateList extends Rpc
{

    /**
     * @param array $tag
     *
     * @return $this
     */
    public function withTag(array $tag)
    {
        $this->data['Tag'] = $tag;
        foreach ($tag as $depth1 => $depth1Value) {
            $this->options['query']['Tag.' . ($depth1 + 1) . '.Value'] = $depth1Value['Value'];
            $this->options['query']['Tag.' . ($depth1 + 1) . '.Key'] = $depth1Value['Key'];
        }

        return $this;
    }
}

/**
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getCertificateId()
 * @method $this withCertificateId($value)
 * @method string getLang()
 * @method $this withLang($value)
 */
class DescribeCertificateDetail extends Rpc
{
}

/**
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getLang()
 * @method $this withLang($value)
 */
class DescribeCertificateBrandList extends Rpc
{
}

/**
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getCertificateId()
 * @method $this withCertificateId($value)
 * @method string getLang()
 * @method $this withLang($value)
 */
class DeleteCertificate extends Rpc
{
}

/**
 * @method string getQuantity()
 * @method $this withQuantity($value)
 * @method string getHandSignImg()
 * @method $this withHandSignImg($value)
 * @method string getDocId()
 * @method $this withDocId($value)
 * @method string getCustomApi()
 * @method $this withCustomApi($value)
 * @method string getPositionPage()
 * @method $this withPositionPage($value)
 * @method string getDocTitle()
 * @method $this withDocTitle($value)
 * @method string getPositionX()
 * @method $this withPositionX($value)
 * @method string getPositionY()
 * @method $this withPositionY($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getPeopleId()
 * @method $this withPeopleId($value)
 * @method string getPositionType()
 * @method $this withPositionType($value)
 * @method string getSignKeyword()
 * @method $this withSignKeyword($value)
 * @method string getNotifyUrl()
 * @method $this withNotifyUrl($value)
 * @method string getValidity()
 * @method $this withValidity($value)
 * @method string getReturnUrl()
 * @method $this withReturnUrl($value)
 * @method string getLang()
 * @method $this withLang($value)
 * @method string getKeywordStrategy()
 * @method $this withKeywordStrategy($value)
 */
class CreateWebSignature extends Rpc
{
}

/**
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getDeploymentId()
 * @method $this withDeploymentId($value)
 * @method string getLang()
 * @method $this withLang($value)
 */
class CreateUnDeployment extends Rpc
{
}

/**
 * @method string getPeopleName()
 * @method $this withPeopleName($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getMobile()
 * @method $this withMobile($value)
 * @method string getIdentityNumber()
 * @method $this withIdentityNumber($value)
 * @method string getLang()
 * @method $this withLang($value)
 * @method string getEmail()
 * @method $this withEmail($value)
 */
class CreateSignaturePeopleCertificate extends Rpc
{
}

/**
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getDocContent()
 * @method string getLang()
 * @method $this withLang($value)
 * @method string getDocTitle()
 * @method $this withDocTitle($value)
 */
class CreateSignatureDocument extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDocContent($value)
    {
        $this->data['DocContent'] = $value;
        $this->options['form_params']['DocContent'] = $value;

        return $this;
    }
}

/**
 * @method string getIconId()
 * @method $this withIconId($value)
 * @method string getQuantity()
 * @method $this withQuantity($value)
 * @method string getHandSignImg()
 * @method $this withHandSignImg($value)
 * @method string getDocId()
 * @method $this withDocId($value)
 * @method string getCustomApi()
 * @method $this withCustomApi($value)
 * @method string getPositionPage()
 * @method $this withPositionPage($value)
 * @method string getDocTitle()
 * @method $this withDocTitle($value)
 * @method string getPositionX()
 * @method $this withPositionX($value)
 * @method string getPositionY()
 * @method $this withPositionY($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getPeopleId()
 * @method $this withPeopleId($value)
 * @method string getPositionType()
 * @method $this withPositionType($value)
 * @method string getSignKeyword()
 * @method $this withSignKeyword($value)
 * @method string getNotifyUrl()
 * @method $this withNotifyUrl($value)
 * @method string getValidity()
 * @method $this withValidity($value)
 * @method string getReturnUrl()
 * @method $this withReturnUrl($value)
 * @method string getLang()
 * @method $this withLang($value)
 * @method string getKeywordStrategy()
 * @method $this withKeywordStrategy($value)
 */
class CreateSignature extends Rpc
{
}

/**
 * @method string getReason()
 * @method $this withReason($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getOrderId()
 * @method $this withOrderId($value)
 * @method string getLang()
 * @method $this withLang($value)
 */
class CreateOrderRevoke extends Rpc
{
}

/**
 * @method string getLeaderName()
 * @method $this withLeaderName($value)
 * @method string getCity()
 * @method $this withCity($value)
 * @method string getCountryCode()
 * @method $this withCountryCode($value)
 * @method string getLeaderEmail()
 * @method $this withLeaderEmail($value)
 * @method string getCompanyAddress()
 * @method $this withCompanyAddress($value)
 * @method string getCompanyCode()
 * @method $this withCompanyCode($value)
 * @method string getPersonEmail()
 * @method $this withPersonEmail($value)
 * @method string getProvince()
 * @method $this withProvince($value)
 * @method string getDomainAuthType()
 * @method $this withDomainAuthType($value)
 * @method string getLeaderPhone()
 * @method $this withLeaderPhone($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getCsrContent()
 * @method $this withCsrContent($value)
 * @method string getLang()
 * @method $this withLang($value)
 * @method string getPersonName()
 * @method $this withPersonName($value)
 * @method string getPersonIdCardNumber()
 * @method $this withPersonIdCardNumber($value)
 * @method string getOrderId()
 * @method $this withOrderId($value)
 * @method string getLeaderTitle()
 * @method $this withLeaderTitle($value)
 * @method string getPersonTitle()
 * @method $this withPersonTitle($value)
 * @method string getPostCode()
 * @method $this withPostCode($value)
 * @method string getCreateCsr()
 * @method $this withCreateCsr($value)
 * @method string getPersonPhone()
 * @method $this withPersonPhone($value)
 * @method string getCompanyName()
 * @method $this withCompanyName($value)
 * @method string getCompanyPhone()
 * @method $this withCompanyPhone($value)
 * @method string getCompanyType()
 * @method $this withCompanyType($value)
 * @method string getDomain()
 * @method $this withDomain($value)
 * @method string getPersonDepartment()
 * @method $this withPersonDepartment($value)
 */
class CreateOrderMaterial extends Rpc
{
}

/**
 * @method string getOssKey()
 * @method $this withOssKey($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getOrderId()
 * @method $this withOrderId($value)
 * @method string getDocumentType()
 * @method $this withDocumentType($value)
 * @method string getLang()
 * @method $this withLang($value)
 * @method string getExtName()
 * @method $this withExtName($value)
 */
class CreateOrderDocument extends Rpc
{
}

/**
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getOrderId()
 * @method $this withOrderId($value)
 * @method string getLang()
 * @method $this withLang($value)
 */
class CreateOrderCancel extends Rpc
{
}

/**
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getOrderId()
 * @method $this withOrderId($value)
 * @method string getLang()
 * @method $this withLang($value)
 * @method string getType()
 * @method $this withType($value)
 */
class CreateOrderAudit extends Rpc
{
}

/**
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getDocId()
 * @method $this withDocId($value)
 * @method string getLang()
 * @method $this withLang($value)
 */
class CreateFilingSignatureDocument extends Rpc
{
}

/**
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getOrderId()
 * @method $this withOrderId($value)
 * @method string getLang()
 * @method $this withLang($value)
 * @method string getType()
 * @method $this withType($value)
 */
class CreateDomainVerifyConfigurationStatus extends Rpc
{
}

/**
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getCertificateId()
 * @method $this withCertificateId($value)
 * @method string getDomain()
 * @method $this withDomain($value)
 * @method string getCloudProduct()
 * @method $this withCloudProduct($value)
 * @method string getLang()
 * @method $this withLang($value)
 * @method string getRegion()
 * @method $this withRegion($value)
 */
class CreateDeployment extends Rpc
{
}

/**
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getCertificateId()
 * @method $this withCertificateId($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getLang()
 * @method $this withLang($value)
 */
class CreateCertificateName extends Rpc
{
}

/**
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getCert()
 * @method $this withCert($value)
 * @method string getLang()
 * @method $this withLang($value)
 * @method string getKey()
 * @method $this withKey($value)
 */
class CreateCertificate extends Rpc
{
}

/**
 * @method string getRecordId()
 * @method $this withRecordId($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getOrderId()
 * @method $this withOrderId($value)
 * @method string getLang()
 * @method $this withLang($value)
 */
class CreateAliDnsRecordId extends Rpc
{
}
