<?php

namespace AlibabaCloud\CloudPhoto\V20170711;

use AlibabaCloud\Rpc;

/**
 * @method string getTagId()
 * @method $this withTagId($value)
 * @method string getLibraryId()
 * @method $this withLibraryId($value)
 * @method string getCount()
 * @method $this withCount($value)
 * @method string getAlbumId()
 * @method $this withAlbumId($value)
 * @method string getStoreName()
 * @method $this withStoreName($value)
 * @method string getPage()
 * @method $this withPage($value)
 */
class ListAlbumTagPhotos extends Rpc
{
    public $product = 'CloudPhoto';

    public $version = '2017-07-11';

    public $scheme = 'https';

    public $method = 'POST';

    public $serviceCode = 'cloudphoto';
}
