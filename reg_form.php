
  <form action = "save_user.php" method = "post" class="row g-3">
  <div class="col-md-4">
    <label for="validationDefault01" class="form-label">Имя</label>
    <input name="name" type="text" class="form-control" id="name" value="Иван" required>
  </div>
  <div class="col-md-4">
    <label for="validationDefault02" class="form-label">Телефон</label>
    <input name="phone" type="text" class="form-control" id="phone" value="Петров" required>
  </div>
  
  <div class="col-md-6">
    <label for="validationDefault03" class="form-label">Почта</label>
    <input name="email" type="text" class="form-control" id="email" required>
  </div>
  <div class="col-md-6">
    <label for="validationDefault03" class="form-label">Пороль</label>
    <input name="password" type="text" class="form-control" id="password" required>
  </div>
  
  <div class="col-md-3">
    <label for="validationDefault05" class="form-label">Паспорт</label>
    <input name="passport" type="text" class="form-control" id="passport" required>
  </div>
  <div class="col-12">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" value="" id="invalidCheck2" required>
      <label class="form-check-label" for="invalidCheck2">
        Примите условия и соглашения
      </label>
    </div>
  </div>
  <div class="col-12">
    <button class="btn btn-primary" type="submit">Отправить форму</button>
  </div>
</form>


