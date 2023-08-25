
//Notifkasi Tombol
const flashData = $('.flash-data').data('flashdata');

if (flashData) {
	Swal.fire({
	title: 'Berhasil!',
	text: flashData,
	icon: 'success'
	});
}


//Konfirmasi Hapus Data
$('.tombol-hapus').on('click', function (e) {
	e.preventDefault();
	const href = $(this).attr('href');
	const isiData = $(this).data('isiData');
	Swal.fire({
  		title: 'Apa Anda Yakin?',
 	 	text: 'Ingin Menghapus Data ini!',
  		icon: 'warning',
  		showCancelButton: true,
  		confirmButtonColor: '#3085d6',
  		cancelButtonColor: '#d33',
  		confirmButtonText: 'Iya, Hapus Data!'
	}).then((result) => {
  		if (result.isConfirmed) {
    		document.location.href = href;
    
  		}

	})
})

//Konfirmasi Hapus Data
$('.tombol-logout').on('click', function (e) {
	e.preventDefault();
	const href = $(this).attr('href');
	const isiData = $(this).data('isiData');
	Swal.fire({
  		title: 'Apa Anda Yakin?',
 	 	text: 'Ingin keluar dari sistem ini!',
  		icon: 'warning',
  		showCancelButton: true,
  		confirmButtonColor: '#3085d6',
  		cancelButtonColor: '#d33',
  		confirmButtonText: 'Iya, Keluar!'
	}).then((result) => {
  		if (result.isConfirmed) {
    		document.location.href = href;
    
  		}

	})
})