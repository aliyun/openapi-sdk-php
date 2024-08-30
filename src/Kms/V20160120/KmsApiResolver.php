<?php

namespace AlibabaCloud\Kms\V20160120;

use AlibabaCloud\Client\Resolver\ApiResolver;

/**
 * @method AdvanceEncrypt advanceEncrypt(array $options = [])
 * @method AsymmetricDecrypt asymmetricDecrypt(array $options = [])
 * @method AsymmetricEncrypt asymmetricEncrypt(array $options = [])
 * @method AsymmetricSign asymmetricSign(array $options = [])
 * @method AsymmetricVerify asymmetricVerify(array $options = [])
 * @method CancelKeyDeletion cancelKeyDeletion(array $options = [])
 * @method CertificatePrivateKeyDecrypt certificatePrivateKeyDecrypt(array $options = [])
 * @method CertificatePrivateKeySign certificatePrivateKeySign(array $options = [])
 * @method CertificatePublicKeyEncrypt certificatePublicKeyEncrypt(array $options = [])
 * @method CertificatePublicKeyVerify certificatePublicKeyVerify(array $options = [])
 * @method ConnectKmsInstance connectKmsInstance(array $options = [])
 * @method CreateAlias createAlias(array $options = [])
 * @method CreateApplicationAccessPoint createApplicationAccessPoint(array $options = [])
 * @method CreateCertificate createCertificate(array $options = [])
 * @method CreateClientKey createClientKey(array $options = [])
 * @method CreateKey createKey(array $options = [])
 * @method CreateKeyVersion createKeyVersion(array $options = [])
 * @method CreateNetworkRule createNetworkRule(array $options = [])
 * @method CreatePolicy createPolicy(array $options = [])
 * @method CreateSecret createSecret(array $options = [])
 * @method Decrypt decrypt(array $options = [])
 * @method DeleteAlias deleteAlias(array $options = [])
 * @method DeleteApplicationAccessPoint deleteApplicationAccessPoint(array $options = [])
 * @method DeleteCertificate deleteCertificate(array $options = [])
 * @method DeleteClientKey deleteClientKey(array $options = [])
 * @method DeleteKeyMaterial deleteKeyMaterial(array $options = [])
 * @method DeleteNetworkRule deleteNetworkRule(array $options = [])
 * @method DeletePolicy deletePolicy(array $options = [])
 * @method DeleteSecret deleteSecret(array $options = [])
 * @method DescribeAccountKmsStatus describeAccountKmsStatus(array $options = [])
 * @method DescribeApplicationAccessPoint describeApplicationAccessPoint(array $options = [])
 * @method DescribeCertificate describeCertificate(array $options = [])
 * @method DescribeKey describeKey(array $options = [])
 * @method DescribeKeyVersion describeKeyVersion(array $options = [])
 * @method DescribeNetworkRule describeNetworkRule(array $options = [])
 * @method DescribePolicy describePolicy(array $options = [])
 * @method DescribeRegions describeRegions(array $options = [])
 * @method DescribeSecret describeSecret(array $options = [])
 * @method DisableKey disableKey(array $options = [])
 * @method EnableKey enableKey(array $options = [])
 * @method Encrypt encrypt(array $options = [])
 * @method ExportDataKey exportDataKey(array $options = [])
 * @method GenerateAndExportDataKey generateAndExportDataKey(array $options = [])
 * @method GenerateDataKey generateDataKey(array $options = [])
 * @method GenerateDataKeyWithoutPlaintext generateDataKeyWithoutPlaintext(array $options = [])
 * @method GetCertificate getCertificate(array $options = [])
 * @method GetClientKey getClientKey(array $options = [])
 * @method GetKeyPolicy getKeyPolicy(array $options = [])
 * @method GetKmsInstance getKmsInstance(array $options = [])
 * @method GetParametersForImport getParametersForImport(array $options = [])
 * @method GetPublicKey getPublicKey(array $options = [])
 * @method GetRandomPassword getRandomPassword(array $options = [])
 * @method GetSecretPolicy getSecretPolicy(array $options = [])
 * @method GetSecretValue getSecretValue(array $options = [])
 * @method ImportKeyMaterial importKeyMaterial(array $options = [])
 * @method ListAliases listAliases(array $options = [])
 * @method ListAliasesByKeyId listAliasesByKeyId(array $options = [])
 * @method ListApplicationAccessPoints listApplicationAccessPoints(array $options = [])
 * @method ListClientKeys listClientKeys(array $options = [])
 * @method ListKeys listKeys(array $options = [])
 * @method ListKeyVersions listKeyVersions(array $options = [])
 * @method ListKmsInstances listKmsInstances(array $options = [])
 * @method ListNetworkRules listNetworkRules(array $options = [])
 * @method ListPolicies listPolicies(array $options = [])
 * @method ListResourceTags listResourceTags(array $options = [])
 * @method ListSecrets listSecrets(array $options = [])
 * @method ListSecretVersionIds listSecretVersionIds(array $options = [])
 * @method ListTagResources listTagResources(array $options = [])
 * @method OpenKmsService openKmsService(array $options = [])
 * @method PutSecretValue putSecretValue(array $options = [])
 * @method ReEncrypt reEncrypt(array $options = [])
 * @method RestoreSecret restoreSecret(array $options = [])
 * @method RotateSecret rotateSecret(array $options = [])
 * @method ScheduleKeyDeletion scheduleKeyDeletion(array $options = [])
 * @method SetDeletionProtection setDeletionProtection(array $options = [])
 * @method SetKeyPolicy setKeyPolicy(array $options = [])
 * @method SetSecretPolicy setSecretPolicy(array $options = [])
 * @method TagResource tagResource(array $options = [])
 * @method TagResources tagResources(array $options = [])
 * @method UntagResource untagResource(array $options = [])
 * @method UntagResources untagResources(array $options = [])
 * @method UpdateAlias updateAlias(array $options = [])
 * @method UpdateApplicationAccessPoint updateApplicationAccessPoint(array $options = [])
 * @method UpdateCertificateStatus updateCertificateStatus(array $options = [])
 * @method UpdateKeyDescription updateKeyDescription(array $options = [])
 * @method UpdateKmsInstanceBindVpc updateKmsInstanceBindVpc(array $options = [])
 * @method UpdateNetworkRule updateNetworkRule(array $options = [])
 * @method UpdatePolicy updatePolicy(array $options = [])
 * @method UpdateRotationPolicy updateRotationPolicy(array $options = [])
 * @method UpdateSecret updateSecret(array $options = [])
 * @method UpdateSecretRotationPolicy updateSecretRotationPolicy(array $options = [])
 * @method UpdateSecretVersionStage updateSecretVersionStage(array $options = [])
 * @method UploadCertificate uploadCertificate(array $options = [])
 */
