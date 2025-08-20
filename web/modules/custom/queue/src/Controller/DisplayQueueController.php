<?php

namespace Drupal\queue\Controller;

use Drupal\Core\Controller\ControllerBase;
use Drupal\Core\Database\Database;
use Drupal\Core\Url;

/**
 * Class DisplayTableController.
 *
 * @package Drupal\queue\Controller
 */
class DisplayQueueController extends ControllerBase {


  public function getContent() {
    // First we'll tell the user what's going on. This content can be found
    // in the twig template file: templates/description.html.twig.
    // @todo: Set up links to create nodes and point to devel module.
    $build = [
      'description' => [
        '#theme' => 'queue_description',
        '#description' => 'foo',
        '#attributes' => [],
      ],
    ];
    return $build;
  }

  /**
   * Display.
   *
   * @return string
   *   Return Hello string.
   */
  public function display() {
    // dump("dwd");
    // die();
    // return [
    //   '#type' => 'markup',
    //   '#markup' => $this->t('Implement method: display with parameter(s): $name'),
    // ];

    //create table header
    $header_table = array(
     'id'=>    t('SrNo'),
      'name' => t('Name'),
        'mobilenumber' => t('MobileNumber'),
        //'email'=>t('Email'),
        'age' => t('Age'),
        'gender' => t('Gender'),
        //'website' => t('Web site'),
        'opt' => t('operations'),
        'opt1' => t('operations'),
    );

//select records from table
    $query = \Drupal::database()->select('queue', 'm');
      $query->fields('m', ['id','name','mobilenumber','email','age','gender','website']);
      $results = $query->execute()->fetchAll();
        $rows=array();
    foreach($results as $data){
        $delete = Url::fromUserInput('/queue/form/delete/'.$data->id);
        $edit   = Url::fromUserInput('/queue/form/queue?num='.$data->id);

      //print the data from table
             $rows[] = array(
            'id' =>$data->id,
                'name' => $data->name,
                'mobilenumber' => $data->mobilenumber,
                //'email' => $data->email,
                'age' => $data->age,
                'gender' => $data->gender,
                //'website' => $data->website,

                 \Drupal::l('Delete', $delete),
                 \Drupal::l('Edit', $edit),
            );

    }
    //display data in site
    $form['table'] = [
            '#type' => 'table',
            '#header' => $header_table,
            '#rows' => $rows,
            '#empty' => t('No users found'),
        ];
//        echo '<pre>';print_r($form['table']);exit;
        return $form;

  }

}