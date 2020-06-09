<?php

namespace AlibabaCloud\Cr\V20160607;

use AlibabaCloud\Client\Resolver\ApiResolver;

/**
 * @method CancelRepoBuild cancelRepoBuild(array $options = [])
 * @method CreateNamespace createNamespace(array $options = [])
 * @method CreateRepo createRepo(array $options = [])
 * @method CreateRepoBuildRule createRepoBuildRule(array $options = [])
 * @method CreateRepoWebhook createRepoWebhook(array $options = [])
 * @method CreateUserInfo createUserInfo(array $options = [])
 * @method DeleteImage deleteImage(array $options = [])
 * @method DeleteNamespace deleteNamespace(array $options = [])
 * @method DeleteRepo deleteRepo(array $options = [])
 * @method DeleteRepoBuildRule deleteRepoBuildRule(array $options = [])
 * @method DeleteRepoWebhook deleteRepoWebhook(array $options = [])
 * @method GetAuthorizationToken getAuthorizationToken(array $options = [])
 * @method GetImageLayer getImageLayer(array $options = [])
 * @method GetImageManifest getImageManifest(array $options = [])
 * @method GetNamespace getNamespace(array $options = [])
 * @method GetNamespaceList getNamespaceList(array $options = [])
 * @method GetRegion getRegion(array $options = [])
 * @method GetRegionList getRegionList(array $options = [])
 * @method GetRepo getRepo(array $options = [])
 * @method GetRepoBuildList getRepoBuildList(array $options = [])
 * @method GetRepoBuildRuleList getRepoBuildRuleList(array $options = [])
 * @method GetRepoBuildStatus getRepoBuildStatus(array $options = [])
 * @method GetRepoList getRepoList(array $options = [])
 * @method GetRepoListByNamespace getRepoListByNamespace(array $options = [])
 * @method GetRepoTag getRepoTag(array $options = [])
 * @method GetRepoTags getRepoTags(array $options = [])
 * @method GetRepoTagScanList getRepoTagScanList(array $options = [])
 * @method GetRepoTagScanStatus getRepoTagScanStatus(array $options = [])
 * @method GetRepoTagScanSummary getRepoTagScanSummary(array $options = [])
 * @method GetRepoWebhook getRepoWebhook(array $options = [])
 * @method StartImageScan startImageScan(array $options = [])
 * @method StartRepoBuildByRule startRepoBuildByRule(array $options = [])
 * @method UpdateNamespace updateNamespace(array $options = [])
 * @method UpdateRepo updateRepo(array $options = [])
 * @method UpdateRepoBuildRule updateRepoBuildRule(array $options = [])
 * @method UpdateRepoWebhook updateRepoWebhook(array $options = [])
 * @method UpdateUserInfo updateUserInfo(array $options = [])
 */
class CrApiResolver extends ApiResolver
{
}

class Roa extends \AlibabaCloud\Client\Resolver\Roa
{
    /** @var string */
    public $product = 'cr';

    /** @var string */
    public $version = '2016-06-07';

    /** @var string */
    public $serviceCode = 'acr';
}

/**
 * @method string getBuildId()
 * @method $this withBuildId($value)
 * @method string getRepoNamespace()
 * @method $this withRepoNamespace($value)
 * @method string getRepoName()
 * @method $this withRepoName($value)
 */
class CancelRepoBuild extends Roa
{
    /** @var string */
    public $pathPattern = '/repos/[RepoNamespace]/[RepoName]/build/[BuildId]/cancel';

    /** @var string */
    public $method = 'POST';
}

class CreateNamespace extends Roa
{
    /** @var string */
    public $pathPattern = '/namespace';

    /** @var string */
    public $method = 'PUT';
}

class CreateRepo extends Roa
{
    /** @var string */
    public $pathPattern = '/repos';

    /** @var string */
    public $method = 'PUT';
}

/**
 * @method string getRepoNamespace()
 * @method $this withRepoNamespace($value)
 * @method string getRepoName()
 * @method $this withRepoName($value)
 */
class CreateRepoBuildRule extends Roa
{
    /** @var string */
    public $pathPattern = '/repos/[RepoNamespace]/[RepoName]/rules';

    /** @var string */
    public $method = 'PUT';
}

/**
 * @method string getRepoNamespace()
 * @method $this withRepoNamespace($value)
 * @method string getRepoName()
 * @method $this withRepoName($value)
 */
