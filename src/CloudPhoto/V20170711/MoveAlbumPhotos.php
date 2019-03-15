<?php

namespace AlibabaCloud\CloudPhoto\V20170711;

use AlibabaCloud\Rpc;

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
    public $product = 'CloudPhoto';

    public $version = '2017-07-11';

    public $scheme = 'https';

    public $method = 'POST';

    public $serviceCode = 'cloudphoto';

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
