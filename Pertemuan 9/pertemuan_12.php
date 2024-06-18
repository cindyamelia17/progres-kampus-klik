<html>
    <header>
        <title></title>

        <link href="library/bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
        <link href="library/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" media="screen">
        <link href="library/assets/styles.css" rel="stylesheet" media="screen">
        <script src="library/vendors/modernizr-2.6.2-respond-1.1.0.min.js"></script>
    </header>
    <body>

        <div class="span9" id="content">
                      <!-- morris stacked chart -->
                    <div class="row-fluid">
                        <!-- block -->
                        <div class="block">
                            <div class="navbar navbar-inner block-header">
                                <div class="muted pull-left">Input Nilai Mahasiswa</div>
                            </div>
                            <div class="block-content collapse in">
                                <div class="span12">
                                <form action="proses_pertemuan_12.php" method="POST" class="form-horizontal">
                                      <fieldset>
                                        <legend>Input Nilai Mahasiswa</legend>

                                        <div class="control-group">
                                            <label class="control-label" for="NPM">NPM MAHASISWA : </label>
                                            <input type="text" class="input-xlarge focused" id="NPM" name="npm" value="">
                                        </div>

                                        <div class="control-group">
                                            <label class="control-label" for="NAMA">NAMA MAHASISWA : </label>
                                            <input type="text" class="input-xlarge focused" id="NAMA" name="nama_mhs" value="">
                                        </div>

                                        <div class="control-group">
                                            <label class="control-label" for="NILAI">ULANGI : </label>
                                            <input type="text" class="input-xlarge focused" id="NILAI" name="nilai_ulangan" value="">
                                        </div>

                                        <div class="form-actions">
                                          <button type="submit" class="btn btn-primary">PROSES</button>
                                          <button type="reset" class="btn">Cancel</button>
                                        </div>
                                        </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
    </body>
</html>