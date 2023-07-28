 <?php include('config.php')?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
 </head>
 <body>
    <div class="container">
        <div class="frist-header bg-danger p-3 text-uppercase">
            <h2 class="text-white fw-bold text-center">my information</h2>
        </div>
        <div class="my-5">
            <form action="save.php" method="post">
                <div class="row">
                    <div class="col-md-4">
                            <label for="fst_name" class="form-label fw-bold text-capitalize">First name :</label>
                            <input type="text" class="form-control" id="fst_name" name="fst_name" placeholder="enter your frist name" required>
                            <div class="valid-feedback">
                            Looks good!
                            </div>
                        </div>
                        <div class="col-md-4">
                            <label for="mid_name" class="form-label fw-bold text-capitalize">middle name :</label>
                            <input type="text" class="form-control" id="mid_name" name="mid_name" placeholder="enter your middle name" required>
                            <div class="valid-feedback">
                            Looks good!
                            </div>
                        </div>
                        <div class="col-md-4">
                            <label for="lst_name" class="form-label fw-bold text-capitalize">last name :</label>
                            <input type="text" class="form-control" id="lst_name" name="lst_name" placeholder="enter your last name" required>
                            <div class="valid-feedback">
                            Looks good!
                            </div>
                        </div>
                        <div class="col-12">
                            <label for="birthday" class="form-label text-uppercase mt-2 fw-bold">brithday :</label>
                            <input type="date" class="form-control" id="birthday" name="birthday" required placeholder="enter your birthday">
                        </div>
                        <div class="col-md-4 mt-3">
                            <label for="city" class="form-label fw-bold">City</label>
                            <input type="text" class="form-control" id="city" name="city"  placeholder="enter your city name" required>
                            <div class="invalid-feedback">
                            Please provide a valid city.
                            </div>
                        </div>
                        <div class="col-4 mt-3">
                            <label for="email" class="form-label fw-bold">Email address</label>
                            <input type="email" class="form-control" id="email" name="email" placeholder="enter your email">
                        </div>
                        <div class="col-4 mt-3">
                            <label for="number" class="form-label fw-bold">phone number</label>
                            <input type="number" class="form-control" id="number" name="number" placeholder="enter your number">
                        </div>
                        <div class="col-12 mt-3">
                            <button class="btn btn-danger fw-bold" type="submit">Submit form</button>
                        </div>
                    </div>
            </form>
        </div>

        <table class="table table-light table-striped table-hover">
            <thead class="thead-light">
                <tr>
                    <td class="text-capitalize fw-bold">serial</td>
                    <td class="text-capitalize fw-bold">fst-name</td>
                    <td class="text-capitalize fw-bold">mid-name</td>
                    <td class="text-capitalize fw-bold">lst-name</td>
                    <td class="text-capitalize fw-bold">birthday</td>
                    <td class="text-capitalize fw-bold">city</td>
                    <td class="text-capitalize fw-bold">email</td>
                    <td class="text-capitalize fw-bold">number</td>
                    <td class="text-capitalize fw-bold">action</td>
                </tr>
            </thead>
            <tbody>
                <?php 
                $query = "SELECT * FROM list_line";
                $output = $db_connection->query($query);
                $serial = 1;
                while ($data = mysqli_fetch_assoc($output)) {
                    ?>
                    <tr>
                    <td><?php echo $serial?></td>
                    <td><?php echo $data['fst_name'] ?></td>
                    <td><?php echo $data['mid_name'] ?></td>
                    <td><?php echo $data['lst_name'] ?></td>
                    <td><?php echo $data['birthday'] ?></td>
                    <td><?php echo $data['city'] ?></td>
                    <td><?php echo $data['email'] ?></td>
                    <td><?php echo $data['number'] ?></td>
                    <td>
                        <a class=" btn btn-info" href="edit.php?id=<?php echo $data['id'] ?>">edit</a>
                        <a class=" btn btn-danger" href="delete.php?id=<?php echo $data['id'] ?>">delete</a>
                    </td>
                    </tr>
                    <?php
                    $serial++;
                }
                ?>
                
            </tbody>
        </table>
    </div>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
 </body>
 </html>