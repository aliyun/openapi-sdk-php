<?php

namespace AlibabaCloud\OpenSearch\V20171225;

use AlibabaCloud\Client\Resolver\ApiResolver;

/**
 * @method BindEsInstance bindEsInstance(array $options = [])
 * @method BindESUserAnalyzer bindESUserAnalyzer(array $options = [])
 * @method CompileSortScript compileSortScript(array $options = [])
 * @method CreateABTestExperiment createABTestExperiment(array $options = [])
 * @method CreateABTestGroup createABTestGroup(array $options = [])
 * @method CreateABTestScene createABTestScene(array $options = [])
 * @method CreateApp createApp(array $options = [])
 * @method CreateAppGroup createAppGroup(array $options = [])
 * @method CreateFirstRank createFirstRank(array $options = [])
 * @method CreateFunctionInstance createFunctionInstance(array $options = [])
 * @method CreateFunctionTask createFunctionTask(array $options = [])
 * @method CreateInterventionDictionary createInterventionDictionary(array $options = [])
 * @method CreateQueryProcessor createQueryProcessor(array $options = [])
 * @method CreateScheduledTask createScheduledTask(array $options = [])
 * @method CreateSearchStrategy createSearchStrategy(array $options = [])
 * @method CreateSecondRank createSecondRank(array $options = [])
 * @method CreateSortScript createSortScript(array $options = [])
 * @method CreateUserAnalyzer createUserAnalyzer(array $options = [])
 * @method DeleteABTestExperiment deleteABTestExperiment(array $options = [])
 * @method DeleteABTestGroup deleteABTestGroup(array $options = [])
 * @method DeleteABTestScene deleteABTestScene(array $options = [])
 * @method DeleteFunctionInstance deleteFunctionInstance(array $options = [])
 * @method DeleteFunctionTask deleteFunctionTask(array $options = [])
 * @method DeleteSortScript deleteSortScript(array $options = [])
 * @method DeleteSortScriptFile deleteSortScriptFile(array $options = [])
 * @method DescribeABTestExperiment describeABTestExperiment(array $options = [])
 * @method DescribeABTestGroup describeABTestGroup(array $options = [])
 * @method DescribeABTestScene describeABTestScene(array $options = [])
 * @method DescribeApp describeApp(array $options = [])
 * @method DescribeAppGroup describeAppGroup(array $options = [])
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
 * @method DescribeUserAnalyzer describeUserAnalyzer(array $options = [])
 * @method DisableSlowQuery disableSlowQuery(array $options = [])
 * @method EnableSlowQuery enableSlowQuery(array $options = [])
 * @method GenerateMergedTable generateMergedTable(array $options = [])
 * @method GetDomain getDomain(array $options = [])
 * @method GetFunctionCurrentVersion getFunctionCurrentVersion(array $options = [])
 * @method GetFunctionDefaultInstance getFunctionDefaultInstance(array $options = [])
 * @method GetFunctionInstance getFunctionInstance(array $options = [])
 * @method GetFunctionTask getFunctionTask(array $options = [])
 * @method GetFunctionVersion getFunctionVersion(array $options = [])
 * @method GetModelReport getModelReport(array $options = [])
 * @method GetScriptFileNames getScriptFileNames(array $options = [])
 * @method GetSearchStrategy getSearchStrategy(array $options = [])
 * @method GetSortScript getSortScript(array $options = [])
 * @method GetSortScriptFile getSortScriptFile(array $options = [])
 * @method ListABTestExperiments listABTestExperiments(array $options = [])
 * @method ListABTestFixedFlowDividers listABTestFixedFlowDividers(array $options = [])
 * @method ListABTestGroups listABTestGroups(array $options = [])
 * @method ListABTestScenes listABTestScenes(array $options = [])
 * @method ListAppGroups listAppGroups(array $options = [])
 * @method ListApps listApps(array $options = [])
 * @method ListDataCollections listDataCollections(array $options = [])
 * @method ListDataSourceTableFields listDataSourceTableFields(array $options = [])
 * @method ListDataSourceTables listDataSourceTables(array $options = [])
 * @method ListFirstRanks listFirstRanks(array $options = [])
 * @method ListFunctionInstances listFunctionInstances(array $options = [])
 * @method ListFunctionTasks listFunctionTasks(array $options = [])
 * @method ListInterventionDictionaries listInterventionDictionaries(array $options = [])
 * @method ListInterventionDictionaryEntries listInterventionDictionaryEntries(array $options = [])
 * @method ListInterventionDictionaryNerResults listInterventionDictionaryNerResults(array $options = [])
 * @method ListInterventionDictionaryRelatedEntities listInterventionDictionaryRelatedEntities(array $options = [])
 * @method ListModels listModels(array $options = [])
 * @method ListProceedings listProceedings(array $options = [])
 * @method ListQueryProcessorAnalyzerResults listQueryProcessorAnalyzerResults(array $options = [])
 * @method ListQueryProcessorNers listQueryProcessorNers(array $options = [])
 * @method ListQueryProcessors listQueryProcessors(array $options = [])
 * @method ListQuotaReviewTasks listQuotaReviewTasks(array $options = [])
 * @method ListScheduledTasks listScheduledTasks(array $options = [])
 * @method ListSearchStrategies listSearchStrategies(array $options = [])
 * @method ListSecondRanks listSecondRanks(array $options = [])
 * @method ListSlowQueryCategories listSlowQueryCategories(array $options = [])
 * @method ListSlowQueryQueries listSlowQueryQueries(array $options = [])
 * @method ListSortExpressions listSortExpressions(array $options = [])
 * @method ListSortScripts listSortScripts(array $options = [])
 * @method ListStatisticLogs listStatisticLogs(array $options = [])
 * @method ListStatisticReport listStatisticReport(array $options = [])
 * @method ListTagResources listTagResources(array $options = [])
 * @method ListUserAnalyzerEntries listUserAnalyzerEntries(array $options = [])
 * @method ListUserAnalyzers listUserAnalyzers(array $options = [])
 * @method ModifyAppGroup modifyAppGroup(array $options = [])
 * @method ModifyAppGroupQuota modifyAppGroupQuota(array $options = [])
 * @method ModifyFirstRank modifyFirstRank(array $options = [])
 * @method ModifyQueryProcessor modifyQueryProcessor(array $options = [])
 * @method ModifyScheduledTask modifyScheduledTask(array $options = [])
 * @method ModifySecondRank modifySecondRank(array $options = [])
 * @method PreviewModel previewModel(array $options = [])
 * @method PushInterventionDictionaryEntries pushInterventionDictionaryEntries(array $options = [])
 * @method PushUserAnalyzerEntries pushUserAnalyzerEntries(array $options = [])
 * @method RankPreviewQuery rankPreviewQuery(array $options = [])
 * @method ReleaseSortScript releaseSortScript(array $options = [])
 * @method RemoveApp removeApp(array $options = [])
 * @method RemoveAppGroup removeAppGroup(array $options = [])
 * @method RemoveDataCollection removeDataCollection(array $options = [])
 * @method RemoveFirstRank removeFirstRank(array $options = [])
 * @method RemoveInterventionDictionary removeInterventionDictionary(array $options = [])
 * @method RemoveQueryProcessor removeQueryProcessor(array $options = [])
 * @method RemoveScheduledTask removeScheduledTask(array $options = [])
 * @method RemoveSearchStrategy removeSearchStrategy(array $options = [])
 * @method RemoveSecondRank removeSecondRank(array $options = [])
 * @method RemoveUserAnalyzer removeUserAnalyzer(array $options = [])
 * @method RenewAppGroup renewAppGroup(array $options = [])
 * @method ReplaceAppGroupCommodityCode replaceAppGroupCommodityCode(array $options = [])
 * @method SaveSortScriptFile saveSortScriptFile(array $options = [])
 * @method StartSlowQueryAnalyzer startSlowQueryAnalyzer(array $options = [])
 * @method TagResources tagResources(array $options = [])
 * @method UnbindEsInstance unbindEsInstance(array $options = [])
 * @method UnbindESUserAnalyzer unbindESUserAnalyzer(array $options = [])
 * @method UntagResources untagResources(array $options = [])
 * @method UpdateABTestExperiment updateABTestExperiment(array $options = [])
 * @method UpdateABTestFixedFlowDividers updateABTestFixedFlowDividers(array $options = [])
 * @method UpdateABTestGroup updateABTestGroup(array $options = [])
 * @method UpdateABTestScene updateABTestScene(array $options = [])
 * @method UpdateFetchFields updateFetchFields(array $options = [])
 * @method UpdateFunctionDefaultInstance updateFunctionDefaultInstance(array $options = [])
 * @method UpdateFunctionInstance updateFunctionInstance(array $options = [])
 * @method UpdateSearchStrategy updateSearchStrategy(array $options = [])
 * @method UpdateSortScript updateSortScript(array $options = [])
 * @method UpdateSummaries updateSummaries(array $options = [])
 * @method ValidateDataSources validateDataSources(array $options = [])
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
}

/**
 * @method string getAppGroupIdentity()
 */
