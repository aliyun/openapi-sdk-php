<?php

namespace AlibabaCloud\XrEngine\V20230313;

use AlibabaCloud\Client\Resolver\ApiResolver;

/**
 * @method AuthUser authUser(array $options = [])
 * @method CreateDigitalHumanProject createDigitalHumanProject(array $options = [])
 * @method CreateLivePortraitProject createLivePortraitProject(array $options = [])
 * @method GetMapData getMapData(array $options = [])
 * @method GetMapPublishData getMapPublishData(array $options = [])
 * @method InitLocate initLocate(array $options = [])
 * @method ListDigitalHumanMaterials listDigitalHumanMaterials(array $options = [])
 * @method ListLocationService listLocationService(array $options = [])
 * @method LivePortraitFaceDetect livePortraitFaceDetect(array $options = [])
 * @method Locate locate(array $options = [])
 * @method LoginModelScope loginModelScope(array $options = [])
 * @method PopBatchQueryObjectProjectStatus popBatchQueryObjectProjectStatus(array $options = [])
 * @method PopBuildFeatureToAvatarProject popBuildFeatureToAvatarProject(array $options = [])
 * @method PopBuildLivePortraitModelScopeProject popBuildLivePortraitModelScopeProject(array $options = [])
 * @method PopBuildObjectGenerationProject popBuildObjectGenerationProject(array $options = [])
 * @method PopBuildObjectProject popBuildObjectProject(array $options = [])
 * @method PopBuildPakRenderProject popBuildPakRenderProject(array $options = [])
 * @method PopBuildTextToAvatarProject popBuildTextToAvatarProject(array $options = [])
 * @method PopCreateFeatureToAvatarProject popCreateFeatureToAvatarProject(array $options = [])
 * @method PopCreateLivePortraitModelScopeProject popCreateLivePortraitModelScopeProject(array $options = [])
 * @method PopCreateMaterial popCreateMaterial(array $options = [])
 * @method PopCreateObjectGenerationProject popCreateObjectGenerationProject(array $options = [])
 * @method PopCreateObjectProject popCreateObjectProject(array $options = [])
 * @method PopCreatePakRenderProject popCreatePakRenderProject(array $options = [])
 * @method PopCreateTextToAvatarProject popCreateTextToAvatarProject(array $options = [])
 * @method PopDeleteMaterial popDeleteMaterial(array $options = [])
 * @method PopGetAITryOnJob popGetAITryOnJob(array $options = [])
 * @method PopListAITryOnJobs popListAITryOnJobs(array $options = [])
 * @method PopListCommonMaterialsAll popListCommonMaterialsAll(array $options = [])
 * @method PopListFeatureToAvatarMaterials popListFeatureToAvatarMaterials(array $options = [])
 * @method PopListFeatureToAvatarProject popListFeatureToAvatarProject(array $options = [])
 * @method PopListLivePortraitModelScopeMaterials popListLivePortraitModelScopeMaterials(array $options = [])
 * @method PopListObjectCase popListObjectCase(array $options = [])
 * @method PopListObjectProject popListObjectProject(array $options = [])
 * @method PopListPakRenderExpression popListPakRenderExpression(array $options = [])
 * @method PopListTextToAvatarProject popListTextToAvatarProject(array $options = [])
 * @method PopObjectProjectDetail popObjectProjectDetail(array $options = [])
 * @method PopQueryAvatarProjectDetail popQueryAvatarProjectDetail(array $options = [])
 * @method PopQueryLivePortraitModelScopeProjectDetail popQueryLivePortraitModelScopeProjectDetail(array $options = [])
 * @method PopQueryObjectGenerationProjectDetail popQueryObjectGenerationProjectDetail(array $options = [])
 * @method PopRetryAITryOnTask popRetryAITryOnTask(array $options = [])
 * @method PopSubmitAITryOnJob popSubmitAITryOnJob(array $options = [])
 * @method PopUploadMaterial popUploadMaterial(array $options = [])
 * @method PopVideoSaveSource popVideoSaveSource(array $options = [])
 * @method QueryDigitalHumanProject queryDigitalHumanProject(array $options = [])
 * @method QueryLongTtsResult queryLongTtsResult(array $options = [])
 * @method SubmitLongTtsTask submitLongTtsTask(array $options = [])
 * @method UpdateUserEmail updateUserEmail(array $options = [])
 */
