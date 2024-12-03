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
include('lib_proof.php');
$lib = new Library();
if(isset($_POST['tombol_tambah'])){
    $pr_image = $_POST['pr_image'];
    $pr_resi = $_POST['pr_resi'];
    $pr_tanggal =$_POST['pr_tanggal'];
    $pr_barang = $_POST['pr_barang'];
    $pr_status = $_POST['pr_status'];

    $add_status = $lib->add_data($pr_image, $pr_resi, $pr_tanggal, $pr_barang,  $pr_status );
    if($add_status){
    header('Location: adm_proof.php');
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
                <h3>TAMBAH DATA PROOF</h3>
            </div>
            <div class="card-body">
            <form method="post" action="">
                <div class="form-group row">
                    <label for="pr_image" class="col-sm-2 col-form-label">Foto</label>
                    <div class="col-sm-10">
                    <input type="file" name="pr_image" class="form-control" id="pr_image">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="pr_resi" class="col-sm-2 col-form-label">No Resi</label>
                    <div class="col-sm-10">
                    <input type="text" name="pr_resi" class="form-control" id="pr_resi">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="pr_tanggal" class="col-sm-2 col-form-label">Tanggal</label>
                    <div class="col-sm-10">
                    <input type="date" name="pr_tanggal" class="form-control" id="pr_tanggal">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="pr_barang" class="col-sm-2 col-form-label">Nama Barang</label>
                    <div class="col-sm-10">
                    <input type="text" name="pr_barang" class="form-control" id="pr_barang">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="pr_status" class="col-sm-2 col-form-label">Status Barang</label>
                    <div class="col-sm-10">
                    <input type="text" name="pr_status" class="form-control" id="pr_status">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="pr_status" class="col-sm-2 col-form-label"></label>
                    <div class="col-sm-10">
                    <input type="submit" name="tombol_tambah" class="btn btn-primary" value="Tambah">
                    </div>
                </div>
            </form>
            </div>
        </div>
    </div>
    </body>
</html>