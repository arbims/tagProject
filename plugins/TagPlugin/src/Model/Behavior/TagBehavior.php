<?php

namespace TagPlugin\Model\Behavior;

use ArrayObject;
use Cake\Datasource\EntityInterface;
use Cake\Event\EventInterface;
use Cake\Http\Client\Request;
use Cake\Http\ServerRequest;
use Cake\ORM\Behavior;
use Cake\ORM\TableRegistry;
use Cake\Routing\Router;

class TagBehavior extends Behavior {


  public function beforeSave(EventInterface $event, EntityInterface $entity, ArrayObject $options) {

    $data = Router::getRequest()->getData();
    $tags = explode(',', $data['tags'][0]);
    $tagsTable = TableRegistry::getTableLocator()->get('TagPlugin.Tags');
    $result = $tagsTable->find('list')->where(['name IN' => $tags])->toArray();
    $inexist = array_diff($tags, $result);
    foreach($inexist as $v) {
      $tagsTable = TableRegistry::getTableLocator()->get('TagPlugin.Tags');
      $tag = $tagsTable->newEmptyEntity();
      $tag = $tagsTable->patchEntity($tag, ['name' => $v]);
      $tagsTable->save($tag);
    }
    $endresult = $tagsTable->find('all')->where(['name IN' => $tags])->toArray();
    $entity['tags'] = $endresult;
  }
}
