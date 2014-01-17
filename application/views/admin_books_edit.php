<?php
// Display any form validation error messages
echo validation_errors();

// Using the form helper to help create the start of the form code
echo form_open("admin_books/editbooks");
?>
<table>
    <tr> <td> <label for="book_id">Book Id</label>
        <td> <input type="text" name="book_id" size="11" value="<?= $userdata['book_id'] ?>"><br>

    <tr> <td>  <label for="book_title" >Book Title</label>
        <td>   <input type="text" name="book_title" size="11" value="<?= $userdata['book_title'] ?>"><br>

    <tr> <td> <label for="author">Author Name</label>
        <td> <input type="text" name="author" size="11" value="<?= $userdata['author'] ?>"><br>


    <tr> <td> <label for="publications">Publications</label>
        <td> <input type="text" name="publications" size="11" value="<?= $userdata['publications'] ?>"><br>


    <tr> <td> <label for="edition">Edition</label>
        <td>  <input type="text" name="edition" size="11" value="<?= $userdata['edition'] ?>"><br></tr>

    <tr> <td> <label for="price">Price</label>
        <td> <input type="text" name="price" size="11" value="<?= $userdata['price'] ?>"><br>


    <tr> <td> <input type="submit" name="submit" value="Edit Books">
</table>
</form>
</html>