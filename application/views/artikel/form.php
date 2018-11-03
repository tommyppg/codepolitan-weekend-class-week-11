<!DOCTYPE html>
<html>
<head>
	<?php $this->load->view('partials/head'); ?>
</head>
<body>
	<?php $this->load->view('partials/menu'); ?>

	<h1>Form Artikel Saya</h1>
	<form action="<?php echo site_url('artikel/process'); ?>" method="POST">
		<table>
			<tr>
				<td>Judul Artikel</td>
				<td>:</td>
				<td><input type="text" name="judul_artikel" placeholder="judul_artikel" value="<?php echo isset($artikel_data) ? $artikel_data['judul_artikel'] : ''; ?>"></td>
			</tr>
			<tr>
				<td>Isi Artikel</td>
				<td>:</td>
				<td>
					<textarea name="isi_artikel"><?php echo isset($artikel_data) ? $artikel_data['isi_artikel'] : ''; ?></textarea>
				</td>
			</tr>
			<tr>
				<td>Author Artikel</td>
				<td>:</td>
				<td><input type="text" name="author_artikel" placeholder="author_artikel" value="<?php echo isset($artikel_data) ? $artikel_data['author_artikel'] : ''; ?>"></td>
			</tr>
			<tr>
				<td>ID Kategori</td>
				<td>:</td>
				<td>
					<select name="id_kategori">
						<option>-- Pilih Kategori --</option>
						<?php
							foreach($kategori_data as $kategori){
								
								//kondisi selected
								if(isset($artikel_data) && $artikel_data['id_kategori'] == $kategori['id_kategori']){
									$selected = 'selected';
								}else{
									$selected = '';
								}

								?>
								<option value="<?php echo $kategori['id_kategori']?>" <?php echo $selected; ?>>
									<?php echo $kategori['nama_kategori']?>
								</option>
								<?php
							}
						?>
					</select>
				</td>
			</tr>
			<tr>
				<td colspan="3">
					<input type="hidden" name="id_artikel" value="<?php echo isset($artikel_data) ? $artikel_data['id_artikel'] : ''; ?>">
					
					<input type="submit" name="submit" value="Simpan">
					<a href="<?php echo site_url('artikel'); ?>">Kembali</a>
				</td>
			</tr>
		</table>
	</form>

	<?php $this->load->view('partials/foot'); ?>
</body>
</html>