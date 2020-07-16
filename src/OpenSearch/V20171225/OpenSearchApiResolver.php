<?php

namespace AlibabaCloud\OpenSearch\V20171225;

use AlibabaCloud\Client\Resolver\ApiResolver;

/**
 * @method CompileSortScript compileSortScript(array $options = [])
 * @method CreateApp createApp(array $options = [])
 * @method CreateAppGroup createAppGroup(array $options = [])
 * @method CreateDataCollection createDataCollection(array $options = [])
 * @method CreateFirstRank createFirstRank(array $options = [])
 * @method CreateInterventionDictionary createInterventionDictionary(array $options = [])
 * @method CreateModel createModel(array $options = [])
 * @method CreateQueryProcessor createQueryProcessor(array $options = [])
 * @method CreateScheduledTask createScheduledTask(array $options = [])
 * @method CreateSecondRank createSecondRank(array $options = [])
 * @method CreateSortScript createSortScript(array $options = [])
 * @method DeleteSortScript deleteSortScript(array $options = [])
 * @method DescribeApp describeApp(array $options = [])
 * @method DescribeAppGroup describeAppGroup(array $options = [])
 * @method DescribeAppGroupDataReport describeAppGroupDataReport(array $options = [])
 * @method DescribeApps describeApps(array $options = [])
 * @method DescribeAppStatistics describeAppStatistics(array $options = [])
 * @method DescribeDataCollction describeDataCollction(array $options = [])
 * @method DescribeFirstRank describeFirstRank(array $options = [])
 * @method DescribeInterventionDictionary describeInterventionDictionary(array $options = [])
 * @method DescribeQueryProcessor describeQueryProcessor(array $options = [])
 * @method DescribeRegion describeRegion(array $options = [])
 * @method DescribeRegions describeRegions(array $options = [])
 * @method DescribeScheduledTask describeScheduledTask(array $options = [])
 * @method DescribeSecondRank describeSecondRank(array $options = [])
 * @method DescribeSlowQueryStatus describeSlowQueryStatus(array $options = [])
 * @method DisableSlowQuery disableSlowQuery(array $options = [])
 * @method EnableSlowQuery enableSlowQuery(array $options = [])
 * @method GetModelProgress getModelProgress(array $options = [])
 * @method GetSortScript getSortScript(array $options = [])
 * @method GetSortScriptFile getSortScriptFile(array $options = [])
 * @method ListAppGroupErrors listAppGroupErrors(array $options = [])
 * @method ListAppGroupMetrics listAppGroupMetrics(array $options = [])
 * @method ListAppGroups listAppGroups(array $options = [])
 * @method ListApps listApps(array $options = [])
 * @method ListDataCollections listDataCollections(array $options = [])
 * @method ListDeployedAlgorithmModels listDeployedAlgorithmModels(array $options = [])
 * @method ListFirstRanks listFirstRanks(array $options = [])
 * @method ListInterventionDictionaries listInterventionDictionaries(array $options = [])
 * @method ListInterventionDictionaryEntries listInterventionDictionaryEntries(array $options = [])
 * @method ListInterventionDictionaryNerResults listInterventionDictionaryNerResults(array $options = [])
 * @method ListInterventionDictionaryRelatedEntities listInterventionDictionaryRelatedEntities(array $options = [])
 * @method ListQueryProcessorNers listQueryProcessorNers(array $options = [])
 * @method ListQueryProcessors listQueryProcessors(array $options = [])
 * @method ListScheduledTasks listScheduledTasks(array $options = [])
 * @method ListSecondRanks listSecondRanks(array $options = [])
 * @method ListSlowQueryCategories listSlowQueryCategories(array $options = [])
 * @method ListSlowQueryQueries listSlowQueryQueries(array $options = [])
 * @method ListSortScripts listSortScripts(array $options = [])
 * @method ModifyAppGroup modifyAppGroup(array $options = [])
 * @method ModifyAppGroupQuota modifyAppGroupQuota(array $options = [])
 * @method ModifyFirstRank modifyFirstRank(array $options = [])
 * @method ModifyQueryProcessor modifyQueryProcessor(array $options = [])
 * @method ModifyScheduledTask modifyScheduledTask(array $options = [])
 * @method ModifySecondRank modifySecondRank(array $options = [])
 * @method PushInterventionDictionaryEntries pushInterventionDictionaryEntries(array $options = [])
 * @method ReleaseSortScript releaseSortScript(array $options = [])
 * @method RemoveApp removeApp(array $options = [])
 * @method RemoveAppGroup removeAppGroup(array $options = [])
 * @method RemoveDataCollection removeDataCollection(array $options = [])
 * @method RemoveFirstRank removeFirstRank(array $options = [])
 * @method RemoveInterventionDictionary removeInterventionDictionary(array $options = [])
 * @method RemoveQueryProcessor removeQueryProcessor(array $options = [])
 * @method RemoveScheduledTask removeScheduledTask(array $options = [])
 * @method RemoveSecondRank removeSecondRank(array $options = [])
 * @method ReplaceAppGroupCommodityCode replaceAppGroupCommodityCode(array $options = [])
 * @method SaveSortScriptFile saveSortScriptFile(array $options = [])
 * @method StartSlowQueryAnalyzer startSlowQueryAnalyzer(array $options = [])
 * @method UpdateFetchFields updateFetchFields(array $options = [])
 * @method UpdateSummaries updateSummaries(array $options = [])
 */
class OpenSearchApiResolver extends ApiResolver
{
}

class Roa extends \AlibabaCloud\Client\Resolver\Roa
{
    /** @var string */
    public $product = 'OpenSearch';

    /** @var string */
    public $version = '2017-12-25';

    /** @var string */
    public $serviceCode = 'opensearch';
}

/**
 * @method string getAppVersionId()
 * @method string getScriptName()
 * @method string getAppGroupIdentity()
 */
