                <div class="tab-pane" id="agendarent" role="tabpanel" aria-labelledby="agendarent-tab">
                    <h1>HOLA5</h1>
                </div>
            </div>
        </div>
    </section>
</main>

<script src="<?=base_url()?>js/jquery.min.js"></script>
<script src="<?=base_url()?>js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pikaday/1.6.1/pikaday.min.js"></script>
<script src="<?=base_url()?>js/theme.js"></script>
<script src="<?=base_url()?>js/masy_reclutador.js"></script>


<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

<script type="text/javascript">
    $( function() {
    $( ".form_datetime" ).datepicker();
    $( ".form_datetime" ).datepicker(  "option", "showAnim", "slideDown");
    $( ".form_datetime" ).datepicker(  "option", "dateFormat", "yy-mm-dd");
  } );
</script> 

<script>
// Add the following code if you want the name of the file appear on select
$(".custom-file-input").on("change", function() {
  var fileName = $(this).val().split("\\").pop();
  $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
});
</script>

<?php

/* End of file masy_bodyreclutador_cit_view.php */
/* Location: /views/masy_bodyreclutador_cit_view.php */