<?php include "includes/header.php";?>
<?php registerMe($connected);?>
<div class="container" style="margin-top: calc(1vw + 1em);">
<form method="post" action="">
<div class="form-row">
  <div class="form-group col-md-6">
    <label for="name">Imię</label>
    <input type="text" class="form-control" name="name" placeholder="Imię">
  </div>
  <div class="form-group col-md-6">
    <label for="surname">Nazwisko</label>
    <input type="text" class="form-control" name="surname" placeholder="Nazwisko">
  </div>
</div>

  <div class="form-group">
  <label for="sel1">Wybór 1: </label>
  <select class="form-control" id="sel1"  name="sel1" onchange="checkForm(this);">
    <option>1</option>
    <option id="rol">Rola</option>
    <option>3</option>
    <option>4</option>
  </select>
</div>

<div id="selection2" class="form-group" style="display: none;">
  <label for="sel2">Wybór 2:</label>
  <select class="form-control" name="sel2" id="sel2"
    <option>1</option>
    <option>2</option>
    <option>3</option>
    <option>4</option>
  </select>
</div>
    <div class="form-check form-check-inline">
    <input  id="checker" class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1" onchange="rodoAccepted(this);">
    <label class="form-check-label" for="inlineCheckbox1">RODO</label>
    </div>
    <button disabled id="send" name="send" class="btn btn-success"> Wyslij </button>
   
    
</form>
</div>




