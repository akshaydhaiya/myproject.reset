<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
</head>
<body>

<div class="container">
  <form action="employe" method="POST" enctype="multipart/form-data">
  <div>
  <label>Name</label>
  <input type="text" name="name" placeholder="enter name">
   </div> 

   <div >
   <div > 
  <input type="file"  name="image">
  <label class="custom-file-label">choose file </label>
   </div> 
   </div><br>
   <div>
   <button type="submit" name="submit" class="btn btn-primary"> save data</button>
   </form>
   </div>
</body>
</html>