class XrEngineApiResolver extends ApiResolver
{
}

class Rpc extends \AlibabaCloud\Client\Resolver\Rpc
{
    /** @var string */
    public $product = 'xrEngine';

    /** @var string */
    public $version = '2023-03-13';

    /** @var string */
    public $method = 'POST';
}

/**
 * @method string getJwtToken()
 * @method $this withJwtToken($value)
 */
class AuthUser extends Rpc
{

    /** @var string */
    public $scheme = 'https';
}

/**
 * @method string getOutputConfig()
 * @method string getWatermarkStyle()
 * @method string getWatermarkImageUrl()
 * @method string getTtsVoiceId()
 * @method string getTitle()
 * @method string getForegroundId()
 * @method string getContent()
 * @method string getMode()
 * @method string getIntro()
 * @method string getJwtToken()
 * @method $this withJwtToken($value)
 * @method string getBackgroundId()
 * @method string getForegroundUrl()
 * @method string getBackgroundUrl()
 * @method string getModelId()
 * @method string getAudioId()
 * @method string getHumanLayerStyle()
 * @method string getAudioUrl()
 */
class CreateDigitalHumanProject extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOutputConfig($value)
    {
        $this->data['OutputConfig'] = $value;
        $this->options['form_params']['OutputConfig'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withWatermarkStyle($value)
    {
        $this->data['WatermarkStyle'] = $value;
        $this->options['form_params']['WatermarkStyle'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withWatermarkImageUrl($value)
    {
        $this->data['WatermarkImageUrl'] = $value;
        $this->options['form_params']['WatermarkImageUrl'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTtsVoiceId($value)
    {
        $this->data['TtsVoiceId'] = $value;
        $this->options['form_params']['TtsVoiceId'] = $value;

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
    public function withForegroundId($value)
    {
        $this->data['ForegroundId'] = $value;
        $this->options['form_params']['ForegroundId'] = $value;

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
    public function withMode($value)
    {
        $this->data['Mode'] = $value;
        $this->options['form_params']['Mode'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withIntro($value)
    {
        $this->data['Intro'] = $value;
        $this->options['form_params']['Intro'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBackgroundId($value)
    {
        $this->data['BackgroundId'] = $value;
        $this->options['form_params']['BackgroundId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withForegroundUrl($value)
    {
        $this->data['ForegroundUrl'] = $value;
        $this->options['form_params']['ForegroundUrl'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBackgroundUrl($value)
    {
        $this->data['BackgroundUrl'] = $value;
        $this->options['form_params']['BackgroundUrl'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withModelId($value)
    {
        $this->data['ModelId'] = $value;
        $this->options['form_params']['ModelId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAudioId($value)
    {
        $this->data['AudioId'] = $value;
        $this->options['form_params']['AudioId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withHumanLayerStyle($value)
    {
        $this->data['HumanLayerStyle'] = $value;
        $this->options['form_params']['HumanLayerStyle'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAudioUrl($value)
    {
        $this->data['AudioUrl'] = $value;
        $this->options['form_params']['AudioUrl'] = $value;

        return $this;
    }
}

/**
 * @method string getImageId()
 * @method string getWatermarkStyle()
 * @method string getWatermarkImageUrl()
 * @method string getAudioId()
 * @method string getTtsVoiceId()
 * @method string getTitle()
 * @method string getContent()
 * @method string getMode()
 * @method string getAudioUrl()
 * @method string getImageUrl()
 * @method string getIntro()
 * @method string getJwtToken()
 * @method $this withJwtToken($value)
 */
class CreateLivePortraitProject extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withImageId($value)
    {
        $this->data['ImageId'] = $value;
        $this->options['form_params']['ImageId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withWatermarkStyle($value)
    {
        $this->data['WatermarkStyle'] = $value;
        $this->options['form_params']['WatermarkStyle'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withWatermarkImageUrl($value)
    {
        $this->data['WatermarkImageUrl'] = $value;
        $this->options['form_params']['WatermarkImageUrl'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAudioId($value)
    {
        $this->data['AudioId'] = $value;
        $this->options['form_params']['AudioId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTtsVoiceId($value)
    {
        $this->data['TtsVoiceId'] = $value;
        $this->options['form_params']['TtsVoiceId'] = $value;

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
    public function withMode($value)
    {
        $this->data['Mode'] = $value;
        $this->options['form_params']['Mode'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAudioUrl($value)
    {
        $this->data['AudioUrl'] = $value;
        $this->options['form_params']['AudioUrl'] = $value;

        return $this;
    }

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
    public function withIntro($value)
    {
        $this->data['Intro'] = $value;
        $this->options['form_params']['Intro'] = $value;

        return $this;
    }
}

/**
 * @method string getAppId()
 * @method string getJwtToken()
 */
class GetMapData extends Rpc
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
    public function withJwtToken($value)
    {
        $this->data['JwtToken'] = $value;
        $this->options['form_params']['JwtToken'] = $value;

        return $this;
    }
}

/**
 * @method string getAppId()
 * @method string getJwtToken()
 */
class GetMapPublishData extends Rpc
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
    public function withJwtToken($value)
    {
        $this->data['JwtToken'] = $value;
        $this->options['form_params']['JwtToken'] = $value;

        return $this;
    }
}

/**
 * @method string getParams()
 * @method string getJwtToken()
 */
class InitLocate extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withParams($value)
    {
        $this->data['Params'] = $value;
        $this->options['form_params']['Params'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withJwtToken($value)
    {
        $this->data['JwtToken'] = $value;
        $this->options['form_params']['JwtToken'] = $value;

        return $this;
    }
}

/**
 * @method string getTypes()
 * @method string getOnlyPersonalMaterials()
 * @method string getCurrent()
 * @method string getSize()
 * @method string getJwtToken()
 * @method $this withJwtToken($value)
 */
class ListDigitalHumanMaterials extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTypes($value)
    {
        $this->data['Types'] = $value;
        $this->options['form_params']['Types'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOnlyPersonalMaterials($value)
    {
        $this->data['OnlyPersonalMaterials'] = $value;
        $this->options['form_params']['OnlyPersonalMaterials'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCurrent($value)
    {
        $this->data['Current'] = $value;
        $this->options['form_params']['Current'] = $value;

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
        $this->options['form_params']['Size'] = $value;

        return $this;
    }
}

/**
 * @method string getSort()
 * @method string getCurrent()
 * @method string getSize()
 * @method string getJwtToken()
 * @method string getSortField()
 */
class ListLocationService extends Rpc
{

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
    public function withCurrent($value)
    {
        $this->data['Current'] = $value;
        $this->options['form_params']['Current'] = $value;

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
        $this->options['form_params']['Size'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withJwtToken($value)
    {
        $this->data['JwtToken'] = $value;
        $this->options['form_params']['JwtToken'] = $value;

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
}

/**
 * @method string getImageUrl()
 * @method string getJwtToken()
 * @method $this withJwtToken($value)
 */
class LivePortraitFaceDetect extends Rpc
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

/**
 * @method string getImage()
 * @method string getParams()
 * @method string getJwtToken()
 */
class Locate extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withImage($value)
    {
        $this->data['Image'] = $value;
        $this->options['form_params']['Image'] = $value;

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
        $this->options['form_params']['Params'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withJwtToken($value)
    {
        $this->data['JwtToken'] = $value;
        $this->options['form_params']['JwtToken'] = $value;

        return $this;
    }
}

/**
 * @method string getEmpName()
 * @method string getEmpId()
 * @method string getType()
 * @method string getToken()
 */
class LoginModelScope extends Rpc
{

    /** @var string */
    public $scheme = 'https';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withEmpName($value)
    {
        $this->data['EmpName'] = $value;
        $this->options['form_params']['EmpName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withEmpId($value)
    {
        $this->data['EmpId'] = $value;
        $this->options['form_params']['EmpId'] = $value;

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
    public function withToken($value)
    {
        $this->data['Token'] = $value;
        $this->options['form_params']['Token'] = $value;

        return $this;
    }
}

/**
 * @method string getProjectIds()
 * @method string getJwtToken()
 */
class PopBatchQueryObjectProjectStatus extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withProjectIds($value)
    {
        $this->data['ProjectIds'] = $value;
        $this->options['form_params']['ProjectIds'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withJwtToken($value)
    {
        $this->data['JwtToken'] = $value;
        $this->options['form_params']['JwtToken'] = $value;

        return $this;
    }
}

/**
 * @method string getProjectId()
 */
class PopBuildFeatureToAvatarProject extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withProjectId($value)
    {
        $this->data['ProjectId'] = $value;
        $this->options['form_params']['ProjectId'] = $value;

        return $this;
    }
}

/**
 * @method string getProjectId()
 */
class PopBuildLivePortraitModelScopeProject extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withProjectId($value)
    {
        $this->data['ProjectId'] = $value;
        $this->options['form_params']['ProjectId'] = $value;

        return $this;
    }
}

/**
 * @method string getJwtToken()
 * @method $this withJwtToken($value)
 * @method string getProjectId()
 */
class PopBuildObjectGenerationProject extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withProjectId($value)
    {
        $this->data['ProjectId'] = $value;
        $this->options['form_params']['ProjectId'] = $value;

        return $this;
    }
}

/**
 * @method string getJwtToken()
 * @method string getProjectId()
 * @method $this withProjectId($value)
 */
class PopBuildObjectProject extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withJwtToken($value)
    {
        $this->data['JwtToken'] = $value;
        $this->options['form_params']['JwtToken'] = $value;

        return $this;
    }
}

/**
 * @method string getProjectId()
 */
class PopBuildPakRenderProject extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withProjectId($value)
    {
        $this->data['ProjectId'] = $value;
        $this->options['form_params']['ProjectId'] = $value;

        return $this;
    }
}

/**
 * @method string getProjectId()
 */
class PopBuildTextToAvatarProject extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withProjectId($value)
    {
        $this->data['ProjectId'] = $value;
        $this->options['form_params']['ProjectId'] = $value;

        return $this;
    }
}

/**
 * @method string getExtInfo()
 * @method string getTitle()
 * @method string getIntro()
 */
class PopCreateFeatureToAvatarProject extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withExtInfo($value)
    {
        $this->data['ExtInfo'] = $value;
        $this->options['form_params']['ExtInfo'] = $value;

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
    public function withIntro($value)
    {
        $this->data['Intro'] = $value;
        $this->options['form_params']['Intro'] = $value;

        return $this;
    }
}

/**
 * @method string getExtInfo()
 * @method string getTitle()
 * @method string getIntro()
 */
class PopCreateLivePortraitModelScopeProject extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withExtInfo($value)
    {
        $this->data['ExtInfo'] = $value;
        $this->options['form_params']['ExtInfo'] = $value;

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
    public function withIntro($value)
    {
        $this->data['Intro'] = $value;
        $this->options['form_params']['Intro'] = $value;

        return $this;
    }
}

/**
 * @method string getExt()
 * @method string getOssKey()
 * @method string getListStatus()
 * @method string getType()
 * @method string getIntro()
 * @method string getName()
 * @method string getCheckStatus()
 * @method string getJwtToken()
 * @method $this withJwtToken($value)
 */
class PopCreateMaterial extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withExt($value)
    {
        $this->data['Ext'] = $value;
        $this->options['form_params']['Ext'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOssKey($value)
    {
        $this->data['OssKey'] = $value;
        $this->options['form_params']['OssKey'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withListStatus($value)
    {
        $this->data['ListStatus'] = $value;
        $this->options['form_params']['ListStatus'] = $value;

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
    public function withIntro($value)
    {
        $this->data['Intro'] = $value;
        $this->options['form_params']['Intro'] = $value;

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
    public function withCheckStatus($value)
    {
        $this->data['CheckStatus'] = $value;
        $this->options['form_params']['CheckStatus'] = $value;

        return $this;
    }
}

/**
 * @method string getExtInfo()
 * @method string getTitle()
 * @method string getIntro()
 * @method string getJwtToken()
 * @method $this withJwtToken($value)
 */
class PopCreateObjectGenerationProject extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withExtInfo($value)
    {
        $this->data['ExtInfo'] = $value;
        $this->options['form_params']['ExtInfo'] = $value;

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
    public function withIntro($value)
    {
        $this->data['Intro'] = $value;
        $this->options['form_params']['Intro'] = $value;

        return $this;
    }
}

/**
 * @method string getRecommendStatus()
 * @method string getForeignUid()
 * @method string getTitle()
 * @method string getDependencies()
 * @method string getAutoBuild()
 * @method string getMode()
 * @method string getIntro()
 * @method string getBizUsage()
 * @method string getJwtToken()
 * @method string getCustomSource()
 */
class PopCreateObjectProject extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withRecommendStatus($value)
    {
        $this->data['RecommendStatus'] = $value;
        $this->options['form_params']['RecommendStatus'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withForeignUid($value)
    {
        $this->data['ForeignUid'] = $value;
        $this->options['form_params']['ForeignUid'] = $value;

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
    public function withDependencies($value)
    {
        $this->data['Dependencies'] = $value;
        $this->options['form_params']['Dependencies'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAutoBuild($value)
    {
        $this->data['AutoBuild'] = $value;
        $this->options['form_params']['AutoBuild'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withMode($value)
    {
        $this->data['Mode'] = $value;
        $this->options['form_params']['Mode'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withIntro($value)
    {
        $this->data['Intro'] = $value;
        $this->options['form_params']['Intro'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBizUsage($value)
    {
        $this->data['BizUsage'] = $value;
        $this->options['form_params']['BizUsage'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withJwtToken($value)
    {
        $this->data['JwtToken'] = $value;
        $this->options['form_params']['JwtToken'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCustomSource($value)
    {
        $this->data['CustomSource'] = $value;
        $this->options['form_params']['CustomSource'] = $value;

        return $this;
    }
}

/**
 * @method string getExtInfo()
 * @method string getTitle()
 * @method string getIntro()
 */
class PopCreatePakRenderProject extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withExtInfo($value)
    {
        $this->data['ExtInfo'] = $value;
        $this->options['form_params']['ExtInfo'] = $value;

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
    public function withIntro($value)
    {
        $this->data['Intro'] = $value;
        $this->options['form_params']['Intro'] = $value;

        return $this;
    }
}

/**
 * @method string getExtInfo()
 * @method string getTitle()
 * @method string getIntro()
 */
class PopCreateTextToAvatarProject extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withExtInfo($value)
    {
        $this->data['ExtInfo'] = $value;
        $this->options['form_params']['ExtInfo'] = $value;

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
    public function withIntro($value)
    {
        $this->data['Intro'] = $value;
        $this->options['form_params']['Intro'] = $value;

        return $this;
    }
}

/**
 * @method string getMaterialId()
 * @method $this withMaterialId($value)
 * @method string getJwtToken()
 * @method $this withJwtToken($value)
 */
class PopDeleteMaterial extends Rpc
{
}

/**
 * @method string getWithMaterial()
 * @method $this withWithMaterial($value)
 * @method string getWithResult()
 * @method $this withWithResult($value)
 * @method string getJwtToken()
 * @method $this withJwtToken($value)
 * @method string getProjectId()
 * @method $this withProjectId($value)
 */
class PopGetAITryOnJob extends Rpc
{
}

/**
 * @method string getCurrent()
 * @method string getSize()
 * @method string getJwtToken()
 * @method $this withJwtToken($value)
 */
class PopListAITryOnJobs extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCurrent($value)
    {
        $this->data['Current'] = $value;
        $this->options['form_params']['Current'] = $value;

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
        $this->options['form_params']['Size'] = $value;

        return $this;
    }
}

/**
 * @method string getListStatus()
 * @method $this withListStatus($value)
 * @method string getType()
 * @method $this withType($value)
 * @method string getTags()
 * @method $this withTags($value)
 * @method string getCurrent()
 * @method string getSize()
 * @method string getName()
 * @method $this withName($value)
 * @method string getJwtToken()
 * @method $this withJwtToken($value)
 */
class PopListCommonMaterialsAll extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCurrent($value)
    {
        $this->data['Current'] = $value;
        $this->options['form_params']['Current'] = $value;

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
        $this->options['form_params']['Size'] = $value;

        return $this;
    }
}

/**
 * @method string getListStatus()
 * @method string getTags()
 * @method string getCurrent()
 * @method string getSize()
 */
class PopListFeatureToAvatarMaterials extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withListStatus($value)
    {
        $this->data['ListStatus'] = $value;
        $this->options['form_params']['ListStatus'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTags($value)
    {
        $this->data['Tags'] = $value;
        $this->options['form_params']['Tags'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCurrent($value)
    {
        $this->data['Current'] = $value;
        $this->options['form_params']['Current'] = $value;

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
        $this->options['form_params']['Size'] = $value;

        return $this;
    }
}

/**
 * @method string getTitle()
 * @method string getCurrent()
 * @method string getSize()
 * @method string getSortField()
 * @method string getStatus()
 */
class PopListFeatureToAvatarProject extends Rpc
{

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
    public function withCurrent($value)
    {
        $this->data['Current'] = $value;
        $this->options['form_params']['Current'] = $value;

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
        $this->options['form_params']['Size'] = $value;

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
    public function withStatus($value)
    {
        $this->data['Status'] = $value;
        $this->options['form_params']['Status'] = $value;

        return $this;
    }
}

/**
 * @method string getTypes()
 * @method string getCurrent()
 * @method string getSize()
 */
class PopListLivePortraitModelScopeMaterials extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTypes($value)
    {
        $this->data['Types'] = $value;
        $this->options['form_params']['Types'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCurrent($value)
    {
        $this->data['Current'] = $value;
        $this->options['form_params']['Current'] = $value;

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
        $this->options['form_params']['Size'] = $value;

        return $this;
    }
}

/**
 * @method string getCurrent()
 * @method string getSize()
 * @method string getJwtToken()
 */
class PopListObjectCase extends Rpc
{

    /** @var string */
    public $scheme = 'https';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCurrent($value)
    {
        $this->data['Current'] = $value;
        $this->options['form_params']['Current'] = $value;

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
        $this->options['form_params']['Size'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withJwtToken($value)
    {
        $this->data['JwtToken'] = $value;
        $this->options['form_params']['JwtToken'] = $value;

        return $this;
    }
}

/**
 * @method string getAuditStatus()
 * @method string getTitle()
 * @method string getCurrent()
 * @method string getWithSource()
 * @method string getSize()
 * @method string getJwtToken()
 * @method string getSortField()
 * @method string getCustomSource()
 * @method string getStatus()
 */
class PopListObjectProject extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAuditStatus($value)
    {
        $this->data['AuditStatus'] = $value;
        $this->options['form_params']['AuditStatus'] = $value;

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
    public function withCurrent($value)
    {
        $this->data['Current'] = $value;
        $this->options['form_params']['Current'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withWithSource($value)
    {
        $this->data['WithSource'] = $value;
        $this->options['form_params']['WithSource'] = $value;

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
        $this->options['form_params']['Size'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withJwtToken($value)
    {
        $this->data['JwtToken'] = $value;
        $this->options['form_params']['JwtToken'] = $value;

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
    public function withCustomSource($value)
    {
        $this->data['CustomSource'] = $value;
        $this->options['form_params']['CustomSource'] = $value;

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
 * @method string getListStatus()
 * @method $this withListStatus($value)
 * @method string getCurrent()
 * @method string getSize()
 */
class PopListPakRenderExpression extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCurrent($value)
    {
        $this->data['Current'] = $value;
        $this->options['form_params']['Current'] = $value;

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
        $this->options['form_params']['Size'] = $value;

        return $this;
    }
}

/**
 * @method string getTitle()
 * @method string getCurrent()
 * @method string getSize()
 * @method string getJwtToken()
 * @method $this withJwtToken($value)
 * @method string getSortField()
 * @method string getStatus()
 */
class PopListTextToAvatarProject extends Rpc
{

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
    public function withCurrent($value)
    {
        $this->data['Current'] = $value;
        $this->options['form_params']['Current'] = $value;

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
        $this->options['form_params']['Size'] = $value;

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
    public function withStatus($value)
    {
        $this->data['Status'] = $value;
        $this->options['form_params']['Status'] = $value;

        return $this;
    }
}

/**
 * @method string getJwtToken()
 * @method string getProjectId()
 * @method $this withProjectId($value)
 */
class PopObjectProjectDetail extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withJwtToken($value)
    {
        $this->data['JwtToken'] = $value;
        $this->options['form_params']['JwtToken'] = $value;

        return $this;
    }
}

/**
 * @method string getProjectId()
 * @method $this withProjectId($value)
 */
class PopQueryAvatarProjectDetail extends Rpc
{
}

/**
 * @method string getProjectId()
 * @method $this withProjectId($value)
 */
class PopQueryLivePortraitModelScopeProjectDetail extends Rpc
{
}

/**
 * @method string getJwtToken()
 * @method $this withJwtToken($value)
 * @method string getProjectId()
 */
class PopQueryObjectGenerationProjectDetail extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withProjectId($value)
    {
        $this->data['ProjectId'] = $value;
        $this->options['form_params']['ProjectId'] = $value;

        return $this;
    }
}

/**
 * @method string getJwtToken()
 * @method $this withJwtToken($value)
 * @method string getProjectId()
 * @method $this withProjectId($value)
 */
class PopRetryAITryOnTask extends Rpc
{
}

/**
 * @method string getModelId()
 * @method $this withModelId($value)
 * @method string getClothingType()
 * @method $this withClothingType($value)
 * @method string getBottomsId()
 * @method $this withBottomsId($value)
 * @method string getSuitId()
 * @method $this withSuitId($value)
 * @method string getJwtToken()
 * @method $this withJwtToken($value)
 * @method string getTopsId()
 * @method $this withTopsId($value)
 * @method string getShoeType()
 * @method $this withShoeType($value)
 */
class PopSubmitAITryOnJob extends Rpc
{
}

/**
 * @method string getJwtToken()
 * @method $this withJwtToken($value)
 */
class PopUploadMaterial extends Rpc
{
}

/**
 * @method string getJwtToken()
 * @method string getSourceType()
 * @method $this withSourceType($value)
 * @method string getProjectId()
 * @method $this withProjectId($value)
 */
class PopVideoSaveSource extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withJwtToken($value)
    {
        $this->data['JwtToken'] = $value;
        $this->options['form_params']['JwtToken'] = $value;

        return $this;
    }
}

/**
 * @method string getIds()
 * @method string getJwtToken()
 * @method $this withJwtToken($value)
 */
class QueryDigitalHumanProject extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withIds($value)
    {
        $this->data['Ids'] = $value;
        $this->options['form_params']['Ids'] = $value;

        return $this;
    }
}

/**
 * @method string getJobId()
 * @method string getJwtToken()
 * @method $this withJwtToken($value)
 */
class QueryLongTtsResult extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withJobId($value)
    {
        $this->data['JobId'] = $value;
        $this->options['form_params']['JobId'] = $value;

        return $this;
    }
}

/**
 * @method string getTtsVoiceId()
 * @method string getContent()
 * @method string getJwtToken()
 * @method $this withJwtToken($value)
 */
class SubmitLongTtsTask extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTtsVoiceId($value)
    {
        $this->data['TtsVoiceId'] = $value;
        $this->options['form_params']['TtsVoiceId'] = $value;

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
}

/**
 * @method string getJwtToken()
 * @method string getEmail()
 */
class UpdateUserEmail extends Rpc
{

    /** @var string */
    public $scheme = 'https';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withJwtToken($value)
    {
        $this->data['JwtToken'] = $value;
        $this->options['form_params']['JwtToken'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withEmail($value)
    {
        $this->data['Email'] = $value;
        $this->options['form_params']['Email'] = $value;

        return $this;
    }
}
