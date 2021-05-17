<?php

namespace AlibabaCloud\OpenSearch\V20171225;

use AlibabaCloud\Client\Resolver\ApiResolver;

/**
 * @method CompileSortScript compileSortScript(array $options = [])
 * @method CreateABTestExperiment createABTestExperiment(array $options = [])
 * @method CreateABTestGroup createABTestGroup(array $options = [])
 * @method CreateABTestScene createABTestScene(array $options = [])
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
 * @method CreateUserAnalyzer createUserAnalyzer(array $options = [])
 * @method DeleteABTestExperiment deleteABTestExperiment(array $options = [])
 * @method DeleteABTestGroup deleteABTestGroup(array $options = [])
 * @method DeleteABTestScene deleteABTestScene(array $options = [])
 * @method DeleteModel deleteModel(array $options = [])
 * @method DeleteSortScript deleteSortScript(array $options = [])
 * @method DeleteSortScriptFile deleteSortScriptFile(array $options = [])
 * @method DescribeABTestExperiment describeABTestExperiment(array $options = [])
 * @method DescribeABTestGroup describeABTestGroup(array $options = [])
 * @method DescribeABTestScene describeABTestScene(array $options = [])
 * @method DescribeApp describeApp(array $options = [])
 * @method DescribeAppGroup describeAppGroup(array $options = [])
 * @method DescribeAppGroupDataReport describeAppGroupDataReport(array $options = [])
 * @method DescribeApps describeApps(array $options = [])
 * @method DescribeAppStatistics describeAppStatistics(array $options = [])
 * @method DescribeDataCollction describeDataCollction(array $options = [])
 * @method DescribeFirstRank describeFirstRank(array $options = [])
 * @method DescribeInterventionDictionary describeInterventionDictionary(array $options = [])
 * @method DescribeModel describeModel(array $options = [])
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
 * @method GetModelProgress getModelProgress(array $options = [])
 * @method GetModelReport getModelReport(array $options = [])
 * @method GetScriptFileNames getScriptFileNames(array $options = [])
 * @method GetSortScript getSortScript(array $options = [])
 * @method GetSortScriptFile getSortScriptFile(array $options = [])
 * @method GetValidationError getValidationError(array $options = [])
 * @method GetValidationReport getValidationReport(array $options = [])
 * @method ListABTestExperiments listABTestExperiments(array $options = [])
 * @method ListABTestFixedFlowDividers listABTestFixedFlowDividers(array $options = [])
 * @method ListABTestGroups listABTestGroups(array $options = [])
 * @method ListABTestMetrics listABTestMetrics(array $options = [])
 * @method ListABTestScenes listABTestScenes(array $options = [])
 * @method ListAppGroupErrors listAppGroupErrors(array $options = [])
 * @method ListAppGroupMetrics listAppGroupMetrics(array $options = [])
 * @method ListAppGroups listAppGroups(array $options = [])
 * @method ListApps listApps(array $options = [])
 * @method ListDataCollections listDataCollections(array $options = [])
 * @method ListDataSourceTableFields listDataSourceTableFields(array $options = [])
 * @method ListDataSourceTables listDataSourceTables(array $options = [])
 * @method ListDeployedAlgorithmModels listDeployedAlgorithmModels(array $options = [])
 * @method ListFirstRanks listFirstRanks(array $options = [])
 * @method ListInterventionDictionaries listInterventionDictionaries(array $options = [])
 * @method ListInterventionDictionaryEntries listInterventionDictionaryEntries(array $options = [])
 * @method ListInterventionDictionaryNerResults listInterventionDictionaryNerResults(array $options = [])
 * @method ListInterventionDictionaryRelatedEntities listInterventionDictionaryRelatedEntities(array $options = [])
 * @method ListModels listModels(array $options = [])
 * @method ListQueryProcessorNers listQueryProcessorNers(array $options = [])
 * @method ListQueryProcessors listQueryProcessors(array $options = [])
 * @method ListQuotaReviewTasks listQuotaReviewTasks(array $options = [])
 * @method ListRamRoles listRamRoles(array $options = [])
 * @method ListScheduledTasks listScheduledTasks(array $options = [])
 * @method ListSecondRanks listSecondRanks(array $options = [])
 * @method ListSlowQueryCategories listSlowQueryCategories(array $options = [])
 * @method ListSlowQueryQueries listSlowQueryQueries(array $options = [])
 * @method ListSortExpressions listSortExpressions(array $options = [])
 * @method ListSortScripts listSortScripts(array $options = [])
 * @method ListStatisticLogs listStatisticLogs(array $options = [])
 * @method ListStatisticReport listStatisticReport(array $options = [])
 * @method ListUserAnalyzerEntries listUserAnalyzerEntries(array $options = [])
 * @method ListUserAnalyzers listUserAnalyzers(array $options = [])
 * @method ModifyAppGroup modifyAppGroup(array $options = [])
 * @method ModifyAppGroupQuota modifyAppGroupQuota(array $options = [])
 * @method ModifyFirstRank modifyFirstRank(array $options = [])
 * @method ModifyModel modifyModel(array $options = [])
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
 * @method RemoveSecondRank removeSecondRank(array $options = [])
 * @method RemoveUserAnalyzer removeUserAnalyzer(array $options = [])
 * @method RenewAppGroup renewAppGroup(array $options = [])
 * @method ReplaceAppGroupCommodityCode replaceAppGroupCommodityCode(array $options = [])
 * @method SaveSortScriptFile saveSortScriptFile(array $options = [])
 * @method StartSlowQueryAnalyzer startSlowQueryAnalyzer(array $options = [])
 * @method TrainModel trainModel(array $options = [])
 * @method UpdateABTestExperiment updateABTestExperiment(array $options = [])
 * @method UpdateABTestFixedFlowDividers updateABTestFixedFlowDividers(array $options = [])
 * @method UpdateABTestGroup updateABTestGroup(array $options = [])
 * @method UpdateABTestScene updateABTestScene(array $options = [])
 * @method UpdateFetchFields updateFetchFields(array $options = [])
 * @method UpdateSortScript updateSortScript(array $options = [])
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
    public $pathPattern = '/v4/openapi/app-groups/[appGroupIdentity]/algorithm/models';

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
 * @method string getModelName()
 * @method string getAppGroupIdentity()
 */
