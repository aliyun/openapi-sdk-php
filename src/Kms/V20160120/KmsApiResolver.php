<?php

namespace AlibabaCloud\Kms\V20160120;

use AlibabaCloud\Client\Resolver\ApiResolver;

/**
 * @method AsymmetricDecrypt asymmetricDecrypt(array $options = [])
 * @method AsymmetricEncrypt asymmetricEncrypt(array $options = [])
 * @method AsymmetricSign asymmetricSign(array $options = [])
 * @method AsymmetricVerify asymmetricVerify(array $options = [])
 * @method CancelKeyDeletion cancelKeyDeletion(array $options = [])
 * @method CreateAlias createAlias(array $options = [])
 * @method CreateKey createKey(array $options = [])
 * @method CreateKeyVersion createKeyVersion(array $options = [])
 * @method CreateSecret createSecret(array $options = [])
 * @method Decrypt decrypt(array $options = [])
 * @method DeleteAlias deleteAlias(array $options = [])
 * @method DeleteKeyMaterial deleteKeyMaterial(array $options = [])
 * @method DeleteSecret deleteSecret(array $options = [])
 * @method DescribeAccountKmsStatus describeAccountKmsStatus(array $options = [])
 * @method DescribeKey describeKey(array $options = [])
 * @method DescribeKeyVersion describeKeyVersion(array $options = [])
 * @method DescribeRegions describeRegions(array $options = [])
 * @method DescribeSecret describeSecret(array $options = [])
 * @method DescribeService describeService(array $options = [])
 * @method DisableKey disableKey(array $options = [])
 * @method EnableKey enableKey(array $options = [])
 * @method Encrypt encrypt(array $options = [])
 * @method ExportDataKey exportDataKey(array $options = [])
 * @method GenerateAndExportDataKey generateAndExportDataKey(array $options = [])
 * @method GenerateDataKey generateDataKey(array $options = [])
 * @method GenerateDataKeyWithoutPlaintext generateDataKeyWithoutPlaintext(array $options = [])
 * @method GetParametersForImport getParametersForImport(array $options = [])
 * @method GetPublicKey getPublicKey(array $options = [])
 * @method GetRandomPassword getRandomPassword(array $options = [])
 * @method GetSecretValue getSecretValue(array $options = [])
 * @method ImportKeyMaterial importKeyMaterial(array $options = [])
 * @method ListAliases listAliases(array $options = [])
 * @method ListAliasesByKeyId listAliasesByKeyId(array $options = [])
 * @method ListKeys listKeys(array $options = [])
 * @method ListKeyVersions listKeyVersions(array $options = [])
 * @method ListResourceTags listResourceTags(array $options = [])
 * @method ListSecrets listSecrets(array $options = [])
 * @method ListSecretVersionIds listSecretVersionIds(array $options = [])
 * @method OpenKmsService openKmsService(array $options = [])
 * @method PutSecretValue putSecretValue(array $options = [])
 * @method ReEncrypt reEncrypt(array $options = [])
 * @method RestoreSecret restoreSecret(array $options = [])
 * @method ScheduleKeyDeletion scheduleKeyDeletion(array $options = [])
 * @method TagResource tagResource(array $options = [])
 * @method UntagResource untagResource(array $options = [])
 * @method UpdateAlias updateAlias(array $options = [])
 * @method UpdateKeyDescription updateKeyDescription(array $options = [])
 * @method UpdateRotationPolicy updateRotationPolicy(array $options = [])
 * @method UpdateSecret updateSecret(array $options = [])
 * @method UpdateSecretVersionStage updateSecretVersionStage(array $options = [])
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
 * @method string getKeyVersionId()
 * @method $this withKeyVersionId($value)
 * @method string getDigest()
 * @method $this withDigest($value)
 * @method string getKeyId()
 * @method $this withKeyId($value)
 * @method string getAlgorithm()
 * @method $this withAlgorithm($value)
 */
class AsymmetricSign extends Rpc
{
}

/**
 * @method string getKeyVersionId()
 * @method $this withKeyVersionId($value)
 * @method string getDigest()
 * @method $this withDigest($value)
 * @method string getKeyId()
 * @method $this withKeyId($value)
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
 * @method string getAliasName()
 * @method $this withAliasName($value)
 * @method string getKeyId()
 * @method $this withKeyId($value)
 */
class CreateAlias extends Rpc
{
}

/**
 * @method string getProtectionLevel()
 * @method $this withProtectionLevel($value)
 * @method string getKeyUsage()
 * @method $this withKeyUsage($value)
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
 * @method string getVersionId()
 * @method $this withVersionId($value)
 * @method string getSecretData()
 * @method $this withSecretData($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getSecretName()
 * @method $this withSecretName($value)
 * @method string getEncryptionKeyId()
 * @method $this withEncryptionKeyId($value)
 * @method string getSecretDataType()
 * @method $this withSecretDataType($value)
 * @method string getTags()
 * @method $this withTags($value)
 */
class CreateSecret extends Rpc
{
}

/**
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
 * @method string getKeyId()
 * @method $this withKeyId($value)
 */
class DeleteKeyMaterial extends Rpc
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

class DescribeService extends Rpc
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
 * @method string getEncryptionContext()
 * @method $this withEncryptionContext($value)
 * @method string getKeyId()
 * @method $this withKeyId($value)
 * @method string getPlaintext()
 * @method $this withPlaintext($value)
 */
class Encrypt extends Rpc
{
}

