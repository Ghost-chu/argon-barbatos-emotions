<?php # -*- coding: utf-8 -*-
/**
 * Plugin Name: Argon Barbatos Emotions
 * Plugin URI:  https://www.ghostchu.com/
 * Text Domain: argon-barbatos-emotions
 * Description: 向 Argon 主题注册 "巴巴托斯" 评论表情包。图源 Lofter & 半次元 & 米游社
 * Version:     1.0
 * Author:      Ghost_chu
 * Author URI:  https://www.ghostchu.com
 * License:     GPLv3+
 */

    function add_more_emotions_barbatos($emotionList){
		$assets_dir = plugins_url( 'assets/', __FILE__ );
        array_push(
            $emotionList,
            array(
                'groupname' => '巴巴托斯', 
                'list' => array(
					array('type' => 'sticker', 'code' => 'venti-sahua', 'src' => $assets_dir . 'sahua.png'),
                    array('type' => 'sticker', 'code' => 'venti-chijing', 'src' => $assets_dir . 'chijing.png'),
                    array('type' => 'sticker', 'code' => 'venti-guzhang', 'src' => $assets_dir . 'guzhang.png'),
                    array('type' => 'sticker', 'code' => 'venti-qidai', 'src' => $assets_dir . 'qidai.png'),
                    array('type' => 'sticker', 'code' => 'venti-xihuan', 'src' => $assets_dir . 'xihuan.png'),
                    array('type' => 'sticker', 'code' => 'venti-youzhuyile', 'src' => $assets_dir . 'youzhuyile.png'),
                    array('type' => 'sticker', 'code' => 'venti-jiaogeiwoba', 'src' => $assets_dir . 'jiaogeiwoba.png'),
                    array('type' => 'sticker', 'code' => 'venti-liukoushui', 'src' => $assets_dir . 'liukoushui.png'),
                    array('type' => 'sticker', 'code' => 'venti-baituo', 'src' => $assets_dir . 'baituo.png'),
                    array('type' => 'sticker', 'code' => 'venti-qiezi', 'src' => $assets_dir . 'qiezi.png'),
                    array('type' => 'sticker', 'code' => 'venti-qiezi2', 'src' => $assets_dir . 'qiezi2.png'),
                    array('type' => 'sticker', 'code' => 'venti-haoye', 'src' => $assets_dir . 'haoye.png'),
                    array('type' => 'sticker', 'code' => 'venti-yimola', 'src' => $assets_dir . 'yimola.png'),
                    array('type' => 'sticker', 'code' => 'venti-zenmezheyang', 'src' => $assets_dir . 'zenmezheyang.png'),
                    array('type' => 'sticker', 'code' => 'venti-tanqi', 'src' => $assets_dir . 'tanqi.png'),
                    array('type' => 'sticker', 'code' => 'venti-chipingguo', 'src' => $assets_dir . 'chipingguo.png'),
                    array('type' => 'sticker', 'code' => 'venti-shangxin', 'src' => $assets_dir . 'shangxin.png'),
                    array('type' => 'sticker', 'code' => 'venti-chichichi', 'src' => $assets_dir . 'chichichi.png'),
                    array('type' => 'sticker', 'code' => 'venti-zailaiyibei', 'src' => $assets_dir . 'zailaiyibei.png'),
                    array('type' => 'sticker', 'code' => 'venti-aixin', 'src' => $assets_dir . 'aixin.png'),
                    array('type' => 'sticker', 'code' => 'venti-ehei', 'src' => $assets_dir . 'ehei.png'),
                    array('type' => 'sticker', 'code' => 'venti-hengchang', 'src' => $assets_dir . 'hengchang.png'),
                    array('type' => 'sticker', 'code' => 'venti-buyao', 'src' => $assets_dir . 'buyao.png'),
                    array('type' => 'sticker', 'code' => 'venti-nihao', 'src' => $assets_dir . 'nihao.png'),
                    array('type' => 'sticker', 'code' => 'venti-fengshenxiang', 'src' => $assets_dir . 'fengshenxiang.png'),
                    array('type' => 'sticker', 'code' => 'venti-yongbao', 'src' => $assets_dir . 'yongbao.png'),
                    array('type' => 'sticker', 'code' => 'venti-shuijiao', 'src' => $assets_dir . 'shuijiao.png'),
                    array('type' => 'sticker', 'code' => 'venti-qiuqiunile', 'src' => $assets_dir . 'qiuqiunile.png'),
                    array('type' => 'sticker', 'code' => 'venti-chiyu', 'src' => $assets_dir . 'chiyu.png'),
                    array('type' => 'sticker', 'code' => 'venti-kuqi', 'src' => $assets_dir . 'kuqi.png'),
                    array('type' => 'sticker', 'code' => 'venti-wexiao', 'src' => $assets_dir . 'weixiao.png'),
                    array('type' => 'sticker', 'code' => 'venti-huanshi', 'src' => $assets_dir . 'huanshi.png'),
                    array('type' => 'sticker', 'code' => 'venti-mianwubiaoqing', 'src' => $assets_dir . 'miaowubiaoqing.png'),
                    array('type' => 'sticker', 'code' => 'venti-kaixin', 'src' => $assets_dir . 'kaixin.png'),
                    array('type' => 'sticker', 'code' => 'venti-wohaikeyi', 'src' => $assets_dir . 'wohaikeyi.png'),
                    array('type' => 'sticker', 'code' => 'venti-kuaipao', 'src' => $assets_dir . 'kuaipao.png'),
                    array('type' => 'sticker', 'code' => 'venti-shanliangdengchang', 'src' => $assets_dir . 'shanliangdengchang.png'),
                    array('type' => 'sticker', 'code' => 'venti-haipa', 'src' => $assets_dir . 'haipa.png'),
                    array('type' => 'sticker', 'code' => 'venti-chengdanletaiduo', 'src' => $assets_dir . 'chengdanletaiduo.png'),
                    array('type' => 'sticker', 'code' => 'venti-toutougaosuni', 'src' => $assets_dir . 'toutougaosuni.png'),
                    array('type' => 'sticker', 'code' => 'venti-kanshouji', 'src' => $assets_dir . 'kanshouji.png'),
                    array('type' => 'sticker', 'code' => 'venti-yiwen', 'src' => $assets_dir . 'yiwen.png'),
                    array('type' => 'sticker', 'code' => 'venti-tian', 'src' => $assets_dir . 'tian.png'),
                    array('type' => 'sticker', 'code' => 'venti-maye', 'src' => $assets_dir . 'maye.jpg'),
                    array('type' => 'sticker', 'code' => 'venti-ningshi', 'src' => $assets_dir . 'ningshi.png')
                )
            )
        );
        return $emotionList;
    }
    add_filter('argon_emotion_list' , 'add_more_emotions_barbatos');
?>
