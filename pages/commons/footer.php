

  <footer class="main-footer">

    <strong>Copyright &copy; 2020 <a href="#">Embaixada</a>.</strong>

  </footer>

 

  <!-- Control Sidebar -->

  <aside class="control-sidebar control-sidebar-dark">

    <!-- Control sidebar content goes here -->

  </aside>

  <!-- /.control-sidebar -->

</div>

<!-- ./wrapper -->



<!-- jQuery -->

<script src="../../../Embaixada/assets/plugins/jquery/jquery-3.3.1.min.js"></script>

<script src="../../../Embaixada/assets/plugins/jquery/jquery-3.5.1.js"></script>

<script src="../../../Embaixada/assets/plugins/jquery/jquery.min.js"></script>

<script src="../../../Embaixada/assets/table/js/jquery.dataTables.min.js"></script>

<script src="../../../Embaixada/assets/table/js/dataTables.bootstrap4.min.js"></script>

 



<!-- jQuery UI 1.11.4 -->

<script src="../../../Embaixada/assets/plugins/jquery-ui/jquery-ui.min.js"></script>

<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->

<script>

  $.widget.bridge('uibutton', $.ui.button)

</script>



<!-- Bootstrap 4 -->

<script src="../../../Embaixada/assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>



<!-- Select2 -->

<script src="../../../Embaixada/assets/plugins/select2/js/select2.full.min.js"></script>



<!-- Bootstrap4 Duallistbox -->

<script src="../../../Embaixada/assets/plugins/bootstrap4-duallistbox/jquery.bootstrap-duallistbox.min.js"></script>



<!-- InputMask -->

<script src="../../../Embaixada/assets/plugins/moment/moment.min.js"></script>

<script src="../../../Embaixada/assets/plugins/inputmask/min/jquery.inputmask.bundle.min.js"></script>



<!-- date-range-picker -->

<script src="../assets/plugins/daterangepicker/daterangepicker.js"></script>



<!-- bootstrap color picker -->

<script src="../../../Embaixada/assets/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js"></script>


<script src="../../../Embaixada/assets/plugins/bootstrap-switch/js/bootstrap-switch.min.js"></script>

<script src="../../../Embaixada/assets/plugins/chart.js/Chart.min.js"></script>



<!-- Sparkline -->

<script src="../../../Embaixada/assets/plugins/sparklines/sparkline.js"></script>



<!-- JQVMap -->

<script src="../../../Embaixada/assets/plugins/jqvmap/jquery.vmap.min.js"></script>

<script src="../../../Embaixada/assets/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>



<!-- jQuery Knob Chart -->

<script src="../../../Embaixada/assets/plugins/jquery-knob/jquery.knob.min.js"></script>



<!-- daterangepicker -->

<script src="../../../Embaixada/assets/plugins/moment/moment.min.js"></script>

<script src="../../../Embaixada/assets/plugins/daterangepicker/daterangepicker.js"></script>

<script src="../../../Embaixada/assets/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>

<script src="../../../Embaixada/assets/plugins/summernote/summernote-bs4.min.js"></script>

<script src="../../../Embaixada/assets/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>

<script src="../../../Embaixada/assets/dist/js/adminlte.js"></script>


<script src="../../../Embaixada/assets/dist/js/pages/dashboard.js"></script>

<script src="../../../Embaixada/assets/dist/js/demo.js"></script>

<script src="../../../Embaixada/assets/plugins/jquery-validation/jquery.validate.min.js"></script>

<script src="../../../Embaixada/assets/plugins/jquery-validation/additional-methods.min.js"></script>

<script src="../../../Embaixada/assets/plugins/moment/moment.min.js"></script>

<script src="../../../Embaixada/assets/plugins/fullcalendar/main.min.js"></script>

<script src="../../../Embaixada/assets/plugins/fullcalendar-daygrid/main.min.js"></script>

<script src="../../../Embaixada/assets/plugins/fullcalendar-timegrid/main.min.js"></script>

<script src="../../../Embaixada/assets/plugins/fullcalendar-interaction/main.min.js"></script>

<script src="../../../Embaixada/assets/plugins/fullcalendar-bootstrap/main.min.js"></script>

<script src='../../../Embaixada/assets/calendar/js/personalizado.js'></script>

