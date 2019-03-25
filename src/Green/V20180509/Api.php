<?php

namespace AlibabaCloud\Green\V20180509;

use AlibabaCloud\ApiResolverTrait;
use AlibabaCloud\Roa;

/**
 * Resolve Api based on the method name.
 *
 * @method UploadCredentials uploadCredentials(array $options = [])
 * @method VoiceCancelScan voiceCancelScan(array $options = [])
 * @method GetAddVideoDnaResults getAddVideoDnaResults(array $options = [])
 * @method DeleteVideoDnaGroup deleteVideoDnaGroup(array $options = [])
 * @method DeleteVideoDna deleteVideoDna(array $options = [])
 * @method AddVideoDnaGroup addVideoDnaGroup(array $options = [])
 * @method AddVideoDna addVideoDna(array $options = [])
 * @method VoiceIdentityStartRegister voiceIdentityStartRegister(array $options = [])
 * @method VoiceIdentityUnregister voiceIdentityUnregister(array $options = [])
 * @method VoiceIdentityStartCheck voiceIdentityStartCheck(array $options = [])
 * @method VoiceIdentityRegister voiceIdentityRegister(array $options = [])
 * @method VoiceIdentityCheck voiceIdentityCheck(array $options = [])
 * @method VideoSyncScan videoSyncScan(array $options = [])
 * @method VoiceAsyncScanResults voiceAsyncScanResults(array $options = [])
 * @method VideoAsyncScanResults videoAsyncScanResults(array $options = [])
 * @method AddGroups addGroups(array $options = [])
 * @method GetFaces getFaces(array $options = [])
 * @method GetPersons getPersons(array $options = [])
 * @method GetGroups getGroups(array $options = [])
 * @method TextFeedback textFeedback(array $options = [])
 * @method DeleteSimilarityImage deleteSimilarityImage(array $options = [])
 * @method SetPerson setPerson(array $options = [])
 * @method AddFaces addFaces(array $options = [])
 * @method DeleteFaces deleteFaces(array $options = [])
 * @method DeletePerson deletePerson(array $options = [])
 * @method ImageAsyncScan imageAsyncScan(array $options = [])
 * @method VoiceAsyncScan voiceAsyncScan(array $options = [])
 * @method GetPerson getPerson(array $options = [])
 * @method ImageSyncScan imageSyncScan(array $options = [])
 * @method VideoFeedback videoFeedback(array $options = [])
 * @method AddPerson addPerson(array $options = [])
 * @method AddSimilarityImage addSimilarityImage(array $options = [])
 * @method FileAsyncScanResults fileAsyncScanResults(array $options = [])
 * @method SearchPerson searchPerson(array $options = [])
 * @method ImageScanFeedback imageScanFeedback(array $options = [])
 * @method VideoAsyncScan videoAsyncScan(array $options = [])
 * @method ImageAsyncScanResults imageAsyncScanResults(array $options = [])
 * @method FileAsyncScan fileAsyncScan(array $options = [])
 * @method TextScan textScan(array $options = [])
 * @method DeleteGroups deleteGroups(array $options = [])
 */
class GreenApiResolver
{
    use ApiResolverTrait;
}

class V20180509Roa extends Roa
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
class UploadCredentials extends V20180509Roa
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
class VoiceCancelScan extends V20180509Roa
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
class GetAddVideoDnaResults extends V20180509Roa
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
class DeleteVideoDnaGroup extends V20180509Roa
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
class DeleteVideoDna extends V20180509Roa
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
class AddVideoDnaGroup extends V20180509Roa
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
class AddVideoDna extends V20180509Roa
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
class VoiceIdentityStartRegister extends V20180509Roa
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
class VoiceIdentityUnregister extends V20180509Roa
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
class VoiceIdentityStartCheck extends V20180509Roa
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
class VoiceIdentityRegister extends V20180509Roa
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
class VoiceIdentityCheck extends V20180509Roa
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
class VideoSyncScan extends V20180509Roa
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
class VoiceAsyncScanResults extends V20180509Roa
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
class VideoAsyncScanResults extends V20180509Roa
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
class AddGroups extends V20180509Roa
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
class GetFaces extends V20180509Roa
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
class GetPersons extends V20180509Roa
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
class GetGroups extends V20180509Roa
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
class TextFeedback extends V20180509Roa
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
class DeleteSimilarityImage extends V20180509Roa
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
class SetPerson extends V20180509Roa
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
class AddFaces extends V20180509Roa
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
class DeleteFaces extends V20180509Roa
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
class DeletePerson extends V20180509Roa
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
class ImageAsyncScan extends V20180509Roa
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
class VoiceAsyncScan extends V20180509Roa
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
class GetPerson extends V20180509Roa
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
class ImageSyncScan extends V20180509Roa
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
class VideoFeedback extends V20180509Roa
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
class AddPerson extends V20180509Roa
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
class AddSimilarityImage extends V20180509Roa
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
class FileAsyncScanResults extends V20180509Roa
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
class SearchPerson extends V20180509Roa
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
class ImageScanFeedback extends V20180509Roa
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
class VideoAsyncScan extends V20180509Roa
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
class ImageAsyncScanResults extends V20180509Roa
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
class FileAsyncScan extends V20180509Roa
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
class TextScan extends V20180509Roa
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
class DeleteGroups extends V20180509Roa
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
