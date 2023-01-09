<?php

namespace AlibabaCloud\PTS\V20201020;

use AlibabaCloud\Client\Resolver\ApiResolver;

/**
 * @method AdjustJMeterSceneSpeed adjustJMeterSceneSpeed(array $options = [])
 * @method CreatePtsScene createPtsScene(array $options = [])
 * @method CreatePtsSceneBaseLineFromReport createPtsSceneBaseLineFromReport(array $options = [])
 * @method DeletePtsScene deletePtsScene(array $options = [])
 * @method DeletePtsSceneBaseLine deletePtsSceneBaseLine(array $options = [])
 * @method DeletePtsScenes deletePtsScenes(array $options = [])
 * @method GetAllRegions getAllRegions(array $options = [])
 * @method GetJMeterLogs getJMeterLogs(array $options = [])
 * @method GetJMeterSampleMetrics getJMeterSampleMetrics(array $options = [])
 * @method GetJMeterSamplingLogs getJMeterSamplingLogs(array $options = [])
 * @method GetJMeterSceneRunningData getJMeterSceneRunningData(array $options = [])
 * @method GetOpenJMeterScene getOpenJMeterScene(array $options = [])
 * @method GetPtsReportDetails getPtsReportDetails(array $options = [])
 * @method GetPtsReportsBySceneId getPtsReportsBySceneId(array $options = [])
 * @method GetPtsScene getPtsScene(array $options = [])
 * @method GetPtsSceneBaseLine getPtsSceneBaseLine(array $options = [])
 * @method GetPtsSceneRunningData getPtsSceneRunningData(array $options = [])
 * @method GetPtsSceneRunningStatus getPtsSceneRunningStatus(array $options = [])
 * @method GetUserVpcs getUserVpcs(array $options = [])
 * @method GetUserVpcSecurityGroup getUserVpcSecurityGroup(array $options = [])
 * @method GetUserVpcVSwitch getUserVpcVSwitch(array $options = [])
 * @method ListEnvs listEnvs(array $options = [])
 * @method ListJMeterReports listJMeterReports(array $options = [])
 * @method ListOpenJMeterScenes listOpenJMeterScenes(array $options = [])
 * @method ListPtsScene listPtsScene(array $options = [])
 * @method ModifyPtsScene modifyPtsScene(array $options = [])
 * @method RemoveEnv removeEnv(array $options = [])
 * @method RemoveOpenJMeterScene removeOpenJMeterScene(array $options = [])
 * @method SaveEnv saveEnv(array $options = [])
 * @method SaveOpenJMeterScene saveOpenJMeterScene(array $options = [])
 * @method SavePtsScene savePtsScene(array $options = [])
 * @method StartDebuggingJMeterScene startDebuggingJMeterScene(array $options = [])
 * @method StartDebugPtsScene startDebugPtsScene(array $options = [])
 * @method StartPtsScene startPtsScene(array $options = [])
 * @method StartTestingJMeterScene startTestingJMeterScene(array $options = [])
 * @method StopDebuggingJMeterScene stopDebuggingJMeterScene(array $options = [])
 * @method StopDebugPtsScene stopDebugPtsScene(array $options = [])
 * @method StopPtsScene stopPtsScene(array $options = [])
 * @method StopTestingJMeterScene stopTestingJMeterScene(array $options = [])
 * @method UpdatePtsSceneBaseLine updatePtsSceneBaseLine(array $options = [])
 */
class PTSApiResolver extends ApiResolver
{
}

class Rpc extends \AlibabaCloud\Client\Resolver\Rpc
{
    /** @var string */
    public $product = 'PTS';

    /** @var string */
    public $version = '2020-10-20';

    /** @var string */
    public $method = 'POST';
}

/**
 * @method string getReportId()
 * @method $this withReportId($value)
 * @method string getSpeed()
 * @method $this withSpeed($value)
 */
class AdjustJMeterSceneSpeed extends Rpc
{
}

/**
 * @method string getScene()
 * @method $this withScene($value)
 */
class CreatePtsScene extends Rpc
{
}

/**
 * @method string getReportId()
 * @method $this withReportId($value)
 * @method string getSceneId()
 * @method $this withSceneId($value)
 */
class CreatePtsSceneBaseLineFromReport extends Rpc
{
}

/**
 * @method string getSceneId()
 * @method $this withSceneId($value)
 */
class DeletePtsScene extends Rpc
{
}

/**
 * @method string getSceneId()
 * @method $this withSceneId($value)
 */
class DeletePtsSceneBaseLine extends Rpc
{
}

/**
 * @method string getSceneIds()
 * @method $this withSceneIds($value)
 */
class DeletePtsScenes extends Rpc
{
}

class GetAllRegions extends Rpc
{
}

/**
 * @method string getAgentIndex()
 * @method $this withAgentIndex($value)
 * @method string getReportId()
 * @method $this withReportId($value)
 * @method string getLevel()
 * @method $this withLevel($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getBeginTime()
 * @method $this withBeginTime($value)
 * @method string getThread()
 * @method $this withThread($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getKeyword()
 * @method $this withKeyword($value)
 */
class GetJMeterLogs extends Rpc
{
}

/**
 * @method string getReportId()
 * @method $this withReportId($value)
 * @method string getSamplerId()
 * @method $this withSamplerId($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getBeginTime()
 * @method $this withBeginTime($value)
 */
class GetJMeterSampleMetrics extends Rpc
{
}