/**
 * @method string getEncryptionContext()
 * @method $this withEncryptionContext($value)
 * @method string getWrappingAlgorithm()
 * @method $this withWrappingAlgorithm($value)
 * @method string getCiphertextBlob()
 * @method $this withCiphertextBlob($value)
 * @method string getPublicKeyBlob()
 * @method $this withPublicKeyBlob($value)
 * @method string getWrappingKeySpec()
 * @method $this withWrappingKeySpec($value)
 */
class ExportDataKey extends Rpc
{
}

/**
 * @method string getEncryptionContext()
 * @method $this withEncryptionContext($value)
 * @method string getKeyId()
 * @method $this withKeyId($value)
 * @method string getKeySpec()
 * @method $this withKeySpec($value)
 * @method string getNumberOfBytes()
 * @method $this withNumberOfBytes($value)
 * @method string getWrappingAlgorithm()
 * @method $this withWrappingAlgorithm($value)
 * @method string getPublicKeyBlob()
 * @method $this withPublicKeyBlob($value)
 * @method string getWrappingKeySpec()
 * @method $this withWrappingKeySpec($value)
 */
class GenerateAndExportDataKey extends Rpc
{
}

/**
 * @method string getEncryptionContext()
 * @method $this withEncryptionContext($value)
 * @method string getKeyId()
 * @method $this withKeyId($value)
 * @method string getKeySpec()
 * @method $this withKeySpec($value)
 * @method string getNumberOfBytes()
 * @method $this withNumberOfBytes($value)
 */
class GenerateDataKey extends Rpc
{
}

/**
 * @method string getEncryptionContext()
 * @method $this withEncryptionContext($value)
 * @method string getKeyId()
 * @method $this withKeyId($value)
 * @method string getKeySpec()
 * @method $this withKeySpec($value)
 * @method string getNumberOfBytes()
 * @method $this withNumberOfBytes($value)
 */
class GenerateDataKeyWithoutPlaintext extends Rpc
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
 * @method string getKeyVersionId()
 * @method $this withKeyVersionId($value)
 * @method string getKeyId()
 * @method $this withKeyId($value)
 */
class GetPublicKey extends Rpc
{
}

/**
 * @method string getExcludeLowercase()
 * @method $this withExcludeLowercase($value)
 * @method string getExcludeCharacters()
 * @method $this withExcludeCharacters($value)
 * @method string getPasswordLength()
 * @method $this withPasswordLength($value)
 * @method string getExcludePunctuation()
 * @method $this withExcludePunctuation($value)
 * @method string getExcludeUppercase()
 * @method $this withExcludeUppercase($value)
 * @method string getRequireEachIncludedType()
 * @method $this withRequireEachIncludedType($value)
 * @method string getExcludeNumbers()
 * @method $this withExcludeNumbers($value)
 */
class GetRandomPassword extends Rpc
{
}

/**
 * @method string getVersionId()
 * @method $this withVersionId($value)
 * @method string getVersionStage()
 * @method $this withVersionStage($value)
 * @method string getSecretName()
 * @method $this withSecretName($value)
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
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getKeyId()
 * @method $this withKeyId($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 */
class ListAliasesByKeyId extends Rpc
{
}

/**
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getFilters()
 * @method $this withFilters($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 */
class ListKeys extends Rpc
{
}

/**
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getKeyId()
 * @method $this withKeyId($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 */
class ListKeyVersions extends Rpc
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
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getFilters()
 * @method $this withFilters($value)
 * @method string getFetchTags()
 * @method $this withFetchTags($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 */
class ListSecrets extends Rpc
{
}

/**
 * @method string getIncludeDeprecated()
 * @method $this withIncludeDeprecated($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getSecretName()
 * @method $this withSecretName($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 */
class ListSecretVersionIds extends Rpc
{
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
 * @method string getSourceEncryptionAlgorithm()
 * @method $this withSourceEncryptionAlgorithm($value)
 * @method string getSourceKeyVersionId()
 * @method $this withSourceKeyVersionId($value)
 * @method string getDestinationKeyId()
 * @method $this withDestinationKeyId($value)
 * @method string getSourceKeyId()
 * @method $this withSourceKeyId($value)
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
 * @method string getPendingWindowInDays()
 * @method $this withPendingWindowInDays($value)
 * @method string getKeyId()
 * @method $this withKeyId($value)
 */
class ScheduleKeyDeletion extends Rpc
{
}

/**
 * @method string getKeyId()
 * @method $this withKeyId($value)
 * @method string getSecretName()
 * @method $this withSecretName($value)
 * @method string getTags()
 * @method $this withTags($value)
 */
class TagResource extends Rpc
{
}

/**
 * @method string getTagKeys()
 * @method $this withTagKeys($value)
 * @method string getKeyId()
 * @method $this withKeyId($value)
 * @method string getSecretName()
 * @method $this withSecretName($value)
 */
class UntagResource extends Rpc
{
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
 * @method string getKeyId()
 * @method $this withKeyId($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 */
class UpdateKeyDescription extends Rpc
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
 */
class UpdateSecret extends Rpc
{
}

/**
 * @method string getRemoveFromVersion()
 * @method $this withRemoveFromVersion($value)
 * @method string getMoveToVersion()
 * @method $this withMoveToVersion($value)
 * @method string getVersionStage()
 * @method $this withVersionStage($value)
 * @method string getSecretName()
 * @method $this withSecretName($value)
 */
class UpdateSecretVersionStage extends Rpc
{
}
