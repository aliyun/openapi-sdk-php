<?php

namespace AlibabaCloud\Green;

use AlibabaCloud\ApiResolverTrait;

/**
 * Find the specified Api of the Green based on the method name as the Api name.
 *
 * @package   AlibabaCloud\Green
 *
 * @method V20180509\AddFaces addFaces(array $options = [])
 * @method V20180509\AddGroups addGroups(array $options = [])
 * @method V20180509\AddPerson addPerson(array $options = [])
 * @method V20180509\AddSimilarityImage addSimilarityImage(array $options = [])
 * @method V20180509\AddVideoDna addVideoDna(array $options = [])
 * @method V20180509\AddVideoDnaGroup addVideoDnaGroup(array $options = [])
 * @method V20180509\DeleteFaces deleteFaces(array $options = [])
 * @method V20180509\DeleteGroups deleteGroups(array $options = [])
 * @method V20180509\DeletePerson deletePerson(array $options = [])
 * @method V20180509\DeleteSimilarityImage deleteSimilarityImage(array $options = [])
 * @method V20180509\DeleteVideoDna deleteVideoDna(array $options = [])
 * @method V20180509\DeleteVideoDnaGroup deleteVideoDnaGroup(array $options = [])
 * @method V20180509\FileAsyncScan fileAsyncScan(array $options = [])
 * @method V20180509\FileAsyncScanResults fileAsyncScanResults(array $options = [])
 * @method V20180509\GetAddVideoDnaResults getAddVideoDnaResults(array $options = [])
 * @method V20180509\GetFaces getFaces(array $options = [])
 * @method V20180509\GetGroups getGroups(array $options = [])
 * @method V20180509\GetPerson getPerson(array $options = [])
 * @method V20180509\GetPersons getPersons(array $options = [])
 * @method V20180509\ImageAsyncScan imageAsyncScan(array $options = [])
 * @method V20180509\ImageAsyncScanResults imageAsyncScanResults(array $options = [])
 * @method V20180509\ImageScanFeedback imageScanFeedback(array $options = [])
 * @method V20180509\ImageSyncScan imageSyncScan(array $options = [])
 * @method V20180509\SearchPerson searchPerson(array $options = [])
 * @method V20180509\SetPerson setPerson(array $options = [])
 * @method V20180509\TextFeedback textFeedback(array $options = [])
 * @method V20180509\TextScan textScan(array $options = [])
 * @method V20180509\UploadCredentials uploadCredentials(array $options = [])
 * @method V20180509\VideoAsyncScan videoAsyncScan(array $options = [])
 * @method V20180509\VideoAsyncScanResults videoAsyncScanResults(array $options = [])
 * @method V20180509\VideoFeedback videoFeedback(array $options = [])
 * @method V20180509\VideoSyncScan videoSyncScan(array $options = [])
 * @method V20180509\VoiceAsyncScan voiceAsyncScan(array $options = [])
 * @method V20180509\VoiceAsyncScanResults voiceAsyncScanResults(array $options = [])
 * @method V20180509\VoiceCancelScan voiceCancelScan(array $options = [])
 * @method V20180509\VoiceIdentityCheck voiceIdentityCheck(array $options = [])
 * @method V20180509\VoiceIdentityRegister voiceIdentityRegister(array $options = [])
 * @method V20180509\VoiceIdentityStartCheck voiceIdentityStartCheck(array $options = [])
 * @method V20180509\VoiceIdentityStartRegister voiceIdentityStartRegister(array $options = [])
 * @method V20180509\VoiceIdentityUnregister voiceIdentityUnregister(array $options = [])
 */
class GreenV20180509ApiResolver
{
    use ApiResolverTrait;

    /**
     * @var string
     */
    protected $namespace = 'AlibabaCloud\\Green\\V20180509';
}
