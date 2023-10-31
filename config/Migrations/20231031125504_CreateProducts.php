<?php
declare(strict_types=1);

use Migrations\AbstractMigration;

class CreateProducts extends AbstractMigration
{
    /**
     * Change Method.
     *
     * More information on this method is available here:
     * https://book.cakephp.org/phinx/0/en/migrations.html#the-change-method
     * @return void
     */
    public function change(): void
    {
        $table = $this->table('products');
        $table
            // 作品名
            ->addColumn('product_name', 'string', [
                'limit' => 150,
                'null' => false,
                'comment' => '作品名',
            ])
            // 作品の説明
            ->addColumn('product_detail', 'text', [
                'null' => false,
                'limit' => 255,
                'comment' => '作品の説明',
            ])
            // アップロードかURL埋め込みか判定
            ->addColumn('upload_or_url_path', 'boolean', [
                'null' => false,
                'comment' => 'アップロードかURL埋め込みか判定　1はアップロード　2はURL埋め込み',
            ])
            // urlのパス
            ->addColumn('url_path', 'string', [
                'null' => true,
                'limit' => 255,
                'comment' => 'urlのパス',
            ])
            // アップロード動画のパス
            ->addColumn('movie_path', 'string', [
                'null' => true,
                'limit' => 255,
                'comment' => 'アップロード動画のパス',
            ])
            // 作品の表示非表示の判定
            ->addColumn('product_view_flg', 'boolean', [
                'default' => 0,
                'comment' => '作品の表示非表示の判定',
            ])
            // 作品の順番
            ->addColumn('product_order', 'integer', [
                'default' => 0,
                'limit' => 11,
                'comment' => '作品の順番',
            ])
            ->addColumn('created', 'datetime')
            ->addColumn('modified', 'datetime')
            ->create();
    }
}
