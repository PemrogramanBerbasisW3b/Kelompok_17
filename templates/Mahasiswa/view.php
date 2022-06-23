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
            <?= $this->Html->link(__('Edit Mahasiswa'), ['action' => 'edit', $mahasiswa->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Mahasiswa'), ['action' => 'delete', $mahasiswa->id], ['confirm' => __('Are you sure you want to delete # {0}?', $mahasiswa->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Mahasiswa'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Mahasiswa'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="mahasiswa view content">
            <h3><?= h($mahasiswa->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Nama') ?></th>
                    <td><?= h($mahasiswa->nama) ?></td>
                </tr>
                <tr>
                    <th><?= __('Kota') ?></th>
                    <td><?= h($mahasiswa->kota) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($mahasiswa->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Umur') ?></th>
                    <td><?= $this->Number->format($mahasiswa->umur) ?></td>
                </tr>
                <tr>
                    <th><?= __('Di Buat') ?></th>
                    <td><?= h($mahasiswa->di_buat) ?></td>
                </tr>
                <tr>
                    <th><?= __('Di Update') ?></th>
                    <td><?= h($mahasiswa->di_update) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
