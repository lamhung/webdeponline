<div class="col-md-12" style="padding-left: 0px;padding-right: 0px;">
    <div class="xs">
        <div class="bs-example4" data-example-id="simple-responsive-table">
            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead>
                        <tr class="success" align="center">

                            <th><?php echo $this->lang->line('sort_order'); ?></th>
                            <th><?php echo $this->lang->line('name'); ?></th>
                            <th><?php echo $this->lang->line('title'); ?></th>
                            
                            
                            <th>Hành Động</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($rows as $row) {
                            $row = $this->contact_model->convert_data($row);
                            ?>
                            <tr>

                                <td>
                                    <input type="number" name="sort_order" class="sort_order" value="<?php echo $row['sort_order'] ?>" id="sort_order" style="width: 50px;" min="1" data-val0="<?=$row['id']?>" data-val1="contact">
                                   
                                </td>
                                
                                <td><?php echo $row['name'] ?></td>
                                <td><?php echo $row['title'] ?></td>
                                
                                <td align="center">
                                    <!--<a href="<?php //echo base_url('acp/contact/show/' . $row['id'] . '?type=' . $type); ?>"><i class="fa fa-indent icon_ac action" aria-hidden="true" title="Xem" style="color: #246AA5"></i></a>-->
                                    <a href="<?php echo base_url('acp/contact/edit/' . $row['id']); ?>"><i class="fa fa-pencil-square-o icon_ac action" aria-hidden="true" title="Xem" style="color: #E6C31D"></i></a>
                                    <a href="<?php echo base_url('acp/contact/delete/' . $row['id']); ?>" onClick="if (!confirm('Xác nhận xóa'))
                                                    return false;"><i class="fa fa-trash-o icon_ac action" aria-hidden="true" title="Xóa" style="color: #C31818"></i></a>

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