class CreateRepoWebhook extends Roa
{
    /** @var string */
    public $pathPattern = '/repos/[RepoNamespace]/[RepoName]/webhooks';

    /** @var string */
    public $method = 'PUT';
}

class CreateUserInfo extends Roa
{
    /** @var string */
    public $pathPattern = '/users';

    /** @var string */
    public $method = 'PUT';
}

/**
 * @method string getRepoNamespace()
 * @method $this withRepoNamespace($value)
 * @method string getRepoName()
 * @method $this withRepoName($value)
 * @method string getTag()
 * @method $this withTag($value)
 */
class DeleteImage extends Roa
{
    /** @var string */
    public $pathPattern = '/repos/[RepoNamespace]/[RepoName]/tags/[Tag]';

    /** @var string */
    public $method = 'DELETE';
}

/**
 * @method string getNamespace()
 * @method $this withNamespace($value)
 */
class DeleteNamespace extends Roa
{
    /** @var string */
    public $pathPattern = '/namespace/[Namespace]';

    /** @var string */
    public $method = 'DELETE';
}

/**
 * @method string getRepoNamespace()
 * @method $this withRepoNamespace($value)
 * @method string getRepoName()
 * @method $this withRepoName($value)
 */
class DeleteRepo extends Roa
{
    /** @var string */
    public $pathPattern = '/repos/[RepoNamespace]/[RepoName]';

    /** @var string */
    public $method = 'DELETE';
}

/**
 * @method string getBuildRuleId()
 * @method $this withBuildRuleId($value)
 * @method string getRepoNamespace()
 * @method $this withRepoNamespace($value)
 * @method string getRepoName()
 * @method $this withRepoName($value)
 */
class DeleteRepoBuildRule extends Roa
{
    /** @var string */
    public $pathPattern = '/repos/[RepoNamespace]/[RepoName]/rules/[BuildRuleId]';

    /** @var string */
    public $method = 'DELETE';
}

/**
 * @method string getWebhookId()
 * @method $this withWebhookId($value)
 * @method string getRepoNamespace()
 * @method $this withRepoNamespace($value)
 * @method string getRepoName()
 * @method $this withRepoName($value)
 */
class DeleteRepoWebhook extends Roa
{
    /** @var string */
    public $pathPattern = '/repos/[RepoNamespace]/[RepoName]/webhooks/[WebhookId]';

    /** @var string */
    public $method = 'DELETE';
}

class GetAuthorizationToken extends Roa
{
    /** @var string */
    public $pathPattern = '/tokens';
}

/**
 * @method string getRepoNamespace()
 * @method $this withRepoNamespace($value)
 * @method string getRepoName()
 * @method $this withRepoName($value)
 * @method string getTag()
 * @method $this withTag($value)
 */
class GetImageLayer extends Roa
{
    /** @var string */
    public $pathPattern = '/repos/[RepoNamespace]/[RepoName]/tags/[Tag]/layers';
}

/**
 * @method string getSchemaVersion()
 * @method string getRepoNamespace()
 * @method $this withRepoNamespace($value)
 * @method string getRepoName()
 * @method $this withRepoName($value)
 * @method string getTag()
 * @method $this withTag($value)
 */
class GetImageManifest extends Roa
{
    /** @var string */
    public $pathPattern = '/repos/[RepoNamespace]/[RepoName]/tags/[Tag]/manifest';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSchemaVersion($value)
    {
        $this->data['SchemaVersion'] = $value;
        $this->options['query']['SchemaVersion'] = $value;

        return $this;
    }
}

/**
 * @method string getNamespace()
 * @method $this withNamespace($value)
 */
class GetNamespace extends Roa
{
    /** @var string */
    public $pathPattern = '/namespace/[Namespace]';
}

/**
 * @method string getAuthorize()
 * @method string getStatus()
 */
class GetNamespaceList extends Roa
{
    /** @var string */
    public $pathPattern = '/namespace';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAuthorize($value)
    {
        $this->data['Authorize'] = $value;
        $this->options['query']['Authorize'] = $value;

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
        $this->options['query']['Status'] = $value;

        return $this;
    }
}

/**
 * @method string getDomain()
 */