class KmsApiResolver extends ApiResolver
{
}

class Rpc extends \AlibabaCloud\Client\Resolver\Rpc
{
    /** @var string */
    public $product = 'Kms';

    /** @var string */
    public $version = '2016-01-20';

    /** @var string */
    public $method = 'POST';

    /** @var string */
    protected $scheme = 'https';

    /** @var string */
    public $serviceCode = 'kms';
}

/**
 * @method string getPaddingMode()
 * @method $this withPaddingMode($value)
 * @method string getAad()
 * @method $this withAad($value)
 * @method string getKeyId()
 * @method $this withKeyId($value)
 * @method string getPlaintext()
 * @method $this withPlaintext($value)
 * @method string getIv()
 * @method $this withIv($value)
 * @method string getAlgorithm()
 * @method $this withAlgorithm($value)
 */
class AdvanceEncrypt extends Rpc
{
}

/**
 * @method string getDryRun()
 * @method $this withDryRun($value)
 * @method string getKeyVersionId()
 * @method $this withKeyVersionId($value)
 * @method string getKeyId()
 * @method $this withKeyId($value)
 * @method string getCiphertextBlob()
 * @method $this withCiphertextBlob($value)
 * @method string getAlgorithm()
 * @method $this withAlgorithm($value)
 */
class AsymmetricDecrypt extends Rpc
{
}

