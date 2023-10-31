<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * ProductsFixture
 */
class ProductsFixture extends TestFixture
{
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'id' => 1,
                'product_name' => 'Lorem ipsum dolor sit amet',
                'product_detail' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
                'upload_or_url_path' => 1,
                'url_path' => 'Lorem ipsum dolor sit amet',
                'movie_path' => 'Lorem ipsum dolor sit amet',
                'product_view_flg' => 1,
                'product_order' => 1,
                'created' => '2023-11-01 00:26:44',
                'modified' => '2023-11-01 00:26:44',
            ],
        ];
        parent::init();
    }
}
