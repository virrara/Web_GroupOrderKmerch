<?php 
include('library.php');
$lib = new Library();
if(isset($_POST['tombol_tambah'])){
    $negara = $_POST['negara'];
    $no_resi = $_POST['no_resi'];
    $nm_order = $_POST['nm_order'];
    $track_sts = $_POST['track_sts'];

    $add_status = $lib->add_data($negara, $no_resi,  $nm_order,  $track_sts );
    if($add_status){
    header('Location: adm_track.php');
    }
}
?>
<!DOCTYPE html>
<html>  <head>
    <title>Form Add Tracking</title>
    <style>
      .modal {
        display: none;
        position: fixed;
        z-index: 8;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        overflow: auto;
        background-color: rgb(0, 0, 0);
        background-color: rgba(0, 0, 0, 0.4);
      }
      .modal-content {
        margin: 50px auto;
        border: 1px solid #999;
        width: 60%;
      }
      h2,p {
        margin: 0 0 20px;
        font-weight: 400;
        color: #999;
      }      span {
        color: #666;
        display: block;
        padding: 0 0 5px;
      }
      form {
        padding: 25px;
        margin: 25px;
        box-shadow: 0 2px 5px #f5f5f5;
        background: #eee;
      }
      input,
      textarea {
        width: 90%;
        padding: 10px;
        margin-bottom: 20px;
        border: 1px solid #1c87c9;
        outline: none;
      }
      .contact-form button {
        width: 100%;
        padding: 10px;
        border: none;
        background: #1c87c9;
        font-size: 16px;
        font-weight: 400;
        color: #fff;
      }
      button:hover {
        background: #2371a0;
      }
      .close {
        color: #aaa;
        float: right;
        font-size: 28px;
        font-weight: bold;
      }
      .close:hover,
      .close:focus {
        color: black;
        text-decoration: none;
        cursor: pointer;
      }
      button.button {
        background: none;
        border-top: none;
        outline: none;
        border-right: none;
        border-left: none;
        border-bottom: #02274a 1px solid;
        padding: 0 0 3px 0;
        font-size: 16px;
        cursor: pointer;
      }
      button.button:hover {
        border-bottom: #a99567 1px solid;
        color: #a99567;
      }
    </style>
  </head>
  <body>
    <h2>Tambah Data Tracking</h2>
    <p>
      <button class="button" data-modal="modalOne">Tambah</button>
    </p>
    <div id="modalOne" class="modal">
      <div class="modal-content">
        <div class="contact-form">
          <a class="close">&times;</a>
          <form method="post" action="">
            <h2 >Tambah Data Tracking</h2>
            <div>
              <input class="fname" type="text" name="negara" placeholder="Negara" id="negara">
              <input type="text" name="no_resi" placeholder="No Resi" id="no_resi">
              <input type="text"  name="nm_order" id="nm_order" placeholder="Nama Order">
              <input type="text"  name="track_sts" id="nm_order" placeholder="Status Barang" id="track_sts">
            </div>
            <button type="submit" name="tombol_tambah" class="btn btn-primary" value="Tambah">Submit</button>
          </form>
        </div>
      </div>
    </div>
    <script>
      let modalBtns = [...document.querySelectorAll(".button")];
      modalBtns.forEach(function(btn) {
        btn.onclick = function() {
          let modal = btn.getAttribute('data-modal');
          document.getElementById(modal)
            .style.display = "block";
        }
      });
      let closeBtns = [...document.querySelectorAll(".close")];
      closeBtns.forEach(function(btn) {
        btn.onclick = function() {
          let modal = btn.closest('.modal');
          modal.style.display = "none";
        }
      });
      window.onclick = function(event) {
        if(event.target.className === "modal") {
          event.target.style.display = "none";
        }
      }
    </script>
  </body>
</html>