class GetRegion extends Roa
{
    /** @var string */
    public $pathPattern = '/regions';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDomain($value)
    {
        $this->data['Domain'] = $value;
        $this->options['query']['Domain'] = $value;

        return $this;
    }
}

class GetRegionList extends Roa
{
    /** @var string */
    public $pathPattern = '/regions';
}

/**
 * @method string getRepoNamespace()
 * @method $this withRepoNamespace($value)
 * @method string getRepoName()
 * @method $this withRepoName($value)
 */
class GetRepo extends Roa
{
    /** @var string */
    public $pathPattern = '/repos/[RepoNamespace]/[RepoName]';
}

/**
 * @method string getRepoNamespace()
 * @method $this withRepoNamespace($value)
 * @method string getRepoName()
 * @method $this withRepoName($value)
 * @method string getPageSize()
 * @method string getPage()
 */
class GetRepoBuildList extends Roa
{
    /** @var string */
    public $pathPattern = '/repos/[RepoNamespace]/[RepoName]/build';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPageSize($value)
    {
        $this->data['PageSize'] = $value;
        $this->options['query']['PageSize'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPage($value)
    {
        $this->data['Page'] = $value;
        $this->options['query']['Page'] = $value;

        return $this;
    }
}

/**
 * @method string getRepoNamespace()
 * @method $this withRepoNamespace($value)
 * @method string getRepoName()
 * @method $this withRepoName($value)
 */
class GetRepoBuildRuleList extends Roa
{
    /** @var string */
    public $pathPattern = '/repos/[RepoNamespace]/[RepoName]/rules';
}

/**
 * @method string getBuildId()
 * @method $this withBuildId($value)
 * @method string getRepoNamespace()
 * @method $this withRepoNamespace($value)
 * @method string getRepoName()
 * @method $this withRepoName($value)
 */
class GetRepoBuildStatus extends Roa
{
    /** @var string */
    public $pathPattern = '/repos/[RepoNamespace]/[RepoName]/build/[BuildId]/status';
}

/**
 * @method string getPageSize()
 * @method string getPage()
 * @method string getStatus()
 */
class GetRepoList extends Roa
{
    /** @var string */
    public $pathPattern = '/repos';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPageSize($value)
    {
        $this->data['PageSize'] = $value;
        $this->options['query']['PageSize'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPage($value)
    {
        $this->data['Page'] = $value;
        $this->options['query']['Page'] = $value;

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
        $this->options['query']['Status'] = $value;

        return $this;
    }
}

/**
 * @method string getRepoNamespace()
 * @method $this withRepoNamespace($value)
 * @method string getPageSize()
 * @method string getPage()
 * @method string getStatus()
 */
class GetRepoListByNamespace extends Roa
{
    /** @var string */
    public $pathPattern = '/repos/[RepoNamespace]';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPageSize($value)
    {
        $this->data['PageSize'] = $value;
        $this->options['query']['PageSize'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPage($value)
    {
        $this->data['Page'] = $value;
        $this->options['query']['Page'] = $value;

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
        $this->options['query']['Status'] = $value;

        return $this;
    }
}

/**
 * @method string getRepoNamespace()
 * @method $this withRepoNamespace($value)
 * @method string getRepoName()
 * @method $this withRepoName($value)
 * @method string getTag()
 * @method $this withTag($value)
 */
class GetRepoTag extends Roa
{
    /** @var string */
    public $pathPattern = '/repos/[RepoNamespace]/[RepoName]/tags/[Tag]';
}

/**
 * @method string getRepoNamespace()
 * @method $this withRepoNamespace($value)
 * @method string getRepoName()
 * @method $this withRepoName($value)
 * @method string getPageSize()
 * @method string getPage()
 */
class GetRepoTags extends Roa
{
    /** @var string */
    public $pathPattern = '/repos/[RepoNamespace]/[RepoName]/tags';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPageSize($value)
    {
        $this->data['PageSize'] = $value;
        $this->options['query']['PageSize'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPage($value)
    {
        $this->data['Page'] = $value;
        $this->options['query']['Page'] = $value;

        return $this;
    }
}

/**
 * @method string getSeverity()
 * @method string getRepoNamespace()
 * @method $this withRepoNamespace($value)
 * @method string getRepoName()
 * @method $this withRepoName($value)
 * @method string getPageSize()
 * @method string getTag()
 * @method $this withTag($value)
 * @method string getPage()
 */
class GetRepoTagScanList extends Roa
{
    /** @var string */
    public $pathPattern = '/repos/[RepoNamespace]/[RepoName]/tags/[Tag]/scanResult';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSeverity($value)
    {
        $this->data['Severity'] = $value;
        $this->options['query']['Severity'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPageSize($value)
    {
        $this->data['PageSize'] = $value;
        $this->options['query']['PageSize'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPage($value)
    {
        $this->data['Page'] = $value;
        $this->options['query']['Page'] = $value;

        return $this;
    }
}

/**
 * @method string getRepoNamespace()
 * @method $this withRepoNamespace($value)
 * @method string getRepoName()
 * @method $this withRepoName($value)
 * @method string getTag()
 * @method $this withTag($value)
 */
class GetRepoTagScanStatus extends Roa
{
    /** @var string */
    public $pathPattern = '/repos/[RepoNamespace]/[RepoName]/tags/[Tag]/scanStatus';
}

/**
 * @method string getRepoNamespace()
 * @method $this withRepoNamespace($value)
 * @method string getRepoName()
 * @method $this withRepoName($value)
 * @method string getTag()
 * @method $this withTag($value)
 */
class GetRepoTagScanSummary extends Roa
{
    /** @var string */
    public $pathPattern = '/repos/[RepoNamespace]/[RepoName]/tags/[Tag]/scanCount';
}

/**
 * @method string getRepoNamespace()
 * @method $this withRepoNamespace($value)
 * @method string getRepoName()
 * @method $this withRepoName($value)
 */
class GetRepoWebhook extends Roa
{
    /** @var string */
    public $pathPattern = '/repos/[RepoNamespace]/[RepoName]/webhooks';
}

/**
 * @method string getRepoNamespace()
 * @method $this withRepoNamespace($value)
 * @method string getRepoName()
 * @method $this withRepoName($value)
 * @method string getTag()
 * @method $this withTag($value)
 */
class StartImageScan extends Roa
{
    /** @var string */
    public $pathPattern = '/repos/[RepoNamespace]/[RepoName]/tags/[Tag]/scan';

    /** @var string */
    public $method = 'PUT';
}

/**
 * @method string getBuildRuleId()
 * @method $this withBuildRuleId($value)
 * @method string getRepoNamespace()
 * @method $this withRepoNamespace($value)
 * @method string getRepoName()
 * @method $this withRepoName($value)
 */
class StartRepoBuildByRule extends Roa
{
    /** @var string */
    public $pathPattern = '/repos/[RepoNamespace]/[RepoName]/rules/[BuildRuleId]/build';

    /** @var string */
    public $method = 'PUT';
}

/**
 * @method string getNamespace()
 * @method $this withNamespace($value)
 */
class UpdateNamespace extends Roa
{
    /** @var string */
    public $pathPattern = '/namespace/[Namespace]';

    /** @var string */
    public $method = 'POST';
}

/**
 * @method string getRepoNamespace()
 * @method $this withRepoNamespace($value)
 * @method string getRepoName()
 * @method $this withRepoName($value)
 */
class UpdateRepo extends Roa
{
    /** @var string */
    public $pathPattern = '/repos/[RepoNamespace]/[RepoName]';

    /** @var string */
    public $method = 'POST';
}

/**
 * @method string getBuildRuleId()
 * @method $this withBuildRuleId($value)
 * @method string getRepoNamespace()
 * @method $this withRepoNamespace($value)
 * @method string getRepoName()
 * @method $this withRepoName($value)
 */
class UpdateRepoBuildRule extends Roa
{
    /** @var string */
    public $pathPattern = '/repos/[RepoNamespace]/[RepoName]/rules/[BuildRuleId]';

    /** @var string */
    public $method = 'POST';
}

/**
 * @method string getWebhookId()
 * @method $this withWebhookId($value)
 * @method string getRepoNamespace()
 * @method $this withRepoNamespace($value)
 * @method string getRepoName()
 * @method $this withRepoName($value)
 */
class UpdateRepoWebhook extends Roa
{
    /** @var string */
    public $pathPattern = '/repos/[RepoNamespace]/[RepoName]/webhooks/[WebhookId]';

    /** @var string */
    public $method = 'POST';
}

class UpdateUserInfo extends Roa
{
    /** @var string */
    public $pathPattern = '/users';

    /** @var string */
    public $method = 'POST';
}
