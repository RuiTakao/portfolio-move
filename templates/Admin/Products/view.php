<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Product $product
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Product'), ['action' => 'edit', $product->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Product'), ['action' => 'delete', $product->id], ['confirm' => __('Are you sure you want to delete # {0}?', $product->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Products'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Product'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="products view content">
            <h3><?= h($product->product_name) ?></h3>
            <table>
                <tr>
                    <th><?= __('Product Name') ?></th>
                    <td><?= h($product->product_name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Url Path') ?></th>
                    <td><?= h($product->url_path) ?></td>
                </tr>
                <tr>
                    <th><?= __('Movie Path') ?></th>
                    <td><?= h($product->movie_path) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($product->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Product Order') ?></th>
                    <td><?= $this->Number->format($product->product_order) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($product->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($product->modified) ?></td>
                </tr>
                <tr>
                    <th><?= __('Upload Or Url Path') ?></th>
                    <td><?= $product->upload_or_url_path ? __('Yes') : __('No'); ?></td>
                </tr>
                <tr>
                    <th><?= __('Product View Flg') ?></th>
                    <td><?= $product->product_view_flg ? __('Yes') : __('No'); ?></td>
                </tr>
            </table>
            <div class="text">
                <strong><?= __('Product Detail') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($product->product_detail)); ?>
                </blockquote>
            </div>
        </div>
    </div>
</div>
