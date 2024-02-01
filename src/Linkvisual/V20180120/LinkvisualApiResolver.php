<?php

namespace AlibabaCloud\Linkvisual\V20180120;

use AlibabaCloud\Client\Resolver\ApiResolver;

/**
 * @method AddEventRecordPlanDevice addEventRecordPlanDevice(array $options = [])
 * @method AddFaceDeviceGroup addFaceDeviceGroup(array $options = [])
 * @method AddFaceDeviceToDeviceGroup addFaceDeviceToDeviceGroup(array $options = [])
 * @method AddFaceUser addFaceUser(array $options = [])
 * @method AddFaceUserGroup addFaceUserGroup(array $options = [])
 * @method AddFaceUserGroupAndDeviceGroupRelation addFaceUserGroupAndDeviceGroupRelation(array $options = [])
 * @method AddFaceUserPicture addFaceUserPicture(array $options = [])
 * @method AddFaceUserToUserGroup addFaceUserToUserGroup(array $options = [])
 * @method AddRecordPlanDevice addRecordPlanDevice(array $options = [])
 * @method BatchQueryVisionDeviceInfo batchQueryVisionDeviceInfo(array $options = [])
 * @method BindPictureSearchAppWithDevices bindPictureSearchAppWithDevices(array $options = [])
 * @method CheckFaceUserDoExistOnDevice checkFaceUserDoExistOnDevice(array $options = [])
 * @method ClearFaceDeviceDB clearFaceDeviceDB(array $options = [])
 * @method CreateEventRecordPlan createEventRecordPlan(array $options = [])
 * @method CreateGbDevice createGbDevice(array $options = [])
 * @method CreateLocalFileUploadJob createLocalFileUploadJob(array $options = [])
 * @method CreateLocalRecordDownloadByTimeJob createLocalRecordDownloadByTimeJob(array $options = [])
 * @method CreatePictureSearchApp createPictureSearchApp(array $options = [])
 * @method CreatePictureSearchJob createPictureSearchJob(array $options = [])
 * @method CreateRecordDownloadByTimeJob createRecordDownloadByTimeJob(array $options = [])
 * @method CreateRecordPlan createRecordPlan(array $options = [])
 * @method CreateRtmpDevice createRtmpDevice(array $options = [])
 * @method CreateStreamPushJob createStreamPushJob(array $options = [])
 * @method CreateStreamSnapshotJob createStreamSnapshotJob(array $options = [])
 * @method CreateTimeTemplate createTimeTemplate(array $options = [])
 * @method DeleteEventRecordPlan deleteEventRecordPlan(array $options = [])
 * @method DeleteEventRecordPlanDevice deleteEventRecordPlanDevice(array $options = [])
 * @method DeleteFaceDeviceGroup deleteFaceDeviceGroup(array $options = [])
 * @method DeleteFaceUser deleteFaceUser(array $options = [])
 * @method DeleteFaceUserGroup deleteFaceUserGroup(array $options = [])
 * @method DeleteFaceUserGroupAndDeviceGroupRelation deleteFaceUserGroupAndDeviceGroupRelation(array $options = [])
 * @method DeleteFaceUserPicture deleteFaceUserPicture(array $options = [])
 * @method DeleteGbDevice deleteGbDevice(array $options = [])
 * @method DeleteLocalFileUploadJob deleteLocalFileUploadJob(array $options = [])
 * @method DeletePicture deletePicture(array $options = [])
 * @method DeleteRecord deleteRecord(array $options = [])
 * @method DeleteRecordPlan deleteRecordPlan(array $options = [])
 * @method DeleteRecordPlanDevice deleteRecordPlanDevice(array $options = [])
 * @method DeleteRtmpDevice deleteRtmpDevice(array $options = [])
 * @method DeleteRtmpKey deleteRtmpKey(array $options = [])
 * @method DeleteStreamPushJob deleteStreamPushJob(array $options = [])
 * @method DeleteStreamSnapshotJob deleteStreamSnapshotJob(array $options = [])
 * @method DeleteTimeTemplate deleteTimeTemplate(array $options = [])
 * @method DetectUserFaceByUrl detectUserFaceByUrl(array $options = [])
 * @method EnableGbSubDevice enableGbSubDevice(array $options = [])
 * @method GetPictureSearchJobStatus getPictureSearchJobStatus(array $options = [])
 * @method PictureSearchPicture pictureSearchPicture(array $options = [])
 * @method QueryCarProcessEvents queryCarProcessEvents(array $options = [])
 * @method QueryDeviceEvent queryDeviceEvent(array $options = [])
 * @method QueryDeviceEventPicture queryDeviceEventPicture(array $options = [])
 * @method QueryDeviceEventRecord queryDeviceEventRecord(array $options = [])
 * @method QueryDevicePictureByList queryDevicePictureByList(array $options = [])
 * @method QueryDevicePictureFile queryDevicePictureFile(array $options = [])
 * @method QueryDevicePictureLifeCycle queryDevicePictureLifeCycle(array $options = [])
 * @method QueryDeviceRecordLifeCycle queryDeviceRecordLifeCycle(array $options = [])
 * @method QueryDeviceVodUrl queryDeviceVodUrl(array $options = [])
 * @method QueryDeviceVodUrlByTime queryDeviceVodUrlByTime(array $options = [])
 * @method QueryEventRecordPlanDetail queryEventRecordPlanDetail(array $options = [])
 * @method QueryEventRecordPlanDeviceByDevice queryEventRecordPlanDeviceByDevice(array $options = [])
 * @method QueryEventRecordPlanDeviceByPlan queryEventRecordPlanDeviceByPlan(array $options = [])
 * @method QueryEventRecordPlans queryEventRecordPlans(array $options = [])
 * @method QueryFaceAllDeviceGroup queryFaceAllDeviceGroup(array $options = [])
 * @method QueryFaceAllUserGroup queryFaceAllUserGroup(array $options = [])
 * @method QueryFaceAllUserGroupAndDeviceGroupRelation queryFaceAllUserGroupAndDeviceGroupRelation(array $options = [])
 * @method QueryFaceAllUserIdsByGroupId queryFaceAllUserIdsByGroupId(array $options = [])
 * @method QueryFaceCustomUserIdByUserId queryFaceCustomUserIdByUserId(array $options = [])
 * @method QueryFaceDeviceGroupsByDevice queryFaceDeviceGroupsByDevice(array $options = [])
 * @method QueryFaceUser queryFaceUser(array $options = [])
 * @method QueryFaceUserBatch queryFaceUserBatch(array $options = [])
 * @method QueryFaceUserByName queryFaceUserByName(array $options = [])
 * @method QueryFaceUserGroup queryFaceUserGroup(array $options = [])
 * @method QueryFaceUserGroupAndDeviceGroupRelation queryFaceUserGroupAndDeviceGroupRelation(array $options = [])
 * @method QueryFaceUserIdByCustomUserId queryFaceUserIdByCustomUserId(array $options = [])
 * @method QueryGbSubDeviceList queryGbSubDeviceList(array $options = [])
 * @method QueryLiveStreaming queryLiveStreaming(array $options = [])
 * @method QueryLocalFileUploadJob queryLocalFileUploadJob(array $options = [])
 * @method QueryMonthRecord queryMonthRecord(array $options = [])
 * @method QueryPictureFiles queryPictureFiles(array $options = [])
 * @method QueryPictureSearchAiboxes queryPictureSearchAiboxes(array $options = [])
 * @method QueryPictureSearchApps queryPictureSearchApps(array $options = [])
 * @method QueryPictureSearchDevices queryPictureSearchDevices(array $options = [])
 * @method QueryPictureSearchJob queryPictureSearchJob(array $options = [])
 * @method QueryPictureSearchJobResult queryPictureSearchJobResult(array $options = [])
 * @method QueryRecord queryRecord(array $options = [])
 * @method QueryRecordByRecordId queryRecordByRecordId(array $options = [])
 * @method QueryRecordDownloadJobById queryRecordDownloadJobById(array $options = [])
 * @method QueryRecordDownloadJobList queryRecordDownloadJobList(array $options = [])
 * @method QueryRecordDownloadUrl queryRecordDownloadUrl(array $options = [])
 * @method QueryRecordPlanDetail queryRecordPlanDetail(array $options = [])
 * @method QueryRecordPlanDeviceByDevice queryRecordPlanDeviceByDevice(array $options = [])
 * @method QueryRecordPlanDeviceByPlan queryRecordPlanDeviceByPlan(array $options = [])
 * @method QueryRecordPlans queryRecordPlans(array $options = [])
 * @method QueryRecordUrl queryRecordUrl(array $options = [])
 * @method QueryRecordUrlByTime queryRecordUrlByTime(array $options = [])
 * @method QueryRtmpKey queryRtmpKey(array $options = [])
 * @method QueryStreamPushJob queryStreamPushJob(array $options = [])
 * @method QueryStreamPushJobList queryStreamPushJobList(array $options = [])
 * @method QueryStreamSnapshotJob queryStreamSnapshotJob(array $options = [])
 * @method QueryTimeTemplate queryTimeTemplate(array $options = [])
 * @method QueryTimeTemplateDetail queryTimeTemplateDetail(array $options = [])
 * @method QueryVisionDeviceInfo queryVisionDeviceInfo(array $options = [])
 * @method QueryVoiceIntercom queryVoiceIntercom(array $options = [])
 * @method RefreshGbSubDeviceList refreshGbSubDeviceList(array $options = [])
 * @method RemoveFaceDeviceFromDeviceGroup removeFaceDeviceFromDeviceGroup(array $options = [])
 * @method RemoveFaceUserFromUserGroup removeFaceUserFromUserGroup(array $options = [])
 * @method SetDevicePictureLifeCycle setDevicePictureLifeCycle(array $options = [])
 * @method SetDeviceRecordLifeCycle setDeviceRecordLifeCycle(array $options = [])
 * @method StopLiveStreaming stopLiveStreaming(array $options = [])
 * @method StopTriggeredRecord stopTriggeredRecord(array $options = [])
 * @method TransferDeviceInstance transferDeviceInstance(array $options = [])
 * @method TriggerCapturePicture triggerCapturePicture(array $options = [])
 * @method TriggerRecord triggerRecord(array $options = [])
 * @method UnbindPictureSearchAppWithDevices unbindPictureSearchAppWithDevices(array $options = [])
 * @method UpdateEventRecordPlan updateEventRecordPlan(array $options = [])
 * @method UpdateFaceUser updateFaceUser(array $options = [])
 * @method UpdateFaceUserGroupAndDeviceGroupRelation updateFaceUserGroupAndDeviceGroupRelation(array $options = [])
 * @method UpdateGbDevice updateGbDevice(array $options = [])
 * @method UpdateInstanceInternetProtocol updateInstanceInternetProtocol(array $options = [])
 * @method UpdatePictureSearchApp updatePictureSearchApp(array $options = [])
 * @method UpdateRecordPlan updateRecordPlan(array $options = [])
 * @method UpdateRtmpKey updateRtmpKey(array $options = [])
 * @method UpdateTimeTemplate updateTimeTemplate(array $options = [])
 */
class LinkvisualApiResolver extends ApiResolver
{
}

class Rpc extends \AlibabaCloud\Client\Resolver\Rpc
{
    /** @var string */
    public $product = 'Linkvisual';

    /** @var string */
    public $version = '2018-01-20';

    /** @var string */
    public $method = 'POST';

    /** @var string */
    public $serviceCode = 'Linkvisual';
}

/**
 * @method string getIotId()
 * @method $this withIotId($value)
 * @method string getIotInstanceId()
 * @method $this withIotInstanceId($value)
 * @method string getStreamType()
 * @method $this withStreamType($value)
 * @method string getProductKey()
 * @method $this withProductKey($value)
 * @method string getApiProduct()
 * @method string getApiRevision()
 * @method string getDeviceName()
 * @method $this withDeviceName($value)
 * @method string getPlanId()
 * @method $this withPlanId($value)
 */
