<?php

namespace AlibabaCloud\AIRegistry\V20260317;

use AlibabaCloud\Client\Resolver\ApiResolver;

/**
 * @method CreateNamespace createNamespace(array $options = [])
 * @method CreatePrompt createPrompt(array $options = [])
 * @method CreatePromptVersion createPromptVersion(array $options = [])
 * @method CreateSkillDraft createSkillDraft(array $options = [])
 * @method DeleteNamespace deleteNamespace(array $options = [])
 * @method DeletePrompt deletePrompt(array $options = [])
 * @method DeleteSkill deleteSkill(array $options = [])
 * @method DownloadSkillVersionViaOss downloadSkillVersionViaOss(array $options = [])
 * @method ForcePublishSkillVersion forcePublishSkillVersion(array $options = [])
 * @method GetNamespace getNamespace(array $options = [])
 * @method GetPrompt getPrompt(array $options = [])
 * @method GetPromptVersion getPromptVersion(array $options = [])
 * @method GetSkillDetail getSkillDetail(array $options = [])
 * @method GetSkillImportFileUrl getSkillImportFileUrl(array $options = [])
 * @method GetSkillVersionDetail getSkillVersionDetail(array $options = [])
 * @method ListNamespaces listNamespaces(array $options = [])
 * @method ListPrompts listPrompts(array $options = [])
 * @method ListPromptVersions listPromptVersions(array $options = [])
 * @method ListSkills listSkills(array $options = [])
 * @method OfflineSkill offlineSkill(array $options = [])
 * @method OnlineSkill onlineSkill(array $options = [])
 * @method PublishSkillVersion publishSkillVersion(array $options = [])
 * @method RedraftSkillVersion redraftSkillVersion(array $options = [])
 * @method SubmitPromptVersion submitPromptVersion(array $options = [])
 * @method SubmitSkillVersion submitSkillVersion(array $options = [])
 * @method UpdateNamespace updateNamespace(array $options = [])
 * @method UpdatePrompt updatePrompt(array $options = [])
 * @method UpdatePromptVersion updatePromptVersion(array $options = [])
 * @method UpdateSkillBizTags updateSkillBizTags(array $options = [])
 * @method UpdateSkillDraft updateSkillDraft(array $options = [])
 * @method UpdateSkillLabels updateSkillLabels(array $options = [])
 * @method UpdateSkillScope updateSkillScope(array $options = [])
 * @method UploadSkillViaOss uploadSkillViaOss(array $options = [])
 */
class AIRegistryApiResolver extends ApiResolver
{
}

class Rpc extends \AlibabaCloud\Client\Resolver\Rpc
{
    /** @var string */
    public $product = 'AIRegistry';

    /** @var string */
    public $version = '2026-03-17';

    /** @var string */
    public $method = 'POST';

    /** @var string */
    protected $scheme = 'https';

    /** @var string */
    public $serviceCode = 'AIRegistry';
}

/**
 * @method string getTags()
 * @method $this withTags($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getScanPolicy()
 * @method $this withScanPolicy($value)
 */
class CreateNamespace extends Rpc
{
}

/**
 * @method string getPromptKey()
 * @method $this withPromptKey($value)
 * @method string getBizTags()
 * @method $this withBizTags($value)
 * @method string getNamespaceId()
 * @method $this withNamespaceId($value)
 * @method string getTargetVersion()
 * @method $this withTargetVersion($value)
 * @method string getTemplate()
 * @method $this withTemplate($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getVariables()
 * @method $this withVariables($value)
 * @method string getCommitMsg()
 * @method $this withCommitMsg($value)
 */
class CreatePrompt extends Rpc
{
}

/**
 * @method string getPromptKey()
 * @method $this withPromptKey($value)
 * @method string getNamespaceId()
 * @method $this withNamespaceId($value)
 * @method string getTargetVersion()
 * @method $this withTargetVersion($value)
 * @method string getTemplate()
 * @method $this withTemplate($value)
 * @method string getBasedOnVersion()
 * @method $this withBasedOnVersion($value)
 * @method string getVariables()
 * @method $this withVariables($value)
 * @method string getCommitMsg()
 * @method $this withCommitMsg($value)
 */
class CreatePromptVersion extends Rpc
{
}

/**
 * @method string getNamespaceId()
 * @method $this withNamespaceId($value)
 * @method string getTargetVersion()
 * @method $this withTargetVersion($value)
 * @method string getSkillCard()
 * @method $this withSkillCard($value)
 * @method string getBasedOnVersion()
 * @method $this withBasedOnVersion($value)
 * @method string getSkillName()
 * @method $this withSkillName($value)
 * @method string getCommitMsg()
 * @method $this withCommitMsg($value)
 */
