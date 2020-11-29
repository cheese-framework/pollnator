<?php include_once './includes/header.php'; ?>
<div class="row my-3 mx-auto">
    <h3 class="text-center">Manage Feedback</h3>
    <div class="table-responsive table-responsive-sm table-responsive-lg">
        <table class="table table-bordered table-dark table-hover table-striped">
            <thead>
                <tr>
                    <th>From</th>
                    <th>On Poll</th>
                    <th>Feedback</th>
                    <th>Status</th>
                    <th colspan="3" class="text-center">Actions</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Idris Jimoh</td>
                    <td>
                        How to Chase
                    </td>
                    <td>This is not helpful at all, take it down</td>
                    <td>Unapproved</td>
                    <td><a href="#" class="btn btn-youtube">Delete</a></td>
                    <td><a href="#" class="btn btn-github">Change Status</a></td>
                </tr>
                <tr>
                    <td>Kemo Sillah</td>
                    <td>
                        How to Chase
                    </td>
                    <td>Plur Plur Gang benefits from this poll</td>
                    <td>Approved</td>
                    <td><a href="#" class="btn btn-youtube">Delete</a></td>
                    <td><a href="#" class="btn btn-github">Change Status</a></td>
                </tr>
                <tr>
                    <td>Idris Jimoh</td>
                    <td>
                        How to Chase
                    </td>
                    <td>I take my words back, this is awesome</td>
                    <td>Unapproved</td>
                    <td><a href="#" class="btn btn-youtube">Delete</a></td>
                    <td><a href="#" class="btn btn-github">Change Status</a></td>
                </tr>
            </tbody>
        </table>

    </div>

    <div class="col-lg-4 mx-auto my-3">
        <ul class="pagination">
            <li class="page-item">
                <a class="page-link" href="#">1</a>
            </li>
            <li class="page-item">
                <a class="page-link" href="#">Prev</a>
            </li>
            <li class="page-item">
                <a class="page-link" href="#">Next</a>
            </li>
            <li class="page-item">
                <a class=" page-link" href="#">12</a>
            </li>
        </ul>
    </div>
</div>
<?php include_once './includes/footer.php'; ?>

