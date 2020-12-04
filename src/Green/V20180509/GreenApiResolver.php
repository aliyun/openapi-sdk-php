<?php

namespace AlibabaCloud\Green\V20180509;

use AlibabaCloud\Client\Resolver\ApiResolver;

/**
 * @method AddFaces addFaces(array $options = [])
 * @method AddGroups addGroups(array $options = [])
 * @method AddPerson addPerson(array $options = [])
 * @method AddSimilarityImage addSimilarityImage(array $options = [])
 * @method AddSimilarityLibrary addSimilarityLibrary(array $options = [])
 * @method AddVideoDna addVideoDna(array $options = [])
 * @method AddVideoDnaGroup addVideoDnaGroup(array $options = [])
 * @method DeleteFaces deleteFaces(array $options = [])
 * @method DeleteGroups deleteGroups(array $options = [])
 * @method DeletePerson deletePerson(array $options = [])
 * @method DeleteSimilarityImage deleteSimilarityImage(array $options = [])
 * @method DeleteSimilarityLibrary deleteSimilarityLibrary(array $options = [])
 * @method DeleteVideoDna deleteVideoDna(array $options = [])
 * @method DeleteVideoDnaGroup deleteVideoDnaGroup(array $options = [])
 * @method DetectFace detectFace(array $options = [])
 * @method FileAsyncScan fileAsyncScan(array $options = [])
 * @method FileAsyncScanResults fileAsyncScanResults(array $options = [])
 * @method GetAddVideoDnaResults getAddVideoDnaResults(array $options = [])
 * @method GetFaces getFaces(array $options = [])
 * @method GetGroups getGroups(array $options = [])
 * @method GetPerson getPerson(array $options = [])
 * @method GetPersons getPersons(array $options = [])
 * @method GetSimilarityImage getSimilarityImage(array $options = [])
 * @method GetSimilarityLibrary getSimilarityLibrary(array $options = [])
 * @method ImageAsyncManualScan imageAsyncManualScan(array $options = [])
 * @method ImageAsyncManualScanResults imageAsyncManualScanResults(array $options = [])
 * @method ImageAsyncScan imageAsyncScan(array $options = [])
 * @method ImageAsyncScanResults imageAsyncScanResults(array $options = [])
 * @method ImageScanFeedback imageScanFeedback(array $options = [])
 * @method ImageSyncScan imageSyncScan(array $options = [])
 * @method ListSimilarityImages listSimilarityImages(array $options = [])
 * @method ListSimilarityLibraries listSimilarityLibraries(array $options = [])
 * @method LiveStreamAsyncScan liveStreamAsyncScan(array $options = [])
 * @method LiveStreamAsyncScanResults liveStreamAsyncScanResults(array $options = [])
 * @method LiveStreamCancelScan liveStreamCancelScan(array $options = [])
 * @method SearchPerson searchPerson(array $options = [])
 * @method SetPerson setPerson(array $options = [])
 * @method TextAsyncManualScan textAsyncManualScan(array $options = [])
 * @method TextAsyncManualScanResults textAsyncManualScanResults(array $options = [])
 * @method TextFeedback textFeedback(array $options = [])
 * @method TextScan textScan(array $options = [])
 * @method UploadCredentials uploadCredentials(array $options = [])
 * @method VideoAsyncManualScan videoAsyncManualScan(array $options = [])
 * @method VideoAsyncManualScanResults videoAsyncManualScanResults(array $options = [])
 * @method VideoAsyncScan videoAsyncScan(array $options = [])
 * @method VideoAsyncScanResults videoAsyncScanResults(array $options = [])
 * @method VideoCancelScan videoCancelScan(array $options = [])
 * @method VideoFeedback videoFeedback(array $options = [])
 * @method VideoSyncScan videoSyncScan(array $options = [])
 * @method VodAsyncScan vodAsyncScan(array $options = [])
 * @method VodAsyncScanResults vodAsyncScanResults(array $options = [])
 * @method VoiceAsyncManualScan voiceAsyncManualScan(array $options = [])
 * @method VoiceAsyncManualScanResults voiceAsyncManualScanResults(array $options = [])
 * @method VoiceAsyncScan voiceAsyncScan(array $options = [])
 * @method VoiceAsyncScanResults voiceAsyncScanResults(array $options = [])
 * @method VoiceCancelScan voiceCancelScan(array $options = [])
 * @method VoiceIdentityCheck voiceIdentityCheck(array $options = [])
 * @method VoiceIdentityRegister voiceIdentityRegister(array $options = [])
 * @method VoiceIdentityStartCheck voiceIdentityStartCheck(array $options = [])
 * @method VoiceIdentityStartRegister voiceIdentityStartRegister(array $options = [])
 * @method VoiceIdentityUnregister voiceIdentityUnregister(array $options = [])
 * @method VoiceSyncScan voiceSyncScan(array $options = [])
 * @method WebpageAsyncScan webpageAsyncScan(array $options = [])
 * @method WebpageAsyncScanResults webpageAsyncScanResults(array $options = [])
 * @method WebpageSyncScan webpageSyncScan(array $options = [])
 */
