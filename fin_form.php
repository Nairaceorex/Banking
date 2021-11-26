<br>
<br>
<div class="container-sm" >
  <form action = "fin_eng.php" method = "post">
    <div class="p-3 mb-2 bg-primary text-white" class="rounded-3" width="500px";>
      <div class="row g-2" >
      <div class="col-md-3">
    <label for="validationDefault01" class="form-label">Название</label>
    <input type="text" name="title" class="form-control" id="title" value="" required>
  </div>

  <div class="col-md-3">
    <label for="validationDefault05" class="form-label">Тип</label>
    <input type="text" name="class" class="form-control" id="validationDefault05" required>
  </div>

  
    </div>
  
  
<div class="row g-3">
  <div class="col-md-3">
    <label for="validationDefault02" class="form-label">Кол-во</label>
    <input type="text" name="quantity" class="form-control" id="validationDefault02" value="" required>
  </div>
  <div class="col-md-3">
    <label for="validationDefault05" class="form-label">Цена за единицу</label>
    <input type="text" name="price" class="form-control" id="validationDefault05" required>
  </div>
</div> 
<br> 
  <div class="row g-3">
    <div class="col-3">
    
<!--select class="form-select" aria-label="Default select example">
  <option selected>Операция</option>
  <option value="1">One</option>
  <option value="2">Two</option>
  <option value="3">Three</option>
</select-->
  </div>
  </div>
  <br>
  <div class="col-12">
    <button class="btn btn-success" type="submit">Ввести</button>
  </div>
    </div>
    
</form>
<!--
<?php if(!isset($_POST['draw'])) : ?>
 
<form method="post">
  <input type="submit" name="draw" value="Draw" />
</form>
 
<?php else : ?>
 
<form method="post">
  <input type="text" name="text" />
  <input type="submit" name="clear" value="Clear" />
</form>
 
<?php endif; ?>-->
</div>

