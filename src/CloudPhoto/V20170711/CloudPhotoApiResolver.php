<?php

namespace AlibabaCloud\CloudPhoto\V20170711;

use AlibabaCloud\Client\Resolver\ApiResolver;

/**
 * @method FetchPhotos fetchPhotos(array $options = [])
 * @method FetchMomentPhotos fetchMomentPhotos(array $options = [])
 * @method FetchLibraries fetchLibraries(array $options = [])
 * @method FetchAlbumTagPhotos fetchAlbumTagPhotos(array $options = [])
 * @method GetAlbumsByNames getAlbumsByNames(array $options = [])
 * @method GetEvent getEvent(array $options = [])
 * @method EditEvent editEvent(array $options = [])
 * @method ListEvents listEvents(array $options = [])
 * @method DeleteEvent deleteEvent(array $options = [])
 * @method CreateEvent createEvent(array $options = [])
 * @method RegisterPhoto registerPhoto(array $options = [])
 * @method GetSimilarPhotos getSimilarPhotos(array $options = [])
 * @method TagPhoto tagPhoto(array $options = [])
 * @method RegisterTag registerTag(array $options = [])
 * @method ListRegisteredTags listRegisteredTags(array $options = [])
 * @method GetLibrary getLibrary(array $options = [])
 * @method EditPhotoStore editPhotoStore(array $options = [])
 * @method ToggleFeatures toggleFeatures(array $options = [])
 * @method ListTimeLines listTimeLines(array $options = [])
 * @method ListPhotoFaces listPhotoFaces(array $options = [])
 * @method ListTimeLinePhotos listTimeLinePhotos(array $options = [])
 * @method LikePhoto likePhoto(array $options = [])
 * @method GetPublicAccessUrls getPublicAccessUrls(array $options = [])
 * @method GetPrivateAccessUrls getPrivateAccessUrls(array $options = [])
 * @method GetPhotosByMd5s getPhotosByMd5s(array $options = [])
 * @method GetFramedPhotoUrls getFramedPhotoUrls(array $options = [])
 * @method EditPhotos editPhotos(array $options = [])
 * @method ActivatePhotos activatePhotos(array $options = [])
 * @method GetThumbnails getThumbnails(array $options = [])
 * @method GetDownloadUrls getDownloadUrls(array $options = [])
 * @method GetPhotos getPhotos(array $options = [])
 * @method SetFaceCover setFaceCover(array $options = [])
 * @method SetQuota setQuota(array $options = [])
 * @method SetMe setMe(array $options = [])
 * @method SetAlbumCover setAlbumCover(array $options = [])
 * @method SearchPhotos searchPhotos(array $options = [])
 * @method RenameFace renameFace(array $options = [])
 * @method RenameAlbum renameAlbum(array $options = [])
 * @method RemoveFacePhotos removeFacePhotos(array $options = [])
 * @method RemoveAlbumPhotos removeAlbumPhotos(array $options = [])
 * @method ReactivatePhotos reactivatePhotos(array $options = [])
 * @method MoveFacePhotos moveFacePhotos(array $options = [])
 * @method MoveAlbumPhotos moveAlbumPhotos(array $options = [])
 * @method MergeFaces mergeFaces(array $options = [])
 * @method ListTags listTags(array $options = [])
 * @method ListTagPhotos listTagPhotos(array $options = [])
 * @method ListPhotoTags listPhotoTags(array $options = [])
 * @method ListPhotoStores listPhotoStores(array $options = [])
 * @method ListPhotos listPhotos(array $options = [])
 * @method ListMoments listMoments(array $options = [])
 * @method ListMomentPhotos listMomentPhotos(array $options = [])
 * @method ListFaces listFaces(array $options = [])
 * @method ListFacePhotos listFacePhotos(array $options = [])
 * @method ListAlbums listAlbums(array $options = [])
 * @method ListAlbumPhotos listAlbumPhotos(array $options = [])
 * @method InactivatePhotos inactivatePhotos(array $options = [])
 * @method GetVideoCover getVideoCover(array $options = [])
 * @method GetThumbnail getThumbnail(array $options = [])
 * @method GetQuota getQuota(array $options = [])
 * @method GetPhotoStore getPhotoStore(array $options = [])
 * @method GetDownloadUrl getDownloadUrl(array $options = [])
 * @method DeletePhotoStore deletePhotoStore(array $options = [])
 * @method DeletePhotos deletePhotos(array $options = [])
 * @method DeleteFaces deleteFaces(array $options = [])
 * @method DeleteAlbums deleteAlbums(array $options = [])
 * @method CreateTransaction createTransaction(array $options = [])
 * @method CreatePhotoStore createPhotoStore(array $options = [])
 * @method CreatePhoto createPhoto(array $options = [])
 * @method CreateAlbum createAlbum(array $options = [])
 * @method AddAlbumPhotos addAlbumPhotos(array $options = [])
 */
class CloudPhotoApiResolver extends ApiResolver
{
}

