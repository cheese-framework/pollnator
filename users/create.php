<?php include_once './includes/header.php'; ?>
<div class="row my-3 mx-auto">
    <div class="col-lg-7">
        <h3 class="text-center">Create new Poll</h3>
        <form action="" method="post" autocomplete="off">
            <p class="text-sm-right text-warning">All fields marked (*), are required</p>
            <div class="form-group">
                <label for="title"><b class="text-danger">* </b>Title of Poll: </label>
                <input type="text" name="title" placeholder="Title of Poll" class="form-control"/>
            </div>

            <div class="form-group">
                <label for="description">Description: </label>
                <textarea name="description" placeholder="Poll Description" class="form-control" cols="5" rows="5"/></textarea>
            </div>

            <div class="form-group">
                <label for="options"><b class="text-danger">* </b>Choices (Separate by a comma [,]): </label>
                <input type="text" name="options" placeholder="Separate by a comma (,)" class="form-control"/>
            </div>

            <div class="form-group">
                <label for="expiry"><b class="text-danger">* </b>Expires: </label>
                <input type="date" name="expiry" placeholder="Expiry Date" class="form-control"/>
            </div>

            <div class="form-group">
                <label for="publish">Publish Now?: &nbsp; &nbsp;</label>
                <input type="checkbox" name="publish" class="form-check-inline"/>
            </div>

            <div class="form-group">
                <input type="submit" value="Save" class="btn btn-linkedin"/>
            </div>
        </form>
    </div>
</div>
<?php include_once './includes/footer.php'; ?>

