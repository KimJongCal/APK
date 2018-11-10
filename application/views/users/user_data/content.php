						<div class="row">
                            <div class="col-md-12">
                                <div class="overview-wrap">
                                    <h2 class="title-1">Data Users</h2>
                                    <button type="button" class="btn btn-primary mb-1" data-toggle="modal" data-target="#mediumModal">
                                    <i class="zmdi zmdi-plus"></i> Tambah Data
                                    </button>
                                </div>
                            </div>
                        </div>
                        <?php $this->load->view('message'); ?>
                        <div class="table-responsive table-responsive-data2">
                            <table class="table table-data2">
                                <thead>
                                    <tr>
                                        <th>No.</th>
                                        <th>Nama</th>
                                        <th>Username</th>
                                        <th>Level</th>
                                        <th>#</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no=1; ?>
                                    <?php foreach($tbUsers as $data): ?>
                                    <tr class="tr-shadow">
                                        <td><?=$no++?></td>
                                        <td><?=$data->nama?></td>
                                        <td><?=$data->username?></td>
                                        <td><?=$data->level?></td>
                                        <td>
                                            <div class="table-data-feature">
                                                <a href="<?=base_url('index.php/Users/Edit/'.$data->id_users)?>" class="item" data-toggle="tooltip" data-placement="top" title="Edit">
                                                    <i class="zmdi zmdi-edit"></i>
                                                </a>
                                                <a href="<?=base_url('index.php/Users/Delete/'.$data->id_users)?>" class="item" data-toggle="tooltip" data-placement="top" title="Delete" onclick="return confirm('Hapus data?')">
                                                    <i class="zmdi zmdi-delete"></i>
                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr class="spacer"></tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>