class GreenApiResolver extends ApiResolver
{
}

class Roa extends \AlibabaCloud\Client\Resolver\Roa
{
    /** @var string */
    public $product = 'Green';

    /** @var string */
    public $version = '2018-05-09';

    /** @var string */
    public $method = 'POST';

    /** @var string */
    public $serviceCode = 'green';
}

/**
 * @method string getClientInfo()
 */
class AddFaces extends Roa
{
    /** @var string */
    public $pathPattern = '/green/sface/face/add';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withClientInfo($value)
    {
        $this->data['ClientInfo'] = $value;
        $this->options['query']['ClientInfo'] = $value;

        return $this;
    }
}

/**
 * @method string getClientInfo()
 */
class AddGroups extends Roa
{
    /** @var string */
    public $pathPattern = '/green/sface/person/groups/add';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withClientInfo($value)
    {
        $this->data['ClientInfo'] = $value;
        $this->options['query']['ClientInfo'] = $value;

        return $this;
    }
}

/**
 * @method string getClientInfo()
 */
class AddPerson extends Roa
{
    /** @var string */
    public $pathPattern = '/green/sface/person/add';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withClientInfo($value)
    {
        $this->data['ClientInfo'] = $value;
        $this->options['query']['ClientInfo'] = $value;

        return $this;
    }
}

/**
 * @method string getClientInfo()
 */
class AddSimilarityImage extends Roa
{
    /** @var string */
    public $pathPattern = '/green/similarity/image/add';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withClientInfo($value)
    {
        $this->data['ClientInfo'] = $value;
        $this->options['query']['ClientInfo'] = $value;

        return $this;
    }
}

/**
 * @method string getClientInfo()
 */
class AddSimilarityLibrary extends Roa
{
    /** @var string */
    public $pathPattern = '/green/similarity/library/add';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withClientInfo($value)
    {
        $this->data['ClientInfo'] = $value;
        $this->options['query']['ClientInfo'] = $value;

        return $this;
    }
}

/**
 * @method string getClientInfo()
 */
class AddVideoDna extends Roa
{
    /** @var string */
    public $pathPattern = '/green/video/dna/add';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withClientInfo($value)
    {
        $this->data['ClientInfo'] = $value;
        $this->options['query']['ClientInfo'] = $value;

        return $this;
    }
}

/**
 * @method string getClientInfo()
 */
class AddVideoDnaGroup extends Roa
{
    /** @var string */
    public $pathPattern = '/green/video/dna/group/add';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withClientInfo($value)
    {
        $this->data['ClientInfo'] = $value;
        $this->options['query']['ClientInfo'] = $value;

        return $this;
    }
}

