<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Post $post
 * @var string[]|\Cake\Collection\CollectionInterface $tags
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $post->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $post->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Posts'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div >
        <div class="posts form content">
            <?= $this->Form->create($post) ?>
            <fieldset>
                <legend><?= __('Edit Post') ?></legend>
                <div class="form-group"><?php echo $this->Form->control('name', ['class' => 'form-control']); ?></div>
                <div class="form-group"> <?php echo $this->Ckeditor->input('content') ?></div>
                <div class="form-group"><?php echo $this->Tag->input($post->tags, ['class' => 'tags-input', 'label' => 'Tags']); ?></div>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
