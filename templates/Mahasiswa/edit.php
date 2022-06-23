<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Mahasiswa $mahasiswa
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $mahasiswa->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $mahasiswa->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Mahasiswa'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="mahasiswa form content">
            <?= $this->Form->create($mahasiswa) ?>
            <fieldset>
                <legend><?= __('Edit Mahasiswa') ?></legend>
                <?php
                    echo $this->Form->control('nama');
                    echo $this->Form->control('umur');
                    echo $this->Form->control('kota');
                    echo $this->Form->control('di_buat');
                    echo $this->Form->control('di_update');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
