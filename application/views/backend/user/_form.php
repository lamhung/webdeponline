

<form class="form-horizontal" enctype="multipart/form-data" method="post" autocomplete="on">
    <div class="row">
        <div class="col-md-5 grid_box1">
            <!-- Form group-->
            <div class="form-group <?php if (form_error('fullname')) echo 'has-error'; ?>">
                <label for="fullname" class="col-sm-4 control-label "><?php echo $this->lang->line('user_fullname') ?></label>
                <div class="col-sm-8">
                    <input class="form-control1" name="fullname" id="fullname" placeholder="Enter Fullname" type="text" value="<?php echo set_value('fullname', $row['fullname']) ?>">
                    <?php echo form_error('fullname', "<small class='help-block'>", '</small>'); ?>
                </div>
            </div><!-- /Form group-->
            <div class="form-group <?php if (form_error('username')) echo 'has-error'; ?>">
                <label for="username" class="col-sm-4 control-label "><?php echo $this->lang->line('user_username') ?></label>
                <div class="col-sm-8">
                    <input class="form-control1" name="username" id="username" placeholder="Enter Username" type="text" value="<?php echo set_value('username', $row['username']) ?>">
                    <?php echo form_error('username', "<small class='help-block'>", '</small>'); ?>
                </div>
            </div><!-- /Form group-->
            <div class="form-group <?php if (form_error('password')) echo 'has-error'; ?>">
                <label for="password" class="col-sm-4 control-label "><?php echo $this->lang->line('user_password') ?></label>
                <div class="col-sm-8">
                    <input class="form-control1" name="password" id="password" placeholder="Enter Password" type="password">
                    <?php echo form_error('password', "<small class='help-block'>", '</small>'); ?>
                </div>
            </div><!-- /Form group-->
            <div class="form-group <?php if (form_error('repass')) echo 'has-error'; ?>">
                <label for="repass" class="col-sm-4 control-label "><?php echo $this->lang->line('user_re_password') ?></label>
                <div class="col-sm-8">
                    <input class="form-control1" name="repass" id="repass" placeholder="Enter RePassword" type="password">
                    <?php echo form_error('repass', "<small class='help-block'>", '</small>'); ?>
                </div>
            </div><!-- /Form group-->
            <?php if($this->permission == 'true') {?>
            <div class="form-group">
                <label for="groups" class="col-sm-4 control-label"><?php echo $this->lang->line('user_group') ?></label>
                <div class="col-sm-8">
                    <div class="radio-inline"><label><input type="radio" name="groups" <?php echo set_radio('groups', 'admin', $row['groups'] == 'admin') ?> value="admin"> Admin</label></div>
                    <div class="radio-inline"><label><input type="radio" name="groups" <?php echo set_radio('groups', 'sub_admin', $row['groups'] == 'member') ?> value="member">Thành Viên</label></div>
                </div>
            </div><!-- /Form group-->
            <?php } ?>
            <div class="form-group">
                <label for="groups" class="col-sm-4 control-label"><?php echo $this->lang->line('user_gender') ?></label>
                <div class="col-sm-8">
                    <div class="radio-inline"><label><input type="radio" name="gender" value="1" <?php echo set_radio('gender', 1, $row['gender'] == 1) ?>> Nam</label></div>
                    <div class="radio-inline"><label><input type="radio" name="gender" value="0" <?php echo set_radio('gender', 0, $row['gender'] == 0) ?>>Nữ</label></div>
                </div>
            </div><!-- /Form group-->
            <div class="form-group ">
                <label for="birthday" class="col-sm-4 control-label"><?php echo $this->lang->line('user_birthday') ?></label>
                <div class="col-sm-7">

                    <input type="text" class="form-control1" name="birthday" id="datepicker"  placeholder="Enter Birthday"  value="<?php echo set_value('birthday', $row['birthday_']) ?>">
                </div><span class="glyphicon glyphicon-calendar"></span>

            </div><!-- /Form group-->
            <div class="form-group <?php if (isset($image_error)) echo 'has-error'; ?>">
                <label for="focusedinput" class="col-sm-4 control-label"><?php echo $this->lang->line('user_image') ?></label>
                <div class="col-sm-3">
                    <img src="<?php echo $row['image_']; ?>" width = "100"/>
                </div>
                <div class="col-sm-5">
                    <input class="form-control1" id="image" name= 'image' type="file">
                    <?php
                    if (isset($image_error)) {
                        echo "<small class='help-block'>" . $image_error . '</small>';
                    }
                    ?>
                </div>
            </div><!-- /Form group-->
            <div class="form-group ">
                <label for="phone" class="col-sm-4 control-label"><?php echo $this->lang->line('user_phone') ?></label>
                <div class="col-sm-8">
                    <input class="form-control1" name="phone" id="phone" placeholder="Enter Phone" value="<?php echo set_value('phone', $row['phone']) ?>" type="text">
                </div>
            </div><!-- /Form group-->
            <div class="form-group <?php if (form_error('email')) echo 'has-error'; ?>">
                <label for="email" class="col-sm-4 control-label "><?php echo $this->lang->line('user_email') ?></label>
                <div class="col-sm-8">
                    <input class="form-control1" name="email" id="email" placeholder="Enter Email" value="<?php echo set_value('email', $row['email']) ?>" type="text">
                    <?php echo form_error('email', "<small class='help-block'>", '</small>'); ?>
                </div>
            </div><!-- /Form group-->
            <div class="form-group ">
                <label for="address" class="col-sm-4 control-label"><?php echo $this->lang->line('user_address') ?></label>
                <div class="col-sm-8">
                    <textarea id="address" class="form-control1" name="address" cols="50" rows="5" placeholder="Enter address"><?php echo set_value('address', $row['address']) ?></textarea>
                </div>
            </div><!-- /Form group-->
             <?php if($this->permission == 'true') {?>
            <div class="form-group">
                <label for="status" class="col-sm-4 control-label"><?php echo $this->lang->line('user_status') ?></label>
                <div class="col-sm-8">
                    <div class="radio-inline"><label><input type="radio" name="status" value="1" <?php echo set_radio('status', 1, $row['status'] == 1) ?>> Hoạt động</label></div>
                    <div class="radio-inline"><label><input type="radio" name="status" value="0" <?php echo set_radio('status', 0, $row['status'] == 0) ?>>Bị khóa</label></div>
                </div>
            </div><!-- /Form group-->
            <?php } ?>
            <div class="row">
                <div class="col-sm-8 col-sm-offset-4">
                    <button class="btn btn_5  btn-danger" type="submit" name="submit" value="submit"><?php echo $this->lang->line('btn_add') ?></button>
                    <button class="btn btn_5  btn-default" type="reset">Reset</button>
                </div>
            </div>
        </div>
        <?php if($this->permission == 'true') {?>
        <!-- Premision-->
        <div class="col-md-7" id="user_permission" style="padding-right: 30px">
            <table class="table table-striped table-hover table-bordered">
                <thead>
                    <tr>
                        <th>Phân quyền</th>
                        <th>Hành động</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $permission = $this->config->item('permission');
                    foreach ($permission['list'] as $k => $v) {
                        ?>
                        <tr>
                            <td><?php echo $this->user_model->convert_permission($k); ?></td>
                            <td>
                                <?php
                                $actions = explode('|', $v);
                                foreach ($actions as $action) {
                                    $checked = "";
                                    if (isset($permission_group[$k])) {
                                        $action_group = explode('|', $permission_group[$k]);
                                        if (in_array($action, $action_group)) {
                                            $checked = 'checked';
                                        }
                                    }
                                    ?>
                                    <label class="checkbox-inline">
                                        <input type="checkbox" class="btn btn-xs btn-info" data-toggle="toggle" data-size="mini" name='permissions[]' value="<?php echo $k . '-' . $action; ?>" <?php echo $checked; ?> >
                                        <?php echo $this->user_model->convert_permission($action); ?>
                                    </label>
                                    <?php
                                }
                                ?>
                            </td>
                        </tr>
                        <?php
                    }
                    ?>

                </tbody>
            </table>
        </div>
        <?php }?>
</form>
<script>
    $(document).ready(function () {
        $('#datepicker').datepicker({
            format: 'mm/dd/yyyy',
//            startDate: '-3d'
        });
    });
</script>