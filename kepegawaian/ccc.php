<div class="form-group">
                                                    <label for="pendidikan" class="col-sm-3 control-label"><strong>Jenjang Pendidikan</strong></label>
                                                    <div class="col-sm-4">
                                                      <select name="jenjang_pendidikan" class="form-control">
                                                      	<option value="0">[Pilih Jenjang Pendidikan]</option>
                                                        <?php 
														$sql_jp ="select `id_jenjang_pendidikan`, `jenjang_pendidikan` from `jenjang_pendidikan` order by `id_jenjang_pendidikan`";
														$query_jp = mysqli_query($mysqli,$sql_jp);
														while($data_jp = mysqli_fetch_row($query_jp)){
														$id_jenjang_pendidikan = $data_jp[0];
														$jenjang_pendidikan = $data_jp[1];
														?>
                                                      	<option value="<?php echo $id_jenjang_pendidikan;?>" <?php if($idjenjang == $id_jenjang_pendidikan){?>selected="selected"<?php }?>><?php echo $jenjang_pendidikan;?></option>
                                                      	<?php }?>
                                                      </select>