/**
 * @method string getClientInfo()
 */
class DeleteFaces extends Roa
{
    /** @var string */
    public $pathPattern = '/green/sface/face/delete';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withClientInfo($value)
    {
        $this->data['ClientInfo'] = $value;
        $this->options['query']['ClientInfo'] = $value;

        return $this;
    }
}

/**
 * @method string getClientInfo()
 */
class DeleteGroups extends Roa
{
    /** @var string */
    public $pathPattern = '/green/sface/person/groups/delete';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withClientInfo($value)
    {
        $this->data['ClientInfo'] = $value;
        $this->options['query']['ClientInfo'] = $value;

        return $this;
    }
}

/**
 * @method string getClientInfo()
 */
class DeletePerson extends Roa
{
    /** @var string */
    public $pathPattern = '/green/sface/person/delete';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withClientInfo($value)
    {
        $this->data['ClientInfo'] = $value;
        $this->options['query']['ClientInfo'] = $value;

        return $this;
    }
}

/**
 * @method string getClientInfo()
 */
class DeleteSimilarityImage extends Roa
{
    /** @var string */
    public $pathPattern = '/green/similarity/image/delete';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withClientInfo($value)
    {
        $this->data['ClientInfo'] = $value;
        $this->options['query']['ClientInfo'] = $value;

        return $this;
    }
}

/**
 * @method string getClientInfo()
 */
class DeleteSimilarityLibrary extends Roa
{
    /** @var string */
    public $pathPattern = '/green/similarity/library/delete';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withClientInfo($value)
    {
        $this->data['ClientInfo'] = $value;
        $this->options['query']['ClientInfo'] = $value;

        return $this;
    }
}

/**
 * @method string getClientInfo()
 */
class DeleteVideoDna extends Roa
{
    /** @var string */
    public $pathPattern = '/green/video/dna/delete';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withClientInfo($value)
    {
        $this->data['ClientInfo'] = $value;
        $this->options['query']['ClientInfo'] = $value;

        return $this;
    }
}

/**
 * @method string getClientInfo()
 */
class DeleteVideoDnaGroup extends Roa
{
    /** @var string */
    public $pathPattern = '/green/video/dna/group/delete';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withClientInfo($value)
    {
        $this->data['ClientInfo'] = $value;
        $this->options['query']['ClientInfo'] = $value;

        return $this;
    }
}

/**
 * @method string getClientInfo()
 */
class DetectFace extends Roa
{
    /** @var string */
    public $pathPattern = '/green/face/detect';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withClientInfo($value)
    {
        $this->data['ClientInfo'] = $value;
        $this->options['query']['ClientInfo'] = $value;

        return $this;
    }
}

/**
 * @method string getClientInfo()
 */
class FileAsyncScan extends Roa
{
    /** @var string */
    public $pathPattern = '/green/file/asyncscan';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withClientInfo($value)
    {
        $this->data['ClientInfo'] = $value;
        $this->options['query']['ClientInfo'] = $value;

        return $this;
    }
}

/**
 * @method string getClientInfo()
 */
class FileAsyncScanResults extends Roa
{
    /** @var string */
    public $pathPattern = '/green/file/results';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withClientInfo($value)
    {
        $this->data['ClientInfo'] = $value;
        $this->options['query']['ClientInfo'] = $value;

        return $this;
    }
}

/**
 * @method string getClientInfo()
 */
class GetAddVideoDnaResults extends Roa
{
    /** @var string */
    public $pathPattern = '/green/video/dna/add/results';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withClientInfo($value)
    {
        $this->data['ClientInfo'] = $value;
        $this->options['query']['ClientInfo'] = $value;

        return $this;
    }
}

/**
 * @method string getClientInfo()
 */
class GetFaces extends Roa
{
    /** @var string */
    public $pathPattern = '/green/sface/faces';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withClientInfo($value)
    {
        $this->data['ClientInfo'] = $value;
        $this->options['query']['ClientInfo'] = $value;

        return $this;
    }
}

