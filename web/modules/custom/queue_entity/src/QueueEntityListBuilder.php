<?php

declare(strict_types=1);

namespace Drupal\queue_entity;

use Drupal\Core\Entity\EntityInterface;
use Drupal\Core\Entity\EntityListBuilder;

/**
 * Provides a list controller for the queue entity entity type.
 */
final class QueueEntityListBuilder extends EntityListBuilder {

  /**
   * {@inheritdoc}
   */
  public function buildHeader(): array {
    $header['id'] = $this->t('Queue Number');
    $header['label'] = $this->t('Queue Name');
    $header['field_queue_entity_queue_loc
'] = $this->t('Queue Location');
 $header['field_queue_entity_queue_address
'] = $this->t('Queue Address');
    $header['status'] = $this->t('Status');
    $header['uid'] = $this->t('Author');
    $header['created'] = $this->t('Created');
    $header['changed'] = $this->t('Updated');
    return $header + parent::buildHeader();
  }

  /**
   * {@inheritdoc}
   */
  public function buildRow(EntityInterface $entity): array {
    /** @var \Drupal\queue_entity\QueueEntityInterface $entity */
    $row['id'] = $entity->id();
    $row['label'] = $entity->toLink();
    $row['field_queue_entity_queue_loc']['data'] = $entity->get('field_queue_entity_queue_loc')->view(['label' => 'hidden']);
    $row['field_queue_entity_queue_address']['data'] = $entity->get('field_queue_entity_queue_address')->view(['label' => 'hidden']);
    $row['status'] = $entity->get('status')->value ? $this->t('Enabled') : $this->t('Disabled');
    $username_options = [
      'label' => 'hidden',
      'settings' => ['link' => $entity->get('uid')->entity->isAuthenticated()],
    ];
    $row['uid']['data'] = $entity->get('uid')->view($username_options);
    $row['created']['data'] = $entity->get('created')->view(['label' => 'hidden']);
    $row['changed']['data'] = $entity->get('changed')->view(['label' => 'hidden']);
    return $row + parent::buildRow($entity);
  }

}
