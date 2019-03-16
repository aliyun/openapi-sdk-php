<?php

namespace AlibabaCloud\ImageSearch\V20180120\Traits;

/**
 * Trait SearchItemTrait
 *
 * @package AlibabaCloud\ImageSearch\V20180120\Traits
 */
trait SearchItemTrait
{
    /**
     * @var int
     */
    private $start = 0;

    /**
     * @var int
     */
    private $num = 10;

    /**
     * @var string
     */
    private $cateId = '';

    /**
     * @var
     */
    private $searchPicture;

    /**
     * @return bool
     */
    public function buildPostContent()
    {
        if (!$this->searchPicture) {
            return false;
        }

        $map = [];

        $map['s'] = $this->start;
        $map['n'] = $this->num;
        if ($this->cateId !== null && $this->cateId !== '') {
            $map['cat_id'] = $this->cateId;
        }

        $encodePicName    = base64_encode('searchPic');
        $encodePicContent = base64_encode($this->searchPicture);

        $map['pic_list']     = $encodePicName;
        $map[$encodePicName] = $encodePicContent;

        $content = $this->buildContent($map);
        $this->body($content);
        $this->format('JSON');

        return true;
    }

    /**
     * @param mixed $start
     *
     * @return $this
     */
    public function withStart($start)
    {
        $this->start = $start;
        $this->buildPostContent();

        return $this;
    }

    /**
     * @param mixed $num
     *
     * @return $this
     */
    public function withNum($num)
    {
        $this->num = $num;
        $this->buildPostContent();

        return $this;
    }

    /**
     * @param mixed $cateId
     *
     * @return $this
     */
    public function withCateId($cateId)
    {
        $this->cateId = $cateId;
        $this->buildPostContent();

        return $this;
    }

    /**
     * @param mixed $searchPicture
     *
     * @return $this
     */
    public function withSearchPicture($searchPicture)
    {
        $this->searchPicture = $searchPicture;
        $this->buildPostContent();

        return $this;
    }

    /**
     * @param $map
     *
     * @return string
     */
    private function buildContent($map)
    {
        $meta  = '';
        $body  = '';
        $start = 0;

        foreach ($map as $key => $value) {
            if ($meta !== '') {
                $meta .= '#';
            }
            $meta  .= $key . ',' . $start . ',' . ($start + strlen($value));
            $body  .= $value;
            $start += strlen($value);
        }

        return $meta . '^' . $body;
    }
}
