                        <tr>
                          <td><input type="checkbox"></td>
                          <td class="mailbox-star"><a href="#"><i class="fa fa-star text-yellow"></i></a></td>
                          <td class="mailbox-name"><?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?></td>
                          <td class="mailbox-subject"><?php echo  CHtml::link(CHtml::encode($data->Content), array('view', 'id'=>$data->id));?></td>
                          <td class="mailbox-attachment"><?php echo CHtml::encode($data->Subject); ?></td>
                          <td class="mailbox-date"><?php echo CHtml::encode($data->Date); ?></td>
                        </tr>