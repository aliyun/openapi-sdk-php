<?php

namespace AlibabaCloud\Cr\V20160607;

use AlibabaCloud\Roa;

class V20160607Roa extends Roa
{
    /**
     * @var string
     */
    public $product = 'cr';

    /**
     * @var string
     */
    public $version = '2016-06-07';

    /**
     * @var string
     */
    public $method = 'DELETE';

    /**
     * @var string
     */
    public $serviceCode = 'cr';
}

/**
 * @method string getSourceAccountId()
 * @method $this withSourceAccountId($value)
 */
class DeleteUserSourceAccount extends V20160607Roa
{
    public $pathPattern = '/users/sourceAccount/[SourceAccountId]';

}

/**
 * @method string getRepoNamespace()
 * @method $this withRepoNamespace($value)
 * @method string getRepoName()
 * @method $this withRepoName($value)
 * @method string getPageSize()
 * @method string getPage()
 */
class GetRepoSyncTaskList extends V20160607Roa
{
    public $pathPattern = '/repos/[RepoNamespace]/[RepoName]/syncTasks';

    public $method = 'GET';

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
class DeleteImage extends V20160607Roa
{
    public $pathPattern = '/repos/[RepoNamespace]/[RepoName]/tags/[Tag]';

}

class GetAuthorizationToken extends V20160607Roa
{
    public $pathPattern = '/tokens';

    public $method = 'GET';
}

/**
 * @method string getRepoNamespace()
 * @method $this withRepoNamespace($value)
 * @method string getRepoName()
 * @method $this withRepoName($value)
 */
class UpdateRepoSourceRepo extends V20160607Roa
{
    public $pathPattern = '/repos/[RepoNamespace]/[RepoName]/sourceRepo';

    public $method = 'POST';
}

/**
 * @method string getRepoNamespace()
 * @method $this withRepoNamespace($value)
 * @method string getRepoName()
 * @method $this withRepoName($value)
 * @method string getPageSize()
 * @method string getPage()
 */
class GetRepoBuildList extends V20160607Roa
{
    public $pathPattern = '/repos/[RepoNamespace]/[RepoName]/build';

    public $method = 'GET';

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
 * @method string getWebhookId()
 * @method $this withWebhookId($value)
 * @method string getRepoName()
 * @method $this withRepoName($value)
 */
class GetRepoWebhookLogList extends V20160607Roa
{
    public $pathPattern = '/repos/[RepoNamespace]/[RepoName]/webhooks/[WebhookId]/logs';

    public $method = 'GET';
}

/**
 * @method string getSourceAccountId()
 * @method $this withSourceAccountId($value)
 * @method string getSourceRepoName()
 * @method $this withSourceRepoName($value)
 * @method string getSourceRepoNamespace()
 * @method $this withSourceRepoNamespace($value)
 */
class GetUserSourceRepoRefList extends V20160607Roa
{
    public $pathPattern = '/users/sourceAccount/[SourceAccountId]/repos/[SourceRepoNamespace]/[SourceRepoName]/refs';

    public $method = 'GET';
}

/**
 * @method string getRepoNamespace()
 * @method $this withRepoNamespace($value)
 * @method string getRepoName()
 * @method $this withRepoName($value)
 */
class GetRepoSourceRepo extends V20160607Roa
{
    public $pathPattern = '/repos/[RepoNamespace]/[RepoName]/sourceRepo';

    public $method = 'GET';
}

class CreateUserInfo extends V20160607Roa
{
    public $pathPattern = '/users';

    public $method = 'PUT';
}

/**
 * @method string getOrigin()
 * @method string getPageSize()
 * @method string getPage()
 * @method string getKeyword()
 */
class SearchRepo extends V20160607Roa
{
    public $pathPattern = '/search';

    public $method = 'GET';

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
 */
class GetUserSourceRepoList extends V20160607Roa
{
    public $pathPattern = '/users/sourceAccount/[SourceAccountId]/repos';

    public $method = 'GET';
}

class UpdateUserInfo extends V20160607Roa
{
    public $pathPattern = '/users';

    public $method = 'POST';
}

/**
 * @method string getRepoNamespace()
 * @method $this withRepoNamespace($value)
 * @method string getRepoName()
 * @method $this withRepoName($value)
 */
class GetRepoBuildRuleList extends V20160607Roa
{
    public $pathPattern = '/repos/[RepoNamespace]/[RepoName]/rules';