class Rpc extends \AlibabaCloud\Client\Resolver\Rpc
{
    /** @var string */
    public $product = 'CloudPhoto';

    /** @var string */
    public $version = '2017-07-11';

    /** @var string */
    public $method = 'POST';

    /** @var string */
    protected $scheme = 'https';

    /** @var string */
    public $serviceCode = 'cloudphoto';
}

/**
 * @method string getSize()
 * @method $this withSize($value)
 * @method string getLibraryId()
 * @method $this withLibraryId($value)
 * @method string getOrderBy()
 * @method $this withOrderBy($value)
 * @method string getStoreName()
 * @method $this withStoreName($value)
 * @method string getState()
 * @method $this withState($value)
 * @method string getPage()
 * @method $this withPage($value)
 * @method string getOrder()
 * @method $this withOrder($value)
 */
class FetchPhotos extends Rpc
{
}

/**
 * @method string getSize()
 * @method $this withSize($value)
 * @method string getLibraryId()
 * @method $this withLibraryId($value)
 * @method string getOrderBy()
 * @method $this withOrderBy($value)
 * @method string getStoreName()
 * @method $this withStoreName($value)
 * @method string getPage()
 * @method $this withPage($value)
 * @method string getMomentId()
 * @method $this withMomentId($value)
 * @method string getOrder()
 * @method $this withOrder($value)
 */
class FetchMomentPhotos extends Rpc
{
}

/**
 * @method string getSize()
 * @method $this withSize($value)
 * @method string getNeedQuota()
 * @method $this withNeedQuota($value)
 * @method string getStoreName()
 * @method $this withStoreName($value)
 * @method string getPage()
 * @method $this withPage($value)
 */
class FetchLibraries extends Rpc
{
}

/**
 * @method string getSize()
 * @method $this withSize($value)
 * @method string getTagId()
 * @method $this withTagId($value)
 * @method string getLibraryId()
 * @method $this withLibraryId($value)
 * @method string getAlbumId()
 * @method $this withAlbumId($value)
 * @method string getStoreName()
 * @method $this withStoreName($value)
 * @method string getPage()
 * @method $this withPage($value)
 */
class FetchAlbumTagPhotos extends Rpc
{
}

/**
 * @method string getLibraryId()
 * @method $this withLibraryId($value)
 * @method array getName()
 * @method string getStoreName()
 * @method $this withStoreName($value)
 */
class GetAlbumsByNames extends Rpc
{

    /**
     * @param array $name
     *
     * @return $this
     */
    public function withName(array $name)
    {
        $this->data['Name'] = $name;
        foreach ($name as $i => $iValue) {
            $this->options['query']['Name.' . ($i + 1)] = $iValue;
        }

        return $this;
    }
}

/**
 * @method string getEventId()
 * @method $this withEventId($value)
 * @method string getLibraryId()
 * @method $this withLibraryId($value)
 * @method string getStoreName()
 * @method $this withStoreName($value)
 */
class GetEvent extends Rpc
{
}

/**
 * @method string getEventId()
 * @method $this withEventId($value)
 * @method string getBannerPhotoId()
 * @method $this withBannerPhotoId($value)
 * @method string getWatermarkPhotoId()
 * @method $this withWatermarkPhotoId($value)
 * @method string getIdentity()
 * @method $this withIdentity($value)
 * @method string getSplashPhotoId()
 * @method $this withSplashPhotoId($value)
 * @method string getLibraryId()
 * @method $this withLibraryId($value)
 * @method string getWeixinTitle()
 * @method $this withWeixinTitle($value)
 * @method string getStoreName()
 * @method $this withStoreName($value)
 * @method string getRemark()
 * @method $this withRemark($value)
 * @method string getTitle()
 * @method $this withTitle($value)
 * @method string getEndAt()
 * @method $this withEndAt($value)
 * @method string getStartAt()
 * @method $this withStartAt($value)
 */
class EditEvent extends Rpc
{
}

/**
 * @method string getCursor()
 * @method $this withCursor($value)
 * @method string getSize()
 * @method $this withSize($value)
 * @method string getStoreName()
 * @method $this withStoreName($value)
 * @method string getState()
 * @method $this withState($value)
 * @method string getDirection()
 * @method $this withDirection($value)
 */
class ListEvents extends Rpc
{
}

/**
 * @method string getEventId()
 * @method $this withEventId($value)
 * @method string getLibraryId()
 * @method $this withLibraryId($value)
 * @method string getStoreName()
 * @method $this withStoreName($value)
 */
class DeleteEvent extends Rpc
{
}

/**
 * @method string getBannerPhotoId()
 * @method $this withBannerPhotoId($value)
 * @method string getWatermarkPhotoId()
 * @method $this withWatermarkPhotoId($value)
 * @method string getIdentity()
 * @method $this withIdentity($value)
 * @method string getSplashPhotoId()
 * @method $this withSplashPhotoId($value)
 * @method string getLibraryId()
 * @method $this withLibraryId($value)
 * @method string getWeixinTitle()
 * @method $this withWeixinTitle($value)
 * @method string getStoreName()
 * @method $this withStoreName($value)
 * @method string getRemark()
 * @method $this withRemark($value)
 * @method string getTitle()
 * @method $this withTitle($value)
 * @method string getEndAt()
 * @method $this withEndAt($value)
 * @method string getStartAt()
 * @method $this withStartAt($value)
 */
