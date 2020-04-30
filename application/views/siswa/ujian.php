<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

<div class="main-content">
    <div class="section__content section__content--p30">
        <div class="container-fluid">
            <!-- MAP DATA-->
            <div class="map-data m-b-40">
                <h3 class="title-3 m-b-30">Ujian</h3>
                <div class="mx-auto d-block">
                    <div class="container-fluid">
                      <div class="card card-body">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <th>Nama Ujian</th>
                                        <th>Mata Pelajaran</th>
                                        <th>Waktu Ujian</th>
                                        <th>Tanggal Berakhir</th>
                                        <th>Nilai</th>
                                        <th></th>
                                    </thead>
                                    <tbody>
                                    <?php foreach ($ujian as $k) {
                                     ?>
                                    <tr>
                                        <td><?=$k->judul?></td>
                                        <td><?=$k->kelas?> || <?=$k->mapel?></td>
                                        <td><?=$k->waktu?></td>
                                        <td><?=$k->tgl_expired?></td>
                                        <td><?php  foreach ($jawaban as $kuy) {
                                            if ($kuy->id_ujian == $k->id) {
                                                echo $kuy->nilai_total;
                                            }
                                        } ?>
                                        </td>
                                        <td><?php  foreach ($jawaban as $kuy) {
                                            if ($kuy->id_ujian != $k->id) {
                                                if (date('Y-m-d')<=$k->tgl_expired): ?> 
                                                <a href="<?=base_url()?>siswa/masukUjian/<?=$k->id?>" class="btn btn-primary btn-sm">Masuk Ujian Online</a>
                                            <?php endif;
                                            }
                                        }?>
                                        </td>
                                    </tr>
                                    <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                      </div>
                    </div>
                </div>
                <br>
                
            </div>
            <!-- END MAP DATA-->
        </div>
    </div>
    
</div>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){
    $("#laki").click(function(){
        $("#perempuan").attr("checked", false);
        $("#laki").attr("checked", true);

    });
    $("#perempuan").click(function(){         
        $("#laki").attr("checked", false);
        $("#perempuan").attr("checked", true);
    });
});
</script>
