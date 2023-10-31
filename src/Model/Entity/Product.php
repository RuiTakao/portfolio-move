<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Product Entity
 *
 * @property int $id
 * @property string $product_name
 * @property string $product_detail
 * @property bool $upload_or_url_path
 * @property string|null $url_path
 * @property string|null $movie_path
 * @property bool $product_view_flg
 * @property int $product_order
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 */
class Product extends Entity
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array<string, bool>
     */
    protected $_accessible = [
        'product_name' => true,
        'product_detail' => true,
        'upload_or_url_path' => true,
        'url_path' => true,
        'movie_path' => true,
        'product_view_flg' => true,
        'product_order' => true,
        'created' => true,
        'modified' => true,
    ];
}
