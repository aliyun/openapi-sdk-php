<?php

namespace AlibabaCloud\CloudPhoto;

use AlibabaCloud\ApiResolverTrait;

/**
 * Find the specified Api of the CloudPhoto based on the method name as the Api name.
 *
 * @package   AlibabaCloud\CloudPhoto
 *
 * @method V20170711\ActivatePhotos activatePhotos(array $options = [])
 * @method V20170711\AddAlbumPhotos addAlbumPhotos(array $options = [])
 * @method V20170711\CreateAlbum createAlbum(array $options = [])
 * @method V20170711\CreateEvent createEvent(array $options = [])
 * @method V20170711\CreatePhoto createPhoto(array $options = [])
 * @method V20170711\CreatePhotoStore createPhotoStore(array $options = [])
 * @method V20170711\CreateTransaction createTransaction(array $options = [])
 * @method V20170711\DeleteAlbums deleteAlbums(array $options = [])
 * @method V20170711\DeleteEvent deleteEvent(array $options = [])
 * @method V20170711\DeleteFaces deleteFaces(array $options = [])
 * @method V20170711\DeletePhotoStore deletePhotoStore(array $options = [])
 * @method V20170711\DeletePhotos deletePhotos(array $options = [])
 * @method V20170711\EditEvent editEvent(array $options = [])
 * @method V20170711\EditPhotoStore editPhotoStore(array $options = [])
 * @method V20170711\EditPhotos editPhotos(array $options = [])
 * @method V20170711\FetchAlbumTagPhotos fetchAlbumTagPhotos(array $options = [])
 * @method V20170711\FetchLibraries fetchLibraries(array $options = [])
 * @method V20170711\FetchMomentPhotos fetchMomentPhotos(array $options = [])
 * @method V20170711\FetchPhotos fetchPhotos(array $options = [])
 * @method V20170711\GetAlbumsByNames getAlbumsByNames(array $options = [])
 * @method V20170711\GetDownloadUrl getDownloadUrl(array $options = [])
 * @method V20170711\GetDownloadUrls getDownloadUrls(array $options = [])
 * @method V20170711\GetEvent getEvent(array $options = [])
 * @method V20170711\GetFramedPhotoUrls getFramedPhotoUrls(array $options = [])
 * @method V20170711\GetLibrary getLibrary(array $options = [])
 * @method V20170711\GetPhotoStore getPhotoStore(array $options = [])
 * @method V20170711\GetPhotos getPhotos(array $options = [])
 * @method V20170711\GetPhotosByMd5s getPhotosByMd5s(array $options = [])
 * @method V20170711\GetPrivateAccessUrls getPrivateAccessUrls(array $options = [])
 * @method V20170711\GetPublicAccessUrls getPublicAccessUrls(array $options = [])
 * @method V20170711\GetQuota getQuota(array $options = [])
 * @method V20170711\GetSimilarPhotos getSimilarPhotos(array $options = [])
 * @method V20170711\GetThumbnail getThumbnail(array $options = [])
 * @method V20170711\GetThumbnails getThumbnails(array $options = [])
 * @method V20170711\GetVideoCover getVideoCover(array $options = [])
 * @method V20170711\InactivatePhotos inactivatePhotos(array $options = [])
 * @method V20170711\LikePhoto likePhoto(array $options = [])
 * @method V20170711\ListAlbumPhotos listAlbumPhotos(array $options = [])
 * @method V20170711\ListAlbumTagPhotos listAlbumTagPhotos(array $options = [])
 * @method V20170711\ListAlbums listAlbums(array $options = [])
 * @method V20170711\ListEvents listEvents(array $options = [])
 * @method V20170711\ListFacePhotos listFacePhotos(array $options = [])
 * @method V20170711\ListFaces listFaces(array $options = [])
 * @method V20170711\ListMomentPhotos listMomentPhotos(array $options = [])
 * @method V20170711\ListMoments listMoments(array $options = [])
 * @method V20170711\ListPhotoFaces listPhotoFaces(array $options = [])
 * @method V20170711\ListPhotoStores listPhotoStores(array $options = [])
 * @method V20170711\ListPhotoTags listPhotoTags(array $options = [])
 * @method V20170711\ListPhotos listPhotos(array $options = [])
 * @method V20170711\ListRegisteredTags listRegisteredTags(array $options = [])
 * @method V20170711\ListTagPhotos listTagPhotos(array $options = [])
 * @method V20170711\ListTags listTags(array $options = [])
 * @method V20170711\ListTimeLinePhotos listTimeLinePhotos(array $options = [])
 * @method V20170711\ListTimeLines listTimeLines(array $options = [])
 * @method V20170711\MergeFaces mergeFaces(array $options = [])
 * @method V20170711\MoveAlbumPhotos moveAlbumPhotos(array $options = [])
 * @method V20170711\MoveFacePhotos moveFacePhotos(array $options = [])
 * @method V20170711\ReactivatePhotos reactivatePhotos(array $options = [])
 * @method V20170711\RegisterPhoto registerPhoto(array $options = [])
 * @method V20170711\RegisterTag registerTag(array $options = [])
 * @method V20170711\RemoveAlbumPhotos removeAlbumPhotos(array $options = [])
 * @method V20170711\RemoveFacePhotos removeFacePhotos(array $options = [])
 * @method V20170711\RenameAlbum renameAlbum(array $options = [])
 * @method V20170711\RenameFace renameFace(array $options = [])
 * @method V20170711\SearchPhotos searchPhotos(array $options = [])
 * @method V20170711\SetAlbumCover setAlbumCover(array $options = [])
 * @method V20170711\SetFaceCover setFaceCover(array $options = [])
 * @method V20170711\SetMe setMe(array $options = [])
 * @method V20170711\SetQuota setQuota(array $options = [])
 * @method V20170711\TagPhoto tagPhoto(array $options = [])
 * @method V20170711\ToggleFeatures toggleFeatures(array $options = [])
 */
class CloudPhotoV20170711ApiResolver
{
    use ApiResolverTrait;

    /**
     * @var string
     */
    protected $namespace = 'AlibabaCloud\\CloudPhoto\\V20170711';
}
