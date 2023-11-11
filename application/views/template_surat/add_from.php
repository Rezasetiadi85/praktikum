<main>
    <div class="container-fluid">
        <h1 class="mt-4"></h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item">
                <a href="<?= site_url('Template_surat') ?>">Surat</a>
            </li>
            <li class="breadcrumb-item active">
                <?= $title ?>
            </li>
        </ol>

        <div class="card mb-4">
            <div class="card-body">
                <form action="<?= site_url('template_surat/save') ?>" method="post" enctype="multipart/form-data">

                    <div class="mb-3">
                        <label>Nama <code>*</code></label>
                        <input class="form-control" type="text" name="nama" placeholder="Nama" required />
                    </div>

                    <div class="mb-3">
                        <label>PERIHAL <code>*</code></label>
                        <input class="form-control" type="varchar" name="perihal" placeholder="PERIHAL" required />
                    </div>

                    <div class="row">
                        <div class="col">
                            <div class="mb-3">
                                <label>Tujuan Surat <code>*</code></label>
                                <input class="form-control" type="varchar" name="tujuan_surat" placeholder="Tujuan Surat" required />
                            </div>
                        </div>
                        <div class="col"></div>
                    </div>

                    <div class="mb-3">
                        <label>Tanggal Kirim <code>*</code></label>
                        <input class="form-control" type="date" name="tgl_kirim" placeholder="Tanggal Kirim" required />
                    </div>

                    <div class="mb-3">
                        <label>Keterangan <code>*</code></label>
                        <input class="form-control" type="text" name="keterangan" placeholder="Keterangan" required />
                    </div>

                    <div class="mb-3">
                        <label for="username">Action <code>*</code></label>
                        <textarea class="form-control" placeholder="Action" name="action" id="floatingTextarea2" style="height: 100px"></textarea>
                    </div>

                    <button class="btn btn-primary" type="submit"><i class="fas fa-plus"></i> Save Data</button>
                </form>
            </div>
        </div>
        <div style="height: 100vh"></div>
    </div>
</main>
