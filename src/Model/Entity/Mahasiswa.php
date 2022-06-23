<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Mahasiswa Entity
 *
 * @property int $id
 * @property string $nama
 * @property string $umur
 * @property string $kota
 * @property \Cake\I18n\FrozenTime $di_buat
 * @property \Cake\I18n\FrozenTime $di_update
 */
class Mahasiswa extends Entity
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        'nama' => true,
        'umur' => true,
        'kota' => true,
        'di_buat' => true,
        'di_update' => true,
    ];
}
