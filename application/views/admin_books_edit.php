<?php
// Display any form validation error messages
echo validation_errors();

// Using the form helper to help create the start of the form code
echo form_open("admin_books/editbooks");
?>
<form class="form-horizontal" role="form"  >
  <div class="row">
   <div class="form-group"> 
   <div class="col-sm-2 "></div>
    <label for="book_id" class="col-lg-3 control-label"></label>
    <div class="col-lg-4">
     <input type="hidden" name="book_id" class="form-control"  value="<?= $userdata['book_id'] ?>">
    </div>
    </div>
     </div>  
     <div class="row">
   <div class="form-group"> 
   <div class="col-sm-2 "></div>
    <label for="book_title" class="col-lg-3 control-label">Book Title</label>
    <div class="col-lg-4">
     <input type="text" name="book_title" class="form-control"  value="<?= $userdata['book_title'] ?>">
    </div>
    </div>
     </div>  
     <div class="row">
   <div class="form-group"> 
   <div class="col-sm-2 "></div>
    <label for="author" class="col-lg-3 control-label">Author</label>
    <div class="col-lg-4">
     <input type="text" name="author" class="form-control"  value="<?= $userdata['author'] ?>">
    </div>
    </div>
     </div>  
     <div class="row">
   <div class="form-group"> 
   <div class="col-sm-2 "></div>
    <label for="publications" class="col-lg-3 control-label">Publication</label>
    <div class="col-lg-4">
     <input type="text" name="publications" class="form-control"  value="<?= $userdata['publications'] ?>">
    </div>
    </div>
     </div> 
    <div class="row">
   <div class="form-group"> 
   <div class="col-sm-2 "></div>
    <label for="edition" class="col-lg-3 control-label">Edition</label>
    <div class="col-lg-4">
     <input type="text" name="edition" class="form-control"  value="<?= $userdata['edition'] ?>">
    </div>
    </div>
     </div> 
    <div class="row">
   <div class="form-group"> 
   <div class="col-sm-2 "></div>
    <label for="price" class="col-lg-3 control-label">Price</label>
    <div class="col-lg-4">
     <input type="text" name="price" class="form-control"  value="<?= $userdata['price'] ?>">
    </div>
    </div>
     </div> 
  <br>
     <div class="col-lg-5"></div>
     <div class="col-lg-4">
      <input type="submit" name="submit" value="Edit Book" class="btn btn-lg btn-primary btn-block" >
  
  
    </div>
       

    </form>
  
    
    