/**
 * @method string getResponseCode()
 * @method $this withResponseCode($value)
 * @method string getAgentId()
 * @method $this withAgentId($value)
 * @method string getReportId()
 * @method $this withReportId($value)
 * @method string getMinRT()
 * @method $this withMinRT($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getBeginTime()
 * @method $this withBeginTime($value)
 * @method string getThread()
 * @method $this withThread($value)
 * @method string getMaxRT()
 * @method $this withMaxRT($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getSamplerId()
 * @method $this withSamplerId($value)
 * @method string getSuccess()
 * @method $this withSuccess($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getKeyword()
 * @method $this withKeyword($value)
 */
class GetJMeterSamplingLogs extends Rpc
{
}

/**
 * @method string getSceneId()
 * @method $this withSceneId($value)
 */
class GetJMeterSceneRunningData extends Rpc
{
}

/**
 * @method string getSceneId()
 * @method $this withSceneId($value)
 */
class GetOpenJMeterScene extends Rpc
{
}

/**
 * @method string getSceneId()
 * @method $this withSceneId($value)
 * @method string getPlanId()
 * @method $this withPlanId($value)
 */
class GetPtsReportDetails extends Rpc
{
}

/**
 * @method string getSceneId()
 * @method $this withSceneId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 */
class GetPtsReportsBySceneId extends Rpc
{
}

/**
 * @method string getSceneId()
 * @method $this withSceneId($value)
 */
class GetPtsScene extends Rpc
{
}

/**
 * @method string getSceneId()
 * @method $this withSceneId($value)
 */
class GetPtsSceneBaseLine extends Rpc
{
}

/**
 * @method string getSceneId()
 * @method $this withSceneId($value)
 * @method string getPlanId()
 * @method $this withPlanId($value)
 */
class GetPtsSceneRunningData extends Rpc
{
}

/**
 * @method string getSceneId()
 * @method $this withSceneId($value)
 */
class GetPtsSceneRunningStatus extends Rpc
{
}

/**
 * @method string getVpcId()
 * @method $this withVpcId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 */
class GetUserVpcs extends Rpc
{
}

/**
 * @method string getVpcId()
 * @method $this withVpcId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 */
class GetUserVpcSecurityGroup extends Rpc
{
}

/**
 * @method string getVpcId()
 * @method $this withVpcId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 */
class GetUserVpcVSwitch extends Rpc
{
}

/**
 * @method string getEnvName()
 * @method $this withEnvName($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getEnvId()
 * @method $this withEnvId($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 */
class ListEnvs extends Rpc
{
}

/**
 * @method string getReportId()
 * @method $this withReportId($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getBeginTime()
 * @method $this withBeginTime($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getSceneId()
 * @method $this withSceneId($value)
 * @method string getKeyword()
 * @method $this withKeyword($value)
 */
class ListJMeterReports extends Rpc
{
}

/**
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getSceneId()
 * @method $this withSceneId($value)
 * @method string getSceneName()
 * @method $this withSceneName($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 */
class ListOpenJMeterScenes extends Rpc
{
}

/**
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getKeyWord()
 * @method $this withKeyWord($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 */
class ListPtsScene extends Rpc
{
}

/**
 * @method string getScene()
 */
class ModifyPtsScene extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withScene($value)
    {
        $this->data['Scene'] = $value;
        $this->options['form_params']['Scene'] = $value;

        return $this;
    }
}

/**
 * @method string getEnvId()
 * @method $this withEnvId($value)
 */
class RemoveEnv extends Rpc
{
}

/**
 * @method string getSceneId()
 * @method $this withSceneId($value)
 */
class RemoveOpenJMeterScene extends Rpc
{
}

/**
 * @method string getEnv()
 * @method $this withEnv($value)
 */
class SaveEnv extends Rpc
{
}

/**
 * @method string getOpenJMeterScene()
 * @method $this withOpenJMeterScene($value)
 */
class SaveOpenJMeterScene extends Rpc
{
}

/**
 * @method string getScene()
 * @method $this withScene($value)
 */
class SavePtsScene extends Rpc
{
}

/**
 * @method string getSceneId()
 * @method $this withSceneId($value)
 */
class StartDebuggingJMeterScene extends Rpc
{
}

/**
 * @method string getSceneId()
 * @method $this withSceneId($value)
 */
class StartDebugPtsScene extends Rpc
{
}

/**
 * @method string getSceneId()
 * @method $this withSceneId($value)
 */
class StartPtsScene extends Rpc
{
}

/**
 * @method string getSceneId()
 * @method $this withSceneId($value)
 */
class StartTestingJMeterScene extends Rpc
{
}

/**
 * @method string getSceneId()
 * @method $this withSceneId($value)
 */
class StopDebuggingJMeterScene extends Rpc
{
}

/**
 * @method string getSceneId()
 * @method $this withSceneId($value)
 * @method string getPlanId()
 * @method $this withPlanId($value)
 */
class StopDebugPtsScene extends Rpc
{
}

/**
 * @method string getSceneId()
 * @method $this withSceneId($value)
 */
class StopPtsScene extends Rpc
{
}

/**
 * @method string getSceneId()
 * @method $this withSceneId($value)
 */
class StopTestingJMeterScene extends Rpc
{
}

/**
 * @method string getSceneBaseline()
 * @method $this withSceneBaseline($value)
 * @method string getSceneId()
 * @method $this withSceneId($value)
 * @method string getApiBaselines()
 * @method $this withApiBaselines($value)
 */
class UpdatePtsSceneBaseLine extends Rpc
{
}