    public $method = 'GET';
}

/**
 * @method string getSourceOriginType()
 */
class GetUserSourceAccount extends V20160607Roa
{
    public $pathPattern = '/users/sourceAccount';

    public $method = 'GET';

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

class GetSubUserList extends V20160607Roa
{
    public $pathPattern = '/users/subAccount';

    public $method = 'GET';
}

/**
 * @method string getNamespace()
 * @method $this withNamespace($value)
 */
class GetNamespace extends V20160607Roa
{
    public $pathPattern = '/namespace/[Namespace]';

    public $method = 'GET';
}

class GetMirrorList extends V20160607Roa
{
    public $pathPattern = '/mirrors';

    public $method = 'GET';
}

class CreateUserSourceAccount extends V20160607Roa
{
    public $pathPattern = '/users/sourceAccount';

    public $method = 'PUT';
}

/**
 * @method string getRepoNamespace()
 * @method $this withRepoNamespace($value)
 * @method string getWebhookId()
 * @method $this withWebhookId($value)
 * @method string getRepoName()
 * @method $this withRepoName($value)
 */
class UpdateRepoWebhook extends V20160607Roa
{
    public $pathPattern = '/repos/[RepoNamespace]/[RepoName]/webhooks/[WebhookId]';

    public $method = 'POST';
}

/**
 * @method string getRepoNamespace()
 * @method $this withRepoNamespace($value)
 * @method string getRepoName()
 * @method $this withRepoName($value)
 */
class UpdateRepo extends V20160607Roa
{
    public $pathPattern = '/repos/[RepoNamespace]/[RepoName]';

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
class UpdateRepoAuthorization extends V20160607Roa
{
    public $pathPattern = '/repos/[RepoNamespace]/[RepoName]/authorizations/[AuthorizeId]';

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
class UpdateRepoBuildRule extends V20160607Roa
{
    public $pathPattern = '/repos/[RepoNamespace]/[RepoName]/rules/[BuildRuleId]';

    public $method = 'POST';
}

/**
 * @method string getNamespace()
 * @method $this withNamespace($value)
 */
class UpdateNamespace extends V20160607Roa
{
    public $pathPattern = '/namespace/[Namespace]';

    public $method = 'POST';
}

/**
 * @method string getAuthorizeId()
 * @method $this withAuthorizeId($value)
 * @method string getNamespace()
 * @method $this withNamespace($value)
 */
class UpdateNamespaceAuthorization extends V20160607Roa
{
    public $pathPattern = '/namespace/[Namespace]/authorizations/[AuthorizeId]';

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
class StartRepoBuildByRule extends V20160607Roa
{
    public $pathPattern = '/repos/[RepoNamespace]/[RepoName]/rules/[BuildRuleId]/build';

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
class StartImageScan extends V20160607Roa
{
    public $pathPattern = '/repos/[RepoNamespace]/[RepoName]/tags/[Tag]/scan';

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
class GetImageScan extends V20160607Roa
{
    public $pathPattern = '/repos/[RepoNamespace]/[RepoName]/tags/[Tag]/scan';

    public $method = 'GET';
}

/**
 * @method string getRepoNamespace()
 * @method $this withRepoNamespace($value)
 * @method string getRepoName()
 * @method $this withRepoName($value)
 * @method string getTag()
 * @method $this withTag($value)
 */
class GetImageLayer extends V20160607Roa
{
    public $pathPattern = '/repos/[RepoNamespace]/[RepoName]/tags/[Tag]/layers';

    public $method = 'GET';
}

/**
 * @method string getRepoNamespace()
 * @method $this withRepoNamespace($value)
 * @method string getRepoName()
 * @method $this withRepoName($value)
 * @method string getBuildRuleId()
 * @method $this withBuildRuleId($value)
 */
class DeleteRepoBuildRule extends V20160607Roa
{
    public $pathPattern = '/repos/[RepoNamespace]/[RepoName]/rules/[BuildRuleId]';

}

/**
 * @method string getNamespace()
 * @method $this withNamespace($value)
 */
class DeleteNamespace extends V20160607Roa
{
    public $pathPattern = '/namespace/[Namespace]';

}

/**
 * @method string getRepoNamespace()
 * @method $this withRepoNamespace($value)
 * @method string getRepoName()
 * @method $this withRepoName($value)
 */
class CreateRepoBuildRule extends V20160607Roa
{
    public $pathPattern = '/repos/[RepoNamespace]/[RepoName]/rules';

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
class CancelRepoBuild extends V20160607Roa
{
    public $pathPattern = '/repos/[RepoNamespace]/[RepoName]/build/[BuildId]/cancel';

