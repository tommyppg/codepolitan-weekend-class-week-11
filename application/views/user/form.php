<!DOCTYPE html>
<html>
<head>
	<?php $this->load->view('partials/head'); ?>
</head>
<body>
	<?php $this->load->view('partials/menu'); ?>

	<h1>Form Artikel Saya</h1>
	<form action="<?php echo site_url('user/process'); ?>" method="POST">
		<table>
			<tr>
				<td>Nama Depan</td>
				<td>:</td>
				<td><input type="text" name="nama_depan" placeholder="nama_depan" value="<?php echo isset($user_data) ? $user_data['nama_depan'] : ''; ?>"></td>
			</tr>
			<tr>
				<td>Nama Belakang</td>
				<td>:</td>
				<td><input type="text" name="nama_belakang" placeholder="nama_belakang" value="<?php echo isset($user_data) ? $user_data['nama_belakang'] : ''; ?>"></td>
			</tr>
			<tr>
				<td>Username</td>
				<td>:</td>
				<td><input type="text" name="username" placeholder="username" value="<?php echo isset($user_data) ? $user_data['username'] : ''; ?>"></td>
			</tr>
			<tr>
				<td colspan="3">
					<input type="hidden" name="id_user" value="<?php echo isset($user_data) ? $user_data['id_user'] : ''; ?>">
					
					<input type="submit" name="submit" value="Simpan">
					<a href="<?php echo site_url('user'); ?>">Kembali</a>
				</td>
			</tr>
		</table>
	</form>

	<?php $this->load->view('partials/foot'); ?>
</body>
</html>