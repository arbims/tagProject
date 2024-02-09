<?php

namespace TagPlugin\Controller;

use Cake\View\JsonView;
use Cake\View\XmlView;

class TagsController extends AppController {


  public function viewClasses(): array
  {
      return [JsonView::class];
  }

  public function index() {
    $tags = $this->Tags->find('all')->select('name');
    $this->set('tags', $tags);
    // Specify which view vars JsonView should serialize.
    $this->viewBuilder()->setOption('serialize', 'tags');
  }

}
