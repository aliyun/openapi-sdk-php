<?php

namespace AlibabaCloud\Workorder\V20200326;

use AlibabaCloud\Client\Resolver\ApiResolver;

/**
 * @method CloseTicket closeTicket(array $options = [])
 * @method CreateTicket createTicket(array $options = [])
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
    public $version = '2020-03-26';

    /** @var string */
    public $method = 'POST';

    /** @var string */
    public $serviceCode = 'workorder';
}

/**
 * @method string getLanguage()
 * @method $this withLanguage($value)
 * @method string getTicketId()
 * @method $this withTicketId($value)
 */
class CloseTicket extends Rpc
{
}

/**
 * @method string getProductCode()
 * @method $this withProductCode($value)
 * @method string getLanguage()
 * @method $this withLanguage($value)
 * @method string getTitle()
 * @method $this withTitle($value)
 * @method string getContent()
 * @method $this withContent($value)
 * @method string getNotifyTimeRange()
 * @method $this withNotifyTimeRange($value)
 * @method string getPhone()
 * @method $this withPhone($value)
 * @method string getCategory()
 * @method $this withCategory($value)
 * @method string getEmail()
 * @method $this withEmail($value)
 * @method string getSecretContent()
 * @method $this withSecretContent($value)
 */
class CreateTicket extends Rpc
{
}

/**
 * @method string getProductCode()
 * @method $this withProductCode($value)
 * @method string getLanguage()
 * @method $this withLanguage($value)
 */
class ListCategories extends Rpc
{
}

/**
 * @method string getLanguage()
 * @method $this withLanguage($value)
 */
class ListProducts extends Rpc
{
}

/**
 * @method string getLanguage()
 * @method $this withLanguage($value)
 * @method string getTicketId()
 * @method $this withTicketId($value)
 */
class ListTicketNotes extends Rpc
{
}

/**
 * @method string getProductCode()
 * @method $this withProductCode($value)
 * @method string getLanguage()
 * @method $this withLanguage($value)
 * @method string getSubUserId()
 * @method $this withSubUserId($value)
 * @method string getCreatedBeforeTime()
 * @method $this withCreatedBeforeTime($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getIds()
 * @method $this withIds($value)
 * @method string getTicketStatus()
 * @method $this withTicketStatus($value)
 * @method string getPageStart()
 * @method $this withPageStart($value)
 * @method string getCreatedAfterTime()
 * @method $this withCreatedAfterTime($value)
 */
class ListTickets extends Rpc
{
}

/**
 * @method string getLanguage()
 * @method $this withLanguage($value)
 * @method string getTicketId()
 * @method $this withTicketId($value)
 * @method string getContent()
 * @method $this withContent($value)
 * @method string getSecretContent()
 * @method $this withSecretContent($value)
 */
class ReplyTicket extends Rpc
{
}
