<label for="skill" class="col-sm-3 control-label">Data Keluarga</label>
                                                    <div class="col-sm-7">
                                                      <label for="anak" class="text-light pTop8"><span class="text-light">Anak</span></label>
                                                      	<?php 
                                                        //get anak
														$sql_ga ="select `anak` from `anak_pegawai` where `id_pegawai`=$id_pegawai";
														$query_ga = mysqli_query($mysqli,$sql_ga);
														$jum_ga = mysqli_num_rows($query_ga);
														if($jum_ga==0){?>
                                                        <!-- /input-group anak -->
                                                        <?php }else if ($jum_ga==1){
														while($data_ga = mysqli_fetch_row($query_ga)){
														$anak = $data_ga[0];	
														?>
                                                         <div class="input-group">
                                                        	<input type="text" class="form-control" name="anak[]" value="<?php echo $anak;?>">
                                                          <span class="input-group-btn">
                                                            <button class="btn btn-primary" type="button" id="add_anak"><span class="glyphicon glyphicon-plus"></span></button>
                                                          </span>
                                                        </div><!-- /input-group anak -->
                                                        <?php }?>
                                                        <?php }else{
                                                         $sql_a1 = "select `anak` from `anak_pegawai` where `id_pegawai`=$id_pegawai  order by `id_anak_pegawai` limit 0,1 ";
														  $query_a1 = mysqli_query($mysqli,$sql_a1);
														  while($data_a1 = mysqli_fetch_row($query_a1)){
														  $anak1 = $data_a1[0];
														  ?>
                                                        <div class="input-group">
                                                        	<input type="text" class="form-control" name="anak[]" value="<?php echo $anak1;?>">
                                                          <span class="input-group-btn">
                                                            <button class="btn btn-primary" type="button" id="add_anak"><span class="glyphicon glyphicon-plus"></span></button>
                                                          </span>
                                                        </div><!-- /input-group anak -->
                                                        <?php }?>
                                                        <?php 
                                                          $sql_a2 = "select `anak` from `anak_pegawai` where `id_pegawai`=$id_pegawai  order by `id_anak_pegawai` limit 1,$jum_ga ";
														  $query_a2 = mysqli_query($mysqli,$sql_a2);
														  while($data_a2 = mysqli_fetch_row($query_a2)){
														  $anak2 = $data_a2[0];
														  ?>
                                                        <div class="input-group">
                                                        	<input type="text" class="form-control" name="anak[]" value="<?php echo $anak2;?>">
                                                        <span class="input-group-btn removeclass3">
                                                        	<button class="btn btn-warning" type="button"><span class="glyphicon glyphicon-trash"></span></button>
                                                        </span>
                                                        </div><!-- /input-group anak -->
                                                        <?php }?>
                                                        <?php }?>
                                                        <div id="tmb_anak"></div>
                                                        
                                                      <label for="suami_isteri" class="text-light pTop8"><span class="text-light">Suami/Isteri</span></label>
                                                      <?php
													  //get suami istri
														$sql_gsi ="select `suami_istri` from `suami_istri_pegawai` where `id_pegawai`=$id_pegawai";
														$query_gsi = mysqli_query($mysqli,$sql_gsi);
														$jum_gsi = mysqli_num_rows($query_gsi);
														if($jum_gsi==0){
														?>
                                                        <div class="input-group">
                                                        	<input type="text" class="form-control" name="suami_istri[]" value="">
                                                          <span class="input-group-btn">
                                                            <button class="btn btn-primary" type="button" id="add_suami_isteri"><span class="glyphicon glyphicon-plus"></span></button>
                                                          </span>
                                                        </div><!-- /input-group suami isteri -->
                                                        <?php } else if($jum_gsi==1){
														while($data_gsi = mysqli_fetch_row($query_gsi)){
														$suami_istri = $data_gsi[0];
														?>
                                                        <div class="input-group">
                                                        	<input type="text" class="form-control" name="suami_istri[]" value="<?php echo $suami_istri;?>">
                                                          <span class="input-group-btn">
                                                            <button class="btn btn-primary" type="button" id="add_suami_isteri"><span class="glyphicon glyphicon-plus"></span></button>
                                                          </span>
                                                        </div><!-- /input-group suami isteri -->
                                                        <?php }?>
                                                        <?php } else {?>
                                                        <?php 
                                                        $sql_gsi1 ="select `suami_istri` from `suami_istri_pegawai` where `id_pegawai`=$id_pegawai  order by `id_suami_istri_pegawai` limit 0,1";
														$query_gsi1 = mysqli_query($mysqli,$sql_gsi1);
                                                        while($data_gsi1 = mysqli_fetch_row($query_gsi1)){
														$suami_istri1 = $data_gsi[0];
														?>
                                                        <div class="input-group">
                                                        	<input type="text" class="form-control" name="suami_istri[]" value="<?php echo $suami_istri1;?>">
                                                          <span class="input-group-btn">
                                                            <button class="btn btn-primary" type="button" id="add_suami_isteri"><span class="glyphicon glyphicon-plus"></span></button>
                                                          </span>
                                                        </div><!-- /input-group suami isteri -->
                                                        <?php }?>
                                                        <?php 
                                                        $sql_gsi2 ="select `suami_istri` from `suami_istri_pegawai` where `id_pegawai`=$id_pegawai  order by `id_suami_istri_pegawai` limit 1,$jum_gsi";
														$query_gsi2 = mysqli_query($mysqli,$sql_gsi2);
                                                        while($data_gsi2 = mysqli_fetch_row($query_gsi2)){
														$suami_istri2 = $data_gsi2[0];
														?>
                                                        <div class="input-group">
                                                        	<input type="text" class="form-control" name="suami_istri[]" value="<?php echo $suami_istri2;?>">
                                                        <span class="input-group-btn removeclass4">
                                                        	<button class="btn btn-warning" type="button"><span class="glyphicon glyphicon-trash"></span></button>
                                                        </span>
                                                        </div><!-- /input-group suami isteri -->
                                                        <?php }?>
                                                        <?php }?>
                                                        <div id="tmb_suami_isteri"></div>
                                                        