class DeleteModel extends Roa
{
    /** @var string */
    public $pathPattern = '/v4/openapi/app-groups/[appGroupIdentity]/algorithm/models/[modelName]';

    /** @var string */
    public $method = 'DELETE';

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
 * @method string getModelName()
 * @method string getAppGroupIdentity()
 */
class DescribeModel extends Roa
{
    /** @var string */
    public $pathPattern = '/v4/openapi/app-groups/[appGroupIdentity]/algorithm/models/[modelName]';

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
 * @method string getModelName()
 * @method string getAppGroupIdentity()
 */
class GetModelProgress extends Roa
{
    /** @var string */
    public $pathPattern = '/v4/openapi/app-groups/[appGroupIdentity]/algorithm/models/[modelName]/progress';

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
 * @method string getAppGroupIdentity()
 * @method string getErrorCode()
 */
class GetValidationError extends Roa
{
    /** @var string */
    public $pathPattern = '/v4/openapi/app-groups/[appGroupIdentity]/algorithm/data/validation-error';

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
    public function withErrorCode($value)
    {
        $this->data['ErrorCode'] = $value;
        $this->options['query']['errorCode'] = $value;

        return $this;
    }
}

/**
 * @method string getType()
 * @method string getAppGroupIdentity()
 */
class GetValidationReport extends Roa
{
    /** @var string */
    public $pathPattern = '/v4/openapi/app-groups/[appGroupIdentity]/algorithm/data/validation-report';

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
 * @method string getGroupId()
 * @method string getSceneId()
 * @method string getAppGroupIdentity()
 */
class ListABTestMetrics extends Roa
{
    /** @var string */
    public $pathPattern = '/v4/openapi/app-groups/[appGroupIdentity]/scenes/[sceneId]/groups/[groupId]/metrics';

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

class ListRamRoles extends Roa
{
    /** @var string */
    public $pathPattern = '/v4/openapi/assist/ram/roles';
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
 * @method string getModelName()
 * @method string getAppGroupIdentity()
 */
class ModifyModel extends Roa
{
    /** @var string */
    public $pathPattern = '/v4/openapi/app-groups/[appGroupIdentity]/algorithm/models/[modelName]';

    /** @var string */
    public $method = 'PUT';

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
 * @method string getModelName()
 * @method string getAppGroupIdentity()
 */
class TrainModel extends Roa
{
    /** @var string */
    public $pathPattern = '/v4/openapi/app-groups/[appGroupIdentity]/algorithm/models/[modelName]/actions/train';

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
