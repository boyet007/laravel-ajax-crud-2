<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Document</title>
  </head>
  <body>     
      <!-- Add Student Data Modal -->
      <div class="modal fade" id="studentaddmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <form id="addform">
                <div class="modal-body">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label>First Name</label>
                        <input type="text" class="form-control" name="fname" placeholder="Enter First Name">
                    </div>
                    <div class="form-group">
                        <label>Last Name</label>
                        <input type="text" class="form-control" name="lname" placeholder="Enter Last Name">
                    </div>
                    <div class="form-group">
                        <label>Course</label>
                        <input type="text" class="form-control" name="course" placeholder="Enter Course">
                    </div>
                    <div class="form-group">
                        <label>Section</label>
                        <input type="text" class="form-control" name="section" placeholder="Enter Section">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save Student Data</button>
                </div>
            </form>
          </div>
        </div>
      </div>

    <div class="container">
        <div class="jumbotron">
            <div class="row">
                <div class="h1">Laravel crud ajax jquery using bootstrap modal</div>
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#studentaddmodal">
                    Student Add Data
                </button>
            </div>
        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            // addform id dari form, submit tombolnya
            $('#addform').on('submit', function(e) {
                e.preventDefault()
                $.ajax({
                    type : 'POST',
                    url : '/studentadd',
                    data : $('#addform').serialize(),
                    success: function(response) {
                        console.log(response)
                        $('#studentaddmodal').modal('hide')
                        alert('Data Saved');
                    },
                    error : function(error) {
                        console.log(error)
                        alert('Data not saved')
                    }
                })
            })
        })
    </script>
</body>
</html>