/**
 * @method string getClientInfo()
 */
class GetGroups extends Roa
{
    /** @var string */
    public $pathPattern = '/green/sface/groups';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withClientInfo($value)
    {
        $this->data['ClientInfo'] = $value;
        $this->options['query']['ClientInfo'] = $value;

        return $this;
    }
}

/**
 * @method string getClientInfo()
 */
class GetPerson extends Roa
{
    /** @var string */
    public $pathPattern = '/green/sface/person';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withClientInfo($value)
    {
        $this->data['ClientInfo'] = $value;
        $this->options['query']['ClientInfo'] = $value;

        return $this;
    }
}

/**
 * @method string getClientInfo()
 */
class GetPersons extends Roa
{
    /** @var string */
    public $pathPattern = '/green/sface/group/persons';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withClientInfo($value)
    {
        $this->data['ClientInfo'] = $value;
        $this->options['query']['ClientInfo'] = $value;

        return $this;
    }
}

/**
 * @method string getClientInfo()
 */
class GetSimilarityImage extends Roa
{
    /** @var string */
    public $pathPattern = '/green/similarity/image/get';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withClientInfo($value)
    {
        $this->data['ClientInfo'] = $value;
        $this->options['query']['ClientInfo'] = $value;

        return $this;
    }
}

/**
 * @method string getClientInfo()
 */
class GetSimilarityLibrary extends Roa
{
    /** @var string */
    public $pathPattern = '/green/similarity/library/get';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withClientInfo($value)
    {
        $this->data['ClientInfo'] = $value;
        $this->options['query']['ClientInfo'] = $value;

        return $this;
    }
}

/**
 * @method string getClientInfo()
 */
class ImageAsyncManualScan extends Roa
{
    /** @var string */
    public $pathPattern = '/green/image/manual/asyncScan';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withClientInfo($value)
    {
        $this->data['ClientInfo'] = $value;
        $this->options['query']['ClientInfo'] = $value;

        return $this;
    }
}

/**
 * @method string getClientInfo()
 */
class ImageAsyncManualScanResults extends Roa
{
    /** @var string */
    public $pathPattern = '/green/image/manual/scan/results';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withClientInfo($value)
    {
        $this->data['ClientInfo'] = $value;
        $this->options['query']['ClientInfo'] = $value;

        return $this;
    }
}

/**
 * @method string getClientInfo()
 */
class ImageAsyncScan extends Roa
{
    /** @var string */
    public $pathPattern = '/green/image/asyncscan';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withClientInfo($value)
    {
        $this->data['ClientInfo'] = $value;
        $this->options['query']['ClientInfo'] = $value;

        return $this;
    }
}

/**
 * @method string getClientInfo()
 */
class ImageAsyncScanResults extends Roa
{
    /** @var string */
    public $pathPattern = '/green/image/results';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withClientInfo($value)
    {
        $this->data['ClientInfo'] = $value;
        $this->options['query']['ClientInfo'] = $value;

        return $this;
    }
}

/**
 * @method string getClientInfo()
 */
class ImageScanFeedback extends Roa
{
    /** @var string */
    public $pathPattern = '/green/image/feedback';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withClientInfo($value)
    {
        $this->data['ClientInfo'] = $value;
        $this->options['query']['ClientInfo'] = $value;

        return $this;
    }
}

/**
 * @method string getClientInfo()
 */
class ImageSyncScan extends Roa
{
    /** @var string */
    public $pathPattern = '/green/image/scan';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withClientInfo($value)
    {
        $this->data['ClientInfo'] = $value;
        $this->options['query']['ClientInfo'] = $value;

        return $this;
    }
}

/**
 * @method string getClientInfo()
 */
