<?php

namespace AlibabaCloud\EduCloud\V20220202;

use AlibabaCloud\Client\Resolver\ApiResolver;

/**
 * @method AddLabReserved addLabReserved(array $options = [])
 * @method DeleteLabReserved deleteLabReserved(array $options = [])
 * @method DescribeCourse describeCourse(array $options = [])
 * @method DescribeCourseLesson describeCourseLesson(array $options = [])
 * @method DescribeLab describeLab(array $options = [])
 * @method DescribeLabReserved describeLabReserved(array $options = [])
 * @method DescribeLabToken describeLabToken(array $options = [])
 * @method GetLabToken getLabToken(array $options = [])
 * @method ListCourses listCourses(array $options = [])
 * @method ListLabReserveds listLabReserveds(array $options = [])
 * @method ListLabs listLabs(array $options = [])
 * @method ListLabTokens listLabTokens(array $options = [])
 */
class EduCloudApiResolver extends ApiResolver
{
}

class Rpc extends \AlibabaCloud\Client\Resolver\Rpc
{
    /** @var string */
    public $product = 'EduCloud';

    /** @var string */
    public $version = '2022-02-02';
}

/**
 * @method string getNumber()
 * @method string getLabId()
 * @method string getEndTime()
 * @method string getStartTime()
 */
class AddLabReserved extends Rpc
{

    /** @var string */
    public $method = 'POST';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withNumber($value)
    {
        $this->data['Number'] = $value;
        $this->options['form_params']['Number'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withLabId($value)
    {
        $this->data['LabId'] = $value;
        $this->options['form_params']['LabId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withEndTime($value)
    {
        $this->data['EndTime'] = $value;
        $this->options['form_params']['EndTime'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withStartTime($value)
    {
        $this->data['StartTime'] = $value;
        $this->options['form_params']['StartTime'] = $value;

        return $this;
    }
}

/**
 * @method string getReservedId()
 */
class DeleteLabReserved extends Rpc
{

    /** @var string */
    public $method = 'POST';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withReservedId($value)
    {
        $this->data['ReservedId'] = $value;
        $this->options['form_params']['ReservedId'] = $value;

        return $this;
    }
}

/**
 * @method string getCourseId()
 * @method $this withCourseId($value)
 */
class DescribeCourse extends Rpc
{
}

/**
 * @method string getLessonId()
 * @method $this withLessonId($value)
 */
class DescribeCourseLesson extends Rpc
{
}

/**
 * @method string getLabId()
 * @method $this withLabId($value)
 */
class DescribeLab extends Rpc
{
}

/**
 * @method string getReservedId()
 * @method $this withReservedId($value)
 */
class DescribeLabReserved extends Rpc
{
}

/**
 * @method string getRamUid()
 * @method $this withRamUid($value)
 * @method string getOrderId()
 * @method $this withOrderId($value)
 */
class DescribeLabToken extends Rpc
{
}

/**
 * @method string getRamUid()
 * @method $this withRamUid($value)
 * @method string getLabId()
 * @method $this withLabId($value)
 */
class GetLabToken extends Rpc
{
}

/**
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getPage()
 * @method $this withPage($value)
 * @method string getId()
 * @method $this withId($value)
 */
class ListCourses extends Rpc
{
}

/**
 * @method string getLabName()
 * @method $this withLabName($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getPage()
 * @method $this withPage($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 */
class ListLabReserveds extends Rpc
{
}

/**
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getPage()
 * @method $this withPage($value)
 * @method string getId()
 * @method $this withId($value)
 */
class ListLabs extends Rpc
{
}

/**
 * @method string getRamUid()
 * @method $this withRamUid($value)
 * @method string getLabId()
 * @method $this withLabId($value)
 * @method string getFinishStatus()
 * @method $this withFinishStatus($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getPage()
 * @method $this withPage($value)
 */
class ListLabTokens extends Rpc
{
}
