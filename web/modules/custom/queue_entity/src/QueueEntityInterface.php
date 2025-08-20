<?php

declare(strict_types=1);

namespace Drupal\queue_entity;

use Drupal\Core\Entity\ContentEntityInterface;
use Drupal\Core\Entity\EntityChangedInterface;
use Drupal\user\EntityOwnerInterface;

/**
 * Provides an interface defining a queue entity entity type.
 */
interface QueueEntityInterface extends ContentEntityInterface, EntityOwnerInterface, EntityChangedInterface {

}
