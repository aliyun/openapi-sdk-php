<?php

namespace AlibabaCloud\Cr\V20160607;

use AlibabaCloud\Client\Resolver\ApiResolver;

/**
 * @method DeleteUserSourceAccount deleteUserSourceAccount(array $options = [])
 * @method GetRepoSyncTaskList getRepoSyncTaskList(array $options = [])
 * @method DeleteImage deleteImage(array $options = [])
 * @method GetAuthorizationToken getAuthorizationToken(array $options = [])
 * @method UpdateRepoSourceRepo updateRepoSourceRepo(array $options = [])
 * @method UpdateUserInfo updateUserInfo(array $options = [])
 * @method UpdateRepoWebhook updateRepoWebhook(array $options = [])
 * @method UpdateRepoBuildRule updateRepoBuildRule(array $options = [])
 * @method UpdateRepoAuthorization updateRepoAuthorization(array $options = [])
 * @method UpdateRepo updateRepo(array $options = [])
 * @method UpdateNamespaceAuthorization updateNamespaceAuthorization(array $options = [])
 * @method UpdateNamespace updateNamespace(array $options = [])
 * @method StartRepoBuildByRule startRepoBuildByRule(array $options = [])
 * @method StartImageScan startImageScan(array $options = [])
 * @method SearchRepo searchRepo(array $options = [])
 * @method GetUserSourceRepoRefList getUserSourceRepoRefList(array $options = [])
 * @method GetUserSourceRepoList getUserSourceRepoList(array $options = [])
 * @method GetUserSourceAccount getUserSourceAccount(array $options = [])
 * @method GetSubUserList getSubUserList(array $options = [])
 * @method GetRepoWebhookLogList getRepoWebhookLogList(array $options = [])
 * @method GetRepoSourceRepo getRepoSourceRepo(array $options = [])
 * @method GetRepoBuildRuleList getRepoBuildRuleList(array $options = [])
 * @method GetRepoBuildList getRepoBuildList(array $options = [])
 * @method GetNamespace getNamespace(array $options = [])
 * @method GetMirrorList getMirrorList(array $options = [])
 * @method GetImageScan getImageScan(array $options = [])
 * @method GetImageLayer getImageLayer(array $options = [])
 * @method DeleteRepoBuildRule deleteRepoBuildRule(array $options = [])
 * @method DeleteNamespace deleteNamespace(array $options = [])
 * @method CreateUserSourceAccount createUserSourceAccount(array $options = [])
 * @method CreateUserInfo createUserInfo(array $options = [])
 * @method CreateRepoBuildRule createRepoBuildRule(array $options = [])
 * @method CancelRepoBuild cancelRepoBuild(array $options = [])
 * @method GetRepoBatch getRepoBatch(array $options = [])
 * @method GetImageManifest getImageManifest(array $options = [])
 * @method GetCollection getCollection(array $options = [])
 * @method DeleteCollection deleteCollection(array $options = [])
 * @method CreateCollection createCollection(array $options = [])
 * @method GetSearch getSearch(array $options = [])
 * @method CreateNamespace createNamespace(array $options = [])
 * @method GetRepoWebhook getRepoWebhook(array $options = [])
 * @method DeleteRepoWebhook deleteRepoWebhook(array $options = [])
 * @method GetRepo getRepo(array $options = [])
 * @method GetNamespaceList getNamespaceList(array $options = [])
 * @method GetRepoListByNamespace getRepoListByNamespace(array $options = [])
 * @method GetRepoSyncTask getRepoSyncTask(array $options = [])
 * @method GetRegion getRegion(array $options = [])
 * @method CreateRepoSyncTask createRepoSyncTask(array $options = [])
 * @method GetRepoAuthorizationList getRepoAuthorizationList(array $options = [])
 * @method GetRegionList getRegionList(array $options = [])
 * @method GetNamespaceAuthorizationList getNamespaceAuthorizationList(array $options = [])
 * @method DeleteRepoAuthorization deleteRepoAuthorization(array $options = [])
 * @method DeleteRepo deleteRepo(array $options = [])
 * @method DeleteNamespaceAuthorization deleteNamespaceAuthorization(array $options = [])
 * @method CreateRepoWebhook createRepoWebhook(array $options = [])
 * @method CreateRepoAuthorization createRepoAuthorization(array $options = [])
 * @method CreateNamespaceAuthorization createNamespaceAuthorization(array $options = [])
 * @method StartRepoBuild startRepoBuild(array $options = [])
 * @method GetUserInfo getUserInfo(array $options = [])
 * @method GetRepoTags getRepoTags(array $options = [])
 * @method GetRepoList getRepoList(array $options = [])
 * @method GetRepoBuildStatus getRepoBuildStatus(array $options = [])
 * @method GetRepoBuildLogs getRepoBuildLogs(array $options = [])
 * @method CreateRepo createRepo(array $options = [])
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
    public $serviceCode = 'cr';
}

/**
 * @method string getSourceAccountId()
 * @method $this withSourceAccountId($value)
 */