/**
 * @method string getDryRun()
 * @method $this withDryRun($value)
 * @method string getKeyVersionId()
 * @method $this withKeyVersionId($value)
 * @method string getKeyId()
 * @method $this withKeyId($value)
 * @method string getPlaintext()
 * @method $this withPlaintext($value)
 * @method string getAlgorithm()
 * @method $this withAlgorithm($value)
 */
class AsymmetricEncrypt extends Rpc
{
}

/**
 * @method string getDryRun()
 * @method $this withDryRun($value)
 * @method string getKeyVersionId()
 * @method $this withKeyVersionId($value)
 * @method string getKeyId()
 * @method $this withKeyId($value)
 * @method string getDigest()
 * @method $this withDigest($value)
 * @method string getAlgorithm()
 * @method $this withAlgorithm($value)
 */
class AsymmetricSign extends Rpc
{
}

/**
 * @method string getDryRun()
 * @method $this withDryRun($value)
 * @method string getKeyVersionId()
 * @method $this withKeyVersionId($value)
 * @method string getKeyId()
 * @method $this withKeyId($value)
 * @method string getDigest()
 * @method $this withDigest($value)
 * @method string getValue()
 * @method $this withValue($value)
 * @method string getAlgorithm()
 * @method $this withAlgorithm($value)
 */
class AsymmetricVerify extends Rpc
{
}

/**
 * @method string getKeyId()
 * @method $this withKeyId($value)
 */
class CancelKeyDeletion extends Rpc
{
}

/**
 * @method string getCertificateId()
 * @method $this withCertificateId($value)
 * @method string getAlgorithm()
 * @method $this withAlgorithm($value)
 * @method string getCiphertextBlob()
 * @method $this withCiphertextBlob($value)
 */
class CertificatePrivateKeyDecrypt extends Rpc
{
}

/**
 * @method string getMessageType()
 * @method $this withMessageType($value)
 * @method string getCertificateId()
 * @method $this withCertificateId($value)
 * @method string getMessage()
 * @method $this withMessage($value)
 * @method string getAlgorithm()
 * @method $this withAlgorithm($value)
 */
class CertificatePrivateKeySign extends Rpc
{
}

/**
 * @method string getCertificateId()
 * @method $this withCertificateId($value)
 * @method string getPlaintext()
 * @method $this withPlaintext($value)
 * @method string getAlgorithm()
 * @method $this withAlgorithm($value)
 */
class CertificatePublicKeyEncrypt extends Rpc
{
}

/**
 * @method string getMessageType()
 * @method $this withMessageType($value)
 * @method string getCertificateId()
 * @method $this withCertificateId($value)
 * @method string getMessage()
 * @method $this withMessage($value)
 * @method string getSignatureValue()
 * @method $this withSignatureValue($value)
 * @method string getAlgorithm()
 * @method $this withAlgorithm($value)
 */
class CertificatePublicKeyVerify extends Rpc
{
}

/**
 * @method string getKmsInstanceId()
 * @method $this withKmsInstanceId($value)
 * @method string getVSwitchIds()
 * @method $this withVSwitchIds($value)
 * @method string getKMProvider()
 * @method $this withKMProvider($value)
 * @method string getZoneIds()
 * @method $this withZoneIds($value)
 * @method string getVpcId()
 * @method $this withVpcId($value)
 */
class ConnectKmsInstance extends Rpc
{
}

/**
 * @method string getAliasName()
 * @method $this withAliasName($value)
 * @method string getKeyId()
 * @method $this withKeyId($value)
 */
class CreateAlias extends Rpc
{
}

/**
 * @method string getPolicies()
 * @method $this withPolicies($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getAuthenticationMethod()
 * @method $this withAuthenticationMethod($value)
 */
class CreateApplicationAccessPoint extends Rpc
{
}

/**
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getSubject()
 * @method $this withSubject($value)
 * @method string getKeySpec()
 * @method $this withKeySpec($value)
 * @method string getProtectionLevel()
 * @method $this withProtectionLevel($value)
 * @method string getExportablePrivateKey()
 * @method $this withExportablePrivateKey($value)
 * @method string getSubjectAlternativeNames()
 * @method $this withSubjectAlternativeNames($value)
 */
