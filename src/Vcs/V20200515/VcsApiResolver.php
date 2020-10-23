<?php

namespace AlibabaCloud\Vcs\V20200515;

use AlibabaCloud\Client\Resolver\ApiResolver;

/**
 * @method AddDataSource addDataSource(array $options = [])
 * @method AddDevice addDevice(array $options = [])
 * @method AddMonitor addMonitor(array $options = [])
 * @method AddProfile addProfile(array $options = [])
 * @method AddProfileCatalog addProfileCatalog(array $options = [])
 * @method BindCorpGroup bindCorpGroup(array $options = [])
 * @method BindPerson bindPerson(array $options = [])
 * @method BindUser bindUser(array $options = [])
 * @method CreateCorp createCorp(array $options = [])
 * @method CreateCorpGroup createCorpGroup(array $options = [])
 * @method CreateUser createUser(array $options = [])
 * @method CreateUserGroup createUserGroup(array $options = [])
 * @method CreateVideoComposeTask createVideoComposeTask(array $options = [])
 * @method CreateVideoSummaryTask createVideoSummaryTask(array $options = [])
 * @method DeleteCorpGroup deleteCorpGroup(array $options = [])
 * @method DeleteDataSource deleteDataSource(array $options = [])
 * @method DeleteDevice deleteDevice(array $options = [])
 * @method DeleteProfile deleteProfile(array $options = [])
 * @method DeleteProfileCatalog deleteProfileCatalog(array $options = [])
 * @method DeleteRecords deleteRecords(array $options = [])
 * @method DeleteUser deleteUser(array $options = [])
 * @method DeleteUserGroup deleteUserGroup(array $options = [])
 * @method DeleteVideoSummaryTask deleteVideoSummaryTask(array $options = [])
 * @method DescribeDevices describeDevices(array $options = [])
 * @method GetBodyOptions getBodyOptions(array $options = [])
 * @method GetCatalogList getCatalogList(array $options = [])
 * @method GetDeviceConfig getDeviceConfig(array $options = [])
 * @method GetDeviceLiveUrl getDeviceLiveUrl(array $options = [])
 * @method GetDeviceVideoUrl getDeviceVideoUrl(array $options = [])
 * @method GetFaceModelResult getFaceModelResult(array $options = [])
 * @method GetFaceOptions getFaceOptions(array $options = [])
 * @method GetInventory getInventory(array $options = [])
 * @method GetMonitorList getMonitorList(array $options = [])
 * @method GetMonitorResult getMonitorResult(array $options = [])
 * @method GetPersonDetail getPersonDetail(array $options = [])
 * @method GetPersonList getPersonList(array $options = [])
 * @method GetProfileDetail getProfileDetail(array $options = [])
 * @method GetProfileList getProfileList(array $options = [])
 * @method GetUserDetail getUserDetail(array $options = [])
 * @method GetVideoComposeResult getVideoComposeResult(array $options = [])
 * @method GetVideoSummaryTaskResult getVideoSummaryTaskResult(array $options = [])
 * @method InvokeMotorModel invokeMotorModel(array $options = [])
 * @method ListBodyAlgorithmResults listBodyAlgorithmResults(array $options = [])
 * @method ListCorpGroupMetrics listCorpGroupMetrics(array $options = [])
 * @method ListCorpGroups listCorpGroups(array $options = [])
 * @method ListCorpMetrics listCorpMetrics(array $options = [])
 * @method ListCorps listCorps(array $options = [])
 * @method ListDeviceGroups listDeviceGroups(array $options = [])
 * @method ListDevices listDevices(array $options = [])
 * @method ListEventAlgorithmDetails listEventAlgorithmDetails(array $options = [])
 * @method ListEventAlgorithmResults listEventAlgorithmResults(array $options = [])
 * @method ListFaceAlgorithmResults listFaceAlgorithmResults(array $options = [])
 * @method ListMetrics listMetrics(array $options = [])
 * @method ListMotorAlgorithmResults listMotorAlgorithmResults(array $options = [])
 * @method ListPersons listPersons(array $options = [])
 * @method ListPersonTrace listPersonTrace(array $options = [])
 * @method ListPersonTraceDetails listPersonTraceDetails(array $options = [])
 * @method ListPersonVisitCount listPersonVisitCount(array $options = [])
 * @method ListSubscribeDevice listSubscribeDevice(array $options = [])
 * @method ListUserGroups listUserGroups(array $options = [])
 * @method ListUsers listUsers(array $options = [])
 * @method RecognizeFaceQuality recognizeFaceQuality(array $options = [])
 * @method RecognizeImage recognizeImage(array $options = [])
 * @method RegisterDevice registerDevice(array $options = [])
 * @method ReportDeviceCapacity reportDeviceCapacity(array $options = [])
 * @method SaveVideoSummaryTaskVideo saveVideoSummaryTaskVideo(array $options = [])
 * @method SearchBody searchBody(array $options = [])
 * @method SearchFace searchFace(array $options = [])
 * @method SearchObject searchObject(array $options = [])
 * @method StopMonitor stopMonitor(array $options = [])
 * @method SubscribeDeviceEvent subscribeDeviceEvent(array $options = [])
 * @method SubscribeSpaceEvent subscribeSpaceEvent(array $options = [])
 * @method SyncDeviceTime syncDeviceTime(array $options = [])
 * @method UnbindCorpGroup unbindCorpGroup(array $options = [])
 * @method UnbindPerson unbindPerson(array $options = [])
 * @method UnbindUser unbindUser(array $options = [])
 * @method UnsubscribeDeviceEvent unsubscribeDeviceEvent(array $options = [])
 * @method UnsubscribeSpaceEvent unsubscribeSpaceEvent(array $options = [])
 * @method UpdateCorp updateCorp(array $options = [])
 * @method UpdateDevice updateDevice(array $options = [])
 * @method UpdateMonitor updateMonitor(array $options = [])
 * @method UpdateProfile updateProfile(array $options = [])
 * @method UpdateProfileCatalog updateProfileCatalog(array $options = [])
 * @method UpdateUser updateUser(array $options = [])
 * @method UpdateUserGroup updateUserGroup(array $options = [])
 * @method UploadFile uploadFile(array $options = [])
 * @method UploadImage uploadImage(array $options = [])
 */
class VcsApiResolver extends ApiResolver
{
}

class Rpc extends \AlibabaCloud\Client\Resolver\Rpc
{
    /** @var string */
    public $product = 'Vcs';

    /** @var string */
    public $version = '2020-05-15';

    /** @var string */
    public $method = 'POST';
}

/**
 * @method string getDataSourceType()
 * @method string getCorpId()
 * @method string getDescription()
 * @method string getDataSourceName()
 * @method string getFileRetentionDays()
 */
