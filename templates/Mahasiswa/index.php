<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Mahasiswa[]|\Cake\Collection\CollectionInterface $mahasiswa
 */
?>
<div class="mahasiswa index content">
    <?= $this->Html->link(__('New Mahasiswa'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Mahasiswa') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('nama') ?></th>
                    <th><?= $this->Paginator->sort('umur') ?></th>
                    <th><?= $this->Paginator->sort('kota') ?></th>
                    <th><?= $this->Paginator->sort('di_buat') ?></th>
                    <th><?= $this->Paginator->sort('di_update') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($mahasiswa as $mahasiswa): ?>
                <tr>
                    <td><?= $this->Number->format($mahasiswa->id) ?></td>
                    <td><?= h($mahasiswa->nama) ?></td>
                    <td><?= $this->Number->format($mahasiswa->umur) ?></td>
                    <td><?= h($mahasiswa->kota) ?></td>
                    <td><?= h($mahasiswa->di_buat) ?></td>
                    <td><?= h($mahasiswa->di_update) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $mahasiswa->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $mahasiswa->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $mahasiswa->id], ['confirm' => __('Are you sure you want to delete # {0}?', $mahasiswa->id)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')) ?></p>
    </div>
</div>
