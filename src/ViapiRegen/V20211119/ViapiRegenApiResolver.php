<?php

namespace AlibabaCloud\ViapiRegen\V20211119;

use AlibabaCloud\Client\Resolver\ApiResolver;

/**
 * @method CheckDatasetOssBucketCORS checkDatasetOssBucketCORS(array $options = [])
 * @method CreateDataset createDataset(array $options = [])
 * @method CreateLabelset createLabelset(array $options = [])
 * @method CreateService createService(array $options = [])
 * @method CreateTagTask createTagTask(array $options = [])
 * @method CreateTrainTask createTrainTask(array $options = [])
 * @method CreateWorkspace createWorkspace(array $options = [])
 * @method CustomizeClassifyImage customizeClassifyImage(array $options = [])
 * @method CustomizeDetectImage customizeDetectImage(array $options = [])
 * @method CustomizeInstanceSegmentImage customizeInstanceSegmentImage(array $options = [])
 * @method DebugService debugService(array $options = [])
 * @method DeleteDataReflowData deleteDataReflowData(array $options = [])
 * @method DeleteDataset deleteDataset(array $options = [])
 * @method DeleteLabelset deleteLabelset(array $options = [])
 * @method DeleteLabelsetData deleteLabelsetData(array $options = [])
 * @method DeleteService deleteService(array $options = [])
 * @method DeleteTrainTask deleteTrainTask(array $options = [])
 * @method DeleteWorkspace deleteWorkspace(array $options = [])
 * @method DisableDataReflow disableDataReflow(array $options = [])
 * @method DownloadDataset downloadDataset(array $options = [])
 * @method DownloadFileNameList downloadFileNameList(array $options = [])
 * @method DownloadLabelFile downloadLabelFile(array $options = [])
 * @method EnableDataReflow enableDataReflow(array $options = [])
 * @method ExportDataReflowDataList exportDataReflowDataList(array $options = [])
 * @method GetDataset getDataset(array $options = [])
 * @method GetDiffCountLabelsetAndDataset getDiffCountLabelsetAndDataset(array $options = [])
 * @method GetLabelDetail getLabelDetail(array $options = [])
 * @method GetLabelset getLabelset(array $options = [])
 * @method GetService getService(array $options = [])
 * @method GetServiceInvoke getServiceInvoke(array $options = [])
 * @method GetServiceQps getServiceQps(array $options = [])
 * @method GetTrainModel getTrainModel(array $options = [])
 * @method GetTrainTask getTrainTask(array $options = [])
 * @method GetTrainTaskEstimatedTime getTrainTaskEstimatedTime(array $options = [])
 * @method GetUploadPolicy getUploadPolicy(array $options = [])
 * @method GetUserInfo getUserInfo(array $options = [])
 * @method GetWorkspace getWorkspace(array $options = [])
 * @method ListDataReflowDatas listDataReflowDatas(array $options = [])
 * @method ListDatasetDatas listDatasetDatas(array $options = [])
 * @method ListDatasets listDatasets(array $options = [])
 * @method ListLabelsetDatas listLabelsetDatas(array $options = [])
 * @method ListLabelsets listLabelsets(array $options = [])
 * @method ListServices listServices(array $options = [])
 * @method ListTrainTasks listTrainTasks(array $options = [])
 * @method ListWorkspaces listWorkspaces(array $options = [])
 * @method SetDatasetUserOssPath setDatasetUserOssPath(array $options = [])
 * @method StartService startService(array $options = [])
 * @method StartTrainTask startTrainTask(array $options = [])
 * @method StopService stopService(array $options = [])
 * @method StopTrainTask stopTrainTask(array $options = [])
 * @method UpdateDataset updateDataset(array $options = [])
 * @method UpdateLabelset updateLabelset(array $options = [])
 * @method UpdateService updateService(array $options = [])
 * @method UpdateTrainTask updateTrainTask(array $options = [])
 * @method UpdateWorkspace updateWorkspace(array $options = [])
 */
class ViapiRegenApiResolver extends ApiResolver
{
}

class Rpc extends \AlibabaCloud\Client\Resolver\Rpc
{
    /** @var string */
    public $product = 'viapi-regen';

    /** @var string */
    public $version = '2021-11-19';

    /** @var string */
    public $method = 'POST';

    /** @var string */
    public $serviceCode = 'selflearning';
}

