<?php

namespace AlibabaCloud\CloudPhoto\V20170711;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of EditEvent
 *
 * @method string getEventId()
 * @method string getBannerPhotoId()
 * @method string getWatermarkPhotoId()
 * @method string getIdentity()
 * @method string getSplashPhotoId()
 * @method string getLibraryId()
 * @method string getWeixinTitle()
 * @method string getStoreName()
 * @method string getRemark()
 * @method string getTitle()
 * @method string getEndAt()
 * @method string getStartAt()
 */
class EditEvent extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'CloudPhoto';

    /**
     * @var string
     */
    public $version = '2017-07-11';

    /**
     * @var string
     */
    public $action = 'EditEvent';

    /**
     * @var string
     */
    public $scheme = 'https';


    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @var string
     */
    public $serviceCode = 'cloudphoto';

    /**
     * @deprecated deprecated since version 2.0, Use withEventId() instead.
     *
     * @param string $eventId
     *
     * @return $this
     */
    public function setEventId($eventId)
    {
        return $this->withEventId($eventId);
    }

    /**
     * @param string $eventId
     *
     * @return $this
     */
    public function withEventId($eventId)
    {
        $this->data['EventId'] = $eventId;
        $this->options['query']['EventId'] = $eventId;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withBannerPhotoId() instead.
     *
     * @param string $bannerPhotoId
     *
     * @return $this
     */
    public function setBannerPhotoId($bannerPhotoId)
    {
        return $this->withBannerPhotoId($bannerPhotoId);
    }

    /**
     * @param string $bannerPhotoId
     *
     * @return $this
     */
    public function withBannerPhotoId($bannerPhotoId)
    {
        $this->data['BannerPhotoId'] = $bannerPhotoId;
        $this->options['query']['BannerPhotoId'] = $bannerPhotoId;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withWatermarkPhotoId() instead.
     *
     * @param string $watermarkPhotoId
     *
     * @return $this
     */
    public function setWatermarkPhotoId($watermarkPhotoId)
    {
        return $this->withWatermarkPhotoId($watermarkPhotoId);
    }

    /**
     * @param string $watermarkPhotoId
     *
     * @return $this
     */
    public function withWatermarkPhotoId($watermarkPhotoId)
    {
        $this->data['WatermarkPhotoId'] = $watermarkPhotoId;
        $this->options['query']['WatermarkPhotoId'] = $watermarkPhotoId;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withIdentity() instead.
     *
     * @param string $identity
     *
     * @return $this
     */
    public function setIdentity($identity)
    {
        return $this->withIdentity($identity);
    }

    /**
     * @param string $identity
     *
     * @return $this
     */
    public function withIdentity($identity)
    {
        $this->data['Identity'] = $identity;
        $this->options['query']['Identity'] = $identity;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withSplashPhotoId() instead.
     *
     * @param string $splashPhotoId
     *
     * @return $this
     */
    public function setSplashPhotoId($splashPhotoId)
    {
        return $this->withSplashPhotoId($splashPhotoId);
    }

    /**
     * @param string $splashPhotoId
     *
     * @return $this
     */
    public function withSplashPhotoId($splashPhotoId)
    {
        $this->data['SplashPhotoId'] = $splashPhotoId;
        $this->options['query']['SplashPhotoId'] = $splashPhotoId;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withLibraryId() instead.
     *
     * @param string $libraryId
     *
     * @return $this
     */
    public function setLibraryId($libraryId)
    {
        return $this->withLibraryId($libraryId);
    }

    /**
     * @param string $libraryId
     *
     * @return $this
     */
    public function withLibraryId($libraryId)
    {
        $this->data['LibraryId'] = $libraryId;
        $this->options['query']['LibraryId'] = $libraryId;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withWeixinTitle() instead.
     *
     * @param string $weixinTitle
     *
     * @return $this
     */
    public function setWeixinTitle($weixinTitle)
    {
        return $this->withWeixinTitle($weixinTitle);
    }

    /**
     * @param string $weixinTitle
     *
     * @return $this
     */
    public function withWeixinTitle($weixinTitle)
    {
        $this->data['WeixinTitle'] = $weixinTitle;
        $this->options['query']['WeixinTitle'] = $weixinTitle;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withStoreName() instead.
     *
     * @param string $storeName
     *
     * @return $this
     */
    public function setStoreName($storeName)
    {
        return $this->withStoreName($storeName);
    }

    /**
     * @param string $storeName
     *
     * @return $this
     */
    public function withStoreName($storeName)
    {
        $this->data['StoreName'] = $storeName;
        $this->options['query']['StoreName'] = $storeName;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withRemark() instead.
     *
     * @param string $remark
     *
     * @return $this
     */
    public function setRemark($remark)
    {
        return $this->withRemark($remark);
    }

    /**
     * @param string $remark
     *
     * @return $this
     */
    public function withRemark($remark)
    {
        $this->data['Remark'] = $remark;
        $this->options['query']['Remark'] = $remark;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withTitle() instead.
     *
     * @param string $title
     *
     * @return $this
     */
    public function setTitle($title)
    {
        return $this->withTitle($title);
    }

    /**
     * @param string $title
     *
     * @return $this
     */
    public function withTitle($title)
    {
        $this->data['Title'] = $title;
        $this->options['query']['Title'] = $title;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withEndAt() instead.
     *
     * @param string $endAt
     *
     * @return $this
     */
    public function setEndAt($endAt)
    {
        return $this->withEndAt($endAt);
    }

    /**
     * @param string $endAt
     *
     * @return $this
     */
    public function withEndAt($endAt)
    {
        $this->data['EndAt'] = $endAt;
        $this->options['query']['EndAt'] = $endAt;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withStartAt() instead.
     *
     * @param string $startAt
     *
     * @return $this
     */
    public function setStartAt($startAt)
    {
        return $this->withStartAt($startAt);
    }

    /**
     * @param string $startAt
     *
     * @return $this
     */
    public function withStartAt($startAt)
    {
        $this->data['StartAt'] = $startAt;
        $this->options['query']['StartAt'] = $startAt;

        return $this;
    }
}