class ListSimilarityImages extends Roa
{
    /** @var string */
    public $pathPattern = '/green/similarity/image/list';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withClientInfo($value)
    {
        $this->data['ClientInfo'] = $value;
        $this->options['query']['ClientInfo'] = $value;

        return $this;
    }
}

/**
 * @method string getClientInfo()
 */
class ListSimilarityLibraries extends Roa
{
    /** @var string */
    public $pathPattern = '/green/similarity/library/list';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withClientInfo($value)
    {
        $this->data['ClientInfo'] = $value;
        $this->options['query']['ClientInfo'] = $value;

        return $this;
    }
}

/**
 * @method string getClientInfo()
 */
class LiveStreamAsyncScan extends Roa
{
    /** @var string */
    public $pathPattern = '/green/livestream/asyncscan';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withClientInfo($value)
    {
        $this->data['ClientInfo'] = $value;
        $this->options['query']['ClientInfo'] = $value;

        return $this;
    }
}

/**
 * @method string getClientInfo()
 */
class LiveStreamAsyncScanResults extends Roa
{
    /** @var string */
    public $pathPattern = '/green/livestream/results';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withClientInfo($value)
    {
        $this->data['ClientInfo'] = $value;
        $this->options['query']['ClientInfo'] = $value;

        return $this;
    }
}

/**
 * @method string getClientInfo()
 */
class LiveStreamCancelScan extends Roa
{
    /** @var string */
    public $pathPattern = '/green/livestream/cancelscan';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withClientInfo($value)
    {
        $this->data['ClientInfo'] = $value;
        $this->options['query']['ClientInfo'] = $value;

        return $this;
    }
}

/**
 * @method string getClientInfo()
 */
class SearchPerson extends Roa
{
    /** @var string */
    public $pathPattern = '/green/sface/search';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withClientInfo($value)
    {
        $this->data['ClientInfo'] = $value;
        $this->options['query']['ClientInfo'] = $value;

        return $this;
    }
}

/**
 * @method string getClientInfo()
 */
class SetPerson extends Roa
{
    /** @var string */
    public $pathPattern = '/green/sface/person/update';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withClientInfo($value)
    {
        $this->data['ClientInfo'] = $value;
        $this->options['query']['ClientInfo'] = $value;

        return $this;
    }
}

/**
 * @method string getClientInfo()
 */
class TextAsyncManualScan extends Roa
{
    /** @var string */
    public $pathPattern = '/green/text/manual/asyncScan';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withClientInfo($value)
    {
        $this->data['ClientInfo'] = $value;
        $this->options['query']['ClientInfo'] = $value;

        return $this;
    }
}

/**
 * @method string getClientInfo()
 */
class TextAsyncManualScanResults extends Roa
{
    /** @var string */
    public $pathPattern = '/green/text/manual/scan/results';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withClientInfo($value)
    {
        $this->data['ClientInfo'] = $value;
        $this->options['query']['ClientInfo'] = $value;

        return $this;
    }
}

/**
 * @method string getClientInfo()
 */
class TextFeedback extends Roa
{
    /** @var string */
    public $pathPattern = '/green/text/feedback';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withClientInfo($value)
    {
        $this->data['ClientInfo'] = $value;
        $this->options['query']['ClientInfo'] = $value;

        return $this;
    }
}

/**
 * @method string getClientInfo()
 */
class TextScan extends Roa
{
    /** @var string */
    public $pathPattern = '/green/text/scan';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withClientInfo($value)
    {
        $this->data['ClientInfo'] = $value;
        $this->options['query']['ClientInfo'] = $value;

        return $this;
    }
}

/**
 * @method string getClientInfo()
 */
class UploadCredentials extends Roa
{
    /** @var string */
    public $pathPattern = '/green/credentials/uploadcredentials';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withClientInfo($value)
    {
        $this->data['ClientInfo'] = $value;
        $this->options['query']['ClientInfo'] = $value;

        return $this;
    }
}

