<!DOCTYPE html>
<html>
<body>
    
<?php

    print_r($_GET['cars']); ?>
    
<form action="">
<select name="cars[]" multiple>
  <option value="volvo">Volvo</option>
  <option value="saab">Saab</option>
  <option value="opel">Opel</option>
  <option value="audi">Audi</option>
</select>
<input type="submit">
</form>

<p>Hold down the Ctrl (windows) / Command (Mac) button to select multiple options.</p>

</body>
</html>