class AddDataSource extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDataSourceType($value)
    {
        $this->data['DataSourceType'] = $value;
        $this->options['form_params']['DataSourceType'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCorpId($value)
    {
        $this->data['CorpId'] = $value;
        $this->options['form_params']['CorpId'] = $value;

        return $this;
    }

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
    public function withDataSourceName($value)
    {
        $this->data['DataSourceName'] = $value;
        $this->options['form_params']['DataSourceName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withFileRetentionDays($value)
    {
        $this->data['FileRetentionDays'] = $value;
        $this->options['form_params']['FileRetentionDays'] = $value;

        return $this;
    }
}

/**
 * @method string getDeviceSite()
 * @method string getCorpId()
 * @method string getGbId()
 * @method string getBitRate()
 * @method string getDeviceDirection()
 * @method string getDeviceAddress()
 * @method string getDeviceType()
 * @method string getDeviceResolution()
 * @method string getVendor()
 * @method string getDeviceName()
 */
class AddDevice extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDeviceSite($value)
    {
        $this->data['DeviceSite'] = $value;
        $this->options['form_params']['DeviceSite'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCorpId($value)
    {
        $this->data['CorpId'] = $value;
        $this->options['form_params']['CorpId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withGbId($value)
    {
        $this->data['GbId'] = $value;
        $this->options['form_params']['GbId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBitRate($value)
    {
        $this->data['BitRate'] = $value;
        $this->options['form_params']['BitRate'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDeviceDirection($value)
    {
        $this->data['DeviceDirection'] = $value;
        $this->options['form_params']['DeviceDirection'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDeviceAddress($value)
    {
        $this->data['DeviceAddress'] = $value;
        $this->options['form_params']['DeviceAddress'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDeviceType($value)
    {
        $this->data['DeviceType'] = $value;
        $this->options['form_params']['DeviceType'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDeviceResolution($value)
    {
        $this->data['DeviceResolution'] = $value;
        $this->options['form_params']['DeviceResolution'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withVendor($value)
    {
        $this->data['Vendor'] = $value;
        $this->options['form_params']['Vendor'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDeviceName($value)
    {
        $this->data['DeviceName'] = $value;
        $this->options['form_params']['DeviceName'] = $value;

        return $this;
    }
}

/**
 * @method string getMonitorType()
 * @method string getCorpId()
 * @method string getDescription()
 * @method string getNotifierAppSecret()
 * @method string getNotifierExtendValues()
 * @method string getNotifierUrl()
 * @method string getNotifierType()
 * @method string getBatchIndicator()
 * @method string getNotifierTimeOut()
 * @method string getAlgorithmVendor()
 */
class AddMonitor extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withMonitorType($value)
    {
        $this->data['MonitorType'] = $value;
        $this->options['form_params']['MonitorType'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCorpId($value)
    {
        $this->data['CorpId'] = $value;
        $this->options['form_params']['CorpId'] = $value;

        return $this;
    }

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
    public function withNotifierAppSecret($value)
    {
        $this->data['NotifierAppSecret'] = $value;
        $this->options['form_params']['NotifierAppSecret'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withNotifierExtendValues($value)
    {
        $this->data['NotifierExtendValues'] = $value;
        $this->options['form_params']['NotifierExtendValues'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withNotifierUrl($value)
    {
        $this->data['NotifierUrl'] = $value;
        $this->options['form_params']['NotifierUrl'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withNotifierType($value)
    {
        $this->data['NotifierType'] = $value;
        $this->options['form_params']['NotifierType'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBatchIndicator($value)
    {
        $this->data['BatchIndicator'] = $value;
        $this->options['form_params']['BatchIndicator'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withNotifierTimeOut($value)
    {
        $this->data['NotifierTimeOut'] = $value;
        $this->options['form_params']['NotifierTimeOut'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAlgorithmVendor($value)
    {
        $this->data['AlgorithmVendor'] = $value;
        $this->options['form_params']['AlgorithmVendor'] = $value;

        return $this;
    }
}

/**
 * @method string getCorpId()
 * @method string getGender()
 * @method string getPlateNo()
 * @method string getIdNumber()
 * @method string getFaceUrl()
 * @method string getLiveAddress()
 * @method string getIsvSubId()
 * @method string getSceneType()
 * @method string getPhoneNo()
 * @method string getCatalogId()
 * @method string getName()
 * @method string getBizId()
 */
class AddProfile extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCorpId($value)
    {
        $this->data['CorpId'] = $value;
        $this->options['form_params']['CorpId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withGender($value)
    {
        $this->data['Gender'] = $value;
        $this->options['form_params']['Gender'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPlateNo($value)
    {
        $this->data['PlateNo'] = $value;
        $this->options['form_params']['PlateNo'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withIdNumber($value)
    {
        $this->data['IdNumber'] = $value;
        $this->options['form_params']['IdNumber'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withFaceUrl($value)
    {
        $this->data['FaceUrl'] = $value;
        $this->options['form_params']['FaceUrl'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withLiveAddress($value)
    {
        $this->data['LiveAddress'] = $value;
        $this->options['form_params']['LiveAddress'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withIsvSubId($value)
    {
        $this->data['IsvSubId'] = $value;
        $this->options['form_params']['IsvSubId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSceneType($value)
    {
        $this->data['SceneType'] = $value;
        $this->options['form_params']['SceneType'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPhoneNo($value)
    {
        $this->data['PhoneNo'] = $value;
        $this->options['form_params']['PhoneNo'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCatalogId($value)
    {
        $this->data['CatalogId'] = $value;
        $this->options['form_params']['CatalogId'] = $value;

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
    public function withBizId($value)
    {
        $this->data['BizId'] = $value;
        $this->options['form_params']['BizId'] = $value;

        return $this;
    }
}

/**
 * @method string getIsvSubId()
 * @method string getParentCatalogId()
 * @method string getCorpId()
 * @method string getCatalogName()
 */
class AddProfileCatalog extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withIsvSubId($value)
    {
        $this->data['IsvSubId'] = $value;
        $this->options['form_params']['IsvSubId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withParentCatalogId($value)
    {
        $this->data['ParentCatalogId'] = $value;
        $this->options['form_params']['ParentCatalogId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCorpId($value)
    {
        $this->data['CorpId'] = $value;
        $this->options['form_params']['CorpId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCatalogName($value)
    {
        $this->data['CatalogName'] = $value;
        $this->options['form_params']['CatalogName'] = $value;

        return $this;
    }
}

/**
 * @method string getCorpId()
 * @method string getCorpGroupId()
 */
class BindCorpGroup extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCorpId($value)
    {
        $this->data['CorpId'] = $value;
        $this->options['form_params']['CorpId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCorpGroupId($value)
    {
        $this->data['CorpGroupId'] = $value;
        $this->options['form_params']['CorpGroupId'] = $value;

        return $this;
    }
}

/**
 * @method string getIsvSubId()
 * @method string getCorpId()
 * @method string getPersonMatchingRate()
 * @method string getProfileId()
 * @method string getPersonId()
 */
class BindPerson extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withIsvSubId($value)
    {
        $this->data['IsvSubId'] = $value;
        $this->options['form_params']['IsvSubId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCorpId($value)
    {
        $this->data['CorpId'] = $value;
        $this->options['form_params']['CorpId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPersonMatchingRate($value)
    {
        $this->data['PersonMatchingRate'] = $value;
        $this->options['form_params']['PersonMatchingRate'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withProfileId($value)
    {
        $this->data['ProfileId'] = $value;
        $this->options['form_params']['ProfileId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPersonId($value)
    {
        $this->data['PersonId'] = $value;
        $this->options['form_params']['PersonId'] = $value;

        return $this;
    }
}

/**
 * @method string getIsvSubId()
 * @method string getCorpId()
 * @method string getUserId()
 * @method string getMatchingRate()
 * @method string getPersonId()
 */
class BindUser extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withIsvSubId($value)
    {
        $this->data['IsvSubId'] = $value;
        $this->options['form_params']['IsvSubId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCorpId($value)
    {
        $this->data['CorpId'] = $value;
        $this->options['form_params']['CorpId'] = $value;

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
        $this->options['form_params']['UserId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withMatchingRate($value)
    {
        $this->data['MatchingRate'] = $value;
        $this->options['form_params']['MatchingRate'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPersonId($value)
    {
        $this->data['PersonId'] = $value;
        $this->options['form_params']['PersonId'] = $value;

        return $this;
    }
}

/**
 * @method string getAlgorithmType()
 * @method string getIsvSubId()
 * @method string getParentCorpId()
 * @method string getDescription()
 * @method string getIconPath()
 * @method string getAppName()
 * @method string getCorpName()
 */
class CreateCorp extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAlgorithmType($value)
    {
        $this->data['AlgorithmType'] = $value;
        $this->options['form_params']['AlgorithmType'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withIsvSubId($value)
    {
        $this->data['IsvSubId'] = $value;
        $this->options['form_params']['IsvSubId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withParentCorpId($value)
    {
        $this->data['ParentCorpId'] = $value;
        $this->options['form_params']['ParentCorpId'] = $value;

        return $this;
    }

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
    public function withIconPath($value)
    {
        $this->data['IconPath'] = $value;
        $this->options['form_params']['IconPath'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAppName($value)
    {
        $this->data['AppName'] = $value;
        $this->options['form_params']['AppName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCorpName($value)
    {
        $this->data['CorpName'] = $value;
        $this->options['form_params']['CorpName'] = $value;

        return $this;
    }
}

/**
 * @method string getCorpId()
 * @method string getClientToken()
 * @method string getGroupId()
 */
class CreateCorpGroup extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCorpId($value)
    {
        $this->data['CorpId'] = $value;
        $this->options['form_params']['CorpId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withClientToken($value)
    {
        $this->data['ClientToken'] = $value;
        $this->options['form_params']['ClientToken'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withGroupId($value)
    {
        $this->data['GroupId'] = $value;
        $this->options['form_params']['GroupId'] = $value;

        return $this;
    }
}

/**
 * @method string getCorpId()
 * @method string getGender()
 * @method string getPlateNo()
 * @method string getIdNumber()
 * @method string getFaceImageUrl()
 * @method string getAttachment()
 * @method string getIsvSubId()
 * @method string getAddress()
 * @method string getUserGroupId()
 * @method string getPhoneNo()
 * @method string getBizId()
 * @method string getAge()
 * @method string getUserName()
 */
class CreateUser extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCorpId($value)
    {
        $this->data['CorpId'] = $value;
        $this->options['form_params']['CorpId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withGender($value)
    {
        $this->data['Gender'] = $value;
        $this->options['form_params']['Gender'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPlateNo($value)
    {
        $this->data['PlateNo'] = $value;
        $this->options['form_params']['PlateNo'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withIdNumber($value)
    {
        $this->data['IdNumber'] = $value;
        $this->options['form_params']['IdNumber'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withFaceImageUrl($value)
    {
        $this->data['FaceImageUrl'] = $value;
        $this->options['form_params']['FaceImageUrl'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAttachment($value)
    {
        $this->data['Attachment'] = $value;
        $this->options['form_params']['Attachment'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withIsvSubId($value)
    {
        $this->data['IsvSubId'] = $value;
        $this->options['form_params']['IsvSubId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAddress($value)
    {
        $this->data['Address'] = $value;
        $this->options['form_params']['Address'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withUserGroupId($value)
    {
        $this->data['UserGroupId'] = $value;
        $this->options['form_params']['UserGroupId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPhoneNo($value)
    {
        $this->data['PhoneNo'] = $value;
        $this->options['form_params']['PhoneNo'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBizId($value)
    {
        $this->data['BizId'] = $value;
        $this->options['form_params']['BizId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAge($value)
    {
        $this->data['Age'] = $value;
        $this->options['form_params']['Age'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withUserName($value)
    {
        $this->data['UserName'] = $value;
        $this->options['form_params']['UserName'] = $value;

        return $this;
    }
}

/**
 * @method string getIsvSubId()
 * @method string getCorpId()
 * @method string getUserGroupName()
 * @method string getParentUserGroupId()
 */
class CreateUserGroup extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withIsvSubId($value)
    {
        $this->data['IsvSubId'] = $value;
        $this->options['form_params']['IsvSubId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCorpId($value)
    {
        $this->data['CorpId'] = $value;
        $this->options['form_params']['CorpId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withUserGroupName($value)
    {
        $this->data['UserGroupName'] = $value;
        $this->options['form_params']['UserGroupName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withParentUserGroupId($value)
    {
        $this->data['ParentUserGroupId'] = $value;
        $this->options['form_params']['ParentUserGroupId'] = $value;

        return $this;
    }
}

/**
 * @method string getCorpId()
 * @method string getDomainName()
 * @method string getVideoFrameRate()
 * @method string getImageFileNames()
 * @method string getAudioFileName()
 * @method string getBucketName()
 * @method string getImageParameters()
 * @method string getVideoFormat()
 */
class CreateVideoComposeTask extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCorpId($value)
    {
        $this->data['CorpId'] = $value;
        $this->options['form_params']['CorpId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDomainName($value)
    {
        $this->data['DomainName'] = $value;
        $this->options['form_params']['DomainName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withVideoFrameRate($value)
    {
        $this->data['VideoFrameRate'] = $value;
        $this->options['form_params']['VideoFrameRate'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withImageFileNames($value)
    {
        $this->data['ImageFileNames'] = $value;
        $this->options['form_params']['ImageFileNames'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAudioFileName($value)
    {
        $this->data['AudioFileName'] = $value;
        $this->options['form_params']['AudioFileName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBucketName($value)
    {
        $this->data['BucketName'] = $value;
        $this->options['form_params']['BucketName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withImageParameters($value)
    {
        $this->data['ImageParameters'] = $value;
        $this->options['form_params']['ImageParameters'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withVideoFormat($value)
    {
        $this->data['VideoFormat'] = $value;
        $this->options['form_params']['VideoFormat'] = $value;

        return $this;
    }
}

/**
 * @method string getCorpId()
 * @method string getLiveVideoSummary()
 * @method string getStartTimeStamp()
 * @method string getDeviceId()
 * @method string getEndTimeStamp()
 * @method string getOptionList()
 */
class CreateVideoSummaryTask extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCorpId($value)
    {
        $this->data['CorpId'] = $value;
        $this->options['form_params']['CorpId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withLiveVideoSummary($value)
    {
        $this->data['LiveVideoSummary'] = $value;
        $this->options['form_params']['LiveVideoSummary'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withStartTimeStamp($value)
    {
        $this->data['StartTimeStamp'] = $value;
        $this->options['form_params']['StartTimeStamp'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDeviceId($value)
    {
        $this->data['DeviceId'] = $value;
        $this->options['form_params']['DeviceId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withEndTimeStamp($value)
    {
        $this->data['EndTimeStamp'] = $value;
        $this->options['form_params']['EndTimeStamp'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOptionList($value)
    {
        $this->data['OptionList'] = $value;
        $this->options['form_params']['OptionList'] = $value;

        return $this;
    }
}

/**
 * @method string getCorpId()
 * @method string getGroupId()
 */
class DeleteCorpGroup extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCorpId($value)
    {
        $this->data['CorpId'] = $value;
        $this->options['form_params']['CorpId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withGroupId($value)
    {
        $this->data['GroupId'] = $value;
        $this->options['form_params']['GroupId'] = $value;

        return $this;
    }
}

/**
 * @method string getCorpId()
 * @method string getDataSourceId()
 */
class DeleteDataSource extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCorpId($value)
    {
        $this->data['CorpId'] = $value;
        $this->options['form_params']['CorpId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDataSourceId($value)
    {
        $this->data['DataSourceId'] = $value;
        $this->options['form_params']['DataSourceId'] = $value;

        return $this;
    }
}

/**
 * @method string getCorpId()
 * @method string getGbId()
 */
class DeleteDevice extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCorpId($value)
    {
        $this->data['CorpId'] = $value;
        $this->options['form_params']['CorpId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withGbId($value)
    {
        $this->data['GbId'] = $value;
        $this->options['form_params']['GbId'] = $value;

        return $this;
    }
}

/**
 * @method string getIsvSubId()
 * @method string getCorpId()
 * @method string getProfileId()
 */
class DeleteProfile extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withIsvSubId($value)
    {
        $this->data['IsvSubId'] = $value;
        $this->options['form_params']['IsvSubId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCorpId($value)
    {
        $this->data['CorpId'] = $value;
        $this->options['form_params']['CorpId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withProfileId($value)
    {
        $this->data['ProfileId'] = $value;
        $this->options['form_params']['ProfileId'] = $value;

        return $this;
    }
}

/**
 * @method string getIsvSubId()
 * @method string getCorpId()
 * @method string getCatalogId()
 */
class DeleteProfileCatalog extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withIsvSubId($value)
    {
        $this->data['IsvSubId'] = $value;
        $this->options['form_params']['IsvSubId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCorpId($value)
    {
        $this->data['CorpId'] = $value;
        $this->options['form_params']['CorpId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCatalogId($value)
    {
        $this->data['CatalogId'] = $value;
        $this->options['form_params']['CatalogId'] = $value;

        return $this;
    }
}

/**
 * @method string getAlgorithmType()
 * @method string getCorpId()
 * @method string getAttributeName()
 * @method string getOperatorType()
 * @method string getValue()
 */
class DeleteRecords extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAlgorithmType($value)
    {
        $this->data['AlgorithmType'] = $value;
        $this->options['form_params']['AlgorithmType'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCorpId($value)
    {
        $this->data['CorpId'] = $value;
        $this->options['form_params']['CorpId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAttributeName($value)
    {
        $this->data['AttributeName'] = $value;
        $this->options['form_params']['AttributeName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOperatorType($value)
    {
        $this->data['OperatorType'] = $value;
        $this->options['form_params']['OperatorType'] = $value;

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
}

/**
 * @method string getIsvSubId()
 * @method string getCorpId()
 * @method string getUserId()
 */
class DeleteUser extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withIsvSubId($value)
    {
        $this->data['IsvSubId'] = $value;
        $this->options['form_params']['IsvSubId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCorpId($value)
    {
        $this->data['CorpId'] = $value;
        $this->options['form_params']['CorpId'] = $value;

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
        $this->options['form_params']['UserId'] = $value;

        return $this;
    }
}

/**
 * @method string getIsvSubId()
 * @method string getCorpId()
 * @method string getUserGroupId()
 */
class DeleteUserGroup extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withIsvSubId($value)
    {
        $this->data['IsvSubId'] = $value;
        $this->options['form_params']['IsvSubId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCorpId($value)
    {
        $this->data['CorpId'] = $value;
        $this->options['form_params']['CorpId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withUserGroupId($value)
    {
        $this->data['UserGroupId'] = $value;
        $this->options['form_params']['UserGroupId'] = $value;

        return $this;
    }
}

/**
 * @method string getCorpId()
 * @method string getTaskId()
 */
class DeleteVideoSummaryTask extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCorpId($value)
    {
        $this->data['CorpId'] = $value;
        $this->options['form_params']['CorpId'] = $value;

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
        $this->options['form_params']['TaskId'] = $value;

        return $this;
    }
}

/**
 * @method string getPageNum()
 * @method string getCorpIdList()
 * @method string getPageSize()
 */
class DescribeDevices extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPageNum($value)
    {
        $this->data['PageNum'] = $value;
        $this->options['form_params']['PageNum'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCorpIdList($value)
    {
        $this->data['CorpIdList'] = $value;
        $this->options['form_params']['CorpIdList'] = $value;

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
}

/**
 * @method string getCorpId()
 */
class GetBodyOptions extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCorpId($value)
    {
        $this->data['CorpId'] = $value;
        $this->options['form_params']['CorpId'] = $value;

        return $this;
    }
}

/**
 * @method string getIsvSubId()
 * @method $this withIsvSubId($value)
 * @method string getCorpId()
 * @method $this withCorpId($value)
 */
class GetCatalogList extends Rpc
{
}

/**
 * @method string getDeviceTimeStamp()
 * @method string getDeviceSn()
 */
class GetDeviceConfig extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDeviceTimeStamp($value)
    {
        $this->data['DeviceTimeStamp'] = $value;
        $this->options['form_params']['DeviceTimeStamp'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDeviceSn($value)
    {
        $this->data['DeviceSn'] = $value;
        $this->options['form_params']['DeviceSn'] = $value;

        return $this;
    }
}

/**
 * @method string getOutProtocol()
 * @method string getStreamType()
 * @method string getCorpId()
 * @method string getGbId()
 * @method string getDeviceId()
 */
class GetDeviceLiveUrl extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOutProtocol($value)
    {
        $this->data['OutProtocol'] = $value;
        $this->options['form_params']['OutProtocol'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withStreamType($value)
    {
        $this->data['StreamType'] = $value;
        $this->options['form_params']['StreamType'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCorpId($value)
    {
        $this->data['CorpId'] = $value;
        $this->options['form_params']['CorpId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withGbId($value)
    {
        $this->data['GbId'] = $value;
        $this->options['form_params']['GbId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDeviceId($value)
    {
        $this->data['DeviceId'] = $value;
        $this->options['form_params']['DeviceId'] = $value;

        return $this;
    }
}

/**
 * @method string getOutProtocol()
 * @method string getCorpId()
 * @method string getGbId()
 * @method string getEndTime()
 * @method string getStartTime()
 * @method string getDeviceId()
 */
class GetDeviceVideoUrl extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOutProtocol($value)
    {
        $this->data['OutProtocol'] = $value;
        $this->options['form_params']['OutProtocol'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCorpId($value)
    {
        $this->data['CorpId'] = $value;
        $this->options['form_params']['CorpId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withGbId($value)
    {
        $this->data['GbId'] = $value;
        $this->options['form_params']['GbId'] = $value;

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
    public function withDeviceId($value)
    {
        $this->data['DeviceId'] = $value;
        $this->options['form_params']['DeviceId'] = $value;

        return $this;
    }
}

/**
 * @method string getPictureUrl()
 * @method string getPictureContent()
 * @method string getPictureId()
 */
class GetFaceModelResult extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPictureUrl($value)
    {
        $this->data['PictureUrl'] = $value;
        $this->options['form_params']['PictureUrl'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPictureContent($value)
    {
        $this->data['PictureContent'] = $value;
        $this->options['form_params']['PictureContent'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPictureId($value)
    {
        $this->data['PictureId'] = $value;
        $this->options['form_params']['PictureId'] = $value;

        return $this;
    }
}

/**
 * @method string getCorpId()
 */
class GetFaceOptions extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCorpId($value)
    {
        $this->data['CorpId'] = $value;
        $this->options['form_params']['CorpId'] = $value;

        return $this;
    }
}

/**
 * @method string getCommodityCode()
 */
class GetInventory extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCommodityCode($value)
    {
        $this->data['CommodityCode'] = $value;
        $this->options['form_params']['CommodityCode'] = $value;

        return $this;
    }
}

/**
 * @method string getCorpId()
 * @method string getPageNo()
 * @method string getPageSize()
 */
class GetMonitorList extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCorpId($value)
    {
        $this->data['CorpId'] = $value;
        $this->options['form_params']['CorpId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPageNo($value)
    {
        $this->data['PageNo'] = $value;
        $this->options['form_params']['PageNo'] = $value;

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
}

/**
 * @method string getCorpId()
 * @method string getEndTime()
 * @method string getStartTime()
 * @method string getAlgorithmVendor()
 * @method string getMinRecordId()
 * @method string getTaskId()
 */
class GetMonitorResult extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCorpId($value)
    {
        $this->data['CorpId'] = $value;
        $this->options['form_params']['CorpId'] = $value;

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
    public function withAlgorithmVendor($value)
    {
        $this->data['AlgorithmVendor'] = $value;
        $this->options['form_params']['AlgorithmVendor'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withMinRecordId($value)
    {
        $this->data['MinRecordId'] = $value;
        $this->options['form_params']['MinRecordId'] = $value;

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
        $this->options['form_params']['TaskId'] = $value;

        return $this;
    }
}

/**
 * @method string getAlgorithmType()
 * @method string getCorpId()
 * @method string getPersonID()
 */
class GetPersonDetail extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAlgorithmType($value)
    {
        $this->data['AlgorithmType'] = $value;
        $this->options['form_params']['AlgorithmType'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCorpId($value)
    {
        $this->data['CorpId'] = $value;
        $this->options['form_params']['CorpId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPersonID($value)
    {
        $this->data['PersonID'] = $value;
        $this->options['form_params']['PersonID'] = $value;

        return $this;
    }
}

/**
 * @method string getCorpId()
 * @method string getFaceMatchingRateThreshold()
 * @method string getPageNumber()
 * @method string getCorpIdList()
 * @method string getFaceUrl()
 * @method string getPageSize()
 * @method string getPersonIdList()
 */
class GetPersonList extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCorpId($value)
    {
        $this->data['CorpId'] = $value;
        $this->options['form_params']['CorpId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withFaceMatchingRateThreshold($value)
    {
        $this->data['FaceMatchingRateThreshold'] = $value;
        $this->options['form_params']['FaceMatchingRateThreshold'] = $value;

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
        $this->options['form_params']['PageNumber'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCorpIdList($value)
    {
        $this->data['CorpIdList'] = $value;
        $this->options['form_params']['CorpIdList'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withFaceUrl($value)
    {
        $this->data['FaceUrl'] = $value;
        $this->options['form_params']['FaceUrl'] = $value;

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
    public function withPersonIdList($value)
    {
        $this->data['PersonIdList'] = $value;
        $this->options['form_params']['PersonIdList'] = $value;

        return $this;
    }
}

/**
 * @method string getIsvSubId()
 * @method string getCorpId()
 * @method string getProfileId()
 */
class GetProfileDetail extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withIsvSubId($value)
    {
        $this->data['IsvSubId'] = $value;
        $this->options['form_params']['IsvSubId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCorpId($value)
    {
        $this->data['CorpId'] = $value;
        $this->options['form_params']['CorpId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withProfileId($value)
    {
        $this->data['ProfileId'] = $value;
        $this->options['form_params']['ProfileId'] = $value;

        return $this;
    }
}

/**
 * @method string getProfileIdList()
 * @method string getCorpId()
 * @method string getGender()
 * @method string getPlateNo()
 * @method string getIdNumber()
 * @method string getPageNumber()
 * @method string getFaceImageId()
 * @method string getFaceUrl()
 * @method string getPageSize()
 * @method string getPersonIdList()
 * @method string getLiveAddress()
 * @method string getIsvSubId()
 * @method string getSceneType()
 * @method string getPhoneNo()
 * @method string getCatalogId()
 * @method string getName()
 * @method string getBizId()
 * @method string getMatchingRateThreshold()
 */
class GetProfileList extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withProfileIdList($value)
    {
        $this->data['ProfileIdList'] = $value;
        $this->options['form_params']['ProfileIdList'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCorpId($value)
    {
        $this->data['CorpId'] = $value;
        $this->options['form_params']['CorpId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withGender($value)
    {
        $this->data['Gender'] = $value;
        $this->options['form_params']['Gender'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPlateNo($value)
    {
        $this->data['PlateNo'] = $value;
        $this->options['form_params']['PlateNo'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withIdNumber($value)
    {
        $this->data['IdNumber'] = $value;
        $this->options['form_params']['IdNumber'] = $value;

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
        $this->options['form_params']['PageNumber'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withFaceImageId($value)
    {
        $this->data['FaceImageId'] = $value;
        $this->options['form_params']['FaceImageId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withFaceUrl($value)
    {
        $this->data['FaceUrl'] = $value;
        $this->options['form_params']['FaceUrl'] = $value;

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
    public function withPersonIdList($value)
    {
        $this->data['PersonIdList'] = $value;
        $this->options['form_params']['PersonIdList'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withLiveAddress($value)
    {
        $this->data['LiveAddress'] = $value;
        $this->options['form_params']['LiveAddress'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withIsvSubId($value)
    {
        $this->data['IsvSubId'] = $value;
        $this->options['form_params']['IsvSubId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSceneType($value)
    {
        $this->data['SceneType'] = $value;
        $this->options['form_params']['SceneType'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPhoneNo($value)
    {
        $this->data['PhoneNo'] = $value;
        $this->options['form_params']['PhoneNo'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCatalogId($value)
    {
        $this->data['CatalogId'] = $value;
        $this->options['form_params']['CatalogId'] = $value;

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
    public function withBizId($value)
    {
        $this->data['BizId'] = $value;
        $this->options['form_params']['BizId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withMatchingRateThreshold($value)
    {
        $this->data['MatchingRateThreshold'] = $value;
        $this->options['form_params']['MatchingRateThreshold'] = $value;

        return $this;
    }
}

/**
 * @method string getIsvSubId()
 * @method string getCorpId()
 * @method string getNeedFaceDetail()
 * @method string getUserId()
 */
class GetUserDetail extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withIsvSubId($value)
    {
        $this->data['IsvSubId'] = $value;
        $this->options['form_params']['IsvSubId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCorpId($value)
    {
        $this->data['CorpId'] = $value;
        $this->options['form_params']['CorpId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withNeedFaceDetail($value)
    {
        $this->data['NeedFaceDetail'] = $value;
        $this->options['form_params']['NeedFaceDetail'] = $value;

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
        $this->options['form_params']['UserId'] = $value;

        return $this;
    }
}

/**
 * @method string getCorpId()
 * @method string getTaskRequestId()
 */
class GetVideoComposeResult extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCorpId($value)
    {
        $this->data['CorpId'] = $value;
        $this->options['form_params']['CorpId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTaskRequestId($value)
    {
        $this->data['TaskRequestId'] = $value;
        $this->options['form_params']['TaskRequestId'] = $value;

        return $this;
    }
}

/**
 * @method string getCorpId()
 * @method string getTaskId()
 */
class GetVideoSummaryTaskResult extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCorpId($value)
    {
        $this->data['CorpId'] = $value;
        $this->options['form_params']['CorpId'] = $value;

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
        $this->options['form_params']['TaskId'] = $value;

        return $this;
    }
}

/**
 * @method string getPicPath()
 * @method string getCorpId()
 * @method string getPicUrl()
 * @method string getPicId()
 */
class InvokeMotorModel extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPicPath($value)
    {
        $this->data['PicPath'] = $value;
        $this->options['form_params']['PicPath'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCorpId($value)
    {
        $this->data['CorpId'] = $value;
        $this->options['form_params']['CorpId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPicUrl($value)
    {
        $this->data['PicUrl'] = $value;
        $this->options['form_params']['PicUrl'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPicId($value)
    {
        $this->data['PicId'] = $value;
        $this->options['form_params']['PicId'] = $value;

        return $this;
    }
}

/**
 * @method string getAlgorithmType()
 * @method string getCorpId()
 * @method string getCapStyle()
 * @method string getEndTime()
 * @method string getStartTime()
 * @method string getPageNumber()
 * @method string getDataSourceId()
 * @method string getPageSize()
 */
class ListBodyAlgorithmResults extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAlgorithmType($value)
    {
        $this->data['AlgorithmType'] = $value;
        $this->options['form_params']['AlgorithmType'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCorpId($value)
    {
        $this->data['CorpId'] = $value;
        $this->options['form_params']['CorpId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCapStyle($value)
    {
        $this->data['CapStyle'] = $value;
        $this->options['form_params']['CapStyle'] = $value;

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
    public function withPageNumber($value)
    {
        $this->data['PageNumber'] = $value;
        $this->options['form_params']['PageNumber'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDataSourceId($value)
    {
        $this->data['DataSourceId'] = $value;
        $this->options['form_params']['DataSourceId'] = $value;

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
}

/**
 * @method string getCorpId()
 * @method string getGroupId()
 * @method string getEndTime()
 * @method string getStartTime()
 * @method string getDeviceId()
 * @method string getPageNumber()
 * @method string getDeviceGroup()
 * @method string getTagCode()
 * @method string getPageSize()
 * @method string getUserGroup()
 */
class ListCorpGroupMetrics extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCorpId($value)
    {
        $this->data['CorpId'] = $value;
        $this->options['form_params']['CorpId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withGroupId($value)
    {
        $this->data['GroupId'] = $value;
        $this->options['form_params']['GroupId'] = $value;

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
    public function withDeviceId($value)
    {
        $this->data['DeviceId'] = $value;
        $this->options['form_params']['DeviceId'] = $value;

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
        $this->options['form_params']['PageNumber'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDeviceGroup($value)
    {
        $this->data['DeviceGroup'] = $value;
        $this->options['form_params']['DeviceGroup'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTagCode($value)
    {
        $this->data['TagCode'] = $value;
        $this->options['form_params']['TagCode'] = $value;

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
    public function withUserGroup($value)
    {
        $this->data['UserGroup'] = $value;
        $this->options['form_params']['UserGroup'] = $value;

        return $this;
    }
}

/**
 * @method string getCorpId()
 * @method string getPageNumber()
 * @method string getPageSize()
 */
class ListCorpGroups extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCorpId($value)
    {
        $this->data['CorpId'] = $value;
        $this->options['form_params']['CorpId'] = $value;

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
        $this->options['form_params']['PageNumber'] = $value;

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
}

/**
 * @method string getCorpId()
 * @method string getEndTime()
 * @method string getStartTime()
 * @method string getPageNumber()
 * @method string getDeviceGroupList()
 * @method string getTagCode()
 * @method string getUserGroupList()
 * @method string getPageSize()
 * @method string getDeviceIdList()
 */
class ListCorpMetrics extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCorpId($value)
    {
        $this->data['CorpId'] = $value;
        $this->options['form_params']['CorpId'] = $value;

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
    public function withPageNumber($value)
    {
        $this->data['PageNumber'] = $value;
        $this->options['form_params']['PageNumber'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDeviceGroupList($value)
    {
        $this->data['DeviceGroupList'] = $value;
        $this->options['form_params']['DeviceGroupList'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTagCode($value)
    {
        $this->data['TagCode'] = $value;
        $this->options['form_params']['TagCode'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withUserGroupList($value)
    {
        $this->data['UserGroupList'] = $value;
        $this->options['form_params']['UserGroupList'] = $value;

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
    public function withDeviceIdList($value)
    {
        $this->data['DeviceIdList'] = $value;
        $this->options['form_params']['DeviceIdList'] = $value;

        return $this;
    }
}

/**
 * @method string getPageNumber()
 * @method string getPageSize()
 * @method string getCorpName()
 */
class ListCorps extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPageNumber($value)
    {
        $this->data['PageNumber'] = $value;
        $this->options['form_params']['PageNumber'] = $value;

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
    public function withCorpName($value)
    {
        $this->data['CorpName'] = $value;
        $this->options['form_params']['CorpName'] = $value;

        return $this;
    }
}

/**
 * @method string getIsPage()
 * @method string getPageNum()
 * @method string getCorpIdList()
 * @method string getDeviceCodeList()
 * @method string getName()
 * @method string getPageSize()
 * @method string getGroup()
 */
class ListDeviceGroups extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withIsPage($value)
    {
        $this->data['IsPage'] = $value;
        $this->options['form_params']['IsPage'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPageNum($value)
    {
        $this->data['PageNum'] = $value;
        $this->options['form_params']['PageNum'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCorpIdList($value)
    {
        $this->data['CorpIdList'] = $value;
        $this->options['form_params']['CorpIdList'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDeviceCodeList($value)
    {
        $this->data['DeviceCodeList'] = $value;
        $this->options['form_params']['DeviceCodeList'] = $value;

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
    public function withGroup($value)
    {
        $this->data['Group'] = $value;
        $this->options['form_params']['Group'] = $value;

        return $this;
    }
}

/**
 * @method string getCorpId()
 * @method string getGbId()
 * @method string getPageNumber()
 * @method string getPageSize()
 * @method string getDeviceName()
 */
class ListDevices extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCorpId($value)
    {
        $this->data['CorpId'] = $value;
        $this->options['form_params']['CorpId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withGbId($value)
    {
        $this->data['GbId'] = $value;
        $this->options['form_params']['GbId'] = $value;

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
        $this->options['form_params']['PageNumber'] = $value;

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
    public function withDeviceName($value)
    {
        $this->data['DeviceName'] = $value;
        $this->options['form_params']['DeviceName'] = $value;

        return $this;
    }
}

/**
 * @method string getSourceId()
 * @method string getCorpId()
 * @method string getExtendValue()
 * @method string getEndTime()
 * @method string getStartTime()
 * @method string getPageNumber()
 * @method string getRecordId()
 * @method string getEventValue()
 * @method string getDataSourceId()
 * @method string getPageSize()
 * @method string getEventType()
 */
class ListEventAlgorithmDetails extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSourceId($value)
    {
        $this->data['SourceId'] = $value;
        $this->options['form_params']['SourceId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCorpId($value)
    {
        $this->data['CorpId'] = $value;
        $this->options['form_params']['CorpId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withExtendValue($value)
    {
        $this->data['ExtendValue'] = $value;
        $this->options['form_params']['ExtendValue'] = $value;

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
    public function withPageNumber($value)
    {
        $this->data['PageNumber'] = $value;
        $this->options['form_params']['PageNumber'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withRecordId($value)
    {
        $this->data['RecordId'] = $value;
        $this->options['form_params']['RecordId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withEventValue($value)
    {
        $this->data['EventValue'] = $value;
        $this->options['form_params']['EventValue'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDataSourceId($value)
    {
        $this->data['DataSourceId'] = $value;
        $this->options['form_params']['DataSourceId'] = $value;

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
    public function withEventType($value)
    {
        $this->data['EventType'] = $value;
        $this->options['form_params']['EventType'] = $value;

        return $this;
    }
}

/**
 * @method string getCorpId()
 * @method string getExtendValue()
 * @method string getEndTime()
 * @method string getStartTime()
 * @method string getPageNumber()
 * @method string getDataSourceId()
 * @method string getPageSize()
 * @method string getEventType()
 */
class ListEventAlgorithmResults extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCorpId($value)
    {
        $this->data['CorpId'] = $value;
        $this->options['form_params']['CorpId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withExtendValue($value)
    {
        $this->data['ExtendValue'] = $value;
        $this->options['form_params']['ExtendValue'] = $value;

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
    public function withPageNumber($value)
    {
        $this->data['PageNumber'] = $value;
        $this->options['form_params']['PageNumber'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDataSourceId($value)
    {
        $this->data['DataSourceId'] = $value;
        $this->options['form_params']['DataSourceId'] = $value;

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
    public function withEventType($value)
    {
        $this->data['EventType'] = $value;
        $this->options['form_params']['EventType'] = $value;

        return $this;
    }
}

/**
 * @method string getAlgorithmType()
 * @method string getCorpId()
 * @method string getEndTime()
 * @method string getStartTime()
 * @method string getPageNumber()
 * @method string getDataSourceId()
 * @method string getPageSize()
 */
class ListFaceAlgorithmResults extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAlgorithmType($value)
    {
        $this->data['AlgorithmType'] = $value;
        $this->options['form_params']['AlgorithmType'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCorpId($value)
    {
        $this->data['CorpId'] = $value;
        $this->options['form_params']['CorpId'] = $value;

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
    public function withPageNumber($value)
    {
        $this->data['PageNumber'] = $value;
        $this->options['form_params']['PageNumber'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDataSourceId($value)
    {
        $this->data['DataSourceId'] = $value;
        $this->options['form_params']['DataSourceId'] = $value;

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
}

/**
 * @method string getCorpId()
 * @method string getEndTime()
 * @method string getStartTime()
 * @method string getPageNumber()
 * @method string getTagCode()
 * @method string getPageSize()
 * @method string getAggregateType()
 */
class ListMetrics extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCorpId($value)
    {
        $this->data['CorpId'] = $value;
        $this->options['form_params']['CorpId'] = $value;

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
    public function withPageNumber($value)
    {
        $this->data['PageNumber'] = $value;
        $this->options['form_params']['PageNumber'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTagCode($value)
    {
        $this->data['TagCode'] = $value;
        $this->options['form_params']['TagCode'] = $value;

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
    public function withAggregateType($value)
    {
        $this->data['AggregateType'] = $value;
        $this->options['form_params']['AggregateType'] = $value;

        return $this;
    }
}

/**
 * @method string getAlgorithmType()
 * @method string getCorpId()
 * @method string getEndTime()
 * @method string getStartTime()
 * @method string getPageNumber()
 * @method string getPlateNumber()
 * @method string getDataSourceId()
 * @method string getPageSize()
 */
class ListMotorAlgorithmResults extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAlgorithmType($value)
    {
        $this->data['AlgorithmType'] = $value;
        $this->options['form_params']['AlgorithmType'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCorpId($value)
    {
        $this->data['CorpId'] = $value;
        $this->options['form_params']['CorpId'] = $value;

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
    public function withPageNumber($value)
    {
        $this->data['PageNumber'] = $value;
        $this->options['form_params']['PageNumber'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPlateNumber($value)
    {
        $this->data['PlateNumber'] = $value;
        $this->options['form_params']['PlateNumber'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDataSourceId($value)
    {
        $this->data['DataSourceId'] = $value;
        $this->options['form_params']['DataSourceId'] = $value;

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
}

/**
 * @method string getAlgorithmType()
 * @method string getCorpId()
 * @method string getEndTime()
 * @method string getStartTime()
 * @method string getPageNo()
 * @method string getPageSize()
 */
class ListPersons extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAlgorithmType($value)
    {
        $this->data['AlgorithmType'] = $value;
        $this->options['form_params']['AlgorithmType'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCorpId($value)
    {
        $this->data['CorpId'] = $value;
        $this->options['form_params']['CorpId'] = $value;

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
    public function withPageNo($value)
    {
        $this->data['PageNo'] = $value;
        $this->options['form_params']['PageNo'] = $value;

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
}

/**
 * @method string getCorpId()
 * @method string getGroupId()
 * @method string getEndTime()
 * @method string getStartTime()
 * @method string getPageNumber()
 * @method string getPageSize()
 * @method string getDataSourceId()
 * @method string getPersonId()
 */
class ListPersonTrace extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCorpId($value)
    {
        $this->data['CorpId'] = $value;
        $this->options['form_params']['CorpId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withGroupId($value)
    {
        $this->data['GroupId'] = $value;
        $this->options['form_params']['GroupId'] = $value;

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
    public function withPageNumber($value)
    {
        $this->data['PageNumber'] = $value;
        $this->options['form_params']['PageNumber'] = $value;

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
    public function withDataSourceId($value)
    {
        $this->data['DataSourceId'] = $value;
        $this->options['form_params']['DataSourceId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPersonId($value)
    {
        $this->data['PersonId'] = $value;
        $this->options['form_params']['PersonId'] = $value;

        return $this;
    }
}

/**
 * @method string getCorpId()
 * @method string getEndTime()
 * @method string getStartTime()
 * @method string getPageNumber()
 * @method string getSubId()
 * @method string getPageSize()
 * @method string getDataSourceId()
 * @method string getPersonId()
 */
class ListPersonTraceDetails extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCorpId($value)
    {
        $this->data['CorpId'] = $value;
        $this->options['form_params']['CorpId'] = $value;

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
    public function withPageNumber($value)
    {
        $this->data['PageNumber'] = $value;
        $this->options['form_params']['PageNumber'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSubId($value)
    {
        $this->data['SubId'] = $value;
        $this->options['form_params']['SubId'] = $value;

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
    public function withDataSourceId($value)
    {
        $this->data['DataSourceId'] = $value;
        $this->options['form_params']['DataSourceId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPersonId($value)
    {
        $this->data['PersonId'] = $value;
        $this->options['form_params']['PersonId'] = $value;

        return $this;
    }
}

/**
 * @method string getCorpId()
 * @method string getEndTime()
 * @method string getCountType()
 * @method string getStartTime()
 * @method string getPageNumber()
 * @method string getTimeAggregateType()
 * @method string getMaxVal()
 * @method string getTagCode()
 * @method string getMinVal()
 * @method string getPageSize()
 * @method string getAggregateType()
 */
class ListPersonVisitCount extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCorpId($value)
    {
        $this->data['CorpId'] = $value;
        $this->options['form_params']['CorpId'] = $value;

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
    public function withCountType($value)
    {
        $this->data['CountType'] = $value;
        $this->options['form_params']['CountType'] = $value;

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
    public function withPageNumber($value)
    {
        $this->data['PageNumber'] = $value;
        $this->options['form_params']['PageNumber'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTimeAggregateType($value)
    {
        $this->data['TimeAggregateType'] = $value;
        $this->options['form_params']['TimeAggregateType'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withMaxVal($value)
    {
        $this->data['MaxVal'] = $value;
        $this->options['form_params']['MaxVal'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTagCode($value)
    {
        $this->data['TagCode'] = $value;
        $this->options['form_params']['TagCode'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withMinVal($value)
    {
        $this->data['MinVal'] = $value;
        $this->options['form_params']['MinVal'] = $value;

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
    public function withAggregateType($value)
    {
        $this->data['AggregateType'] = $value;
        $this->options['form_params']['AggregateType'] = $value;

        return $this;
    }
}

/**
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getPageNum()
 * @method $this withPageNum($value)
 */
class ListSubscribeDevice extends Rpc
{
}

/**
 * @method string getIsvSubId()
 * @method $this withIsvSubId($value)
 * @method string getCorpId()
 * @method $this withCorpId($value)
 */
class ListUserGroups extends Rpc
{
}

/**
 * @method string getUserList()
 * @method string getCorpId()
 * @method string getGender()
 * @method string getPlateNo()
 * @method string getIdNumber()
 * @method string getFaceImageUrl()
 * @method string getPersonList()
 * @method string getPageNumber()
 * @method string getAttachment()
 * @method string getPageSize()
 * @method string getIsvSubId()
 * @method string getAddress()
 * @method string getUserGroupId()
 * @method string getPhoneNo()
 * @method string getBizId()
 * @method string getAge()
 * @method string getMatchingRateThreshold()
 * @method string getUserName()
 */
class ListUsers extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withUserList($value)
    {
        $this->data['UserList'] = $value;
        $this->options['form_params']['UserList'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCorpId($value)
    {
        $this->data['CorpId'] = $value;
        $this->options['form_params']['CorpId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withGender($value)
    {
        $this->data['Gender'] = $value;
        $this->options['form_params']['Gender'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPlateNo($value)
    {
        $this->data['PlateNo'] = $value;
        $this->options['form_params']['PlateNo'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withIdNumber($value)
    {
        $this->data['IdNumber'] = $value;
        $this->options['form_params']['IdNumber'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withFaceImageUrl($value)
    {
        $this->data['FaceImageUrl'] = $value;
        $this->options['form_params']['FaceImageUrl'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPersonList($value)
    {
        $this->data['PersonList'] = $value;
        $this->options['form_params']['PersonList'] = $value;

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
        $this->options['form_params']['PageNumber'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAttachment($value)
    {
        $this->data['Attachment'] = $value;
        $this->options['form_params']['Attachment'] = $value;

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
    public function withIsvSubId($value)
    {
        $this->data['IsvSubId'] = $value;
        $this->options['form_params']['IsvSubId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAddress($value)
    {
        $this->data['Address'] = $value;
        $this->options['form_params']['Address'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withUserGroupId($value)
    {
        $this->data['UserGroupId'] = $value;
        $this->options['form_params']['UserGroupId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPhoneNo($value)
    {
        $this->data['PhoneNo'] = $value;
        $this->options['form_params']['PhoneNo'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBizId($value)
    {
        $this->data['BizId'] = $value;
        $this->options['form_params']['BizId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAge($value)
    {
        $this->data['Age'] = $value;
        $this->options['form_params']['Age'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withMatchingRateThreshold($value)
    {
        $this->data['MatchingRateThreshold'] = $value;
        $this->options['form_params']['MatchingRateThreshold'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withUserName($value)
    {
        $this->data['UserName'] = $value;
        $this->options['form_params']['UserName'] = $value;

        return $this;
    }
}

/**
 * @method string getCorpId()
 * @method string getPicUrl()
 * @method string getPicContent()
 * @method string getPicFormat()
 */
class RecognizeFaceQuality extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCorpId($value)
    {
        $this->data['CorpId'] = $value;
        $this->options['form_params']['CorpId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPicUrl($value)
    {
        $this->data['PicUrl'] = $value;
        $this->options['form_params']['PicUrl'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPicContent($value)
    {
        $this->data['PicContent'] = $value;
        $this->options['form_params']['PicContent'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPicFormat($value)
    {
        $this->data['PicFormat'] = $value;
        $this->options['form_params']['PicFormat'] = $value;

        return $this;
    }
}

/**
 * @method string getCorpId()
 * @method string getPicUrl()
 * @method string getPicContent()
 * @method string getPicFormat()
 */
class RecognizeImage extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCorpId($value)
    {
        $this->data['CorpId'] = $value;
        $this->options['form_params']['CorpId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPicUrl($value)
    {
        $this->data['PicUrl'] = $value;
        $this->options['form_params']['PicUrl'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPicContent($value)
    {
        $this->data['PicContent'] = $value;
        $this->options['form_params']['PicContent'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPicFormat($value)
    {
        $this->data['PicFormat'] = $value;
        $this->options['form_params']['PicFormat'] = $value;

        return $this;
    }
}

/**
 * @method string getDeviceTimeStamp()
 * @method string getDeviceSn()
 * @method string getDeviceId()
 * @method string getServerId()
 */
class RegisterDevice extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDeviceTimeStamp($value)
    {
        $this->data['DeviceTimeStamp'] = $value;
        $this->options['form_params']['DeviceTimeStamp'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDeviceSn($value)
    {
        $this->data['DeviceSn'] = $value;
        $this->options['form_params']['DeviceSn'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDeviceId($value)
    {
        $this->data['DeviceId'] = $value;
        $this->options['form_params']['DeviceId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withServerId($value)
    {
        $this->data['ServerId'] = $value;
        $this->options['form_params']['ServerId'] = $value;

        return $this;
    }
}

/**
 * @method array getStreamCapacities()
 * @method string getLatitude()
 * @method string getPresetNum()
 * @method string getDeviceTimeStamp()
 * @method string getDeviceSn()
 * @method string getAudioFormat()
 * @method string getPTZCapacity()
 * @method string getLongitude()
 */
class ReportDeviceCapacity extends Rpc
{

    /**
     * @param array $streamCapacities
     *
     * @return $this
     */
	public function withStreamCapacities(array $streamCapacities)
	{
	    $this->data['StreamCapacities'] = $streamCapacities;
		foreach ($streamCapacities as $depth1 => $depth1Value) {
			if(isset($depth1Value['BitrateRange'])){
				$this->options['form_params']['StreamCapacities.' . ($depth1 + 1) . '.BitrateRange'] = $depth1Value['BitrateRange'];
			}
			if(isset($depth1Value['MaxStream'])){
				$this->options['form_params']['StreamCapacities.' . ($depth1 + 1) . '.MaxStream'] = $depth1Value['MaxStream'];
			}
			if(isset($depth1Value['EncodeFormat'])){
				$this->options['form_params']['StreamCapacities.' . ($depth1 + 1) . '.EncodeFormat'] = $depth1Value['EncodeFormat'];
			}
			if(isset($depth1Value['MaxFrameRate'])){
				$this->options['form_params']['StreamCapacities.' . ($depth1 + 1) . '.MaxFrameRate'] = $depth1Value['MaxFrameRate'];
			}
			if(isset($depth1Value['GovLengthRange'])){
				$this->options['form_params']['StreamCapacities.' . ($depth1 + 1) . '.GovLengthRange'] = $depth1Value['GovLengthRange'];
			}
			if(isset($depth1Value['Resolution'])){
				$this->options['form_params']['StreamCapacities.' . ($depth1 + 1) . '.Resolution'] = $depth1Value['Resolution'];
			}
		}

		return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withLatitude($value)
    {
        $this->data['Latitude'] = $value;
        $this->options['form_params']['Latitude'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPresetNum($value)
    {
        $this->data['PresetNum'] = $value;
        $this->options['form_params']['PresetNum'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDeviceTimeStamp($value)
    {
        $this->data['DeviceTimeStamp'] = $value;
        $this->options['form_params']['DeviceTimeStamp'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDeviceSn($value)
    {
        $this->data['DeviceSn'] = $value;
        $this->options['form_params']['DeviceSn'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAudioFormat($value)
    {
        $this->data['AudioFormat'] = $value;
        $this->options['form_params']['AudioFormat'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPTZCapacity($value)
    {
        $this->data['PTZCapacity'] = $value;
        $this->options['form_params']['PTZCapacity'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withLongitude($value)
    {
        $this->data['Longitude'] = $value;
        $this->options['form_params']['Longitude'] = $value;

        return $this;
    }
}

/**
 * @method string getCorpId()
 * @method string getSaveVideo()
 * @method string getTaskId()
 */
class SaveVideoSummaryTaskVideo extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCorpId($value)
    {
        $this->data['CorpId'] = $value;
        $this->options['form_params']['CorpId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSaveVideo($value)
    {
        $this->data['SaveVideo'] = $value;
        $this->options['form_params']['SaveVideo'] = $value;

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
        $this->options['form_params']['TaskId'] = $value;

        return $this;
    }
}

/**
 * @method string getCorpId()
 * @method string getGbId()
 * @method string getStartTimeStamp()
 * @method string getEndTimeStamp()
 * @method string getPageNo()
 * @method string getPageSize()
 * @method string getOptionList()
 */
class SearchBody extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCorpId($value)
    {
        $this->data['CorpId'] = $value;
        $this->options['form_params']['CorpId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withGbId($value)
    {
        $this->data['GbId'] = $value;
        $this->options['form_params']['GbId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withStartTimeStamp($value)
    {
        $this->data['StartTimeStamp'] = $value;
        $this->options['form_params']['StartTimeStamp'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withEndTimeStamp($value)
    {
        $this->data['EndTimeStamp'] = $value;
        $this->options['form_params']['EndTimeStamp'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPageNo($value)
    {
        $this->data['PageNo'] = $value;
        $this->options['form_params']['PageNo'] = $value;

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
    public function withOptionList($value)
    {
        $this->data['OptionList'] = $value;
        $this->options['form_params']['OptionList'] = $value;

        return $this;
    }
}

/**
 * @method string getCorpId()
 * @method string getGbId()
 * @method string getStartTimeStamp()
 * @method string getEndTimeStamp()
 * @method string getPageNo()
 * @method string getPageSize()
 * @method string getOptionList()
 */
class SearchFace extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCorpId($value)
    {
        $this->data['CorpId'] = $value;
        $this->options['form_params']['CorpId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withGbId($value)
    {
        $this->data['GbId'] = $value;
        $this->options['form_params']['GbId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withStartTimeStamp($value)
    {
        $this->data['StartTimeStamp'] = $value;
        $this->options['form_params']['StartTimeStamp'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withEndTimeStamp($value)
    {
        $this->data['EndTimeStamp'] = $value;
        $this->options['form_params']['EndTimeStamp'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPageNo($value)
    {
        $this->data['PageNo'] = $value;
        $this->options['form_params']['PageNo'] = $value;

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
    public function withOptionList($value)
    {
        $this->data['OptionList'] = $value;
        $this->options['form_params']['OptionList'] = $value;

        return $this;
    }
}

/**
 * @method string getAlgorithmType()
 * @method string getCorpId()
 * @method string getEndTime()
 * @method string getStartTime()
 * @method string getPageNumber()
 * @method string getDeviceList()
 * @method string getPicUrl()
 * @method string getImagePath()
 * @method string getPageSize()
 * @method string getObjectType()
 * @method string getConditions()
 */
class SearchObject extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAlgorithmType($value)
    {
        $this->data['AlgorithmType'] = $value;
        $this->options['form_params']['AlgorithmType'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCorpId($value)
    {
        $this->data['CorpId'] = $value;
        $this->options['form_params']['CorpId'] = $value;

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
    public function withPageNumber($value)
    {
        $this->data['PageNumber'] = $value;
        $this->options['form_params']['PageNumber'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDeviceList($value)
    {
        $this->data['DeviceList'] = $value;
        $this->options['form_params']['DeviceList'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPicUrl($value)
    {
        $this->data['PicUrl'] = $value;
        $this->options['form_params']['PicUrl'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withImagePath($value)
    {
        $this->data['ImagePath'] = $value;
        $this->options['form_params']['ImagePath'] = $value;

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
    public function withObjectType($value)
    {
        $this->data['ObjectType'] = $value;
        $this->options['form_params']['ObjectType'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withConditions($value)
    {
        $this->data['Conditions'] = $value;
        $this->options['form_params']['Conditions'] = $value;

        return $this;
    }
}

/**
 * @method string getAlgorithmVendor()
 * @method string getTaskId()
 */
class StopMonitor extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAlgorithmVendor($value)
    {
        $this->data['AlgorithmVendor'] = $value;
        $this->options['form_params']['AlgorithmVendor'] = $value;

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
        $this->options['form_params']['TaskId'] = $value;

        return $this;
    }
}

/**
 * @method string getPushConfig()
 * @method $this withPushConfig($value)
 * @method string getDeviceId()
 * @method $this withDeviceId($value)
 */
class SubscribeDeviceEvent extends Rpc
{
}

/**
 * @method string getSpaceId()
 * @method $this withSpaceId($value)
 * @method string getPushConfig()
 * @method $this withPushConfig($value)
 */
class SubscribeSpaceEvent extends Rpc
{
}

/**
 * @method string getDeviceTimeStamp()
 * @method string getDeviceSn()
 */
class SyncDeviceTime extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDeviceTimeStamp($value)
    {
        $this->data['DeviceTimeStamp'] = $value;
        $this->options['form_params']['DeviceTimeStamp'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDeviceSn($value)
    {
        $this->data['DeviceSn'] = $value;
        $this->options['form_params']['DeviceSn'] = $value;

        return $this;
    }
}

/**
 * @method string getCorpId()
 * @method string getCorpGroupId()
 */
class UnbindCorpGroup extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCorpId($value)
    {
        $this->data['CorpId'] = $value;
        $this->options['form_params']['CorpId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCorpGroupId($value)
    {
        $this->data['CorpGroupId'] = $value;
        $this->options['form_params']['CorpGroupId'] = $value;

        return $this;
    }
}

/**
 * @method string getIsvSubId()
 * @method string getCorpId()
 * @method string getProfileId()
 */
class UnbindPerson extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withIsvSubId($value)
    {
        $this->data['IsvSubId'] = $value;
        $this->options['form_params']['IsvSubId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCorpId($value)
    {
        $this->data['CorpId'] = $value;
        $this->options['form_params']['CorpId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withProfileId($value)
    {
        $this->data['ProfileId'] = $value;
        $this->options['form_params']['ProfileId'] = $value;

        return $this;
    }
}

/**
 * @method string getIsvSubId()
 * @method string getCorpId()
 * @method string getUserId()
 */
class UnbindUser extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withIsvSubId($value)
    {
        $this->data['IsvSubId'] = $value;
        $this->options['form_params']['IsvSubId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCorpId($value)
    {
        $this->data['CorpId'] = $value;
        $this->options['form_params']['CorpId'] = $value;

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
        $this->options['form_params']['UserId'] = $value;

        return $this;
    }
}

/**
 * @method string getDeviceId()
 * @method $this withDeviceId($value)
 */
class UnsubscribeDeviceEvent extends Rpc
{
}

/**
 * @method string getSpaceId()
 * @method $this withSpaceId($value)
 */
class UnsubscribeSpaceEvent extends Rpc
{
}

/**
 * @method string getIsvSubId()
 * @method string getCorpId()
 * @method string getParentCorpId()
 * @method string getDescription()
 * @method string getIconPath()
 * @method string getAppName()
 * @method string getCorpName()
 */
class UpdateCorp extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withIsvSubId($value)
    {
        $this->data['IsvSubId'] = $value;
        $this->options['form_params']['IsvSubId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCorpId($value)
    {
        $this->data['CorpId'] = $value;
        $this->options['form_params']['CorpId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withParentCorpId($value)
    {
        $this->data['ParentCorpId'] = $value;
        $this->options['form_params']['ParentCorpId'] = $value;

        return $this;
    }

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
    public function withIconPath($value)
    {
        $this->data['IconPath'] = $value;
        $this->options['form_params']['IconPath'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAppName($value)
    {
        $this->data['AppName'] = $value;
        $this->options['form_params']['AppName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCorpName($value)
    {
        $this->data['CorpName'] = $value;
        $this->options['form_params']['CorpName'] = $value;

        return $this;
    }
}

/**
 * @method string getDeviceSite()
 * @method string getCorpId()
 * @method string getGbId()
 * @method string getBitRate()
 * @method string getDeviceDirection()
 * @method string getDeviceAddress()
 * @method string getDeviceType()
 * @method string getDeviceResolution()
 * @method string getVendor()
 * @method string getDeviceName()
 */
class UpdateDevice extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDeviceSite($value)
    {
        $this->data['DeviceSite'] = $value;
        $this->options['form_params']['DeviceSite'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCorpId($value)
    {
        $this->data['CorpId'] = $value;
        $this->options['form_params']['CorpId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withGbId($value)
    {
        $this->data['GbId'] = $value;
        $this->options['form_params']['GbId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBitRate($value)
    {
        $this->data['BitRate'] = $value;
        $this->options['form_params']['BitRate'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDeviceDirection($value)
    {
        $this->data['DeviceDirection'] = $value;
        $this->options['form_params']['DeviceDirection'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDeviceAddress($value)
    {
        $this->data['DeviceAddress'] = $value;
        $this->options['form_params']['DeviceAddress'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDeviceType($value)
    {
        $this->data['DeviceType'] = $value;
        $this->options['form_params']['DeviceType'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDeviceResolution($value)
    {
        $this->data['DeviceResolution'] = $value;
        $this->options['form_params']['DeviceResolution'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withVendor($value)
    {
        $this->data['Vendor'] = $value;
        $this->options['form_params']['Vendor'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDeviceName($value)
    {
        $this->data['DeviceName'] = $value;
        $this->options['form_params']['DeviceName'] = $value;

        return $this;
    }
}

/**
 * @method string getCorpId()
 * @method string getDescription()
 * @method string getRuleName()
 * @method string getPicOperateType()
 * @method string getAttributeName()
 * @method string getAttributeOperateType()
 * @method string getRuleExpression()
 * @method string getNotifierTimeOut()
 * @method string getTaskId()
 * @method string getDeviceOperateType()
 * @method string getPicList()
 * @method string getAttributeValueList()
 * @method string getNotifierAppSecret()
 * @method string getNotifierExtendValues()
 * @method string getDeviceList()
 * @method string getNotifierUrl()
 * @method string getNotifierType()
 * @method string getAlgorithmVendor()
 */
class UpdateMonitor extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCorpId($value)
    {
        $this->data['CorpId'] = $value;
        $this->options['form_params']['CorpId'] = $value;

        return $this;
    }

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
    public function withRuleName($value)
    {
        $this->data['RuleName'] = $value;
        $this->options['form_params']['RuleName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPicOperateType($value)
    {
        $this->data['PicOperateType'] = $value;
        $this->options['form_params']['PicOperateType'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAttributeName($value)
    {
        $this->data['AttributeName'] = $value;
        $this->options['form_params']['AttributeName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAttributeOperateType($value)
    {
        $this->data['AttributeOperateType'] = $value;
        $this->options['form_params']['AttributeOperateType'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withRuleExpression($value)
    {
        $this->data['RuleExpression'] = $value;
        $this->options['form_params']['RuleExpression'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withNotifierTimeOut($value)
    {
        $this->data['NotifierTimeOut'] = $value;
        $this->options['form_params']['NotifierTimeOut'] = $value;

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
        $this->options['form_params']['TaskId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDeviceOperateType($value)
    {
        $this->data['DeviceOperateType'] = $value;
        $this->options['form_params']['DeviceOperateType'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPicList($value)
    {
        $this->data['PicList'] = $value;
        $this->options['form_params']['PicList'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAttributeValueList($value)
    {
        $this->data['AttributeValueList'] = $value;
        $this->options['form_params']['AttributeValueList'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withNotifierAppSecret($value)
    {
        $this->data['NotifierAppSecret'] = $value;
        $this->options['form_params']['NotifierAppSecret'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withNotifierExtendValues($value)
    {
        $this->data['NotifierExtendValues'] = $value;
        $this->options['form_params']['NotifierExtendValues'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDeviceList($value)
    {
        $this->data['DeviceList'] = $value;
        $this->options['form_params']['DeviceList'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withNotifierUrl($value)
    {
        $this->data['NotifierUrl'] = $value;
        $this->options['form_params']['NotifierUrl'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withNotifierType($value)
    {
        $this->data['NotifierType'] = $value;
        $this->options['form_params']['NotifierType'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAlgorithmVendor($value)
    {
        $this->data['AlgorithmVendor'] = $value;
        $this->options['form_params']['AlgorithmVendor'] = $value;

        return $this;
    }
}

/**
 * @method string getCorpId()
 * @method string getGender()
 * @method string getPlateNo()
 * @method string getIdNumber()
 * @method string getFaceUrl()
 * @method string getProfileId()
 * @method string getLiveAddress()
 * @method string getIsvSubId()
 * @method string getSceneType()
 * @method string getPhoneNo()
 * @method string getCatalogId()
 * @method string getName()
 * @method string getBizId()
 */
class UpdateProfile extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCorpId($value)
    {
        $this->data['CorpId'] = $value;
        $this->options['form_params']['CorpId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withGender($value)
    {
        $this->data['Gender'] = $value;
        $this->options['form_params']['Gender'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPlateNo($value)
    {
        $this->data['PlateNo'] = $value;
        $this->options['form_params']['PlateNo'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withIdNumber($value)
    {
        $this->data['IdNumber'] = $value;
        $this->options['form_params']['IdNumber'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withFaceUrl($value)
    {
        $this->data['FaceUrl'] = $value;
        $this->options['form_params']['FaceUrl'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withProfileId($value)
    {
        $this->data['ProfileId'] = $value;
        $this->options['form_params']['ProfileId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withLiveAddress($value)
    {
        $this->data['LiveAddress'] = $value;
        $this->options['form_params']['LiveAddress'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withIsvSubId($value)
    {
        $this->data['IsvSubId'] = $value;
        $this->options['form_params']['IsvSubId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSceneType($value)
    {
        $this->data['SceneType'] = $value;
        $this->options['form_params']['SceneType'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPhoneNo($value)
    {
        $this->data['PhoneNo'] = $value;
        $this->options['form_params']['PhoneNo'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCatalogId($value)
    {
        $this->data['CatalogId'] = $value;
        $this->options['form_params']['CatalogId'] = $value;

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
    public function withBizId($value)
    {
        $this->data['BizId'] = $value;
        $this->options['form_params']['BizId'] = $value;

        return $this;
    }
}

/**
 * @method string getIsvSubId()
 * @method string getCorpId()
 * @method string getCatalogName()
 * @method string getCatalogId()
 */
class UpdateProfileCatalog extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withIsvSubId($value)
    {
        $this->data['IsvSubId'] = $value;
        $this->options['form_params']['IsvSubId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCorpId($value)
    {
        $this->data['CorpId'] = $value;
        $this->options['form_params']['CorpId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCatalogName($value)
    {
        $this->data['CatalogName'] = $value;
        $this->options['form_params']['CatalogName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCatalogId($value)
    {
        $this->data['CatalogId'] = $value;
        $this->options['form_params']['CatalogId'] = $value;

        return $this;
    }
}

/**
 * @method string getCorpId()
 * @method string getFaceImageContent()
 * @method string getGender()
 * @method string getPlateNo()
 * @method string getIdNumber()
 * @method string getFaceImageUrl()
 * @method string getUserId()
 * @method string getAttachment()
 * @method string getIsvSubId()
 * @method string getAddress()
 * @method string getUserGroupId()
 * @method string getPhoneNo()
 * @method string getBizId()
 * @method string getAge()
 * @method string getUserName()
 */
class UpdateUser extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCorpId($value)
    {
        $this->data['CorpId'] = $value;
        $this->options['form_params']['CorpId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withFaceImageContent($value)
    {
        $this->data['FaceImageContent'] = $value;
        $this->options['form_params']['FaceImageContent'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withGender($value)
    {
        $this->data['Gender'] = $value;
        $this->options['form_params']['Gender'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPlateNo($value)
    {
        $this->data['PlateNo'] = $value;
        $this->options['form_params']['PlateNo'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withIdNumber($value)
    {
        $this->data['IdNumber'] = $value;
        $this->options['form_params']['IdNumber'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withFaceImageUrl($value)
    {
        $this->data['FaceImageUrl'] = $value;
        $this->options['form_params']['FaceImageUrl'] = $value;

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
        $this->options['form_params']['UserId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAttachment($value)
    {
        $this->data['Attachment'] = $value;
        $this->options['form_params']['Attachment'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withIsvSubId($value)
    {
        $this->data['IsvSubId'] = $value;
        $this->options['form_params']['IsvSubId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAddress($value)
    {
        $this->data['Address'] = $value;
        $this->options['form_params']['Address'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withUserGroupId($value)
    {
        $this->data['UserGroupId'] = $value;
        $this->options['form_params']['UserGroupId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPhoneNo($value)
    {
        $this->data['PhoneNo'] = $value;
        $this->options['form_params']['PhoneNo'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBizId($value)
    {
        $this->data['BizId'] = $value;
        $this->options['form_params']['BizId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAge($value)
    {
        $this->data['Age'] = $value;
        $this->options['form_params']['Age'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withUserName($value)
    {
        $this->data['UserName'] = $value;
        $this->options['form_params']['UserName'] = $value;

        return $this;
    }
}

/**
 * @method string getIsvSubId()
 * @method string getCorpId()
 * @method string getUserGroupId()
 * @method string getUserGroupName()
 */
class UpdateUserGroup extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withIsvSubId($value)
    {
        $this->data['IsvSubId'] = $value;
        $this->options['form_params']['IsvSubId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCorpId($value)
    {
        $this->data['CorpId'] = $value;
        $this->options['form_params']['CorpId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withUserGroupId($value)
    {
        $this->data['UserGroupId'] = $value;
        $this->options['form_params']['UserGroupId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withUserGroupName($value)
    {
        $this->data['UserGroupName'] = $value;
        $this->options['form_params']['UserGroupName'] = $value;

        return $this;
    }
}

/**
 * @method string getFileType()
 * @method string getCorpId()
 * @method string getFileAliasName()
 * @method string getFileName()
 * @method string getFilePath()
 * @method string getFileContent()
 * @method string getDataSourceId()
 * @method string getMD5()
 */
class UploadFile extends Rpc
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
    public function withCorpId($value)
    {
        $this->data['CorpId'] = $value;
        $this->options['form_params']['CorpId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withFileAliasName($value)
    {
        $this->data['FileAliasName'] = $value;
        $this->options['form_params']['FileAliasName'] = $value;

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

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withFilePath($value)
    {
        $this->data['FilePath'] = $value;
        $this->options['form_params']['FilePath'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withFileContent($value)
    {
        $this->data['FileContent'] = $value;
        $this->options['form_params']['FileContent'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDataSourceId($value)
    {
        $this->data['DataSourceId'] = $value;
        $this->options['form_params']['DataSourceId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withMD5($value)
    {
        $this->data['MD5'] = $value;
        $this->options['form_params']['MD5'] = $value;

        return $this;
    }
}

/**
 * @method string getImageUrl()
 */
class UploadImage extends Rpc
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
}
