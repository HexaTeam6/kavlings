const flashdata = $('.flash-data').data('flashdata');
console.log(flashdata);

if (flashdata == 'berhasil') {
	Swal.fire({
		title	: 'Login Berhasil!',
		text	: 'Anda berhasil login',
		icon	: 'success'
	});
}else if(flashdata == 'gagal'){
	Swal.fire({
		title	: 'Login Gagal!',
		text	: 'Username atau Password Anda Salah.',
		icon	: 'error'
	});
}else if(flashdata == 'tidak aktif'){
	Swal.fire({
		title	: 'Login Gagal!',
		text	: 'Maaf Akun Anda Sudah Tidak Aktif',
		icon	: 'error'
	});
}else if(flashdata == 'sudah login'){
	Swal.fire({
		title	: 'Proses Gagal',
		text	: 'Maaf Anda Sudah Login! Silahkan Logout Terlebih Dahulu',
		icon	: 'warning'
	});
}else if(flashdata == 'belum login'){
	Swal.fire({
		title	: 'Proses Gagal',
		text	: 'Maaf Anda Anda Belum Login! Silahkan Login Terlebih Dahulu',
		icon	: 'error'
	});
}