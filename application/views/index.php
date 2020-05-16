        <div class="container mt-5">
            <div class="table-responsive mt-5">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Asal Sekolah</th>
                            <th>Program Studi</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <?php foreach ($record as $key => $value) : ?>
                                <td><?php echo $value->id_pendaftaran ?></td>
                                <td><?php echo $value->nama ?></td>
                                <td><?php echo $value->asal_sekolah ?></td>
                                <td><?php echo $value->program_studi ?></td>
                            <?php endforeach; ?>
                            <td>
                                <a href="<?= base_url() ?>mahasiswa/edit/<?php echo $value->id_pendaftaran ?>" class="btn btn-primary"><i class="fa fa-edit"></i></a>
                                <a href="<?php echo base_url() ?>mahasiswa/detail/<?php echo $value->id_pendaftaran ?>" class="btn btn-primary"><i class="fa fa-eye"></i></a>
                                <a href="<?= base_url() ?>mahasiswa/hapus/<?php echo $value->id_pendaftaran ?>" class="btn btn-primary"><i class="fa fa-trash"></i></a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        </main>