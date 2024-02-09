<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Post $post
 * @var \Cake\Collection\CollectionInterface|string[] $tags
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Posts'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="posts form content">
            <?= $this->Form->create($post) ?>
            <fieldset>
                <legend><?= __('Add Post') ?></legend>
                <div class="form-group"><?php echo $this->Form->control('name', ['class' => 'form-control']); ?></div>
                <div class="form-group"><?php echo $this->Form->control('content', ['class' => 'form-control']); ?></div>
                <div class="form-group"><?php echo $this->Tag->input($post->tags, ['class' => 'tags-input', 'label' => 'Tags']); ?></div>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