class DeleteUserSourceAccount extends Roa
{
    /** @var string */
    public $pathPattern = '/users/sourceAccount/[SourceAccountId]';

    /** @var string */
    public $method = 'DELETE';
}

/**
 * @method string getRepoNamespace()
 * @method $this withRepoNamespace($value)
 * @method string getRepoName()
 * @method $this withRepoName($value)
 * @method string getPageSize()
 * @method string getPage()
 */
class GetRepoSyncTaskList extends Roa
{
    /** @var string */
    public $pathPattern = '/repos/[RepoNamespace]/[RepoName]/syncTasks';

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
class DeleteImage extends Roa
{
    /** @var string */
    public $pathPattern = '/repos/[RepoNamespace]/[RepoName]/tags/[Tag]';

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
 */
class UpdateRepoSourceRepo extends Roa
{
    /** @var string */
    public $pathPattern = '/repos/[RepoNamespace]/[RepoName]/sourceRepo';

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

/**
 * @method string getRepoNamespace()
 * @method $this withRepoNamespace($value)
 * @method string getWebhookId()
 * @method $this withWebhookId($value)
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

/**
 * @method string getRepoNamespace()
 * @method $this withRepoNamespace($value)
 * @method string getRepoName()
 * @method $this withRepoName($value)
 * @method string getBuildRuleId()
 * @method $this withBuildRuleId($value)
 */
class UpdateRepoBuildRule extends Roa
{
    /** @var string */
    public $pathPattern = '/repos/[RepoNamespace]/[RepoName]/rules/[BuildRuleId]';

    /** @var string */
    public $method = 'POST';
}

/**
 * @method string getRepoNamespace()
 * @method $this withRepoNamespace($value)
 * @method string getRepoName()
 * @method $this withRepoName($value)
 * @method string getAuthorizeId()
 * @method $this withAuthorizeId($value)
 */
class UpdateRepoAuthorization extends Roa
{
    /** @var string */
    public $pathPattern = '/repos/[RepoNamespace]/[RepoName]/authorizations/[AuthorizeId]';

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
 * @method string getAuthorizeId()
 * @method $this withAuthorizeId($value)
 * @method string getNamespace()
 * @method $this withNamespace($value)
 */
class UpdateNamespaceAuthorization extends Roa
{
    /** @var string */
    public $pathPattern = '/namespace/[Namespace]/authorizations/[AuthorizeId]';

    /** @var string */
    public $method = 'POST';
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
 * @method string getBuildRuleId()
 * @method $this withBuildRuleId($value)
 */
class StartRepoBuildByRule extends Roa
{
    /** @var string */
    public $pathPattern = '/repos/[RepoNamespace]/[RepoName]/rules/[BuildRuleId]/build';

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
class StartImageScan extends Roa
{
    /** @var string */
    public $pathPattern = '/repos/[RepoNamespace]/[RepoName]/tags/[Tag]/scan';