class BindEsInstance extends Roa
{
    /** @var string */
    public $pathPattern = '/v4/openapi/app-groups/[appGroupIdentity]/actions/bind-es-instance';

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
 * @method string getEsInstanceId()
 * @method string getAppGroupIdentity()
 */
class BindESUserAnalyzer extends Roa
{
    /** @var string */
    public $pathPattern = '/v4/openapi/app-groups/[appGroupIdentity]/es/[esInstanceId]/actions/bind-analyzer';

    /** @var string */
    public $method = 'POST';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withEsInstanceId($value)
    {
        $this->data['EsInstanceId'] = $value;
        $this->pathParameters['esInstanceId'] = $value;

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
 * @method string getGroupId()
 * @method string getSceneId()
 * @method string getAppGroupIdentity()
 */
class CreateABTestExperiment extends Roa
{
    /** @var string */
    public $pathPattern = '/v4/openapi/app-groups/[appGroupIdentity]/scenes/[sceneId]/groups/[groupId]/experiments';

    /** @var string */
    public $method = 'POST';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withGroupId($value)
    {
        $this->data['GroupId'] = $value;
        $this->pathParameters['groupId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSceneId($value)
    {
        $this->data['SceneId'] = $value;
        $this->pathParameters['sceneId'] = $value;

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
 * @method string getSceneId()
 * @method string getAppGroupIdentity()
 */
class CreateABTestGroup extends Roa
{
    /** @var string */
    public $pathPattern = '/v4/openapi/app-groups/[appGroupIdentity]/scenes/[sceneId]/groups';

    /** @var string */
    public $method = 'POST';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSceneId($value)
    {
        $this->data['SceneId'] = $value;
        $this->pathParameters['sceneId'] = $value;

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
class CreateABTestScene extends Roa
{
    /** @var string */
    public $pathPattern = '/v4/openapi/app-groups/[appGroupIdentity]/scenes';

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

/**
 * @method string getFunctionName()
 * @method string getAppGroupIdentity()
 */
class CreateFunctionInstance extends Roa
{
    /** @var string */
    public $pathPattern = '/v4/openapi/app-groups/[appGroupIdentity]/functions/[functionName]/instances';

    /** @var string */
    public $method = 'POST';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withFunctionName($value)
    {
        $this->data['FunctionName'] = $value;
        $this->pathParameters['functionName'] = $value;

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
 * @method string getInstanceName()
 * @method string getFunctionName()
 * @method string getAppGroupIdentity()
 */
class CreateFunctionTask extends Roa
{
    /** @var string */
    public $pathPattern = '/v4/openapi/app-groups/[appGroupIdentity]/functions/[functionName]/instances/[instanceName]/tasks';

    /** @var string */
    public $method = 'POST';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withInstanceName($value)
    {
        $this->data['InstanceName'] = $value;
        $this->pathParameters['instanceName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withFunctionName($value)
    {
        $this->data['FunctionName'] = $value;
        $this->pathParameters['functionName'] = $value;

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
 * @method string getAppId()
 * @method string getAppGroupIdentity()
 */
class CreateSearchStrategy extends Roa
{
    /** @var string */
    public $pathPattern = '/v4/openapi/app-groups/[appGroupIdentity]/apps/[appId]/search-strategies';

    /** @var string */
    public $method = 'POST';

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

class CreateUserAnalyzer extends Roa
{
    /** @var string */
    public $pathPattern = '/v4/openapi/user-analyzers';

    /** @var string */
    public $method = 'POST';
}

/**
 * @method string getGroupId()
 * @method string getSceneId()
 * @method string getExperimentId()
 * @method string getAppGroupIdentity()
 */
class DeleteABTestExperiment extends Roa
{
    /** @var string */
    public $pathPattern = '/v4/openapi/app-groups/[appGroupIdentity]/scenes/[sceneId]/groups/[groupId]/experiments/[experimentId]';

    /** @var string */
    public $method = 'DELETE';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withGroupId($value)
    {
        $this->data['GroupId'] = $value;
        $this->pathParameters['groupId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSceneId($value)
    {
        $this->data['SceneId'] = $value;
        $this->pathParameters['sceneId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withExperimentId($value)
    {
        $this->data['ExperimentId'] = $value;
        $this->pathParameters['experimentId'] = $value;

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
 * @method string getGroupId()
 * @method string getSceneId()
 * @method string getAppGroupIdentity()
 */
class DeleteABTestGroup extends Roa
{
    /** @var string */
    public $pathPattern = '/v4/openapi/app-groups/[appGroupIdentity]/scenes/[sceneId]/groups/[groupId]';

    /** @var string */
    public $method = 'DELETE';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withGroupId($value)
    {
        $this->data['GroupId'] = $value;
        $this->pathParameters['groupId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSceneId($value)
    {
        $this->data['SceneId'] = $value;
        $this->pathParameters['sceneId'] = $value;

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
 * @method string getSceneId()
 * @method string getAppGroupIdentity()
 */
class DeleteABTestScene extends Roa
{
    /** @var string */
    public $pathPattern = '/v4/openapi/app-groups/[appGroupIdentity]/scenes/[sceneId]';

    /** @var string */
    public $method = 'DELETE';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSceneId($value)
    {
        $this->data['SceneId'] = $value;
        $this->pathParameters['sceneId'] = $value;

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
 * @method string getInstanceName()
 * @method string getFunctionName()
 * @method string getAppGroupIdentity()
 */
class DeleteFunctionInstance extends Roa
{
    /** @var string */
    public $pathPattern = '/v4/openapi/app-groups/[appGroupIdentity]/functions/[functionName]/instances/[instanceName]';

    /** @var string */
    public $method = 'DELETE';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withInstanceName($value)
    {
        $this->data['InstanceName'] = $value;
        $this->pathParameters['instanceName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withFunctionName($value)
    {
        $this->data['FunctionName'] = $value;
        $this->pathParameters['functionName'] = $value;

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
 * @method string getGeneration()
 * @method string getInstanceName()
 * @method string getFunctionName()
 * @method string getAppGroupIdentity()
 */
class DeleteFunctionTask extends Roa
{
    /** @var string */
    public $pathPattern = '/v4/openapi/app-groups/[appGroupIdentity]/functions/[functionName]/instances/[instanceName]/tasks/[generation]';

    /** @var string */
    public $method = 'DELETE';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withGeneration($value)
    {
        $this->data['Generation'] = $value;
        $this->pathParameters['generation'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withInstanceName($value)
    {
        $this->data['InstanceName'] = $value;
        $this->pathParameters['instanceName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withFunctionName($value)
    {
        $this->data['FunctionName'] = $value;
        $this->pathParameters['functionName'] = $value;

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
 * @method string getAppVersionId()
 * @method string getFileName()
 * @method string getScriptName()
 * @method string getAppGroupIdentity()
 */
class DeleteSortScriptFile extends Roa
{
    /** @var string */
    public $pathPattern = '/v4/openapi/app-groups/[appGroupIdentity]/apps/[appVersionId]/sort-scripts/[scriptName]/files/src/[fileName]';

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
    public function withFileName($value)
    {
        $this->data['FileName'] = $value;
        $this->pathParameters['fileName'] = $value;

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
 * @method string getGroupId()
 * @method string getSceneId()
 * @method string getExperimentId()
 * @method string getAppGroupIdentity()
 */
class DescribeABTestExperiment extends Roa
{
    /** @var string */
    public $pathPattern = '/v4/openapi/app-groups/[appGroupIdentity]/scenes/[sceneId]/groups/[groupId]/experiments/[experimentId]';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withGroupId($value)
    {
        $this->data['GroupId'] = $value;
        $this->pathParameters['groupId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSceneId($value)
    {
        $this->data['SceneId'] = $value;
        $this->pathParameters['sceneId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withExperimentId($value)
    {
        $this->data['ExperimentId'] = $value;
        $this->pathParameters['experimentId'] = $value;

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
 * @method string getGroupId()
 * @method string getSceneId()
 * @method string getAppGroupIdentity()
 */
class DescribeABTestGroup extends Roa
{
    /** @var string */
    public $pathPattern = '/v4/openapi/app-groups/[appGroupIdentity]/scenes/[sceneId]/groups/[groupId]';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withGroupId($value)
    {
        $this->data['GroupId'] = $value;
        $this->pathParameters['groupId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSceneId($value)
    {
        $this->data['SceneId'] = $value;
        $this->pathParameters['sceneId'] = $value;

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
 * @method string getSceneId()
 * @method string getAppGroupIdentity()
 */
class DescribeABTestScene extends Roa
{
    /** @var string */
    public $pathPattern = '/v4/openapi/app-groups/[appGroupIdentity]/scenes/[sceneId]';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSceneId($value)
    {
        $this->data['SceneId'] = $value;
        $this->pathParameters['sceneId'] = $value;

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
 * @method string getWith()
 * @method string getName()
 */
class DescribeUserAnalyzer extends Roa
{
    /** @var string */
    public $pathPattern = '/v4/openapi/user-analyzers/[name]';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withWith($value)
    {
        $this->data['With'] = $value;
        $this->options['query']['with'] = $value;

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
 * @method string getSpec()
 */
class GenerateMergedTable extends Roa
{
    /** @var string */
    public $pathPattern = '/v4/openapi/assist/schema/actions/merge';

    /** @var string */
    public $method = 'POST';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSpec($value)
    {
        $this->data['Spec'] = $value;
        $this->options['query']['spec'] = $value;

        return $this;
    }
}

/**
 * @method string getDomainName()
 * @method string getAppGroupIdentity()
 */
class GetDomain extends Roa
{
    /** @var string */
    public $pathPattern = '/v4/openapi/domains/[domainName]';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDomainName($value)
    {
        $this->data['DomainName'] = $value;
        $this->pathParameters['domainName'] = $value;

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
        $this->options['query']['appGroupIdentity'] = $value;

        return $this;
    }
}

/**
 * @method string getModelType()
 * @method string getFunctionName()
 * @method string getDomain()
 * @method string getFunctionType()
 * @method string getCategory()
 */
class GetFunctionCurrentVersion extends Roa
{
    /** @var string */
    public $pathPattern = '/v4/openapi/functions/[functionName]/current-version';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withModelType($value)
    {
        $this->data['ModelType'] = $value;
        $this->options['query']['modelType'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withFunctionName($value)
    {
        $this->data['FunctionName'] = $value;
        $this->pathParameters['functionName'] = $value;

        return $this;
    }

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

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withFunctionType($value)
    {
        $this->data['FunctionType'] = $value;
        $this->options['query']['functionType'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCategory($value)
    {
        $this->data['Category'] = $value;
        $this->options['query']['category'] = $value;

        return $this;
    }
}

/**
 * @method string getFunctionName()
 * @method string getAppGroupIdentity()
 */
class GetFunctionDefaultInstance extends Roa
{
    /** @var string */
    public $pathPattern = '/v4/openapi/app-groups/[appGroupIdentity]/functions/[functionName]/default-instance';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withFunctionName($value)
    {
        $this->data['FunctionName'] = $value;
        $this->pathParameters['functionName'] = $value;

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
 * @method string getOutput()
 * @method string getInstanceName()
 * @method string getFunctionName()
 * @method string getAppGroupIdentity()
 */
class GetFunctionInstance extends Roa
{
    /** @var string */
    public $pathPattern = '/v4/openapi/app-groups/[appGroupIdentity]/functions/[functionName]/instances/[instanceName]';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOutput($value)
    {
        $this->data['Output'] = $value;
        $this->options['query']['output'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withInstanceName($value)
    {
        $this->data['InstanceName'] = $value;
        $this->pathParameters['instanceName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withFunctionName($value)
    {
        $this->data['FunctionName'] = $value;
        $this->pathParameters['functionName'] = $value;

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
 * @method string getGeneration()
 * @method string getInstanceName()
 * @method string getFunctionName()
 * @method string getAppGroupIdentity()
 */
class GetFunctionTask extends Roa
{
    /** @var string */
    public $pathPattern = '/v4/openapi/app-groups/[appGroupIdentity]/functions/[functionName]/instances/[instanceName]/tasks/[generation]';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withGeneration($value)
    {
        $this->data['Generation'] = $value;
        $this->pathParameters['generation'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withInstanceName($value)
    {
        $this->data['InstanceName'] = $value;
        $this->pathParameters['instanceName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withFunctionName($value)
    {
        $this->data['FunctionName'] = $value;
        $this->pathParameters['functionName'] = $value;

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
 * @method string getVersionId()
 * @method string getFunctionName()
 */
class GetFunctionVersion extends Roa
{
    /** @var string */
    public $pathPattern = '/v4/openapi/functions/[functionName]/versions/[versionId]';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withVersionId($value)
    {
        $this->data['VersionId'] = $value;
        $this->pathParameters['versionId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withFunctionName($value)
    {
        $this->data['FunctionName'] = $value;
        $this->pathParameters['functionName'] = $value;

        return $this;
    }
}

/**
 * @method string getModelName()
 * @method string getAppGroupIdentity()
 */
class GetModelReport extends Roa
{
    /** @var string */
    public $pathPattern = '/v4/openapi/app-groups/[appGroupIdentity]/algorithm/models/[modelName]/report';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withModelName($value)
    {
        $this->data['ModelName'] = $value;
        $this->pathParameters['modelName'] = $value;

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
class GetScriptFileNames extends Roa
{
    /** @var string */
    public $pathPattern = '/v4/openapi/app-groups/[appGroupIdentity]/apps/[appVersionId]/sort-scripts/[scriptName]/file-names';

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
 * @method string getStrategyName()
 * @method string getAppId()
 * @method string getAppGroupIdentity()
 */
class GetSearchStrategy extends Roa
{
    /** @var string */
    public $pathPattern = '/v4/openapi/app-groups/[appGroupIdentity]/apps/[appId]/search-strategies/[strategyName]';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withStrategyName($value)
    {
        $this->data['StrategyName'] = $value;
        $this->pathParameters['strategyName'] = $value;

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
 * @method string getFileName()
 * @method string getScriptName()
 * @method string getAppGroupIdentity()
 */
class GetSortScriptFile extends Roa
{
    /** @var string */
    public $pathPattern = '/v4/openapi/app-groups/[appGroupIdentity]/apps/[appVersionId]/sort-scripts/[scriptName]/files/src/[fileName]';

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
    public function withFileName($value)
    {
        $this->data['FileName'] = $value;
        $this->pathParameters['fileName'] = $value;

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
 * @method string getGroupId()
 * @method string getSceneId()
 * @method string getAppGroupIdentity()
 */
class ListABTestExperiments extends Roa
{
    /** @var string */
    public $pathPattern = '/v4/openapi/app-groups/[appGroupIdentity]/scenes/[sceneId]/groups/[groupId]/experiments';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withGroupId($value)
    {
        $this->data['GroupId'] = $value;
        $this->pathParameters['groupId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSceneId($value)
    {
        $this->data['SceneId'] = $value;
        $this->pathParameters['sceneId'] = $value;

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
 * @method string getGroupId()
 * @method string getSceneId()
 * @method string getExperimentId()
 * @method string getAppGroupIdentity()
 */
class ListABTestFixedFlowDividers extends Roa
{
    /** @var string */
    public $pathPattern = '/v4/openapi/app-groups/[appGroupIdentity]/scenes/[sceneId]/groups/[groupId]/experiments/[experimentId]/fixed-flow-dividers';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withGroupId($value)
    {
        $this->data['GroupId'] = $value;
        $this->pathParameters['groupId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSceneId($value)
    {
        $this->data['SceneId'] = $value;
        $this->pathParameters['sceneId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withExperimentId($value)
    {
        $this->data['ExperimentId'] = $value;
        $this->pathParameters['experimentId'] = $value;

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
 * @method string getSceneId()
 * @method string getAppGroupIdentity()
 */
class ListABTestGroups extends Roa
{
    /** @var string */
    public $pathPattern = '/v4/openapi/app-groups/[appGroupIdentity]/scenes/[sceneId]/groups';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSceneId($value)
    {
        $this->data['SceneId'] = $value;
        $this->pathParameters['sceneId'] = $value;

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
class ListABTestScenes extends Roa
{
    /** @var string */
    public $pathPattern = '/v4/openapi/app-groups/[appGroupIdentity]/scenes';

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
 * @method string getResourceGroupId()
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
    public function withResourceGroupId($value)
    {
        $this->data['ResourceGroupId'] = $value;
        $this->options['query']['resourceGroupId'] = $value;

        return $this;
    }

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
 * @method string getDataSourceType()
 * @method string getParams()
 */
class ListDataSourceTableFields extends Roa
{
    /** @var string */
    public $pathPattern = '/v4/openapi/assist/data-sources/[dataSourceType]/fields';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDataSourceType($value)
    {
        $this->data['DataSourceType'] = $value;
        $this->pathParameters['dataSourceType'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withParams($value)
    {
        $this->data['Params'] = $value;
        $this->options['query']['params'] = $value;

        return $this;
    }
}

/**
 * @method string getDataSourceType()
 * @method string getParams()
 */
class ListDataSourceTables extends Roa
{
    /** @var string */
    public $pathPattern = '/v4/openapi/assist/data-sources/[dataSourceType]/tables';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDataSourceType($value)
    {
        $this->data['DataSourceType'] = $value;
        $this->pathParameters['dataSourceType'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withParams($value)
    {
        $this->data['Params'] = $value;
        $this->options['query']['params'] = $value;

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
 * @method string getOutput()
 * @method string getModelType()
 * @method string getFunctionName()
 * @method string getPageSize()
 * @method string getFunctionType()
 * @method string getSource()
 * @method string getAppGroupIdentity()
 * @method string getPageNumber()
 */
class ListFunctionInstances extends Roa
{
    /** @var string */
    public $pathPattern = '/v4/openapi/app-groups/[appGroupIdentity]/functions/[functionName]/instances';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOutput($value)
    {
        $this->data['Output'] = $value;
        $this->options['query']['output'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withModelType($value)
    {
        $this->data['ModelType'] = $value;
        $this->options['query']['modelType'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withFunctionName($value)
    {
        $this->data['FunctionName'] = $value;
        $this->pathParameters['functionName'] = $value;

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
    public function withFunctionType($value)
    {
        $this->data['FunctionType'] = $value;
        $this->options['query']['functionType'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSource($value)
    {
        $this->data['Source'] = $value;
        $this->options['query']['source'] = $value;

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
 * @method string getInstanceName()
 * @method string getFunctionName()
 * @method string getPageSize()
 * @method string getEndTime()
 * @method string getStartTime()
 * @method string getAppGroupIdentity()
 * @method string getPageNumber()
 * @method string getStatus()
 */
class ListFunctionTasks extends Roa
{
    /** @var string */
    public $pathPattern = '/v4/openapi/app-groups/[appGroupIdentity]/functions/[functionName]/instances/[instanceName]/tasks';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withInstanceName($value)
    {
        $this->data['InstanceName'] = $value;
        $this->pathParameters['instanceName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withFunctionName($value)
    {
        $this->data['FunctionName'] = $value;
        $this->pathParameters['functionName'] = $value;

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

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withStatus($value)
    {
        $this->data['Status'] = $value;
        $this->options['query']['status'] = $value;

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
 * @method string getPageSize()
 * @method string getWord()
 * @method string getPageNumber()
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
    public function withWord($value)
    {
        $this->data['Word'] = $value;
        $this->options['query']['word'] = $value;

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
 * @method string getPageSize()
 * @method string getType()
 * @method string getAppGroupIdentity()
 * @method string getPageNumber()
 */
class ListModels extends Roa
{
    /** @var string */
    public $pathPattern = '/v4/openapi/app-groups/[appGroupIdentity]/algorithm/models';

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
 * @method string getFilterFinished()
 * @method string getAppGroupIdentity()
 */
class ListProceedings extends Roa
{
    /** @var string */
    public $pathPattern = '/v4/openapi/app-groups/[appGroupIdentity]/proceedings';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withFilterFinished($value)
    {
        $this->data['FilterFinished'] = $value;
        $this->options['query']['filterFinished'] = $value;

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
 * @method string getText()
 * @method string getAppGroupIdentity()
 */
class ListQueryProcessorAnalyzerResults extends Roa
{
    /** @var string */
    public $pathPattern = '/v4/openapi/app-groups/[appGroupIdentity]/apps/[appId]/query-processors/[name]/analyze';

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
    public function withText($value)
    {
        $this->data['Text'] = $value;
        $this->options['query']['text'] = $value;

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
 * @method string getAppGroupIdentity()
 * @method string getPageNumber()
 */
class ListQuotaReviewTasks extends Roa
{
    /** @var string */
    public $pathPattern = '/v4/openapi/app-groups/[appGroupIdentity]/quota-review-tasks';

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
class ListSearchStrategies extends Roa
{
    /** @var string */
    public $pathPattern = '/v4/openapi/app-groups/[appGroupIdentity]/apps/[appId]/search-strategies';

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
 * @method string getAppId()
 * @method string getAppGroupIdentity()
 */
class ListSortExpressions extends Roa
{
    /** @var string */
    public $pathPattern = '/v4/openapi/app-groups/[appGroupIdentity]/apps/[appId]/sort-expressions';

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
 * @method string getColumns()
 * @method string getQuery()
 * @method string getPageSize()
 * @method string getModuleName()
 * @method string getDistinct()
 * @method string getSortBy()
 * @method string getStartTime()
 * @method string getStopTime()
 * @method string getAppGroupIdentity()
 * @method string getPageNumber()
 */
class ListStatisticLogs extends Roa
{
    /** @var string */
    public $pathPattern = '/v4/openapi/app-groups/[appGroupIdentity]/statistic-logs/[moduleName]';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withColumns($value)
    {
        $this->data['Columns'] = $value;
        $this->options['query']['columns'] = $value;

        return $this;
    }

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
    public function withModuleName($value)
    {
        $this->data['ModuleName'] = $value;
        $this->pathParameters['moduleName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDistinct($value)
    {
        $this->data['Distinct'] = $value;
        $this->options['query']['distinct'] = $value;

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
 * @method string getColumns()
 * @method string getQuery()
 * @method string getPageSize()
 * @method string getModuleName()
 * @method string getEndTime()
 * @method string getStartTime()
 * @method string getAppGroupIdentity()
 * @method string getPageNumber()
 */
class ListStatisticReport extends Roa
{
    /** @var string */
    public $pathPattern = '/v4/openapi/app-groups/[appGroupIdentity]/statistic-report/[moduleName]';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withColumns($value)
    {
        $this->data['Columns'] = $value;
        $this->options['query']['columns'] = $value;

        return $this;
    }

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
    public function withModuleName($value)
    {
        $this->data['ModuleName'] = $value;
        $this->pathParameters['moduleName'] = $value;

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
 * @method string getNextToken()
 * @method string getResourceType()
 */
class ListTagResources extends Roa
{
    /** @var string */
    public $pathPattern = '/v4/openapi/resource-tags';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withNextToken($value)
    {
        $this->data['NextToken'] = $value;
        $this->options['query']['nextToken'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withResourceType($value)
    {
        $this->data['ResourceType'] = $value;
        $this->options['query']['resourceType'] = $value;

        return $this;
    }
}

/**
 * @method string getName()
 * @method string getPageSize()
 * @method string getWord()
 * @method string getPageNumber()
 */
class ListUserAnalyzerEntries extends Roa
{
    /** @var string */
    public $pathPattern = '/v4/openapi/user-analyzers/[name]/entries';

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
    public function withWord($value)
    {
        $this->data['Word'] = $value;
        $this->options['query']['word'] = $value;

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
 * @method string getPageSize()
 * @method string getPageNumber()
 */
class ListUserAnalyzers extends Roa
{
    /** @var string */
    public $pathPattern = '/v4/openapi/user-analyzers';

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
 * @method string getModelName()
 * @method string getQuery()
 * @method string getAppGroupIdentity()
 */
class PreviewModel extends Roa
{
    /** @var string */
    public $pathPattern = '/v4/openapi/app-groups/[appGroupIdentity]/algorithm/models/[modelName]/actions/preview';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withModelName($value)
    {
        $this->data['ModelName'] = $value;
        $this->pathParameters['modelName'] = $value;

        return $this;
    }

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
 * @method string getName()
 */
class PushUserAnalyzerEntries extends Roa
{
    /** @var string */
    public $pathPattern = '/v4/openapi/user-analyzers/[name]/entries/actions/bulk';

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
 * @method string getModelName()
 * @method string getAppGroupIdentity()
 */
class RankPreviewQuery extends Roa
{
    /** @var string */
    public $pathPattern = '/v4/openapi/app-groups/[appGroupIdentity]/algorithm/models/[modelName]/actions/query-rank';

    /** @var string */
    public $method = 'POST';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withModelName($value)
    {
        $this->data['ModelName'] = $value;
        $this->pathParameters['modelName'] = $value;

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
 * @method string getStrategyName()
 * @method string getAppId()
 * @method string getAppGroupIdentity()
 */
class RemoveSearchStrategy extends Roa
{
    /** @var string */
    public $pathPattern = '/v4/openapi/app-groups/[appGroupIdentity]/apps/[appId]/search-strategies/[strategyName]';

    /** @var string */
    public $method = 'DELETE';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withStrategyName($value)
    {
        $this->data['StrategyName'] = $value;
        $this->pathParameters['strategyName'] = $value;

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
 * @method string getName()
 */
class RemoveUserAnalyzer extends Roa
{
    /** @var string */
    public $pathPattern = '/v4/openapi/user-analyzers/[name]';

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
 * @method string getClientToken()
 * @method string getAppGroupIdentity()
 */
class RenewAppGroup extends Roa
{
    /** @var string */
    public $pathPattern = '/v4/openapi/app-groups/[appGroupIdentity]/actions/renew';

    /** @var string */
    public $method = 'POST';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withClientToken($value)
    {
        $this->data['ClientToken'] = $value;
        $this->options['query']['clientToken'] = $value;

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
 * @method string getFileName()
 * @method string getScriptName()
 * @method string getAppGroupIdentity()
 */
class SaveSortScriptFile extends Roa
{
    /** @var string */
    public $pathPattern = '/v4/openapi/app-groups/[appGroupIdentity]/apps/[appVersionId]/sort-scripts/[scriptName]/files/src/[fileName]';

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
    public function withFileName($value)
    {
        $this->data['FileName'] = $value;
        $this->pathParameters['fileName'] = $value;

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
 * @method string getBody()
 */
class TagResources extends Roa
{
    /** @var string */
    public $pathPattern = '/v4/openapi/resource-tags';

    /** @var string */
    public $method = 'POST';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBody($value)
    {
        $this->data['Body'] = $value;
        $this->options['form_params']['body'] = $value;

        return $this;
    }
}

/**
 * @method string getAppGroupIdentity()
 */
class UnbindEsInstance extends Roa
{
    /** @var string */
    public $pathPattern = '/v4/openapi/app-groups/[appGroupIdentity]/actions/unbind-es-instance';

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
 * @method string getEsInstanceId()
 * @method string getAppGroupIdentity()
 */
class UnbindESUserAnalyzer extends Roa
{
    /** @var string */
    public $pathPattern = '/v4/openapi/app-groups/[appGroupIdentity]/es/[esInstanceId]/actions/unbind-analyzer';

    /** @var string */
    public $method = 'POST';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withEsInstanceId($value)
    {
        $this->data['EsInstanceId'] = $value;
        $this->pathParameters['esInstanceId'] = $value;

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
 * @method string getAll()
 * @method string getResourceType()
 */
class UntagResources extends Roa
{
    /** @var string */
    public $pathPattern = '/v4/openapi/resource-tags';

    /** @var string */
    public $method = 'DELETE';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAll($value)
    {
        $this->data['All'] = $value;
        $this->options['query']['all'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withResourceType($value)
    {
        $this->data['ResourceType'] = $value;
        $this->options['query']['resourceType'] = $value;

        return $this;
    }
}

/**
 * @method string getGroupId()
 * @method string getSceneId()
 * @method string getExperimentId()
 * @method string getAppGroupIdentity()
 */
class UpdateABTestExperiment extends Roa
{
    /** @var string */
    public $pathPattern = '/v4/openapi/app-groups/[appGroupIdentity]/scenes/[sceneId]/groups/[groupId]/experiments/[experimentId]';

    /** @var string */
    public $method = 'PUT';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withGroupId($value)
    {
        $this->data['GroupId'] = $value;
        $this->pathParameters['groupId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSceneId($value)
    {
        $this->data['SceneId'] = $value;
        $this->pathParameters['sceneId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withExperimentId($value)
    {
        $this->data['ExperimentId'] = $value;
        $this->pathParameters['experimentId'] = $value;

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
 * @method string getGroupId()
 * @method string getSceneId()
 * @method string getExperimentId()
 * @method string getAppGroupIdentity()
 */
class UpdateABTestFixedFlowDividers extends Roa
{
    /** @var string */
    public $pathPattern = '/v4/openapi/app-groups/[appGroupIdentity]/scenes/[sceneId]/groups/[groupId]/experiments/[experimentId]/fixed-flow-dividers';

    /** @var string */
    public $method = 'PUT';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withGroupId($value)
    {
        $this->data['GroupId'] = $value;
        $this->pathParameters['groupId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSceneId($value)
    {
        $this->data['SceneId'] = $value;
        $this->pathParameters['sceneId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withExperimentId($value)
    {
        $this->data['ExperimentId'] = $value;
        $this->pathParameters['experimentId'] = $value;

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
 * @method string getGroupId()
 * @method string getSceneId()
 * @method string getAppGroupIdentity()
 */
class UpdateABTestGroup extends Roa
{
    /** @var string */
    public $pathPattern = '/v4/openapi/app-groups/[appGroupIdentity]/scenes/[sceneId]/groups/[groupId]';

    /** @var string */
    public $method = 'PUT';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withGroupId($value)
    {
        $this->data['GroupId'] = $value;
        $this->pathParameters['groupId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSceneId($value)
    {
        $this->data['SceneId'] = $value;
        $this->pathParameters['sceneId'] = $value;

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
 * @method string getSceneId()
 * @method string getAppGroupIdentity()
 */
class UpdateABTestScene extends Roa
{
    /** @var string */
    public $pathPattern = '/v4/openapi/app-groups/[appGroupIdentity]/scenes/[sceneId]';

    /** @var string */
    public $method = 'PUT';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSceneId($value)
    {
        $this->data['SceneId'] = $value;
        $this->pathParameters['sceneId'] = $value;

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
 * @method string getFunctionName()
 * @method string getAppGroupIdentity()
 */
class UpdateFunctionDefaultInstance extends Roa
{
    /** @var string */
    public $pathPattern = '/v4/openapi/app-groups/[appGroupIdentity]/functions/[functionName]/default-instance';

    /** @var string */
    public $method = 'PUT';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withFunctionName($value)
    {
        $this->data['FunctionName'] = $value;
        $this->pathParameters['functionName'] = $value;

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
 * @method string getInstanceName()
 * @method string getFunctionName()
 * @method string getAppGroupIdentity()
 */
class UpdateFunctionInstance extends Roa
{
    /** @var string */
    public $pathPattern = '/v4/openapi/app-groups/[appGroupIdentity]/functions/[functionName]/instances/[instanceName]';

    /** @var string */
    public $method = 'PUT';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withInstanceName($value)
    {
        $this->data['InstanceName'] = $value;
        $this->pathParameters['instanceName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withFunctionName($value)
    {
        $this->data['FunctionName'] = $value;
        $this->pathParameters['functionName'] = $value;

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
 * @method string getStrategyName()
 * @method string getAppId()
 * @method string getAppGroupIdentity()
 */
class UpdateSearchStrategy extends Roa
{
    /** @var string */
    public $pathPattern = '/v4/openapi/app-groups/[appGroupIdentity]/apps/[appId]/search-strategies/[strategyName]';

    /** @var string */
    public $method = 'PUT';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withStrategyName($value)
    {
        $this->data['StrategyName'] = $value;
        $this->pathParameters['strategyName'] = $value;

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
 * @method string getScriptName()
 * @method string getAppGroupIdentity()
 */
class UpdateSortScript extends Roa
{
    /** @var string */
    public $pathPattern = '/v4/openapi/app-groups/[appGroupIdentity]/apps/[appVersionId]/sort-scripts/[scriptName]';

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

class ValidateDataSources extends Roa
{
    /** @var string */
    public $pathPattern = '/v4/openapi/assist/data-sources/validations';

    /** @var string */
    public $method = 'POST';
}