class CreateCertificate extends Rpc
{
}

/**
 * @method string getNotBefore()
 * @method $this withNotBefore($value)
 * @method string getNotAfter()
 * @method $this withNotAfter($value)
 * @method string getPassword()
 * @method $this withPassword($value)
 * @method string getAapName()
 * @method $this withAapName($value)
 */
class CreateClientKey extends Rpc
{
}

/**
 * @method string getOrigin()
 * @method $this withOrigin($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getKeySpec()
 * @method $this withKeySpec($value)
 * @method string getRotationInterval()
 * @method $this withRotationInterval($value)
 * @method string getEnableAutomaticRotation()
 * @method $this withEnableAutomaticRotation($value)
 * @method string getTags()
 * @method $this withTags($value)
 * @method string getProtectionLevel()
 * @method $this withProtectionLevel($value)
 * @method string getKeyUsage()
 * @method $this withKeyUsage($value)
 * @method string getDKMSInstanceId()
 * @method $this withDKMSInstanceId($value)
 * @method string getPolicy()
 * @method $this withPolicy($value)
 */
class CreateKey extends Rpc
{
}

/**
 * @method string getKeyId()
 * @method $this withKeyId($value)
 */
class CreateKeyVersion extends Rpc
{
}

/**
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getType()
 * @method $this withType($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getSourcePrivateIp()
 * @method $this withSourcePrivateIp($value)
 */
class CreateNetworkRule extends Rpc
{
}

/**
 * @method string getAccessControlRules()
 * @method $this withAccessControlRules($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getResources()
 * @method $this withResources($value)
 * @method string getKmsInstance()
 * @method $this withKmsInstance($value)
 * @method string getPermissions()
 * @method $this withPermissions($value)
 * @method string getName()
 * @method $this withName($value)
 */
class CreatePolicy extends Rpc
{
}

/**
 * @method string getSecretType()
 * @method $this withSecretType($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getRotationInterval()
 * @method $this withRotationInterval($value)
 * @method string getEnableAutomaticRotation()
 * @method $this withEnableAutomaticRotation($value)
 * @method string getEncryptionKeyId()
 * @method $this withEncryptionKeyId($value)
 * @method string getTags()
 * @method $this withTags($value)
 * @method string getExtendedConfig()
 * @method $this withExtendedConfig($value)
 * @method string getVersionId()
 * @method $this withVersionId($value)
 * @method string getDKMSInstanceId()
 * @method $this withDKMSInstanceId($value)
 * @method string getSecretData()
 * @method $this withSecretData($value)
 * @method string getSecretName()
 * @method $this withSecretName($value)
 * @method string getSecretDataType()
 * @method $this withSecretDataType($value)
 * @method string getPolicy()
 * @method $this withPolicy($value)
 */
class CreateSecret extends Rpc
{
}

/**
 * @method string getDryRun()
 * @method $this withDryRun($value)
 * @method string getEncryptionContext()
 * @method $this withEncryptionContext($value)
 * @method string getCiphertextBlob()
 * @method $this withCiphertextBlob($value)
 */
class Decrypt extends Rpc
{
}

/**
 * @method string getAliasName()
 * @method $this withAliasName($value)
 */
class DeleteAlias extends Rpc
{
}

/**
 * @method string getName()
 * @method $this withName($value)
 */
class DeleteApplicationAccessPoint extends Rpc
{
}

/**
 * @method string getCertificateId()
 * @method $this withCertificateId($value)
 */
class DeleteCertificate extends Rpc
{
}

/**
 * @method string getClientKeyId()
 * @method $this withClientKeyId($value)
 */
class DeleteClientKey extends Rpc
{
}

/**
 * @method string getKeyId()
 * @method $this withKeyId($value)
 */
class DeleteKeyMaterial extends Rpc
{
}

/**
 * @method string getName()
 * @method $this withName($value)
 */
class DeleteNetworkRule extends Rpc
{
}

/**
 * @method string getName()
 * @method $this withName($value)
 */
class DeletePolicy extends Rpc
{
}

