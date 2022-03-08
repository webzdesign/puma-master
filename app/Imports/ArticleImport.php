<?php

namespace App\Imports;

use App\Models\Article;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class ArticleImport implements ToModel, WithHeadingRow
{
    public $data;
    public function __construct()
    {
        $this->data = collect();
    }
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function model(array $row)
    {

        return new Article([
            'season' => $row['season'],
            'dumy_code' => $row['dumy_code'],
            'final_code' => $row['final_code'],
            'style' => $row['style'],
            'source' => $row['source'],
            'style_desc' => $row['styledesc'],
            'color_desc' => $row['color_desc'],
            'page_RBU' => $row['page_rbu'],
            'display_BU' => $row['display_bu'],
            'age_group' => $row['age_group'],
            'key' => $row['key'],
            'sort_key' => $row['sort_key'],
            'product_type' => $row['product_type'],
            'final_MRP' => $row['final_mrp'],
            'final_gender' => $row['final_gender'],
            'global_ki' => $row['global_ki'],
            'marketing_tier' => $row['marketing_tier'],
            'channel-aw22' => $row['channel_aw22'],
            'line' => $row['line'],
            'customer(online)' => $row['cutomer_online'],
            'story' => $row['story'],
            'colab' => $row['colab'],
            'upper' => $row['upper'],
            'mid_sole' => $row['mid_sole'],
            'out_sole' => $row['out_sole'],
            'description' => $row['description'],
            'size_run' => $row['size_run'],
            'technology' => $row['technology'],
            'marketing' => $row['marketing'],
            'additional' => $row['additional'],
            'key_highlight' => $row['key_highlight'],
            'fk_retail' => $row['fk_retail'],
            'fk_discount' => $row['fk_discount'],
            'myntra_retail' => $row['myntra_retail'],
            'myntra_discount' => $row['myntra_discount'],
            'ajio_retail' => $row['ajio_retail'],
            'ajio_discount' => $row['ajio_discount'],
            'amazon_discount' => $row['amazon_discount'],
        ]);
    }
}
