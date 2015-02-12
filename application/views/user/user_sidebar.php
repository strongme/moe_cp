<?php
/**
 * Created by PhpStorm.
 * User: John
 * Date: 1/12/15
 * Time: 18:55
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
?><div class="wrapper row-offcanvas row-offcanvas-left">
    <!-- Left side column. contains the logo and sidebar -->
    <aside class="left-side sidebar-offcanvas">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
            <!-- Sidebar user panel -->
            <div class="user-panel">
                <div class="pull-left image">
                    <img src="<?php echo $gravatar; ?>" class="img-circle" alt="User Image" />
                </div>
                <div class="pull-left info">
                    <p>欢迎, <?php echo $user_name; ?></p>

<a href="#"><i class="fa fa-circle text-success"></i> 在线</a>
</div>
</div>

<!-- sidebar menu: : style can be found in sidebar.less -->
<ul class="sidebar-menu">
    <li <?php if ($index_active) { echo 'class="active"';};?>>
        <a href="<?php echo site_url('user');?>">
            <i class="fa fa-dashboard"></i> <span>用户中心</span>
        </a>
    </li>

    <li <?php if ($node_active) { echo 'class="active"';};?>>
        <a href="<?php echo site_url('user/node_list');?>">
            <i class="fa fa-sitemap"></i> <span>节点列表</span>
        </a>
    </li>

    <li <?php if ($info_active) { echo 'class="active"';};?>>
        <a href="<?php echo site_url('user/my_info');?>">
            <i class="fa fa-user"></i> <span>我的信息</span>
        </a>
    </li>
<!--	
    <li <?php if ($goods_active) { echo 'class="active"';};?>>
        <a href="<?php echo site_url('user/view_goods');?>">
            <i class="fa fa-shopping-cart"></i> <span>购买流量</span>
        </a>
    </li>
-->
    <li class="treeview<?php if ($logs_active) { echo ' active';};?>">
        <a href="#">
            <i class="fa fa-file-text"></i> <span>查看记录</span>
        </a>
        <ul class="treeview-menu">
            <li <?php if ($logs_l_active) { echo 'class="active"';};?>><a href="<?php echo site_url('user/login_log'); ?>"><i class="fa fa-angle-double-right"></i> 登陆记录</a></li>
            <li <?php if ($logs_p_active) { echo 'class="active"';};?>><a href="<?php echo site_url('user/pay_log'); ?>"><i class="fa fa-angle-double-right"></i> 充值记录</a></li>
   <!--         <li <?php if ($logs_o_active) { echo 'class="active"';};?>><a href="<?php echo site_url('user/order_log'); ?>"><i class="fa fa-angle-double-right"></i> 购买记录</a></li>-->
        </ul>
    </li>

    <li <?php if ($update_active) { echo 'class="active"';};?>>
        <a href="<?php echo site_url('user/profile_update');?>">
            <i class="fa  fa-pencil"></i> <span>修改资料</span>
        </a>
    </li>

    <li <?php if ($code_active) { echo 'class="active"';};?>>
        <a href="<?php echo site_url('user/invite_code');?>">
            <i class="fa fa-users"></i> <span>查看邀请</span>
        </a>
    </li>

</ul>
</section>
<!-- /.sidebar -->
</aside>
