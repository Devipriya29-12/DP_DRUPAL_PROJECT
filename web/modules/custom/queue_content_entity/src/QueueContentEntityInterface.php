<?php

declare(strict_types=1);

namespace Drupal\queue_content_entity;

use Drupal\Core\Entity\ContentEntityInterface;
use Drupal\Core\Entity\EntityChangedInterface;
use Drupal\user\EntityOwnerInterface;

/**
 * Provides an interface defining a queue content entity entity type.
 */
interface QueueContentEntityInterface extends ContentEntityInterface, EntityOwnerInterface, EntityChangedInterface {

}
