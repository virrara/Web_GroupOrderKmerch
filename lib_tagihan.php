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
    public function add_data( $tag_negara,  $tag_resi,  $tag_ket )
    {
        $data = $this->db->prepare('INSERT INTO tb_tagihan (tag_negara, tag_resi, tag_ket) VALUES (?, ?, ?)');
        
        
        $data->bindParam(1, $tag_negara);
        $data->bindParam(2, $tag_resi);
        $data->bindParam(3, $tag_ket);

        $data->execute();
        return $data->rowCount();
    }
    public function show()
    {
        $query = $this->db->prepare("SELECT * FROM tb_tagihan");
        $query->execute();
        $data = $query->fetchAll();
        return $data;
    }
 
    public function get_by_id($tag_batch){
        $query = $this->db->prepare("SELECT * FROM tb_tagihan where tag_batch=?");
        $query->bindParam(1, $tag_batch);
        $query->execute();
        return $query->fetch();
    }
 
    //update data
    public function update($tag_batch, $tag_negara, $tag_resi,$tag_ket){
        $query = $this->db->prepare('UPDATE tb_tagihan set tag_negara=?, tag_resi=?, tag_ket=? where tag_batch=?');
        
        
        $query->bindParam(1, $tag_negara);
        $query->bindParam(2, $tag_resi);
        $query->bindParam(3, $tag_ket);
        $query->bindParam(4, $tag_batch);

        $query->execute();
        return $query->rowCount();
    }
    //delete data
    public function delete($tag_batch)
    {
        $query = $this->db->prepare("DELETE FROM tb_tagihan where tag_batch=?");
 
        $query->bindParam(1, $tag_batch);
 
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