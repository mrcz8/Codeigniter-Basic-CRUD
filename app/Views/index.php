<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Codeigniter</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <div class="container mt-5">
        <button class="btn btn-primary" onclick="myFunction()">Add User</button>
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($user as $item): ?>
                <tr>
                    <td><?=$item['id'] ?></td>
                    <td><?=$item['name'] ?></td>
                    <td><?=$item['email'] ?></td>
                    <td>
                        <a href="/edit/<?=$item['id'] ?>" class="btn btn-secondary" >Edit</a>
                        <a href="/destroy/<?=$item['id'] ?>" class="btn btn-danger" >Delete</a>
                        
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>

        </table>




        <div class="modal fade" id="addModal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                
                <h5 class="modal-title" id="exampleModalLabel">Add User</h5>
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <?= form_open('/store') ?>
                <div class="form-group">
                    <label for="name" class="col-form-label">Name</label>
                    <input type="text" class="form-control" name="name">
                </div>
                <div class="form-group">
                    <label for="email" class="col-form-label">Email</label>
                    <input type="email" class="form-control" name="email">
                </div>
                
                <button type="button" class="btn btn-danger mt-5" data-bs-dismiss="modal">Cancel</button>
                <button type="submit" class="btn btn-primary mt-5 mr-2">Add</button>
                <?= form_close() ?>

            </div>
            </div>
        </div>
        </div>


        



    

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script>
    function myFunction(){
        $('#addModal').modal('show') 
    }
    function close(){
        $('#exampleModal').modal('hide') 
    }

    function updateModal(){
        $('#updateModal').modal('show') 
    }
    function close(){
        $('#updateModal').modal('hide') 
    }
</script>
</body>
</html>