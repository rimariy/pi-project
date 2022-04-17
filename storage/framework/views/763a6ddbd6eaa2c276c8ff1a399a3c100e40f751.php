<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student</title>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">

<style>
  .btn-outline-light {
    color: #000000;
    border-color: #f8f9fa;
  }
  #draggable { 
    width: 150px;
        height: 150px;
        padding: 0.5em;
  }
}
/* #sortable { list-style-type: none; margin: 0; padding: 0; width: 60%; }
  #sortable li { margin: 0 3px 3px 3px; padding: 0.4em; padding-left: 1.5em; font-size: 1.4em; height: 18px; }
  #sortable li span { position: absolute; margin-left: -1.3em; } */
  </style>
    
</head>
<body>
<!--------------------------------------------Navbar--------------------------------------------->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">University</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        <a class="nav-link active" href="<?php echo e(route('student.index')); ?>">Students</a>
        <a class="nav-link active" href="<?php echo e(route('Courses.index')); ?>">Courses</a>
      </div>
    </div>
    <div class="d-flex">
      <form id="logout-form" class="link-dark" action="<?php echo e(route('logout')); ?>" method="POST" class="d-none">
        <?php echo csrf_field(); ?>
        <button class="btn btn-outline-light">Log out</button>
    </form>
    
    </div>
  </div>
</nav>
<!---------------------------------------------End Navbar------------------------------------------>

<?php echo $__env->yieldContent('content'); ?>


<!------------------------------------------------------------------------------------------------->



<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

<script src="https://code.jquery.com/jquery-3.4.1.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script>
  $( function() {
    $( "#padding-item-drop, #complete-item-drop" ).sortable({
      connectWith: ".connectedSortable",
      opacity: 0.5,
    });
    $( ".connectedSortable" ).on( "sortupdate", function( event, ui ) {
        var pending = [];
        var accept = [];
        $("#padding-item-drop li").each(function( index ) {
          if($(this).attr('item-id')){
            pending[index] = $(this).attr('item-id');
          }
        });
        $("#complete-item-drop li").each(function( index ) {
          accept[index] = $(this).attr('item-id');
        });
        $.ajax({
            url: "<?php echo e(route('update.task')); ?>",
            method: 'POST',
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            data: {pending:pending,accept:accept},
            success: function(data) {
              console.log('success');
            }
        });
          
    });
  });
</script>
</body>
</html>








<?php /**PATH C:\xampp\htdocs\Tus5_4_2022\resources\views/layouts/app2.blade.php ENDPATH**/ ?>