class CreateEvent extends Rpc
{
}

/**
 * @method string getLibraryId()
 * @method $this withLibraryId($value)
 * @method string getLatitude()
 * @method $this withLatitude($value)
 * @method string getPhotoTitle()
 * @method $this withPhotoTitle($value)
 * @method string getStoreName()
 * @method $this withStoreName($value)
 * @method string getIsVideo()
 * @method $this withIsVideo($value)
 * @method string getRemark()
 * @method $this withRemark($value)
 * @method string getSize()
 * @method $this withSize($value)
 * @method string getTakenAt()
 * @method $this withTakenAt($value)
 * @method string getWidth()
 * @method $this withWidth($value)
 * @method string getLocation()
 * @method $this withLocation($value)
 * @method string getLongitude()
 * @method $this withLongitude($value)
 * @method string getHeight()
 * @method $this withHeight($value)
 * @method string getMd5()
 * @method $this withMd5($value)
 */
class RegisterPhoto extends Rpc
{
}

/**
 * @method string getLibraryId()
 * @method $this withLibraryId($value)
 * @method string getPhotoId()
 * @method $this withPhotoId($value)
 * @method string getStoreName()
 * @method $this withStoreName($value)
 */
class GetSimilarPhotos extends Rpc
{
}

/**
 * @method string getLibraryId()
 * @method $this withLibraryId($value)
 * @method array getConfidence()
 * @method string getStoreName()
 * @method $this withStoreName($value)
 * @method string getPhotoId()
 * @method $this withPhotoId($value)
 * @method array getTagKey()
 */
class TagPhoto extends Rpc
{

    /**
     * @param array $confidence
     *
     * @return $this
     */
    public function withConfidence(array $confidence)
    {
        $this->data['Confidence'] = $confidence;
        foreach ($confidence as $i => $iValue) {
            $this->options['query']['Confidence.' . ($i + 1)] = $iValue;
        }

        return $this;
    }

    /**
     * @param array $tagKey
     *
     * @return $this
     */
    public function withTagKey(array $tagKey)
    {
        $this->data['TagKey'] = $tagKey;
        foreach ($tagKey as $i => $iValue) {
            $this->options['query']['TagKey.' . ($i + 1)] = $iValue;
        }

        return $this;
    }
}

/**
 * @method string getStoreName()
 * @method $this withStoreName($value)
 * @method string getText()
 * @method $this withText($value)
 * @method string getTagKey()
 * @method $this withTagKey($value)
 * @method string getLang()
 * @method $this withLang($value)
 */
class RegisterTag extends Rpc
{
}

/**
 * @method string getStoreName()
 * @method $this withStoreName($value)
 * @method array getLang()
 */
class ListRegisteredTags extends Rpc
{

    /**
     * @param array $lang
     *
     * @return $this
     */
    public function withLang(array $lang)
    {
        $this->data['Lang'] = $lang;
        foreach ($lang as $i => $iValue) {
            $this->options['query']['Lang.' . ($i + 1)] = $iValue;
        }

        return $this;
    }
}

/**
 * @method string getLibraryId()
 * @method $this withLibraryId($value)
 * @method string getStoreName()
 * @method $this withStoreName($value)
 */
class GetLibrary extends Rpc
{
}

/**
 * @method string getAutoCleanEnabled()
 * @method $this withAutoCleanEnabled($value)
 * @method string getDefaultTrashQuota()
 * @method $this withDefaultTrashQuota($value)
 * @method string getStoreName()
 * @method $this withStoreName($value)
 * @method string getRemark()
 * @method $this withRemark($value)
 * @method string getDefaultQuota()
 * @method $this withDefaultQuota($value)
 * @method string getAutoCleanDays()
 * @method $this withAutoCleanDays($value)
 */
class EditPhotoStore extends Rpc
{
}

/**
 * @method array getDisabledFeatures()
 * @method string getStoreName()
 * @method $this withStoreName($value)
 * @method array getEnabledFeatures()
 */
class ToggleFeatures extends Rpc
{

    /**
     * @param array $disabledFeatures
     *
     * @return $this
     */
    public function withDisabledFeatures(array $disabledFeatures)
    {
        $this->data['DisabledFeatures'] = $disabledFeatures;
        foreach ($disabledFeatures as $i => $iValue) {
            $this->options['query']['DisabledFeatures.' . ($i + 1)] = $iValue;
        }

        return $this;
    }