<script>

  $(function () {

    //Initialize Select2 Elements

    $('.select2').select2()



    //Initialize Select2 Elements

    $('.select2bs4').select2({

      theme: 'bootstrap4'

    })



    //Datemask dd/mm/yyyy

    $('#datemask').inputmask('dd/mm/yyyy', { 'placeholder': 'dd/mm/yyyy' })

    //Datemask2 mm/dd/yyyy

    $('#datemask2').inputmask('mm/dd/yyyy', { 'placeholder': 'mm/dd/yyyy' })

    //Money Euro

    $('[data-mask]').inputmask()



    //Date range picker

    $('#reservationdate').datetimepicker({

        format: 'L'

    });



    $('#mensalidade_vencimento').datetimepicker({

        format: 'L'

    });



    $('#avaliacao_fim').datetimepicker({

        format: 'L'

    });

    

    $('#anual').datetimepicker({

        format: 'L'

    });



    $('#mensalidade_cobranca').datetimepicker({

        format: 'L'

    });

    

    $('#mensalidade_vencimento').datetimepicker({

        format: 'L'

    });



    $('#edit_vencimento').datetimepicker({

        format: 'L'

    });

    $('#edit_cobranca').datetimepicker({

        format: 'L'

    });



    $('#documento_admissao').datetimepicker({

        format: 'L'

    });

   

    $('#documento_vencimento').datetimepicker({

        format: 'L'

    });

   

    $('#aluno_datanascimento').datetimepicker({

        format: 'L'

    });

 

    //Date range picker

    $('#reservation').daterangepicker()

    //Date range picker with time picker

    $('#reservationtime').daterangepicker({

      timePicker: true,

      timePickerIncrement: 30,

      locale: {

        format: 'MM/DD/YYYY hh:mm A'

      }

    })

    

    //Date range as a button

    $('#daterange-btn').daterangepicker(

      {

        ranges   : {

          'Today'       : [moment(), moment()],

          'Yesterday'   : [moment().subtract(1, 'days'), moment().subtract(1, 'days')],

          'Last 7 Days' : [moment().subtract(6, 'days'), moment()],

          'Last 30 Days': [moment().subtract(29, 'days'), moment()],

          'This Month'  : [moment().startOf('month'), moment().endOf('month')],

          'Last Month'  : [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]

        },

        startDate: moment().subtract(29, 'days'),

        endDate  : moment()

      },

      function (start, end) {

        $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'))

      }

    )



    //Timepicker

    $('#timepicker').datetimepicker({

      format: 'LT'

    })



    $('#horarioInicio').datetimepicker({

      format: 'LT'

    })



    $('#horarioFim').datetimepicker({

      format: 'LT'

    })

    $('#hora_fim').datetimepicker({

      format: 'LT'

    })



    

    //Bootstrap Duallistbox

    $('.duallistbox').bootstrapDualListbox()



    //Colorpicker

    $('.my-colorpicker1').colorpicker()

    //color picker with addon

    $('.my-colorpicker2').colorpicker()



    $('.my-colorpicker2').on('colorpickerChange', function(event) {

      $('.my-colorpicker2 .fa-square').css('color', event.color.toString());

    });



    $("input[data-bootstrap-switch]").each(function(){

      $(this).bootstrapSwitch('state', $(this).prop('checked'));

    });



  })

  $(document).ready(function () {

    bsCustomFileInput.init();

  });

</script>



<script>

  $(function () {



    /* initialize the external events

     -----------------------------------------------------------------*/

    function ini_events(ele) {

      ele.each(function () {



        // create an Event Object (http://arshaw.com/fullcalendar/docs/event_data/Event_Object/)

        // it doesn't need to have a start or end

        var eventObject = {

          title: $.trim($(this).text()) // use the element's text as the event title

        }



        // store the Event Object in the DOM element so we can get to it later

        $(this).data('eventObject', eventObject)



        // make the event draggable using jQuery UI

        $(this).draggable({

          zIndex        : 1070,

          revert        : true, // will cause the event to go back to its

          revertDuration: 0  //  original position after the drag

        })



      })

    }



    ini_events($('#external-events div.external-event'))



    /* initialize the calendar

     -----------------------------------------------------------------*/

    //Date for the calendar events (dummy data)

    var date = new Date()

    var d    = date.getDate(),

        m    = date.getMonth(),

        y    = date.getFullYear()



    var Calendar = FullCalendar.Calendar;

    var Draggable = FullCalendarInteraction.Draggable;



    var containerEl = document.getElementById('external-events');

    var checkbox = document.getElementById('drop-remove');

    var calendarEl = document.getElementById('calendar');



    // initialize the external events

    // -----------------------------------------------------------------



    new Draggable(containerEl, {

      itemSelector: '.external-event',

      eventData: function(eventEl) {

        console.log(eventEl);

        return {

          title: eventEl.innerText,

          backgroundColor: window.getComputedStyle( eventEl ,null).getPropertyValue('background-color'),

          borderColor: window.getComputedStyle( eventEl ,null).getPropertyValue('background-color'),

          textColor: window.getComputedStyle( eventEl ,null).getPropertyValue('color'),

        };

      }

    });



    var calendar = new Calendar(calendarEl, {

      plugins: [ 'bootstrap', 'interaction', 'dayGrid', 'timeGrid' ],

      header    : {

        left  : 'prev,next today',

        center: 'title',

        right : 'dayGridMonth,timeGridWeek,timeGridDay'

      },

      'themeSystem': 'bootstrap',

      //Random default events



      editable  : true,

      droppable : true, // this allows things to be dropped onto the calendar !!!

      drop      : function(info) {

        // is the "remove after drop" checkbox checked?

        if (checkbox.checked) {

          // if so, remove the element from the "Draggable Events" list

          info.draggedEl.parentNode.removeChild(info.draggedEl);

        }

      }    

    });



    calendar.render();

    // $('#calendar').fullCalendar()



    /* ADDING EVENTS */

    var currColor = '#3c8dbc' //Red by default

    //Color chooser button

    var colorChooser = $('#color-chooser-btn')

    $('#color-chooser > li > a').click(function (e) {

      e.preventDefault()

      //Save color

      currColor = $(this).css('color')

      //Add color effect to button

      $('#add-new-event').css({

        'background-color': currColor,

        'border-color'    : currColor

      })

    })

    $('#add-new-event').click(function (e) {

      e.preventDefault()

      //Get value and make sure it is not null

      var val = $('#new-event').val()

      if (val.length == 0) {

        return

      }



      //Create events

      var event = $('<div />')

      event.css({

        'background-color': currColor,

        'border-color'    : currColor,

        'color'           : '#fff'

      }).addClass('external-event')

      event.html(val)

      $('#external-events').prepend(event)



      //Add draggable funtionality

      ini_events(event)



      //Remove event from text input

      $('#new-event').val('')

    })

  })

</script>



</body>

</html>