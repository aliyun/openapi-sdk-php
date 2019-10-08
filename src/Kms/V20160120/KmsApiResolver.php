<?php

namespace AlibabaCloud\Kms\V20160120;

use AlibabaCloud\Client\Resolver\ApiResolver;

/**
 * @method CancelKeyDeletion cancelKeyDeletion(array $options = [])
 * @method CreateAlias createAlias(array $options = [])
 * @method CreateKey createKey(array $options = [])
 * @method Decrypt decrypt(array $options = [])
 * @method DeleteAlias deleteAlias(array $options = [])
 * @method DeleteKeyMaterial deleteKeyMaterial(array $options = [])
 * @method DescribeKey describeKey(array $options = [])
 * @method DescribeKeyVersion describeKeyVersion(array $options = [])
 * @method DescribeRegions describeRegions(array $options = [])
 * @method DescribeService describeService(array $options = [])
 * @method DisableKey disableKey(array $options = [])
 * @method EnableKey enableKey(array $options = [])
 * @method Encrypt encrypt(array $options = [])
 * @method GenerateDataKey generateDataKey(array $options = [])
 * @method GenerateDataKeyWithoutPlaintext generateDataKeyWithoutPlaintext(array $options = [])
 * @method GetParametersForImport getParametersForImport(array $options = [])
 * @method ImportKeyMaterial importKeyMaterial(array $options = [])
 * @method ListAliases listAliases(array $options = [])
 * @method ListAliasesByKeyId listAliasesByKeyId(array $options = [])
 * @method ListKeys listKeys(array $options = [])
 * @method ListKeyVersions listKeyVersions(array $options = [])
 * @method ListResourceTags listResourceTags(array $options = [])
 * @method ScheduleKeyDeletion scheduleKeyDeletion(array $options = [])
 * @method TagResource tagResource(array $options = [])
 * @method UntagResource untagResource(array $options = [])
 * @method UpdateAlias updateAlias(array $options = [])
 * @method UpdateKeyDescription updateKeyDescription(array $options = [])
 * @method UpdateRotationPolicy updateRotationPolicy(array $options = [])
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
 * @method string getRotationInterval()
 * @method $this withRotationInterval($value)
 * @method string getEnableAutomaticRotation()
 * @method $this withEnableAutomaticRotation($value)
 */
class CreateKey extends Rpc
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
