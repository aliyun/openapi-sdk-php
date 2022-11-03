<?php

namespace AlibabaCloud\Cas\V20200407;

use AlibabaCloud\Client\Resolver\ApiResolver;

/**
 * @method CancelCertificateForPackageRequest cancelCertificateForPackageRequest(array $options = [])
 * @method CancelOrderRequest cancelOrderRequest(array $options = [])
 * @method CreateCertificateForPackageRequest createCertificateForPackageRequest(array $options = [])
 * @method CreateCertificateRequest createCertificateRequest(array $options = [])
 * @method CreateCertificateWithCsrRequest createCertificateWithCsrRequest(array $options = [])
 * @method CreateWHCertificateWithExtension createWHCertificateWithExtension(array $options = [])
 * @method CreateWHClientCertificate createWHClientCertificate(array $options = [])
 * @method Decrypt decrypt(array $options = [])
 * @method DeleteCertificateRequest deleteCertificateRequest(array $options = [])
 * @method DeletePCACert deletePCACert(array $options = [])
 * @method DescribeCertificateState describeCertificateState(array $options = [])
 * @method DescribePackageState describePackageState(array $options = [])
 * @method Encrypt encrypt(array $options = [])
 * @method ListCert listCert(array $options = [])
 * @method ListCertWarehouse listCertWarehouse(array $options = [])
 * @method ListUserCertificateOrder listUserCertificateOrder(array $options = [])
 * @method RenewCertificateOrderForPackageRequest renewCertificateOrderForPackageRequest(array $options = [])
 * @method RevokeWHClientCertificate revokeWHClientCertificate(array $options = [])
 * @method Sign sign(array $options = [])
 * @method UploadPCACert uploadPCACert(array $options = [])
 * @method Verify verify(array $options = [])
 */
class CasApiResolver extends ApiResolver
{
}

class Rpc extends \AlibabaCloud\Client\Resolver\Rpc
{
    /** @var string */
    public $product = 'cas';

    /** @var string */
    public $version = '2020-04-07';

    /** @var string */
    public $method = 'POST';
}

/**
 * @method string getOrderId()
 * @method $this withOrderId($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 */
class CancelCertificateForPackageRequest extends Rpc
{
}

/**
 * @method string getOrderId()
 * @method $this withOrderId($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 */
class CancelOrderRequest extends Rpc
{
}

/**
 * @method string getProductCode()
 * @method $this withProductCode($value)
 * @method string getCsr()
 * @method $this withCsr($value)
 * @method string getValidateType()
 * @method $this withValidateType($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getEmail()
 * @method $this withEmail($value)
 * @method string getPhone()
 * @method $this withPhone($value)
 * @method string getCompanyName()
 * @method $this withCompanyName($value)
 * @method string getDomain()
 * @method $this withDomain($value)
 * @method string getUsername()
 * @method $this withUsername($value)
 */
class CreateCertificateForPackageRequest extends Rpc
{
}

/**
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getProductCode()
 * @method $this withProductCode($value)
 * @method string getUsername()
 * @method $this withUsername($value)
 * @method string getPhone()
 * @method $this withPhone($value)
 * @method string getEmail()
 * @method $this withEmail($value)
 * @method string getDomain()
 * @method $this withDomain($value)
 * @method string getValidateType()
 * @method $this withValidateType($value)
 */
class CreateCertificateRequest extends Rpc
{
}

/**
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getCsr()
 * @method $this withCsr($value)
 * @method string getProductCode()
 * @method $this withProductCode($value)
 * @method string getUsername()
 * @method $this withUsername($value)
 * @method string getPhone()
 * @method $this withPhone($value)
 * @method string getEmail()
 * @method $this withEmail($value)
 * @method string getValidateType()
 * @method $this withValidateType($value)
 */
class CreateCertificateWithCsrRequest extends Rpc
{
}

/**
 * @method string getAppendCrl()
 * @method $this withAppendCrl($value)
 * @method string getCountryCode()
 * @method $this withCountryCode($value)
 * @method string getCommonName()
 * @method $this withCommonName($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getCertType()
 * @method $this withCertType($value)
 * @method string getState()
 * @method $this withState($value)
 * @method string getCsrPemString()
 * @method $this withCsrPemString($value)
 * @method string getAlgorithmKeySize()
 * @method $this withAlgorithmKeySize($value)
 * @method string getAfterTime()
 * @method $this withAfterTime($value)
 * @method string getSans()
 * @method $this withSans($value)
 * @method string getLocality()
 * @method $this withLocality($value)
 * @method string getBasicConstraintsCritical()
 * @method $this withBasicConstraintsCritical($value)
 * @method string getAliasName()
 * @method $this withAliasName($value)
 * @method string getOrganization()
 * @method $this withOrganization($value)
 * @method string getBeforeTime()
 * @method $this withBeforeTime($value)
 * @method string getParentIdentifier()
 * @method $this withParentIdentifier($value)
 * @method string getOrganizationUnit()
 * @method $this withOrganizationUnit($value)
 */
