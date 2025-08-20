<?php
namespace Drupal\queues;
use Drupal\Core\Entity\ContentEntityInterface;
use Drupal\user\EntityOwnerInterface;
use Drupal\Core\Entity\EntityChangedInterface;

/**
 * Provides an interface defining a queues entity.
 * @ingroup content_entity_example
 */
interface QueuesInterface extends ContentEntityInterface, EntityOwnerInterface, EntityChangedInterface {

}

?>
 