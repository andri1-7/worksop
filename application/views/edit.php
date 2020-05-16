        <div class="container my-5">
            <form method="POST" action="<?= base_url() ?>mahasiswa/edit_simpan/<?php $record->id_pendaftaran ?>">
                <div class="table-responsive mt-5">
                    <table class="table table-striped">
                        <tr>
                            <td>Nama</td>
                            <td>:</td>
                            <td><input type="text" name="nama" class="form-control" id="nama" placeholder="Nama..." value="<?php echo $record->nama ?>"></td>
                        </tr>
                        <tr>
                            <td>Gender</td>
                            <td>:</td>
                            <td>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="gender" id="gender1" value="1" <?php echo ($record->gender == 1 ? 'checked' : ''); ?>>
                                    <label class="form-check-label" for="gender1">Laki-Laki</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="gender" id="gender2" value="0" <?php echo ($record->gender == 0 ? 'checked' : ''); ?>>
                                    <label class="form-check-label" for="gender2">Perempuan</label>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>Telepon</td>
                            <td>:</td>
                            <td><input type="text" name="telepon" class="form-control" id="telepon" placeholder="Telepon..." value=" <?php echo $record->telepon ?>"></td>
                        </tr>
                        <tr>
                            <td>Alamat</td>
                            <td>:</td>
                            <td><textarea name="alamat" class="form-control" id="alamat" rows="3"><?php echo $record->alamat ?></textarea></td>
                        </tr>
                        <tr>
                            <td>Asal Sekolah</td>
                            <td>:</td>
                            <td>
                                <input type="text" name="sekolah" class="form-control" id="sekolah" placeholder="Sekolah..." value="<?php echo $record->asal_sekolah ?>">
                            </td>
                        </tr>
                        <tr>
                            <td>Program Studi</td>
                            <td>:</td>
                            <td>
                                <select class="custom-select" name="prodi" id="prodi">
                                    <option value="S1-Sistem Komputer" <?php echo ($record->program_studi == 'S1-Sistem Komputer' ? 'selected' : ''); ?>>S1-Sistem Komputer</option>
                                    <option value="S1-Manajemen Informatika" <?php echo ($record->program_studi == 'S1-Manajemen Informatika' ? 'selected' : ''); ?>>S1-Manajemen Informatika</option>
                                    <option value="S1-Komputer Akutansi" <?php echo ($record->program_studi == 'S1-Komputer Akutansi' ? 'selected' : ''); ?>>S1-Komputer Akutansi</option>
                                </select>
                            </td>
                        </tr>
                    </table>
                    <button type="submit" class="btn btn-primary" value="submit">Simpan</button>
                </div>
            </form>
        </div>
        </main>