class CreateWHCertificateWithExtension extends Rpc
{
}

/**
 * @method string getCsr()
 * @method $this withCsr($value)
 * @method string getCommonName()
 * @method $this withCommonName($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getSanValue()
 * @method $this withSanValue($value)
 * @method string getAlgorithm()
 * @method $this withAlgorithm($value)
 * @method string getAfterTime()
 * @method $this withAfterTime($value)
 * @method string getSanType()
 * @method $this withSanType($value)
 * @method string getDays()
 * @method $this withDays($value)
 * @method string getBeforeTime()
 * @method $this withBeforeTime($value)
 * @method string getParentIdentifier()
 * @method $this withParentIdentifier($value)
 */
class CreateWHClientCertificate extends Rpc
{
}

/**
 * @method string getMessageType()
 * @method $this withMessageType($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getCertIdentifier()
 * @method $this withCertIdentifier($value)
 * @method string getAlgorithm()
 * @method $this withAlgorithm($value)
 * @method string getCiphertextBlob()
 * @method $this withCiphertextBlob($value)
 */
class Decrypt extends Rpc
{
}

/**
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getOrderId()
 * @method $this withOrderId($value)
 */
class DeleteCertificateRequest extends Rpc
{
}

/**
 * @method string getIdentifier()
 * @method $this withIdentifier($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 */
class DeletePCACert extends Rpc
{
}

/**
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getOrderId()
 * @method $this withOrderId($value)
 */
class DescribeCertificateState extends Rpc
{
}

/**
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getProductCode()
 * @method $this withProductCode($value)
 */
class DescribePackageState extends Rpc
{
}

/**
 * @method string getMessageType()
 * @method $this withMessageType($value)
 * @method string getPlaintext()
 * @method $this withPlaintext($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getCertIdentifier()
 * @method $this withCertIdentifier($value)
 * @method string getAlgorithm()
 * @method $this withAlgorithm($value)
 */
class Encrypt extends Rpc
{
}

/**
 * @method string getShowSize()
 * @method $this withShowSize($value)
 * @method string getCurrentPage()
 * @method $this withCurrentPage($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getWarehouseId()
 * @method $this withWarehouseId($value)
 * @method string getKeyWord()
 * @method $this withKeyWord($value)
 * @method string getStatus()
 * @method $this withStatus($value)
 */
class ListCert extends Rpc
{
}

/**
 * @method string getShowSize()
 * @method $this withShowSize($value)
 * @method string getCurrentPage()
 * @method $this withCurrentPage($value)
 * @method string getType()
 * @method $this withType($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getName()
 * @method $this withName($value)
 */
class ListCertWarehouse extends Rpc
{
}

/**
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getKeyword()
 * @method $this withKeyword($value)
 * @method string getShowSize()
 * @method $this withShowSize($value)
 * @method string getCurrentPage()
 * @method $this withCurrentPage($value)
 * @method string getStatus()
 * @method $this withStatus($value)
 * @method string getOrderType()
 * @method $this withOrderType($value)
 */
class ListUserCertificateOrder extends Rpc
{
}

/**
 * @method string getCsr()
 * @method $this withCsr($value)
 * @method string getOrderId()
 * @method $this withOrderId($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 */
class RenewCertificateOrderForPackageRequest extends Rpc
{
}

/**
 * @method string getIdentifier()
 * @method $this withIdentifier($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 */
class RevokeWHClientCertificate extends Rpc
{
}

/**
 * @method string getMessageType()
 * @method $this withMessageType($value)
 * @method string getSigningAlgorithm()
 * @method $this withSigningAlgorithm($value)
 * @method string getMessage()
 * @method $this withMessage($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getCertIdentifier()
 * @method $this withCertIdentifier($value)
 */
class Sign extends Rpc
{
}

/**
 * @method string getCert()
 * @method $this withCert($value)
 * @method string getPrivateKey()
 * @method $this withPrivateKey($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getWarehouseId()
 * @method $this withWarehouseId($value)
 * @method string getName()
 * @method $this withName($value)
 */
class UploadPCACert extends Rpc
{
}

/**
 * @method string getMessageType()
 * @method $this withMessageType($value)
 * @method string getSigningAlgorithm()
 * @method $this withSigningAlgorithm($value)
 * @method string getMessage()
 * @method $this withMessage($value)
 * @method string getSignatureValue()
 * @method $this withSignatureValue($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getCertIdentifier()
 * @method $this withCertIdentifier($value)
 */
class Verify extends Rpc
{
}