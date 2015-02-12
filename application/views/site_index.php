<?php
/**
 * Created by PhpStorm.
 * User: John
 * Date: 1/11/15
 * Time: 17:29
 */

/**
 * moeSS
 *
 * moeSS is an open source Shadowsocks frontend for PHP 5.4 or newer
 * Copyright (C) 2015  wzxjohn
 *
 * This file is part of moeSS.
 *
 * moeSS is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * moeSS is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with moeSS.  If not, see <http://www.gnu.org/licenses/>.
 *
 * @package	moeSS
 * @author	wzxjohn
 * @copyright	Copyright (c) 2015, wzxjohn (https://maoxian.de/)
 * @license	http://www.gnu.org/licenses/ GPLv3 License
 * @link	http://github.com/wzxjohn/moeSS
 * @since	Version 1.0.0
 * @filesource
 */

defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="google" value="notranslate" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="moeSS, a shadowsocks manage system">
    <meta name="author" content="wzxjohn">
    <meta name="apple-itunes-app" content="app-id=665729974, affiliate-data=11lRnc">
    <link rel="shortcut icon" type="image/ico" href="<?php echo base_url('favicon.ico'); ?>" />

    <title><?php echo SITE_NAME; ?></title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url("static/css/bootstrap.min.css"); ?>" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="<?php echo base_url("static/css/jumbotron-narrow.css"); ?>" rel="stylesheet">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>

<div class="container">
    <?php $this->load->view('index_nav');?>

    <div class="jumbotron">
        <h2><?php echo SITE_NAME; ?></h2>
        <p class="lead"> 每个月【1G】流量，【美国旧金山】节点。</p>
        <p><a class="btn btn-lg btn-success" href="<?php echo site_url('user/register'); ?>" role="button">立即注册</a></p>
    </div>

    <div class="row marketing">
        <div class="col-lg-6 text-center">
            <a href="https://play.google.com/store/apps/details?id=com.github.shadowsocks" target="_blank"><h4>Android</h4></a>
            <p>Android客户端<a href="https://github.com/shadowsocks/shadowsocks-android/releases/download/v2.6.4/shadowsocks-nightly-2.6.4.apk" target="_blank">直接下载</a></p>

            <h4><a href="http://sourceforge.net/projects/shadowsocksgui/files/dist/" target="_blank">Shadowsocks C#</a></h4>
            <p> Windows用户推荐此客户端.<a href="http://sourceforge.net/projects/shadowsocksgui/files/dist/Shadowsocks-win-2.3.zip/download" target="_blank">直接下载</a></p>


        </div>

        <div class="col-lg-6 text-center">
            <a href="https://itunes.apple.com/us/app/shadowsocks/id665729974?mt=8&at=11lRnc" target="_blank"><h4>iOS</h4></a>
            <p>iOS客户端</p>

            <h4><a href="https://github.com/ohdarling/GoAgentX/releases" target="_blank">GoAgentX</a></h4>
            <p> Mac用户推荐此客户端.</p>


        </div>
    </div>
<div class="row">
<div class="col-lg-6 text-center">
<a href="http://shadowsocks.org/en/download/clients.html" target="_blank"><h4>Shadowsocks其他客户端下载</h4></a>
</div>
</div>
<?php
    $this->load->view('index_footer');
    $this->load->view('ana') ;?>

</div> <!-- /container -->

</body>
</html>