    /**
     * @param array $enabledFeatures
     *
     * @return $this
     */
    public function withEnabledFeatures(array $enabledFeatures)
    {
        $this->data['EnabledFeatures'] = $enabledFeatures;
        foreach ($enabledFeatures as $i => $iValue) {
            $this->options['query']['EnabledFeatures.' . ($i + 1)] = $iValue;
        }

        return $this;
    }
}

/**
 * @method string getCursor()
 * @method $this withCursor($value)
 * @method string getPhotoSize()
 * @method $this withPhotoSize($value)
 * @method string getTimeLineCount()
 * @method $this withTimeLineCount($value)
 * @method string getLibraryId()
 * @method $this withLibraryId($value)
 * @method string getStoreName()
 * @method $this withStoreName($value)
 * @method string getTimeLineUnit()
 * @method $this withTimeLineUnit($value)
 * @method string getFilterBy()
 * @method $this withFilterBy($value)
 * @method string getDirection()
 * @method $this withDirection($value)
 * @method string getOrder()
 * @method $this withOrder($value)
 */
class ListTimeLines extends Rpc
{
}

/**
 * @method string getLibraryId()
 * @method $this withLibraryId($value)
 * @method string getPhotoId()
 * @method $this withPhotoId($value)
 * @method string getStoreName()
 * @method $this withStoreName($value)
 */
class ListPhotoFaces extends Rpc
{
}

/**
 * @method string getSize()
 * @method $this withSize($value)
 * @method string getLibraryId()
 * @method $this withLibraryId($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getStoreName()
 * @method $this withStoreName($value)
 * @method string getPage()
 * @method $this withPage($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getFilterBy()
 * @method $this withFilterBy($value)
 * @method string getDirection()
 * @method $this withDirection($value)
 * @method string getOrder()
 * @method $this withOrder($value)
 */
class ListTimeLinePhotos extends Rpc
{
}

/**
 * @method string getLibraryId()
 * @method $this withLibraryId($value)
 * @method string getPhotoId()
 * @method $this withPhotoId($value)
 * @method string getStoreName()
 * @method $this withStoreName($value)
 */
class LikePhoto extends Rpc
{
}

/**
 * @method string getDomainType()
 * @method $this withDomainType($value)
 * @method string getLibraryId()
 * @method $this withLibraryId($value)
 * @method array getPhotoId()
 * @method string getStoreName()
 * @method $this withStoreName($value)
 * @method string getZoomType()
 * @method $this withZoomType($value)
 */
class GetPublicAccessUrls extends Rpc
{

    /**
     * @param array $photoId
     *
     * @return $this
     */
    public function withPhotoId(array $photoId)
    {
        $this->data['PhotoId'] = $photoId;
        foreach ($photoId as $i => $iValue) {
            $this->options['query']['PhotoId.' . ($i + 1)] = $iValue;
        }

        return $this;
    }
}

/**
 * @method string getLibraryId()
 * @method $this withLibraryId($value)
 * @method array getPhotoId()
 * @method string getStoreName()
 * @method $this withStoreName($value)
 * @method string getZoomType()
 * @method $this withZoomType($value)
 */
class GetPrivateAccessUrls extends Rpc
{

    /**
     * @param array $photoId
     *
     * @return $this
     */
    public function withPhotoId(array $photoId)
    {
        $this->data['PhotoId'] = $photoId;
        foreach ($photoId as $i => $iValue) {
            $this->options['query']['PhotoId.' . ($i + 1)] = $iValue;
        }

        return $this;
    }
}

/**
 * @method string getLibraryId()
 * @method $this withLibraryId($value)
 * @method string getStoreName()
 * @method $this withStoreName($value)
 * @method string getState()
 * @method $this withState($value)
 * @method array getMd5()
 */
class GetPhotosByMd5s extends Rpc
{

    /**
     * @param array $md5
     *
     * @return $this
     */
    public function withMd5(array $md5)
    {
        $this->data['Md5'] = $md5;
        foreach ($md5 as $i => $iValue) {
            $this->options['query']['Md5.' . ($i + 1)] = $iValue;
        }

        return $this;
    }
}

/**
 * @method string getFrameId()
 * @method $this withFrameId($value)
 * @method string getLibraryId()
 * @method $this withLibraryId($value)
 * @method array getPhotoId()
 * @method string getStoreName()
 * @method $this withStoreName($value)
 */
class GetFramedPhotoUrls extends Rpc
{

    /**
     * @param array $photoId
     *
     * @return $this
     */
    public function withPhotoId(array $photoId)
    {
        $this->data['PhotoId'] = $photoId;
        foreach ($photoId as $i => $iValue) {
            $this->options['query']['PhotoId.' . ($i + 1)] = $iValue;
        }

        return $this;
    }
}

/**
 * @method string getTakenAt()
 * @method $this withTakenAt($value)
 * @method string getLibraryId()
 * @method $this withLibraryId($value)
 * @method string getShareExpireTime()
 * @method $this withShareExpireTime($value)
 * @method array getPhotoId()
 * @method string getStoreName()
 * @method $this withStoreName($value)
 * @method string getRemark()
 * @method $this withRemark($value)
 * @method string getTitle()
 * @method $this withTitle($value)
 */
