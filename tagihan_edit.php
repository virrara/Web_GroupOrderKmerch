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
include('lib_tagihan.php');
$lib = new Library();
if(isset($_GET['tag_batch'])){
    $tag_batch = $_GET['tag_batch']; 
    $data_tagihan = $lib->get_by_id($tag_batch);
}
else
{
    header('Location: adm_tagihan.php');
}
 
if(isset($_POST['tombol_update'])){
    $tag_batch = $_POST['tag_batch'];
    $tag_negara = $_POST['tag_negara'];
    $tag_resi = $_POST['tag_resi'];
    $tag_ket = $_POST['tag_ket'];

    $status_update = $lib->update($tag_batch, $tag_negara, $tag_resi,  $tag_ket );
    if($status_update)
    {
        header('Location: adm_tagihan.php');
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
                <h3>Update Data Tagihan</h3>
            </div>
            <div class="card-body">
            <form method="post" action="">
                <input type="hidden" name="tag_batch" value="<?php echo $data_tagihan['tag_batch']; ?>"/>
                <div class="form-group row">
                    <label for="tag_negara" class="col-sm-2 col-form-label">Negara</label>
                    <div class="col-sm-10">
                    <input type="text" name="tag_negara" class="form-control" id="tag_negara" value="<?php echo $data_tagihan['tag_negara']; ?>">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="tag_resi" class="col-sm-2 col-form-label">No Resi</label>
                    <div class="col-sm-10">
                    <input type="text" value="<?php echo $data_tagihan['tag_resi']; ?>" name="tag_resi" class="form-control" id="tag_resi">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="tag_ket" class="col-sm-2 col-form-label">Tagihan</label>
                    <div class="col-sm-10">
                    <input type="text" value="<?php echo $data_tagihan['tag_ket']; ?>" name="tag_ket" class="form-control" id="tag_ket">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="tag_ket" class="col-sm-2 col-form-label"></label>
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