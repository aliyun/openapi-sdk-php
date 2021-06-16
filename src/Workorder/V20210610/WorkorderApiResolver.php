<?php

namespace AlibabaCloud\Workorder\V20210610;

use AlibabaCloud\Client\Resolver\ApiResolver;

/**
 * @method CloseTicket closeTicket(array $options = [])
 * @method CreateTicket createTicket(array $options = [])
 * @method GetMqConsumerTag getMqConsumerTag(array $options = [])
 * @method ListCategories listCategories(array $options = [])
 * @method ListProducts listProducts(array $options = [])
 * @method ListTicketNotes listTicketNotes(array $options = [])
 * @method ListTickets listTickets(array $options = [])
 * @method ReplyTicket replyTicket(array $options = [])
 */
class WorkorderApiResolver extends ApiResolver
{
}

class Rpc extends \AlibabaCloud\Client\Resolver\Rpc
{
    /** @var string */
    public $product = 'Workorder';

    /** @var string */
    public $version = '2021-06-10';

    /** @var string */
    public $method = 'POST';
}

/**
 * @method string getTicketId()
 */
class CloseTicket extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTicketId($value)
    {
        $this->data['TicketId'] = $value;
        $this->options['form_params']['TicketId'] = $value;

        return $this;
    }
}

/**
 * @method string getSeverity()
 * @method string getDescription()
 * @method string getCategoryId()
 */
class CreateTicket extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSeverity($value)
    {
        $this->data['Severity'] = $value;
        $this->options['form_params']['Severity'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDescription($value)
    {
        $this->data['Description'] = $value;
        $this->options['form_params']['Description'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCategoryId($value)
    {
        $this->data['CategoryId'] = $value;
        $this->options['form_params']['CategoryId'] = $value;

        return $this;
    }
}

class GetMqConsumerTag extends Rpc
{
}

/**
 * @method string getProductId()
 * @method string getName()
 */
class ListCategories extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withProductId($value)
    {
        $this->data['ProductId'] = $value;
        $this->options['form_params']['ProductId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withName($value)
    {
        $this->data['Name'] = $value;
        $this->options['form_params']['Name'] = $value;

        return $this;
    }
}

/**
 * @method string getName()
 * @method $this withName($value)
 */
class ListProducts extends Rpc
{
}

/**
 * @method string getTicketId()
 * @method $this withTicketId($value)
 */
class ListTicketNotes extends Rpc
{
}

/**
 * @method array getStatusList()
 * @method string getStartDate()
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getEndDate()
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getKeyword()
 * @method string getTicketId()
 */
class ListTickets extends Rpc
{

    /**
     * @param array $statusList
     *
     * @return $this
     */
	public function withStatusList(array $statusList)
	{
	    $this->data['StatusList'] = $statusList;
		foreach ($statusList as $i => $iValue) {
			$this->options['form_params']['StatusList.' . ($i + 1)] = $iValue;
		}

		return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withStartDate($value)
    {
        $this->data['StartDate'] = $value;
        $this->options['form_params']['StartDate'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withEndDate($value)
    {
        $this->data['EndDate'] = $value;
        $this->options['form_params']['EndDate'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withKeyword($value)
    {
        $this->data['Keyword'] = $value;
        $this->options['form_params']['Keyword'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTicketId($value)
    {
        $this->data['TicketId'] = $value;
        $this->options['form_params']['TicketId'] = $value;

        return $this;
    }
}

/**
 * @method string getContent()
 * @method string getEncrypt()
 * @method string getTicketId()
 */
class ReplyTicket extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withContent($value)
    {
        $this->data['Content'] = $value;
        $this->options['form_params']['Content'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withEncrypt($value)
    {
        $this->data['Encrypt'] = $value;
        $this->options['form_params']['Encrypt'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTicketId($value)
    {
        $this->data['TicketId'] = $value;
        $this->options['form_params']['TicketId'] = $value;

        return $this;
    }
}