class EditPhotos extends Rpc
{

    /**
     * @param array $photoId
     *
     * @return $this
     */
    public function withPhotoId(array $photoId)
    {
        $this->data['PhotoId'] = $photoId;
        foreach ($photoId as $i => $iValue) {
            $this->options['query']['PhotoId.' . ($i + 1)] = $iValue;
        }

        return $this;
    }
}

/**
 * @method string getLibraryId()
 * @method $this withLibraryId($value)
 * @method array getPhotoId()
 * @method string getStoreName()
 * @method $this withStoreName($value)
 */
class ActivatePhotos extends Rpc
{

    /**
     * @param array $photoId
     *
     * @return $this
     */
    public function withPhotoId(array $photoId)
    {
        $this->data['PhotoId'] = $photoId;
        foreach ($photoId as $i => $iValue) {
            $this->options['query']['PhotoId.' . ($i + 1)] = $iValue;
        }

        return $this;
    }
}

/**
 * @method string getLibraryId()
 * @method $this withLibraryId($value)
 * @method array getPhotoId()
 * @method string getStoreName()
 * @method $this withStoreName($value)
 * @method string getZoomType()
 * @method $this withZoomType($value)
 */
class GetThumbnails extends Rpc
{

    /**
     * @param array $photoId
     *
     * @return $this
     */
    public function withPhotoId(array $photoId)
    {
        $this->data['PhotoId'] = $photoId;
        foreach ($photoId as $i => $iValue) {
            $this->options['query']['PhotoId.' . ($i + 1)] = $iValue;
        }

        return $this;
    }
}

/**
 * @method string getLibraryId()
 * @method $this withLibraryId($value)
 * @method array getPhotoId()
 * @method string getStoreName()
 * @method $this withStoreName($value)
 */
class GetDownloadUrls extends Rpc
{

    /**
     * @param array $photoId
     *
     * @return $this
     */
    public function withPhotoId(array $photoId)
    {
        $this->data['PhotoId'] = $photoId;
        foreach ($photoId as $i => $iValue) {
            $this->options['query']['PhotoId.' . ($i + 1)] = $iValue;
        }

        return $this;
    }
}

/**
 * @method string getLibraryId()
 * @method $this withLibraryId($value)
 * @method array getPhotoId()
 * @method string getStoreName()
 * @method $this withStoreName($value)
 */
class GetPhotos extends Rpc
{

    /**
     * @param array $photoId
     *
     * @return $this
     */
    public function withPhotoId(array $photoId)
    {
        $this->data['PhotoId'] = $photoId;
        foreach ($photoId as $i => $iValue) {
            $this->options['query']['PhotoId.' . ($i + 1)] = $iValue;
        }

        return $this;
    }
}

/**
 * @method string getLibraryId()
 * @method $this withLibraryId($value)
 * @method string getPhotoId()
 * @method $this withPhotoId($value)
 * @method string getStoreName()
 * @method $this withStoreName($value)
 * @method string getFaceId()
 * @method $this withFaceId($value)
 */
class SetFaceCover extends Rpc
{
}

/**
 * @method string getTotalQuota()
 * @method $this withTotalQuota($value)
 * @method string getLibraryId()
 * @method $this withLibraryId($value)
 * @method string getStoreName()
 * @method $this withStoreName($value)
 */
class SetQuota extends Rpc
{
}

/**
 * @method string getLibraryId()
 * @method $this withLibraryId($value)
 * @method string getStoreName()
 * @method $this withStoreName($value)
 * @method string getFaceId()
 * @method $this withFaceId($value)
 */
class SetMe extends Rpc
{
}

/**
 * @method string getLibraryId()
 * @method $this withLibraryId($value)
 * @method string getAlbumId()
 * @method $this withAlbumId($value)
 * @method string getPhotoId()
 * @method $this withPhotoId($value)
 * @method string getStoreName()
 * @method $this withStoreName($value)
 */
class SetAlbumCover extends Rpc
{
}

/**
 * @method string getSize()
 * @method $this withSize($value)
 * @method string getLibraryId()
 * @method $this withLibraryId($value)
 * @method string getStoreName()
 * @method $this withStoreName($value)
 * @method string getPage()
 * @method $this withPage($value)
 * @method string getKeyword()
 * @method $this withKeyword($value)
 */
class SearchPhotos extends Rpc
{
}

/**
 * @method string getLibraryId()
 * @method $this withLibraryId($value)
 * @method string getStoreName()
 * @method $this withStoreName($value)
 * @method string getFaceId()
 * @method $this withFaceId($value)
 * @method string getFaceName()
 * @method $this withFaceName($value)
 */
class RenameFace extends Rpc
{
}

/**
 * @method string getAlbumName()
 * @method $this withAlbumName($value)
 * @method string getLibraryId()
 * @method $this withLibraryId($value)
 * @method string getAlbumId()
 * @method $this withAlbumId($value)
 * @method string getStoreName()
 * @method $this withStoreName($value)
 */
