						<div class="row">
                            <div class="col-md-12">
                                <div class="overview-wrap">
                                    <h2 class="title-1">overview</h2>
                                </div>
                            </div>
                        </div>
                        <br>
                        <form action="<?=base_url('index.php/Users/Update')?>" method="post" enctype="multipart/form-data" class="form-horizontal">
                            <input type="hidden" name="id_users" value="<?=$tbUsers->id_users?>">
                            <div class="row form-group">
                                <div class="col col-md-3">
                                    <label for="text-input" class=" form-control-label">Nama</label>
                                </div>
                                <div class="col-12 col-md-9">
                                    <input type="text" id="text-input" name="nama" value="<?=$tbUsers->nama?>" class="form-control">
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3">
                                    <label for="text-input" class=" form-control-label">Username</label>
                                </div>
                                <div class="col-12 col-md-9">
                                    <input type="text" id="text-input" name="username" value="<?=$tbUsers->username?>" class="form-control">
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3">
                                    <label for="text-input" class=" form-control-label">Password</label>
                                </div>
                                <div class="col-12 col-md-9">
                                    <input type="password" id="text-input" name="password" placeholder="Pasword" class="form-control">
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3">
                                    <label for="select" class=" form-control-label">Level</label>
                                </div>
                                <div class="col-12 col-md-9">
                                    <select name="level" id="select" class="form-control">
                                        <option>Please select</option>
                                        <option value="0" <?php if($tbUsers->level=='0'){ echo 'selected'; } ?>>Superadmin</option>
                                        <option value="1" <?php if($tbUsers->level=='1'){ echo 'selected'; } ?>>Admin</option>
                                    </select>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary">Update</button>
                        </form>