/**
 * @method string getLabelsetId()
 */
class CheckDatasetOssBucketCORS extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withLabelsetId($value)
    {
        $this->data['LabelsetId'] = $value;
        $this->options['form_params']['LabelsetId'] = $value;

        return $this;
    }
}

/**
 * @method string getDescription()
 * @method string getType()
 * @method string getName()
 * @method string getWorkspaceId()
 */
class CreateDataset extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDescription($value)
    {
        $this->data['Description'] = $value;
        $this->options['form_params']['Description'] = $value;

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
        $this->options['form_params']['Type'] = $value;

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
        $this->options['form_params']['Name'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withWorkspaceId($value)
    {
        $this->data['WorkspaceId'] = $value;
        $this->options['form_params']['WorkspaceId'] = $value;

        return $this;
    }
}

/**
 * @method string getDescription()
 * @method string getType()
 * @method string getPreLabelId()
 * @method string getTagUserList()
 * @method string getUserOssUrl()
 * @method string getObjectKey()
 * @method string getName()
 * @method string getDatasetId()
 * @method string getTagSettings()
 */
class CreateLabelset extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDescription($value)
    {
        $this->data['Description'] = $value;
        $this->options['form_params']['Description'] = $value;

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
        $this->options['form_params']['Type'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPreLabelId($value)
    {
        $this->data['PreLabelId'] = $value;
        $this->options['form_params']['PreLabelId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTagUserList($value)
    {
        $this->data['TagUserList'] = $value;
        $this->options['form_params']['TagUserList'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withUserOssUrl($value)
    {
        $this->data['UserOssUrl'] = $value;
        $this->options['form_params']['UserOssUrl'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withObjectKey($value)
    {
        $this->data['ObjectKey'] = $value;
        $this->options['form_params']['ObjectKey'] = $value;

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
        $this->options['form_params']['Name'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDatasetId($value)
    {
        $this->data['DatasetId'] = $value;
        $this->options['form_params']['DatasetId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTagSettings($value)
    {
        $this->data['TagSettings'] = $value;
        $this->options['form_params']['TagSettings'] = $value;

        return $this;
    }
}

/**
 * @method string getDescription()
 * @method string getTrainTaskId()
 * @method string getAuthorizationType()
 * @method string getName()
 * @method string getAuthorizedAccount()
 */
class CreateService extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDescription($value)
    {
        $this->data['Description'] = $value;
        $this->options['form_params']['Description'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTrainTaskId($value)
    {
        $this->data['TrainTaskId'] = $value;
        $this->options['form_params']['TrainTaskId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAuthorizationType($value)
    {
        $this->data['AuthorizationType'] = $value;
        $this->options['form_params']['AuthorizationType'] = $value;

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
        $this->options['form_params']['Name'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAuthorizedAccount($value)
    {
        $this->data['AuthorizedAccount'] = $value;
        $this->options['form_params']['AuthorizedAccount'] = $value;

        return $this;
    }
}

/**
 * @method string getLabelsetId()
 */
class CreateTagTask extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withLabelsetId($value)
    {
        $this->data['LabelsetId'] = $value;
        $this->options['form_params']['LabelsetId'] = $value;

        return $this;
    }
}

/**
 * @method string getDescription()
 * @method string getTrainMode()
 * @method string getDatasetIds()
 * @method string getPreTrainTaskId()
 * @method string getAdvancedParameters()
 * @method string getLabelId()
 * @method string getName()
 * @method string getDatasetId()
 * @method string getLabelIds()
 * @method string getWorkspaceId()
 */
class CreateTrainTask extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDescription($value)
    {
        $this->data['Description'] = $value;
        $this->options['form_params']['Description'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTrainMode($value)
    {
        $this->data['TrainMode'] = $value;
        $this->options['form_params']['TrainMode'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDatasetIds($value)
    {
        $this->data['DatasetIds'] = $value;
        $this->options['form_params']['DatasetIds'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPreTrainTaskId($value)
    {
        $this->data['PreTrainTaskId'] = $value;
        $this->options['form_params']['PreTrainTaskId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAdvancedParameters($value)
    {
        $this->data['AdvancedParameters'] = $value;
        $this->options['form_params']['AdvancedParameters'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withLabelId($value)
    {
        $this->data['LabelId'] = $value;
        $this->options['form_params']['LabelId'] = $value;

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
        $this->options['form_params']['Name'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDatasetId($value)
    {
        $this->data['DatasetId'] = $value;
        $this->options['form_params']['DatasetId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withLabelIds($value)
    {
        $this->data['LabelIds'] = $value;
        $this->options['form_params']['LabelIds'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withWorkspaceId($value)
    {
        $this->data['WorkspaceId'] = $value;
        $this->options['form_params']['WorkspaceId'] = $value;

        return $this;
    }
}

/**
 * @method string getDescription()
 * @method string getType()
 * @method string getName()
 */
class CreateWorkspace extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDescription($value)
    {
        $this->data['Description'] = $value;
        $this->options['form_params']['Description'] = $value;

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
        $this->options['form_params']['Type'] = $value;

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
        $this->options['form_params']['Name'] = $value;

        return $this;
    }
}

/**
 * @method string getImageUrl()
 * @method string getServiceId()
 */
class CustomizeClassifyImage extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withImageUrl($value)
    {
        $this->data['ImageUrl'] = $value;
        $this->options['form_params']['ImageUrl'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withServiceId($value)
    {
        $this->data['ServiceId'] = $value;
        $this->options['form_params']['ServiceId'] = $value;

        return $this;
    }
}

/**
 * @method string getImageUrl()
 * @method string getServiceId()
 */
class CustomizeDetectImage extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withImageUrl($value)
    {
        $this->data['ImageUrl'] = $value;
        $this->options['form_params']['ImageUrl'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withServiceId($value)
    {
        $this->data['ServiceId'] = $value;
        $this->options['form_params']['ServiceId'] = $value;

        return $this;
    }
}

/**
 * @method string getImageUrl()
 * @method string getServiceId()
 */
class CustomizeInstanceSegmentImage extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withImageUrl($value)
    {
        $this->data['ImageUrl'] = $value;
        $this->options['form_params']['ImageUrl'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withServiceId($value)
    {
        $this->data['ServiceId'] = $value;
        $this->options['form_params']['ServiceId'] = $value;

        return $this;
    }
}

/**
 * @method string getParam()
 * @method string getId()
 */
class DebugService extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withParam($value)
    {
        $this->data['Param'] = $value;
        $this->options['form_params']['Param'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withId($value)
    {
        $this->data['Id'] = $value;
        $this->options['form_params']['Id'] = $value;

        return $this;
    }
}

/**
 * @method string getId()
 * @method string getServiceId()
 */
class DeleteDataReflowData extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withId($value)
    {
        $this->data['Id'] = $value;
        $this->options['form_params']['Id'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withServiceId($value)
    {
        $this->data['ServiceId'] = $value;
        $this->options['form_params']['ServiceId'] = $value;

        return $this;
    }
}

/**
 * @method string getId()
 */
class DeleteDataset extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withId($value)
    {
        $this->data['Id'] = $value;
        $this->options['form_params']['Id'] = $value;

        return $this;
    }
}

/**
 * @method string getId()
 */
class DeleteLabelset extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withId($value)
    {
        $this->data['Id'] = $value;
        $this->options['form_params']['Id'] = $value;

        return $this;
    }
}

/**
 * @method string getId()
 * @method string getLabelId()
 */
class DeleteLabelsetData extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withId($value)
    {
        $this->data['Id'] = $value;
        $this->options['form_params']['Id'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withLabelId($value)
    {
        $this->data['LabelId'] = $value;
        $this->options['form_params']['LabelId'] = $value;

        return $this;
    }
}

/**
 * @method string getId()
 */
class DeleteService extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withId($value)
    {
        $this->data['Id'] = $value;
        $this->options['form_params']['Id'] = $value;

        return $this;
    }
}

/**
 * @method string getId()
 */
class DeleteTrainTask extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withId($value)
    {
        $this->data['Id'] = $value;
        $this->options['form_params']['Id'] = $value;

        return $this;
    }
}

/**
 * @method string getId()
 */
class DeleteWorkspace extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withId($value)
    {
        $this->data['Id'] = $value;
        $this->options['form_params']['Id'] = $value;

        return $this;
    }
}

/**
 * @method string getServiceId()
 */
class DisableDataReflow extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withServiceId($value)
    {
        $this->data['ServiceId'] = $value;
        $this->options['form_params']['ServiceId'] = $value;

        return $this;
    }
}

/**
 * @method string getDatasetId()
 */
class DownloadDataset extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDatasetId($value)
    {
        $this->data['DatasetId'] = $value;
        $this->options['form_params']['DatasetId'] = $value;

        return $this;
    }
}

/**
 * @method string getIdentity()
 * @method string getDatasetId()
 */
class DownloadFileNameList extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withIdentity($value)
    {
        $this->data['Identity'] = $value;
        $this->options['form_params']['Identity'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDatasetId($value)
    {
        $this->data['DatasetId'] = $value;
        $this->options['form_params']['DatasetId'] = $value;

        return $this;
    }
}

/**
 * @method string getLabelId()
 */
class DownloadLabelFile extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withLabelId($value)
    {
        $this->data['LabelId'] = $value;
        $this->options['form_params']['LabelId'] = $value;

        return $this;
    }
}

/**
 * @method string getDataReflowRate()
 * @method string getDataReflowOssPath()
 * @method string getServiceId()
 */
class EnableDataReflow extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDataReflowRate($value)
    {
        $this->data['DataReflowRate'] = $value;
        $this->options['form_params']['DataReflowRate'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDataReflowOssPath($value)
    {
        $this->data['DataReflowOssPath'] = $value;
        $this->options['form_params']['DataReflowOssPath'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withServiceId($value)
    {
        $this->data['ServiceId'] = $value;
        $this->options['form_params']['ServiceId'] = $value;

        return $this;
    }
}

/**
 * @method string getFileType()
 * @method string getStartTime()
 * @method string getImageName()
 * @method string getEndTime()
 * @method string getServiceId()
 * @method string getCategory()
 */
class ExportDataReflowDataList extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withFileType($value)
    {
        $this->data['FileType'] = $value;
        $this->options['form_params']['FileType'] = $value;

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
        $this->options['form_params']['StartTime'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withImageName($value)
    {
        $this->data['ImageName'] = $value;
        $this->options['form_params']['ImageName'] = $value;

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
        $this->options['form_params']['EndTime'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withServiceId($value)
    {
        $this->data['ServiceId'] = $value;
        $this->options['form_params']['ServiceId'] = $value;

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
        $this->options['form_params']['Category'] = $value;

        return $this;
    }
}

/**
 * @method string getId()
 */
class GetDataset extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withId($value)
    {
        $this->data['Id'] = $value;
        $this->options['form_params']['Id'] = $value;

        return $this;
    }
}

/**
 * @method string getLabelsetId()
 */
class GetDiffCountLabelsetAndDataset extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withLabelsetId($value)
    {
        $this->data['LabelsetId'] = $value;
        $this->options['form_params']['LabelsetId'] = $value;

        return $this;
    }
}

/**
 * @method string getId()
 */
class GetLabelDetail extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withId($value)
    {
        $this->data['Id'] = $value;
        $this->options['form_params']['Id'] = $value;

        return $this;
    }
}

/**
 * @method string getId()
 */
class GetLabelset extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withId($value)
    {
        $this->data['Id'] = $value;
        $this->options['form_params']['Id'] = $value;

        return $this;
    }
}

/**
 * @method string getId()
 */
class GetService extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withId($value)
    {
        $this->data['Id'] = $value;
        $this->options['form_params']['Id'] = $value;

        return $this;
    }
}

/**
 * @method string getStartTime()
 * @method string getId()
 * @method string getEndTime()
 * @method string getCallerParentIdList()
 */
class GetServiceInvoke extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withStartTime($value)
    {
        $this->data['StartTime'] = $value;
        $this->options['form_params']['StartTime'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withId($value)
    {
        $this->data['Id'] = $value;
        $this->options['form_params']['Id'] = $value;

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
        $this->options['form_params']['EndTime'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCallerParentIdList($value)
    {
        $this->data['CallerParentIdList'] = $value;
        $this->options['form_params']['CallerParentIdList'] = $value;

        return $this;
    }
}

/**
 * @method string getStartTime()
 * @method string getId()
 * @method string getEndTime()
 * @method string getCallerParentIdList()
 */
class GetServiceQps extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withStartTime($value)
    {
        $this->data['StartTime'] = $value;
        $this->options['form_params']['StartTime'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withId($value)
    {
        $this->data['Id'] = $value;
        $this->options['form_params']['Id'] = $value;

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
        $this->options['form_params']['EndTime'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCallerParentIdList($value)
    {
        $this->data['CallerParentIdList'] = $value;
        $this->options['form_params']['CallerParentIdList'] = $value;

        return $this;
    }
}

/**
 * @method string getId()
 */
class GetTrainModel extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withId($value)
    {
        $this->data['Id'] = $value;
        $this->options['form_params']['Id'] = $value;

        return $this;
    }
}

/**
 * @method string getId()
 */
class GetTrainTask extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withId($value)
    {
        $this->data['Id'] = $value;
        $this->options['form_params']['Id'] = $value;

        return $this;
    }
}

/**
 * @method string getId()
 */
class GetTrainTaskEstimatedTime extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withId($value)
    {
        $this->data['Id'] = $value;
        $this->options['form_params']['Id'] = $value;

        return $this;
    }
}

/**
 * @method string getType()
 * @method string getId()
 * @method string getFileName()
 */
class GetUploadPolicy extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withType($value)
    {
        $this->data['Type'] = $value;
        $this->options['form_params']['Type'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withId($value)
    {
        $this->data['Id'] = $value;
        $this->options['form_params']['Id'] = $value;

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
        $this->options['form_params']['FileName'] = $value;

        return $this;
    }
}

class GetUserInfo extends Rpc
{
}

/**
 * @method string getId()
 */
class GetWorkspace extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withId($value)
    {
        $this->data['Id'] = $value;
        $this->options['form_params']['Id'] = $value;

        return $this;
    }
}

/**
 * @method string getStartTime()
 * @method string getImageName()
 * @method string getPageSize()
 * @method string getEndTime()
 * @method string getCurrentPage()
 * @method string getServiceId()
 * @method string getCategory()
 */
class ListDataReflowDatas extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withStartTime($value)
    {
        $this->data['StartTime'] = $value;
        $this->options['form_params']['StartTime'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withImageName($value)
    {
        $this->data['ImageName'] = $value;
        $this->options['form_params']['ImageName'] = $value;

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
        $this->options['form_params']['PageSize'] = $value;

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
        $this->options['form_params']['EndTime'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCurrentPage($value)
    {
        $this->data['CurrentPage'] = $value;
        $this->options['form_params']['CurrentPage'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withServiceId($value)
    {
        $this->data['ServiceId'] = $value;
        $this->options['form_params']['ServiceId'] = $value;

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
        $this->options['form_params']['Category'] = $value;

        return $this;
    }
}

/**
 * @method string getIdentity()
 * @method string getPageSize()
 * @method string getCurrentPage()
 * @method string getDatasetId()
 */
class ListDatasetDatas extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withIdentity($value)
    {
        $this->data['Identity'] = $value;
        $this->options['form_params']['Identity'] = $value;

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
        $this->options['form_params']['PageSize'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCurrentPage($value)
    {
        $this->data['CurrentPage'] = $value;
        $this->options['form_params']['CurrentPage'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDatasetId($value)
    {
        $this->data['DatasetId'] = $value;
        $this->options['form_params']['DatasetId'] = $value;

        return $this;
    }
}

/**
 * @method string getPageSize()
 * @method string getCurrentPage()
 * @method string getWorkspaceId()
 */
class ListDatasets extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPageSize($value)
    {
        $this->data['PageSize'] = $value;
        $this->options['form_params']['PageSize'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCurrentPage($value)
    {
        $this->data['CurrentPage'] = $value;
        $this->options['form_params']['CurrentPage'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withWorkspaceId($value)
    {
        $this->data['WorkspaceId'] = $value;
        $this->options['form_params']['WorkspaceId'] = $value;

        return $this;
    }
}

/**
 * @method string getPageSize()
 * @method string getValue()
 * @method string getCurrentPage()
 * @method string getIsAbandon()
 * @method string getLabelId()
 * @method string getName()
 * @method string getOperation()
 */
class ListLabelsetDatas extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPageSize($value)
    {
        $this->data['PageSize'] = $value;
        $this->options['form_params']['PageSize'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withValue($value)
    {
        $this->data['Value'] = $value;
        $this->options['form_params']['Value'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCurrentPage($value)
    {
        $this->data['CurrentPage'] = $value;
        $this->options['form_params']['CurrentPage'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withIsAbandon($value)
    {
        $this->data['IsAbandon'] = $value;
        $this->options['form_params']['IsAbandon'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withLabelId($value)
    {
        $this->data['LabelId'] = $value;
        $this->options['form_params']['LabelId'] = $value;

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
        $this->options['form_params']['Name'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOperation($value)
    {
        $this->data['Operation'] = $value;
        $this->options['form_params']['Operation'] = $value;

        return $this;
    }
}

/**
 * @method string getPageSize()
 * @method string getCurrentPage()
 * @method string getDatasetId()
 * @method string getStatus()
 */
class ListLabelsets extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPageSize($value)
    {
        $this->data['PageSize'] = $value;
        $this->options['form_params']['PageSize'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCurrentPage($value)
    {
        $this->data['CurrentPage'] = $value;
        $this->options['form_params']['CurrentPage'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDatasetId($value)
    {
        $this->data['DatasetId'] = $value;
        $this->options['form_params']['DatasetId'] = $value;

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
        $this->options['form_params']['Status'] = $value;

        return $this;
    }
}

/**
 * @method string getPageSize()
 * @method string getId()
 * @method string getCurrentPage()
 * @method string getName()
 * @method string getWorkspaceId()
 */
class ListServices extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPageSize($value)
    {
        $this->data['PageSize'] = $value;
        $this->options['form_params']['PageSize'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withId($value)
    {
        $this->data['Id'] = $value;
        $this->options['form_params']['Id'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCurrentPage($value)
    {
        $this->data['CurrentPage'] = $value;
        $this->options['form_params']['CurrentPage'] = $value;

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
        $this->options['form_params']['Name'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withWorkspaceId($value)
    {
        $this->data['WorkspaceId'] = $value;
        $this->options['form_params']['WorkspaceId'] = $value;

        return $this;
    }
}

/**
 * @method string getPageSize()
 * @method string getCurrentPage()
 * @method string getStatus()
 * @method string getWorkspaceId()
 */
class ListTrainTasks extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPageSize($value)
    {
        $this->data['PageSize'] = $value;
        $this->options['form_params']['PageSize'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCurrentPage($value)
    {
        $this->data['CurrentPage'] = $value;
        $this->options['form_params']['CurrentPage'] = $value;

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
        $this->options['form_params']['Status'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withWorkspaceId($value)
    {
        $this->data['WorkspaceId'] = $value;
        $this->options['form_params']['WorkspaceId'] = $value;

        return $this;
    }
}

/**
 * @method string getPageSize()
 * @method string getCurrentPage()
 * @method string getName()
 */
class ListWorkspaces extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPageSize($value)
    {
        $this->data['PageSize'] = $value;
        $this->options['form_params']['PageSize'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCurrentPage($value)
    {
        $this->data['CurrentPage'] = $value;
        $this->options['form_params']['CurrentPage'] = $value;

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
        $this->options['form_params']['Name'] = $value;

        return $this;
    }
}

/**
 * @method string getUserOssUrl()
 * @method string getDatasetId()
 */
class SetDatasetUserOssPath extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withUserOssUrl($value)
    {
        $this->data['UserOssUrl'] = $value;
        $this->options['form_params']['UserOssUrl'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDatasetId($value)
    {
        $this->data['DatasetId'] = $value;
        $this->options['form_params']['DatasetId'] = $value;

        return $this;
    }
}

/**
 * @method string getId()
 */
class StartService extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withId($value)
    {
        $this->data['Id'] = $value;
        $this->options['form_params']['Id'] = $value;

        return $this;
    }
}

/**
 * @method string getRelyOnTaskId()
 * @method string getForceStartFlag()
 * @method string getId()
 */
class StartTrainTask extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withRelyOnTaskId($value)
    {
        $this->data['RelyOnTaskId'] = $value;
        $this->options['form_params']['RelyOnTaskId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withForceStartFlag($value)
    {
        $this->data['ForceStartFlag'] = $value;
        $this->options['form_params']['ForceStartFlag'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withId($value)
    {
        $this->data['Id'] = $value;
        $this->options['form_params']['Id'] = $value;

        return $this;
    }
}

/**
 * @method string getId()
 */
class StopService extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withId($value)
    {
        $this->data['Id'] = $value;
        $this->options['form_params']['Id'] = $value;

        return $this;
    }
}

/**
 * @method string getId()
 */
class StopTrainTask extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withId($value)
    {
        $this->data['Id'] = $value;
        $this->options['form_params']['Id'] = $value;

        return $this;
    }
}

/**
 * @method string getDescription()
 * @method string getId()
 * @method string getName()
 */
class UpdateDataset extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDescription($value)
    {
        $this->data['Description'] = $value;
        $this->options['form_params']['Description'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withId($value)
    {
        $this->data['Id'] = $value;
        $this->options['form_params']['Id'] = $value;

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
        $this->options['form_params']['Name'] = $value;

        return $this;
    }
}

/**
 * @method string getDescription()
 * @method string getId()
 * @method string getTagUserList()
 * @method string getUserOssUrl()
 * @method string getObjectKey()
 * @method string getName()
 */
class UpdateLabelset extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDescription($value)
    {
        $this->data['Description'] = $value;
        $this->options['form_params']['Description'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withId($value)
    {
        $this->data['Id'] = $value;
        $this->options['form_params']['Id'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTagUserList($value)
    {
        $this->data['TagUserList'] = $value;
        $this->options['form_params']['TagUserList'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withUserOssUrl($value)
    {
        $this->data['UserOssUrl'] = $value;
        $this->options['form_params']['UserOssUrl'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withObjectKey($value)
    {
        $this->data['ObjectKey'] = $value;
        $this->options['form_params']['ObjectKey'] = $value;

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
        $this->options['form_params']['Name'] = $value;

        return $this;
    }
}

/**
 * @method string getDescription()
 * @method string getId()
 * @method string getAuthorizationType()
 * @method string getName()
 * @method string getAuthorizedAccount()
 */
class UpdateService extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDescription($value)
    {
        $this->data['Description'] = $value;
        $this->options['form_params']['Description'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withId($value)
    {
        $this->data['Id'] = $value;
        $this->options['form_params']['Id'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAuthorizationType($value)
    {
        $this->data['AuthorizationType'] = $value;
        $this->options['form_params']['AuthorizationType'] = $value;

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
        $this->options['form_params']['Name'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAuthorizedAccount($value)
    {
        $this->data['AuthorizedAccount'] = $value;
        $this->options['form_params']['AuthorizedAccount'] = $value;

        return $this;
    }
}

/**
 * @method string getDescription()
 * @method string getTrainMode()
 * @method string getId()
 * @method string getDatasetIds()
 * @method string getPreTrainTaskId()
 * @method string getPreTrainTaskFlag()
 * @method string getAdvancedParameters()
 * @method string getLabelId()
 * @method string getName()
 * @method string getDatasetId()
 * @method string getLabelIds()
 */
class UpdateTrainTask extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDescription($value)
    {
        $this->data['Description'] = $value;
        $this->options['form_params']['Description'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTrainMode($value)
    {
        $this->data['TrainMode'] = $value;
        $this->options['form_params']['TrainMode'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withId($value)
    {
        $this->data['Id'] = $value;
        $this->options['form_params']['Id'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDatasetIds($value)
    {
        $this->data['DatasetIds'] = $value;
        $this->options['form_params']['DatasetIds'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPreTrainTaskId($value)
    {
        $this->data['PreTrainTaskId'] = $value;
        $this->options['form_params']['PreTrainTaskId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPreTrainTaskFlag($value)
    {
        $this->data['PreTrainTaskFlag'] = $value;
        $this->options['form_params']['PreTrainTaskFlag'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAdvancedParameters($value)
    {
        $this->data['AdvancedParameters'] = $value;
        $this->options['form_params']['AdvancedParameters'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withLabelId($value)
    {
        $this->data['LabelId'] = $value;
        $this->options['form_params']['LabelId'] = $value;

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
        $this->options['form_params']['Name'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDatasetId($value)
    {
        $this->data['DatasetId'] = $value;
        $this->options['form_params']['DatasetId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withLabelIds($value)
    {
        $this->data['LabelIds'] = $value;
        $this->options['form_params']['LabelIds'] = $value;

        return $this;
    }
}

/**
 * @method string getDescription()
 * @method string getId()
 * @method string getName()
 */
class UpdateWorkspace extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDescription($value)
    {
        $this->data['Description'] = $value;
        $this->options['form_params']['Description'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withId($value)
    {
        $this->data['Id'] = $value;
        $this->options['form_params']['Id'] = $value;

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
        $this->options['form_params']['Name'] = $value;

        return $this;
    }
}
