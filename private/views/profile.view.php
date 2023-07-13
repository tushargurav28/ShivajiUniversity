<?php $this->view('/includes/header');?>
<?php $this->view('/includes/nav');?>


<div class="container-fluid p-4 shadow mt-4 " style="max-width: 1000px;">

    <?php $this->view('/includes/crumbs');?>
    <div class="row">
        <div class="col-sm-4">
            <img src="<?=ASSETS?>femaleLogo.png" style="width :170px"
                class=" border broder-primary d-block mx-auto rounded-circle"">
                <h3 class=" text-center">Swarali Pawar</h3>
        </div>
        <div class=" col-sm-8 bg-light p-2">
            <table class="table  table-hover table-striped table-bodered">
                <tr>
                    <th>First Name</th>
                    <td>Swarali</td>
                </tr>
                <tr>
                    <th>Last Name</th>
                    <td>Pawar</td>
                </tr>
                <tr>
                    <th>Gender</th>
                    <td>Female</td>
                </tr>
                </tr>
                <tr>
                    <th>Created Date</th>
                    <td>2023-1-10</td>
                </tr>
            </table>
        </div>
    </div>
    <br>
    <hr>
    <div class="container-fulid">
        <ul class="nav nav-tabs">
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Basic Info</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Classes</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Tests</a>
            </li>
        </ul>

        <nav class="navbar bg-body-tertiary">
            <form class="form-inline">
                <div class="input-group">
                    <span class="input-group-text" id="basic-addon1"><i class="fa-solid fa-magnifying-glass"></i></span>
                    <input type="text" class="form-control" placeholder="Username" aria-label="Username"
                        aria-describedby="basic-addon1">
                </div>
            </form>
        </nav>


    </div>
</div>



<?php $this->view('/includes/footer');?>