    public $method = 'POST';
}

/**
 * @method string getRepoIds()
 */
class GetRepoBatch extends V20160607Roa
{
    public $pathPattern = '/batchsearch';

    public $method = 'GET';

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
class GetImageManifest extends V20160607Roa
{
    public $pathPattern = '/repos/[RepoNamespace]/[RepoName]/tags/[Tag]/manifest';

    public $method = 'GET';

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
class GetCollection extends V20160607Roa
{
    public $pathPattern = '/collections';

    public $method = 'GET';

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
class DeleteCollection extends V20160607Roa
{
    public $pathPattern = '/collections/[CollectionId]';

}

class CreateCollection extends V20160607Roa
{
    public $pathPattern = '/collections';

    public $method = 'PUT';
}

/**
 * @method string getOrigin()
 * @method string getPageSize()
 * @method string getPage()
 * @method string getKeyword()
 */
class GetSearch extends V20160607Roa
{
    public $pathPattern = '/search-delete';

    public $method = 'GET';

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

class CreateNamespace extends V20160607Roa
{
    public $pathPattern = '/namespace';

    public $method = 'PUT';
}

/**
 * @method string getRepoNamespace()
 * @method $this withRepoNamespace($value)
 * @method string getRepoName()
 * @method $this withRepoName($value)
 */
class GetRepoWebhook extends V20160607Roa
{
    public $pathPattern = '/repos/[RepoNamespace]/[RepoName]/webhooks';

    public $method = 'GET';
}

/**
 * @method string getRepoNamespace()
 * @method $this withRepoNamespace($value)
 * @method string getWebhookId()
 * @method $this withWebhookId($value)
 * @method string getRepoName()
 * @method $this withRepoName($value)
 */
class DeleteRepoWebhook extends V20160607Roa
{
    public $pathPattern = '/repos/[RepoNamespace]/[RepoName]/webhooks/[WebhookId]';

}

/**
 * @method string getRepoNamespace()
 * @method $this withRepoNamespace($value)
 * @method string getRepoName()
 * @method $this withRepoName($value)
 */
class GetRepo extends V20160607Roa
{
    public $pathPattern = '/repos/[RepoNamespace]/[RepoName]';

    public $method = 'GET';
}

/**
 * @method string getAuthorize()
 * @method string getStatus()
 */
class GetNamespaceList extends V20160607Roa
{
    public $pathPattern = '/namespace';

    public $method = 'GET';

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
class GetRepoListByNamespace extends V20160607Roa
{
    public $pathPattern = '/repos/[RepoNamespace]';

    public $method = 'GET';

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
 */
class CreateRepoSyncTask extends V20160607Roa
{
    public $pathPattern = '/repos/[RepoNamespace]/[RepoName]/syncTasks';

    public $method = 'PUT';
}

/**
 * @method string getRepoNamespace()
 * @method string getRepoName()
 * @method string getTag()
 */
class CreateRepoTagSyncTask extends V20160607Roa
{
    public $pathPattern = '/repos/[repoNamespace]/[repoName]/tags/[tag]/syncTasks';