class AddEventRecordPlanDevice extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withApiProduct($value)
    {
        $this->data['ApiProduct'] = $value;
        $this->options['form_params']['ApiProduct'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withApiRevision($value)
    {
        $this->data['ApiRevision'] = $value;
        $this->options['form_params']['ApiRevision'] = $value;

        return $this;
    }
}

/**
 * @method string getIsolationId()
 * @method $this withIsolationId($value)
 * @method string getApiProduct()
 * @method string getApiRevision()
 * @method string getDeviceGroupName()
 * @method $this withDeviceGroupName($value)
 */
class AddFaceDeviceGroup extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withApiProduct($value)
    {
        $this->data['ApiProduct'] = $value;
        $this->options['form_params']['ApiProduct'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withApiRevision($value)
    {
        $this->data['ApiRevision'] = $value;
        $this->options['form_params']['ApiRevision'] = $value;

        return $this;
    }
}

/**
 * @method string getIsolationId()
 * @method $this withIsolationId($value)
 * @method string getIotInstanceId()
 * @method $this withIotInstanceId($value)
 * @method string getDeviceGroupId()
 * @method $this withDeviceGroupId($value)
 * @method string getProductKey()
 * @method $this withProductKey($value)
 * @method string getApiProduct()
 * @method string getApiRevision()
 * @method string getDeviceName()
 * @method $this withDeviceName($value)
 */
class AddFaceDeviceToDeviceGroup extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withApiProduct($value)
    {
        $this->data['ApiProduct'] = $value;
        $this->options['form_params']['ApiProduct'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withApiRevision($value)
    {
        $this->data['ApiRevision'] = $value;
        $this->options['form_params']['ApiRevision'] = $value;

        return $this;
    }
}

/**
 * @method string getIsolationId()
 * @method $this withIsolationId($value)
 * @method string getCustomUserId()
 * @method $this withCustomUserId($value)
 * @method string getParams()
 * @method $this withParams($value)
 * @method string getFacePicUrl()
 * @method $this withFacePicUrl($value)
 * @method string getApiProduct()
 * @method string getName()
 * @method $this withName($value)
 * @method string getApiRevision()
 */
class AddFaceUser extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withApiProduct($value)
    {
        $this->data['ApiProduct'] = $value;
        $this->options['form_params']['ApiProduct'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withApiRevision($value)
    {
        $this->data['ApiRevision'] = $value;
        $this->options['form_params']['ApiRevision'] = $value;

        return $this;
    }
}

/**
 * @method string getIsolationId()
 * @method $this withIsolationId($value)
 * @method string getUserGroupName()
 * @method $this withUserGroupName($value)
 * @method string getApiProduct()
 * @method string getApiRevision()
 */
class AddFaceUserGroup extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withApiProduct($value)
    {
        $this->data['ApiProduct'] = $value;
        $this->options['form_params']['ApiProduct'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withApiRevision($value)
    {
        $this->data['ApiRevision'] = $value;
        $this->options['form_params']['ApiRevision'] = $value;

        return $this;
    }
}

/**
 * @method string getIsolationId()
 * @method $this withIsolationId($value)
 * @method string getRelation()
 * @method $this withRelation($value)
 * @method string getIotInstanceId()
 * @method $this withIotInstanceId($value)
 * @method string getDeviceGroupId()
 * @method $this withDeviceGroupId($value)
 * @method string getUserGroupId()
 * @method $this withUserGroupId($value)
 * @method string getApiProduct()
 * @method string getApiRevision()
 */
class AddFaceUserGroupAndDeviceGroupRelation extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withApiProduct($value)
    {
        $this->data['ApiProduct'] = $value;
        $this->options['form_params']['ApiProduct'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withApiRevision($value)
    {
        $this->data['ApiRevision'] = $value;
        $this->options['form_params']['ApiRevision'] = $value;

        return $this;
    }
}

/**
 * @method string getIsolationId()
 * @method $this withIsolationId($value)
 * @method string getUserId()
 * @method $this withUserId($value)
 * @method string getFacePicUrl()
 * @method $this withFacePicUrl($value)
 * @method string getApiProduct()
 * @method string getApiRevision()
 */
class AddFaceUserPicture extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withApiProduct($value)
    {
        $this->data['ApiProduct'] = $value;
        $this->options['form_params']['ApiProduct'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withApiRevision($value)
    {
        $this->data['ApiRevision'] = $value;
        $this->options['form_params']['ApiRevision'] = $value;

        return $this;
    }
}

/**
 * @method string getIsolationId()
 * @method $this withIsolationId($value)
 * @method string getUserId()
 * @method $this withUserId($value)
 * @method string getUserGroupId()
 * @method $this withUserGroupId($value)
 * @method string getApiProduct()
 * @method string getApiRevision()
 */
class AddFaceUserToUserGroup extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withApiProduct($value)
    {
        $this->data['ApiProduct'] = $value;
        $this->options['form_params']['ApiProduct'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withApiRevision($value)
    {
        $this->data['ApiRevision'] = $value;
        $this->options['form_params']['ApiRevision'] = $value;

        return $this;
    }
}

/**
 * @method string getIotId()
 * @method $this withIotId($value)
 * @method string getIotInstanceId()
 * @method $this withIotInstanceId($value)
 * @method string getStreamType()
 * @method $this withStreamType($value)
 * @method string getProductKey()
 * @method $this withProductKey($value)
 * @method string getApiProduct()
 * @method string getApiRevision()
 * @method string getDeviceName()
 * @method $this withDeviceName($value)
 * @method string getPlanId()
 * @method $this withPlanId($value)
 */
class AddRecordPlanDevice extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withApiProduct($value)
    {
        $this->data['ApiProduct'] = $value;
        $this->options['form_params']['ApiProduct'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withApiRevision($value)
    {
        $this->data['ApiRevision'] = $value;
        $this->options['form_params']['ApiRevision'] = $value;

        return $this;
    }
}

/**
 * @method array getDeviceNameList()
 * @method string getIotInstanceId()
 * @method $this withIotInstanceId($value)
 * @method array getIotIdList()
 * @method string getProductKey()
 * @method $this withProductKey($value)
 * @method string getApiProduct()
 * @method string getApiRevision()
 */
class BatchQueryVisionDeviceInfo extends Rpc
{

    /**
     * @param array $deviceNameList
     *
     * @return $this
     */
	public function withDeviceNameList(array $deviceNameList)
	{
	    $this->data['DeviceNameList'] = $deviceNameList;
		foreach ($deviceNameList as $i => $iValue) {
			$this->options['query']['DeviceNameList.' . ($i + 1)] = $iValue;
		}

		return $this;
    }

    /**
     * @param array $iotIdList
     *
     * @return $this
     */
	public function withIotIdList(array $iotIdList)
	{
	    $this->data['IotIdList'] = $iotIdList;
		foreach ($iotIdList as $i => $iValue) {
			$this->options['query']['IotIdList.' . ($i + 1)] = $iValue;
		}

		return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withApiProduct($value)
    {
        $this->data['ApiProduct'] = $value;
        $this->options['form_params']['ApiProduct'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withApiRevision($value)
    {
        $this->data['ApiRevision'] = $value;
        $this->options['form_params']['ApiRevision'] = $value;

        return $this;
    }
}

/**
 * @method string getIotInstanceId()
 * @method $this withIotInstanceId($value)
 * @method array getDeviceIotIds()
 * @method string getApiProduct()
 * @method string getApiRevision()
 * @method string getAppInstanceId()
 * @method $this withAppInstanceId($value)
 */
class BindPictureSearchAppWithDevices extends Rpc
{

    /**
     * @param array $deviceIotIds
     *
     * @return $this
     */
	public function withDeviceIotIds(array $deviceIotIds)
	{
	    $this->data['DeviceIotIds'] = $deviceIotIds;
		foreach ($deviceIotIds as $i => $iValue) {
			$this->options['query']['DeviceIotIds.' . ($i + 1)] = $iValue;
		}

		return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withApiProduct($value)
    {
        $this->data['ApiProduct'] = $value;
        $this->options['form_params']['ApiProduct'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withApiRevision($value)
    {
        $this->data['ApiRevision'] = $value;
        $this->options['form_params']['ApiRevision'] = $value;

        return $this;
    }
}

/**
 * @method string getIsolationId()
 * @method $this withIsolationId($value)
 * @method string getUserId()
 * @method $this withUserId($value)
 * @method string getIotInstanceId()
 * @method $this withIotInstanceId($value)
 * @method string getProductKey()
 * @method $this withProductKey($value)
 * @method string getApiProduct()
 * @method string getApiRevision()
 * @method string getDeviceName()
 * @method $this withDeviceName($value)
 */
class CheckFaceUserDoExistOnDevice extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withApiProduct($value)
    {
        $this->data['ApiProduct'] = $value;
        $this->options['form_params']['ApiProduct'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withApiRevision($value)
    {
        $this->data['ApiRevision'] = $value;
        $this->options['form_params']['ApiRevision'] = $value;

        return $this;
    }
}

/**
 * @method string getIsolationId()
 * @method $this withIsolationId($value)
 * @method string getIotInstanceId()
 * @method $this withIotInstanceId($value)
 * @method string getProductKey()
 * @method $this withProductKey($value)
 * @method string getApiProduct()
 * @method string getApiRevision()
 * @method string getDeviceName()
 * @method $this withDeviceName($value)
 */
class ClearFaceDeviceDB extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withApiProduct($value)
    {
        $this->data['ApiProduct'] = $value;
        $this->options['form_params']['ApiProduct'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withApiRevision($value)
    {
        $this->data['ApiRevision'] = $value;
        $this->options['form_params']['ApiRevision'] = $value;

        return $this;
    }
}

/**
 * @method string getEventTypes()
 * @method $this withEventTypes($value)
 * @method string getPreRecordDuration()
 * @method $this withPreRecordDuration($value)
 * @method string getRecordDuration()
 * @method $this withRecordDuration($value)
 * @method string getTemplateId()
 * @method $this withTemplateId($value)
 * @method string getApiProduct()
 * @method string getName()
 * @method $this withName($value)
 * @method string getApiRevision()
 */
class CreateEventRecordPlan extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withApiProduct($value)
    {
        $this->data['ApiProduct'] = $value;
        $this->options['form_params']['ApiProduct'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withApiRevision($value)
    {
        $this->data['ApiRevision'] = $value;
        $this->options['form_params']['ApiRevision'] = $value;

        return $this;
    }
}

/**
 * @method string getSubProductKey()
 * @method $this withSubProductKey($value)
 * @method string getGbId()
 * @method $this withGbId($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getDeviceType()
 * @method $this withDeviceType($value)
 * @method string getPassword()
 * @method $this withPassword($value)
 * @method string getIotInstanceId()
 * @method $this withIotInstanceId($value)
 * @method string getDeviceProtocol()
 * @method $this withDeviceProtocol($value)
 * @method string getProductKey()
 * @method $this withProductKey($value)
 * @method string getMediaNetProtocol()
 * @method $this withMediaNetProtocol($value)
 * @method string getApiProduct()
 * @method string getApiRevision()
 * @method string getDeviceName()
 * @method $this withDeviceName($value)
 */
class CreateGbDevice extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withApiProduct($value)
    {
        $this->data['ApiProduct'] = $value;
        $this->options['form_params']['ApiProduct'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withApiRevision($value)
    {
        $this->data['ApiRevision'] = $value;
        $this->options['form_params']['ApiRevision'] = $value;

        return $this;
    }
}

/**
 * @method string getIotInstanceId()
 * @method $this withIotInstanceId($value)
 * @method array getTimeSlot()
 * @method string getApiProduct()
 * @method string getApiRevision()
 */
class CreateLocalFileUploadJob extends Rpc
{

    /**
     * @param array $timeSlot
     *
     * @return $this
     */
	public function withTimeSlot(array $timeSlot)
	{
	    $this->data['TimeSlot'] = $timeSlot;
		foreach ($timeSlot as $depth1 => $depth1Value) {
			if(isset($depth1Value['EndTime'])){
				$this->options['query']['TimeSlot.' . ($depth1 + 1) . '.EndTime'] = $depth1Value['EndTime'];
			}
			if(isset($depth1Value['StartTime'])){
				$this->options['query']['TimeSlot.' . ($depth1 + 1) . '.StartTime'] = $depth1Value['StartTime'];
			}
			if(isset($depth1Value['ProductKey'])){
				$this->options['query']['TimeSlot.' . ($depth1 + 1) . '.ProductKey'] = $depth1Value['ProductKey'];
			}
			if(isset($depth1Value['DeviceName'])){
				$this->options['query']['TimeSlot.' . ($depth1 + 1) . '.DeviceName'] = $depth1Value['DeviceName'];
			}
			if(isset($depth1Value['IotId'])){
				$this->options['query']['TimeSlot.' . ($depth1 + 1) . '.IotId'] = $depth1Value['IotId'];
			}
		}

		return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withApiProduct($value)
    {
        $this->data['ApiProduct'] = $value;
        $this->options['form_params']['ApiProduct'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withApiRevision($value)
    {
        $this->data['ApiRevision'] = $value;
        $this->options['form_params']['ApiRevision'] = $value;

        return $this;
    }
}

/**
 * @method string getSpeed()
 * @method $this withSpeed($value)
 * @method string getIotId()
 * @method $this withIotId($value)
 * @method string getIotInstanceId()
 * @method $this withIotInstanceId($value)
 * @method string getStreamType()
 * @method $this withStreamType($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getBeginTime()
 * @method $this withBeginTime($value)
 * @method string getProductKey()
 * @method $this withProductKey($value)
 * @method string getApiProduct()
 * @method string getApiRevision()
 * @method string getDeviceName()
 * @method $this withDeviceName($value)
 */
class CreateLocalRecordDownloadByTimeJob extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withApiProduct($value)
    {
        $this->data['ApiProduct'] = $value;
        $this->options['form_params']['ApiProduct'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withApiRevision($value)
    {
        $this->data['ApiRevision'] = $value;
        $this->options['form_params']['ApiRevision'] = $value;

        return $this;
    }
}

/**
 * @method string getIotInstanceId()
 * @method $this withIotInstanceId($value)
 * @method string getApiProduct()
 * @method string getName()
 * @method $this withName($value)
 * @method string getApiRevision()
 * @method string getDesc()
 * @method $this withDesc($value)
 */
class CreatePictureSearchApp extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withApiProduct($value)
    {
        $this->data['ApiProduct'] = $value;
        $this->options['form_params']['ApiProduct'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withApiRevision($value)
    {
        $this->data['ApiRevision'] = $value;
        $this->options['form_params']['ApiRevision'] = $value;

        return $this;
    }
}

/**
 * @method string getThreshold()
 * @method $this withThreshold($value)
 * @method string getSearchPicUrl()
 * @method $this withSearchPicUrl($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getPictureSearchType()
 * @method $this withPictureSearchType($value)
 * @method string getBodyThreshold()
 * @method $this withBodyThreshold($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getApiProduct()
 * @method string getApiRevision()
 * @method string getAppInstanceId()
 * @method $this withAppInstanceId($value)
 */
class CreatePictureSearchJob extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withApiProduct($value)
    {
        $this->data['ApiProduct'] = $value;
        $this->options['form_params']['ApiProduct'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withApiRevision($value)
    {
        $this->data['ApiRevision'] = $value;
        $this->options['form_params']['ApiRevision'] = $value;

        return $this;
    }
}

/**
 * @method string getIotId()
 * @method $this withIotId($value)
 * @method string getIotInstanceId()
 * @method $this withIotInstanceId($value)
 * @method string getRecordType()
 * @method $this withRecordType($value)
 * @method string getStreamType()
 * @method $this withStreamType($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getBeginTime()
 * @method $this withBeginTime($value)
 * @method string getProductKey()
 * @method $this withProductKey($value)
 * @method string getApiProduct()
 * @method string getApiRevision()
 * @method string getDeviceName()
 * @method $this withDeviceName($value)
 */
class CreateRecordDownloadByTimeJob extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withApiProduct($value)
    {
        $this->data['ApiProduct'] = $value;
        $this->options['form_params']['ApiProduct'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withApiRevision($value)
    {
        $this->data['ApiRevision'] = $value;
        $this->options['form_params']['ApiRevision'] = $value;

        return $this;
    }
}

/**
 * @method string getTemplateId()
 * @method $this withTemplateId($value)
 * @method string getApiProduct()
 * @method string getName()
 * @method $this withName($value)
 * @method string getApiRevision()
 */
class CreateRecordPlan extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withApiProduct($value)
    {
        $this->data['ApiProduct'] = $value;
        $this->options['form_params']['ApiProduct'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withApiRevision($value)
    {
        $this->data['ApiRevision'] = $value;
        $this->options['form_params']['ApiRevision'] = $value;

        return $this;
    }
}

/**
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getPushAuthKey()
 * @method $this withPushAuthKey($value)
 * @method string getIotInstanceId()
 * @method $this withIotInstanceId($value)
 * @method string getPushKeyExpireTime()
 * @method $this withPushKeyExpireTime($value)
 * @method string getPullAuthKey()
 * @method $this withPullAuthKey($value)
 * @method string getSubStreamName()
 * @method $this withSubStreamName($value)
 * @method string getProductKey()
 * @method $this withProductKey($value)
 * @method string getApiProduct()
 * @method string getApiRevision()
 * @method string getDeviceName()
 * @method $this withDeviceName($value)
 * @method string getPullKeyExpireTime()
 * @method $this withPullKeyExpireTime($value)
 */
class CreateRtmpDevice extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withApiProduct($value)
    {
        $this->data['ApiProduct'] = $value;
        $this->options['form_params']['ApiProduct'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withApiRevision($value)
    {
        $this->data['ApiRevision'] = $value;
        $this->options['form_params']['ApiRevision'] = $value;

        return $this;
    }
}

/**
 * @method string getIotId()
 * @method $this withIotId($value)
 * @method string getIotInstanceId()
 * @method $this withIotInstanceId($value)
 * @method string getStreamType()
 * @method $this withStreamType($value)
 * @method string getProductKey()
 * @method $this withProductKey($value)
 * @method string getJobType()
 * @method $this withJobType($value)
 * @method string getPushUrl()
 * @method $this withPushUrl($value)
 * @method string getApiProduct()
 * @method string getApiRevision()
 * @method string getDeviceName()
 * @method $this withDeviceName($value)
 */
class CreateStreamPushJob extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withApiProduct($value)
    {
        $this->data['ApiProduct'] = $value;
        $this->options['form_params']['ApiProduct'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withApiRevision($value)
    {
        $this->data['ApiRevision'] = $value;
        $this->options['form_params']['ApiRevision'] = $value;

        return $this;
    }
}

/**
 * @method string getIotId()
 * @method $this withIotId($value)
 * @method string getIotInstanceId()
 * @method $this withIotInstanceId($value)
 * @method string getStreamType()
 * @method $this withStreamType($value)
 * @method string getProductKey()
 * @method $this withProductKey($value)
 * @method string getSnapshotInterval()
 * @method $this withSnapshotInterval($value)
 * @method string getApiProduct()
 * @method string getApiRevision()
 * @method string getDeviceName()
 * @method $this withDeviceName($value)
 */
class CreateStreamSnapshotJob extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withApiProduct($value)
    {
        $this->data['ApiProduct'] = $value;
        $this->options['form_params']['ApiProduct'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withApiRevision($value)
    {
        $this->data['ApiRevision'] = $value;
        $this->options['form_params']['ApiRevision'] = $value;

        return $this;
    }
}

/**
 * @method array getTimeSections()
 * @method string getAllDay()
 * @method $this withAllDay($value)
 * @method string getApiProduct()
 * @method string getName()
 * @method $this withName($value)
 * @method string getApiRevision()
 */
class CreateTimeTemplate extends Rpc
{

    /**
     * @param array $timeSections
     *
     * @return $this
     */
	public function withTimeSections(array $timeSections)
	{
	    $this->data['TimeSections'] = $timeSections;
		foreach ($timeSections as $depth1 => $depth1Value) {
			if(isset($depth1Value['DayOfWeek'])){
				$this->options['query']['TimeSections.' . ($depth1 + 1) . '.DayOfWeek'] = $depth1Value['DayOfWeek'];
			}
			if(isset($depth1Value['Begin'])){
				$this->options['query']['TimeSections.' . ($depth1 + 1) . '.Begin'] = $depth1Value['Begin'];
			}
			if(isset($depth1Value['End'])){
				$this->options['query']['TimeSections.' . ($depth1 + 1) . '.End'] = $depth1Value['End'];
			}
		}

		return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withApiProduct($value)
    {
        $this->data['ApiProduct'] = $value;
        $this->options['form_params']['ApiProduct'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withApiRevision($value)
    {
        $this->data['ApiRevision'] = $value;
        $this->options['form_params']['ApiRevision'] = $value;

        return $this;
    }
}

/**
 * @method string getApiProduct()
 * @method string getApiRevision()
 * @method string getPlanId()
 * @method $this withPlanId($value)
 */
class DeleteEventRecordPlan extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withApiProduct($value)
    {
        $this->data['ApiProduct'] = $value;
        $this->options['form_params']['ApiProduct'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withApiRevision($value)
    {
        $this->data['ApiRevision'] = $value;
        $this->options['form_params']['ApiRevision'] = $value;

        return $this;
    }
}

/**
 * @method string getIotId()
 * @method $this withIotId($value)
 * @method string getIotInstanceId()
 * @method $this withIotInstanceId($value)
 * @method string getStreamType()
 * @method $this withStreamType($value)
 * @method string getProductKey()
 * @method $this withProductKey($value)
 * @method string getApiProduct()
 * @method string getApiRevision()
 * @method string getDeviceName()
 * @method $this withDeviceName($value)
 */
class DeleteEventRecordPlanDevice extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withApiProduct($value)
    {
        $this->data['ApiProduct'] = $value;
        $this->options['form_params']['ApiProduct'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withApiRevision($value)
    {
        $this->data['ApiRevision'] = $value;
        $this->options['form_params']['ApiRevision'] = $value;

        return $this;
    }
}

/**
 * @method string getIsolationId()
 * @method $this withIsolationId($value)
 * @method string getDeviceGroupId()
 * @method $this withDeviceGroupId($value)
 * @method string getApiProduct()
 * @method string getApiRevision()
 */
class DeleteFaceDeviceGroup extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withApiProduct($value)
    {
        $this->data['ApiProduct'] = $value;
        $this->options['form_params']['ApiProduct'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withApiRevision($value)
    {
        $this->data['ApiRevision'] = $value;
        $this->options['form_params']['ApiRevision'] = $value;

        return $this;
    }
}

/**
 * @method string getIsolationId()
 * @method $this withIsolationId($value)
 * @method string getUserId()
 * @method $this withUserId($value)
 * @method string getApiProduct()
 * @method string getApiRevision()
 */
class DeleteFaceUser extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withApiProduct($value)
    {
        $this->data['ApiProduct'] = $value;
        $this->options['form_params']['ApiProduct'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withApiRevision($value)
    {
        $this->data['ApiRevision'] = $value;
        $this->options['form_params']['ApiRevision'] = $value;

        return $this;
    }
}

/**
 * @method string getIsolationId()
 * @method $this withIsolationId($value)
 * @method string getUserGroupId()
 * @method $this withUserGroupId($value)
 * @method string getApiProduct()
 * @method string getApiRevision()
 */
class DeleteFaceUserGroup extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withApiProduct($value)
    {
        $this->data['ApiProduct'] = $value;
        $this->options['form_params']['ApiProduct'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withApiRevision($value)
    {
        $this->data['ApiRevision'] = $value;
        $this->options['form_params']['ApiRevision'] = $value;

        return $this;
    }
}

/**
 * @method string getIsolationId()
 * @method $this withIsolationId($value)
 * @method string getControlId()
 * @method $this withControlId($value)
 * @method string getApiProduct()
 * @method string getApiRevision()
 */
class DeleteFaceUserGroupAndDeviceGroupRelation extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withApiProduct($value)
    {
        $this->data['ApiProduct'] = $value;
        $this->options['form_params']['ApiProduct'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withApiRevision($value)
    {
        $this->data['ApiRevision'] = $value;
        $this->options['form_params']['ApiRevision'] = $value;

        return $this;
    }
}

/**
 * @method string getIsolationId()
 * @method $this withIsolationId($value)
 * @method string getUserId()
 * @method $this withUserId($value)
 * @method string getApiProduct()
 * @method string getApiRevision()
 * @method string getFacePicMd5()
 * @method $this withFacePicMd5($value)
 */
class DeleteFaceUserPicture extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withApiProduct($value)
    {
        $this->data['ApiProduct'] = $value;
        $this->options['form_params']['ApiProduct'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withApiRevision($value)
    {
        $this->data['ApiRevision'] = $value;
        $this->options['form_params']['ApiRevision'] = $value;

        return $this;
    }
}

/**
 * @method string getIotId()
 * @method $this withIotId($value)
 * @method string getIotInstanceId()
 * @method $this withIotInstanceId($value)
 * @method string getProductKey()
 * @method $this withProductKey($value)
 * @method string getApiProduct()
 * @method string getApiRevision()
 * @method string getDeviceName()
 * @method $this withDeviceName($value)
 */
class DeleteGbDevice extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withApiProduct($value)
    {
        $this->data['ApiProduct'] = $value;
        $this->options['form_params']['ApiProduct'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withApiRevision($value)
    {
        $this->data['ApiRevision'] = $value;
        $this->options['form_params']['ApiRevision'] = $value;

        return $this;
    }
}

/**
 * @method string getJobId()
 * @method $this withJobId($value)
 * @method string getIotInstanceId()
 * @method $this withIotInstanceId($value)
 * @method string getApiProduct()
 * @method string getApiRevision()
 */
class DeleteLocalFileUploadJob extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withApiProduct($value)
    {
        $this->data['ApiProduct'] = $value;
        $this->options['form_params']['ApiProduct'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withApiRevision($value)
    {
        $this->data['ApiRevision'] = $value;
        $this->options['form_params']['ApiRevision'] = $value;

        return $this;
    }
}

/**
 * @method string getIotId()
 * @method $this withIotId($value)
 * @method string getIotInstanceId()
 * @method $this withIotInstanceId($value)
 * @method array getPictureIdList()
 * @method string getProductKey()
 * @method $this withProductKey($value)
 * @method string getApiProduct()
 * @method string getApiRevision()
 * @method string getDeviceName()
 * @method $this withDeviceName($value)
 */
class DeletePicture extends Rpc
{

    /**
     * @param array $pictureIdList
     *
     * @return $this
     */
	public function withPictureIdList(array $pictureIdList)
	{
	    $this->data['PictureIdList'] = $pictureIdList;
		foreach ($pictureIdList as $i => $iValue) {
			$this->options['query']['PictureIdList.' . ($i + 1)] = $iValue;
		}

		return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withApiProduct($value)
    {
        $this->data['ApiProduct'] = $value;
        $this->options['form_params']['ApiProduct'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withApiRevision($value)
    {
        $this->data['ApiRevision'] = $value;
        $this->options['form_params']['ApiRevision'] = $value;

        return $this;
    }
}

/**
 * @method string getIotId()
 * @method $this withIotId($value)
 * @method string getIotInstanceId()
 * @method $this withIotInstanceId($value)
 * @method string getProductKey()
 * @method $this withProductKey($value)
 * @method array getFileNameList()
 * @method string getApiProduct()
 * @method string getApiRevision()
 * @method string getDeviceName()
 * @method $this withDeviceName($value)
 */
class DeleteRecord extends Rpc
{

    /**
     * @param array $fileNameList
     *
     * @return $this
     */
	public function withFileNameList(array $fileNameList)
	{
	    $this->data['FileNameList'] = $fileNameList;
		foreach ($fileNameList as $i => $iValue) {
			$this->options['query']['FileNameList.' . ($i + 1)] = $iValue;
		}

		return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withApiProduct($value)
    {
        $this->data['ApiProduct'] = $value;
        $this->options['form_params']['ApiProduct'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withApiRevision($value)
    {
        $this->data['ApiRevision'] = $value;
        $this->options['form_params']['ApiRevision'] = $value;

        return $this;
    }
}

/**
 * @method string getApiProduct()
 * @method string getApiRevision()
 * @method string getPlanId()
 * @method $this withPlanId($value)
 */
class DeleteRecordPlan extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withApiProduct($value)
    {
        $this->data['ApiProduct'] = $value;
        $this->options['form_params']['ApiProduct'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withApiRevision($value)
    {
        $this->data['ApiRevision'] = $value;
        $this->options['form_params']['ApiRevision'] = $value;

        return $this;
    }
}

/**
 * @method string getIotId()
 * @method $this withIotId($value)
 * @method string getIotInstanceId()
 * @method $this withIotInstanceId($value)
 * @method string getStreamType()
 * @method $this withStreamType($value)
 * @method string getProductKey()
 * @method $this withProductKey($value)
 * @method string getApiProduct()
 * @method string getApiRevision()
 * @method string getDeviceName()
 * @method $this withDeviceName($value)
 */
class DeleteRecordPlanDevice extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withApiProduct($value)
    {
        $this->data['ApiProduct'] = $value;
        $this->options['form_params']['ApiProduct'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withApiRevision($value)
    {
        $this->data['ApiRevision'] = $value;
        $this->options['form_params']['ApiRevision'] = $value;

        return $this;
    }
}

/**
 * @method string getIotId()
 * @method $this withIotId($value)
 * @method string getIotInstanceId()
 * @method $this withIotInstanceId($value)
 * @method string getProductKey()
 * @method $this withProductKey($value)
 * @method string getApiProduct()
 * @method string getApiRevision()
 * @method string getDeviceName()
 * @method $this withDeviceName($value)
 */
class DeleteRtmpDevice extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withApiProduct($value)
    {
        $this->data['ApiProduct'] = $value;
        $this->options['form_params']['ApiProduct'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withApiRevision($value)
    {
        $this->data['ApiRevision'] = $value;
        $this->options['form_params']['ApiRevision'] = $value;

        return $this;
    }
}

/**
 * @method string getType()
 * @method $this withType($value)
 * @method string getIotId()
 * @method $this withIotId($value)
 * @method string getIotInstanceId()
 * @method $this withIotInstanceId($value)
 * @method string getProductKey()
 * @method $this withProductKey($value)
 * @method string getApiProduct()
 * @method string getApiRevision()
 * @method string getDeviceName()
 * @method $this withDeviceName($value)
 */
class DeleteRtmpKey extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withApiProduct($value)
    {
        $this->data['ApiProduct'] = $value;
        $this->options['form_params']['ApiProduct'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withApiRevision($value)
    {
        $this->data['ApiRevision'] = $value;
        $this->options['form_params']['ApiRevision'] = $value;

        return $this;
    }
}

/**
 * @method string getJobId()
 * @method $this withJobId($value)
 * @method string getIotId()
 * @method $this withIotId($value)
 * @method string getIotInstanceId()
 * @method $this withIotInstanceId($value)
 * @method string getProductKey()
 * @method $this withProductKey($value)
 * @method string getApiProduct()
 * @method string getApiRevision()
 * @method string getDeviceName()
 * @method $this withDeviceName($value)
 */
class DeleteStreamPushJob extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withApiProduct($value)
    {
        $this->data['ApiProduct'] = $value;
        $this->options['form_params']['ApiProduct'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withApiRevision($value)
    {
        $this->data['ApiRevision'] = $value;
        $this->options['form_params']['ApiRevision'] = $value;

        return $this;
    }
}

/**
 * @method string getIotId()
 * @method $this withIotId($value)
 * @method string getIotInstanceId()
 * @method $this withIotInstanceId($value)
 * @method string getStreamType()
 * @method $this withStreamType($value)
 * @method string getProductKey()
 * @method $this withProductKey($value)
 * @method string getApiProduct()
 * @method string getApiRevision()
 * @method string getDeviceName()
 * @method $this withDeviceName($value)
 */
class DeleteStreamSnapshotJob extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withApiProduct($value)
    {
        $this->data['ApiProduct'] = $value;
        $this->options['form_params']['ApiProduct'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withApiRevision($value)
    {
        $this->data['ApiRevision'] = $value;
        $this->options['form_params']['ApiRevision'] = $value;

        return $this;
    }
}

/**
 * @method string getTemplateId()
 * @method $this withTemplateId($value)
 * @method string getApiProduct()
 * @method string getApiRevision()
 */
class DeleteTimeTemplate extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withApiProduct($value)
    {
        $this->data['ApiProduct'] = $value;
        $this->options['form_params']['ApiProduct'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withApiRevision($value)
    {
        $this->data['ApiRevision'] = $value;
        $this->options['form_params']['ApiRevision'] = $value;

        return $this;
    }
}

/**
 * @method string getFacePicUrl()
 * @method $this withFacePicUrl($value)
 * @method string getApiProduct()
 * @method string getApiRevision()
 */
class DetectUserFaceByUrl extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withApiProduct($value)
    {
        $this->data['ApiProduct'] = $value;
        $this->options['form_params']['ApiProduct'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withApiRevision($value)
    {
        $this->data['ApiRevision'] = $value;
        $this->options['form_params']['ApiRevision'] = $value;

        return $this;
    }
}

/**
 * @method string getIotId()
 * @method $this withIotId($value)
 * @method string getIotInstanceId()
 * @method $this withIotInstanceId($value)
 * @method string getProductKey()
 * @method $this withProductKey($value)
 * @method string getSubDeviceId()
 * @method $this withSubDeviceId($value)
 * @method string getApiProduct()
 * @method string getApiRevision()
 * @method string getDeviceName()
 * @method $this withDeviceName($value)
 */
class EnableGbSubDevice extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withApiProduct($value)
    {
        $this->data['ApiProduct'] = $value;
        $this->options['form_params']['ApiProduct'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withApiRevision($value)
    {
        $this->data['ApiRevision'] = $value;
        $this->options['form_params']['ApiRevision'] = $value;

        return $this;
    }
}

/**
 * @method string getJobId()
 * @method $this withJobId($value)
 * @method string getApiProduct()
 * @method string getApiRevision()
 * @method string getAppInstanceId()
 * @method $this withAppInstanceId($value)
 */
class GetPictureSearchJobStatus extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withApiProduct($value)
    {
        $this->data['ApiProduct'] = $value;
        $this->options['form_params']['ApiProduct'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withApiRevision($value)
    {
        $this->data['ApiRevision'] = $value;
        $this->options['form_params']['ApiRevision'] = $value;

        return $this;
    }
}

/**
 * @method string getThreshold()
 * @method $this withThreshold($value)
 * @method string getSearchPicUrl()
 * @method $this withSearchPicUrl($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getPictureSearchType()
 * @method $this withPictureSearchType($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getCurrentPage()
 * @method $this withCurrentPage($value)
 * @method string getContainPicUrl()
 * @method $this withContainPicUrl($value)
 * @method string getApiProduct()
 * @method string getApiRevision()
 * @method string getAppInstanceId()
 * @method $this withAppInstanceId($value)
 */
class PictureSearchPicture extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withApiProduct($value)
    {
        $this->data['ApiProduct'] = $value;
        $this->options['form_params']['ApiProduct'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withApiRevision($value)
    {
        $this->data['ApiRevision'] = $value;
        $this->options['form_params']['ApiRevision'] = $value;

        return $this;
    }
}

/**
 * @method string getActionType()
 * @method $this withActionType($value)
 * @method string getSubProductKey()
 * @method $this withSubProductKey($value)
 * @method string getPlateNo()
 * @method $this withPlateNo($value)
 * @method string getIotId()
 * @method $this withIotId($value)
 * @method string getSubDeviceName()
 * @method $this withSubDeviceName($value)
 * @method string getIotInstanceId()
 * @method $this withIotInstanceId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getBeginTime()
 * @method $this withBeginTime($value)
 * @method string getCurrentPage()
 * @method $this withCurrentPage($value)
 * @method string getAreaIndex()
 * @method $this withAreaIndex($value)
 * @method string getApiProduct()
 * @method string getApiRevision()
 * @method string getSubIotId()
 * @method $this withSubIotId($value)
 */
class QueryCarProcessEvents extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withApiProduct($value)
    {
        $this->data['ApiProduct'] = $value;
        $this->options['form_params']['ApiProduct'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withApiRevision($value)
    {
        $this->data['ApiRevision'] = $value;
        $this->options['form_params']['ApiRevision'] = $value;

        return $this;
    }
}

/**
 * @method string getIotId()
 * @method $this withIotId($value)
 * @method string getIotInstanceId()
 * @method $this withIotInstanceId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getBeginTime()
 * @method $this withBeginTime($value)
 * @method string getCurrentPage()
 * @method $this withCurrentPage($value)
 * @method string getProductKey()
 * @method $this withProductKey($value)
 * @method string getApiProduct()
 * @method string getApiRevision()
 * @method string getDeviceName()
 * @method $this withDeviceName($value)
 * @method string getEventType()
 * @method $this withEventType($value)
 */
class QueryDeviceEvent extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withApiProduct($value)
    {
        $this->data['ApiProduct'] = $value;
        $this->options['form_params']['ApiProduct'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withApiRevision($value)
    {
        $this->data['ApiRevision'] = $value;
        $this->options['form_params']['ApiRevision'] = $value;

        return $this;
    }
}

/**
 * @method string getEventId()
 * @method $this withEventId($value)
 * @method string getIotId()
 * @method $this withIotId($value)
 * @method string getIotInstanceId()
 * @method $this withIotInstanceId($value)
 * @method string getProductKey()
 * @method $this withProductKey($value)
 * @method string getApiProduct()
 * @method string getApiRevision()
 * @method string getDeviceName()
 * @method $this withDeviceName($value)
 */
class QueryDeviceEventPicture extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withApiProduct($value)
    {
        $this->data['ApiProduct'] = $value;
        $this->options['form_params']['ApiProduct'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withApiRevision($value)
    {
        $this->data['ApiRevision'] = $value;
        $this->options['form_params']['ApiRevision'] = $value;

        return $this;
    }
}

/**
 * @method string getEventId()
 * @method $this withEventId($value)
 * @method string getIotId()
 * @method $this withIotId($value)
 * @method string getIotInstanceId()
 * @method $this withIotInstanceId($value)
 * @method string getProductKey()
 * @method $this withProductKey($value)
 * @method string getApiProduct()
 * @method string getApiRevision()
 * @method string getDeviceName()
 * @method $this withDeviceName($value)
 */
class QueryDeviceEventRecord extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withApiProduct($value)
    {
        $this->data['ApiProduct'] = $value;
        $this->options['form_params']['ApiProduct'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withApiRevision($value)
    {
        $this->data['ApiRevision'] = $value;
        $this->options['form_params']['ApiRevision'] = $value;

        return $this;
    }
}

/**
 * @method string getPictureType()
 * @method $this withPictureType($value)
 * @method string getThumbWidth()
 * @method $this withThumbWidth($value)
 * @method string getIotId()
 * @method $this withIotId($value)
 * @method string getIotInstanceId()
 * @method $this withIotInstanceId($value)
 * @method array getPictureIdList()
 * @method string getExpireTime()
 * @method $this withExpireTime($value)
 * @method string getProductKey()
 * @method $this withProductKey($value)
 * @method string getApiProduct()
 * @method string getApiRevision()
 * @method string getDeviceName()
 * @method $this withDeviceName($value)
 */
class QueryDevicePictureByList extends Rpc
{

    /**
     * @param array $pictureIdList
     *
     * @return $this
     */
	public function withPictureIdList(array $pictureIdList)
	{
	    $this->data['PictureIdList'] = $pictureIdList;
		foreach ($pictureIdList as $i => $iValue) {
			$this->options['query']['PictureIdList.' . ($i + 1)] = $iValue;
		}

		return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withApiProduct($value)
    {
        $this->data['ApiProduct'] = $value;
        $this->options['form_params']['ApiProduct'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withApiRevision($value)
    {
        $this->data['ApiRevision'] = $value;
        $this->options['form_params']['ApiRevision'] = $value;

        return $this;
    }
}

/**
 * @method string getPictureType()
 * @method $this withPictureType($value)
 * @method string getThumbWidth()
 * @method $this withThumbWidth($value)
 * @method string getIotId()
 * @method $this withIotId($value)
 * @method string getIotInstanceId()
 * @method $this withIotInstanceId($value)
 * @method string getExpireTime()
 * @method $this withExpireTime($value)
 * @method string getProductKey()
 * @method $this withProductKey($value)
 * @method string getApiProduct()
 * @method string getApiRevision()
 * @method string getDeviceName()
 * @method $this withDeviceName($value)
 * @method string getCaptureId()
 * @method $this withCaptureId($value)
 */
class QueryDevicePictureFile extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withApiProduct($value)
    {
        $this->data['ApiProduct'] = $value;
        $this->options['form_params']['ApiProduct'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withApiRevision($value)
    {
        $this->data['ApiRevision'] = $value;
        $this->options['form_params']['ApiRevision'] = $value;

        return $this;
    }
}

/**
 * @method string getIotId()
 * @method $this withIotId($value)
 * @method string getApiProduct()
 * @method string getApiRevision()
 */
class QueryDevicePictureLifeCycle extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withApiProduct($value)
    {
        $this->data['ApiProduct'] = $value;
        $this->options['form_params']['ApiProduct'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withApiRevision($value)
    {
        $this->data['ApiRevision'] = $value;
        $this->options['form_params']['ApiRevision'] = $value;

        return $this;
    }
}

/**
 * @method array getDeviceList()
 * @method string getApiProduct()
 * @method string getApiRevision()
 */
class QueryDeviceRecordLifeCycle extends Rpc
{

    /**
     * @param array $deviceList
     *
     * @return $this
     */
	public function withDeviceList(array $deviceList)
	{
	    $this->data['DeviceList'] = $deviceList;
		foreach ($deviceList as $i => $iValue) {
			$this->options['query']['DeviceList.' . ($i + 1)] = $iValue;
		}

		return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withApiProduct($value)
    {
        $this->data['ApiProduct'] = $value;
        $this->options['form_params']['ApiProduct'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withApiRevision($value)
    {
        $this->data['ApiRevision'] = $value;
        $this->options['form_params']['ApiRevision'] = $value;

        return $this;
    }
}

/**
 * @method string getScheme()
 * @method $this withScheme($value)
 * @method string getPlayUnLimited()
 * @method $this withPlayUnLimited($value)
 * @method string getEncryptType()
 * @method $this withEncryptType($value)
 * @method string getIotId()
 * @method $this withIotId($value)
 * @method string getIotInstanceId()
 * @method $this withIotInstanceId($value)
 * @method string getShouldEncrypt()
 * @method $this withShouldEncrypt($value)
 * @method string getEnableStun()
 * @method $this withEnableStun($value)
 * @method string getProductKey()
 * @method $this withProductKey($value)
 * @method string getFileName()
 * @method $this withFileName($value)
 * @method string getSeekTime()
 * @method $this withSeekTime($value)
 * @method string getApiProduct()
 * @method string getApiRevision()
 * @method string getDeviceName()
 * @method $this withDeviceName($value)
 * @method string getUrlValidDuration()
 * @method $this withUrlValidDuration($value)
 */
class QueryDeviceVodUrl extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withApiProduct($value)
    {
        $this->data['ApiProduct'] = $value;
        $this->options['form_params']['ApiProduct'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withApiRevision($value)
    {
        $this->data['ApiRevision'] = $value;
        $this->options['form_params']['ApiRevision'] = $value;

        return $this;
    }
}

/**
 * @method string getScheme()
 * @method $this withScheme($value)
 * @method string getPlayUnLimited()
 * @method $this withPlayUnLimited($value)
 * @method string getEncryptType()
 * @method $this withEncryptType($value)
 * @method string getIotId()
 * @method $this withIotId($value)
 * @method string getIotInstanceId()
 * @method $this withIotInstanceId($value)
 * @method string getShouldEncrypt()
 * @method $this withShouldEncrypt($value)
 * @method string getEnableStun()
 * @method $this withEnableStun($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getBeginTime()
 * @method $this withBeginTime($value)
 * @method string getProductKey()
 * @method $this withProductKey($value)
 * @method string getSeekTime()
 * @method $this withSeekTime($value)
 * @method string getApiProduct()
 * @method string getApiRevision()
 * @method string getDeviceName()
 * @method $this withDeviceName($value)
 * @method string getUrlValidDuration()
 * @method $this withUrlValidDuration($value)
 */
class QueryDeviceVodUrlByTime extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withApiProduct($value)
    {
        $this->data['ApiProduct'] = $value;
        $this->options['form_params']['ApiProduct'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withApiRevision($value)
    {
        $this->data['ApiRevision'] = $value;
        $this->options['form_params']['ApiRevision'] = $value;

        return $this;
    }
}

/**
 * @method string getApiProduct()
 * @method string getApiRevision()
 * @method string getPlanId()
 * @method $this withPlanId($value)
 */
class QueryEventRecordPlanDetail extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withApiProduct($value)
    {
        $this->data['ApiProduct'] = $value;
        $this->options['form_params']['ApiProduct'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withApiRevision($value)
    {
        $this->data['ApiRevision'] = $value;
        $this->options['form_params']['ApiRevision'] = $value;

        return $this;
    }
}

/**
 * @method string getIotId()
 * @method $this withIotId($value)
 * @method string getIotInstanceId()
 * @method $this withIotInstanceId($value)
 * @method string getStreamType()
 * @method $this withStreamType($value)
 * @method string getProductKey()
 * @method $this withProductKey($value)
 * @method string getApiProduct()
 * @method string getApiRevision()
 * @method string getDeviceName()
 * @method $this withDeviceName($value)
 */
class QueryEventRecordPlanDeviceByDevice extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withApiProduct($value)
    {
        $this->data['ApiProduct'] = $value;
        $this->options['form_params']['ApiProduct'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withApiRevision($value)
    {
        $this->data['ApiRevision'] = $value;
        $this->options['form_params']['ApiRevision'] = $value;

        return $this;
    }
}

/**
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getCurrentPage()
 * @method $this withCurrentPage($value)
 * @method string getApiProduct()
 * @method string getApiRevision()
 * @method string getPlanId()
 * @method $this withPlanId($value)
 */
class QueryEventRecordPlanDeviceByPlan extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withApiProduct($value)
    {
        $this->data['ApiProduct'] = $value;
        $this->options['form_params']['ApiProduct'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withApiRevision($value)
    {
        $this->data['ApiRevision'] = $value;
        $this->options['form_params']['ApiRevision'] = $value;

        return $this;
    }
}

/**
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getCurrentPage()
 * @method $this withCurrentPage($value)
 * @method string getApiProduct()
 * @method string getApiRevision()
 */
class QueryEventRecordPlans extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withApiProduct($value)
    {
        $this->data['ApiProduct'] = $value;
        $this->options['form_params']['ApiProduct'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withApiRevision($value)
    {
        $this->data['ApiRevision'] = $value;
        $this->options['form_params']['ApiRevision'] = $value;

        return $this;
    }
}

/**
 * @method string getIsolationId()
 * @method $this withIsolationId($value)
 * @method string getIotInstanceId()
 * @method $this withIotInstanceId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getPageNo()
 * @method $this withPageNo($value)
 * @method string getApiProduct()
 * @method string getApiRevision()
 */
class QueryFaceAllDeviceGroup extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withApiProduct($value)
    {
        $this->data['ApiProduct'] = $value;
        $this->options['form_params']['ApiProduct'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withApiRevision($value)
    {
        $this->data['ApiRevision'] = $value;
        $this->options['form_params']['ApiRevision'] = $value;

        return $this;
    }
}

/**
 * @method string getIsolationId()
 * @method $this withIsolationId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getPageNo()
 * @method $this withPageNo($value)
 * @method string getApiProduct()
 * @method string getApiRevision()
 */
class QueryFaceAllUserGroup extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withApiProduct($value)
    {
        $this->data['ApiProduct'] = $value;
        $this->options['form_params']['ApiProduct'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withApiRevision($value)
    {
        $this->data['ApiRevision'] = $value;
        $this->options['form_params']['ApiRevision'] = $value;

        return $this;
    }
}

/**
 * @method string getIsolationId()
 * @method $this withIsolationId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getPageNo()
 * @method $this withPageNo($value)
 * @method string getApiProduct()
 * @method string getApiRevision()
 */
class QueryFaceAllUserGroupAndDeviceGroupRelation extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withApiProduct($value)
    {
        $this->data['ApiProduct'] = $value;
        $this->options['form_params']['ApiProduct'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withApiRevision($value)
    {
        $this->data['ApiRevision'] = $value;
        $this->options['form_params']['ApiRevision'] = $value;

        return $this;
    }
}

/**
 * @method string getIsolationId()
 * @method $this withIsolationId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getUserGroupId()
 * @method $this withUserGroupId($value)
 * @method string getPageNo()
 * @method $this withPageNo($value)
 * @method string getApiProduct()
 * @method string getApiRevision()
 */
class QueryFaceAllUserIdsByGroupId extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withApiProduct($value)
    {
        $this->data['ApiProduct'] = $value;
        $this->options['form_params']['ApiProduct'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withApiRevision($value)
    {
        $this->data['ApiRevision'] = $value;
        $this->options['form_params']['ApiRevision'] = $value;

        return $this;
    }
}

/**
 * @method string getIsolationId()
 * @method $this withIsolationId($value)
 * @method string getUserId()
 * @method $this withUserId($value)
 * @method string getApiProduct()
 * @method string getApiRevision()
 */
class QueryFaceCustomUserIdByUserId extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withApiProduct($value)
    {
        $this->data['ApiProduct'] = $value;
        $this->options['form_params']['ApiProduct'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withApiRevision($value)
    {
        $this->data['ApiRevision'] = $value;
        $this->options['form_params']['ApiRevision'] = $value;

        return $this;
    }
}

/**
 * @method string getIsolationId()
 * @method $this withIsolationId($value)
 * @method string getIotInstanceId()
 * @method $this withIotInstanceId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getProductKey()
 * @method $this withProductKey($value)
 * @method string getPageNo()
 * @method $this withPageNo($value)
 * @method string getApiProduct()
 * @method string getApiRevision()
 * @method string getDeviceName()
 * @method $this withDeviceName($value)
 */
class QueryFaceDeviceGroupsByDevice extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withApiProduct($value)
    {
        $this->data['ApiProduct'] = $value;
        $this->options['form_params']['ApiProduct'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withApiRevision($value)
    {
        $this->data['ApiRevision'] = $value;
        $this->options['form_params']['ApiRevision'] = $value;

        return $this;
    }
}

/**
 * @method string getIsolationId()
 * @method $this withIsolationId($value)
 * @method string getUserId()
 * @method $this withUserId($value)
 * @method string getApiProduct()
 * @method string getApiRevision()
 */
class QueryFaceUser extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withApiProduct($value)
    {
        $this->data['ApiProduct'] = $value;
        $this->options['form_params']['ApiProduct'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withApiRevision($value)
    {
        $this->data['ApiRevision'] = $value;
        $this->options['form_params']['ApiRevision'] = $value;

        return $this;
    }
}

/**
 * @method array getUserIdList()
 * @method string getIsolationId()
 * @method $this withIsolationId($value)
 * @method string getApiProduct()
 * @method string getApiRevision()
 */
class QueryFaceUserBatch extends Rpc
{

    /**
     * @param array $userIdList
     *
     * @return $this
     */
	public function withUserIdList(array $userIdList)
	{
	    $this->data['UserIdList'] = $userIdList;
		foreach ($userIdList as $i => $iValue) {
			$this->options['query']['UserIdList.' . ($i + 1)] = $iValue;
		}

		return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withApiProduct($value)
    {
        $this->data['ApiProduct'] = $value;
        $this->options['form_params']['ApiProduct'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withApiRevision($value)
    {
        $this->data['ApiRevision'] = $value;
        $this->options['form_params']['ApiRevision'] = $value;

        return $this;
    }
}

/**
 * @method string getIsolationId()
 * @method $this withIsolationId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getParams()
 * @method $this withParams($value)
 * @method string getPageNo()
 * @method $this withPageNo($value)
 * @method string getApiProduct()
 * @method string getName()
 * @method $this withName($value)
 * @method string getApiRevision()
 */
class QueryFaceUserByName extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withApiProduct($value)
    {
        $this->data['ApiProduct'] = $value;
        $this->options['form_params']['ApiProduct'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withApiRevision($value)
    {
        $this->data['ApiRevision'] = $value;
        $this->options['form_params']['ApiRevision'] = $value;

        return $this;
    }
}

/**
 * @method string getIsolationId()
 * @method $this withIsolationId($value)
 * @method string getUserId()
 * @method $this withUserId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getPageNo()
 * @method $this withPageNo($value)
 * @method string getApiProduct()
 * @method string getApiRevision()
 */
class QueryFaceUserGroup extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withApiProduct($value)
    {
        $this->data['ApiProduct'] = $value;
        $this->options['form_params']['ApiProduct'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withApiRevision($value)
    {
        $this->data['ApiRevision'] = $value;
        $this->options['form_params']['ApiRevision'] = $value;

        return $this;
    }
}

/**
 * @method string getIsolationId()
 * @method $this withIsolationId($value)
 * @method string getControlId()
 * @method $this withControlId($value)
 * @method string getApiProduct()
 * @method string getApiRevision()
 */
class QueryFaceUserGroupAndDeviceGroupRelation extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withApiProduct($value)
    {
        $this->data['ApiProduct'] = $value;
        $this->options['form_params']['ApiProduct'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withApiRevision($value)
    {
        $this->data['ApiRevision'] = $value;
        $this->options['form_params']['ApiRevision'] = $value;

        return $this;
    }
}

/**
 * @method string getIsolationId()
 * @method $this withIsolationId($value)
 * @method string getCustomUserId()
 * @method $this withCustomUserId($value)
 * @method string getApiProduct()
 * @method string getApiRevision()
 */
class QueryFaceUserIdByCustomUserId extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withApiProduct($value)
    {
        $this->data['ApiProduct'] = $value;
        $this->options['form_params']['ApiProduct'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withApiRevision($value)
    {
        $this->data['ApiRevision'] = $value;
        $this->options['form_params']['ApiRevision'] = $value;

        return $this;
    }
}

/**
 * @method string getIotId()
 * @method $this withIotId($value)
 * @method string getIotInstanceId()
 * @method $this withIotInstanceId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getProductKey()
 * @method $this withProductKey($value)
 * @method string getApiProduct()
 * @method string getApiRevision()
 * @method string getDeviceName()
 * @method $this withDeviceName($value)
 * @method string getPageStart()
 * @method $this withPageStart($value)
 */
class QueryGbSubDeviceList extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withApiProduct($value)
    {
        $this->data['ApiProduct'] = $value;
        $this->options['form_params']['ApiProduct'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withApiRevision($value)
    {
        $this->data['ApiRevision'] = $value;
        $this->options['form_params']['ApiRevision'] = $value;

        return $this;
    }
}

/**
 * @method string getScheme()
 * @method $this withScheme($value)
 * @method string getPlayUnLimited()
 * @method $this withPlayUnLimited($value)
 * @method string getEncryptType()
 * @method $this withEncryptType($value)
 * @method string getCacheDuration()
 * @method $this withCacheDuration($value)
 * @method string getIotId()
 * @method $this withIotId($value)
 * @method string getForceIFrame()
 * @method $this withForceIFrame($value)
 * @method string getIotInstanceId()
 * @method $this withIotInstanceId($value)
 * @method string getShouldEncrypt()
 * @method $this withShouldEncrypt($value)
 * @method string getEnableStun()
 * @method $this withEnableStun($value)
 * @method string getStreamType()
 * @method $this withStreamType($value)
 * @method string getProductKey()
 * @method $this withProductKey($value)
 * @method string getApiProduct()
 * @method string getApiRevision()
 * @method string getDeviceName()
 * @method $this withDeviceName($value)
 * @method string getUrlValidDuration()
 * @method $this withUrlValidDuration($value)
 */
class QueryLiveStreaming extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withApiProduct($value)
    {
        $this->data['ApiProduct'] = $value;
        $this->options['form_params']['ApiProduct'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withApiRevision($value)
    {
        $this->data['ApiRevision'] = $value;
        $this->options['form_params']['ApiRevision'] = $value;

        return $this;
    }
}

/**
 * @method string getJobId()
 * @method $this withJobId($value)
 * @method string getIotInstanceId()
 * @method $this withIotInstanceId($value)
 * @method string getApiProduct()
 * @method string getApiRevision()
 */
class QueryLocalFileUploadJob extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withApiProduct($value)
    {
        $this->data['ApiProduct'] = $value;
        $this->options['form_params']['ApiProduct'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withApiRevision($value)
    {
        $this->data['ApiRevision'] = $value;
        $this->options['form_params']['ApiRevision'] = $value;

        return $this;
    }
}

/**
 * @method string getIotId()
 * @method $this withIotId($value)
 * @method string getIotInstanceId()
 * @method $this withIotInstanceId($value)
 * @method string getProductKey()
 * @method $this withProductKey($value)
 * @method string getMonth()
 * @method $this withMonth($value)
 * @method string getApiProduct()
 * @method string getApiRevision()
 * @method string getDeviceName()
 * @method $this withDeviceName($value)
 */
class QueryMonthRecord extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withApiProduct($value)
    {
        $this->data['ApiProduct'] = $value;
        $this->options['form_params']['ApiProduct'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withApiRevision($value)
    {
        $this->data['ApiRevision'] = $value;
        $this->options['form_params']['ApiRevision'] = $value;

        return $this;
    }
}

/**
 * @method string getPictureSource()
 * @method $this withPictureSource($value)
 * @method string getPictureType()
 * @method $this withPictureType($value)
 * @method string getIotId()
 * @method $this withIotId($value)
 * @method string getIotInstanceId()
 * @method $this withIotInstanceId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getBeginTime()
 * @method $this withBeginTime($value)
 * @method string getCurrentPage()
 * @method $this withCurrentPage($value)
 * @method string getProductKey()
 * @method $this withProductKey($value)
 * @method string getApiProduct()
 * @method string getApiRevision()
 * @method string getDeviceName()
 * @method $this withDeviceName($value)
 */
class QueryPictureFiles extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withApiProduct($value)
    {
        $this->data['ApiProduct'] = $value;
        $this->options['form_params']['ApiProduct'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withApiRevision($value)
    {
        $this->data['ApiRevision'] = $value;
        $this->options['form_params']['ApiRevision'] = $value;

        return $this;
    }
}

/**
 * @method string getIotInstanceId()
 * @method $this withIotInstanceId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getCurrentPage()
 * @method $this withCurrentPage($value)
 * @method string getApiProduct()
 * @method string getApiRevision()
 * @method string getAppInstanceId()
 * @method $this withAppInstanceId($value)
 */
class QueryPictureSearchAiboxes extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withApiProduct($value)
    {
        $this->data['ApiProduct'] = $value;
        $this->options['form_params']['ApiProduct'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withApiRevision($value)
    {
        $this->data['ApiRevision'] = $value;
        $this->options['form_params']['ApiRevision'] = $value;

        return $this;
    }
}

/**
 * @method string getIotInstanceId()
 * @method $this withIotInstanceId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getCurrentPage()
 * @method $this withCurrentPage($value)
 * @method string getApiProduct()
 * @method string getApiRevision()
 */
class QueryPictureSearchApps extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withApiProduct($value)
    {
        $this->data['ApiProduct'] = $value;
        $this->options['form_params']['ApiProduct'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withApiRevision($value)
    {
        $this->data['ApiRevision'] = $value;
        $this->options['form_params']['ApiRevision'] = $value;

        return $this;
    }
}

/**
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getCurrentPage()
 * @method $this withCurrentPage($value)
 * @method string getApiProduct()
 * @method string getApiRevision()
 * @method string getAppInstanceId()
 * @method $this withAppInstanceId($value)
 */
class QueryPictureSearchDevices extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withApiProduct($value)
    {
        $this->data['ApiProduct'] = $value;
        $this->options['form_params']['ApiProduct'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withApiRevision($value)
    {
        $this->data['ApiRevision'] = $value;
        $this->options['form_params']['ApiRevision'] = $value;

        return $this;
    }
}

/**
 * @method string getJobStatus()
 * @method $this withJobStatus($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getCurrentPage()
 * @method $this withCurrentPage($value)
 * @method string getApiProduct()
 * @method string getApiRevision()
 * @method string getAppInstanceId()
 * @method $this withAppInstanceId($value)
 */
class QueryPictureSearchJob extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withApiProduct($value)
    {
        $this->data['ApiProduct'] = $value;
        $this->options['form_params']['ApiProduct'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withApiRevision($value)
    {
        $this->data['ApiRevision'] = $value;
        $this->options['form_params']['ApiRevision'] = $value;

        return $this;
    }
}

/**
 * @method string getJobId()
 * @method $this withJobId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getCurrentPage()
 * @method $this withCurrentPage($value)
 * @method string getApiProduct()
 * @method string getApiRevision()
 * @method string getAppInstanceId()
 * @method $this withAppInstanceId($value)
 */
class QueryPictureSearchJobResult extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withApiProduct($value)
    {
        $this->data['ApiProduct'] = $value;
        $this->options['form_params']['ApiProduct'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withApiRevision($value)
    {
        $this->data['ApiRevision'] = $value;
        $this->options['form_params']['ApiRevision'] = $value;

        return $this;
    }
}

/**
 * @method string getIotId()
 * @method $this withIotId($value)
 * @method string getRecordType()
 * @method $this withRecordType($value)
 * @method string getIotInstanceId()
 * @method $this withIotInstanceId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getStreamType()
 * @method $this withStreamType($value)
 * @method string getNeedSnapshot()
 * @method $this withNeedSnapshot($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getBeginTime()
 * @method $this withBeginTime($value)
 * @method string getCurrentPage()
 * @method $this withCurrentPage($value)
 * @method string getProductKey()
 * @method $this withProductKey($value)
 * @method string getApiProduct()
 * @method string getApiRevision()
 * @method string getDeviceName()
 * @method $this withDeviceName($value)
 */
class QueryRecord extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withApiProduct($value)
    {
        $this->data['ApiProduct'] = $value;
        $this->options['form_params']['ApiProduct'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withApiRevision($value)
    {
        $this->data['ApiRevision'] = $value;
        $this->options['form_params']['ApiRevision'] = $value;

        return $this;
    }
}

/**
 * @method string getIotId()
 * @method $this withIotId($value)
 * @method string getIotInstanceId()
 * @method $this withIotInstanceId($value)
 * @method string getProductKey()
 * @method $this withProductKey($value)
 * @method string getRecordId()
 * @method $this withRecordId($value)
 * @method string getApiProduct()
 * @method string getApiRevision()
 * @method string getDeviceName()
 * @method $this withDeviceName($value)
 */
class QueryRecordByRecordId extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withApiProduct($value)
    {
        $this->data['ApiProduct'] = $value;
        $this->options['form_params']['ApiProduct'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withApiRevision($value)
    {
        $this->data['ApiRevision'] = $value;
        $this->options['form_params']['ApiRevision'] = $value;

        return $this;
    }
}

/**
 * @method string getJobId()
 * @method $this withJobId($value)
 * @method string getIotInstanceId()
 * @method $this withIotInstanceId($value)
 * @method string getApiProduct()
 * @method string getApiRevision()
 */
class QueryRecordDownloadJobById extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withApiProduct($value)
    {
        $this->data['ApiProduct'] = $value;
        $this->options['form_params']['ApiProduct'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withApiRevision($value)
    {
        $this->data['ApiRevision'] = $value;
        $this->options['form_params']['ApiRevision'] = $value;

        return $this;
    }
}

/**
 * @method string getIotId()
 * @method $this withIotId($value)
 * @method string getIotInstanceId()
 * @method $this withIotInstanceId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getCurrentPage()
 * @method $this withCurrentPage($value)
 * @method string getProductKey()
 * @method $this withProductKey($value)
 * @method string getApiProduct()
 * @method string getApiRevision()
 * @method string getDeviceName()
 * @method $this withDeviceName($value)
 */
class QueryRecordDownloadJobList extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withApiProduct($value)
    {
        $this->data['ApiProduct'] = $value;
        $this->options['form_params']['ApiProduct'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withApiRevision($value)
    {
        $this->data['ApiRevision'] = $value;
        $this->options['form_params']['ApiRevision'] = $value;

        return $this;
    }
}

/**
 * @method string getIotId()
 * @method $this withIotId($value)
 * @method string getIotInstanceId()
 * @method $this withIotInstanceId($value)
 * @method string getProductKey()
 * @method $this withProductKey($value)
 * @method string getFileName()
 * @method $this withFileName($value)
 * @method string getApiProduct()
 * @method string getApiRevision()
 * @method string getDeviceName()
 * @method $this withDeviceName($value)
 */
class QueryRecordDownloadUrl extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withApiProduct($value)
    {
        $this->data['ApiProduct'] = $value;
        $this->options['form_params']['ApiProduct'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withApiRevision($value)
    {
        $this->data['ApiRevision'] = $value;
        $this->options['form_params']['ApiRevision'] = $value;

        return $this;
    }
}

/**
 * @method string getApiProduct()
 * @method string getApiRevision()
 * @method string getPlanId()
 * @method $this withPlanId($value)
 */
class QueryRecordPlanDetail extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withApiProduct($value)
    {
        $this->data['ApiProduct'] = $value;
        $this->options['form_params']['ApiProduct'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withApiRevision($value)
    {
        $this->data['ApiRevision'] = $value;
        $this->options['form_params']['ApiRevision'] = $value;

        return $this;
    }
}

/**
 * @method string getIotId()
 * @method $this withIotId($value)
 * @method string getIotInstanceId()
 * @method $this withIotInstanceId($value)
 * @method string getStreamType()
 * @method $this withStreamType($value)
 * @method string getProductKey()
 * @method $this withProductKey($value)
 * @method string getApiProduct()
 * @method string getApiRevision()
 * @method string getDeviceName()
 * @method $this withDeviceName($value)
 */
class QueryRecordPlanDeviceByDevice extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withApiProduct($value)
    {
        $this->data['ApiProduct'] = $value;
        $this->options['form_params']['ApiProduct'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withApiRevision($value)
    {
        $this->data['ApiRevision'] = $value;
        $this->options['form_params']['ApiRevision'] = $value;

        return $this;
    }
}

/**
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getCurrentPage()
 * @method $this withCurrentPage($value)
 * @method string getApiProduct()
 * @method string getApiRevision()
 * @method string getPlanId()
 * @method $this withPlanId($value)
 */
class QueryRecordPlanDeviceByPlan extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withApiProduct($value)
    {
        $this->data['ApiProduct'] = $value;
        $this->options['form_params']['ApiProduct'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withApiRevision($value)
    {
        $this->data['ApiRevision'] = $value;
        $this->options['form_params']['ApiRevision'] = $value;

        return $this;
    }
}

/**
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getCurrentPage()
 * @method $this withCurrentPage($value)
 * @method string getApiProduct()
 * @method string getApiRevision()
 */
class QueryRecordPlans extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withApiProduct($value)
    {
        $this->data['ApiProduct'] = $value;
        $this->options['form_params']['ApiProduct'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withApiRevision($value)
    {
        $this->data['ApiRevision'] = $value;
        $this->options['form_params']['ApiRevision'] = $value;

        return $this;
    }
}

/**
 * @method string getIotId()
 * @method $this withIotId($value)
 * @method string getIotInstanceId()
 * @method $this withIotInstanceId($value)
 * @method string getProductKey()
 * @method $this withProductKey($value)
 * @method string getFileName()
 * @method $this withFileName($value)
 * @method string getSeekTime()
 * @method $this withSeekTime($value)
 * @method string getApiProduct()
 * @method string getApiRevision()
 * @method string getDeviceName()
 * @method $this withDeviceName($value)
 * @method string getUrlValidDuration()
 * @method $this withUrlValidDuration($value)
 */
class QueryRecordUrl extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withApiProduct($value)
    {
        $this->data['ApiProduct'] = $value;
        $this->options['form_params']['ApiProduct'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withApiRevision($value)
    {
        $this->data['ApiRevision'] = $value;
        $this->options['form_params']['ApiRevision'] = $value;

        return $this;
    }
}

/**
 * @method string getIotId()
 * @method $this withIotId($value)
 * @method string getIotInstanceId()
 * @method $this withIotInstanceId($value)
 * @method string getStreamType()
 * @method $this withStreamType($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getBeginTime()
 * @method $this withBeginTime($value)
 * @method string getProductKey()
 * @method $this withProductKey($value)
 * @method string getApiProduct()
 * @method string getApiRevision()
 * @method string getDeviceName()
 * @method $this withDeviceName($value)
 * @method string getUrlValidDuration()
 * @method $this withUrlValidDuration($value)
 */
class QueryRecordUrlByTime extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withApiProduct($value)
    {
        $this->data['ApiProduct'] = $value;
        $this->options['form_params']['ApiProduct'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withApiRevision($value)
    {
        $this->data['ApiRevision'] = $value;
        $this->options['form_params']['ApiRevision'] = $value;

        return $this;
    }
}

/**
 * @method string getIotId()
 * @method $this withIotId($value)
 * @method string getIotInstanceId()
 * @method $this withIotInstanceId($value)
 * @method string getProductKey()
 * @method $this withProductKey($value)
 * @method string getApiProduct()
 * @method string getApiRevision()
 * @method string getDeviceName()
 * @method $this withDeviceName($value)
 */
class QueryRtmpKey extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withApiProduct($value)
    {
        $this->data['ApiProduct'] = $value;
        $this->options['form_params']['ApiProduct'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withApiRevision($value)
    {
        $this->data['ApiRevision'] = $value;
        $this->options['form_params']['ApiRevision'] = $value;

        return $this;
    }
}

/**
 * @method string getJobId()
 * @method $this withJobId($value)
 * @method string getIotId()
 * @method $this withIotId($value)
 * @method string getIotInstanceId()
 * @method $this withIotInstanceId($value)
 * @method string getProductKey()
 * @method $this withProductKey($value)
 * @method string getApiProduct()
 * @method string getApiRevision()
 * @method string getDeviceName()
 * @method $this withDeviceName($value)
 */
class QueryStreamPushJob extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withApiProduct($value)
    {
        $this->data['ApiProduct'] = $value;
        $this->options['form_params']['ApiProduct'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withApiRevision($value)
    {
        $this->data['ApiRevision'] = $value;
        $this->options['form_params']['ApiRevision'] = $value;

        return $this;
    }
}

/**
 * @method string getIotId()
 * @method $this withIotId($value)
 * @method string getIotInstanceId()
 * @method $this withIotInstanceId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getCurrentPage()
 * @method $this withCurrentPage($value)
 * @method string getProductKey()
 * @method $this withProductKey($value)
 * @method string getJobType()
 * @method $this withJobType($value)
 * @method string getApiProduct()
 * @method string getApiRevision()
 * @method string getDeviceName()
 * @method $this withDeviceName($value)
 */
class QueryStreamPushJobList extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withApiProduct($value)
    {
        $this->data['ApiProduct'] = $value;
        $this->options['form_params']['ApiProduct'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withApiRevision($value)
    {
        $this->data['ApiRevision'] = $value;
        $this->options['form_params']['ApiRevision'] = $value;

        return $this;
    }
}

/**
 * @method string getIotId()
 * @method $this withIotId($value)
 * @method string getIotInstanceId()
 * @method $this withIotInstanceId($value)
 * @method string getProductKey()
 * @method $this withProductKey($value)
 * @method string getApiProduct()
 * @method string getApiRevision()
 * @method string getDeviceName()
 * @method $this withDeviceName($value)
 */
class QueryStreamSnapshotJob extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withApiProduct($value)
    {
        $this->data['ApiProduct'] = $value;
        $this->options['form_params']['ApiProduct'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withApiRevision($value)
    {
        $this->data['ApiRevision'] = $value;
        $this->options['form_params']['ApiRevision'] = $value;

        return $this;
    }
}

/**
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getCurrentPage()
 * @method $this withCurrentPage($value)
 * @method string getApiProduct()
 * @method string getApiRevision()
 */
class QueryTimeTemplate extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withApiProduct($value)
    {
        $this->data['ApiProduct'] = $value;
        $this->options['form_params']['ApiProduct'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withApiRevision($value)
    {
        $this->data['ApiRevision'] = $value;
        $this->options['form_params']['ApiRevision'] = $value;

        return $this;
    }
}

/**
 * @method string getTemplateId()
 * @method $this withTemplateId($value)
 * @method string getApiProduct()
 * @method string getApiRevision()
 */
class QueryTimeTemplateDetail extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withApiProduct($value)
    {
        $this->data['ApiProduct'] = $value;
        $this->options['form_params']['ApiProduct'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withApiRevision($value)
    {
        $this->data['ApiRevision'] = $value;
        $this->options['form_params']['ApiRevision'] = $value;

        return $this;
    }
}

/**
 * @method string getIotId()
 * @method $this withIotId($value)
 * @method string getIotInstanceId()
 * @method $this withIotInstanceId($value)
 * @method string getProductKey()
 * @method $this withProductKey($value)
 * @method string getApiProduct()
 * @method string getApiRevision()
 * @method string getDeviceName()
 * @method $this withDeviceName($value)
 */
class QueryVisionDeviceInfo extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withApiProduct($value)
    {
        $this->data['ApiProduct'] = $value;
        $this->options['form_params']['ApiProduct'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withApiRevision($value)
    {
        $this->data['ApiRevision'] = $value;
        $this->options['form_params']['ApiRevision'] = $value;

        return $this;
    }
}

/**
 * @method string getScheme()
 * @method $this withScheme($value)
 * @method string getIotId()
 * @method $this withIotId($value)
 * @method string getIotInstanceId()
 * @method $this withIotInstanceId($value)
 * @method string getProductKey()
 * @method $this withProductKey($value)
 * @method string getApiProduct()
 * @method string getApiRevision()
 * @method string getDeviceName()
 * @method $this withDeviceName($value)
 */
class QueryVoiceIntercom extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withApiProduct($value)
    {
        $this->data['ApiProduct'] = $value;
        $this->options['form_params']['ApiProduct'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withApiRevision($value)
    {
        $this->data['ApiRevision'] = $value;
        $this->options['form_params']['ApiRevision'] = $value;

        return $this;
    }
}

/**
 * @method string getIotId()
 * @method $this withIotId($value)
 * @method string getIotInstanceId()
 * @method $this withIotInstanceId($value)
 * @method string getProductKey()
 * @method $this withProductKey($value)
 * @method string getApiProduct()
 * @method string getApiRevision()
 * @method string getDeviceName()
 * @method $this withDeviceName($value)
 */
class RefreshGbSubDeviceList extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withApiProduct($value)
    {
        $this->data['ApiProduct'] = $value;
        $this->options['form_params']['ApiProduct'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withApiRevision($value)
    {
        $this->data['ApiRevision'] = $value;
        $this->options['form_params']['ApiRevision'] = $value;

        return $this;
    }
}

/**
 * @method string getIsolationId()
 * @method $this withIsolationId($value)
 * @method string getIotInstanceId()
 * @method $this withIotInstanceId($value)
 * @method string getDeviceGroupId()
 * @method $this withDeviceGroupId($value)
 * @method string getProductKey()
 * @method $this withProductKey($value)
 * @method string getApiProduct()
 * @method string getApiRevision()
 * @method string getDeviceName()
 * @method $this withDeviceName($value)
 */
class RemoveFaceDeviceFromDeviceGroup extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withApiProduct($value)
    {
        $this->data['ApiProduct'] = $value;
        $this->options['form_params']['ApiProduct'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withApiRevision($value)
    {
        $this->data['ApiRevision'] = $value;
        $this->options['form_params']['ApiRevision'] = $value;

        return $this;
    }
}

/**
 * @method string getIsolationId()
 * @method $this withIsolationId($value)
 * @method string getUserId()
 * @method $this withUserId($value)
 * @method string getUserGroupId()
 * @method $this withUserGroupId($value)
 * @method string getApiProduct()
 * @method string getApiRevision()
 */
class RemoveFaceUserFromUserGroup extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withApiProduct($value)
    {
        $this->data['ApiProduct'] = $value;
        $this->options['form_params']['ApiProduct'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withApiRevision($value)
    {
        $this->data['ApiRevision'] = $value;
        $this->options['form_params']['ApiRevision'] = $value;

        return $this;
    }
}

/**
 * @method string getIotId()
 * @method $this withIotId($value)
 * @method string getIotInstanceId()
 * @method $this withIotInstanceId($value)
 * @method string getDay()
 * @method $this withDay($value)
 * @method string getProductKey()
 * @method $this withProductKey($value)
 * @method string getApiProduct()
 * @method string getApiRevision()
 * @method string getDeviceName()
 * @method $this withDeviceName($value)
 */
class SetDevicePictureLifeCycle extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withApiProduct($value)
    {
        $this->data['ApiProduct'] = $value;
        $this->options['form_params']['ApiProduct'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withApiRevision($value)
    {
        $this->data['ApiRevision'] = $value;
        $this->options['form_params']['ApiRevision'] = $value;

        return $this;
    }
}

/**
 * @method string getIotId()
 * @method $this withIotId($value)
 * @method string getIotInstanceId()
 * @method $this withIotInstanceId($value)
 * @method string getDay()
 * @method $this withDay($value)
 * @method string getProductKey()
 * @method $this withProductKey($value)
 * @method string getApiProduct()
 * @method string getApiRevision()
 * @method string getDeviceName()
 * @method $this withDeviceName($value)
 */
class SetDeviceRecordLifeCycle extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withApiProduct($value)
    {
        $this->data['ApiProduct'] = $value;
        $this->options['form_params']['ApiProduct'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withApiRevision($value)
    {
        $this->data['ApiRevision'] = $value;
        $this->options['form_params']['ApiRevision'] = $value;

        return $this;
    }
}

/**
 * @method string getIotId()
 * @method $this withIotId($value)
 * @method string getIotInstanceId()
 * @method $this withIotInstanceId($value)
 * @method string getStreamType()
 * @method $this withStreamType($value)
 * @method string getProductKey()
 * @method $this withProductKey($value)
 * @method string getApiProduct()
 * @method string getApiRevision()
 * @method string getDeviceName()
 * @method $this withDeviceName($value)
 */
class StopLiveStreaming extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withApiProduct($value)
    {
        $this->data['ApiProduct'] = $value;
        $this->options['form_params']['ApiProduct'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withApiRevision($value)
    {
        $this->data['ApiRevision'] = $value;
        $this->options['form_params']['ApiRevision'] = $value;

        return $this;
    }
}

/**
 * @method string getIotId()
 * @method $this withIotId($value)
 * @method string getIotInstanceId()
 * @method $this withIotInstanceId($value)
 * @method string getProductKey()
 * @method $this withProductKey($value)
 * @method string getRecordId()
 * @method $this withRecordId($value)
 * @method string getApiProduct()
 * @method string getApiRevision()
 * @method string getDeviceName()
 * @method $this withDeviceName($value)
 */
class StopTriggeredRecord extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withApiProduct($value)
    {
        $this->data['ApiProduct'] = $value;
        $this->options['form_params']['ApiProduct'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withApiRevision($value)
    {
        $this->data['ApiRevision'] = $value;
        $this->options['form_params']['ApiRevision'] = $value;

        return $this;
    }
}

/**
 * @method array getDeviceNameList()
 * @method string getSourceInstanceId()
 * @method $this withSourceInstanceId($value)
 * @method string getProductKey()
 * @method $this withProductKey($value)
 * @method string getTargetInstanceId()
 * @method $this withTargetInstanceId($value)
 * @method string getApiProduct()
 * @method string getApiRevision()
 */
class TransferDeviceInstance extends Rpc
{

    /**
     * @param array $deviceNameList
     *
     * @return $this
     */
	public function withDeviceNameList(array $deviceNameList)
	{
	    $this->data['DeviceNameList'] = $deviceNameList;
		foreach ($deviceNameList as $i => $iValue) {
			$this->options['query']['DeviceNameList.' . ($i + 1)] = $iValue;
		}

		return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withApiProduct($value)
    {
        $this->data['ApiProduct'] = $value;
        $this->options['form_params']['ApiProduct'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withApiRevision($value)
    {
        $this->data['ApiRevision'] = $value;
        $this->options['form_params']['ApiRevision'] = $value;

        return $this;
    }
}

/**
 * @method string getIotId()
 * @method $this withIotId($value)
 * @method string getIotInstanceId()
 * @method $this withIotInstanceId($value)
 * @method string getProductKey()
 * @method $this withProductKey($value)
 * @method string getApiProduct()
 * @method string getApiRevision()
 * @method string getDeviceName()
 * @method $this withDeviceName($value)
 */
class TriggerCapturePicture extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withApiProduct($value)
    {
        $this->data['ApiProduct'] = $value;
        $this->options['form_params']['ApiProduct'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withApiRevision($value)
    {
        $this->data['ApiRevision'] = $value;
        $this->options['form_params']['ApiRevision'] = $value;

        return $this;
    }
}

/**
 * @method string getIotId()
 * @method $this withIotId($value)
 * @method string getPreRecordDuration()
 * @method $this withPreRecordDuration($value)
 * @method string getIotInstanceId()
 * @method $this withIotInstanceId($value)
 * @method string getRecordDuration()
 * @method $this withRecordDuration($value)
 * @method string getStreamType()
 * @method $this withStreamType($value)
 * @method string getProductKey()
 * @method $this withProductKey($value)
 * @method string getApiProduct()
 * @method string getApiRevision()
 * @method string getDeviceName()
 * @method $this withDeviceName($value)
 */
class TriggerRecord extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withApiProduct($value)
    {
        $this->data['ApiProduct'] = $value;
        $this->options['form_params']['ApiProduct'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withApiRevision($value)
    {
        $this->data['ApiRevision'] = $value;
        $this->options['form_params']['ApiRevision'] = $value;

        return $this;
    }
}

/**
 * @method string getIotInstanceId()
 * @method $this withIotInstanceId($value)
 * @method array getDeviceIotIds()
 * @method string getApiProduct()
 * @method string getApiRevision()
 * @method string getAppInstanceId()
 * @method $this withAppInstanceId($value)
 */
class UnbindPictureSearchAppWithDevices extends Rpc
{

    /**
     * @param array $deviceIotIds
     *
     * @return $this
     */
	public function withDeviceIotIds(array $deviceIotIds)
	{
	    $this->data['DeviceIotIds'] = $deviceIotIds;
		foreach ($deviceIotIds as $i => $iValue) {
			$this->options['query']['DeviceIotIds.' . ($i + 1)] = $iValue;
		}

		return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withApiProduct($value)
    {
        $this->data['ApiProduct'] = $value;
        $this->options['form_params']['ApiProduct'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withApiRevision($value)
    {
        $this->data['ApiRevision'] = $value;
        $this->options['form_params']['ApiRevision'] = $value;

        return $this;
    }
}

/**
 * @method string getEventTypes()
 * @method $this withEventTypes($value)
 * @method string getPreRecordDuration()
 * @method $this withPreRecordDuration($value)
 * @method string getRecordDuration()
 * @method $this withRecordDuration($value)
 * @method string getTemplateId()
 * @method $this withTemplateId($value)
 * @method string getApiProduct()
 * @method string getName()
 * @method $this withName($value)
 * @method string getApiRevision()
 * @method string getPlanId()
 * @method $this withPlanId($value)
 */
class UpdateEventRecordPlan extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withApiProduct($value)
    {
        $this->data['ApiProduct'] = $value;
        $this->options['form_params']['ApiProduct'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withApiRevision($value)
    {
        $this->data['ApiRevision'] = $value;
        $this->options['form_params']['ApiRevision'] = $value;

        return $this;
    }
}

/**
 * @method string getIsolationId()
 * @method $this withIsolationId($value)
 * @method string getUserId()
 * @method $this withUserId($value)
 * @method string getCustomUserId()
 * @method $this withCustomUserId($value)
 * @method string getParams()
 * @method $this withParams($value)
 * @method string getFacePicUrl()
 * @method $this withFacePicUrl($value)
 * @method string getApiProduct()
 * @method string getName()
 * @method $this withName($value)
 * @method string getApiRevision()
 */
class UpdateFaceUser extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withApiProduct($value)
    {
        $this->data['ApiProduct'] = $value;
        $this->options['form_params']['ApiProduct'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withApiRevision($value)
    {
        $this->data['ApiRevision'] = $value;
        $this->options['form_params']['ApiRevision'] = $value;

        return $this;
    }
}

/**
 * @method string getIsolationId()
 * @method $this withIsolationId($value)
 * @method string getControlId()
 * @method $this withControlId($value)
 * @method string getRelation()
 * @method $this withRelation($value)
 * @method string getApiProduct()
 * @method string getApiRevision()
 */
class UpdateFaceUserGroupAndDeviceGroupRelation extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withApiProduct($value)
    {
        $this->data['ApiProduct'] = $value;
        $this->options['form_params']['ApiProduct'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withApiRevision($value)
    {
        $this->data['ApiRevision'] = $value;
        $this->options['form_params']['ApiRevision'] = $value;

        return $this;
    }
}

/**
 * @method string getGbId()
 * @method $this withGbId($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getPassword()
 * @method $this withPassword($value)
 * @method string getIotId()
 * @method $this withIotId($value)
 * @method string getIotInstanceId()
 * @method $this withIotInstanceId($value)
 * @method string getProductKey()
 * @method $this withProductKey($value)
 * @method string getApiProduct()
 * @method string getApiRevision()
 * @method string getDeviceName()
 * @method $this withDeviceName($value)
 */
class UpdateGbDevice extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withApiProduct($value)
    {
        $this->data['ApiProduct'] = $value;
        $this->options['form_params']['ApiProduct'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withApiRevision($value)
    {
        $this->data['ApiRevision'] = $value;
        $this->options['form_params']['ApiRevision'] = $value;

        return $this;
    }
}

/**
 * @method string getIotInstanceId()
 * @method $this withIotInstanceId($value)
 * @method string getIpVersion()
 * @method $this withIpVersion($value)
 * @method string getApiProduct()
 * @method string getApiRevision()
 */
class UpdateInstanceInternetProtocol extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withApiProduct($value)
    {
        $this->data['ApiProduct'] = $value;
        $this->options['form_params']['ApiProduct'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withApiRevision($value)
    {
        $this->data['ApiRevision'] = $value;
        $this->options['form_params']['ApiRevision'] = $value;

        return $this;
    }
}

/**
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getApiProduct()
 * @method string getName()
 * @method $this withName($value)
 * @method string getApiRevision()
 * @method string getAppInstanceId()
 * @method $this withAppInstanceId($value)
 */
class UpdatePictureSearchApp extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withApiProduct($value)
    {
        $this->data['ApiProduct'] = $value;
        $this->options['form_params']['ApiProduct'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withApiRevision($value)
    {
        $this->data['ApiRevision'] = $value;
        $this->options['form_params']['ApiRevision'] = $value;

        return $this;
    }
}

/**
 * @method string getTemplateId()
 * @method $this withTemplateId($value)
 * @method string getApiProduct()
 * @method string getName()
 * @method $this withName($value)
 * @method string getApiRevision()
 * @method string getPlanId()
 * @method $this withPlanId($value)
 */
class UpdateRecordPlan extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withApiProduct($value)
    {
        $this->data['ApiProduct'] = $value;
        $this->options['form_params']['ApiProduct'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withApiRevision($value)
    {
        $this->data['ApiRevision'] = $value;
        $this->options['form_params']['ApiRevision'] = $value;

        return $this;
    }
}

/**
 * @method string getPushAuthKey()
 * @method $this withPushAuthKey($value)
 * @method string getIotId()
 * @method $this withIotId($value)
 * @method string getIotInstanceId()
 * @method $this withIotInstanceId($value)
 * @method string getPushKeyExpireTime()
 * @method $this withPushKeyExpireTime($value)
 * @method string getPullAuthKey()
 * @method $this withPullAuthKey($value)
 * @method string getProductKey()
 * @method $this withProductKey($value)
 * @method string getApiProduct()
 * @method string getApiRevision()
 * @method string getDeviceName()
 * @method $this withDeviceName($value)
 * @method string getPullKeyExpireTime()
 * @method $this withPullKeyExpireTime($value)
 */
class UpdateRtmpKey extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withApiProduct($value)
    {
        $this->data['ApiProduct'] = $value;
        $this->options['form_params']['ApiProduct'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withApiRevision($value)
    {
        $this->data['ApiRevision'] = $value;
        $this->options['form_params']['ApiRevision'] = $value;

        return $this;
    }
}

/**
 * @method array getTimeSections()
 * @method string getTemplateId()
 * @method $this withTemplateId($value)
 * @method string getAllDay()
 * @method $this withAllDay($value)
 * @method string getApiProduct()
 * @method string getName()
 * @method $this withName($value)
 * @method string getApiRevision()
 */
class UpdateTimeTemplate extends Rpc
{

    /**
     * @param array $timeSections
     *
     * @return $this
     */
	public function withTimeSections(array $timeSections)
	{
	    $this->data['TimeSections'] = $timeSections;
		foreach ($timeSections as $depth1 => $depth1Value) {
			if(isset($depth1Value['DayOfWeek'])){
				$this->options['query']['TimeSections.' . ($depth1 + 1) . '.DayOfWeek'] = $depth1Value['DayOfWeek'];
			}
			if(isset($depth1Value['Begin'])){
				$this->options['query']['TimeSections.' . ($depth1 + 1) . '.Begin'] = $depth1Value['Begin'];
			}
			if(isset($depth1Value['End'])){
				$this->options['query']['TimeSections.' . ($depth1 + 1) . '.End'] = $depth1Value['End'];
			}
		}

		return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withApiProduct($value)
    {
        $this->data['ApiProduct'] = $value;
        $this->options['form_params']['ApiProduct'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withApiRevision($value)
    {
        $this->data['ApiRevision'] = $value;
        $this->options['form_params']['ApiRevision'] = $value;

        return $this;
    }
}
