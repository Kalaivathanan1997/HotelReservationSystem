<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css">

<footer class="py-4 bg-light  "style="bottom: 0;">
    <div class="container-fluid"  >
        <div class="d-flex align-items-center justify-content-between small">
            <div class="text-muted">Copyright &copy; Your Website 2020</div>
            <div>
                <a href="#">Privacy Policy</a>
                &middot;
                <a href="#">Terms &amp; Conditions</a>
            </div>
        </div>
    </div>
</footer>



<!-- ./wrapper -->
</div>

<!-- jQuery -->
<script src="{{ asset('Adminlte/plugins/jquery/jquery.min.js')}}"></script>

<!-- Bootstrap 4 -->
<!-- <script src="{{ asset('Adminlte/dist/js/adminlte.js')}}"></script> -->
<script src="{{ asset('Adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>


<!-- DataTables  & Plugins -->
<script src="{{ asset('Adminlte/plugins/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{ asset('Adminlte/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
<script src="{{ asset('Adminlte/plugins/datatables-responsive/js/dataTables.responsive.min.js')}}"></script>
<script src="{{ asset('Adminlte/plugins/datatables-responsive/js/responsive.bootstrap4.min.js')}}"></script>
<script src="{{ asset('Adminlte/plugins/datatables-buttons/js/dataTables.buttons.min.js')}}"></script>
<script src="{{ asset('Adminlte/plugins/datatables-buttons/js/buttons.bootstrap4.min.js')}}"></script>
<script src="{{ asset('Adminlte/plugins/jszip/jszip.min.js')}}"></script>
<script src="{{ asset('Adminlte/plugins/pdfmake/pdfmake.min.js')}}"></script>
<script src="{{ asset('Adminlte/plugins/pdfmake/vfs_fonts.js')}}"></script>
<script src="{{ asset('Adminlte/plugins/datatables-buttons/js/buttons.html5.min.js')}}"></script>
<script src="{{ asset('Adminlte/plugins/datatables-buttons/js/buttons.print.min.js')}}"></script>
<script src="{{ asset('Adminlte/plugins/datatables-buttons/js/buttons.colVis.min.js')}}"></script>



<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
     }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
   
   
   
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>


<!-- <script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script> -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
<script src="{{ asset('template/dist/js/scripts.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
<script src="{{ asset('template/dist/assets/demo/chart-area-demo.js')}}"></script>
<script src="{{ asset('template/dist/assets/demo/chart-bar-demo.js')}}"></script>
<!-- <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script> -->
<script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>
<script src="{{ asset('template/dist/assets/demo/datatables-demo.js')}}"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
<script>
  src="https://code.jquery.com/jquery-3.5.1.min.js"
  integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
  crossorigin="anonymous"</script>
<script src="{{ asset('Adminlte/dist/js/adminlte.js')}}"></script>

<script src="{{ asset('Adminlte/plugins/select2/js/select2.full.min.js')}}"></script>



<!-- Page specific script -->



{{-- toastr --}}
<script>
  $(function () {
    //Initialize Select2 Elements
    $('.select2').select2()

    //Initialize Select2 Elements
    $('.select2bs4').select2({
      theme: 'bootstrap4'
    })
  })
</script>


 <script>
  
       
        //toastr alert
  
    $(document).ready(function() {
        $('.toast').toast({
            delay: 4000
        });
        $('.toast').toast('show');
    });

</script>

<script>
    $(document).ready(function() {
        $('body').on('click', '#AllSwitch', function() {
            if ($(this).hasClass('allChecked')) {
                $('input[type="checkbox"]', '#example2').prop('checked', false);
            } else {
                $('input[type="checkbox"]', '#example2').prop('checked', true);
            }
            $(this).toggleClass('allChecked');
        })
    });

</script>

<script>
  @if(Session::has('message'))
    var type = "{{ Session::get('alert-type', 'info') }}";
    switch(type){
        case 'info':
            toastr.info("{{ Session::get('message') }}");
            break;
        
        case 'warning':
            toastr.warning("{{ Session::get('message') }}");
            break;

        case 'success':
            toastr.success("{{ Session::get('message') }}");
            break;

        case 'error':
            toastr.error("{{ Session::get('message') }}");
            break;
    }
  @endif
</script>  





   <script>
  $(document).on('change','#name_of_gnd',function () {
			var d_name=$(this).val();

			var a=$(this).parent();
			console.log(d_name);
			var op="";
			$.ajax({
				type:'GET',
				url:'{!!URL::to('findDiv_No')!!}',
				data:{'name':d_name},
				dataType:'json',//return data will be json
				success:function(data){
					console.log("d_no");
					console.log(data.d_no);

					// here price is coloumn name in products table data.coln name

					$('#D_No').val(data.d_no);
          $('#D_No').append('<option value="'+data.d_no+'">'+data.d_no+'</option>')

				},
				error:function(){

				}
			});


		});

 

</script> 



    <script>
  $( function() {
    $( "#datepicker" ).datepicker({dateFormat:"yy-mm-dd"}).val();
  } );
  </script> 

    <script>
    $( function() {
      $( "#datepicker1" ).datepicker({dateFormat:"yy-mm-dd"}).val();
    } );
    </script>



   <script type="text/javascript">
      $('#mail').on('change',function(){

        if(this.value==="1"){
            $('#department').show()
        }else{
            $('#department').hide()
        }
        if(this.value==="2"){
            $('#person').show()
        }else{
            $('#person').hide()
        }

      })
  </script> 
  

 


</body>
</html>