/**
 * @method string getClientInfo()
 */
class VideoAsyncManualScan extends Roa
{
    /** @var string */
    public $pathPattern = '/green/video/manual/asyncScan';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withClientInfo($value)
    {
        $this->data['ClientInfo'] = $value;
        $this->options['query']['ClientInfo'] = $value;

        return $this;
    }
}

/**
 * @method string getClientInfo()
 */
class VideoAsyncManualScanResults extends Roa
{
    /** @var string */
    public $pathPattern = '/green/video/manual/scan/results';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withClientInfo($value)
    {
        $this->data['ClientInfo'] = $value;
        $this->options['query']['ClientInfo'] = $value;

        return $this;
    }
}

/**
 * @method string getClientInfo()
 */
class VideoAsyncScan extends Roa
{
    /** @var string */
    public $pathPattern = '/green/video/asyncscan';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withClientInfo($value)
    {
        $this->data['ClientInfo'] = $value;
        $this->options['query']['ClientInfo'] = $value;

        return $this;
    }
}

/**
 * @method string getClientInfo()
 */
class VideoAsyncScanResults extends Roa
{
    /** @var string */
    public $pathPattern = '/green/video/results';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withClientInfo($value)
    {
        $this->data['ClientInfo'] = $value;
        $this->options['query']['ClientInfo'] = $value;

        return $this;
    }
}

/**
 * @method string getClientInfo()
 */
class VideoCancelScan extends Roa
{
    /** @var string */
    public $pathPattern = '/green/video/cancelscan';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withClientInfo($value)
    {
        $this->data['ClientInfo'] = $value;
        $this->options['query']['ClientInfo'] = $value;

        return $this;
    }
}

/**
 * @method string getClientInfo()
 */
class VideoFeedback extends Roa
{
    /** @var string */
    public $pathPattern = '/green/video/feedback';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withClientInfo($value)
    {
        $this->data['ClientInfo'] = $value;
        $this->options['query']['ClientInfo'] = $value;

        return $this;
    }
}

/**
 * @method string getClientInfo()
 */
class VideoSyncScan extends Roa
{
    /** @var string */
    public $pathPattern = '/green/video/syncscan';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withClientInfo($value)
    {
        $this->data['ClientInfo'] = $value;
        $this->options['query']['ClientInfo'] = $value;

        return $this;
    }
}

/**
 * @method string getClientInfo()
 */
class VodAsyncScan extends Roa
{
    /** @var string */
    public $pathPattern = '/green/vod/asyncscan';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withClientInfo($value)
    {
        $this->data['ClientInfo'] = $value;
        $this->options['query']['ClientInfo'] = $value;

        return $this;
    }
}

/**
 * @method string getClientInfo()
 */
class VodAsyncScanResults extends Roa
{
    /** @var string */
    public $pathPattern = '/green/vod/results';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withClientInfo($value)
    {
        $this->data['ClientInfo'] = $value;
        $this->options['query']['ClientInfo'] = $value;

        return $this;
    }
}

/**
 * @method string getClientInfo()
 */
class VoiceAsyncManualScan extends Roa
{
    /** @var string */
    public $pathPattern = '/green/voice/manual/asyncScan';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withClientInfo($value)
    {
        $this->data['ClientInfo'] = $value;
        $this->options['query']['ClientInfo'] = $value;

        return $this;
    }
}

/**
 * @method string getClientInfo()
 */
class VoiceAsyncManualScanResults extends Roa
{
    /** @var string */
    public $pathPattern = '/green/voice/manual/scan/results';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withClientInfo($value)
    {
        $this->data['ClientInfo'] = $value;
        $this->options['query']['ClientInfo'] = $value;

        return $this;
    }
}

/**
 * @method string getClientInfo()
 */
