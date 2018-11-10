						<div class="row">
                            <div class="col-md-12">
                                <div class="overview-wrap">
                                    <h2 class="title-1">Edit Data Arduino</h2>
                                </div>
                            </div>
                        </div>
                        <br>
                        <form action="<?=base_url('index.php/Arduino/Update')?>" method="post" enctype="multipart/form-data" class="form-horizontal">
                            <input type="hidden" name="id_users" value="<?=$tbArduino->id?>">
                            <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label for="text-input" class=" form-control-label">Field ID</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <input type="text" id="text-input" name="field_id" value="<?=$tbArduino->field_id?>" class="form-control">
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label for="text-input" class=" form-control-label">Label</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <input type="text" id="text-input" name="label" value="<?=$tbArduino->label?>" class="form-control">
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label for="select" class=" form-control-label">Status</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <select name="status" id="select" class="form-control" required="">
                                            <option>Please select</option>
                                            <option value="0" <?php if($tbArduino->status=='0'){ echo 'selected'; }?> >Mati</option>
                                            <option value="1" <?php if($tbArduino->status=='1'){ echo 'selected'; }?>>Nyala</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label for="textarea-input" class=" form-control-label">Pesan</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <textarea name="textarea-input" name="pesan" id="textarea-input" rows="9" class="form-control"><?=$tbUsers->pesan?></textarea>
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary">Update</button>
                        </form>