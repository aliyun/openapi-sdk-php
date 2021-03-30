<?php

namespace AlibabaCloud\Airec\V20201126;

use AlibabaCloud\Client\Resolver\ApiResolver;

/**
 * @method AttachDataset attachDataset(array $options = [])
 * @method AttachIndexVersion attachIndexVersion(array $options = [])
 * @method CheckRankingModelReachable checkRankingModelReachable(array $options = [])
 * @method CloneExperiment cloneExperiment(array $options = [])
 * @method CreateFilteringAlgorithm createFilteringAlgorithm(array $options = [])
 * @method CreateInstance createInstance(array $options = [])
 * @method CreateRankingModel createRankingModel(array $options = [])
 * @method CreateRule createRule(array $options = [])
 * @method CreateScene createScene(array $options = [])
 * @method DecribeRankingModel decribeRankingModel(array $options = [])
 * @method DeleteDataSet deleteDataSet(array $options = [])
 * @method DeleteExperiment deleteExperiment(array $options = [])
 * @method DeleteFilteringAlgorithm deleteFilteringAlgorithm(array $options = [])
 * @method DeleteRankingModel deleteRankingModel(array $options = [])
 * @method DeleteScene deleteScene(array $options = [])
 * @method DescribeBaseExperiment describeBaseExperiment(array $options = [])
 * @method DescribeDataSetMessage describeDataSetMessage(array $options = [])
 * @method DescribeDefaultAlgorithms describeDefaultAlgorithms(array $options = [])
 * @method DescribeExperiment describeExperiment(array $options = [])
 * @method DescribeExperimentEnv describeExperimentEnv(array $options = [])
 * @method DescribeExperimentEnvProgress describeExperimentEnvProgress(array $options = [])
 * @method DescribeFilteringAlgorithm describeFilteringAlgorithm(array $options = [])
 * @method DescribeInstance describeInstance(array $options = [])
 * @method DescribeLatestTask describeLatestTask(array $options = [])
 * @method DescribeQuota describeQuota(array $options = [])
 * @method DescribeRegions describeRegions(array $options = [])
 * @method DescribeRule describeRule(array $options = [])
 * @method DescribeScene describeScene(array $options = [])
 * @method DescribeSceneBucket describeSceneBucket(array $options = [])
 * @method DescribeSceneThroughput describeSceneThroughput(array $options = [])
 * @method DescribeSyncReportDetail describeSyncReportDetail(array $options = [])
 * @method DescribeSyncReportOutliers describeSyncReportOutliers(array $options = [])
 * @method DescribeUserMetrics describeUserMetrics(array $options = [])
 * @method DowngradeInstance downgradeInstance(array $options = [])
 * @method EnableExperiment enableExperiment(array $options = [])
 * @method ListDashboardDetails listDashboardDetails(array $options = [])
 * @method ListDashboardDetailsFlows listDashboardDetailsFlows(array $options = [])
 * @method ListDashboardMetrics listDashboardMetrics(array $options = [])
 * @method ListDashboardMetricsFlows listDashboardMetricsFlows(array $options = [])
 * @method ListDataSet listDataSet(array $options = [])
 * @method ListDataSource listDataSource(array $options = [])
 * @method ListExperiments listExperiments(array $options = [])
 * @method ListFilteringAlgorithms listFilteringAlgorithms(array $options = [])
 * @method ListIndexVersions listIndexVersions(array $options = [])
 * @method ListInstance listInstance(array $options = [])
 * @method ListInstanceTask listInstanceTask(array $options = [])
 * @method ListItems listItems(array $options = [])
 * @method ListLogs listLogs(array $options = [])
 * @method ListMixCategories listMixCategories(array $options = [])
 * @method ListRankingModels listRankingModels(array $options = [])
 * @method ListRuleConditions listRuleConditions(array $options = [])
 * @method ListRules listRules(array $options = [])
 * @method ListRuleTasks listRuleTasks(array $options = [])
 * @method ListSceneItems listSceneItems(array $options = [])
 * @method ListSceneParameters listSceneParameters(array $options = [])
 * @method ListScenes listScenes(array $options = [])
 * @method ListUmengAppkeys listUmengAppkeys(array $options = [])
 * @method ListUserClusters listUserClusters(array $options = [])
 * @method ModifyDataSource modifyDataSource(array $options = [])
 * @method ModifyFilteringAlgorithmMeta modifyFilteringAlgorithmMeta(array $options = [])
 * @method ModifyInstance modifyInstance(array $options = [])
 * @method ModifyItems modifyItems(array $options = [])
 * @method ModifyRankingModel modifyRankingModel(array $options = [])
 * @method ModifyRule modifyRule(array $options = [])
 * @method ModifyScene modifyScene(array $options = [])
 * @method OfflineFilteringAlgorithm offlineFilteringAlgorithm(array $options = [])
 * @method PublishRule publishRule(array $options = [])
 * @method PushDocument pushDocument(array $options = [])
 * @method PushIntervention pushIntervention(array $options = [])
 * @method QueryDataMessage queryDataMessage(array $options = [])
 * @method QueryDataMessageStatistics queryDataMessageStatistics(array $options = [])
 * @method QueryExceptionHistory queryExceptionHistory(array $options = [])
 * @method QueryRawData queryRawData(array $options = [])
 * @method QuerySingleAggregationReport querySingleAggregationReport(array $options = [])
 * @method QuerySingleReport querySingleReport(array $options = [])
 * @method QuerySyncReportAggregation querySyncReportAggregation(array $options = [])
 * @method RebuildIndex rebuildIndex(array $options = [])
 * @method Recommend recommend(array $options = [])
 * @method RunInstance runInstance(array $options = [])
 * @method StopDataSet stopDataSet(array $options = [])
 * @method UnLockIndexVersion unLockIndexVersion(array $options = [])
 * @method UpdateExperimentBasicInfo updateExperimentBasicInfo(array $options = [])
 * @method UpdateExperimentConfig updateExperimentConfig(array $options = [])
 * @method UpdateExperimentStatus updateExperimentStatus(array $options = [])
 * @method UpgradeInstance upgradeInstance(array $options = [])
 * @method ValidateInstance validateInstance(array $options = [])
 */
class AirecApiResolver extends ApiResolver
{
}

class Roa extends \AlibabaCloud\Client\Resolver\Roa
{
    /** @var string */
    public $product = 'Airec';

    /** @var string */
    public $version = '2020-11-26';

    /** @var string */
    public $serviceCode = 'airec';
}

/**
 * @method string getVersionId()
 * @method string getInstanceId()
 */
class AttachDataset extends Roa
{
    /** @var string */
    public $pathPattern = '/v2/openapi/instances/[instanceId]/dataSets/[versionId]/actions/current';