class VoiceAsyncScan extends Roa
{
    /** @var string */
    public $pathPattern = '/green/voice/asyncscan';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withClientInfo($value)
    {
        $this->data['ClientInfo'] = $value;
        $this->options['query']['ClientInfo'] = $value;

        return $this;
    }
}

/**
 * @method string getClientInfo()
 */
class VoiceAsyncScanResults extends Roa
{
    /** @var string */
    public $pathPattern = '/green/voice/results';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withClientInfo($value)
    {
        $this->data['ClientInfo'] = $value;
        $this->options['query']['ClientInfo'] = $value;

        return $this;
    }
}

/**
 * @method string getClientInfo()
 */
class VoiceCancelScan extends Roa
{
    /** @var string */
    public $pathPattern = '/green/voice/cancelscan';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withClientInfo($value)
    {
        $this->data['ClientInfo'] = $value;
        $this->options['query']['ClientInfo'] = $value;

        return $this;
    }
}

/**
 * @method string getClientInfo()
 */
class VoiceIdentityCheck extends Roa
{
    /** @var string */
    public $pathPattern = '/green/voice/auth/check';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withClientInfo($value)
    {
        $this->data['ClientInfo'] = $value;
        $this->options['query']['ClientInfo'] = $value;

        return $this;
    }
}

/**
 * @method string getClientInfo()
 */
class VoiceIdentityRegister extends Roa
{
    /** @var string */
    public $pathPattern = '/green/voice/auth/register';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withClientInfo($value)
    {
        $this->data['ClientInfo'] = $value;
        $this->options['query']['ClientInfo'] = $value;

        return $this;
    }
}

/**
 * @method string getClientInfo()
 */
class VoiceIdentityStartCheck extends Roa
{
    /** @var string */
    public $pathPattern = '/green/voice/auth/start/check';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withClientInfo($value)
    {
        $this->data['ClientInfo'] = $value;
        $this->options['query']['ClientInfo'] = $value;

        return $this;
    }
}

/**
 * @method string getClientInfo()
 */
class VoiceIdentityStartRegister extends Roa
{
    /** @var string */
    public $pathPattern = '/green/voice/auth/start/register';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withClientInfo($value)
    {
        $this->data['ClientInfo'] = $value;
        $this->options['query']['ClientInfo'] = $value;

        return $this;
    }
}

/**
 * @method string getClientInfo()
 */
class VoiceIdentityUnregister extends Roa
{
    /** @var string */
    public $pathPattern = '/green/voice/auth/unregister';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withClientInfo($value)
    {
        $this->data['ClientInfo'] = $value;
        $this->options['query']['ClientInfo'] = $value;

        return $this;
    }
}

/**
 * @method string getClientInfo()
 */
class VoiceSyncScan extends Roa
{
    /** @var string */
    public $pathPattern = '/green/voice/syncscan';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withClientInfo($value)
    {
        $this->data['ClientInfo'] = $value;
        $this->options['query']['ClientInfo'] = $value;

        return $this;
    }
}

/**
 * @method string getClientInfo()
 */
class WebpageAsyncScan extends Roa
{
    /** @var string */
    public $pathPattern = '/green/webpage/asyncscan';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withClientInfo($value)
    {
        $this->data['ClientInfo'] = $value;
        $this->options['query']['ClientInfo'] = $value;

        return $this;
    }
}

/**
 * @method string getClientInfo()
 */
class WebpageAsyncScanResults extends Roa
{
    /** @var string */
    public $pathPattern = '/green/webpage/results';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withClientInfo($value)
    {
        $this->data['ClientInfo'] = $value;
        $this->options['query']['ClientInfo'] = $value;

        return $this;
    }
}

/**
 * @method string getClientInfo()
 */
class WebpageSyncScan extends Roa
{
    /** @var string */
    public $pathPattern = '/green/webpage/scan';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withClientInfo($value)
    {
        $this->data['ClientInfo'] = $value;
        $this->options['query']['ClientInfo'] = $value;

        return $this;
    }
}
