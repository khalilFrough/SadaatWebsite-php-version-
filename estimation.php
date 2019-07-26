<!DOCTYPE html>
<html lang="en">
<?php
include dirname(__FILE__).'/includes/externalJavaScript.php';
include dirname(__FILE__).'/includes/tools.php';
printHead('estimation')?>
<body>
 <!-- including the head  -->
 <?php include dirname(__FILE__).'/includes/head.php';?> 
<!-- the main body stats from here -->
<div class="container">
  <div class="estimation-page">
    <h1 class="heading">Get a simple estimation</h1>
    <h2 class="sub-heading">Simply fill in the fileds and get a calculation on your work</h2>
      <!-- *********** card starts from here ******* -->
        <div class="estimation-card">
          <!-- form starts here -->
          <form>
          <div class="form-group">
          </div>
          <div class="form-group">
            <label for="width">Total Width:</label>
            <input type="text" name="width" class="form-control" id="width" placeholder="Please Enter the total Width">
          </div>
          <div class="form-group">
            <label for="heigth">Total Height:</label>
            <input type="text" name="height" class="form-control" id="height" placeholder="Please Enter the total Height">
          </div>
          <div class="form-group">
            <label for="select">Select One of The Services:</label>
            <select class="form-control form-control-lg " name="category" id="category">
              <option value="null"></option>
              <option value="tile">Tile</option>
              <option value="stone">Stone</option>  
              <option value="level">Leveling</option>
              <option value="water_proof">WaterProof Only</option>
            </select>
          </div>
          <br>
          <button type="submit" id="submit" class="btn">Calculate</button>
          <h2 class="sub-heading">Display Results</h2>
          <div class="form-group display-results">
          <label for="totalArea">Total Area</label>
            <input type="number" class="form-control" name="totalArea"id="totalArea"disabled>
            <label for="totalAmount">Total Amount</label>
            <input type="number" class="form-control" name="totalAmount"id="totalAmount"disabled>
          </div>
  
          
      </form>
      <!-- loading class -->
      <div class="loading">
        <img src="../media/loading.gif" alt="Loading Picture">
      </div>

          <!-- form finishes here -->
        </div>

      <!-- *********** card finishes here *********** -->

  </div>
</div>
<!-- the main body finishes here -->

<!-- footer starts from here -->
<?php include dirname(__FILE__).'/includes/footer.php';?>
  </body>
</html>