<!-- <script type="text/javascript">
	$(".btn_open_modal_add_pendidikan").click(function(){
    var data = $(this).data("items"); //ambil data
    //data = JSON.parse(data); //gunakan ini jika data tidak muncul
    console.log(data['id_nip']);
    id_nip = data['id_nip'];
    //event listener saat modal mau muncul
    $("#ModalTambahPendidikan").on("show.bs.modal", function(){ 
        //Att yang akan dikirim
        var institusi = $('#m_pen_institusi').val();
        var tingkat = $('#m_pen_tingkat').val();
        var program_studi = $('#m_pen_p_studi').val();
        var tgl_lulus = $('#m_pen_tgl_lulus').val();
        var ipk = $('#m_pen_ipk').val();

        $.ajax({
            type: "POST", 
            url: "<?= base_url()?>Pegawai/p_edit_pegawai", 
            data: {
                id_service : data['id_service'] }, 
            dataType: "json",
            beforeSend: function(e) {
                if(e && e.overrideMimeType) {
                    e.overrideMimeType("application/json;charset=UTF-8");
                }
            },
            success: function(response){ 
                 $(".checklist").html(response.element_checklist).show();
                 $(".checklist_2").html(response.element_checklist_2).show();
                 
                 $(".timeline").html(response.element_timeline).show();
            },
            error: function (xhr, ajaxOptions, thrownError) { 
                alert(xhr.responseText);
            }
        });

        $('.close').click(function() {
            setTimeout(function() {
                        location.reload();
                    }, 50);
        });
    })
});
</script> -->