class RenameAlbum extends Rpc
{
}

/**
 * @method string getLibraryId()
 * @method $this withLibraryId($value)
 * @method array getPhotoId()
 * @method string getStoreName()
 * @method $this withStoreName($value)
 * @method string getFaceId()
 * @method $this withFaceId($value)
 */
class RemoveFacePhotos extends Rpc
{

    /**
     * @param array $photoId
     *
     * @return $this
     */
    public function withPhotoId(array $photoId)
    {
        $this->data['PhotoId'] = $photoId;
        foreach ($photoId as $i => $iValue) {
            $this->options['query']['PhotoId.' . ($i + 1)] = $iValue;
        }

        return $this;
    }
}

/**
 * @method string getLibraryId()
 * @method $this withLibraryId($value)
 * @method string getAlbumId()
 * @method $this withAlbumId($value)
 * @method array getPhotoId()
 * @method string getStoreName()
 * @method $this withStoreName($value)
 */
class RemoveAlbumPhotos extends Rpc
{

    /**
     * @param array $photoId
     *
     * @return $this
     */
    public function withPhotoId(array $photoId)
    {
        $this->data['PhotoId'] = $photoId;
        foreach ($photoId as $i => $iValue) {
            $this->options['query']['PhotoId.' . ($i + 1)] = $iValue;
        }

        return $this;
    }
}

/**
 * @method string getLibraryId()
 * @method $this withLibraryId($value)
 * @method array getPhotoId()
 * @method string getStoreName()
 * @method $this withStoreName($value)
 */
class ReactivatePhotos extends Rpc
{

    /**
     * @param array $photoId
     *
     * @return $this
     */
    public function withPhotoId(array $photoId)
    {
        $this->data['PhotoId'] = $photoId;
        foreach ($photoId as $i => $iValue) {
            $this->options['query']['PhotoId.' . ($i + 1)] = $iValue;
        }

        return $this;
    }
}

/**
 * @method string getLibraryId()
 * @method $this withLibraryId($value)
 * @method string getTargetFaceId()
 * @method $this withTargetFaceId($value)
 * @method array getPhotoId()
 * @method string getStoreName()
 * @method $this withStoreName($value)
 * @method string getSourceFaceId()
 * @method $this withSourceFaceId($value)
 */
class MoveFacePhotos extends Rpc
{

    /**
     * @param array $photoId
     *
     * @return $this
     */
    public function withPhotoId(array $photoId)
    {
        $this->data['PhotoId'] = $photoId;
        foreach ($photoId as $i => $iValue) {
            $this->options['query']['PhotoId.' . ($i + 1)] = $iValue;
        }

        return $this;
    }
}

/**
 * @method string getSourceAlbumId()
 * @method $this withSourceAlbumId($value)
 * @method string getTargetAlbumId()
 * @method $this withTargetAlbumId($value)
 * @method string getLibraryId()
 * @method $this withLibraryId($value)
 * @method array getPhotoId()
 * @method string getStoreName()
 * @method $this withStoreName($value)
 */
class MoveAlbumPhotos extends Rpc
{

    /**
     * @param array $photoId
     *
     * @return $this
     */
    public function withPhotoId(array $photoId)
    {
        $this->data['PhotoId'] = $photoId;
        foreach ($photoId as $i => $iValue) {
            $this->options['query']['PhotoId.' . ($i + 1)] = $iValue;
        }

        return $this;
    }
}

/**
 * @method string getLibraryId()
 * @method $this withLibraryId($value)
 * @method string getTargetFaceId()
 * @method $this withTargetFaceId($value)
 * @method string getStoreName()
 * @method $this withStoreName($value)
 * @method array getFaceId()
 */
class MergeFaces extends Rpc
{

    /**
     * @param array $faceId
     *
     * @return $this
     */
    public function withFaceId(array $faceId)
    {
        $this->data['FaceId'] = $faceId;
        foreach ($faceId as $i => $iValue) {
            $this->options['query']['FaceId.' . ($i + 1)] = $iValue;
        }

        return $this;
    }
}

/**
 * @method string getLibraryId()
 * @method $this withLibraryId($value)
 * @method string getStoreName()
 * @method $this withStoreName($value)
 * @method string getLang()
 * @method $this withLang($value)
 */
class ListTags extends Rpc
{
}

/**
 * @method string getCursor()
 * @method $this withCursor($value)
 * @method string getSize()
 * @method $this withSize($value)
 * @method string getTagId()
 * @method $this withTagId($value)
 * @method string getLibraryId()
 * @method $this withLibraryId($value)
 * @method string getStoreName()
 * @method $this withStoreName($value)
 * @method string getState()
 * @method $this withState($value)
 * @method string getDirection()
 * @method $this withDirection($value)
 */
class ListTagPhotos extends Rpc
{
}

