<!DOCTYPE html>
<html>
<head>
	<?php $this->load->view('partials/head'); ?>
</head>
<body>
	<div class="container">
		<?php $this->load->view('partials/menu'); ?>

		<h1>Form Artikel Saya</h1>
		<form action="<?php echo site_url('artikel/process'); ?>" method="POST">
			<div class="form-group">
				<label for="judul_artikel">Judul Artikel</label>
				<input type="text" class="form-control" name="judul_artikel" placeholder="judul_artikel" value="<?php echo isset($artikel_data) ? $artikel_data['judul_artikel'] : ''; ?>">
			</div>

			<div class="form-group">
				<label for="isi_artikel">Judul Artikel</label>
				<textarea class="form-control" name="isi_artikel"><?php echo isset($artikel_data) ? $artikel_data['isi_artikel'] : ''; ?></textarea>
			</div>

			<div class="form-group">
				<label for="author_artikel">Judul Artikel</label>
				<input class="form-control" type="text" name="author_artikel" placeholder="author_artikel" value="<?php echo isset($artikel_data) ? $artikel_data['author_artikel'] : ''; ?>">
			</div>

			<div class="form-group">
				<label for="author_artikel">ID Kategori</label>
				<select class="form-control" name="id_kategori">
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
			</div>

			<input type="hidden" name="id_artikel" value="<?php echo isset($artikel_data) ? $artikel_data['id_artikel'] : ''; ?>">
						
			<input class="btn btn-primary" type="submit" name="submit" value="Simpan">
			<a href="<?php echo site_url('artikel'); ?>">Kembali</a>

		</form>
	</div>

	<?php $this->load->view('partials/foot'); ?>
</body>
</html>