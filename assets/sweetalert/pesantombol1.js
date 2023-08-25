const flashData = $('.flash-data').data('flashdata');
    if (flashData){
		Swal.fire({
			title: "Gagal!",
			text: flashData,
			icon: "error",
			button: "Ok!",
		});
    }