/**
 * @method string getForceDeleteWithoutRecovery()
 * @method $this withForceDeleteWithoutRecovery($value)
 * @method string getRecoveryWindowInDays()
 * @method $this withRecoveryWindowInDays($value)
 * @method string getSecretName()
 * @method $this withSecretName($value)
 */
class DeleteSecret extends Rpc
{
}

class DescribeAccountKmsStatus extends Rpc
{
}

/**
 * @method string getName()
 * @method $this withName($value)
 */
class DescribeApplicationAccessPoint extends Rpc
{
}

/**
 * @method string getCertificateId()
 * @method $this withCertificateId($value)
 */
class DescribeCertificate extends Rpc
{
}

/**
 * @method string getKeyId()
 * @method $this withKeyId($value)
 */
class DescribeKey extends Rpc
{
}

/**
 * @method string getKeyVersionId()
 * @method $this withKeyVersionId($value)
 * @method string getKeyId()
 * @method $this withKeyId($value)
 */
class DescribeKeyVersion extends Rpc
{
}

/**
 * @method string getName()
 * @method $this withName($value)
 */
class DescribeNetworkRule extends Rpc
{
}

/**
 * @method string getName()
 * @method $this withName($value)
 */
class DescribePolicy extends Rpc
{
}

class DescribeRegions extends Rpc
{
}

/**
 * @method string getSecretName()
 * @method $this withSecretName($value)
 * @method string getFetchTags()
 * @method $this withFetchTags($value)
 */
class DescribeSecret extends Rpc
{
}

/**
 * @method string getKeyId()
 * @method $this withKeyId($value)
 */
class DisableKey extends Rpc
{
}

/**
 * @method string getKeyId()
 * @method $this withKeyId($value)
 */
class EnableKey extends Rpc
{
}

/**
 * @method string getDryRun()
 * @method $this withDryRun($value)
 * @method string getKeyId()
 * @method $this withKeyId($value)
 * @method string getPlaintext()
 * @method $this withPlaintext($value)
 * @method string getEncryptionContext()
 * @method $this withEncryptionContext($value)
 */
class Encrypt extends Rpc
{
}

/**
 * @method string getDryRun()
 * @method $this withDryRun($value)
 * @method string getPublicKeyBlob()
 * @method $this withPublicKeyBlob($value)
 * @method string getEncryptionContext()
 * @method $this withEncryptionContext($value)
 * @method string getWrappingAlgorithm()
 * @method $this withWrappingAlgorithm($value)
 * @method string getCiphertextBlob()
 * @method $this withCiphertextBlob($value)
 * @method string getWrappingKeySpec()
 * @method $this withWrappingKeySpec($value)
 */
class ExportDataKey extends Rpc
{
}

/**
 * @method string getDryRun()
 * @method $this withDryRun($value)
 * @method string getKeyId()
 * @method $this withKeyId($value)
 * @method string getKeySpec()
 * @method $this withKeySpec($value)
 * @method string getNumberOfBytes()
 * @method $this withNumberOfBytes($value)
 * @method string getPublicKeyBlob()
 * @method $this withPublicKeyBlob($value)
 * @method string getEncryptionContext()
 * @method $this withEncryptionContext($value)
 * @method string getWrappingAlgorithm()
 * @method $this withWrappingAlgorithm($value)
 * @method string getWrappingKeySpec()
 * @method $this withWrappingKeySpec($value)
 */
class GenerateAndExportDataKey extends Rpc
{
}

/**
 * @method string getDryRun()
 * @method $this withDryRun($value)
 * @method string getKeyId()
 * @method $this withKeyId($value)
 * @method string getKeySpec()
 * @method $this withKeySpec($value)
 * @method string getNumberOfBytes()
 * @method $this withNumberOfBytes($value)
 * @method string getEncryptionContext()
 * @method $this withEncryptionContext($value)
 */
class GenerateDataKey extends Rpc
{
}

/**
 * @method string getDryRun()
 * @method $this withDryRun($value)
 * @method string getKeyId()
 * @method $this withKeyId($value)
 * @method string getKeySpec()
 * @method $this withKeySpec($value)
 * @method string getNumberOfBytes()
 * @method $this withNumberOfBytes($value)
 * @method string getEncryptionContext()
 * @method $this withEncryptionContext($value)
 */