/**
 * @method string getLibraryId()
 * @method $this withLibraryId($value)
 * @method string getPhotoId()
 * @method $this withPhotoId($value)
 * @method string getStoreName()
 * @method $this withStoreName($value)
 * @method string getLang()
 * @method $this withLang($value)
 */
class ListPhotoTags extends Rpc
{
}

class ListPhotoStores extends Rpc
{
}

/**
 * @method string getCursor()
 * @method $this withCursor($value)
 * @method string getSize()
 * @method $this withSize($value)
 * @method string getLibraryId()
 * @method $this withLibraryId($value)
 * @method string getStoreName()
 * @method $this withStoreName($value)
 * @method string getState()
 * @method $this withState($value)
 * @method string getDirection()
 * @method $this withDirection($value)
 */
class ListPhotos extends Rpc
{
}

/**
 * @method string getCursor()
 * @method $this withCursor($value)
 * @method string getSize()
 * @method $this withSize($value)
 * @method string getLibraryId()
 * @method $this withLibraryId($value)
 * @method string getStoreName()
 * @method $this withStoreName($value)
 * @method string getState()
 * @method $this withState($value)
 * @method string getDirection()
 * @method $this withDirection($value)
 */
class ListMoments extends Rpc
{
}

/**
 * @method string getCursor()
 * @method $this withCursor($value)
 * @method string getSize()
 * @method $this withSize($value)
 * @method string getLibraryId()
 * @method $this withLibraryId($value)
 * @method string getStoreName()
 * @method $this withStoreName($value)
 * @method string getState()
 * @method $this withState($value)
 * @method string getMomentId()
 * @method $this withMomentId($value)
 * @method string getDirection()
 * @method $this withDirection($value)
 */
class ListMomentPhotos extends Rpc
{
}

/**
 * @method string getCursor()
 * @method $this withCursor($value)
 * @method string getHasFaceName()
 * @method $this withHasFaceName($value)
 * @method string getSize()
 * @method $this withSize($value)
 * @method string getLibraryId()
 * @method $this withLibraryId($value)
 * @method string getStoreName()
 * @method $this withStoreName($value)
 * @method string getState()
 * @method $this withState($value)
 * @method string getDirection()
 * @method $this withDirection($value)
 */
class ListFaces extends Rpc
{
}

/**
 * @method string getCursor()
 * @method $this withCursor($value)
 * @method string getSize()
 * @method $this withSize($value)
 * @method string getLibraryId()
 * @method $this withLibraryId($value)
 * @method string getStoreName()
 * @method $this withStoreName($value)
 * @method string getFaceId()
 * @method $this withFaceId($value)
 * @method string getState()
 * @method $this withState($value)
 * @method string getDirection()
 * @method $this withDirection($value)
 */
class ListFacePhotos extends Rpc
{
}

/**
 * @method string getCursor()
 * @method $this withCursor($value)
 * @method string getSize()
 * @method $this withSize($value)
 * @method string getLibraryId()
 * @method $this withLibraryId($value)
 * @method string getStoreName()
 * @method $this withStoreName($value)
 * @method string getState()
 * @method $this withState($value)
 * @method string getDirection()
 * @method $this withDirection($value)
 */
class ListAlbums extends Rpc
{
}

/**
 * @method string getCursor()
 * @method $this withCursor($value)
 * @method string getSize()
 * @method $this withSize($value)
 * @method string getLibraryId()
 * @method $this withLibraryId($value)
 * @method string getAlbumId()
 * @method $this withAlbumId($value)
 * @method string getStoreName()
 * @method $this withStoreName($value)
 * @method string getState()
 * @method $this withState($value)
 * @method string getDirection()
 * @method $this withDirection($value)
 */
class ListAlbumPhotos extends Rpc
{
}

/**
 * @method string getLibraryId()
 * @method $this withLibraryId($value)
 * @method array getPhotoId()
 * @method string getStoreName()
 * @method $this withStoreName($value)
 * @method string getInactiveTime()
 * @method $this withInactiveTime($value)
 */
class InactivatePhotos extends Rpc
{

    /**
     * @param array $photoId
     *
     * @return $this
     */
    public function withPhotoId(array $photoId)
    {
        $this->data['PhotoId'] = $photoId;
        foreach ($photoId as $i => $iValue) {
            $this->options['query']['PhotoId.' . ($i + 1)] = $iValue;
        }

        return $this;
    }
}

/**
 * @method string getLibraryId()
 * @method $this withLibraryId($value)
 * @method string getPhotoId()
 * @method $this withPhotoId($value)
 * @method string getStoreName()
 * @method $this withStoreName($value)
 * @method string getZoomType()
 * @method $this withZoomType($value)
 */
class GetVideoCover extends Rpc
{
}

/**
 * @method string getLibraryId()
 * @method $this withLibraryId($value)
 * @method string getPhotoId()
 * @method $this withPhotoId($value)
 * @method string getStoreName()
 * @method $this withStoreName($value)
 * @method string getZoomType()
 * @method $this withZoomType($value)
 */
class GetThumbnail extends Rpc
{
}