class CreateSkillDraft extends Rpc
{
}

/**
 * @method string getNamespaceId()
 * @method $this withNamespaceId($value)
 */
class DeleteNamespace extends Rpc
{
}

/**
 * @method string getPromptKey()
 * @method $this withPromptKey($value)
 * @method string getNamespaceId()
 * @method $this withNamespaceId($value)
 */
class DeletePrompt extends Rpc
{
}

/**
 * @method string getNamespaceId()
 * @method $this withNamespaceId($value)
 * @method string getSkillName()
 * @method $this withSkillName($value)
 */
class DeleteSkill extends Rpc
{
}

/**
 * @method string getNamespaceId()
 * @method $this withNamespaceId($value)
 * @method string getSkillVersion()
 * @method $this withSkillVersion($value)
 * @method string getSkillName()
 * @method $this withSkillName($value)
 */
class DownloadSkillVersionViaOss extends Rpc
{
}

/**
 * @method string getNamespaceId()
 * @method $this withNamespaceId($value)
 * @method string getUpdateLatestLabel()
 * @method $this withUpdateLatestLabel($value)
 * @method string getSkillVersion()
 * @method $this withSkillVersion($value)
 * @method string getSkillName()
 * @method $this withSkillName($value)
 */
class ForcePublishSkillVersion extends Rpc
{
}

/**
 * @method string getNamespaceId()
 * @method $this withNamespaceId($value)
 */
class GetNamespace extends Rpc
{
}

/**
 * @method string getPromptKey()
 * @method $this withPromptKey($value)
 * @method string getNamespaceId()
 * @method $this withNamespaceId($value)
 */
class GetPrompt extends Rpc
{
}

/**
 * @method string getPromptKey()
 * @method $this withPromptKey($value)
 * @method string getNamespaceId()
 * @method $this withNamespaceId($value)
 * @method string getPromptVersion()
 * @method $this withPromptVersion($value)
 */
class GetPromptVersion extends Rpc
{
}

/**
 * @method string getNamespaceId()
 * @method $this withNamespaceId($value)
 * @method string getSkillName()
 * @method $this withSkillName($value)
 */
class GetSkillDetail extends Rpc
{
}

/**
 * @method string getNamespaceId()
 * @method $this withNamespaceId($value)
 * @method string getContentType()
 * @method $this withContentType($value)
 */
class GetSkillImportFileUrl extends Rpc
{
}

/**
 * @method string getNamespaceId()
 * @method $this withNamespaceId($value)
 * @method string getSkillVersion()
 * @method $this withSkillVersion($value)
 * @method string getSkillName()
 * @method $this withSkillName($value)
 */
class GetSkillVersionDetail extends Rpc
{
}

/**
 * @method string getTags()
 * @method $this withTags($value)
 * @method string getPageNo()
 * @method $this withPageNo($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 */
class ListNamespaces extends Rpc
{
}

/**
 * @method string getPromptKey()
 * @method $this withPromptKey($value)
 * @method string getBizTags()
 * @method $this withBizTags($value)
 * @method string getNamespaceId()
 * @method $this withNamespaceId($value)
 * @method string getPageNo()
 * @method $this withPageNo($value)
 * @method string getSearch()
 * @method $this withSearch($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 */
class ListPrompts extends Rpc
{
}

/**
 * @method string getPromptKey()
 * @method $this withPromptKey($value)
 * @method string getNamespaceId()
 * @method $this withNamespaceId($value)
 * @method string getPageNo()
 * @method $this withPageNo($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 */
class ListPromptVersions extends Rpc
{
}

/**
 * @method string getNamespaceId()
 * @method $this withNamespaceId($value)
 * @method string getOrderBy()
 * @method $this withOrderBy($value)
 * @method string getPageNo()
 * @method $this withPageNo($value)
 * @method string getSearch()
 * @method $this withSearch($value)
 * @method string getScope()
 * @method $this withScope($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getOwner()
 * @method $this withOwner($value)
 * @method string getSkillName()
 * @method $this withSkillName($value)
 */
class ListSkills extends Rpc
{
}

/**
 * @method string getNamespaceId()
 * @method $this withNamespaceId($value)
 * @method string getSkillVersion()
 * @method $this withSkillVersion($value)
 * @method string getScope()
 * @method $this withScope($value)
 * @method string getSkillName()
 * @method $this withSkillName($value)
 */