    /** @var string */
    public $method = 'POST';

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
    public function withInstanceId($value)
    {
        $this->data['InstanceId'] = $value;
        $this->pathParameters['instanceId'] = $value;

        return $this;
    }
}

/**
 * @method string getVersionId()
 * @method string getInstanceId()
 * @method string getAlgorithmId()
 */
class AttachIndexVersion extends Roa
{
    /** @var string */
    public $pathPattern = '/v2/openapi/instances/[instanceId]/filtering-algorithms/[algorithmId]/index-versions/[versionId]/actions/attach';

    /** @var string */
    public $method = 'POST';

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
    public function withInstanceId($value)
    {
        $this->data['InstanceId'] = $value;
        $this->pathParameters['instanceId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAlgorithmId($value)
    {
        $this->data['AlgorithmId'] = $value;
        $this->pathParameters['algorithmId'] = $value;

        return $this;
    }
}

/**
 * @method string getInstanceId()
 * @method string getRankingModelId()
 */
class CheckRankingModelReachable extends Roa
{
    /** @var string */
    public $pathPattern = '/v2/openapi/instances/[instanceId]/ranking-models/[rankingModelId]/actions/check-connectivity';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withInstanceId($value)
    {
        $this->data['InstanceId'] = $value;
        $this->pathParameters['instanceId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withRankingModelId($value)
    {
        $this->data['RankingModelId'] = $value;
        $this->pathParameters['rankingModelId'] = $value;

        return $this;
    }
}

/**
 * @method string getInstanceId()
 * @method string getDryRun()
 * @method string getSceneId()
 * @method string getExperimentId()
 */
class CloneExperiment extends Roa
{
    /** @var string */
    public $pathPattern = '/v2/openapi/instances/[instanceId]/scenes/[sceneId]/experiments/[experimentId]/actions/clone';

    /** @var string */
    public $method = 'POST';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withInstanceId($value)
    {
        $this->data['InstanceId'] = $value;
        $this->pathParameters['instanceId'] = $value;

        return $this;
    }

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
}

/**
 * @method string getInstanceId()
 * @method string getDryRun()
 */
class CreateFilteringAlgorithm extends Roa
{
    /** @var string */
    public $pathPattern = '/v2/openapi/instances/[instanceId]/filtering-algorithms';

    /** @var string */
    public $method = 'POST';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withInstanceId($value)
    {
        $this->data['InstanceId'] = $value;
        $this->pathParameters['instanceId'] = $value;

        return $this;
    }

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
}

class CreateInstance extends Roa
{
    /** @var string */
    public $pathPattern = '/v2/openapi/instances';

    /** @var string */
    public $method = 'POST';
}

/**
 * @method string getInstanceId()
 * @method string getDryRun()
 */
class CreateRankingModel extends Roa
{
    /** @var string */
    public $pathPattern = '/v2/openapi/instances/[instanceId]/ranking-models';

    /** @var string */
    public $method = 'POST';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withInstanceId($value)
    {
        $this->data['InstanceId'] = $value;
        $this->pathParameters['instanceId'] = $value;

        return $this;
    }

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
}

/**
 * @method string getInstanceId()
 */
class CreateRule extends Roa
{
    /** @var string */
    public $pathPattern = '/v2/openapi/instances/[instanceId]/rules';

    /** @var string */
    public $method = 'POST';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withInstanceId($value)
    {
        $this->data['InstanceId'] = $value;
        $this->pathParameters['instanceId'] = $value;

        return $this;
    }
}

/**
 * @method string getInstanceId()
 * @method string getDryRun()
 */
class CreateScene extends Roa
{
    /** @var string */
    public $pathPattern = '/v2/openapi/instances/[instanceId]/scenes';

    /** @var string */
    public $method = 'POST';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withInstanceId($value)
    {
        $this->data['InstanceId'] = $value;
        $this->pathParameters['instanceId'] = $value;

        return $this;
    }

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
}

/**
 * @method string getInstanceId()
 * @method string getRankingModelId()
 */
class DecribeRankingModel extends Roa
{
    /** @var string */
    public $pathPattern = '/v2/openapi/instances/[instanceId]/ranking-models/[rankingModelId]';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withInstanceId($value)
    {
        $this->data['InstanceId'] = $value;
        $this->pathParameters['instanceId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withRankingModelId($value)
    {
        $this->data['RankingModelId'] = $value;
        $this->pathParameters['rankingModelId'] = $value;

        return $this;
    }
}

/**
 * @method string getVersionId()
 * @method string getInstanceId()
 */
class DeleteDataSet extends Roa
{
    /** @var string */
    public $pathPattern = '/v2/openapi/instances/[instanceId]/dataSets/[versionId]';

    /** @var string */
    public $method = 'DELETE';

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
    public function withInstanceId($value)
    {
        $this->data['InstanceId'] = $value;
        $this->pathParameters['instanceId'] = $value;

        return $this;
    }
}

/**
 * @method string getInstanceId()
 * @method string getSceneId()
 * @method string getExperimentId()
 */
class DeleteExperiment extends Roa
{
    /** @var string */
    public $pathPattern = '/v2/openapi/instances/[instanceId]/scenes/[sceneId]/experiments/[experimentId]';

    /** @var string */
    public $method = 'DELETE';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withInstanceId($value)
    {
        $this->data['InstanceId'] = $value;
        $this->pathParameters['instanceId'] = $value;

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
}

/**
 * @method string getInstanceId()
 * @method string getAlgorithmId()
 */
class DeleteFilteringAlgorithm extends Roa
{
    /** @var string */
    public $pathPattern = '/v2/openapi/instances/[instanceId]/filtering-algorithms/[algorithmId]';

    /** @var string */
    public $method = 'DELETE';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withInstanceId($value)
    {
        $this->data['InstanceId'] = $value;
        $this->pathParameters['instanceId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAlgorithmId($value)
    {
        $this->data['AlgorithmId'] = $value;
        $this->pathParameters['algorithmId'] = $value;

        return $this;
    }
}

/**
 * @method string getInstanceId()
 * @method string getRankingModelId()
 */
class DeleteRankingModel extends Roa
{
    /** @var string */
    public $pathPattern = '/v2/openapi/instances/[instanceId]/ranking-models/[rankingModelId]';

    /** @var string */
    public $method = 'DELETE';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withInstanceId($value)
    {
        $this->data['InstanceId'] = $value;
        $this->pathParameters['instanceId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withRankingModelId($value)
    {
        $this->data['RankingModelId'] = $value;
        $this->pathParameters['rankingModelId'] = $value;

        return $this;
    }
}

/**
 * @method string getInstanceId()
 * @method string getSceneId()
 */
class DeleteScene extends Roa
{
    /** @var string */
    public $pathPattern = '/v2/openapi/instances/[instanceId]/scenes/[sceneId]';

    /** @var string */
    public $method = 'DELETE';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withInstanceId($value)
    {
        $this->data['InstanceId'] = $value;
        $this->pathParameters['instanceId'] = $value;

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
}

/**
 * @method string getInstanceId()
 * @method string getSceneId()
 */
class DescribeBaseExperiment extends Roa
{
    /** @var string */
    public $pathPattern = '/v2/openapi/instances/[instanceId]/scenes/[sceneId]/base-experiment';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withInstanceId($value)
    {
        $this->data['InstanceId'] = $value;
        $this->pathParameters['instanceId'] = $value;

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
}

/**
 * @method string getVersionId()
 * @method string getInstanceId()
 */
class DescribeDataSetMessage extends Roa
{
    /** @var string */
    public $pathPattern = '/v2/openapi/instances/[instanceId]/dataSets/[versionId]/messages';

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
    public function withInstanceId($value)
    {
        $this->data['InstanceId'] = $value;
        $this->pathParameters['instanceId'] = $value;

        return $this;
    }
}

/**
 * @method string getInstanceId()
 * @method string getSceneId()
 */
class DescribeDefaultAlgorithms extends Roa
{
    /** @var string */
    public $pathPattern = '/v2/openapi/instances/[instanceId]/scenes/[sceneId]/default-algorithms';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withInstanceId($value)
    {
        $this->data['InstanceId'] = $value;
        $this->pathParameters['instanceId'] = $value;

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
}

/**
 * @method string getInstanceId()
 * @method string getSceneId()
 * @method string getExperimentId()
 */
class DescribeExperiment extends Roa
{
    /** @var string */
    public $pathPattern = '/v2/openapi/instances/[instanceId]/scenes/[sceneId]/experiments/[experimentId]';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withInstanceId($value)
    {
        $this->data['InstanceId'] = $value;
        $this->pathParameters['instanceId'] = $value;

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
}

/**
 * @method string getInstanceId()
 * @method string getSceneId()
 */
class DescribeExperimentEnv extends Roa
{
    /** @var string */
    public $pathPattern = '/v2/openapi/instances/[instanceId]/scenes/[sceneId]/experiment-env';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withInstanceId($value)
    {
        $this->data['InstanceId'] = $value;
        $this->pathParameters['instanceId'] = $value;

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
}

/**
 * @method string getInstanceId()
 * @method string getSceneId()
 */
class DescribeExperimentEnvProgress extends Roa
{
    /** @var string */
    public $pathPattern = '/v2/openapi/instances/[instanceId]/scenes/[sceneId]/experiment-progress';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withInstanceId($value)
    {
        $this->data['InstanceId'] = $value;
        $this->pathParameters['instanceId'] = $value;

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
}

/**
 * @method string getInstanceId()
 * @method string getAlgorithmId()
 */
class DescribeFilteringAlgorithm extends Roa
{
    /** @var string */
    public $pathPattern = '/v2/openapi/instances/[instanceId]/filtering-algorithms/[algorithmId]';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withInstanceId($value)
    {
        $this->data['InstanceId'] = $value;
        $this->pathParameters['instanceId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAlgorithmId($value)
    {
        $this->data['AlgorithmId'] = $value;
        $this->pathParameters['algorithmId'] = $value;

        return $this;
    }
}

/**
 * @method string getInstanceId()
 */
class DescribeInstance extends Roa
{
    /** @var string */
    public $pathPattern = '/v2/openapi/instances/[instanceId]';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withInstanceId($value)
    {
        $this->data['InstanceId'] = $value;
        $this->pathParameters['instanceId'] = $value;

        return $this;
    }
}

/**
 * @method string getInstanceId()
 * @method string getAlgorithmId()
 */
class DescribeLatestTask extends Roa
{
    /** @var string */
    public $pathPattern = '/v2/openapi/instances/[instanceId]/filtering-algorithms/[algorithmId]/tasks/latest';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withInstanceId($value)
    {
        $this->data['InstanceId'] = $value;
        $this->pathParameters['instanceId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAlgorithmId($value)
    {
        $this->data['AlgorithmId'] = $value;
        $this->pathParameters['algorithmId'] = $value;

        return $this;
    }
}

/**
 * @method string getInstanceId()
 */
class DescribeQuota extends Roa
{
    /** @var string */
    public $pathPattern = '/v2/openapi/instances/[instanceId]/quota';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withInstanceId($value)
    {
        $this->data['InstanceId'] = $value;
        $this->pathParameters['instanceId'] = $value;

        return $this;
    }
}

/**
 * @method string getAcceptLanguage()
 */
class DescribeRegions extends Roa
{
    /** @var string */
    public $pathPattern = '/v2/openapi/configurations/regions';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAcceptLanguage($value)
    {
        $this->data['AcceptLanguage'] = $value;
        $this->options['query']['acceptLanguage'] = $value;

        return $this;
    }
}

/**
 * @method string getInstanceId()
 * @method string getRuleType()
 * @method string getSceneId()
 * @method string getRuleId()
 */
class DescribeRule extends Roa
{
    /** @var string */
    public $pathPattern = '/v2/openapi/instances/[instanceId]/rules/[ruleId]';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withInstanceId($value)
    {
        $this->data['InstanceId'] = $value;
        $this->pathParameters['instanceId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withRuleType($value)
    {
        $this->data['RuleType'] = $value;
        $this->options['query']['ruleType'] = $value;

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
        $this->options['query']['sceneId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withRuleId($value)
    {
        $this->data['RuleId'] = $value;
        $this->pathParameters['ruleId'] = $value;

        return $this;
    }
}

/**
 * @method string getInstanceId()
 * @method string getSceneId()
 */
class DescribeScene extends Roa
{
    /** @var string */
    public $pathPattern = '/v2/openapi/instances/[instanceId]/scenes/[sceneId]';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withInstanceId($value)
    {
        $this->data['InstanceId'] = $value;
        $this->pathParameters['instanceId'] = $value;

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
}

/**
 * @method string getInstanceId()
 * @method string getSceneId()
 */
class DescribeSceneBucket extends Roa
{
    /** @var string */
    public $pathPattern = '/v2/openapi/instances/[instanceId]/scenes/[sceneId]/experiment-bucket';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withInstanceId($value)
    {
        $this->data['InstanceId'] = $value;
        $this->pathParameters['instanceId'] = $value;

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
}

/**
 * @method string getInstanceId()
 * @method string getSceneId()
 */
class DescribeSceneThroughput extends Roa
{
    /** @var string */
    public $pathPattern = '/v2/openapi/instances/[instanceId]/scenes/[sceneId]/throughput';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withInstanceId($value)
    {
        $this->data['InstanceId'] = $value;
        $this->pathParameters['instanceId'] = $value;

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
}

/**
 * @method string getInstanceId()
 * @method string getLevelType()
 * @method string getEndTime()
 * @method string getStartTime()
 * @method string getType()
 */
class DescribeSyncReportDetail extends Roa
{
    /** @var string */
    public $pathPattern = '/v2/openapi/instances/[instanceId]/sync-reports/detail';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withInstanceId($value)
    {
        $this->data['InstanceId'] = $value;
        $this->pathParameters['instanceId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withLevelType($value)
    {
        $this->data['LevelType'] = $value;
        $this->options['query']['levelType'] = $value;

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
    public function withType($value)
    {
        $this->data['Type'] = $value;
        $this->options['query']['type'] = $value;

        return $this;
    }
}

/**
 * @method string getInstanceId()
 * @method string getLevelType()
 * @method string getEndTime()
 * @method string getStartTime()
 * @method string getType()
 * @method string getKey()
 */
class DescribeSyncReportOutliers extends Roa
{
    /** @var string */
    public $pathPattern = '/v2/openapi/instances/[instanceId]/sync-reports/outliers';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withInstanceId($value)
    {
        $this->data['InstanceId'] = $value;
        $this->pathParameters['instanceId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withLevelType($value)
    {
        $this->data['LevelType'] = $value;
        $this->options['query']['levelType'] = $value;

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
    public function withKey($value)
    {
        $this->data['Key'] = $value;
        $this->options['query']['key'] = $value;

        return $this;
    }
}

/**
 * @method string getMetricType()
 * @method string getInstanceId()
 * @method string getEndTime()
 * @method string getStartTime()
 */
class DescribeUserMetrics extends Roa
{
    /** @var string */
    public $pathPattern = '/v2/openapi/instances/[instanceId]/metrics';

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
    public function withInstanceId($value)
    {
        $this->data['InstanceId'] = $value;
        $this->pathParameters['instanceId'] = $value;

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
}

/**
 * @method string getInstanceId()
 */
class DowngradeInstance extends Roa
{
    /** @var string */
    public $pathPattern = '/v2/openapi/instances/[instanceId]/actions/downgrade';

    /** @var string */
    public $method = 'POST';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withInstanceId($value)
    {
        $this->data['InstanceId'] = $value;
        $this->pathParameters['instanceId'] = $value;

        return $this;
    }
}

/**
 * @method string getInstanceId()
 * @method string getSceneId()
 */
class EnableExperiment extends Roa
{
    /** @var string */
    public $pathPattern = '/v2/openapi/instances/[instanceId]/scenes/[sceneId]/actions/enable-experiment';

    /** @var string */
    public $method = 'POST';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withInstanceId($value)
    {
        $this->data['InstanceId'] = $value;
        $this->pathParameters['instanceId'] = $value;

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
}

/**
 * @method string getMetricType()
 * @method string getInstanceId()
 * @method string getExperimentIds()
 * @method string getTraceIds()
 * @method string getEndTime()
 * @method string getStartTime()
 * @method string getSceneIds()
 */
class ListDashboardDetails extends Roa
{
    /** @var string */
    public $pathPattern = '/v2/openapi/instances/[instanceId]/dashboard/details';

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
    public function withInstanceId($value)
    {
        $this->data['InstanceId'] = $value;
        $this->pathParameters['instanceId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withExperimentIds($value)
    {
        $this->data['ExperimentIds'] = $value;
        $this->options['query']['experimentIds'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTraceIds($value)
    {
        $this->data['TraceIds'] = $value;
        $this->options['query']['traceIds'] = $value;

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
    public function withSceneIds($value)
    {
        $this->data['SceneIds'] = $value;
        $this->options['query']['sceneIds'] = $value;

        return $this;
    }
}

/**
 * @method string getMetricType()
 * @method string getInstanceId()
 * @method string getExperimentIds()
 * @method string getTraceIds()
 * @method string getEndTime()
 * @method string getStartTime()
 * @method string getSceneIds()
 */
class ListDashboardDetailsFlows extends Roa
{
    /** @var string */
    public $pathPattern = '/v2/openapi/instances/[instanceId]/dashboard/details/flows';

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
    public function withInstanceId($value)
    {
        $this->data['InstanceId'] = $value;
        $this->pathParameters['instanceId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withExperimentIds($value)
    {
        $this->data['ExperimentIds'] = $value;
        $this->options['query']['experimentIds'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTraceIds($value)
    {
        $this->data['TraceIds'] = $value;
        $this->options['query']['traceIds'] = $value;

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
    public function withSceneIds($value)
    {
        $this->data['SceneIds'] = $value;
        $this->options['query']['sceneIds'] = $value;

        return $this;
    }
}

/**
 * @method string getMetricType()
 * @method string getInstanceId()
 * @method string getEndTime()
 * @method string getStartTime()
 */
class ListDashboardMetrics extends Roa
{
    /** @var string */
    public $pathPattern = '/v2/openapi/instances/[instanceId]/dashboard/metrics';

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
    public function withInstanceId($value)
    {
        $this->data['InstanceId'] = $value;
        $this->pathParameters['instanceId'] = $value;

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
}

/**
 * @method string getMetricType()
 * @method string getInstanceId()
 * @method string getEndTime()
 * @method string getStartTime()
 */
class ListDashboardMetricsFlows extends Roa
{
    /** @var string */
    public $pathPattern = '/v2/openapi/instances/[instanceId]/dashboard/metrics/flows';

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
    public function withInstanceId($value)
    {
        $this->data['InstanceId'] = $value;
        $this->pathParameters['instanceId'] = $value;

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
}

/**
 * @method string getInstanceId()
 */
class ListDataSet extends Roa
{
    /** @var string */
    public $pathPattern = '/v2/openapi/instances/[instanceId]/dataSets';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withInstanceId($value)
    {
        $this->data['InstanceId'] = $value;
        $this->pathParameters['instanceId'] = $value;

        return $this;
    }
}

/**
 * @method string getInstanceId()
 */
class ListDataSource extends Roa
{
    /** @var string */
    public $pathPattern = '/v2/openapi/instances/[instanceId]/dataSources';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withInstanceId($value)
    {
        $this->data['InstanceId'] = $value;
        $this->pathParameters['instanceId'] = $value;

        return $this;
    }
}

/**
 * @method string getInstanceId()
 * @method string getSceneId()
 */
class ListExperiments extends Roa
{
    /** @var string */
    public $pathPattern = '/v2/openapi/instances/[instanceId]/scenes/[sceneId]/experiments';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withInstanceId($value)
    {
        $this->data['InstanceId'] = $value;
        $this->pathParameters['instanceId'] = $value;

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
}

/**
 * @method string getInstanceId()
 * @method string getSize()
 * @method string getPage()
 * @method string getStatus()
 * @method string getAlgorithmId()
 */
class ListFilteringAlgorithms extends Roa
{
    /** @var string */
    public $pathPattern = '/v2/openapi/instances/[instanceId]/filtering-algorithms';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withInstanceId($value)
    {
        $this->data['InstanceId'] = $value;
        $this->pathParameters['instanceId'] = $value;

        return $this;
    }

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
    public function withStatus($value)
    {
        $this->data['Status'] = $value;
        $this->options['query']['status'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAlgorithmId($value)
    {
        $this->data['AlgorithmId'] = $value;
        $this->options['query']['algorithmId'] = $value;

        return $this;
    }
}

/**
 * @method string getInstanceId()
 * @method string getAlgorithmId()
 */
class ListIndexVersions extends Roa
{
    /** @var string */
    public $pathPattern = '/v2/openapi/instances/[instanceId]/filtering-algorithms/[algorithmId]/index-versions';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withInstanceId($value)
    {
        $this->data['InstanceId'] = $value;
        $this->pathParameters['instanceId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAlgorithmId($value)
    {
        $this->data['AlgorithmId'] = $value;
        $this->pathParameters['algorithmId'] = $value;

        return $this;
    }
}

/**
 * @method string getInstanceId()
 * @method string getSize()
 * @method string getName()
 * @method string getExpiredTime()
 * @method string getPage()
 * @method string getStatus()
 */
class ListInstance extends Roa
{
    /** @var string */
    public $pathPattern = '/v2/openapi/instances';

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
    public function withExpiredTime($value)
    {
        $this->data['ExpiredTime'] = $value;
        $this->options['query']['expiredTime'] = $value;

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
    public function withStatus($value)
    {
        $this->data['Status'] = $value;
        $this->options['query']['status'] = $value;

        return $this;
    }
}

/**
 * @method string getInstanceId()
 */
class ListInstanceTask extends Roa
{
    /** @var string */
    public $pathPattern = '/v2/openapi/instances/[instanceId]/tasks';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withInstanceId($value)
    {
        $this->data['InstanceId'] = $value;
        $this->pathParameters['instanceId'] = $value;

        return $this;
    }
}

/**
 * @method string getInstanceId()
 * @method string getSize()
 * @method string getPage()
 */
class ListItems extends Roa
{
    /** @var string */
    public $pathPattern = '/v2/openapi/instances/[instanceId]/items/actions/list';

    /** @var string */
    public $method = 'POST';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withInstanceId($value)
    {
        $this->data['InstanceId'] = $value;
        $this->pathParameters['instanceId'] = $value;

        return $this;
    }

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
}

/**
 * @method string getInstanceId()
 * @method string getSize()
 * @method string getQueryParams()
 * @method string getEndTime()
 * @method string getStartTime()
 * @method string getPage()
 */
class ListLogs extends Roa
{
    /** @var string */
    public $pathPattern = '/v2/openapi/instances/[instanceId]/logs';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withInstanceId($value)
    {
        $this->data['InstanceId'] = $value;
        $this->pathParameters['instanceId'] = $value;

        return $this;
    }

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
    public function withQueryParams($value)
    {
        $this->data['QueryParams'] = $value;
        $this->options['query']['queryParams'] = $value;

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
    public function withPage($value)
    {
        $this->data['Page'] = $value;
        $this->options['query']['page'] = $value;

        return $this;
    }
}

class ListMixCategories extends Roa
{
    /** @var string */
    public $pathPattern = '/v2/openapi/configurations/mixCategories';
}

/**
 * @method string getInstanceId()
 * @method string getSize()
 * @method string getRankingModelId()
 * @method string getPage()
 */
class ListRankingModels extends Roa
{
    /** @var string */
    public $pathPattern = '/v2/openapi/instances/[instanceId]/ranking-models';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withInstanceId($value)
    {
        $this->data['InstanceId'] = $value;
        $this->pathParameters['instanceId'] = $value;

        return $this;
    }

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
    public function withRankingModelId($value)
    {
        $this->data['RankingModelId'] = $value;
        $this->options['query']['rankingModelId'] = $value;

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
}

/**
 * @method string getInstanceId()
 */
class ListRuleConditions extends Roa
{
    /** @var string */
    public $pathPattern = '/v2/openapi/instances/[instanceId]/rule-conditions';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withInstanceId($value)
    {
        $this->data['InstanceId'] = $value;
        $this->pathParameters['instanceId'] = $value;

        return $this;
    }
}

/**
 * @method string getInstanceId()
 * @method string getSize()
 * @method string getRuleType()
 * @method string getSceneId()
 * @method string getEndTime()
 * @method string getPage()
 * @method string getStartTime()
 * @method string getStatus()
 */
class ListRules extends Roa
{
    /** @var string */
    public $pathPattern = '/v2/openapi/instances/[instanceId]/rules';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withInstanceId($value)
    {
        $this->data['InstanceId'] = $value;
        $this->pathParameters['instanceId'] = $value;

        return $this;
    }

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
    public function withRuleType($value)
    {
        $this->data['RuleType'] = $value;
        $this->options['query']['ruleType'] = $value;

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
        $this->options['query']['sceneId'] = $value;

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
    public function withStatus($value)
    {
        $this->data['Status'] = $value;
        $this->options['query']['status'] = $value;

        return $this;
    }
}

/**
 * @method string getInstanceId()
 * @method string getSceneId()
 */
class ListRuleTasks extends Roa
{
    /** @var string */
    public $pathPattern = '/v2/openapi/instances/[instanceId]/rule-tasks';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withInstanceId($value)
    {
        $this->data['InstanceId'] = $value;
        $this->pathParameters['instanceId'] = $value;

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
        $this->options['query']['sceneId'] = $value;

        return $this;
    }
}

/**
 * @method string getSelectionRuleId()
 * @method string getInstanceId()
 * @method string getSize()
 * @method string getQueryCount()
 * @method string getSceneId()
 * @method string getOperationRuleId()
 * @method string getPreviewType()
 * @method string getPage()
 */
class ListSceneItems extends Roa
{
    /** @var string */
    public $pathPattern = '/v2/openapi/instances/[instanceId]/scenes/[sceneId]/items';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSelectionRuleId($value)
    {
        $this->data['SelectionRuleId'] = $value;
        $this->options['query']['selectionRuleId'] = $value;

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
        $this->pathParameters['instanceId'] = $value;

        return $this;
    }

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
    public function withQueryCount($value)
    {
        $this->data['QueryCount'] = $value;
        $this->options['query']['queryCount'] = $value;

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
    public function withOperationRuleId($value)
    {
        $this->data['OperationRuleId'] = $value;
        $this->options['query']['operationRuleId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPreviewType($value)
    {
        $this->data['PreviewType'] = $value;
        $this->options['query']['previewType'] = $value;

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
}

/**
 * @method string getInstanceId()
 */
class ListSceneParameters extends Roa
{
    /** @var string */
    public $pathPattern = '/v2/openapi/instances/[instanceId]/dashboard/scene-parameters';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withInstanceId($value)
    {
        $this->data['InstanceId'] = $value;
        $this->pathParameters['instanceId'] = $value;

        return $this;
    }
}

/**
 * @method string getInstanceId()
 * @method string getSize()
 * @method string getSceneId()
 * @method string getPage()
 * @method string getStatus()
 */
class ListScenes extends Roa
{
    /** @var string */
    public $pathPattern = '/v2/openapi/instances/[instanceId]/scenes';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withInstanceId($value)
    {
        $this->data['InstanceId'] = $value;
        $this->pathParameters['instanceId'] = $value;

        return $this;
    }

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
    public function withSceneId($value)
    {
        $this->data['SceneId'] = $value;
        $this->options['query']['sceneId'] = $value;

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
    public function withStatus($value)
    {
        $this->data['Status'] = $value;
        $this->options['query']['status'] = $value;

        return $this;
    }
}

class ListUmengAppkeys extends Roa
{
    /** @var string */
    public $pathPattern = '/v2/openapi/umeng/appkeys';
}

/**
 * @method string getInstanceId()
 */
class ListUserClusters extends Roa
{
    /** @var string */
    public $pathPattern = '/v2/openapi/instances/[instanceId]/user-clusters';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withInstanceId($value)
    {
        $this->data['InstanceId'] = $value;
        $this->pathParameters['instanceId'] = $value;

        return $this;
    }
}

/**
 * @method string getInstanceId()
 * @method string getTableName()
 */
class ModifyDataSource extends Roa
{
    /** @var string */
    public $pathPattern = '/v2/openapi/instances/[instanceId]/dataSources/[tableName]';

    /** @var string */
    public $method = 'PUT';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withInstanceId($value)
    {
        $this->data['InstanceId'] = $value;
        $this->pathParameters['instanceId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTableName($value)
    {
        $this->data['TableName'] = $value;
        $this->pathParameters['tableName'] = $value;

        return $this;
    }
}

/**
 * @method string getInstanceId()
 * @method string getAlgorithmId()
 */
class ModifyFilteringAlgorithmMeta extends Roa
{
    /** @var string */
    public $pathPattern = '/v2/openapi/instances/[instanceId]/filtering-algorithms/[algorithmId]/meta';

    /** @var string */
    public $method = 'PUT';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withInstanceId($value)
    {
        $this->data['InstanceId'] = $value;
        $this->pathParameters['instanceId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAlgorithmId($value)
    {
        $this->data['AlgorithmId'] = $value;
        $this->pathParameters['algorithmId'] = $value;

        return $this;
    }
}

/**
 * @method string getInstanceId()
 */
class ModifyInstance extends Roa
{
    /** @var string */
    public $pathPattern = '/v2/openapi/instances/[instanceId]';

    /** @var string */
    public $method = 'PUT';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withInstanceId($value)
    {
        $this->data['InstanceId'] = $value;
        $this->pathParameters['instanceId'] = $value;

        return $this;
    }
}

/**
 * @method string getInstanceId()
 */
class ModifyItems extends Roa
{
    /** @var string */
    public $pathPattern = '/v2/openapi/instances/[instanceId]/items';

    /** @var string */
    public $method = 'POST';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withInstanceId($value)
    {
        $this->data['InstanceId'] = $value;
        $this->pathParameters['instanceId'] = $value;

        return $this;
    }
}

/**
 * @method string getInstanceId()
 * @method string getRankingModelId()
 */
class ModifyRankingModel extends Roa
{
    /** @var string */
    public $pathPattern = '/v2/openapi/instances/[instanceId]/ranking-models/[rankingModelId]';

    /** @var string */
    public $method = 'PUT';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withInstanceId($value)
    {
        $this->data['InstanceId'] = $value;
        $this->pathParameters['instanceId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withRankingModelId($value)
    {
        $this->data['RankingModelId'] = $value;
        $this->pathParameters['rankingModelId'] = $value;

        return $this;
    }
}

/**
 * @method string getInstanceId()
 * @method string getRuleId()
 */
class ModifyRule extends Roa
{
    /** @var string */
    public $pathPattern = '/v2/openapi/instances/[instanceId]/rules/[ruleId]';

    /** @var string */
    public $method = 'PUT';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withInstanceId($value)
    {
        $this->data['InstanceId'] = $value;
        $this->pathParameters['instanceId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withRuleId($value)
    {
        $this->data['RuleId'] = $value;
        $this->pathParameters['ruleId'] = $value;

        return $this;
    }
}

/**
 * @method string getInstanceId()
 * @method string getSceneId()
 */
class ModifyScene extends Roa
{
    /** @var string */
    public $pathPattern = '/v2/openapi/instances/[instanceId]/scenes/[sceneId]';

    /** @var string */
    public $method = 'PUT';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withInstanceId($value)
    {
        $this->data['InstanceId'] = $value;
        $this->pathParameters['instanceId'] = $value;

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
}

/**
 * @method string getInstanceId()
 * @method string getAlgorithmId()
 */
class OfflineFilteringAlgorithm extends Roa
{
    /** @var string */
    public $pathPattern = '/v2/openapi/instances/[instanceId]/filtering-algorithms/[algorithmId]/actions/offline';

    /** @var string */
    public $method = 'POST';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withInstanceId($value)
    {
        $this->data['InstanceId'] = $value;
        $this->pathParameters['instanceId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAlgorithmId($value)
    {
        $this->data['AlgorithmId'] = $value;
        $this->pathParameters['algorithmId'] = $value;

        return $this;
    }
}

/**
 * @method string getInstanceId()
 * @method string getRuleType()
 * @method string getSceneId()
 * @method string getRuleId()
 */
class PublishRule extends Roa
{
    /** @var string */
    public $pathPattern = '/v2/openapi/instances/[instanceId]/rules/[ruleId]/actions/publish';

    /** @var string */
    public $method = 'PUT';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withInstanceId($value)
    {
        $this->data['InstanceId'] = $value;
        $this->pathParameters['instanceId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withRuleType($value)
    {
        $this->data['RuleType'] = $value;
        $this->options['query']['ruleType'] = $value;

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
        $this->options['query']['sceneId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withRuleId($value)
    {
        $this->data['RuleId'] = $value;
        $this->pathParameters['ruleId'] = $value;

        return $this;
    }
}

/**
 * @method string getInstanceId()
 * @method string getTableName()
 */
class PushDocument extends Roa
{
    /** @var string */
    public $pathPattern = '/v2/openapi/instances/[instanceId]/tables/[tableName]/actions/bulk';

    /** @var string */
    public $method = 'POST';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withInstanceId($value)
    {
        $this->data['InstanceId'] = $value;
        $this->pathParameters['instanceId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTableName($value)
    {
        $this->data['TableName'] = $value;
        $this->pathParameters['tableName'] = $value;

        return $this;
    }
}

/**
 * @method string getInstanceId()
 */
class PushIntervention extends Roa
{
    /** @var string */
    public $pathPattern = '/v2/openapi/instances/[instanceId]/actions/intervene';

    /** @var string */
    public $method = 'POST';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withInstanceId($value)
    {
        $this->data['InstanceId'] = $value;
        $this->pathParameters['instanceId'] = $value;

        return $this;
    }
}

/**
 * @method string getTraceId()
 * @method string getMessageSource()
 * @method string getEndTime()
 * @method string getUserType()
 * @method string getStartTime()
 * @method string getUserId()
 * @method string getItemId()
 * @method string getInstanceId()
 * @method string getItemType()
 * @method string getCmdType()
 * @method string getSize()
 * @method string getSceneId()
 * @method string getBhvType()
 * @method string getPage()
 * @method string getTable()
 */
class QueryDataMessage extends Roa
{
    /** @var string */
    public $pathPattern = '/v2/openapi/instances/[instanceId]/tables/[table]/data-message';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTraceId($value)
    {
        $this->data['TraceId'] = $value;
        $this->options['query']['traceId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withMessageSource($value)
    {
        $this->data['MessageSource'] = $value;
        $this->options['query']['messageSource'] = $value;

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
    public function withUserType($value)
    {
        $this->data['UserType'] = $value;
        $this->options['query']['userType'] = $value;

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
    public function withUserId($value)
    {
        $this->data['UserId'] = $value;
        $this->options['query']['userId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withItemId($value)
    {
        $this->data['ItemId'] = $value;
        $this->options['query']['itemId'] = $value;

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
        $this->pathParameters['instanceId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withItemType($value)
    {
        $this->data['ItemType'] = $value;
        $this->options['query']['itemType'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCmdType($value)
    {
        $this->data['CmdType'] = $value;
        $this->options['query']['cmdType'] = $value;

        return $this;
    }

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
    public function withSceneId($value)
    {
        $this->data['SceneId'] = $value;
        $this->options['query']['sceneId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBhvType($value)
    {
        $this->data['BhvType'] = $value;
        $this->options['query']['bhvType'] = $value;

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
    public function withTable($value)
    {
        $this->data['Table'] = $value;
        $this->pathParameters['table'] = $value;

        return $this;
    }
}

/**
 * @method string getTraceId()
 * @method string getMessageSource()
 * @method string getEndTime()
 * @method string getUserType()
 * @method string getStartTime()
 * @method string getUserId()
 * @method string getItemId()
 * @method string getInstanceId()
 * @method string getItemType()
 * @method string getCmdType()
 * @method string getSceneId()
 * @method string getBhvType()
 * @method string getTable()
 */
class QueryDataMessageStatistics extends Roa
{
    /** @var string */
    public $pathPattern = '/v2/openapi/instances/[instanceId]/tables/[table]/data-message-statistics';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTraceId($value)
    {
        $this->data['TraceId'] = $value;
        $this->options['query']['traceId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withMessageSource($value)
    {
        $this->data['MessageSource'] = $value;
        $this->options['query']['messageSource'] = $value;

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
    public function withUserType($value)
    {
        $this->data['UserType'] = $value;
        $this->options['query']['userType'] = $value;

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
    public function withUserId($value)
    {
        $this->data['UserId'] = $value;
        $this->options['query']['userId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withItemId($value)
    {
        $this->data['ItemId'] = $value;
        $this->options['query']['itemId'] = $value;

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
        $this->pathParameters['instanceId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withItemType($value)
    {
        $this->data['ItemType'] = $value;
        $this->options['query']['itemType'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCmdType($value)
    {
        $this->data['CmdType'] = $value;
        $this->options['query']['cmdType'] = $value;

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
        $this->options['query']['sceneId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBhvType($value)
    {
        $this->data['BhvType'] = $value;
        $this->options['query']['bhvType'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTable($value)
    {
        $this->data['Table'] = $value;
        $this->pathParameters['table'] = $value;

        return $this;
    }
}

/**
 * @method string getInstanceId()
 * @method string getEndTime()
 * @method string getStartTime()
 * @method string getType()
 */
class QueryExceptionHistory extends Roa
{
    /** @var string */
    public $pathPattern = '/v2/openapi/instances/[instanceId]/sync-reports/exception-history';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withInstanceId($value)
    {
        $this->data['InstanceId'] = $value;
        $this->pathParameters['instanceId'] = $value;

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
    public function withType($value)
    {
        $this->data['Type'] = $value;
        $this->options['query']['type'] = $value;

        return $this;
    }
}

/**
 * @method string getItemId()
 * @method string getInstanceId()
 * @method string getItemType()
 * @method string getUserType()
 * @method string getUserId()
 * @method string getTable()
 */
class QueryRawData extends Roa
{
    /** @var string */
    public $pathPattern = '/v2/openapi/instances/[instanceId]/tables/[table]/raw-data';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withItemId($value)
    {
        $this->data['ItemId'] = $value;
        $this->options['query']['itemId'] = $value;

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
        $this->pathParameters['instanceId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withItemType($value)
    {
        $this->data['ItemType'] = $value;
        $this->options['query']['itemType'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withUserType($value)
    {
        $this->data['UserType'] = $value;
        $this->options['query']['userType'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withUserId($value)
    {
        $this->data['UserId'] = $value;
        $this->options['query']['userId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTable($value)
    {
        $this->data['Table'] = $value;
        $this->pathParameters['table'] = $value;

        return $this;
    }
}

/**
 * @method string getInstanceId()
 */
class QuerySingleAggregationReport extends Roa
{
    /** @var string */
    public $pathPattern = '/v2/openapi/instances/[instanceId]/sync-reports/single-aggregation-report';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withInstanceId($value)
    {
        $this->data['InstanceId'] = $value;
        $this->pathParameters['instanceId'] = $value;

        return $this;
    }
}

/**
 * @method string getInstanceId()
 * @method string getReportType()
 */
class QuerySingleReport extends Roa
{
    /** @var string */
    public $pathPattern = '/v2/openapi/instances/[instanceId]/sync-reports/single-report';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withInstanceId($value)
    {
        $this->data['InstanceId'] = $value;
        $this->pathParameters['instanceId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withReportType($value)
    {
        $this->data['ReportType'] = $value;
        $this->options['query']['reportType'] = $value;

        return $this;
    }
}

/**
 * @method string getInstanceId()
 * @method string getEndTime()
 * @method string getStartTime()
 */
class QuerySyncReportAggregation extends Roa
{
    /** @var string */
    public $pathPattern = '/v2/openapi/instances/[instanceId]/sync-reports/aggregation';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withInstanceId($value)
    {
        $this->data['InstanceId'] = $value;
        $this->pathParameters['instanceId'] = $value;

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
}

/**
 * @method string getInstanceId()
 * @method string getAlgorithmId()
 */
class RebuildIndex extends Roa
{
    /** @var string */
    public $pathPattern = '/v2/openapi/instances/[instanceId]/filtering-algorithms/[algorithmId]/actions/rebuild';

    /** @var string */
    public $method = 'POST';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withInstanceId($value)
    {
        $this->data['InstanceId'] = $value;
        $this->pathParameters['instanceId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAlgorithmId($value)
    {
        $this->data['AlgorithmId'] = $value;
        $this->pathParameters['algorithmId'] = $value;

        return $this;
    }
}

/**
 * @method string getReturnCount()
 * @method string getServiceType()
 * @method string getInstanceId()
 * @method string getDebug()
 * @method string getIp()
 * @method string getLogLevel()
 * @method string getSceneId()
 * @method string getImei()
 * @method string getExperimentId()
 * @method string getUserId()
 * @method string getItems()
 * @method string getUserInfo()
 */
class Recommend extends Roa
{
    /** @var string */
    public $pathPattern = '/v2/openapi/instances/[instanceId]/actions/recommend';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withReturnCount($value)
    {
        $this->data['ReturnCount'] = $value;
        $this->options['query']['returnCount'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withServiceType($value)
    {
        $this->data['ServiceType'] = $value;
        $this->options['query']['serviceType'] = $value;

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
        $this->pathParameters['instanceId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDebug($value)
    {
        $this->data['Debug'] = $value;
        $this->options['query']['debug'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withIp($value)
    {
        $this->data['Ip'] = $value;
        $this->options['query']['ip'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withLogLevel($value)
    {
        $this->data['LogLevel'] = $value;
        $this->options['query']['logLevel'] = $value;

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
        $this->options['query']['sceneId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withImei($value)
    {
        $this->data['Imei'] = $value;
        $this->options['query']['imei'] = $value;

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
        $this->options['query']['experimentId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withUserId($value)
    {
        $this->data['UserId'] = $value;
        $this->options['query']['userId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withItems($value)
    {
        $this->data['Items'] = $value;
        $this->options['query']['items'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withUserInfo($value)
    {
        $this->data['UserInfo'] = $value;
        $this->options['query']['userInfo'] = $value;

        return $this;
    }
}

/**
 * @method string getInstanceId()
 */
class RunInstance extends Roa
{
    /** @var string */
    public $pathPattern = '/v2/openapi/instances/[instanceId]/actions/import';

    /** @var string */
    public $method = 'POST';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withInstanceId($value)
    {
        $this->data['InstanceId'] = $value;
        $this->pathParameters['instanceId'] = $value;

        return $this;
    }
}

/**
 * @method string getVersionId()
 * @method string getInstanceId()
 */
class StopDataSet extends Roa
{
    /** @var string */
    public $pathPattern = '/v2/openapi/instances/[instanceId]/dataSets/[versionId]/actions/stop';

    /** @var string */
    public $method = 'POST';

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
    public function withInstanceId($value)
    {
        $this->data['InstanceId'] = $value;
        $this->pathParameters['instanceId'] = $value;

        return $this;
    }
}

/**
 * @method string getInstanceId()
 * @method string getAlgorithmId()
 */
class UnLockIndexVersion extends Roa
{
    /** @var string */
    public $pathPattern = '/v2/openapi/instances/[instanceId]/filtering-algorithms/[algorithmId]/actions/unlock';

    /** @var string */
    public $method = 'POST';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withInstanceId($value)
    {
        $this->data['InstanceId'] = $value;
        $this->pathParameters['instanceId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAlgorithmId($value)
    {
        $this->data['AlgorithmId'] = $value;
        $this->pathParameters['algorithmId'] = $value;

        return $this;
    }
}

/**
 * @method string getInstanceId()
 * @method string getSceneId()
 * @method string getExperimentId()
 */
class UpdateExperimentBasicInfo extends Roa
{
    /** @var string */
    public $pathPattern = '/v2/openapi/instances/[instanceId]/scenes/[sceneId]/experiments/[experimentId]/basic';

    /** @var string */
    public $method = 'PUT';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withInstanceId($value)
    {
        $this->data['InstanceId'] = $value;
        $this->pathParameters['instanceId'] = $value;

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
}

/**
 * @method string getInstanceId()
 * @method string getSceneId()
 * @method string getExperimentId()
 */
class UpdateExperimentConfig extends Roa
{
    /** @var string */
    public $pathPattern = '/v2/openapi/instances/[instanceId]/scenes/[sceneId]/experiments/[experimentId]/config';

    /** @var string */
    public $method = 'PUT';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withInstanceId($value)
    {
        $this->data['InstanceId'] = $value;
        $this->pathParameters['instanceId'] = $value;

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
}

/**
 * @method string getInstanceId()
 * @method string getSceneId()
 * @method string getExperimentId()
 */
class UpdateExperimentStatus extends Roa
{
    /** @var string */
    public $pathPattern = '/v2/openapi/instances/[instanceId]/scenes/[sceneId]/experiments/[experimentId]/status';

    /** @var string */
    public $method = 'PUT';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withInstanceId($value)
    {
        $this->data['InstanceId'] = $value;
        $this->pathParameters['instanceId'] = $value;

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
}

/**
 * @method string getInstanceId()
 */
class UpgradeInstance extends Roa
{
    /** @var string */
    public $pathPattern = '/v2/openapi/instances/[instanceId]/actions/upgrade';

    /** @var string */
    public $method = 'POST';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withInstanceId($value)
    {
        $this->data['InstanceId'] = $value;
        $this->pathParameters['instanceId'] = $value;

        return $this;
    }
}

/**
 * @method string getInstanceId()
 */
class ValidateInstance extends Roa
{
    /** @var string */
    public $pathPattern = '/v2/openapi/instances/[instanceId]/actions/validate';

    /** @var string */
    public $method = 'POST';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withInstanceId($value)
    {
        $this->data['InstanceId'] = $value;
        $this->pathParameters['instanceId'] = $value;

        return $this;
    }
}