/**
 * @method string getLibraryId()
 * @method $this withLibraryId($value)
 * @method string getStoreName()
 * @method $this withStoreName($value)
 */
class GetQuota extends Rpc
{
}

/**
 * @method string getStoreName()
 * @method $this withStoreName($value)
 */
class GetPhotoStore extends Rpc
{
}

/**
 * @method string getLibraryId()
 * @method $this withLibraryId($value)
 * @method string getPhotoId()
 * @method $this withPhotoId($value)
 * @method string getStoreName()
 * @method $this withStoreName($value)
 */
class GetDownloadUrl extends Rpc
{
}

/**
 * @method string getStoreName()
 * @method $this withStoreName($value)
 */
class DeletePhotoStore extends Rpc
{
}

/**
 * @method string getLibraryId()
 * @method $this withLibraryId($value)
 * @method string getStoreName()
 * @method $this withStoreName($value)
 * @method array getPhotoId()
 */
class DeletePhotos extends Rpc
{

    /**
     * @param array $photoId
     *
     * @return $this
     */
    public function withPhotoId(array $photoId)
    {
        $this->data['PhotoId'] = $photoId;
        foreach ($photoId as $i => $iValue) {
            $this->options['query']['PhotoId.' . ($i + 1)] = $iValue;
        }

        return $this;
    }
}

/**
 * @method string getLibraryId()
 * @method $this withLibraryId($value)
 * @method string getStoreName()
 * @method $this withStoreName($value)
 * @method array getFaceId()
 */
class DeleteFaces extends Rpc
{

    /**
     * @param array $faceId
     *
     * @return $this
     */
    public function withFaceId(array $faceId)
    {
        $this->data['FaceId'] = $faceId;
        foreach ($faceId as $i => $iValue) {
            $this->options['query']['FaceId.' . ($i + 1)] = $iValue;
        }

        return $this;
    }
}

/**
 * @method string getLibraryId()
 * @method $this withLibraryId($value)
 * @method array getAlbumId()
 * @method string getStoreName()
 * @method $this withStoreName($value)
 */
class DeleteAlbums extends Rpc
{

    /**
     * @param array $albumId
     *
     * @return $this
     */
    public function withAlbumId(array $albumId)
    {
        $this->data['AlbumId'] = $albumId;
        foreach ($albumId as $i => $iValue) {
            $this->options['query']['AlbumId.' . ($i + 1)] = $iValue;
        }

        return $this;
    }
}

/**
 * @method string getExt()
 * @method $this withExt($value)
 * @method string getSize()
 * @method $this withSize($value)
 * @method string getLibraryId()
 * @method $this withLibraryId($value)
 * @method string getStoreName()
 * @method $this withStoreName($value)
 * @method string getForce()
 * @method $this withForce($value)
 * @method string getMd5()
 * @method $this withMd5($value)
 */
class CreateTransaction extends Rpc
{
}

/**
 * @method string getBucketName()
 * @method $this withBucketName($value)
 * @method string getStoreName()
 * @method $this withStoreName($value)
 * @method string getRemark()
 * @method $this withRemark($value)
 * @method string getDefaultQuota()
 * @method $this withDefaultQuota($value)
 */
class CreatePhotoStore extends Rpc
{
}

/**
 * @method string getTakenAt()
 * @method $this withTakenAt($value)
 * @method string getPhotoTitle()
 * @method $this withPhotoTitle($value)
 * @method string getLibraryId()
 * @method $this withLibraryId($value)
 * @method string getShareExpireTime()
 * @method $this withShareExpireTime($value)
 * @method string getStoreName()
 * @method $this withStoreName($value)
 * @method string getUploadType()
 * @method $this withUploadType($value)
 * @method string getRemark()
 * @method $this withRemark($value)
 * @method string getSessionId()
 * @method $this withSessionId($value)
 * @method string getStaging()
 * @method $this withStaging($value)
 * @method string getFileId()
 * @method $this withFileId($value)
 */
class CreatePhoto extends Rpc
{
}

/**
 * @method string getAlbumName()
 * @method $this withAlbumName($value)
 * @method string getLibraryId()
 * @method $this withLibraryId($value)
 * @method string getStoreName()
 * @method $this withStoreName($value)
 * @method string getRemark()
 * @method $this withRemark($value)
 */
class CreateAlbum extends Rpc
{
}

/**
 * @method string getLibraryId()
 * @method $this withLibraryId($value)
 * @method string getAlbumId()
 * @method $this withAlbumId($value)
 * @method array getPhotoId()
 * @method string getStoreName()
 * @method $this withStoreName($value)
 */
class AddAlbumPhotos extends Rpc
{

    /**
     * @param array $photoId
     *
     * @return $this
     */
    public function withPhotoId(array $photoId)
    {
        $this->data['PhotoId'] = $photoId;
        foreach ($photoId as $i => $iValue) {
            $this->options['query']['PhotoId.' . ($i + 1)] = $iValue;
        }

        return $this;
    }
}
