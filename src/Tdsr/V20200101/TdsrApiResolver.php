<?php

namespace AlibabaCloud\Tdsr\V20200101;

use AlibabaCloud\Client\Resolver\ApiResolver;

/**
 * @method CheckPermission checkPermission(array $options = [])
 * @method CheckResource checkResource(array $options = [])
 * @method CreateProject createProject(array $options = [])
 * @method CreateScene createScene(array $options = [])
 * @method DeleteFile deleteFile(array $options = [])
 * @method DeleteProject deleteProject(array $options = [])
 * @method GetHotspotConfig getHotspotConfig(array $options = [])
 * @method GetHotspotTag getHotspotTag(array $options = [])
 * @method GetPolicy getPolicy(array $options = [])
 * @method GetSceneData getSceneData(array $options = [])
 * @method GetSceneList getSceneList(array $options = [])
 * @method GetWindowConfig getWindowConfig(array $options = [])
 * @method ListMainScenes listMainScenes(array $options = [])
 * @method ListScenes listScenes(array $options = [])
 * @method PublishHotspot publishHotspot(array $options = [])
 * @method SaveFile saveFile(array $options = [])
 * @method SaveHotspotConfig saveHotspotConfig(array $options = [])
 * @method SaveHotspotTag saveHotspotTag(array $options = [])
 */
class TdsrApiResolver extends ApiResolver
{
}

class Rpc extends \AlibabaCloud\Client\Resolver\Rpc
{
    /** @var string */
    public $product = 'tdsr';

    /** @var string */
    public $version = '2020-01-01';

    /** @var string */
    public $method = 'POST';
}

/**
 * @method string getAliyunId()
 * @method $this withAliyunId($value)
 */
class CheckPermission extends Rpc
{
}

/**
 * @method string getCountry()
 * @method $this withCountry($value)
 * @method string getHid()
 * @method $this withHid($value)
 * @method string getLevel()
 * @method $this withLevel($value)
 * @method string getInvoker()
 * @method $this withInvoker($value)
 * @method string getMessage()
 * @method $this withMessage($value)
 * @method string getUrl()
 * @method $this withUrl($value)
 * @method string getSuccess()
 * @method $this withSuccess($value)
 * @method string getInterrupt()
 * @method $this withInterrupt($value)
 * @method string getGmtWakeup()
 * @method $this withGmtWakeup($value)
 * @method string getPk()
 * @method $this withPk($value)
 * @method string getBid()
 * @method $this withBid($value)
 * @method string getPrompt()
 * @method $this withPrompt($value)
 * @method string getTaskExtraData()
 * @method $this withTaskExtraData($value)
 * @method string getTaskIdentifier()
 * @method $this withTaskIdentifier($value)
 */
class CheckResource extends Rpc
{
}

/**
 * @method string getBusinessUserIdList()
 * @method $this withBusinessUserIdList($value)
 * @method string getBuilderUserIdList()
 * @method $this withBuilderUserIdList($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getBusinessId()
 * @method $this withBusinessId($value)
 * @method string getGatherUserIdList()
 * @method $this withGatherUserIdList($value)
 */
class CreateProject extends Rpc
{
}

/**
 * @method string getName()
 * @method $this withName($value)
 * @method string getProjectId()
 * @method $this withProjectId($value)
 */
class CreateScene extends Rpc
{
}

/**
 * @method string getSubSceneUuid()
 * @method $this withSubSceneUuid($value)
 * @method string getParamFile()
 * @method $this withParamFile($value)
 */
class DeleteFile extends Rpc
{
}

/**
 * @method string getProjectId()
 * @method $this withProjectId($value)
 */
class DeleteProject extends Rpc
{
}

/**
 * @method string getPreviewToken()
 * @method $this withPreviewToken($value)
 */
class GetHotspotConfig extends Rpc
{
}

/**
 * @method string getSubSceneUuid()
 * @method $this withSubSceneUuid($value)
 * @method string getType()
 * @method $this withType($value)
 * @method string getPreviewToken()
 * @method $this withPreviewToken($value)
 */
class GetHotspotTag extends Rpc
{
}

/**
 * @method string getSubSceneUuid()
 * @method $this withSubSceneUuid($value)
 * @method string getType()
 * @method $this withType($value)
 */
class GetPolicy extends Rpc
{
}

/**
 * @method string getToken()
 * @method $this withToken($value)
 */
class GetSceneData extends Rpc
{
}

/**
 * @method string getAccountId()
 * @method $this withAccountId($value)
 */
class GetSceneList extends Rpc
{
}

/**
 * @method string getPreviewToken()
 * @method $this withPreviewToken($value)
 */
class GetWindowConfig extends Rpc
{
}

/**
 * @method string getQueryName()
 * @method $this withQueryName($value)
 */
class ListMainScenes extends Rpc
{
}

/**
 * @method string getProjectId()
 * @method $this withProjectId($value)
 * @method string getIsPublishQuery()
 * @method $this withIsPublishQuery($value)
 */
class ListScenes extends Rpc
{
}

/**
 * @method string getSubSceneUuid()
 * @method $this withSubSceneUuid($value)
 * @method string getParamTag()
 * @method $this withParamTag($value)
 */
class PublishHotspot extends Rpc
{
}

/**
 * @method string getSubSceneUuid()
 * @method $this withSubSceneUuid($value)
 * @method string getParamFile()
 * @method $this withParamFile($value)
 */
class SaveFile extends Rpc
{
}

/**
 * @method string getPreviewToken()
 * @method $this withPreviewToken($value)
 * @method string getParamTag()
 * @method $this withParamTag($value)
 */
class SaveHotspotConfig extends Rpc
{
}

/**
 * @method string getSubSceneUuid()
 * @method $this withSubSceneUuid($value)
 * @method string getParamTag()
 * @method $this withParamTag($value)
 */
class SaveHotspotTag extends Rpc
{
}
