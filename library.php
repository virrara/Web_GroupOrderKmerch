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
    public function add_data($negara, $no_resi,  $nm_order,  $track_sts )
    {
        $data = $this->db->prepare('INSERT INTO tb_track (negara, no_resi, nm_order, track_sts) VALUES (?, ?, ?, ?)');
        
        $data->bindParam(1, $negara);
        $data->bindParam(2, $no_resi);
        $data->bindParam(3, $nm_order);
        $data->bindParam(4, $track_sts);

        $data->execute();
        return $data->rowCount();
    }
    public function show()
    {
        $query = $this->db->prepare("SELECT * FROM tb_track");
        $query->execute();
        $data = $query->fetchAll();
        return $data;
    }
 
    public function get_by_id($kd_batch){
        $query = $this->db->prepare("SELECT * FROM tb_track where kd_batch=?");
        $query->bindParam(1, $kd_batch);
        $query->execute();
        return $query->fetch();
    }
 
    //update data
    public function update($kd_batch, $negara, $no_resi,$nm_order, $track_sts){
        $query = $this->db->prepare('UPDATE tb_track set negara=?,no_resi=?, nm_order=?, track_sts=? where kd_batch=?');
        
        
        $query->bindParam(1, $negara);
        $query->bindParam(2, $no_resi);
        $query->bindParam(3, $nm_order);
        $query->bindParam(4, $track_sts);
        $query->bindParam(5, $kd_batch);

        $query->execute();
        return $query->rowCount();
    }
    //delete data
    public function delete($kd_batch)
    {
        $query = $this->db->prepare("DELETE FROM tb_track where kd_batch=?");
 
        $query->bindParam(1, $kd_batch);
 
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