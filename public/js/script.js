$(function() {

    $('.tombolTambahData').on('click', function() {
        $('#formModalLabel').html('Tambah Data Mahasiswa');
        $('.modal-footer button[type-submit]').html('Tambah Data')
    });
   
   
   
    $('.tampilModalubah').on('click', function() {

        $('#formModalLabel').html('Ubah Data Mahasiswa');
        $('.modal-footer button[type-submit]').html('Ubah Data')
    
    });

});