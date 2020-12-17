<?php

namespace AlibabaCloud\MPaaS\V20190821;

use AlibabaCloud\Client\Resolver\ApiResolver;

/**
 * @method ChangeMcubeMiniTaskStatus changeMcubeMiniTaskStatus(array $options = [])
 * @method CreateMcubeMiniApp createMcubeMiniApp(array $options = [])
 * @method CreateMcubeMiniTask createMcubeMiniTask(array $options = [])
 * @method CreateMcubeVhost createMcubeVhost(array $options = [])
 * @method CreateMcubeWhitelist createMcubeWhitelist(array $options = [])
 * @method CreateMcubeWhitelistForIde createMcubeWhitelistForIde(array $options = [])
 * @method CreateMsaEnhance createMsaEnhance(array $options = [])
 * @method CreateOpenGlobalData createOpenGlobalData(array $options = [])
 * @method CreateOpenSingleData createOpenSingleData(array $options = [])
 * @method DeleteMcubeMiniApp deleteMcubeMiniApp(array $options = [])
 * @method DeleteMcubeWhitelist deleteMcubeWhitelist(array $options = [])
 * @method DeleteMpaasMrtcArtvcRecordfile deleteMpaasMrtcArtvcRecordfile(array $options = [])
 * @method ExistMcubeRsaKey existMcubeRsaKey(array $options = [])
 * @method ExportMappCenterAppConfig exportMappCenterAppConfig(array $options = [])
 * @method GetMcubeFileToken getMcubeFileToken(array $options = [])
 * @method ListMappCenterApps listMappCenterApps(array $options = [])
 * @method ListMappCenterWorkspaces listMappCenterWorkspaces(array $options = [])
 * @method ListMcdpAim listMcdpAim(array $options = [])
 * @method ListMcubeMiniApps listMcubeMiniApps(array $options = [])
 * @method ListMcubeMiniPackages listMcubeMiniPackages(array $options = [])
 * @method ListMcubeMiniTasks listMcubeMiniTasks(array $options = [])
 * @method ListMcubeWhitelists listMcubeWhitelists(array $options = [])
 * @method ListMgsApi listMgsApi(array $options = [])
 * @method ListMPaaSMasTinyApp listMPaaSMasTinyApp(array $options = [])
 * @method PushBroadcast pushBroadcast(array $options = [])
 * @method PushMultiple pushMultiple(array $options = [])
 * @method PushSimple pushSimple(array $options = [])
 * @method PushTemplate pushTemplate(array $options = [])
 * @method QueryMappCenterApp queryMappCenterApp(array $options = [])
 * @method QueryMcubeMiniPackage queryMcubeMiniPackage(array $options = [])
 * @method QueryMcubeMiniTask queryMcubeMiniTask(array $options = [])
 * @method QueryMcubeVhost queryMcubeVhost(array $options = [])
 * @method QueryMgsApipage queryMgsApipage(array $options = [])
 * @method QueryMgsApirest queryMgsApirest(array $options = [])
 * @method QueryMgsTestreqbodyautogen queryMgsTestreqbodyautogen(array $options = [])
 * @method QueryMPaaSMasTinyAppDailyData queryMPaaSMasTinyAppDailyData(array $options = [])
 * @method QueryMPaaSMasTinyAppDailyPageView queryMPaaSMasTinyAppDailyPageView(array $options = [])
 * @method QueryMPaaSMasTinyAppHistoryData queryMPaaSMasTinyAppHistoryData(array $options = [])
 * @method QueryMpaasMrtcArtvcRecordfile queryMpaasMrtcArtvcRecordfile(array $options = [])
 * @method RunMsaDiff runMsaDiff(array $options = [])
 * @method SaveMgsApirest saveMgsApirest(array $options = [])
 * @method UpdateMcubeWhitelist updateMcubeWhitelist(array $options = [])
 * @method UpdateMpaasAppInfo updateMpaasAppInfo(array $options = [])
 * @method UploadMcubeMiniPackage uploadMcubeMiniPackage(array $options = [])
 * @method UploadMcubeRsaKey uploadMcubeRsaKey(array $options = [])
 */
class MPaaSApiResolver extends ApiResolver
{
}

class Rpc extends \AlibabaCloud\Client\Resolver\Rpc
{
    /** @var string */
    public $product = 'mPaaS';

    /** @var string */
    public $version = '2019-08-21';

    /** @var string */
    public $method = 'POST';
}

/**
 * @method string getPackageId()
 * @method string getTaskStatus()
 * @method string getTenantId()
 * @method string getTaskId()
 * @method string getBizType()
 * @method string getAppId()
 * @method string getWorkspaceId()
 */