    /** @var string */
    public $method = 'PUT';
}

/**
 * @method string getOrigin()
 * @method string getPageSize()
 * @method string getPage()
 * @method string getKeyword()
 */
class SearchRepo extends Roa
{
    /** @var string */
    public $pathPattern = '/search';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOrigin($value)
    {
        $this->data['Origin'] = $value;
        $this->options['query']['Origin'] = $value;

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

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withKeyword($value)
    {
        $this->data['Keyword'] = $value;
        $this->options['query']['Keyword'] = $value;

        return $this;
    }
}

/**
 * @method string getSourceAccountId()
 * @method $this withSourceAccountId($value)
 * @method string getSourceRepoName()
 * @method $this withSourceRepoName($value)
 * @method string getSourceRepoNamespace()
 * @method $this withSourceRepoNamespace($value)
 */
class GetUserSourceRepoRefList extends Roa
{
    /** @var string */
    public $pathPattern = '/users/sourceAccount/[SourceAccountId]/repos/[SourceRepoNamespace]/[SourceRepoName]/refs';
}

/**
 * @method string getSourceAccountId()
 * @method $this withSourceAccountId($value)
 */
class GetUserSourceRepoList extends Roa
{
    /** @var string */
    public $pathPattern = '/users/sourceAccount/[SourceAccountId]/repos';
}

/**
 * @method string getSourceOriginType()
 */
class GetUserSourceAccount extends Roa
{
    /** @var string */
    public $pathPattern = '/users/sourceAccount';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSourceOriginType($value)
    {
        $this->data['SourceOriginType'] = $value;
        $this->options['query']['SourceOriginType'] = $value;

        return $this;
    }
}

class GetSubUserList extends Roa
{
    /** @var string */
    public $pathPattern = '/users/subAccount';
}

/**
 * @method string getRepoNamespace()
 * @method $this withRepoNamespace($value)
 * @method string getWebhookId()
 * @method $this withWebhookId($value)
 * @method string getRepoName()
 * @method $this withRepoName($value)
 */
class GetRepoWebhookLogList extends Roa
{
    /** @var string */
    public $pathPattern = '/repos/[RepoNamespace]/[RepoName]/webhooks/[WebhookId]/logs';
}

/**
 * @method string getRepoNamespace()
 * @method $this withRepoNamespace($value)
 * @method string getRepoName()
 * @method $this withRepoName($value)
 */
class GetRepoSourceRepo extends Roa
{
    /** @var string */
    public $pathPattern = '/repos/[RepoNamespace]/[RepoName]/sourceRepo';
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
 * @method string getNamespace()
 * @method $this withNamespace($value)
 */
class GetNamespace extends Roa
{
    /** @var string */
    public $pathPattern = '/namespace/[Namespace]';
}

class GetMirrorList extends Roa
{
    /** @var string */
    public $pathPattern = '/mirrors';
}

/**
 * @method string getRepoNamespace()
 * @method $this withRepoNamespace($value)
 * @method string getRepoName()
 * @method $this withRepoName($value)
 * @method string getTag()
 * @method $this withTag($value)
 */
class GetImageScan extends Roa
{
    /** @var string */
    public $pathPattern = '/repos/[RepoNamespace]/[RepoName]/tags/[Tag]/scan';
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
 * @method string getRepoNamespace()
 * @method $this withRepoNamespace($value)
 * @method string getRepoName()
 * @method $this withRepoName($value)
 * @method string getBuildRuleId()
 * @method $this withBuildRuleId($value)
 */
class DeleteRepoBuildRule extends Roa
{
    /** @var string */
    public $pathPattern = '/repos/[RepoNamespace]/[RepoName]/rules/[BuildRuleId]';

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

class CreateUserSourceAccount extends Roa
{
    /** @var string */
    public $pathPattern = '/users/sourceAccount';

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
 * @method string getBuildId()
 * @method $this withBuildId($value)
 */
class CancelRepoBuild extends Roa
{
    /** @var string */
    public $pathPattern = '/repos/[RepoNamespace]/[RepoName]/build/[BuildId]/cancel';

