<?php
require_once('helper.php');

if(isset($_POST['submit'])){
    $file_open = fopen("data/invitations.csv", "a+");
    $form_data = [
    clean_text($_POST['nama']),
    clean_text($_POST['tempat']),
    ];
    fputcsv($file_open, $form_data);
}

$invitations = getInvitations();
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Daftar Undangan</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.4.1/dist/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://cdn.jsdelivr.net/npm/html5shiv@3.7.3/dist/html5shiv.min.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/respond.js@1.4.2/dest/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <br/>
            <form class="form-inline" id="form" method="post" action="undangan.php">
            <div class="form-group">
                <label for="nama">Nama</label>
                <input type="text" class="form-control" name="nama" placeholder="Masukkan nama undangan" required>
            </div>
            <div class="form-group">
                <label for="tempat">Tempat</label>
                <input type="text" class="form-control" name="tempat" placeholder="Masukkan nama tempat/instansi" required>
            </div>
            <button type="submit" name="submit" class="btn btn-primary">Buat Undangan</button>
            </form>
            <br/>
            <div class="table-responsive">
            <table class="table table-striped">
            <tr>
                <th>Nama</th>
                <th>Tempat</th>
                <th>Link</th>
            </tr>
            <?php foreach($invitations as $invitation): ?>
            <tr>
                <td><?php echo $invitation[0]; ?></td>
                <td><?php echo $invitation[1]; ?></td>
                <td><input type="text" value="<?php echo $url.'?to='.urlencode($invitation[0]).'&place='.urlencode($invitation[1]) ?>" readonly /> <button class="copy">Copy</button></td>
            </tr>
            <?php endforeach; ?>
            </table>
            </div>
        </div>
    </div>
</div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha384-nvAa0+6Qg9clwYCGGPpDQLVpLNn0fRaROjHqs13t4Ggj3Ez50XnGQqc/r8MhnRDZ" crossorigin="anonymous"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@3.4.1/dist/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>
    <script>
        $('.copy').click(function () { 
            $(this).siblings('input').select();
            document.execCommand("copy");
            alert('Link undangan sudah dicopy');
         });
    </script>
  </body>
</html>