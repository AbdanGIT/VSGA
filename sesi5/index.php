<!DOCTYPE html> 
<html lang="en"> 
  <head> 
    <meta charset="UTF-8" /> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0" /> 
    <title>Belajar Fungsi di javascript</title> 
  </head> 
 
  <body> 
    <fieldset> 
      <legend>Input form</legend> 
      <input type="text" name="barang" placeholder="input nama barang..." /> 
      <input type="button" onclick="addBarang()" value="Tambah" /> 
    </fieldset> 
 
    <div> 
      <ul id="list-barang"></ul> 
    </div> 
 
    <script src="fungsi.js"></script> 
  </body> 
</html>