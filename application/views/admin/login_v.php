<?php
$meta = $this->menu_m->select_meta()->row();
?>
<div class="login-container lightmode">
    <div class="login-box animated fadeInDown">
    <center><img src="<?=base_url('img/gar.png');?>" style=width:100px></center>
    <center><h3>Resto</h3></center>
        <div class="login-body">
            <div class="login-title"><strong>Log In</strong></div>
            <?php
            if ($this->session->flashdata('notification')) {
            ?>
            <div class="alert alert-danger" align="center">
                <?=$this->session->flashdata('notification');?>
            </div>
            <?php
            }
            ?>
            <form action="<?=site_url('login/validasi');?>" class="form-horizontal" method="post">
            <div class="form-group">
                <div class="col-md-12">
                    <input type="text" class="form-control" name="username" placeholder="Username" pattern="^[a-zA-Z0-9-_\.]{1,30}$" title="Jangan Pakai SPASI" minlength="5" autocomplete="off" required autofocus>
                </div>
            </div>
            <div class="form-group">
                <div class="col-md-12">
                    <input type="password" class="form-control" name="password" placeholder="Password" autocomplete="off" required/>
                </div>
            </div>
            <div class="form-group">
                <div class="col-md-6">
                    
                </div>
                <div class="col-md-6">
                    <button class="btn btn-danger btn-block"><i class="fa fa-sign-in"></i> Login</button>
                </div>
            </div>
            </form>
            <br>
            
        </div>
        <div class="login-footer">
            <div class="pull-left">
                
            </div>
        </div>
    </div>
</div>