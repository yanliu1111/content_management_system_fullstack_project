<form action="" method="post">
    <div class="form-group">
        <label for="cat_title">Update Category</label>
        <!-- change the sequence of update query and read query
    Once the category is changed, the form field still displays the the original value, not the updated value. I added an else statement to clear the form from the page.
    -->
        <?php // update query
                                if (isset($_POST['update_category'])){
                                    $the_cat_id = $_POST['cat_title'];
                                    $query = "UPDATE categories SET cat_title = '{$the_cat_id}' WHERE cat_id = {$cat_id}";
                                    $update_query = mysqli_query($connection, $query);
                                }
                                ?>
        <?php // update and include query
                                if (isset($_GET['edit'])){
                                    $cat_id = $_GET['edit'];
                                    $query = "SELECT * FROM categories WHERE cat_id = $cat_id";
                                    $select_categories_id = mysqli_query($connection, $query); 
                                    
                                   while ($row=mysqli_fetch_assoc ($select_categories_id)){
                                   $cat_id = $row['cat_id'];
                                   $cat_title = $row['cat_title']; ?>
        <input value="<?php
                                    if (isset($cat_title)){
                                        echo $cat_title;} ?>" type="text" class="form-control" name="cat_title">

        <?php }}
                                ?>



    </div>
    <div class="form-group">
        <input class="btn btn-primary" type="submit" name="update_category" value="Update Category">
    </div>
</form>