class ChangeMcubeMiniTaskStatus extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPackageId($value)
    {
        $this->data['PackageId'] = $value;
        $this->options['form_params']['PackageId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTaskStatus($value)
    {
        $this->data['TaskStatus'] = $value;
        $this->options['form_params']['TaskStatus'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTenantId($value)
    {
        $this->data['TenantId'] = $value;
        $this->options['form_params']['TenantId'] = $value;

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
    public function withBizType($value)
    {
        $this->data['BizType'] = $value;
        $this->options['form_params']['BizType'] = $value;

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
        $this->options['form_params']['AppId'] = $value;

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
 * @method string getH5Name()
 * @method string getH5Id()
 * @method string getTenantId()
 * @method string getAppId()
 * @method string getWorkspaceId()
 */
class CreateMcubeMiniApp extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withH5Name($value)
    {
        $this->data['H5Name'] = $value;
        $this->options['form_params']['H5Name'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withH5Id($value)
    {
        $this->data['H5Id'] = $value;
        $this->options['form_params']['H5Id'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTenantId($value)
    {
        $this->data['TenantId'] = $value;
        $this->options['form_params']['TenantId'] = $value;

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
        $this->options['form_params']['AppId'] = $value;

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
 * @method string getPackageId()
 * @method string getMemo()
 * @method string getGreyConfigInfo()
 * @method string getTenantId()
 * @method string getPublishMode()
 * @method string getWhitelistIds()
 * @method string getPublishType()
 * @method string getGreyNum()
 * @method string getAppId()
 * @method string getGreyEndtimeData()
 * @method string getWorkspaceId()
 */
class CreateMcubeMiniTask extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPackageId($value)
    {
        $this->data['PackageId'] = $value;
        $this->options['form_params']['PackageId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withMemo($value)
    {
        $this->data['Memo'] = $value;
        $this->options['form_params']['Memo'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withGreyConfigInfo($value)
    {
        $this->data['GreyConfigInfo'] = $value;
        $this->options['form_params']['GreyConfigInfo'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTenantId($value)
    {
        $this->data['TenantId'] = $value;
        $this->options['form_params']['TenantId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPublishMode($value)
    {
        $this->data['PublishMode'] = $value;
        $this->options['form_params']['PublishMode'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withWhitelistIds($value)
    {
        $this->data['WhitelistIds'] = $value;
        $this->options['form_params']['WhitelistIds'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPublishType($value)
    {
        $this->data['PublishType'] = $value;
        $this->options['form_params']['PublishType'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withGreyNum($value)
    {
        $this->data['GreyNum'] = $value;
        $this->options['form_params']['GreyNum'] = $value;

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
        $this->options['form_params']['AppId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withGreyEndtimeData($value)
    {
        $this->data['GreyEndtimeData'] = $value;
        $this->options['form_params']['GreyEndtimeData'] = $value;

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
 * @method string getTenantId()
 * @method string getVhost()
 * @method string getAppId()
 * @method string getWorkspaceId()
 */
class CreateMcubeVhost extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTenantId($value)
    {
        $this->data['TenantId'] = $value;
        $this->options['form_params']['TenantId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withVhost($value)
    {
        $this->data['Vhost'] = $value;
        $this->options['form_params']['Vhost'] = $value;

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
        $this->options['form_params']['AppId'] = $value;

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
 * @method string getTenantId()
 * @method string getWhitelistType()
 * @method string getAppId()
 * @method string getWhiteListName()
 * @method string getWorkspaceId()
 */
class CreateMcubeWhitelist extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTenantId($value)
    {
        $this->data['TenantId'] = $value;
        $this->options['form_params']['TenantId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withWhitelistType($value)
    {
        $this->data['WhitelistType'] = $value;
        $this->options['form_params']['WhitelistType'] = $value;

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
        $this->options['form_params']['AppId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withWhiteListName($value)
    {
        $this->data['WhiteListName'] = $value;
        $this->options['form_params']['WhiteListName'] = $value;

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
 * @method string getUserId()
 * @method string getTenantId()
 * @method string getWhitelistValue()
 * @method string getAppId()
 * @method string getWorkspaceId()
 */
class CreateMcubeWhitelistForIde extends Rpc
{

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
    public function withTenantId($value)
    {
        $this->data['TenantId'] = $value;
        $this->options['form_params']['TenantId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withWhitelistValue($value)
    {
        $this->data['WhitelistValue'] = $value;
        $this->options['form_params']['WhitelistValue'] = $value;

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
        $this->options['form_params']['AppId'] = $value;

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
 * @method string getMpaasMappcenterMsaEnhanceCreateJsonStr()
 * @method string getTenantId()
 * @method string getAppId()
 * @method string getWorkspaceId()
 */
class CreateMsaEnhance extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withMpaasMappcenterMsaEnhanceCreateJsonStr($value)
    {
        $this->data['MpaasMappcenterMsaEnhanceCreateJsonStr'] = $value;
        $this->options['form_params']['MpaasMappcenterMsaEnhanceCreateJsonStr'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTenantId($value)
    {
        $this->data['TenantId'] = $value;
        $this->options['form_params']['TenantId'] = $value;

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
        $this->options['form_params']['AppId'] = $value;

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
 * @method string getExtAttrStr()
 * @method string getMinUid()
 * @method string getThirdMsgId()
 * @method string getValidTimeEnd()
 * @method string getPayload()
 * @method string getUids()
 * @method string getAppMinVersion()
 * @method string getValidTimeStart()
 * @method string getMaxUid()
 * @method string getOsType()
 * @method string getBizType()
 * @method string getAppMaxVersion()
 * @method string getAppId()
 * @method string getWorkspaceId()
 */
class CreateOpenGlobalData extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withExtAttrStr($value)
    {
        $this->data['ExtAttrStr'] = $value;
        $this->options['form_params']['ExtAttrStr'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withMinUid($value)
    {
        $this->data['MinUid'] = $value;
        $this->options['form_params']['MinUid'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withThirdMsgId($value)
    {
        $this->data['ThirdMsgId'] = $value;
        $this->options['form_params']['ThirdMsgId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withValidTimeEnd($value)
    {
        $this->data['ValidTimeEnd'] = $value;
        $this->options['form_params']['ValidTimeEnd'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPayload($value)
    {
        $this->data['Payload'] = $value;
        $this->options['form_params']['Payload'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withUids($value)
    {
        $this->data['Uids'] = $value;
        $this->options['form_params']['Uids'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAppMinVersion($value)
    {
        $this->data['AppMinVersion'] = $value;
        $this->options['form_params']['AppMinVersion'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withValidTimeStart($value)
    {
        $this->data['ValidTimeStart'] = $value;
        $this->options['form_params']['ValidTimeStart'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withMaxUid($value)
    {
        $this->data['MaxUid'] = $value;
        $this->options['form_params']['MaxUid'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOsType($value)
    {
        $this->data['OsType'] = $value;
        $this->options['form_params']['OsType'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBizType($value)
    {
        $this->data['BizType'] = $value;
        $this->options['form_params']['BizType'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAppMaxVersion($value)
    {
        $this->data['AppMaxVersion'] = $value;
        $this->options['form_params']['AppMaxVersion'] = $value;

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
        $this->options['form_params']['AppId'] = $value;

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
 * @method string getExtAttrStr()
 * @method string getThirdMsgId()
 * @method string getValidTimeEnd()
 * @method string getPayload()
 * @method string getCheckOnline()
 * @method string getAppMinVersion()
 * @method string getValidTimeStart()
 * @method string getLinkToken()
 * @method string getOsType()
 * @method string getBizType()
 * @method string getAppMaxVersion()
 * @method string getAppId()
 * @method string getWorkspaceId()
 */
class CreateOpenSingleData extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withExtAttrStr($value)
    {
        $this->data['ExtAttrStr'] = $value;
        $this->options['form_params']['ExtAttrStr'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withThirdMsgId($value)
    {
        $this->data['ThirdMsgId'] = $value;
        $this->options['form_params']['ThirdMsgId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withValidTimeEnd($value)
    {
        $this->data['ValidTimeEnd'] = $value;
        $this->options['form_params']['ValidTimeEnd'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPayload($value)
    {
        $this->data['Payload'] = $value;
        $this->options['form_params']['Payload'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCheckOnline($value)
    {
        $this->data['CheckOnline'] = $value;
        $this->options['form_params']['CheckOnline'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAppMinVersion($value)
    {
        $this->data['AppMinVersion'] = $value;
        $this->options['form_params']['AppMinVersion'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withValidTimeStart($value)
    {
        $this->data['ValidTimeStart'] = $value;
        $this->options['form_params']['ValidTimeStart'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withLinkToken($value)
    {
        $this->data['LinkToken'] = $value;
        $this->options['form_params']['LinkToken'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOsType($value)
    {
        $this->data['OsType'] = $value;
        $this->options['form_params']['OsType'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBizType($value)
    {
        $this->data['BizType'] = $value;
        $this->options['form_params']['BizType'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAppMaxVersion($value)
    {
        $this->data['AppMaxVersion'] = $value;
        $this->options['form_params']['AppMaxVersion'] = $value;

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
        $this->options['form_params']['AppId'] = $value;

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
 * @method string getH5Id()
 * @method string getTenantId()
 * @method string getAppId()
 * @method string getWorkspaceId()
 */
class DeleteMcubeMiniApp extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withH5Id($value)
    {
        $this->data['H5Id'] = $value;
        $this->options['form_params']['H5Id'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTenantId($value)
    {
        $this->data['TenantId'] = $value;
        $this->options['form_params']['TenantId'] = $value;

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
        $this->options['form_params']['AppId'] = $value;

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
 * @method string getTenantId()
 * @method string getId()
 * @method string getAppId()
 * @method string getWorkspaceId()
 */
class DeleteMcubeWhitelist extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTenantId($value)
    {
        $this->data['TenantId'] = $value;
        $this->options['form_params']['TenantId'] = $value;

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
    public function withAppId($value)
    {
        $this->data['AppId'] = $value;
        $this->options['form_params']['AppId'] = $value;

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
 * @method string getTenantId()
 * @method string getBizRequestId()
 * @method string getBizName()
 * @method string getBizAppCode()
 * @method string getRoomId()
 * @method string getRecordId()
 * @method string getS()
 * @method string getAppId()
 * @method string getMediaType()
 * @method string getWorkspaceId()
 */
class DeleteMpaasMrtcArtvcRecordfile extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTenantId($value)
    {
        $this->data['TenantId'] = $value;
        $this->options['form_params']['TenantId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBizRequestId($value)
    {
        $this->data['BizRequestId'] = $value;
        $this->options['form_params']['BizRequestId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBizName($value)
    {
        $this->data['BizName'] = $value;
        $this->options['form_params']['BizName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBizAppCode($value)
    {
        $this->data['BizAppCode'] = $value;
        $this->options['form_params']['BizAppCode'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withRoomId($value)
    {
        $this->data['RoomId'] = $value;
        $this->options['form_params']['RoomId'] = $value;

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
    public function withS($value)
    {
        $this->data['S'] = $value;
        $this->options['form_params']['S'] = $value;

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
        $this->options['form_params']['AppId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withMediaType($value)
    {
        $this->data['MediaType'] = $value;
        $this->options['form_params']['MediaType'] = $value;

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
 * @method string getTenantId()
 * @method string getAppId()
 * @method string getWorkspaceId()
 */
class ExistMcubeRsaKey extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTenantId($value)
    {
        $this->data['TenantId'] = $value;
        $this->options['form_params']['TenantId'] = $value;

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
        $this->options['form_params']['AppId'] = $value;

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
 * @method string getSystemType()
 * @method string getOnexFlag()
 * @method string getIdentifier()
 * @method string getCertRsaBase64()
 * @method string getAppId()
 * @method string getWorkspaceId()
 */
class ExportMappCenterAppConfig extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSystemType($value)
    {
        $this->data['SystemType'] = $value;
        $this->options['form_params']['SystemType'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOnexFlag($value)
    {
        $this->data['OnexFlag'] = $value;
        $this->options['form_params']['OnexFlag'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withIdentifier($value)
    {
        $this->data['Identifier'] = $value;
        $this->options['form_params']['Identifier'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCertRsaBase64($value)
    {
        $this->data['CertRsaBase64'] = $value;
        $this->options['form_params']['CertRsaBase64'] = $value;

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
        $this->options['form_params']['AppId'] = $value;

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
 * @method string getOnexFlag()
 * @method string getTenantId()
 * @method string getAppId()
 * @method string getWorkspaceId()
 */
class GetMcubeFileToken extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOnexFlag($value)
    {
        $this->data['OnexFlag'] = $value;
        $this->options['form_params']['OnexFlag'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTenantId($value)
    {
        $this->data['TenantId'] = $value;
        $this->options['form_params']['TenantId'] = $value;

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
        $this->options['form_params']['AppId'] = $value;

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

class ListMappCenterApps extends Rpc
{
}

class ListMappCenterWorkspaces extends Rpc
{
}

/**
 * @method string getType()
 * @method string getPageSize()
 * @method string getTenantId()
 * @method string getKeyword()
 * @method string getSort()
 * @method string getEmptyTag()
 * @method string getPageNo()
 * @method string getAppId()
 * @method string getName()
 * @method string getSortField()
 * @method string getWorkspaceId()
 */
class ListMcdpAim extends Rpc
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
    public function withTenantId($value)
    {
        $this->data['TenantId'] = $value;
        $this->options['form_params']['TenantId'] = $value;

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
        $this->options['form_params']['Keyword'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSort($value)
    {
        $this->data['Sort'] = $value;
        $this->options['form_params']['Sort'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withEmptyTag($value)
    {
        $this->data['EmptyTag'] = $value;
        $this->options['form_params']['EmptyTag'] = $value;

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
    public function withAppId($value)
    {
        $this->data['AppId'] = $value;
        $this->options['form_params']['AppId'] = $value;

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
    public function withSortField($value)
    {
        $this->data['SortField'] = $value;
        $this->options['form_params']['SortField'] = $value;

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
 * @method string getTenantId()
 * @method string getAppId()
 * @method string getWorkspaceId()
 */
class ListMcubeMiniApps extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTenantId($value)
    {
        $this->data['TenantId'] = $value;
        $this->options['form_params']['TenantId'] = $value;

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
        $this->options['form_params']['AppId'] = $value;

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
 * @method string getH5Id()
 * @method string getTenantId()
 * @method string getAppId()
 * @method string getPackageTypes()
 * @method string getWorkspaceId()
 */
class ListMcubeMiniPackages extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withH5Id($value)
    {
        $this->data['H5Id'] = $value;
        $this->options['form_params']['H5Id'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTenantId($value)
    {
        $this->data['TenantId'] = $value;
        $this->options['form_params']['TenantId'] = $value;

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
        $this->options['form_params']['AppId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPackageTypes($value)
    {
        $this->data['PackageTypes'] = $value;
        $this->options['form_params']['PackageTypes'] = $value;

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
 * @method string getTenantId()
 * @method string getId()
 * @method string getAppId()
 * @method string getWorkspaceId()
 */
class ListMcubeMiniTasks extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTenantId($value)
    {
        $this->data['TenantId'] = $value;
        $this->options['form_params']['TenantId'] = $value;

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
    public function withAppId($value)
    {
        $this->data['AppId'] = $value;
        $this->options['form_params']['AppId'] = $value;

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
 * @method string getTenantId()
 * @method string getAppId()
 * @method string getWorkspaceId()
 */
class ListMcubeWhitelists extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTenantId($value)
    {
        $this->data['TenantId'] = $value;
        $this->options['form_params']['TenantId'] = $value;

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
        $this->options['form_params']['AppId'] = $value;

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
 * @method string getNeedEtag()
 * @method string getApiType()
 * @method string getOptFuzzy()
 * @method string getHost()
 * @method string getPageSize()
 * @method string getTenantId()
 * @method string getPageIndex()
 * @method string getApiStatus()
 * @method string getSysId()
 * @method string getFormat()
 * @method string getNeedEncrypt()
 * @method string getOperationType()
 * @method string getNeedSign()
 * @method string getAppId()
 * @method string getSysName()
 * @method string getWorkspaceId()
 */
class ListMgsApi extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withNeedEtag($value)
    {
        $this->data['NeedEtag'] = $value;
        $this->options['form_params']['NeedEtag'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withApiType($value)
    {
        $this->data['ApiType'] = $value;
        $this->options['form_params']['ApiType'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOptFuzzy($value)
    {
        $this->data['OptFuzzy'] = $value;
        $this->options['form_params']['OptFuzzy'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withHost($value)
    {
        $this->data['Host'] = $value;
        $this->options['form_params']['Host'] = $value;

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
    public function withTenantId($value)
    {
        $this->data['TenantId'] = $value;
        $this->options['form_params']['TenantId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPageIndex($value)
    {
        $this->data['PageIndex'] = $value;
        $this->options['form_params']['PageIndex'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withApiStatus($value)
    {
        $this->data['ApiStatus'] = $value;
        $this->options['form_params']['ApiStatus'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSysId($value)
    {
        $this->data['SysId'] = $value;
        $this->options['form_params']['SysId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withFormat($value)
    {
        $this->data['Format'] = $value;
        $this->options['form_params']['Format'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withNeedEncrypt($value)
    {
        $this->data['NeedEncrypt'] = $value;
        $this->options['form_params']['NeedEncrypt'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOperationType($value)
    {
        $this->data['OperationType'] = $value;
        $this->options['form_params']['OperationType'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withNeedSign($value)
    {
        $this->data['NeedSign'] = $value;
        $this->options['form_params']['NeedSign'] = $value;

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
        $this->options['form_params']['AppId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSysName($value)
    {
        $this->data['SysName'] = $value;
        $this->options['form_params']['SysName'] = $value;

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
 * @method string getTenantId()
 * @method string getAppId()
 * @method string getWorkspaceId()
 */
class ListMPaaSMasTinyApp extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTenantId($value)
    {
        $this->data['TenantId'] = $value;
        $this->options['form_params']['TenantId'] = $value;

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
        $this->options['form_params']['AppId'] = $value;

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
 * @method string getTaskName()
 * @method string getTemplateKeyValue()
 * @method string getPushAction()
 * @method string getDeliveryType()
 * @method string getTemplateName()
 * @method string getNotifyType()
 * @method string getExtendedParams()
 * @method string getSilent()
 * @method string getPushStatus()
 * @method string getUnBindPeriod()
 * @method string getExpiredSeconds()
 * @method string getAppId()
 * @method string getMsgkey()
 * @method string getWorkspaceId()
 */
class PushBroadcast extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTaskName($value)
    {
        $this->data['TaskName'] = $value;
        $this->options['form_params']['TaskName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTemplateKeyValue($value)
    {
        $this->data['TemplateKeyValue'] = $value;
        $this->options['form_params']['TemplateKeyValue'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPushAction($value)
    {
        $this->data['PushAction'] = $value;
        $this->options['form_params']['PushAction'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDeliveryType($value)
    {
        $this->data['DeliveryType'] = $value;
        $this->options['form_params']['DeliveryType'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTemplateName($value)
    {
        $this->data['TemplateName'] = $value;
        $this->options['form_params']['TemplateName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withNotifyType($value)
    {
        $this->data['NotifyType'] = $value;
        $this->options['form_params']['NotifyType'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withExtendedParams($value)
    {
        $this->data['ExtendedParams'] = $value;
        $this->options['form_params']['ExtendedParams'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSilent($value)
    {
        $this->data['Silent'] = $value;
        $this->options['form_params']['Silent'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPushStatus($value)
    {
        $this->data['PushStatus'] = $value;
        $this->options['form_params']['PushStatus'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withUnBindPeriod($value)
    {
        $this->data['UnBindPeriod'] = $value;
        $this->options['form_params']['UnBindPeriod'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withExpiredSeconds($value)
    {
        $this->data['ExpiredSeconds'] = $value;
        $this->options['form_params']['ExpiredSeconds'] = $value;

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
        $this->options['form_params']['AppId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withMsgkey($value)
    {
        $this->data['Msgkey'] = $value;
        $this->options['form_params']['Msgkey'] = $value;

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
 * @method string getTaskName()
 * @method string getPushAction()
 * @method string getDeliveryType()
 * @method string getTemplateName()
 * @method string getNotifyType()
 * @method string getExtendedParams()
 * @method string getSilent()
 * @method string getExpiredSeconds()
 * @method array getTargetMsg()
 * @method string getAppId()
 * @method string getWorkspaceId()
 */
class PushMultiple extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTaskName($value)
    {
        $this->data['TaskName'] = $value;
        $this->options['form_params']['TaskName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPushAction($value)
    {
        $this->data['PushAction'] = $value;
        $this->options['form_params']['PushAction'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDeliveryType($value)
    {
        $this->data['DeliveryType'] = $value;
        $this->options['form_params']['DeliveryType'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTemplateName($value)
    {
        $this->data['TemplateName'] = $value;
        $this->options['form_params']['TemplateName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withNotifyType($value)
    {
        $this->data['NotifyType'] = $value;
        $this->options['form_params']['NotifyType'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withExtendedParams($value)
    {
        $this->data['ExtendedParams'] = $value;
        $this->options['form_params']['ExtendedParams'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSilent($value)
    {
        $this->data['Silent'] = $value;
        $this->options['form_params']['Silent'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withExpiredSeconds($value)
    {
        $this->data['ExpiredSeconds'] = $value;
        $this->options['form_params']['ExpiredSeconds'] = $value;

        return $this;
    }

    /**
     * @param array $targetMsg
     *
     * @return $this
     */
	public function withTargetMsg(array $targetMsg)
	{
	    $this->data['TargetMsg'] = $targetMsg;
		foreach ($targetMsg as $depth1 => $depth1Value) {
			if(isset($depth1Value['ExtendedParams'])){
				$this->options['form_params']['TargetMsg.' . ($depth1 + 1) . '.ExtendedParams'] = $depth1Value['ExtendedParams'];
			}
			if(isset($depth1Value['TemplateKeyValue'])){
				$this->options['form_params']['TargetMsg.' . ($depth1 + 1) . '.TemplateKeyValue'] = $depth1Value['TemplateKeyValue'];
			}
			if(isset($depth1Value['MsgKey'])){
				$this->options['form_params']['TargetMsg.' . ($depth1 + 1) . '.MsgKey'] = $depth1Value['MsgKey'];
			}
			if(isset($depth1Value['Target'])){
				$this->options['form_params']['TargetMsg.' . ($depth1 + 1) . '.Target'] = $depth1Value['Target'];
			}
		}

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
        $this->options['form_params']['AppId'] = $value;

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
 * @method string getTaskName()
 * @method string getTitle()
 * @method string getContent()
 * @method string getPushAction()
 * @method string getDeliveryType()
 * @method string getNotifyType()
 * @method string getTargetMsgkey()
 * @method string getExtendedParams()
 * @method string getSilent()
 * @method string getUri()
 * @method string getExpiredSeconds()
 * @method string getAppId()
 * @method string getWorkspaceId()
 */
class PushSimple extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTaskName($value)
    {
        $this->data['TaskName'] = $value;
        $this->options['form_params']['TaskName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTitle($value)
    {
        $this->data['Title'] = $value;
        $this->options['form_params']['Title'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withContent($value)
    {
        $this->data['Content'] = $value;
        $this->options['form_params']['Content'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPushAction($value)
    {
        $this->data['PushAction'] = $value;
        $this->options['form_params']['PushAction'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDeliveryType($value)
    {
        $this->data['DeliveryType'] = $value;
        $this->options['form_params']['DeliveryType'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withNotifyType($value)
    {
        $this->data['NotifyType'] = $value;
        $this->options['form_params']['NotifyType'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTargetMsgkey($value)
    {
        $this->data['TargetMsgkey'] = $value;
        $this->options['form_params']['TargetMsgkey'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withExtendedParams($value)
    {
        $this->data['ExtendedParams'] = $value;
        $this->options['form_params']['ExtendedParams'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSilent($value)
    {
        $this->data['Silent'] = $value;
        $this->options['form_params']['Silent'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withUri($value)
    {
        $this->data['Uri'] = $value;
        $this->options['form_params']['Uri'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withExpiredSeconds($value)
    {
        $this->data['ExpiredSeconds'] = $value;
        $this->options['form_params']['ExpiredSeconds'] = $value;

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
        $this->options['form_params']['AppId'] = $value;

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
 * @method string getTaskName()
 * @method string getTemplateKeyValue()
 * @method string getPushAction()
 * @method string getDeliveryType()
 * @method string getTemplateName()
 * @method string getNotifyType()
 * @method string getTargetMsgkey()
 * @method string getExtendedParams()
 * @method string getSilent()
 * @method string getExpiredSeconds()
 * @method string getAppId()
 * @method string getWorkspaceId()
 */
class PushTemplate extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTaskName($value)
    {
        $this->data['TaskName'] = $value;
        $this->options['form_params']['TaskName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTemplateKeyValue($value)
    {
        $this->data['TemplateKeyValue'] = $value;
        $this->options['form_params']['TemplateKeyValue'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPushAction($value)
    {
        $this->data['PushAction'] = $value;
        $this->options['form_params']['PushAction'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDeliveryType($value)
    {
        $this->data['DeliveryType'] = $value;
        $this->options['form_params']['DeliveryType'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTemplateName($value)
    {
        $this->data['TemplateName'] = $value;
        $this->options['form_params']['TemplateName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withNotifyType($value)
    {
        $this->data['NotifyType'] = $value;
        $this->options['form_params']['NotifyType'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTargetMsgkey($value)
    {
        $this->data['TargetMsgkey'] = $value;
        $this->options['form_params']['TargetMsgkey'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withExtendedParams($value)
    {
        $this->data['ExtendedParams'] = $value;
        $this->options['form_params']['ExtendedParams'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSilent($value)
    {
        $this->data['Silent'] = $value;
        $this->options['form_params']['Silent'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withExpiredSeconds($value)
    {
        $this->data['ExpiredSeconds'] = $value;
        $this->options['form_params']['ExpiredSeconds'] = $value;

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
        $this->options['form_params']['AppId'] = $value;

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
 * @method string getAppId()
 * @method string getWorkspaceId()
 */
class QueryMappCenterApp extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAppId($value)
    {
        $this->data['AppId'] = $value;
        $this->options['form_params']['AppId'] = $value;

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
 * @method string getH5Id()
 * @method string getTenantId()
 * @method string getId()
 * @method string getAppId()
 * @method string getWorkspaceId()
 */
class QueryMcubeMiniPackage extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withH5Id($value)
    {
        $this->data['H5Id'] = $value;
        $this->options['form_params']['H5Id'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTenantId($value)
    {
        $this->data['TenantId'] = $value;
        $this->options['form_params']['TenantId'] = $value;

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
    public function withAppId($value)
    {
        $this->data['AppId'] = $value;
        $this->options['form_params']['AppId'] = $value;

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
 * @method string getTenantId()
 * @method string getTaskId()
 * @method string getAppId()
 * @method string getWorkspaceId()
 */
class QueryMcubeMiniTask extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTenantId($value)
    {
        $this->data['TenantId'] = $value;
        $this->options['form_params']['TenantId'] = $value;

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
    public function withAppId($value)
    {
        $this->data['AppId'] = $value;
        $this->options['form_params']['AppId'] = $value;

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
 * @method string getTenantId()
 * @method string getAppId()
 * @method string getWorkspaceId()
 */
class QueryMcubeVhost extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTenantId($value)
    {
        $this->data['TenantId'] = $value;
        $this->options['form_params']['TenantId'] = $value;

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
        $this->options['form_params']['AppId'] = $value;

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
 * @method string getNeedEtag()
 * @method string getApiType()
 * @method string getOptFuzzy()
 * @method string getHost()
 * @method string getPageSize()
 * @method string getTenantId()
 * @method string getPageIndex()
 * @method string getApiStatus()
 * @method string getSysId()
 * @method string getFormat()
 * @method string getNeedEncrypt()
 * @method string getOperationType()
 * @method string getNeedSign()
 * @method string getAppId()
 * @method string getSysName()
 * @method string getWorkspaceId()
 */
class QueryMgsApipage extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withNeedEtag($value)
    {
        $this->data['NeedEtag'] = $value;
        $this->options['form_params']['NeedEtag'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withApiType($value)
    {
        $this->data['ApiType'] = $value;
        $this->options['form_params']['ApiType'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOptFuzzy($value)
    {
        $this->data['OptFuzzy'] = $value;
        $this->options['form_params']['OptFuzzy'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withHost($value)
    {
        $this->data['Host'] = $value;
        $this->options['form_params']['Host'] = $value;

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
    public function withTenantId($value)
    {
        $this->data['TenantId'] = $value;
        $this->options['form_params']['TenantId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPageIndex($value)
    {
        $this->data['PageIndex'] = $value;
        $this->options['form_params']['PageIndex'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withApiStatus($value)
    {
        $this->data['ApiStatus'] = $value;
        $this->options['form_params']['ApiStatus'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSysId($value)
    {
        $this->data['SysId'] = $value;
        $this->options['form_params']['SysId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withFormat($value)
    {
        $this->data['Format'] = $value;
        $this->options['form_params']['Format'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withNeedEncrypt($value)
    {
        $this->data['NeedEncrypt'] = $value;
        $this->options['form_params']['NeedEncrypt'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOperationType($value)
    {
        $this->data['OperationType'] = $value;
        $this->options['form_params']['OperationType'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withNeedSign($value)
    {
        $this->data['NeedSign'] = $value;
        $this->options['form_params']['NeedSign'] = $value;

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
        $this->options['form_params']['AppId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSysName($value)
    {
        $this->data['SysName'] = $value;
        $this->options['form_params']['SysName'] = $value;

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
 * @method string getType()
 * @method string getTenantId()
 * @method string getId()
 * @method string getFormat()
 * @method string getAppId()
 * @method string getWorkspaceId()
 */
class QueryMgsApirest extends Rpc
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
    public function withTenantId($value)
    {
        $this->data['TenantId'] = $value;
        $this->options['form_params']['TenantId'] = $value;

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
    public function withFormat($value)
    {
        $this->data['Format'] = $value;
        $this->options['form_params']['Format'] = $value;

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
        $this->options['form_params']['AppId'] = $value;

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
 * @method string getMpaasMappcenterMgsTestreqbodyautogenQueryJsonStr()
 * @method string getTenantId()
 * @method string getFormat()
 * @method string getAppId()
 * @method string getWorkspaceId()
 */
class QueryMgsTestreqbodyautogen extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withMpaasMappcenterMgsTestreqbodyautogenQueryJsonStr($value)
    {
        $this->data['MpaasMappcenterMgsTestreqbodyautogenQueryJsonStr'] = $value;
        $this->options['form_params']['MpaasMappcenterMgsTestreqbodyautogenQueryJsonStr'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTenantId($value)
    {
        $this->data['TenantId'] = $value;
        $this->options['form_params']['TenantId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withFormat($value)
    {
        $this->data['Format'] = $value;
        $this->options['form_params']['Format'] = $value;

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
        $this->options['form_params']['AppId'] = $value;

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
 * @method string getDate()
 * @method string getTenantId()
 * @method string getTinyAppId()
 * @method string getAppId()
 * @method string getWorkspaceId()
 */
class QueryMPaaSMasTinyAppDailyData extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDate($value)
    {
        $this->data['Date'] = $value;
        $this->options['form_params']['Date'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTenantId($value)
    {
        $this->data['TenantId'] = $value;
        $this->options['form_params']['TenantId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTinyAppId($value)
    {
        $this->data['TinyAppId'] = $value;
        $this->options['form_params']['TinyAppId'] = $value;

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
        $this->options['form_params']['AppId'] = $value;

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
 * @method string getDate()
 * @method string getPageNum()
 * @method string getTenantId()
 * @method string getKeyword()
 * @method string getOrder()
 * @method string getOrderCol()
 * @method string getTinyAppId()
 * @method string getAppId()
 * @method string getPageLen()
 * @method string getWorkspaceId()
 */
class QueryMPaaSMasTinyAppDailyPageView extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDate($value)
    {
        $this->data['Date'] = $value;
        $this->options['form_params']['Date'] = $value;

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
    public function withTenantId($value)
    {
        $this->data['TenantId'] = $value;
        $this->options['form_params']['TenantId'] = $value;

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
        $this->options['form_params']['Keyword'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOrder($value)
    {
        $this->data['Order'] = $value;
        $this->options['form_params']['Order'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOrderCol($value)
    {
        $this->data['OrderCol'] = $value;
        $this->options['form_params']['OrderCol'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTinyAppId($value)
    {
        $this->data['TinyAppId'] = $value;
        $this->options['form_params']['TinyAppId'] = $value;

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
        $this->options['form_params']['AppId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPageLen($value)
    {
        $this->data['PageLen'] = $value;
        $this->options['form_params']['PageLen'] = $value;

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
 * @method string getDate()
 * @method string getTenantId()
 * @method string getTinyAppId()
 * @method string getAppId()
 * @method string getWorkspaceId()
 */
class QueryMPaaSMasTinyAppHistoryData extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDate($value)
    {
        $this->data['Date'] = $value;
        $this->options['form_params']['Date'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTenantId($value)
    {
        $this->data['TenantId'] = $value;
        $this->options['form_params']['TenantId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTinyAppId($value)
    {
        $this->data['TinyAppId'] = $value;
        $this->options['form_params']['TinyAppId'] = $value;

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
        $this->options['form_params']['AppId'] = $value;

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
 * @method string getTenantId()
 * @method string getBizRequestId()
 * @method string getBizName()
 * @method string getBizAppCode()
 * @method string getRoomId()
 * @method string getRecordId()
 * @method string getS()
 * @method string getAppId()
 * @method string getMediaType()
 * @method string getWorkspaceId()
 */
class QueryMpaasMrtcArtvcRecordfile extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTenantId($value)
    {
        $this->data['TenantId'] = $value;
        $this->options['form_params']['TenantId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBizRequestId($value)
    {
        $this->data['BizRequestId'] = $value;
        $this->options['form_params']['BizRequestId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBizName($value)
    {
        $this->data['BizName'] = $value;
        $this->options['form_params']['BizName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBizAppCode($value)
    {
        $this->data['BizAppCode'] = $value;
        $this->options['form_params']['BizAppCode'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withRoomId($value)
    {
        $this->data['RoomId'] = $value;
        $this->options['form_params']['RoomId'] = $value;

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
    public function withS($value)
    {
        $this->data['S'] = $value;
        $this->options['form_params']['S'] = $value;

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
        $this->options['form_params']['AppId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withMediaType($value)
    {
        $this->data['MediaType'] = $value;
        $this->options['form_params']['MediaType'] = $value;

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
 * @method string getTenantId()
 * @method string getAppId()
 * @method string getMpaasMappcenterMsaDiffRunJsonStr()
 * @method string getWorkspaceId()
 */
class RunMsaDiff extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTenantId($value)
    {
        $this->data['TenantId'] = $value;
        $this->options['form_params']['TenantId'] = $value;

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
        $this->options['form_params']['AppId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withMpaasMappcenterMsaDiffRunJsonStr($value)
    {
        $this->data['MpaasMappcenterMsaDiffRunJsonStr'] = $value;
        $this->options['form_params']['MpaasMappcenterMsaDiffRunJsonStr'] = $value;

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
 * @method string getMpaasMappcenterMgsApirestSaveJsonStr()
 * @method string getTenantId()
 * @method string getAppId()
 * @method string getWorkspaceId()
 */
class SaveMgsApirest extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withMpaasMappcenterMgsApirestSaveJsonStr($value)
    {
        $this->data['MpaasMappcenterMgsApirestSaveJsonStr'] = $value;
        $this->options['form_params']['MpaasMappcenterMgsApirestSaveJsonStr'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTenantId($value)
    {
        $this->data['TenantId'] = $value;
        $this->options['form_params']['TenantId'] = $value;

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
        $this->options['form_params']['AppId'] = $value;

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
 * @method string getOnexFlag()
 * @method string getTenantId()
 * @method string getId()
 * @method string getKeyIds()
 * @method string getOssUrl()
 * @method string getAppId()
 * @method string getWorkspaceId()
 */
class UpdateMcubeWhitelist extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOnexFlag($value)
    {
        $this->data['OnexFlag'] = $value;
        $this->options['form_params']['OnexFlag'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTenantId($value)
    {
        $this->data['TenantId'] = $value;
        $this->options['form_params']['TenantId'] = $value;

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
    public function withKeyIds($value)
    {
        $this->data['KeyIds'] = $value;
        $this->options['form_params']['KeyIds'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOssUrl($value)
    {
        $this->data['OssUrl'] = $value;
        $this->options['form_params']['OssUrl'] = $value;

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
        $this->options['form_params']['AppId'] = $value;

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
 * @method string getSystemType()
 * @method string getOnexFlag()
 * @method string getAppName()
 * @method string getTenantId()
 * @method string getIdentifier()
 * @method string getIconFileUrl()
 * @method string getAppId()
 */
class UpdateMpaasAppInfo extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSystemType($value)
    {
        $this->data['SystemType'] = $value;
        $this->options['form_params']['SystemType'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOnexFlag($value)
    {
        $this->data['OnexFlag'] = $value;
        $this->options['form_params']['OnexFlag'] = $value;

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
    public function withTenantId($value)
    {
        $this->data['TenantId'] = $value;
        $this->options['form_params']['TenantId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withIdentifier($value)
    {
        $this->data['Identifier'] = $value;
        $this->options['form_params']['Identifier'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withIconFileUrl($value)
    {
        $this->data['IconFileUrl'] = $value;
        $this->options['form_params']['IconFileUrl'] = $value;

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
        $this->options['form_params']['AppId'] = $value;

        return $this;
    }
}

/**
 * @method string getAutoInstall()
 * @method string getInstallType()
 * @method string getOnexFlag()
 * @method string getEnableOptionMenu()
 * @method string getH5Version()
 * @method string getEnableTabBar()
 * @method string getUserId()
 * @method string getUuid()
 * @method string getResourceFileUrl()
 * @method string getH5Id()
 * @method string getExtendInfo()
 * @method string getMainUrl()
 * @method string getClientVersionMin()
 * @method string getEnableKeepAlive()
 * @method string getVhost()
 * @method string getClientVersionMax()
 * @method string getPackageType()
 * @method string getWorkspaceId()
 * @method string getH5Name()
 * @method string getPlatform()
 * @method string getTenantId()
 * @method string getResourceType()
 * @method string getIconFileUrl()
 * @method string getAppId()
 */
class UploadMcubeMiniPackage extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAutoInstall($value)
    {
        $this->data['AutoInstall'] = $value;
        $this->options['form_params']['AutoInstall'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withInstallType($value)
    {
        $this->data['InstallType'] = $value;
        $this->options['form_params']['InstallType'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOnexFlag($value)
    {
        $this->data['OnexFlag'] = $value;
        $this->options['form_params']['OnexFlag'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withEnableOptionMenu($value)
    {
        $this->data['EnableOptionMenu'] = $value;
        $this->options['form_params']['EnableOptionMenu'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withH5Version($value)
    {
        $this->data['H5Version'] = $value;
        $this->options['form_params']['H5Version'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withEnableTabBar($value)
    {
        $this->data['EnableTabBar'] = $value;
        $this->options['form_params']['EnableTabBar'] = $value;

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
    public function withUuid($value)
    {
        $this->data['Uuid'] = $value;
        $this->options['form_params']['Uuid'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withResourceFileUrl($value)
    {
        $this->data['ResourceFileUrl'] = $value;
        $this->options['form_params']['ResourceFileUrl'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withH5Id($value)
    {
        $this->data['H5Id'] = $value;
        $this->options['form_params']['H5Id'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withExtendInfo($value)
    {
        $this->data['ExtendInfo'] = $value;
        $this->options['form_params']['ExtendInfo'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withMainUrl($value)
    {
        $this->data['MainUrl'] = $value;
        $this->options['form_params']['MainUrl'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withClientVersionMin($value)
    {
        $this->data['ClientVersionMin'] = $value;
        $this->options['form_params']['ClientVersionMin'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withEnableKeepAlive($value)
    {
        $this->data['EnableKeepAlive'] = $value;
        $this->options['form_params']['EnableKeepAlive'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withVhost($value)
    {
        $this->data['Vhost'] = $value;
        $this->options['form_params']['Vhost'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withClientVersionMax($value)
    {
        $this->data['ClientVersionMax'] = $value;
        $this->options['form_params']['ClientVersionMax'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPackageType($value)
    {
        $this->data['PackageType'] = $value;
        $this->options['form_params']['PackageType'] = $value;

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

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withH5Name($value)
    {
        $this->data['H5Name'] = $value;
        $this->options['form_params']['H5Name'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPlatform($value)
    {
        $this->data['Platform'] = $value;
        $this->options['form_params']['Platform'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTenantId($value)
    {
        $this->data['TenantId'] = $value;
        $this->options['form_params']['TenantId'] = $value;

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
        $this->options['form_params']['ResourceType'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withIconFileUrl($value)
    {
        $this->data['IconFileUrl'] = $value;
        $this->options['form_params']['IconFileUrl'] = $value;

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
        $this->options['form_params']['AppId'] = $value;

        return $this;
    }
}

/**
 * @method string getOnexFlag()
 * @method string getTenantId()
 * @method string getAppId()
 * @method string getFileUrl()
 * @method string getWorkspaceId()
 */
class UploadMcubeRsaKey extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOnexFlag($value)
    {
        $this->data['OnexFlag'] = $value;
        $this->options['form_params']['OnexFlag'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTenantId($value)
    {
        $this->data['TenantId'] = $value;
        $this->options['form_params']['TenantId'] = $value;

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
        $this->options['form_params']['AppId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withFileUrl($value)
    {
        $this->data['FileUrl'] = $value;
        $this->options['form_params']['FileUrl'] = $value;

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
