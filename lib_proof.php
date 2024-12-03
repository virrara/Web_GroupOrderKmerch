<?php
class Library
{
    public function __construct()
    {
        $host = "localhost";
        $dbname = "db_go";
        $username = "root";
        $password = "";
        $this->db = new PDO("mysql:host={$host};dbname={$dbname}", $username, $password);
    }
    //INPUT KOLOM DARI TABEL tb_track
    
    //add data
    public function add_data($pr_image, $pr_resi, $pr_tanggal,  $pr_barang,  $pr_status )
    {
        $data = $this->db->prepare('INSERT INTO tb_proof (pr_image, pr_resi, pr_tanggal, pr_barang, pr_status) VALUES (?, ?, ?, ?, ?)');
        
        $data->bindParam(1, $pr_image);
        $data->bindParam(2, $pr_resi);
        $data->bindParam(3, $pr_tanggal);
        $data->bindParam(4, $pr_barang);
        $data->bindParam(5, $pr_status);

        $data->execute();
        return $data->rowCount();
    }
    public function show()
    {
        $query = $this->db->prepare("SELECT * FROM tb_proof");
        $query->execute();
        $data = $query->fetchAll();
        return $data;
    }
 
    public function get_by_id($kd_batch){
        $query = $this->db->prepare("SELECT * FROM tb_proof where pr_batch=?");
        $query->bindParam(1, $pr_batch);
        $query->execute();
        return $query->fetch();
    }
 
    //update data
    public function update($pr_batch, $pr_image, $pr_resi,$pr_tanggal,$pr_barang, $pr_status){
        $query = $this->db->prepare('UPDATE tb_proof set pr_image=?,pr_resi=?, pr_tanggal=?, pr_barang=?, pr_status=? where pr_batch=?');
        
        
        $query->bindParam(1, $pr_image);
        $query->bindParam(2, $pr_resi);
        $query->bindParam(3, $pr_tanggal);
        $query->bindParam(4, $pr_barang);
        $query->bindParam(5, $pr_status);
        $query->bindParam(6, $pr_batch);

        $query->execute();
        return $query->rowCount();
    }
    //delete data
    public function delete($kd_batch)
    {
        $query = $this->db->prepare("DELETE FROM tb_proof where pr_batch=?");
 
        $query->bindParam(1, $pr_batch);
 
        $query->execute();
        return $query->rowCount();
    }
    
    //search data
    public function cari($kd_batch)
    {
        $query = $this->db->prepare("SELECT * FROM tb_track where kd_batch like '%".$cari."%' ");
 
        $query->bindParam(1, $kd_batch);
 
        $query->execute();
        return $query->rowCount();
    }
}
?>