class OfflineSkill extends Rpc
{
}

/**
 * @method string getNamespaceId()
 * @method $this withNamespaceId($value)
 * @method string getSkillVersion()
 * @method $this withSkillVersion($value)
 * @method string getScope()
 * @method $this withScope($value)
 * @method string getSkillName()
 * @method $this withSkillName($value)
 */
class OnlineSkill extends Rpc
{
}

/**
 * @method string getNamespaceId()
 * @method $this withNamespaceId($value)
 * @method string getUpdateLatestLabel()
 * @method $this withUpdateLatestLabel($value)
 * @method string getSkillVersion()
 * @method $this withSkillVersion($value)
 * @method string getSkillName()
 * @method $this withSkillName($value)
 */
class PublishSkillVersion extends Rpc
{
}

/**
 * @method string getNamespaceId()
 * @method $this withNamespaceId($value)
 * @method string getSkillVersion()
 * @method $this withSkillVersion($value)
 * @method string getSkillName()
 * @method $this withSkillName($value)
 */
class RedraftSkillVersion extends Rpc
{
}

/**
 * @method string getPromptKey()
 * @method $this withPromptKey($value)
 * @method string getNamespaceId()
 * @method $this withNamespaceId($value)
 * @method string getPromptVersion()
 * @method $this withPromptVersion($value)
 */
class SubmitPromptVersion extends Rpc
{
}

/**
 * @method string getNamespaceId()
 * @method $this withNamespaceId($value)
 * @method string getSkillVersion()
 * @method $this withSkillVersion($value)
 * @method string getSkillName()
 * @method $this withSkillName($value)
 */
class SubmitSkillVersion extends Rpc
{
}

/**
 * @method string getNamespaceId()
 * @method $this withNamespaceId($value)
 * @method string getTags()
 * @method $this withTags($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getScanPolicy()
 * @method $this withScanPolicy($value)
 */
class UpdateNamespace extends Rpc
{
}

/**
 * @method string getPromptKey()
 * @method $this withPromptKey($value)
 * @method string getBizTags()
 * @method $this withBizTags($value)
 * @method string getNamespaceId()
 * @method $this withNamespaceId($value)
 * @method string getLabels()
 * @method $this withLabels($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 */
class UpdatePrompt extends Rpc
{
}

/**
 * @method string getPromptKey()
 * @method $this withPromptKey($value)
 * @method string getNamespaceId()
 * @method $this withNamespaceId($value)
 * @method string getTemplate()
 * @method $this withTemplate($value)
 * @method string getVariables()
 * @method $this withVariables($value)
 * @method string getCommitMsg()
 * @method $this withCommitMsg($value)
 */
class UpdatePromptVersion extends Rpc
{
}

/**
 * @method string getBizTags()
 * @method $this withBizTags($value)
 * @method string getNamespaceId()
 * @method $this withNamespaceId($value)
 * @method string getSkillName()
 * @method $this withSkillName($value)
 */
class UpdateSkillBizTags extends Rpc
{
}

/**
 * @method string getNamespaceId()
 * @method $this withNamespaceId($value)
 * @method string getSkillCard()
 * @method $this withSkillCard($value)
 * @method string getSkillName()
 * @method $this withSkillName($value)
 * @method string getCommitMsg()
 * @method $this withCommitMsg($value)
 */
class UpdateSkillDraft extends Rpc
{
}

/**
 * @method string getNamespaceId()
 * @method $this withNamespaceId($value)
 * @method string getLabels()
 * @method $this withLabels($value)
 * @method string getSkillName()
 * @method $this withSkillName($value)
 */
class UpdateSkillLabels extends Rpc
{
}

/**
 * @method string getNamespaceId()
 * @method $this withNamespaceId($value)
 * @method string getScope()
 * @method $this withScope($value)
 * @method string getSkillName()
 * @method $this withSkillName($value)
 */
class UpdateSkillScope extends Rpc
{
}

/**
 * @method string getNamespaceId()
 * @method $this withNamespaceId($value)
 * @method string getOverwrite()
 * @method $this withOverwrite($value)
 * @method string getTargetVersion()
 * @method $this withTargetVersion($value)
 * @method string getOssObjectName()
 * @method $this withOssObjectName($value)
 * @method string getCommitMsg()
 * @method $this withCommitMsg($value)
 */
class UploadSkillViaOss extends Rpc
{
}
