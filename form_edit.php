<?php 
class Database
{
    public function __construct()
    {
        $host = "localhost";
        $dbname = "db_go";
        $username = "root";
        $password = "";
        $this->db = new PDO("mysql:host={$host};dbname={$dbname}", $username, $password);
    }
    public function sendMessage($email, $subject, $message)
    {
        $data = $this->db->prepare('INSERT INTO contactus (email,subject,message) VALUES (?, ?, ?)');
        
        $data->bindParam(1, $email);
        $data->bindParam(2, $subject);
        $data->bindParam(3, $message);
 
        $data->execute();
        return $data->rowCount();
    }
}
?>


<?php 
include('library.php');
$lib = new Library();
if(isset($_GET['kd_batch'])){
    $kd_batch = $_GET['kd_batch']; 
    $data_track = $lib->get_by_id($kd_batch);
}
else
{
    header('Location: adm_track.php');
}
 
if(isset($_POST['tombol_update'])){
    $kd_batch = $_POST['kd_batch'];
    $negara = $_POST['negara'];
    $no_resi = $_POST['no_resi'];
    $nm_order = $_POST['nm_order'];
    $track_sts = $_POST['track_sts'];

    $status_update = $lib->update($kd_batch, $negara, $no_resi,  $nm_order,  $track_sts );
    if($status_update)
    {
        header('Location: adm_track.php');
    }
}
?>
<html>
    <head>
        <title></title>
        <link rel="stylesheet" href="bootstrap.min.css">
    </head>
    <body>
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h3>Update Data Tracking</h3>
            </div>
            <div class="card-body">
            <form method="post" action="">
                <input type="hidden" name="kd_batch" value="<?php echo $data_track['kd_batch']; ?>"/>
                <div class="form-group row">
                    <label for="negara" class="col-sm-2 col-form-label">Negara</label>
                    <div class="col-sm-10">
                    <input type="text" name="negara" class="form-control" id="negara" value="<?php echo $data_track['negara']; ?>">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="no_resi" class="col-sm-2 col-form-label">No Resi</label>
                    <div class="col-sm-10">
                    <input type="text" value="<?php echo $data_track['no_resi']; ?>" name="no_resi" class="form-control" id="no_resi">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="nm_order" class="col-sm-2 col-form-label">Nama - Nama Barang</label>
                    <div class="col-sm-10">
                    <input type="text" value="<?php echo $data_track['nm_order']; ?>" name="nm_order" class="form-control" id="nm_order">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="track_sts" class="col-sm-2 col-form-label">Status Barang</label>
                    <div class="col-sm-10">
                    <input type="text" value="<?php echo $data_track['track_sts']; ?>" name="track_sts" class="form-control" id="track_sts">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="track_sts" class="col-sm-2 col-form-label"></label>
                    <div class="col-sm-10">
                    <input type="submit" name="tombol_update" class="btn btn-primary" value="Update">
                    </div>
                </div>
            </form>
            </div>
        </div>
    </div>
    </body>
</html>