<!-- TODO: give path configuration for depannya href -->
<!-- TODO: buat tombol disabled kalo udah mentok hal pertama/terakhir -->
<!-- TODO:  Ketika memilih page, pengguna tidak diarahkan ke halaman baru, namun daftar lagu langsung berubah di halaman ini. -->
<div class="pagination-container">
	<div class="pagination" <?= $data['current_page'] == 1 ? "disabled" : "" ?>>
		<a href="<?= $base_url ?>/1">
			<button class="icon-button-outline">
				<svg width="24" height="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
					<path d="M14.82 2.82L12 0L0 12L12 24L14.82 21.18L5.66 12L14.82 2.82Z" />
					<path d="M24.64 2.82L21.82 0L9.82001 12L21.82 24L24.64 21.18L15.48 12L24.64 2.82Z" />
				</svg>
			</button>
		</a>
		<a href="<?= $base_url ?>/<?= max([$data['current_page'] - 1, 1]) ?>">
			<button class="icon-button-outline">
				<svg width="24" height="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
					<path d="M14.82 2.82L12 0L0 12L12 24L14.82 21.18L5.66 12L14.82 2.82Z" />
				</svg>
			</button>
		</a>
		<p>
			<?= $data['current_page']; ?> / <?= $data['total_page']; ?>
		</p>
		<a href="<?= $base_url ?>/<?= min([$data['current_page'] + 1, $data['total_page']]) ?>">
			<button class="icon-button-outline">
				<svg width="24" height="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
					<path d="M3.00005 0L0.180054 2.82L9.34005 12L0.180054 21.18L3.00005 24L15.0001 12L3.00005 0Z" />
				</svg>
			</button>
		</a>
		<a href="<?= $base_url ?>/<?= $data['total_page'] ?>">
			<button class="icon-button-outline">
				<svg width="24" height="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
					<path d="M2.82 0L0 2.82L9.16 12L0 21.18L2.82 24L14.82 12L2.82 0Z" />
					<path d="M12.6399 0L9.81995 2.82L18.9799 12L9.81995 21.18L12.6399 24L24.6399 12L12.6399 0Z" />
				</svg>
			</button>
		</a>
	</div>
</div>