class GenerateDataKeyWithoutPlaintext extends Rpc
{
}

/**
 * @method string getCertificateId()
 * @method $this withCertificateId($value)
 */
class GetCertificate extends Rpc
{
}

/**
 * @method string getClientKeyId()
 * @method $this withClientKeyId($value)
 */
class GetClientKey extends Rpc
{

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getKeyId()
 * @method $this withKeyId($value)
 * @method string getPolicyName()
 * @method $this withPolicyName($value)
 */
class GetKeyPolicy extends Rpc
{
}

/**
 * @method string getKmsInstanceId()
 * @method $this withKmsInstanceId($value)
 */
class GetKmsInstance extends Rpc
{
}

/**
 * @method string getKeyId()
 * @method $this withKeyId($value)
 * @method string getWrappingAlgorithm()
 * @method $this withWrappingAlgorithm($value)
 * @method string getWrappingKeySpec()
 * @method $this withWrappingKeySpec($value)
 */
class GetParametersForImport extends Rpc
{
}

/**
 * @method string getDryRun()
 * @method $this withDryRun($value)
 * @method string getKeyVersionId()
 * @method $this withKeyVersionId($value)
 * @method string getKeyId()
 * @method $this withKeyId($value)
 */
class GetPublicKey extends Rpc
{
}

/**
 * @method string getExcludeCharacters()
 * @method $this withExcludeCharacters($value)
 * @method string getPasswordLength()
 * @method $this withPasswordLength($value)
 * @method string getExcludePunctuation()
 * @method $this withExcludePunctuation($value)
 * @method string getRequireEachIncludedType()
 * @method $this withRequireEachIncludedType($value)
 * @method string getExcludeNumbers()
 * @method $this withExcludeNumbers($value)
 * @method string getExcludeLowercase()
 * @method $this withExcludeLowercase($value)
 * @method string getExcludeUppercase()
 * @method $this withExcludeUppercase($value)
 */
class GetRandomPassword extends Rpc
{
}

/**
 * @method string getPolicyName()
 * @method $this withPolicyName($value)
 * @method string getSecretName()
 * @method $this withSecretName($value)
 */
class GetSecretPolicy extends Rpc
{
}

/**
 * @method string getDryRun()
 * @method $this withDryRun($value)
 * @method string getVersionId()
 * @method $this withVersionId($value)
 * @method string getVersionStage()
 * @method $this withVersionStage($value)
 * @method string getSecretName()
 * @method $this withSecretName($value)
 * @method string getFetchExtendedConfig()
 * @method $this withFetchExtendedConfig($value)
 */
class GetSecretValue extends Rpc
{
}

/**
 * @method string getImportToken()
 * @method $this withImportToken($value)
 * @method string getEncryptedKeyMaterial()
 * @method $this withEncryptedKeyMaterial($value)
 * @method string getKeyMaterialExpireUnix()
 * @method $this withKeyMaterialExpireUnix($value)
 * @method string getKeyId()
 * @method $this withKeyId($value)
 */
class ImportKeyMaterial extends Rpc
{
}

/**
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 */
class ListAliases extends Rpc
{
}

/**
 * @method string getKeyId()
 * @method $this withKeyId($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 */
class ListAliasesByKeyId extends Rpc
{
}

/**
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 */
class ListApplicationAccessPoints extends Rpc
{
}

/**
 * @method string getAapName()
 * @method $this withAapName($value)
 */
class ListClientKeys extends Rpc
{

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getFilters()
 * @method $this withFilters($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 */
class ListKeys extends Rpc
{
}

/**
 * @method string getKeyId()
 * @method $this withKeyId($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 */
class ListKeyVersions extends Rpc
{
}

/**
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 */
class ListKmsInstances extends Rpc
{
}

/**
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 */
class ListNetworkRules extends Rpc
{
}

/**
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 */
class ListPolicies extends Rpc
{
}

/**
 * @method string getKeyId()
 * @method $this withKeyId($value)
 */
class ListResourceTags extends Rpc
{
}

/**
 * @method string getFilters()
 * @method $this withFilters($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getFetchTags()
 * @method $this withFetchTags($value)
 */
class ListSecrets extends Rpc
{
}

/**
 * @method string getIncludeDeprecated()
 * @method $this withIncludeDeprecated($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getSecretName()
 * @method $this withSecretName($value)
 */
class ListSecretVersionIds extends Rpc
{
}

/**
 * @method array getResourceId()
 * @method string getResourceType()
 * @method $this withResourceType($value)
 * @method string getNextToken()
 * @method $this withNextToken($value)
 * @method array getTag()
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
			if(isset($depth1Value['Value'])){
				$this->options['query']['Tag.' . ($depth1 + 1) . '.Value'] = $depth1Value['Value'];
			}
			if(isset($depth1Value['Key'])){
				$this->options['query']['Tag.' . ($depth1 + 1) . '.Key'] = $depth1Value['Key'];
			}
		}

		return $this;
    }
}

class OpenKmsService extends Rpc
{
}

/**
 * @method string getVersionId()
 * @method $this withVersionId($value)
 * @method string getVersionStages()
 * @method $this withVersionStages($value)
 * @method string getSecretData()
 * @method $this withSecretData($value)
 * @method string getSecretName()
 * @method $this withSecretName($value)
 * @method string getSecretDataType()
 * @method $this withSecretDataType($value)
 */
class PutSecretValue extends Rpc
{
}

/**
 * @method string getDestinationEncryptionContext()
 * @method $this withDestinationEncryptionContext($value)
 * @method string getDryRun()
 * @method $this withDryRun($value)
 * @method string getSourceKeyId()
 * @method $this withSourceKeyId($value)
 * @method string getSourceEncryptionAlgorithm()
 * @method $this withSourceEncryptionAlgorithm($value)
 * @method string getSourceKeyVersionId()
 * @method $this withSourceKeyVersionId($value)
 * @method string getDestinationKeyId()
 * @method $this withDestinationKeyId($value)
 * @method string getSourceEncryptionContext()
 * @method $this withSourceEncryptionContext($value)
 * @method string getCiphertextBlob()
 * @method $this withCiphertextBlob($value)
 */
class ReEncrypt extends Rpc
{
}

/**
 * @method string getSecretName()
 * @method $this withSecretName($value)
 */
class RestoreSecret extends Rpc
{
}

/**
 * @method string getVersionId()
 * @method $this withVersionId($value)
 * @method string getSecretName()
 * @method $this withSecretName($value)
 */
class RotateSecret extends Rpc
{
}

/**
 * @method string getPendingWindowInDays()
 * @method $this withPendingWindowInDays($value)
 * @method string getKeyId()
 * @method $this withKeyId($value)
 */
class ScheduleKeyDeletion extends Rpc
{
}

/**
 * @method string getDeletionProtectionDescription()
 * @method $this withDeletionProtectionDescription($value)
 * @method string getEnableDeletionProtection()
 * @method $this withEnableDeletionProtection($value)
 * @method string getProtectedResourceArn()
 * @method $this withProtectedResourceArn($value)
 */
class SetDeletionProtection extends Rpc
{
}

/**
 * @method string getKeyId()
 * @method $this withKeyId($value)
 * @method string getPolicyName()
 * @method $this withPolicyName($value)
 * @method string getPolicy()
 * @method $this withPolicy($value)
 */
class SetKeyPolicy extends Rpc
{
}

/**
 * @method string getPolicyName()
 * @method $this withPolicyName($value)
 * @method string getSecretName()
 * @method $this withSecretName($value)
 * @method string getPolicy()
 * @method $this withPolicy($value)
 */
class SetSecretPolicy extends Rpc
{
}

/**
 * @method string getCertificateId()
 * @method $this withCertificateId($value)
 * @method string getKeyId()
 * @method $this withKeyId($value)
 * @method string getTags()
 * @method $this withTags($value)
 * @method string getSecretName()
 * @method $this withSecretName($value)
 */
class TagResource extends Rpc
{
}

/**
 * @method array getResourceId()
 * @method string getResourceType()
 * @method $this withResourceType($value)
 * @method array getTag()
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
			if(isset($depth1Value['Value'])){
				$this->options['query']['Tag.' . ($depth1 + 1) . '.Value'] = $depth1Value['Value'];
			}
			if(isset($depth1Value['Key'])){
				$this->options['query']['Tag.' . ($depth1 + 1) . '.Key'] = $depth1Value['Key'];
			}
		}

		return $this;
    }
}

/**
 * @method string getCertificateId()
 * @method $this withCertificateId($value)
 * @method string getKeyId()
 * @method $this withKeyId($value)
 * @method string getTagKeys()
 * @method $this withTagKeys($value)
 * @method string getSecretName()
 * @method $this withSecretName($value)
 */
class UntagResource extends Rpc
{
}

/**
 * @method string getAll()
 * @method $this withAll($value)
 * @method array getResourceId()
 * @method string getResourceType()
 * @method $this withResourceType($value)
 * @method array getTagKey()
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
 * @method string getAliasName()
 * @method $this withAliasName($value)
 * @method string getKeyId()
 * @method $this withKeyId($value)
 */
class UpdateAlias extends Rpc
{
}

/**
 * @method string getPolicies()
 * @method $this withPolicies($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getName()
 * @method $this withName($value)
 */
class UpdateApplicationAccessPoint extends Rpc
{
}

/**
 * @method string getCertificateId()
 * @method $this withCertificateId($value)
 * @method string getStatus()
 * @method $this withStatus($value)
 */
class UpdateCertificateStatus extends Rpc
{
}

/**
 * @method string getKeyId()
 * @method $this withKeyId($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 */
class UpdateKeyDescription extends Rpc
{
}

/**
 * @method string getKmsInstanceId()
 * @method $this withKmsInstanceId($value)
 * @method string getBindVpcs()
 * @method $this withBindVpcs($value)
 */
class UpdateKmsInstanceBindVpc extends Rpc
{

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getSourcePrivateIp()
 * @method $this withSourcePrivateIp($value)
 */
class UpdateNetworkRule extends Rpc
{
}

/**
 * @method string getAccessControlRules()
 * @method $this withAccessControlRules($value)
 * @method string getResources()
 * @method $this withResources($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getPermissions()
 * @method $this withPermissions($value)
 * @method string getName()
 * @method $this withName($value)
 */
class UpdatePolicy extends Rpc
{
}

/**
 * @method string getKeyId()
 * @method $this withKeyId($value)
 * @method string getRotationInterval()
 * @method $this withRotationInterval($value)
 * @method string getEnableAutomaticRotation()
 * @method $this withEnableAutomaticRotation($value)
 */
class UpdateRotationPolicy extends Rpc
{
}

/**
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getSecretName()
 * @method $this withSecretName($value)
 * @method string getExtendedConfigCustomData()
 */
class UpdateSecret extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withExtendedConfigCustomData($value)
    {
        $this->data['ExtendedConfigCustomData'] = $value;
        $this->options['query']['ExtendedConfig.CustomData'] = $value;

        return $this;
    }
}

/**
 * @method string getRotationInterval()
 * @method $this withRotationInterval($value)
 * @method string getEnableAutomaticRotation()
 * @method $this withEnableAutomaticRotation($value)
 * @method string getSecretName()
 * @method $this withSecretName($value)
 */
class UpdateSecretRotationPolicy extends Rpc
{
}

/**
 * @method string getMoveToVersion()
 * @method $this withMoveToVersion($value)
 * @method string getRemoveFromVersion()
 * @method $this withRemoveFromVersion($value)
 * @method string getVersionStage()
 * @method $this withVersionStage($value)
 * @method string getSecretName()
 * @method $this withSecretName($value)
 */
class UpdateSecretVersionStage extends Rpc
{
}

/**
 * @method string getCertificateId()
 * @method $this withCertificateId($value)
 * @method string getCertificate()
 * @method $this withCertificate($value)
 * @method string getCertificateChain()
 * @method $this withCertificateChain($value)
 */
class UploadCertificate extends Rpc
{
}
