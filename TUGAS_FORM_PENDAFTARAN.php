<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body bgcolor="	#ADD8E6">
<title>INPUT COSTUMER</title> 
<form id="PENDAFTARAN" action="FORMTAMPILAN.php" method="post">
  <div class="container" align="center">    
   <h1>FORMULIR PENDAFTARAN</h1>
   <p>
     <label class="form-label" align="left">Nama Lengkap</label>
     <input class= "form_input" type="text" placeholder="Enter Nama" name="Name">
   <p>
     <label class="form-label" align="left">Alamat</label>
     <input class= "form_input" type="text" placeholder="Enter Alamat" name="Alamat">
   <p>
     <label class="form-label" align="left">Tempat Lahir</label>
     <input class= "form_input" type="text" placeholder="Enter Tempat lahir" name="Tempat_Lahir">
   <p>
     <label class="form-label" align="left">Tanggal Lahir</label>
     <input class= "form_input" type="date" name="Tanggal_Lahir" value="<?php echo date("d-m-Y"); ?>">
   <p>  
     <label class="form-label" align="left">Email:</label>
     <input class= "form_input" type="text" placeholder="Enter Email"name="Email">  
   <p>
   <label class="form-label" align="left">Jenis Kelamin</label>
   <select class="form-select" type="text" id="jenisKelamin" name="jenisKelamin">
      <option value="L">Laki-laki</option>
      <option value="P">Perempuan</option>
   </select>
   <p>    
     <input class="Confirmbutton" type="submit" value="CONFIRM">
     <input class="Clearbutton" type="reset" value="CLEAR DATA">
<style>
  body {
        font-family:Algerian;
       } 
  h1{color:#191970}
  p{color:#FF8C00}

     .container 
                {
                 width: 500px;
                 margin: 0 auto;
                 padding: 20px;
                 border: 2px solid #ccc;
                 border-radius: 5px;
                 background: #F8F8FF;
                }
     .form-label
                {
                 display: block;
                 margin-bottom: 10px;
                }
     .form_input 
                {
                 width: 92%;
                 padding: 8px;
                 border: 1px solid #ccc;
                 border-radius: 3px;
                 padding-right: 30px;
                }
      .form-select 
                {
                 width: 100%;
                 padding: 8px;
                 border: 1px solid #ccc;
                 border-radius: 3px;
                 padding-right: 30px;
                }
              
       input[type=text]:focus, input[type=date]:focus
                {
                 background-color: #ddd;
                 outline: none;
                }
      select[type=text]:focus
                {
                 background-color: #ddd;
                 outline: none;
                }
      .Confirmbutton 
                {
                 background-color: #FFD700;
                 padding: 10px 20px;
                 border: none;
                 border-radius: 3px;
                 cursor: pointer;

                }
      .Clearbutton
                {
                 background-color:	#FFD700;
                 padding: 10px 20px;
                 border: none;
                 border-radius: 3px;
                 cursor: pointer;
                }
      .Confirmbutton, .Clearbutton {
                 color: #19197;
                 font-family: poppins;
                 word-spacing: 5px;
                 letter-spacing: 3px;
                }                    

            
    </style>
  </div>                 
</form>            
</body>
</html>