class CompileSortScript extends Roa
{
    /** @var string */
    public $pathPattern = '/v4/openapi/app-groups/[appGroupIdentity]/apps/[appVersionId]/sort-scripts/[scriptName]/actions/compiling';

    /** @var string */
    public $method = 'POST';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAppVersionId($value)
    {
        $this->data['AppVersionId'] = $value;
        $this->pathParameters['appVersionId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withScriptName($value)
    {
        $this->data['ScriptName'] = $value;
        $this->pathParameters['scriptName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAppGroupIdentity($value)
    {
        $this->data['AppGroupIdentity'] = $value;
        $this->pathParameters['appGroupIdentity'] = $value;

        return $this;
    }
}

/**
 * @method string getDryRun()
 * @method string getAppGroupIdentity()
 */
class CreateApp extends Roa
{
    /** @var string */
    public $pathPattern = '/v4/openapi/app-groups/[appGroupIdentity]/apps';

    /** @var string */
    public $method = 'POST';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDryRun($value)
    {
        $this->data['DryRun'] = $value;
        $this->options['query']['dryRun'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAppGroupIdentity($value)
    {
        $this->data['AppGroupIdentity'] = $value;
        $this->pathParameters['appGroupIdentity'] = $value;

        return $this;
    }
}

class CreateAppGroup extends Roa
{
    /** @var string */
    public $pathPattern = '/v4/openapi/app-groups';

    /** @var string */
    public $method = 'POST';
}

/**
 * @method string getAppGroupIdentity()
 */
class CreateDataCollection extends Roa
{
    /** @var string */
    public $pathPattern = '/v4/openapi/app-groups/[appGroupIdentity]/data-collections';

    /** @var string */
    public $method = 'POST';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAppGroupIdentity($value)
    {
        $this->data['AppGroupIdentity'] = $value;
        $this->pathParameters['appGroupIdentity'] = $value;

        return $this;
    }
}

/**
 * @method string getDryRun()
 * @method string getAppId()
 * @method string getAppGroupIdentity()
 */
class CreateFirstRank extends Roa
{
    /** @var string */
    public $pathPattern = '/v4/openapi/app-groups/[appGroupIdentity]/apps/[appId]/first-ranks';

    /** @var string */
    public $method = 'POST';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDryRun($value)
    {
        $this->data['DryRun'] = $value;
        $this->options['query']['dryRun'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAppId($value)
    {
        $this->data['AppId'] = $value;
        $this->pathParameters['appId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAppGroupIdentity($value)
    {
        $this->data['AppGroupIdentity'] = $value;
        $this->pathParameters['appGroupIdentity'] = $value;

        return $this;
    }
}

class CreateInterventionDictionary extends Roa
{
    /** @var string */
    public $pathPattern = '/v4/openapi/intervention-dictionaries';

    /** @var string */
    public $method = 'POST';
}

/**
 * @method string getAppGroupIdentity()
 */
class CreateModel extends Roa
{
    /** @var string */
    public $pathPattern = '/v4/openapi/app-groups/[appGroupIdentity]/simple-models';

    /** @var string */
    public $method = 'POST';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAppGroupIdentity($value)
    {
        $this->data['AppGroupIdentity'] = $value;
        $this->pathParameters['appGroupIdentity'] = $value;

        return $this;
    }
}

/**
 * @method string getDryRun()
 * @method string getAppId()
 * @method string getAppGroupIdentity()
 */
class CreateQueryProcessor extends Roa
{
    /** @var string */
    public $pathPattern = '/v4/openapi/app-groups/[appGroupIdentity]/apps/[appId]/query-processors';

    /** @var string */
    public $method = 'POST';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDryRun($value)
    {
        $this->data['DryRun'] = $value;
        $this->options['query']['dryRun'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAppId($value)
    {
        $this->data['AppId'] = $value;
        $this->pathParameters['appId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAppGroupIdentity($value)
    {
        $this->data['AppGroupIdentity'] = $value;
        $this->pathParameters['appGroupIdentity'] = $value;

        return $this;
    }
}

/**
 * @method string getAppGroupIdentity()
 */
class CreateScheduledTask extends Roa
{
    /** @var string */
    public $pathPattern = '/v4/openapi/app-groups/[appGroupIdentity]/scheduled-tasks';

    /** @var string */
    public $method = 'POST';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAppGroupIdentity($value)
    {
        $this->data['AppGroupIdentity'] = $value;
        $this->pathParameters['appGroupIdentity'] = $value;

        return $this;
    }
}

/**
 * @method string getDryRun()
 * @method string getAppId()
 * @method string getAppGroupIdentity()
 */
class CreateSecondRank extends Roa
{
    /** @var string */
    public $pathPattern = '/v4/openapi/app-groups/[appGroupIdentity]/apps/[appId]/second-ranks';

    /** @var string */
    public $method = 'POST';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDryRun($value)
    {
        $this->data['DryRun'] = $value;
        $this->options['query']['dryRun'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAppId($value)
    {
        $this->data['AppId'] = $value;
        $this->pathParameters['appId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAppGroupIdentity($value)
    {
        $this->data['AppGroupIdentity'] = $value;
        $this->pathParameters['appGroupIdentity'] = $value;

        return $this;
    }
}

/**
 * @method string getAppVersionId()
 * @method string getAppGroupIdentity()
 */
class CreateSortScript extends Roa
{
    /** @var string */
    public $pathPattern = '/v4/openapi/app-groups/[appGroupIdentity]/apps/[appVersionId]/sort-scripts';

    /** @var string */
    public $method = 'POST';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAppVersionId($value)
    {
        $this->data['AppVersionId'] = $value;
        $this->pathParameters['appVersionId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAppGroupIdentity($value)
    {
        $this->data['AppGroupIdentity'] = $value;
        $this->pathParameters['appGroupIdentity'] = $value;

        return $this;
    }
}

/**
 * @method string getAppVersionId()
 * @method string getScriptName()
 * @method string getAppGroupIdentity()
 */
class DeleteSortScript extends Roa
{
    /** @var string */
    public $pathPattern = '/v4/openapi/app-groups/[appGroupIdentity]/apps/[appVersionId]/sort-scripts/[scriptName]';

    /** @var string */
    public $method = 'DELETE';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAppVersionId($value)
    {
        $this->data['AppVersionId'] = $value;
        $this->pathParameters['appVersionId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withScriptName($value)
    {
        $this->data['ScriptName'] = $value;
        $this->pathParameters['scriptName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAppGroupIdentity($value)
    {
        $this->data['AppGroupIdentity'] = $value;
        $this->pathParameters['appGroupIdentity'] = $value;

        return $this;
    }
}

/**
 * @method string getAppId()
 * @method string getAppGroupIdentity()
 */
class DescribeApp extends Roa
{
    /** @var string */
    public $pathPattern = '/v4/openapi/app-groups/[appGroupIdentity]/apps/[appId]';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAppId($value)
    {
        $this->data['AppId'] = $value;
        $this->pathParameters['appId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAppGroupIdentity($value)
    {
        $this->data['AppGroupIdentity'] = $value;
        $this->pathParameters['appGroupIdentity'] = $value;

        return $this;
    }
}

/**
 * @method string getAppGroupIdentity()
 */
class DescribeAppGroup extends Roa
{
    /** @var string */
    public $pathPattern = '/v4/openapi/app-groups/[appGroupIdentity]';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAppGroupIdentity($value)
    {
        $this->data['AppGroupIdentity'] = $value;
        $this->pathParameters['appGroupIdentity'] = $value;

        return $this;
    }
}

/**
 * @method string getEndTime()
 * @method string getStartTime()
 * @method string getAppGroupIdentity()
 */
class DescribeAppGroupDataReport extends Roa
{
    /** @var string */
    public $pathPattern = '/v4/openapi/app-groups/[appGroupIdentity]/data-report';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withEndTime($value)
    {
        $this->data['EndTime'] = $value;
        $this->options['query']['endTime'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withStartTime($value)
    {
        $this->data['StartTime'] = $value;
        $this->options['query']['startTime'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAppGroupIdentity($value)
    {
        $this->data['AppGroupIdentity'] = $value;
        $this->pathParameters['appGroupIdentity'] = $value;

        return $this;
    }
}

/**
 * @method string getAppGroupIdentity()
 */
class DescribeApps extends Roa
{
    /** @var string */
    public $pathPattern = '/v4/openapi/app-groups/[appGroupIdentity]/apps';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAppGroupIdentity($value)
    {
        $this->data['AppGroupIdentity'] = $value;
        $this->pathParameters['appGroupIdentity'] = $value;

        return $this;
    }
}

/**
 * @method string getAppId()
 * @method string getAppGroupIdentity()
 */
class DescribeAppStatistics extends Roa
{
    /** @var string */
    public $pathPattern = '/v4/openapi/app-groups/[appGroupIdentity]/apps/[appId]/statistics';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAppId($value)
    {
        $this->data['AppId'] = $value;
        $this->pathParameters['appId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAppGroupIdentity($value)
    {
        $this->data['AppGroupIdentity'] = $value;
        $this->pathParameters['appGroupIdentity'] = $value;

        return $this;
    }
}

/**
 * @method string getDataCollectionIdentity()
 * @method string getAppGroupIdentity()
 */
class DescribeDataCollction extends Roa
{
    /** @var string */
    public $pathPattern = '/v4/openapi/app-groups/[appGroupIdentity]/data-collections/[dataCollectionIdentity]';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDataCollectionIdentity($value)
    {
        $this->data['DataCollectionIdentity'] = $value;
        $this->pathParameters['dataCollectionIdentity'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAppGroupIdentity($value)
    {
        $this->data['AppGroupIdentity'] = $value;
        $this->pathParameters['appGroupIdentity'] = $value;

        return $this;
    }
}

/**
 * @method string getAppId()
 * @method string getName()
 * @method string getAppGroupIdentity()
 */
class DescribeFirstRank extends Roa
{
    /** @var string */
    public $pathPattern = '/v4/openapi/app-groups/[appGroupIdentity]/apps/[appId]/first-ranks/[name]';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAppId($value)
    {
        $this->data['AppId'] = $value;
        $this->pathParameters['appId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withName($value)
    {
        $this->data['Name'] = $value;
        $this->pathParameters['name'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAppGroupIdentity($value)
    {
        $this->data['AppGroupIdentity'] = $value;
        $this->pathParameters['appGroupIdentity'] = $value;

        return $this;
    }
}

/**
 * @method string getName()
 */
class DescribeInterventionDictionary extends Roa
{
    /** @var string */
    public $pathPattern = '/v4/openapi/intervention-dictionaries/[name]';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withName($value)
    {
        $this->data['Name'] = $value;
        $this->pathParameters['name'] = $value;

        return $this;
    }
}

/**
 * @method string getAppId()
 * @method string getName()
 * @method string getAppGroupIdentity()
 */
class DescribeQueryProcessor extends Roa
{
    /** @var string */
    public $pathPattern = '/v4/openapi/app-groups/[appGroupIdentity]/apps/[appId]/query-processors/[name]';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAppId($value)
    {
        $this->data['AppId'] = $value;
        $this->pathParameters['appId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withName($value)
    {
        $this->data['Name'] = $value;
        $this->pathParameters['name'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAppGroupIdentity($value)
    {
        $this->data['AppGroupIdentity'] = $value;
        $this->pathParameters['appGroupIdentity'] = $value;

        return $this;
    }
}

class DescribeRegion extends Roa
{
    /** @var string */
    public $pathPattern = '/v4/openapi/region';
}

class DescribeRegions extends Roa
{
    /** @var string */
    public $pathPattern = '/v4/openapi/regions';
}

/**
 * @method string getAppGroupIdentity()
 * @method string getTaskId()
 */
class DescribeScheduledTask extends Roa
{
    /** @var string */
    public $pathPattern = '/v4/openapi/app-groups/[appGroupIdentity]/scheduled-tasks/[taskId]';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAppGroupIdentity($value)
    {
        $this->data['AppGroupIdentity'] = $value;
        $this->pathParameters['appGroupIdentity'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTaskId($value)
    {
        $this->data['TaskId'] = $value;
        $this->pathParameters['taskId'] = $value;

        return $this;
    }
}

/**
 * @method string getAppId()
 * @method string getName()
 * @method string getAppGroupIdentity()
 */
class DescribeSecondRank extends Roa
{
    /** @var string */
    public $pathPattern = '/v4/openapi/app-groups/[appGroupIdentity]/apps/[appId]/second-ranks/[name]';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAppId($value)
    {
        $this->data['AppId'] = $value;
        $this->pathParameters['appId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withName($value)
    {
        $this->data['Name'] = $value;
        $this->pathParameters['name'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAppGroupIdentity($value)
    {
        $this->data['AppGroupIdentity'] = $value;
        $this->pathParameters['appGroupIdentity'] = $value;

        return $this;
    }
}

/**
 * @method string getAppGroupIdentity()
 */
class DescribeSlowQueryStatus extends Roa
{
    /** @var string */
    public $pathPattern = '/v4/openapi/app-groups/[appGroupIdentity]/optimizers/slow-query';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAppGroupIdentity($value)
    {
        $this->data['AppGroupIdentity'] = $value;
        $this->pathParameters['appGroupIdentity'] = $value;

        return $this;
    }
}

/**
 * @method string getAppGroupIdentity()
 */
class DisableSlowQuery extends Roa
{
    /** @var string */
    public $pathPattern = '/v4/openapi/app-groups/[appGroupIdentity]/optimizers/slow-query/actions/disable';

    /** @var string */
    public $method = 'POST';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAppGroupIdentity($value)
    {
        $this->data['AppGroupIdentity'] = $value;
        $this->pathParameters['appGroupIdentity'] = $value;

        return $this;
    }
}

/**
 * @method string getAppGroupIdentity()
 */
class EnableSlowQuery extends Roa
{
    /** @var string */
    public $pathPattern = '/v4/openapi/app-groups/[appGroupIdentity]/optimizers/slow-query/actions/enable';

    /** @var string */
    public $method = 'POST';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAppGroupIdentity($value)
    {
        $this->data['AppGroupIdentity'] = $value;
        $this->pathParameters['appGroupIdentity'] = $value;

        return $this;
    }
}

/**
 * @method string getModelId()
 * @method string getAppGroupIdentity()
 */
class GetModelProgress extends Roa
{
    /** @var string */
    public $pathPattern = '/v4/openapi/app-groups/[appGroupIdentity]/simple-models/[modelId]/progress';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withModelId($value)
    {
        $this->data['ModelId'] = $value;
        $this->pathParameters['modelId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAppGroupIdentity($value)
    {
        $this->data['AppGroupIdentity'] = $value;
        $this->pathParameters['appGroupIdentity'] = $value;

        return $this;
    }
}

/**
 * @method string getAppVersionId()
 * @method string getScriptName()
 * @method string getAppGroupIdentity()
 */
class GetSortScript extends Roa
{
    /** @var string */
    public $pathPattern = '/v4/openapi/app-groups/[appGroupIdentity]/apps/[appVersionId]/sort-scripts/[scriptName]';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAppVersionId($value)
    {
        $this->data['AppVersionId'] = $value;
        $this->pathParameters['appVersionId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withScriptName($value)
    {
        $this->data['ScriptName'] = $value;
        $this->pathParameters['scriptName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAppGroupIdentity($value)
    {
        $this->data['AppGroupIdentity'] = $value;
        $this->pathParameters['appGroupIdentity'] = $value;

        return $this;
    }
}

/**
 * @method string getAppVersionId()
 * @method string getScriptName()
 * @method string getAppGroupIdentity()
 */
class GetSortScriptFile extends Roa
{
    /** @var string */
    public $pathPattern = '/v4/openapi/app-groups/[appGroupIdentity]/apps/[appVersionId]/sort-scripts/[scriptName]/files/src/UserScorer.cava';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAppVersionId($value)
    {
        $this->data['AppVersionId'] = $value;
        $this->pathParameters['appVersionId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withScriptName($value)
    {
        $this->data['ScriptName'] = $value;
        $this->pathParameters['scriptName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAppGroupIdentity($value)
    {
        $this->data['AppGroupIdentity'] = $value;
        $this->pathParameters['appGroupIdentity'] = $value;

        return $this;
    }
}

/**
 * @method string getAppId()
 * @method string getPageSize()
 * @method string getStartTime()
 * @method string getStopTime()
 * @method string getAppGroupIdentity()
 * @method string getPageNumber()
 */
class ListAppGroupErrors extends Roa
{
    /** @var string */
    public $pathPattern = '/v4/openapi/app-groups/[appGroupIdentity]/errors';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAppId($value)
    {
        $this->data['AppId'] = $value;
        $this->options['query']['appId'] = $value;

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
        $this->options['query']['pageSize'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withStartTime($value)
    {
        $this->data['StartTime'] = $value;
        $this->options['query']['startTime'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withStopTime($value)
    {
        $this->data['StopTime'] = $value;
        $this->options['query']['stopTime'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAppGroupIdentity($value)
    {
        $this->data['AppGroupIdentity'] = $value;
        $this->pathParameters['appGroupIdentity'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPageNumber($value)
    {
        $this->data['PageNumber'] = $value;
        $this->options['query']['pageNumber'] = $value;

        return $this;
    }
}

/**
 * @method string getMetricType()
 * @method string getIndexes()
 * @method string getEndTime()
 * @method string getStartTime()
 * @method string getAppGroupIdentity()
 */
class ListAppGroupMetrics extends Roa
{
    /** @var string */
    public $pathPattern = '/v4/openapi/app-groups/[appGroupIdentity]/metrics';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withMetricType($value)
    {
        $this->data['MetricType'] = $value;
        $this->options['query']['metricType'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withIndexes($value)
    {
        $this->data['Indexes'] = $value;
        $this->options['query']['indexes'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withEndTime($value)
    {
        $this->data['EndTime'] = $value;
        $this->options['query']['endTime'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withStartTime($value)
    {
        $this->data['StartTime'] = $value;
        $this->options['query']['startTime'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAppGroupIdentity($value)
    {
        $this->data['AppGroupIdentity'] = $value;
        $this->pathParameters['appGroupIdentity'] = $value;

        return $this;
    }
}

/**
 * @method string getInstanceId()
 * @method string getPageSize()
 * @method string getName()
 * @method string getSortBy()
 * @method string getType()
 * @method string getPageNumber()
 */
class ListAppGroups extends Roa
{
    /** @var string */
    public $pathPattern = '/v4/openapi/app-groups';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withInstanceId($value)
    {
        $this->data['InstanceId'] = $value;
        $this->options['query']['instanceId'] = $value;

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
        $this->options['query']['pageSize'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withName($value)
    {
        $this->data['Name'] = $value;
        $this->options['query']['name'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSortBy($value)
    {
        $this->data['SortBy'] = $value;
        $this->options['query']['sortBy'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withType($value)
    {
        $this->data['Type'] = $value;
        $this->options['query']['type'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPageNumber($value)
    {
        $this->data['PageNumber'] = $value;
        $this->options['query']['pageNumber'] = $value;

        return $this;
    }
}

/**
 * @method string getSize()
 * @method string getPage()
 * @method string getGroup()
 */
class ListApps extends Roa
{
    /** @var string */
    public $pathPattern = '/v4/openapi/apps';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSize($value)
    {
        $this->data['Size'] = $value;
        $this->options['query']['size'] = $value;

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
        $this->options['query']['page'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withGroup($value)
    {
        $this->data['Group'] = $value;
        $this->options['query']['group'] = $value;

        return $this;
    }
}

/**
 * @method string getPageSize()
 * @method string getAppGroupIdentity()
 * @method string getPageNumber()
 */
class ListDataCollections extends Roa
{
    /** @var string */
    public $pathPattern = '/v4/openapi/app-groups/[appGroupIdentity]/data-collections';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPageSize($value)
    {
        $this->data['PageSize'] = $value;
        $this->options['query']['pageSize'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAppGroupIdentity($value)
    {
        $this->data['AppGroupIdentity'] = $value;
        $this->pathParameters['appGroupIdentity'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPageNumber($value)
    {
        $this->data['PageNumber'] = $value;
        $this->options['query']['pageNumber'] = $value;

        return $this;
    }
}

/**
 * @method string getAlgorithmType()
 * @method string getInServiceOnly()
 * @method string getAppGroupIdentity()
 */
class ListDeployedAlgorithmModels extends Roa
{
    /** @var string */
    public $pathPattern = '/v4/openapi/app-groups/[appGroupIdentity]/deployed-algorithm-models';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAlgorithmType($value)
    {
        $this->data['AlgorithmType'] = $value;
        $this->options['query']['algorithmType'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withInServiceOnly($value)
    {
        $this->data['InServiceOnly'] = $value;
        $this->options['query']['inServiceOnly'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAppGroupIdentity($value)
    {
        $this->data['AppGroupIdentity'] = $value;
        $this->pathParameters['appGroupIdentity'] = $value;

        return $this;
    }
}

/**
 * @method string getAppId()
 * @method string getAppGroupIdentity()
 */
class ListFirstRanks extends Roa
{
    /** @var string */
    public $pathPattern = '/v4/openapi/app-groups/[appGroupIdentity]/apps/[appId]/first-ranks';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAppId($value)
    {
        $this->data['AppId'] = $value;
        $this->pathParameters['appId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAppGroupIdentity($value)
    {
        $this->data['AppGroupIdentity'] = $value;
        $this->pathParameters['appGroupIdentity'] = $value;

        return $this;
    }
}

/**
 * @method string getTypes()
 * @method string getPageSize()
 * @method string getPageNumber()
 */
class ListInterventionDictionaries extends Roa
{
    /** @var string */
    public $pathPattern = '/v4/openapi/intervention-dictionaries';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTypes($value)
    {
        $this->data['Types'] = $value;
        $this->options['query']['types'] = $value;

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
        $this->options['query']['pageSize'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPageNumber($value)
    {
        $this->data['PageNumber'] = $value;
        $this->options['query']['pageNumber'] = $value;

        return $this;
    }
}

/**
 * @method string getName()
 * @method string getWord()
 */
class ListInterventionDictionaryEntries extends Roa
{
    /** @var string */
    public $pathPattern = '/v4/openapi/intervention-dictionaries/[name]/entries';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withName($value)
    {
        $this->data['Name'] = $value;
        $this->pathParameters['name'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withWord($value)
    {
        $this->data['Word'] = $value;
        $this->options['query']['word'] = $value;

        return $this;
    }
}

/**
 * @method string getQuery()
 * @method string getName()
 */
class ListInterventionDictionaryNerResults extends Roa
{
    /** @var string */
    public $pathPattern = '/v4/openapi/intervention-dictionaries/[name]/ner-results';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withQuery($value)
    {
        $this->data['Query'] = $value;
        $this->options['query']['query'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withName($value)
    {
        $this->data['Name'] = $value;
        $this->pathParameters['name'] = $value;

        return $this;
    }
}

/**
 * @method string getName()
 */
class ListInterventionDictionaryRelatedEntities extends Roa
{
    /** @var string */
    public $pathPattern = '/v4/openapi/intervention-dictionaries/[name]/related';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withName($value)
    {
        $this->data['Name'] = $value;
        $this->pathParameters['name'] = $value;

        return $this;
    }
}

/**
 * @method string getDomain()
 */
class ListQueryProcessorNers extends Roa
{
    /** @var string */
    public $pathPattern = '/v4/openapi/query-processor/ner/default-priorities';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDomain($value)
    {
        $this->data['Domain'] = $value;
        $this->options['query']['domain'] = $value;

        return $this;
    }
}

/**
 * @method string getAppId()
 * @method string getIsActive()
 * @method string getAppGroupIdentity()
 */
class ListQueryProcessors extends Roa
{
    /** @var string */
    public $pathPattern = '/v4/openapi/app-groups/[appGroupIdentity]/apps/[appId]/query-processors';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAppId($value)
    {
        $this->data['AppId'] = $value;
        $this->pathParameters['appId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withIsActive($value)
    {
        $this->data['IsActive'] = $value;
        $this->options['query']['isActive'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAppGroupIdentity($value)
    {
        $this->data['AppGroupIdentity'] = $value;
        $this->pathParameters['appGroupIdentity'] = $value;

        return $this;
    }
}

/**
 * @method string getPageSize()
 * @method string getType()
 * @method string getAppGroupIdentity()
 * @method string getPageNumber()
 */
class ListScheduledTasks extends Roa
{
    /** @var string */
    public $pathPattern = '/v4/openapi/app-groups/[appGroupIdentity]/scheduled-tasks';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPageSize($value)
    {
        $this->data['PageSize'] = $value;
        $this->options['query']['pageSize'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withType($value)
    {
        $this->data['Type'] = $value;
        $this->options['query']['type'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAppGroupIdentity($value)
    {
        $this->data['AppGroupIdentity'] = $value;
        $this->pathParameters['appGroupIdentity'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPageNumber($value)
    {
        $this->data['PageNumber'] = $value;
        $this->options['query']['pageNumber'] = $value;

        return $this;
    }
}

/**
 * @method string getAppId()
 * @method string getAppGroupIdentity()
 */
class ListSecondRanks extends Roa
{
    /** @var string */
    public $pathPattern = '/v4/openapi/app-groups/[appGroupIdentity]/apps/[appId]/second-ranks';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAppId($value)
    {
        $this->data['AppId'] = $value;
        $this->pathParameters['appId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAppGroupIdentity($value)
    {
        $this->data['AppGroupIdentity'] = $value;
        $this->pathParameters['appGroupIdentity'] = $value;

        return $this;
    }
}

/**
 * @method string getAppGroupIdentity()
 */
class ListSlowQueryCategories extends Roa
{
    /** @var string */
    public $pathPattern = '/v4/openapi/app-groups/[appGroupIdentity]/optimizers/slow-query/categories';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAppGroupIdentity($value)
    {
        $this->data['AppGroupIdentity'] = $value;
        $this->pathParameters['appGroupIdentity'] = $value;

        return $this;
    }
}

/**
 * @method string getCategoryIndex()
 * @method string getAppGroupIdentity()
 */
class ListSlowQueryQueries extends Roa
{
    /** @var string */
    public $pathPattern = '/v4/openapi/app-groups/[appGroupIdentity]/optimizers/slow-query/categories/[categoryIndex]/queries';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCategoryIndex($value)
    {
        $this->data['CategoryIndex'] = $value;
        $this->pathParameters['categoryIndex'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAppGroupIdentity($value)
    {
        $this->data['AppGroupIdentity'] = $value;
        $this->pathParameters['appGroupIdentity'] = $value;

        return $this;
    }
}

/**
 * @method string getAppVersionId()
 * @method string getAppGroupIdentity()
 */
class ListSortScripts extends Roa
{
    /** @var string */
    public $pathPattern = '/v4/openapi/app-groups/[appGroupIdentity]/apps/[appVersionId]/sort-scripts';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAppVersionId($value)
    {
        $this->data['AppVersionId'] = $value;
        $this->pathParameters['appVersionId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAppGroupIdentity($value)
    {
        $this->data['AppGroupIdentity'] = $value;
        $this->pathParameters['appGroupIdentity'] = $value;

        return $this;
    }
}

/**
 * @method string getAppGroupIdentity()
 */
class ModifyAppGroup extends Roa
{
    /** @var string */
    public $pathPattern = '/v4/openapi/app-groups/[appGroupIdentity]';

    /** @var string */
    public $method = 'PUT';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAppGroupIdentity($value)
    {
        $this->data['AppGroupIdentity'] = $value;
        $this->pathParameters['appGroupIdentity'] = $value;

        return $this;
    }
}

/**
 * @method string getAppGroupIdentity()
 */
class ModifyAppGroupQuota extends Roa
{
    /** @var string */
    public $pathPattern = '/v4/openapi/app-groups/[appGroupIdentity]/quota';

    /** @var string */
    public $method = 'PUT';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAppGroupIdentity($value)
    {
        $this->data['AppGroupIdentity'] = $value;
        $this->pathParameters['appGroupIdentity'] = $value;

        return $this;
    }
}

/**
 * @method string getDryRun()
 * @method string getAppId()
 * @method string getName()
 * @method string getAppGroupIdentity()
 */
class ModifyFirstRank extends Roa
{
    /** @var string */
    public $pathPattern = '/v4/openapi/app-groups/[appGroupIdentity]/apps/[appId]/first-ranks/[name]';

    /** @var string */
    public $method = 'PUT';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDryRun($value)
    {
        $this->data['DryRun'] = $value;
        $this->options['query']['dryRun'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAppId($value)
    {
        $this->data['AppId'] = $value;
        $this->pathParameters['appId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withName($value)
    {
        $this->data['Name'] = $value;
        $this->pathParameters['name'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAppGroupIdentity($value)
    {
        $this->data['AppGroupIdentity'] = $value;
        $this->pathParameters['appGroupIdentity'] = $value;

        return $this;
    }
}

/**
 * @method string getDryRun()
 * @method string getAppId()
 * @method string getName()
 * @method string getAppGroupIdentity()
 */
class ModifyQueryProcessor extends Roa
{
    /** @var string */
    public $pathPattern = '/v4/openapi/app-groups/[appGroupIdentity]/apps/[appId]/query-processors/[name]';

    /** @var string */
    public $method = 'PUT';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDryRun($value)
    {
        $this->data['DryRun'] = $value;
        $this->options['query']['dryRun'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAppId($value)
    {
        $this->data['AppId'] = $value;
        $this->pathParameters['appId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withName($value)
    {
        $this->data['Name'] = $value;
        $this->pathParameters['name'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAppGroupIdentity($value)
    {
        $this->data['AppGroupIdentity'] = $value;
        $this->pathParameters['appGroupIdentity'] = $value;

        return $this;
    }
}

/**
 * @method string getAppGroupIdentity()
 * @method string getTaskId()
 */
class ModifyScheduledTask extends Roa
{
    /** @var string */
    public $pathPattern = '/v4/openapi/app-groups/[appGroupIdentity]/scheduled-tasks/[taskId]';

    /** @var string */
    public $method = 'PUT';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAppGroupIdentity($value)
    {
        $this->data['AppGroupIdentity'] = $value;
        $this->pathParameters['appGroupIdentity'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTaskId($value)
    {
        $this->data['TaskId'] = $value;
        $this->pathParameters['taskId'] = $value;

        return $this;
    }
}

/**
 * @method string getDryRun()
 * @method string getAppId()
 * @method string getName()
 * @method string getAppGroupIdentity()
 */
class ModifySecondRank extends Roa
{
    /** @var string */
    public $pathPattern = '/v4/openapi/app-groups/[appGroupIdentity]/apps/[appId]/second-ranks/[name]';

    /** @var string */
    public $method = 'PUT';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDryRun($value)
    {
        $this->data['DryRun'] = $value;
        $this->options['query']['dryRun'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAppId($value)
    {
        $this->data['AppId'] = $value;
        $this->pathParameters['appId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withName($value)
    {
        $this->data['Name'] = $value;
        $this->pathParameters['name'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAppGroupIdentity($value)
    {
        $this->data['AppGroupIdentity'] = $value;
        $this->pathParameters['appGroupIdentity'] = $value;

        return $this;
    }
}

/**
 * @method string getName()
 */
class PushInterventionDictionaryEntries extends Roa
{
    /** @var string */
    public $pathPattern = '/v4/openapi/intervention-dictionaries/[name]/entries/actions/bulk';

    /** @var string */
    public $method = 'POST';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withName($value)
    {
        $this->data['Name'] = $value;
        $this->pathParameters['name'] = $value;

        return $this;
    }
}

/**
 * @method string getAppVersionId()
 * @method string getScriptName()
 * @method string getAppGroupIdentity()
 */
class ReleaseSortScript extends Roa
{
    /** @var string */
    public $pathPattern = '/v4/openapi/app-groups/[appGroupIdentity]/apps/[appVersionId]/sort-scripts/[scriptName]/actions/release';

    /** @var string */
    public $method = 'POST';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAppVersionId($value)
    {
        $this->data['AppVersionId'] = $value;
        $this->pathParameters['appVersionId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withScriptName($value)
    {
        $this->data['ScriptName'] = $value;
        $this->pathParameters['scriptName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAppGroupIdentity($value)
    {
        $this->data['AppGroupIdentity'] = $value;
        $this->pathParameters['appGroupIdentity'] = $value;

        return $this;
    }
}

/**
 * @method string getAppId()
 * @method string getAppGroupIdentity()
 */
class RemoveApp extends Roa
{
    /** @var string */
    public $pathPattern = '/v4/openapi/app-groups/[appGroupIdentity]/apps/[appId]';

    /** @var string */
    public $method = 'DELETE';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAppId($value)
    {
        $this->data['AppId'] = $value;
        $this->pathParameters['appId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAppGroupIdentity($value)
    {
        $this->data['AppGroupIdentity'] = $value;
        $this->pathParameters['appGroupIdentity'] = $value;

        return $this;
    }
}

/**
 * @method string getAppGroupIdentity()
 */
class RemoveAppGroup extends Roa
{
    /** @var string */
    public $pathPattern = '/v4/openapi/app-groups/[appGroupIdentity]';

    /** @var string */
    public $method = 'DELETE';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAppGroupIdentity($value)
    {
        $this->data['AppGroupIdentity'] = $value;
        $this->pathParameters['appGroupIdentity'] = $value;

        return $this;
    }
}

/**
 * @method string getDataCollectionIdentity()
 * @method string getAppGroupIdentity()
 */
class RemoveDataCollection extends Roa
{
    /** @var string */
    public $pathPattern = '/v4/openapi/app-groups/[appGroupIdentity]/data-collections/[dataCollectionIdentity]';

    /** @var string */
    public $method = 'DELETE';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDataCollectionIdentity($value)
    {
        $this->data['DataCollectionIdentity'] = $value;
        $this->pathParameters['dataCollectionIdentity'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAppGroupIdentity($value)
    {
        $this->data['AppGroupIdentity'] = $value;
        $this->pathParameters['appGroupIdentity'] = $value;

        return $this;
    }
}

/**
 * @method string getAppId()
 * @method string getName()
 * @method string getAppGroupIdentity()
 */
class RemoveFirstRank extends Roa
{
    /** @var string */
    public $pathPattern = '/v4/openapi/app-groups/[appGroupIdentity]/apps/[appId]/first-ranks/[name]';

    /** @var string */
    public $method = 'DELETE';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAppId($value)
    {
        $this->data['AppId'] = $value;
        $this->pathParameters['appId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withName($value)
    {
        $this->data['Name'] = $value;
        $this->pathParameters['name'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAppGroupIdentity($value)
    {
        $this->data['AppGroupIdentity'] = $value;
        $this->pathParameters['appGroupIdentity'] = $value;

        return $this;
    }
}

/**
 * @method string getName()
 */
class RemoveInterventionDictionary extends Roa
{
    /** @var string */
    public $pathPattern = '/v4/openapi/intervention-dictionaries/[name]';

    /** @var string */
    public $method = 'DELETE';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withName($value)
    {
        $this->data['Name'] = $value;
        $this->pathParameters['name'] = $value;

        return $this;
    }
}

/**
 * @method string getAppId()
 * @method string getName()
 * @method string getAppGroupIdentity()
 */
class RemoveQueryProcessor extends Roa
{
    /** @var string */
    public $pathPattern = '/v4/openapi/app-groups/[appGroupIdentity]/apps/[appId]/query-processors/[name]';

    /** @var string */
    public $method = 'DELETE';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAppId($value)
    {
        $this->data['AppId'] = $value;
        $this->pathParameters['appId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withName($value)
    {
        $this->data['Name'] = $value;
        $this->pathParameters['name'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAppGroupIdentity($value)
    {
        $this->data['AppGroupIdentity'] = $value;
        $this->pathParameters['appGroupIdentity'] = $value;

        return $this;
    }
}

/**
 * @method string getAppGroupIdentity()
 * @method string getTaskId()
 */
class RemoveScheduledTask extends Roa
{
    /** @var string */
    public $pathPattern = '/v4/openapi/app-groups/[appGroupIdentity]/scheduled-tasks/[taskId]';

    /** @var string */
    public $method = 'DELETE';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAppGroupIdentity($value)
    {
        $this->data['AppGroupIdentity'] = $value;
        $this->pathParameters['appGroupIdentity'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTaskId($value)
    {
        $this->data['TaskId'] = $value;
        $this->pathParameters['taskId'] = $value;

        return $this;
    }
}

/**
 * @method string getAppId()
 * @method string getName()
 * @method string getAppGroupIdentity()
 */
class RemoveSecondRank extends Roa
{
    /** @var string */
    public $pathPattern = '/v4/openapi/app-groups/[appGroupIdentity]/apps/[appId]/second-ranks/[name]';

    /** @var string */
    public $method = 'DELETE';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAppId($value)
    {
        $this->data['AppId'] = $value;
        $this->pathParameters['appId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withName($value)
    {
        $this->data['Name'] = $value;
        $this->pathParameters['name'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAppGroupIdentity($value)
    {
        $this->data['AppGroupIdentity'] = $value;
        $this->pathParameters['appGroupIdentity'] = $value;

        return $this;
    }
}

/**
 * @method string getAppGroupIdentity()
 */
class ReplaceAppGroupCommodityCode extends Roa
{
    /** @var string */
    public $pathPattern = '/v4/openapi/app-groups/[appGroupIdentity]/actions/to-instance-typed';

    /** @var string */
    public $method = 'POST';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAppGroupIdentity($value)
    {
        $this->data['AppGroupIdentity'] = $value;
        $this->pathParameters['appGroupIdentity'] = $value;

        return $this;
    }
}

/**
 * @method string getAppVersionId()
 * @method string getScriptName()
 * @method string getAppGroupIdentity()
 */
class SaveSortScriptFile extends Roa
{
    /** @var string */
    public $pathPattern = '/v4/openapi/app-groups/[appGroupIdentity]/apps/[appVersionId]/sort-scripts/[scriptName]/files/src/UserScorer.cava';

    /** @var string */
    public $method = 'PUT';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAppVersionId($value)
    {
        $this->data['AppVersionId'] = $value;
        $this->pathParameters['appVersionId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withScriptName($value)
    {
        $this->data['ScriptName'] = $value;
        $this->pathParameters['scriptName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAppGroupIdentity($value)
    {
        $this->data['AppGroupIdentity'] = $value;
        $this->pathParameters['appGroupIdentity'] = $value;

        return $this;
    }
}

/**
 * @method string getAppGroupIdentity()
 */
class StartSlowQueryAnalyzer extends Roa
{
    /** @var string */
    public $pathPattern = '/v4/openapi/app-groups/[appGroupIdentity]/optimizers/slow-query/actions/run';

    /** @var string */
    public $method = 'POST';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAppGroupIdentity($value)
    {
        $this->data['AppGroupIdentity'] = $value;
        $this->pathParameters['appGroupIdentity'] = $value;

        return $this;
    }
}

/**
 * @method string getDryRun()
 * @method string getAppId()
 * @method string getAppGroupIdentity()
 */
class UpdateFetchFields extends Roa
{
    /** @var string */
    public $pathPattern = '/v4/openapi/app-groups/[appGroupIdentity]/apps/[appId]/fetch-fields';

    /** @var string */
    public $method = 'PUT';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDryRun($value)
    {
        $this->data['DryRun'] = $value;
        $this->options['query']['dryRun'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAppId($value)
    {
        $this->data['AppId'] = $value;
        $this->pathParameters['appId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAppGroupIdentity($value)
    {
        $this->data['AppGroupIdentity'] = $value;
        $this->pathParameters['appGroupIdentity'] = $value;

        return $this;
    }
}

/**
 * @method string getDryRun()
 * @method string getAppId()
 * @method string getAppGroupIdentity()
 */
class UpdateSummaries extends Roa
{
    /** @var string */
    public $pathPattern = '/v4/openapi/app-groups/[appGroupIdentity]/apps/[appId]/summaries';

    /** @var string */
    public $method = 'PUT';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDryRun($value)
    {
        $this->data['DryRun'] = $value;
        $this->options['query']['dryRun'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAppId($value)
    {
        $this->data['AppId'] = $value;
        $this->pathParameters['appId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAppGroupIdentity($value)
    {
        $this->data['AppGroupIdentity'] = $value;
        $this->pathParameters['appGroupIdentity'] = $value;

        return $this;
    }
}