    /** @var string */
    public $method = 'POST';
}

/**
 * @method string getRepoIds()
 */
class GetRepoBatch extends Roa
{
    /** @var string */
    public $pathPattern = '/batchsearch';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withRepoIds($value)
    {
        $this->data['RepoIds'] = $value;
        $this->options['query']['RepoIds'] = $value;

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
 * @method string getSchemaVersion()
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
 * @method string getPageSize()
 * @method string getPage()
 */
class GetCollection extends Roa
{
    /** @var string */
    public $pathPattern = '/collections';

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
 * @method string getCollectionId()
 * @method $this withCollectionId($value)
 */
class DeleteCollection extends Roa
{
    /** @var string */
    public $pathPattern = '/collections/[CollectionId]';

    /** @var string */
    public $method = 'DELETE';
}

class CreateCollection extends Roa
{
    /** @var string */
    public $pathPattern = '/collections';

    /** @var string */
    public $method = 'PUT';
}

/**
 * @method string getOrigin()
 * @method string getPageSize()
 * @method string getPage()
 * @method string getKeyword()
 */
class GetSearch extends Roa
{
    /** @var string */
    public $pathPattern = '/search-delete';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOrigin($value)
    {
        $this->data['Origin'] = $value;
        $this->options['query']['Origin'] = $value;

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

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withKeyword($value)
    {
        $this->data['Keyword'] = $value;
        $this->options['query']['Keyword'] = $value;

        return $this;
    }
}

class CreateNamespace extends Roa
{
    /** @var string */
    public $pathPattern = '/namespace';

    /** @var string */
    public $method = 'PUT';
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
 * @method string getWebhookId()
 * @method $this withWebhookId($value)
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
 * @method string getSyncTaskId()
 * @method $this withSyncTaskId($value)
 */
class GetRepoSyncTask extends Roa
{
    /** @var string */
    public $pathPattern = '/repos/[RepoNamespace]/[RepoName]/syncTasks/[SyncTaskId]';
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

/**
 * @method string getRepoNamespace()
 * @method $this withRepoNamespace($value)
 * @method string getRepoName()
 * @method $this withRepoName($value)
 */
class CreateRepoSyncTask extends Roa
{
    /** @var string */
    public $pathPattern = '/repos/[RepoNamespace]/[RepoName]/syncTasks';

    /** @var string */
    public $method = 'PUT';
}

/**
 * @method string getRepoNamespace()
 * @method $this withRepoNamespace($value)
 * @method string getRepoName()
 * @method $this withRepoName($value)
 * @method string getAuthorize()
 */
class GetRepoAuthorizationList extends Roa
{
    /** @var string */
    public $pathPattern = '/repos/[RepoNamespace]/[RepoName]/authorizations';

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
}

class GetRegionList extends Roa
{
    /** @var string */
    public $pathPattern = '/regions';
}

/**
 * @method string getNamespace()
 * @method $this withNamespace($value)
 * @method string getAuthorize()
 */
class GetNamespaceAuthorizationList extends Roa
{
    /** @var string */
    public $pathPattern = '/namespace/[Namespace]/authorizations';

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
}

/**
 * @method string getRepoNamespace()
 * @method $this withRepoNamespace($value)
 * @method string getRepoName()
 * @method $this withRepoName($value)
 * @method string getAuthorizeId()
 * @method $this withAuthorizeId($value)
 */
class DeleteRepoAuthorization extends Roa
{
    /** @var string */
    public $pathPattern = '/repos/[RepoNamespace]/[RepoName]/authorizations/[AuthorizeId]';

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
 * @method string getAuthorizeId()
 * @method $this withAuthorizeId($value)
 * @method string getNamespace()
 * @method $this withNamespace($value)
 */
class DeleteNamespaceAuthorization extends Roa
{
    /** @var string */
    public $pathPattern = '/namespace/[Namespace]/authorizations/[AuthorizeId]';

    /** @var string */
    public $method = 'DELETE';
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

/**
 * @method string getRepoNamespace()
 * @method $this withRepoNamespace($value)
 * @method string getRepoName()
 * @method $this withRepoName($value)
 */
class CreateRepoAuthorization extends Roa
{
    /** @var string */
    public $pathPattern = '/repos/[RepoNamespace]/[RepoName]/authorizations';

    /** @var string */
    public $method = 'PUT';
}

/**
 * @method string getNamespace()
 * @method $this withNamespace($value)
 */
class CreateNamespaceAuthorization extends Roa
{
    /** @var string */
    public $pathPattern = '/namespace/[Namespace]/authorizations';

    /** @var string */
    public $method = 'PUT';
}

/**
 * @method string getRepoNamespace()
 * @method $this withRepoNamespace($value)
 * @method string getRepoName()
 * @method $this withRepoName($value)
 */
class StartRepoBuild extends Roa
{
    /** @var string */
    public $pathPattern = '/repos/[RepoNamespace]/[RepoName]/build';

    /** @var string */
    public $method = 'PUT';
}

class GetUserInfo extends Roa
{
    /** @var string */
    public $pathPattern = '/users';
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
 * @method string getRepoName()
 * @method $this withRepoName($value)
 * @method string getBuildId()
 * @method $this withBuildId($value)
 */
class GetRepoBuildStatus extends Roa
{
    /** @var string */
    public $pathPattern = '/repos/[RepoNamespace]/[RepoName]/build/[BuildId]/status';
}

/**
 * @method string getRepoNamespace()
 * @method $this withRepoNamespace($value)
 * @method string getRepoName()
 * @method $this withRepoName($value)
 * @method string getBuildId()
 * @method $this withBuildId($value)
 */
class GetRepoBuildLogs extends Roa
{
    /** @var string */
    public $pathPattern = '/repos/[RepoNamespace]/[RepoName]/build/[BuildId]/logs';
}

class CreateRepo extends Roa
{
    /** @var string */
    public $pathPattern = '/repos';

    /** @var string */
    public $method = 'PUT';
}
