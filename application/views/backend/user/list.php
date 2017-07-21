<div class="col-md-12" style="padding-left: 0px;padding-right: 0px;">
    <div class="xs">
        <div class="bs-example4" data-example-id="simple-responsive-table">
            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead>
                        <tr class="success" align="center">
                            <th><?php echo $this->lang->line('STT'); ?></th>
                            <th><?php echo $this->lang->line('user_fullname'); ?></th>
                            <th><?php echo $this->lang->line('user_username'); ?></th>
                            <th><?php echo $this->lang->line('user_group'); ?></th>
                            <th><?php echo $this->lang->line('user_gender'); ?></th>
                            <th><?php echo $this->lang->line('user_status'); ?></th>
                            <th>Hành Động</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $stt = 1;
                        foreach ($rows as $row) {
                            $row = $this->user_model->convert_data($row);
                            ?>
                            <tr>
                                <th scope="row"><?php echo $stt++; ?></th>
                                <td><?php echo $row['fullname'] ?></td>
                                <td><?php echo $row['username'] ?></td>
                                <td><?php echo $row['groups'] ?></td>
                                <td><?php echo $row['gender_'] ?></td>
                                <td><?php echo $row['status_'] ?></td>
                                <td align="center">
                                    <a href="<?php echo base_url('acp/user/show/' . $row['id']); ?>"><i class="fa fa-indent icon_ac action" aria-hidden="true" title="Xem" style="color: #246AA5"></i></a>
                                    <a href="<?php echo base_url('acp/user/edit/' . $row['id']); ?>"><i class="fa fa-pencil-square-o icon_ac action" aria-hidden="true" title="Sửa" style="color: #E6C31D"></i></a>
                                    <a href="<?php echo base_url('acp/user/delete/' . $row['id']); ?>" onClick="if(!confirm('Xác nhận xóa')) return false;"><i class="fa fa-trash-o icon_ac action" aria-hidden="true" title="Xóa" style="color: #C31818"></i></a>

                                </td>
                            </tr>
                            <?php
                        }
                        ?>
                    </tbody>
                </table>
            </div><!-- /.table-responsive -->
            <!-- phân trang -->
            <div class="text-center">
                <?php echo $this->pagination->create_links(); ?>
            </div>
        </div>
    </div>
</div>