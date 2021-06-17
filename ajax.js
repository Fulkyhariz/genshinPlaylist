$(document).ready(function() {

    //load data mahasiswa saat aplikasi dijalankan 
    loadData();

    //Load form add
    $("#contentData").on("click", "#addButton", function() {
        $.ajax({
            url: 'form-add.php',
            type: 'get',
            success: function(data) {
                $('#contentData').html(data);
            }
        });
    });

    //Load form edit dengan parameter idlist
    $("#contentData").on("click", "#EditButton", function() {
        var idlist = $(this).attr("value");
        $.ajax({
            url: 'form-edit.php',
            type: 'get',
            data: {
                idlist: idlist
            },
            success: function(data) {
                $('#contentData').html(data);
            }
        });
    });

    //button batal
    $("#contentData").on("click", "#cancelButton", function() {
        loadData();
    });

    //simpan data mahasiswa
    $("#contentData").on("submit", "#formadd", function(e) {
        e.preventDefault();
        $.ajax({
            url: 'service.php?action=save',
            type: 'post',
            data: $(this).serialize(),
            success: function(data) {
                alert(data);
                loadData();
            }
        });
    });

    //edit data mahasiswa
    $("#contentData").on("submit", "#formedit", function(e) {
        e.preventDefault();
        $.ajax({
            url: 'service.php?action=edit',
            type: 'post',
            data: $(this).serialize(),
            success: function(data) {
                alert(data);
                loadData();
            }
        });
    });

    //hapus data mahasiswa berdasarkan IdMhsw
    $("#contentData").on("click", "#DeleteButton", function() {
        var idlist = $(this).attr("value");
        $.ajax({
            url: 'service.php?action=delete',
            type: 'post',
            data: {
                idlist: idlist
            },
            success: function(data) {
                alert(data);
                loadData();
            }
        });
    });
})

function loadData() {
    $.ajax({
        url: 'data-playlist.php',
        type: 'get',
        success: function(data) {
            $('#contentData').html(data);
        }
    });
}