    public $method = 'PUT';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withRepoNamespace($value)
    {
        $this->data['RepoNamespace'] = $value;
        $this->pathParameters['repoNamespace'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withRepoName($value)
    {
        $this->data['RepoName'] = $value;
        $this->pathParameters['repoName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTag($value)
    {
        $this->data['Tag'] = $value;
        $this->pathParameters['tag'] = $value;

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
class GetRepoSyncTask extends V20160607Roa
{
    public $pathPattern = '/repos/[RepoNamespace]/[RepoName]/syncTasks/[SyncTaskId]';

    public $method = 'GET';
}

/**
 * @method string getRepoNamespace()
 * @method string getRepoName()
 * @method string getTag()
 */
class CreateRepoTagSync extends V20160607Roa
{
    public $pathPattern = '/repos/[repoNamespace]/[repoName]/tags/[tag]/syncTasks';

    public $method = 'PUT';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withRepoNamespace($value)
    {
        $this->data['RepoNamespace'] = $value;
        $this->pathParameters['repoNamespace'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withRepoName($value)
    {
        $this->data['RepoName'] = $value;
        $this->pathParameters['repoName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTag($value)
    {
        $this->data['Tag'] = $value;
        $this->pathParameters['tag'] = $value;

        return $this;
    }
}

class GetRegionList extends V20160607Roa
{
    public $pathPattern = '/regions';

    public $method = 'GET';
}

/**
 * @method string getRepoNamespace()
 * @method $this withRepoNamespace($value)
 * @method string getRepoName()
 * @method $this withRepoName($value)
 * @method string getAuthorize()
 */
class GetRepoAuthorizationList extends V20160607Roa
{
    public $pathPattern = '/repos/[RepoNamespace]/[RepoName]/authorizations';

    public $method = 'GET';

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
class DeleteRepoAuthorization extends V20160607Roa
{
    public $pathPattern = '/repos/[RepoNamespace]/[RepoName]/authorizations/[AuthorizeId]';

}

/**
 * @method string getNamespace()
 * @method $this withNamespace($value)
 * @method string getAuthorize()
 */
class GetNamespaceAuthorizationList extends V20160607Roa
{
    public $pathPattern = '/namespace/[Namespace]/authorizations';

    public $method = 'GET';

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
 */
class CreateRepoWebhook extends V20160607Roa
{
    public $pathPattern = '/repos/[RepoNamespace]/[RepoName]/webhooks';

    public $method = 'PUT';
}

/**
 * @method string getAuthorizeId()
 * @method $this withAuthorizeId($value)
 * @method string getNamespace()
 * @method $this withNamespace($value)
 */
class DeleteNamespaceAuthorization extends V20160607Roa
{
    public $pathPattern = '/namespace/[Namespace]/authorizations/[AuthorizeId]';

}

/**
 * @method string getRepoNamespace()
 * @method $this withRepoNamespace($value)
 * @method string getRepoName()
 * @method $this withRepoName($value)
 */
class DeleteRepo extends V20160607Roa
{
    public $pathPattern = '/repos/[RepoNamespace]/[RepoName]';

}

/**
 * @method string getRepoNamespace()
 * @method $this withRepoNamespace($value)
 * @method string getRepoName()
 * @method $this withRepoName($value)
 */
class CreateRepoAuthorization extends V20160607Roa
{
    public $pathPattern = '/repos/[RepoNamespace]/[RepoName]/authorizations';

    public $method = 'PUT';
}

/**
 * @method string getNamespace()
 * @method $this withNamespace($value)
 */
class CreateNamespaceAuthorization extends V20160607Roa
{
    public $pathPattern = '/namespace/[Namespace]/authorizations';

    public $method = 'PUT';
}

class GetUserInfo extends V20160607Roa
{
    public $pathPattern = '/users';

    public $method = 'GET';
}

class CreateRepo extends V20160607Roa
{
    public $pathPattern = '/repos';

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
class GetRepoBuildLogs extends V20160607Roa
{
    public $pathPattern = '/repos/[RepoNamespace]/[RepoName]/build/[BuildId]/logs';

    public $method = 'GET';
}

/**
 * @method string getRepoNamespace()
 * @method $this withRepoNamespace($value)
 * @method string getRepoName()
 * @method $this withRepoName($value)
 * @method string getBuildId()
 * @method $this withBuildId($value)
 */
class GetRepoBuildStatus extends V20160607Roa
{
    public $pathPattern = '/repos/[RepoNamespace]/[RepoName]/build/[BuildId]/status';

    public $method = 'GET';
}

/**
 * @method string getPageSize()
 * @method string getPage()
 * @method string getStatus()
 */
class GetRepoList extends V20160607Roa
{
    public $pathPattern = '/repos';

    public $method = 'GET';

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
 * @method string getPageSize()
 * @method string getPage()
 */
class GetRepoTags extends V20160607Roa
{
    public $pathPattern = '/repos/[RepoNamespace]/[RepoName]/tags';

    public $method = 'GET';

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
class StartRepoBuild extends V20160607Roa
{
    public $pathPattern = '/repos/[RepoNamespace]/[RepoName]/build';

    public $method = 'PUT';
}
